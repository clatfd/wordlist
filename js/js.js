// JavaScript Document

updown=2;	//0:up 1:down
lid=0;		//last id
lword="";	//last change group word eng
lrevword=0;//last review word id
lwpid=-1;//last word id in page. use in function looknextword()
undopid=-1;//last remove word in page
lchangrowd=-1;//last change group word
upnum=0;//recited num in this range
chitoeng=0;
refreshtimes=0;
var wdid;
var delenum;
var storelastdiv;

toastr.options.timeOut = 10000;
//toastr.options.progressBar = true; 
toastr.options.closeButton = true; 

if(window.localStorage)
	if(localStorage.getItem("rev")==null)
		localStorage.setItem("rev",0);

function lookwd(rid,chi,eng,pid)
{
	if($("#wdid"+delenum).length>0)		//exist
		wdid=$("#wdid"+delenum).text();
	if($(".list").size()==0){
		$("#wd"+rid).html("<p class=\"chispan\">"+chi+"</p>");
		$("#wd"+rid).append("<p class=\"engspan\">"+eng+"</p>");
	}
	else{
		$("#wd"+rid).html("<p class=\"engspan list\">"+eng+"</p>");
		$("#wd"+rid).append("<p class=\"chispan list\">"+chi+"</p>");
	}
	$("#wd"+rid).css({"text-decoration":"none",'font-weight' : 'bolder'});
	if(localStorage.getItem("rev")==0)
	{
		$("#wd"+rid).delay(3000);
		$("#wd"+rid).fadeTo("slow",0.01);
    	if(chitoeng){
			var s=setTimeout("dela("+rid+",'"+chi+"')",3500)	
    	}
    	else{
    		var s=setTimeout("dela("+rid+",'"+eng+"')",3500)	
    	}
	}
	if(chitoeng==1){
		$("#wd"+rid).next().find("span").css("display","inline-block");
	}
	delenum=parseInt($("#totnum").text())-1;
	lrevword=rid;
	lwpid=findclickposition();
}

function dela(rid,retdata)
{
	$("#wd"+rid).html(retdata);	
	$("#wd"+rid).fadeTo("slow",0.99);
}

function postu(rid,list,eng,chi,gro)
{
	// if(lchangrowd!=-1&&$("div[data-myorder="+lchangrowd+"]").length)
	// 	$("div[data-myorder="+lchangrowd+"]").remove();
	storelastdiv=$("[data-myorder="+rid+"]");
	$.ajax({url: "Up.php?list="+list+"&gro="+gro+"&id="+rid+"&eng="+eng+"&chi="+chi,success:function(){$(".mix[data-myorder="+rid+"]").animate({width:"0px",height:"0px"},500,"linear",function(){$("[data-myorder="+rid+"]").remove()})}});
	//$("#undo").fadeTo("slow",0.99).css("display","inline-block");
	$("#undo").fadeTo("slow",1);
	$("#undo").attr("disabled",false); 
	updown=0;
	lchangrowd=lid=rid;
	lword=eng;
	tnum=parseInt($("#totnum").text());
	$("#totnum").html(tnum-1);
	upnum++;
	if(upnum%10==0){
		toastr.success(upnum);
	}
	lwpid--;
	undopid=lwpid;
}

function postd(rid,list,eng,chi,gro)
{
	storelastdiv=$("[data-myorder="+rid+"]");
	$.ajax({url: "Down.php?list="+list+"&gro="+gro+"&id="+rid+"&eng="+eng+"&chi="+chi,success:function(){$(".mix[data-myorder="+rid+"]").animate({width:"0px",height:"0px"},500,"linear",function(){$("[data-myorder="+rid+"]").remove()})}});
	$("#undo").fadeTo("slow",1);
	$("#undo").attr("disabled",false); 
	updown=1;
	lchangrowd=lid=rid;
	lword=eng;
	tnum=parseInt($("#totnum").text());
	$("#totnum").html(tnum-1);
	lwpid--;
	undopid=lwpid;
}

function removeword(rid){
	storelastdiv=$("[data-myorder="+rid+"]");
	$(".mix[data-myorder="+rid+"]").animate({width:"0px",height:"0px"},500,"linear",function(){$("[data-myorder="+rid+"]").remove()});
	$("#undo").fadeTo("slow",1);
	$("#undo").attr("disabled",false); 
	tnum=parseInt($("#totnum").text());
	$("#totnum").html(tnum-1);
	lwpid--;
	undopid=lwpid;
}

function undo(list,location)
{
	if(updown==0)
		$.ajax({url: "Undo.php?list="+list+"&id="+lid+"&eng="+lword+"&action=undo&dire=down"});
	if(updown==1)
		$.ajax({url: "Undo.php?list="+list+"&id="+lid+"&eng="+lword+"&action=undo&dire=up"});
	//$("#undo").fadeTo("slow",0.01).css("display","none");
	$("#undo").attr("disabled",true);
	$("#undo").fadeTo("slow",0.01); 
	$("div.mix").eq(undopid+1).before(storelastdiv);
	storelastdiv.removeAttr("style");
	storelastdiv.css("display","inline-block");
	lid=0;
	updown=2;
	if(location=="default")
	{
		tnum=Number($("#totnum").text());
		$("#totnum").html(tnum+1);
		tnum+=1;
	}
	lwpid++;
}

function funlastreviewwords(){
	if(lrevword){
		eng=$("#wddiv"+lrevword).attr("eng");
		chi=$("#wddiv"+lrevword).attr("chi");
		rec=$("#wddiv"+lrevword).attr("rec");
		if(rec[0]=='['||rec[0]=='/')
			rec=rec.slice(1,rec.length-1);
	   	toastr.success('<p><strong>'+eng+'</p><p>'+chi+'</p><p>/'+rec+'/</strong></p>');
	}
	else{
		toastr.warning('<p><strong>No word clicked!</strong></p>');
	}

}

function revall()
{
	if(localStorage.getItem("rev")==0)
	{
		$("#reviewmodespan").append("Review ");
		// rev=1;
		localStorage.setItem("rev",1);
		toastr.info("Review Mode is ON");
	}
	else if(localStorage.getItem("rev")==1)
	{	$("#reviewmodespan").html("");
		// rev=0;
		localStorage.setItem("rev",0);
		toastr.info("Review Mode is OFF");
	}
}

function examremove(j,rid,list,eng,chi,gro)
{

//	$("#wd"+rid).html(chi);
	//$("#wd"+rid).append("<br/>"+eng);
	//$("#wd"+rid).css({"color":"#0000ff","text-decoration":"none","background-color":"yellow",'font-weight' : 'bolder'});
	//$("#wd"+rid).delay(200);
	//$("#wd"+rid).fadeTo("fast",0.01);
	var s=setTimeout("removej("+j+")",10)
	
}

function totalnumsubone()
{
	tnum=Number($("#totnum").text());
	$("#totnum").text(tnum-1);
}

function showall(idlo,idup)
{
	$(".wdeng").click()
	// for(i=idlo;i<=idup;i++)
	// 	$("#wd"+i).click();
}

function funchitoeng()
{
	lwpid=0;
	if(chitoeng==0)
	{
		$("#chitoengmodespan").append("&nbsp;Chi");
		chitoeng=1;
		for(i=parseInt(getPar('idlo'));i<=parseInt(getPar('idup'));i++){
			eng=$("#wd"+i);
			if(eng.length>0){
				$("#wd"+i).html($("#wddiv"+i).attr("chi"));
				$(".recspan").css("display","none");
			}
		}
	}
	else if(chitoeng==1)
	{	
		$("#chitoengmodespan").html("");
		chitoeng=0;
		for(i=parseInt(getPar('idlo'));i<=parseInt(getPar('idup'));i++){
			eng=$("#wd"+i);
			if(eng.length>0){
				$("#wd"+i).html($("#wddiv"+i).attr("eng"));
				$(".recspan").css("display","inline-block");
			}
		}
	}		
}

function funchitoengexam(){
	chitoeng=!chitoeng;
	changewdlist('exam');
}

//dict.cn recources
function findsound(word){
	$.ajax({
		url: "curldict.php?word="+word, 
		success: function (data){
			sounddata=JSON.parse(data);
			if(sounddata.result==1&&sounddata.americasound!='no_such_sound')
				asplay(word,"http://audio.dict.cn/"+sounddata.americasound);
			else
				toastr.warning('<p><strong>No Such Word!</strong></p>');
		}
	});

}

function findclickposition(){
	for(i=0;i<$("div.wdeng").length;i++){
		if($(".divgrid").eq(i).attr("id").slice(5)==lrevword)
			return i;
	}
	return -1;
}
function looknextword(){
	currentposition=lwpid+1;//findclickposition()+1;
	if(currentposition>=$("div.wdeng").length)
		currentposition=0;
	$("div.wdeng").eq(currentposition).click();
}
function showstatis(){
	currentnum=parseInt($("#totnum").text());
	toastr.info("Statics:"+upnum+"/"+(currentnum+upnum)+"--"+(upnum/(currentnum+upnum)*100).toFixed(2)+"%")
}
function changetolist(){
	totnum=parseInt($("#totnum").text());
	if($(".list").size()==0){
		$(".divgrid").addClass("list");
		$(".divgrid").children().addClass("list");
		$(".wdeng").children().addClass("list");
		$(".sandbox").addClass("list");
		$("#showmodebtn").children().removeClass("glyphicon-th-list").addClass("glyphicon-th-large");
	}
	else{
		$("#showmodebtn").children().removeClass("glyphicon-th-large").addClass("glyphicon-th-list");
		$(".divgrid").removeClass("list");
		$(".wdeng").children().removeClass("list");
		$(".sandbox").removeClass("list");
		$(".divgrid").children().removeClass("list");
	}
}

function retrievelist(){
	var newhref="twig.php?list="+getCookie("list")+"&gro="+getCookie("gro")+"&idlo="+getCookie("idlo")+"&idup="+getCookie("idup")+"&rd="+getCookie("rd");
	document.location=newhref;

	//var chhref=setTimeout(function(){history.pushState({},"",newhref)},1000);
}
function impspancontrol(id){
	if($("#impspan"+id).css("display")=='inline-block'){
		$("#impspan"+id).animate({width:"0px"},100,"linear",function(){$("#impspan"+id).css("display","none")});
	}
	else if($("#impspan"+id).css("display")=='none'){
		$("#impspan"+id).css("display","inline-block");
		$("#impspan"+id).animate({width:"90px",height:"22px"},100,"linear");
	}
}

function impadjust(id,implist)
{
	if(implist!='imp'){
		databaselistname='i_'+implist;
	}
	else
		databaselistname=implist;
	if($("#impspan"+id).find(".remove"+implist).length){	//remove existed
		$.ajax({
			url: "dele.php?list="+databaselistname+"&eng="+$("#wddiv"+id).attr("eng"),
			success: function (){
				
				$("#impspan"+id).find(".remove"+implist).removeClass("remove"+implist).addClass("add"+implist);
				$("#wddiv"+id).parent().removeClass("category-"+implist);
				if(!$("#impspan"+id).find(".removeimp").length&&!$("#impspan"+id).find(".removemnf").length&&!$("#impspan"+id).find(".removeivt").length){
					$("#implabel"+id).removeClass("glyphicon-star").addClass("glyphicon-plus");
					$("#impspan"+id).animate({width:"0px"},200,"linear",function(){$("#impspan"+id).css("display","none")});
					$("#impspan"+id).find(".remove"+implist).addClass("category-common");
				}
				toastr.info($("#wddiv"+id).attr("eng")+" has been removed from "+implist);
			}
		});
	}
	else if($("#impspan"+id).find(".add"+implist).length){	//add new
		$.ajax({
			url: "addtoimp.php?ins="+databaselistname+"&list="+$("#formlist").val()+"&gro="+$("#wddiv"+id).attr("gro")+"&eng="+$("#wddiv"+id).attr("eng")+"&chi="+$("#wddiv"+id).attr("chi")+"&rec="+$("#wddiv"+id).attr("rec"),
			success: function (){
				$("#implabel"+id).removeClass("glyphicon-plus").addClass("glyphicon-star");
				$("#impspan"+id).find(".add"+implist).removeClass("add"+implist).addClass("remove"+implist);
				$("#impspan"+id).animate({width:"0px"},200,"linear",function(){$("#impspan"+id).css("display","none")});
				$("#wddiv"+id).parent().removeClass("category-common").addClass("category-"+implist);
				toastr.info($("#wddiv"+id).attr("eng")+" has been added into "+implist);
			}
		});
	}
}

//local resources
function looksound(eng)
{
	sdsrc="../sound/"+eng+".mp3";
	asplay(sdsrc);
}
function mdclearfix(){
	$(".chispan").remove('');
	var sc=setTimeout('mdclearfixdelay()',1000);
}
function mdclearfixdelay(){
	$("div.clearfix").remove();
	for(mixnum=0;mixnum<$("div.mix").length;mixnum++){
		if(mixnum%4==3){
			$("div.mix").eq(mixnum).after('<div class="clearfix visible-lg"></div>');
		}
		if(mixnum%3==2){
			$("div.mix").eq(mixnum).after('<div class="clearfix visible-md"></div>');
		}
	}
	
}
function manconsole(list)
{
	if($("#manconsolediv").length>0){
		$("#manconsolediv").remove();
	}
	//alert(tmp.x+"+"+tmp.y)
	//alert(tmp.id.substring(6))
	$("body").attr("onkeyup","");
	$("#manconsole").attr("onclick","clearmc('"+list+"')");
	eng="";
	if(lrevword){
		eng=$("#wddiv"+lrevword).attr("eng");
	}
	$("body")
		.append(
			$("<div/>")
			.attr('id','manconsolediv')
			//.css("left",tmp.x-175+"px")
			.css("top",scrollY+300+"px")
			.append("<div id='manconsoledivhead'><b>manual console</b></div><br/><select value='action' id='mcactionselect' onchange='manconsolechange()'><option>add</option><option>delete</option><option>update</option></select> list:<input id='mclist' name='mclist' type='text' value='' onchange='onchangemcdivcheckinfo()'/> eng<input id='mceng' name='mceng' value='"+eng+"'type='text' onchange='onchangemcdivcheckinfo()'autofocus/><br/> <span id='deleremove'>id:<input id='mcid' name='mcid' type='text' /> rec:<input id='mcrec' name='mcrec' type='text' /> gro:<input id='mcgro' name='mcgro' type='text' /> <br/>chi:<input id='mcchi' name='mcchi' type='text' size='100'/></span><br/><button id='mcsubmit' onclick='mcsubmit()'>mcsubmit</button> <button onclick='clearmc(\""+list+"\")'>cancel</button><br/> ")
			
				)
	$("#mceng")[0].focus();//not $("#mceng").focus(); in which case trigger onfocus function
	$("#mclist").attr('value',list);
	if(lrevword)
		onchangemcdivcheckinfo();
	move("manconsoledivhead","manconsolediv");
}

function clearmc(list)
{
	$("#manconsolediv").remove();
	$("body").attr("onkeyup","whichButton(event)");
	$("#manconsole").attr("onclick","manconsole('"+list+"')")
}

function manconsolechange()
{
	//alert("change");
	var selecttype=$("#mcactionselect").val();
	if(selecttype=='delete')
	{
		$("#deleremove").css("display","none");
	}
	if(selecttype=='update')
	{
		$("#deleremove").css("display","inline-block");
		$("#mceng")[0].focus();
		$("#mceng").attr("onchange","onchangemcdivgetinfo()");
		$("#mcid").attr("disabled",true);
	}
	if(selecttype=='add')
	{
		$("#deleremove").css("display","inline-block");
		$("#mceng")[0].focus();
		$("#mceng").attr("onchange","onchangemcdivcheckinfo()");
		
	}
}

function mcsubmit()
{

	tlist=$("#mclist").val();
	teng=$("#mceng").val();
	tid=$("#mcid").val();
	trec=$("#mcrec").val();
	tchi=$("#mcchi").val();
	
	tchi=urlfit(tchi);

	lrevword=tid;
	//tgro=getPar('gro');
	tgro=$("#mcgro").val();
	
	$("#wd"+lrevword).find("p.engspan").html(teng);
	$("#wd"+lrevword).find("p.chispan").html(tchi);

	var selecttype=$("#mcactionselect").val();
	if(selecttype=='delete')
	{
		//alert(teng);
		$.ajax({url: "dele.php?list="+tlist+"&eng="+teng,success: function (){
																				toastr.info(teng+" has been removed from "+tlist);
																				clearmc(tlist);
																				//funlastreviewwords();						
																			}
		});
	}
	if(selecttype=='update')
	{
		$.ajax({url: "update.php?list="+tlist+"&eng="+teng+"&id="+tid+"&gro="+tgro+"&chi="+tchi+"&rec="+trec,success: function (){
				//alert(teng+" has been updated");
				clearmc(tlist);
				if($("#wd"+tid).length){
					$("#wd"+tid).attr("onclick","lookwd("+tid+",'"+tchi+"','"+teng+"',"+tgro+")");	
					$("#wddiv"+tid).attr("chi",tchi);
					$("#wddiv"+tid).attr("rec",trec);
					$("#wddiv"+tid).attr("gro",tgro);
					$("#wddiv"+tid).find(".recspan").html(tgro+"&nbsp;"+trec+"&nbsp;");
					funlastreviewwords();	
				}
				lrevword=0;
			}
		});
		
	}
	if(selecttype=='add')
	{
	$.ajax({url: "addnew.php?list="+tlist+"&eng="+teng+"&id="+tid+"&gro="+tgro+"&chi="+tchi+"&rec="+trec,success: function (){
				toastr.success(teng+" has been added");
				clearmc(tlist);
				lrevword=0;
			}
		});
		
	}
}

function onchangemcdivgetinfo()
{
	tlist=$("#mclist").val();
	teng=$("#mceng").val();
	tid=$("#mcid").val();
	//tgro=getPar('gro');
	tgro=$("#wd"+tid).parent().attr("gro");
	$.ajax({url: "getinfo.php?list="+tlist+"&eng="+teng,
			   success: function (r){
				   phpdata=JSON.parse(r);
				 //  for (x in phpdata){alert(phpdata[x])}
 
				   	if(phpdata.chi=="null"){
				   		$("#mcactionselect").val('add');
				   		$("#mcactionselect").change();
				   		manconsolechange();
				   		$("#mceng").change();
				   	}
				   	else
				   	{
					   $("#mcchi").val(phpdata.chi);
					   $("#mcgro").val(phpdata.gro);
					   $("#mcrec").val(phpdata.rec);
					   $("#mcid").val(phpdata.id);
					   if(!phpdata.rec){
					   	curlwordinfo();
					   }
				   	}
				}
	});
}

function onchangemcdivcheckinfo()
{
	tlist=$("#mclist").val();
	teng=$("#mceng").val();	
	$.ajax({
		url: "getnextid.php?list="+tlist+"&eng="+teng,
		success: function (r){
					if(r=="R"){
						$("#mcactionselect").val('update');
						manconsolechange();
						onchangemcdivgetinfo();
					}
					else{
						maxid=r;
						$("#mcid").val(maxid);
						$("#mcid").attr("disabled",true);
						$("#mcgro").val('1');
						$("#mcrec").val('');
						$("#mcchi").val('');
						curlwordinfo();
					}
			   //alert(r);
			   }
		   });
}
function curlwordinfo(){
	$.ajax({
		url: "curldict.php?word="+teng, 
		success: function (data){
			recdata=JSON.parse(data);
			if(recdata.result==1){
				if($("#mcrec").val()==''){
					if(recdata.americarec!='no_such_rec')
						$("#mcrec").val(recdata.americarec);
					else{
						$("#mcrec").val('');
						toastr.info(recdata.americarec);
					}
				}
				if($("#mcchi").val()==''){
					if(recdata.chi!='no_such_chi')
						$("#mcchi").val(recdata.chi);
					else{
						$("#mcchi").val('');
						toastr.info(recdata.chi);
					}
				}
				
				//$("#mcgro").val(getPar('gro'));
			}
			else{
				toastr.info('No_such_word');
				$("#mcrec").val('');
				$("#mcgro").val('');
				$("#mcchi").val('');
			}

		}
	});
}

function subrefreshtimes()
{
	if(refreshtimes>1)
	{
		refreshtimes-=2;
		tnum=Number($("#totnum").text());
		$("#totnum").text(tnum+2);
		refreshexamwd();
	}
}

function refreshexamwd()
{
	$(".adddiv").remove();
	times=parseInt($("#skiptimes").val());
	
	if(times){
		if(Number($("#totnum").text())-times<0)
		{
			$("#skiptimesbutton").attr("disabled",true);
			$("#skiptimes").val("");
			return;
		}
		refreshtimes=refreshtimes+times-1;
		$("#totnum").text(Number($("#totnum").text())-times);
	}
	else{
		if(refreshtimes>0){
			tnum=Number($("#totnum").text());
			$("#totnum").text(tnum-1);
		}
	}
	if(refreshtimes<wdlist.length){
		$("#skiptimesbutton").attr("disabled",false);
		t=refreshtimes;

		rid=wdlist[t][0];
		list=$("#formlist").val();
		eng=wdlist[t][1];
		chi=wdlist[t][3];
		rec=wdlist[t][2];
		gro=$("#formgro").val();
		if(chitoeng){
			$("#examwd").html(chi);
		}
		else{
			$("#examwd").html(eng);
		}
		$(".wddiv").attr("id","wddiv"+rid);
		$(".wddiv").attr("chi",chi);
		$(".wddiv").attr("eng",eng);
		$(".wddiv").attr("gro",gro);
		$(".wddiv").attr("rec",rec);
		$("#examtdrec").text(rec);
		$(".searchdict").attr("onclick","searchdict('"+eng+"')");
		$(".searchvoice").attr("onclick","findsound('"+eng+"')");
		$(".addweb").attr("onclick","addwdwebbyid('"+rid+"')");
		$(".recspan").attr("onclick","queryhist('"+eng+"')");

		if(jQuery.inArray(eng,impwdlist[0])==-1)
		{
			$(".removeimp").removeClass("removeimp");
		}
		else
		{
			$(".addimp").addClass("removemfl");
		}
		

		$("#examwd").attr("onclick",'$("#examwd").html("'+chi+'<br/>'+eng+'")');
		$(".glyphicon-chevron-up").attr("onclick","postu("+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+")");
		$(".glyphicon-chevron-down").attr("onclick","postd("+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+")");
		$("#skipbutton").attr("onclick","refreshexamwd()");
		$("#spansubone").attr("onclick","totalnumsubone()");

		
		
	}
	else
	{
		$("#skiptimesbutton").attr("disabled",true);
		$("#skiptimes").val("");
		$("#examwd").text("end!");
		$("#examtdrec").text("");
		$("#examwd").removeAttr("onclick");
		$("#skipbutton").removeAttr("onclick");
		$("#spanskipbutton").removeAttr("onclick");
		$("#spansubone").removeAttr("onclick");
		$(".glyphicon-chevron-up").removeAttr("onclick");
		$(".glyphicon-chevron-down").removeAttr("onclick");
		
	}
	refreshtimes++;
}

function getimpwdlist()
{
	$.ajax({url: "getimpwdlist.php",
		   async :false,
		   success: function (r){
			   					impwdlist=JSON.parse(r);
								//alert(impwdlist);
							 }
     });
//alert(impwdlist);
}

function initialforwdlist()
{
	$("select[name=list]").val(localStorage.getItem('clist'));
	$("select[name=gro]").val(localStorage.getItem('cgro'));
	$("#formidlo").val(localStorage.getItem('cidlo'));
	$("#formidup").val(localStorage.getItem('cidup'));
	refreshtimes=0;
	$.ajax({url: "getwdlist.php?list="+localStorage.getItem('clist')+"&idlo="+localStorage.getItem('cidlo')+"&idup="+localStorage.getItem('cidup')+"&gro="+localStorage.getItem('cgro'),
		success: function (r){

			   					wdlist=JSON.parse(r);
								//alert(wdlist);
								getimpwdlist();
								$("#totnum").text(wdlist.length);
								$("#totnumlength").text(wdlist.length);
								shuffle(wdlist);
								refreshexamwd();
							 }
     });
}

function changewdlist(){

	if(localStorage.getItem("cidup")==null){
		localStorage.setItem("clist","imp");
		localStorage.setItem("cgro","1");
		localStorage.setItem("cidlo","0");
		localStorage.setItem("cidup","100");
	}
	
	clist=$("#formlist").val();
	cgro=$("#formgro").val();
	cidlo=$("#formidlo").val();
	if(cidlo<1)
		cidlo=1;
	cidup=$("#formidup").val();
	
	localStorage.setItem("clist",clist);
	localStorage.setItem("cgro",cgro);
	localStorage.setItem("cidlo",cidlo);
	localStorage.setItem("cidup",cidup);
	
	refreshtimes=0;
	initialforwdlist();
	
	$("#totnum").text(wdlist.length)   
	$("#skiptimesbutton").attr("disabled",false);
}

function refreshlistwd()
{
	inputdata="<tr>";
	for (t in wdlist)
	{
		
		
		if(t%5==0&&t>0)	
		{
			inputdata=inputdata+"</tr><tr>";
		}
		rid=wdlist[t][0];
		list=$("#formlist").val();
		eng=wdlist[t][1];
		chi=wdlist[t][3];
		rec=wdlist[t][2];
		gro=$("#formgro").val();
		
		inputdata=inputdata+"<td> <table width=\"250\" cellspacing=\"0\" cellpadding=\"0\" id=\"listtb"+(parseInt(t)+1)+"\"><tr><td height=\"70\"  align=\"center\" valign=\"middle\" id=\"wd"+(parseInt(t)+1)+"\">"+rid+" "+eng+" </td></tr><tr><td height=\"40\" align=\"center\" valign=\"middle\" id=\"recp"+(parseInt(t)+1)+"\">&nbsp;"+rec+"<a href=\"http://dict.cn/"+eng+"\" target=\"_blank\"><img src=\"images/favicon.ico\" /></a>&nbsp;<span id=\"listrecunrimg"+(parseInt(t)+1)+"\"></span></td></tr></table></td>";
	}
	$("#listinput").html(inputdata);
	
	for (t in wdlist)
		{
			eng=wdlist[t][1];
		chi=wdlist[t][3];
		rec=wdlist[t][2];
		
		document.getElementById("wd"+(parseInt(t)+1)).onclick=function(){
			eng=wdlist[(parseInt(this.id.substring(2))-1)][1];
		chi=wdlist[(parseInt(this.id.substring(2))-1)][3];
		eval("lookwd("+this.id.substring(2)+",'"+chi+"','"+eng+"')");};
		

	if(jQuery.inArray(eng,impwdlist[0])==-1)
	{
		$("#listrecunrimg"+(parseInt(t)+1)).html("<img id='recimg"+(parseInt(t)+1)+"' src='images/unr.png' />");
	}
	else
	{
		$("#listrecunrimg"+(parseInt(t)+1)).html("<img id='recimg"+(parseInt(t)+1)+"' src='images/rec.png' />");
	}
	listrecbuttonposition=new Object();;
	listrecbuttonposition.x=$("#recimg"+(parseInt(t)+1)).position().left+25;
	listrecbuttonposition.y=$("#recimg"+(parseInt(t)+1)).position().top+35;
	$("#recimg"+(parseInt(t)+1)).attr("onclick","addtoimp(listrecbuttonposition,"+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+",'"+rec+"')");
	
	
	}
	
}

function output()
{	
	//$(".progress-bar*").addClass("progress-bar-danger").css("width","5%");
	toastr.success("Is to export! Please wait! Click to continue!");
	//$(".progress-bar*").removeClass("progress-bar-danger").addClass("progress-bar-info").animate({width:"90%"},20000);
	$.ajax({url: "printimpwdlist.php",
			async :false,
			success: function (){
				   					
				   					toastr.success("imp wdlist has been exported!");
								 }
	});

	$.ajax({url: "printallwdlist.php",
		async :false,
		success: function (){
			   					toastr.success("wdlist has been exported!");
			   					//$(".progress-bar*").css("width","100%");
				   				//$(".progress-bar*").removeClass("progress-bar-info").addClass("progress-bar-success").css("width","100%");	
							 }
    });
	
		

}

function getmodifydate()
{
	$("#dateinput").append("Created date："+wdalllist.datecreated);
}

function queryhist(eng){
	$.ajax({url: "queryhist.php?eng="+eng,
		success: function (r){
			   					histres=JSON.parse(r);
								if(histres.status){
									histlist=histres.histdata;
									for (x in histlist) {
										if(histlist[x].action=='up')
											toastr.success("<p>Up</p><p>"+histlist[x].list+": "+histlist[x].grofrom+" to "+histlist[x].groto+" on "+histlist[x].date+"</p>");
										else if(histlist[x].action=='down')
											toastr.warning("<p>Down</p><p>"+histlist[x].list+": "+histlist[x].grofrom+" to "+histlist[x].groto+" on "+histlist[x].date+"</p>");

									}
								}
								else
									toastr.info("No history for "+eng);
								
							 }
    });
}

function searchdict(word){
	$.ajax({
		url: "curldict.php?word="+word, 
		success: function (data){
			curldata=JSON.parse(data);
			if(curldata.result==1&&curldata.chi!=''){
			
				toastr.info("<p><strong>"+word+"</strong></p><p><a href=\"http://dict.cn/"+word+"\" target=\"_blank\">"+curldata.chi+"</a></p><p onmouseover='showexample()'>Example</p>"+curldata.example);
			}
			else
				toastr.warning('<p><strong>No Such Word!</strong></p>');
		}
	});
}

function showexample(){
	$(".curldictexample").css("display","inline-block");
}
//in js_addfunction.js
//functionasplay(mp3);
//function sop(Obj) //show object property
//function getPar(par)
//shuffle = function(o){ 
//urlfit(str)
function addweb(){
	wlist=$(".divgrid");
	for (x=0;x<wlist.length;x++){
		addwdweb(wlist.eq(x).attr("eng"),wlist.eq(x).attr("chi"),wlist.eq(x).attr("rec"));
	}
}
function addwdwebbyid(id){
	eng=$("#wddiv"+id).attr("eng");
	chi=$("#wddiv"+id).attr("chi");
	rec=$("#wddiv"+id).attr("rec");
	//alert("eng="+eng+"&chi="+chi+"&rec="+rec);
	$.getJSON("http://104.131.150.53/api/api.php?eng="+eng+"&chi="+chi+"&rec="+rec+"&callback=?",
		function(){
			toastr.info("<p><strong>"+eng+"</strong> has been added to web server!</p>");
			impspancontrol(id);
		});
}
function addwdweb(eng,chi,rec){
	$.getJSON("http://104.131.150.53/api/api.php?eng="+eng+"&chi="+chi+"&rec="+rec+"&callback=?",
		function(){
			toastr.info("<p><strong>"+eng+"</strong> has been added to web server!</p>");
		});
	// 	success: function (data){
	// 		data=JSON.parse(data);
	// 		if(data.status==1){
	// 			toastr.info("<p><strong>"+eng+"</strong> has been added to web server!</p>");
	// 		}
	// 		else
	// 			toastr.warning('<p><strong>Network Error!</strong></p>');
	// 	}
}
