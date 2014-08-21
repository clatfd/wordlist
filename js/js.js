// JavaScript Document

updown=2;	//0:up 1:down
lid=0;		//last id
lword="";	//last change group word eng
lrevword=0;//last review word id
lwpid=0;//last word id in page. use in function looknextword()
lchangrowd=-1;//last change group word
upnum=0;//recited num in this range
chitoeng=0;
var wdid;
var delenum;
var storelastdiv;

if(window.localStorage)
	if(localStorage.getItem("rev")==null)
		localStorage.setItem("rev",0);

function lookwd(rid,chi,eng,pid)
{
	lrevword=rid;
	lwpid=pid+1;
	delenum=parseInt($("#totnum").text())-1;
	if($("#wdid"+delenum).length>0)		//exist
		wdid=$("#wdid"+delenum).text();
	if($(".list").size()==0){
		$("#wd"+rid).html("<p class=\"chispan\">"+chi+"</p>");
		$("#wd"+rid).append("<p class=\"engspan\">"+eng+"</p>");
	}
	else{
		$("#wd"+rid).html("<p class=\"listeng\">"+eng+"</p>");
		$("#wd"+rid).append("<p class=\"listchi\">"+chi+"</p>");
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
}
function removeword(rid){
	storelastdiv=$("[data-myorder="+rid+"]");
	$(".mix[data-myorder="+rid+"]").animate({width:"0px",height:"0px"},500,"linear",function(){$("[data-myorder="+rid+"]").remove()});
	$("#undo").fadeTo("slow",1);
	$("#undo").attr("disabled",false); 
	tnum=parseInt($("#totnum").text());
	$("#totnum").html(tnum-1);
}

function undo(list,location)
{
	if(updown==0)
		$.ajax({url: "Undo.php?list="+list+"&id="+lid+"&eng="+lword+"&action=undo&dire=down"});
	if(updown==1)
		$.ajax({url: "Undo.php?list="+list+"&id="+lid+"&eng="+lword+"&action=undo&dire=up"});
	//$("#undo").fadeTo("slow",0.01).css("display","none");
	$("#undo").attr("disabled",true);
	$("#undo").fadeTo("slow",0.3); 
	$("div.sandbox").find("div.row").append(storelastdiv);
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
}

function funlastreviewwords(){
	if(lrevword){
		eng=$("#impunr"+lrevword).attr("onclick").split("','")[1];//eng
		var eng, chi,rec;
		$.ajax({url: "getinfo.php?list="+getPar("list")+"&eng="+eng,
			   	success: function (r){
				   phpdata=JSON.parse(r);
				 //  for (x in phpdata){alert(phpdata[x])}
 
				   	if(phpdata.chi=="null"){
				   		toastr.warning("no_such_word!!");
				   		
					}
				   	else{
						chi=phpdata.chi;
						gro=phpdata.gro;
					   	rec=phpdata.rec;
					   	toastr.options.timeOut=10000;
					   	toastr.success('<p><strong>'+eng+'</p><p>'+chi+'</p><p> '+rec+' </strong></p>');
				   	}
				}
			});
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
		for(i=getPar('idlo');i<=getPar('idup');i++){
			eng=$("#wd"+i);
			if(eng.length>0){
				$("#wd"+i).html(eng.attr("onclick").split(",'")[1].slice(0,-1));//get chi
				$(".recspan").css("display","none");
			}
		}
	}
	else if(chitoeng==1)
	{	
		$("#chitoengmodespan").html("");
		chitoeng=0;
		for(i=getPar('idlo');i<=getPar('idup');i++){
			eng=$("#wd"+i);
			if(eng.length>0){
				$("#wd"+i).html(eng.attr("onclick").split("',")[1].slice(1));//get eng
				$(".recspan").css("display","inline-block");
			}
		}
	}		
}

function funchitoengexam(){
	chitoeng=!chitoeng;
	changewdlist('exam');
}

function looknextword(){
	
	if(lwpid-upnum>=$("div.wdeng").length)
		lwpid=upnum;
	$("div.wdeng")[lwpid-upnum].click();
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
		$(".sandbox").addClass("list");
		$("#showmodebtn").children().removeClass("glyphicon-th-list").addClass("glyphicon-th-large");
	}
	else{
		$("#showmodebtn").children().removeClass("glyphicon-th-large").addClass("glyphicon-th-list");
		$(".divgrid").removeClass("list");
		$(".sandbox").removeClass("list");
		$(".divgrid").children().removeClass("list");
	}
}

function addtoimpold(rid,list,eng,chi,gro,rec)
{
	$.ajax({url: "addtoimp.php?list="+list+"&gro="+gro+"&eng="+eng+"&chi="+chi+"&rec="+rec, success: function (){$("#impunr"+rid).attr("src","images/rec.png");$("#impunr"+rid).removeAttr("onclick");}});
}

function addtoimp(tmp,rid,list,eng,chi,gro,rec)
{
	//ShowObjProperty(tmp);
	
	//alert(tmp.x+"+"+tmp.y)
	//alert(tmp.id.substring(6))
	if($(".adddiv").length==1)
		$(".adddiv").remove();
	$("body")
		.append(
			$("<div/>")
			.addClass("adddiv")
			.attr('id','adddiv'+rid)
			.css("left",tmp.x+80+"px")
			.css("top",tmp.y+55+"px")
			.css("font",'white')
			.append("into_important:<input id='impcheckboximp' type='checkbox' value='imp'>	<br/> into_meaningful:<input id='impcheckboxmfl' type='checkbox' value='i_mfl'> <br/>			 into_inveterate:<input id='impcheckboxivt' type='checkbox' value='i_ivt'> <br/> ")
			.append(
					$("<button />")
					.text("确认添加")
					.addClass("btn btn-primary")
					.click(function()
							{	
								var tarr = document.getElementsByTagName("input");
								for(var i=0;i<tarr.length;i++)
								{
									if(tarr[i].type == "checkbox" && tarr[i].checked)
									{
										$.ajax({url: "addtoimp.php?ins="+tarr[i].value+"&list="+list+"&gro="+gro+"&eng="+eng+"&chi="+chi+"&rec="+rec, success: function (){$("#impunr"+rid).attr("src","images/rec.png");$("#wdtb"+rid).parent().addClass("category-imp")}});
										//$("#impunr"+rid).removeAttr("onclick");
									}
									if(tarr[i].type == "checkbox" && tarr[i].checked==0)
									{
										$.ajax({url: "dele.php?list="+tarr[i].value+"&eng="+eng,success: function (){}});
																												   //alert(eng+"has been removed from"+tarr[i].value);}
																												  
									}
								}
								$("#adddiv"+rid).remove();
							}
						 )
				   )
				)
	if(jQuery.inArray(eng,impwdlist[1])!=-1)
		$("#impcheckboximp").attr("checked","");
	if(jQuery.inArray(eng,impwdlist[2])!=-1)
		$("#impcheckboxmfl").attr("checked","");
	if(jQuery.inArray(eng,impwdlist[3])!=-1)
		$("#impcheckboxivt").attr("checked","");	

}

function looksound(eng)
{
	sdsrc="../sound/"+eng+".mp3";
	//alert(sdsrc)
	asplay(sdsrc);
}
function mdclearfix(){
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
	if(lrevword)
		eng=$("#impunr"+lrevword).attr("onclick").split("','")[1];
	$("body")
		.append(
			$("<div/>")
			.attr('id','manconsolediv')
			//.css("left",tmp.x-175+"px")
			.css("top",scrollY+300+"px")
			.append("<div id='manconsoledivhead'><b>manual console</b></div><br/><select value='action' id='mcactionselect' onchange='manconsolechange()'><option>add</option><option>delete</option><option>update</option></select> list:<input id='mclist' name='mclist' type='text' value='' /> eng<input id='mceng' name='mceng' value='"+eng+"'type='text' onchange='onchangemcdivcheckinfo()'autofocus/><br/> <span id='deleremove'>id:<input id='mcid' name='mcid' type='text' /> rec:<input id='mcrec' name='mcrec' type='text' /> gro:<input id='mcgro' name='mcgro' type='text' /> <br/>chi:<input id='mcchi' name='mcchi' type='text' size='100'/></span><br/><button id='mcsubmit' onclick='mcsubmit()'>mcsubmit</button> <button onclick='clearmc(\""+list+"\")'>cancel</button><br/> ")
			
				)
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
	var selecttype=$("#mcactionselect").attr('value');
	if(selecttype=='delete')
	{
		$("#deleremove").html("");
	}
	if(selecttype=='update')
	{
		$("#deleremove").html("id:<input id='mcid' name='mcid' type='text' />  rec:<input id='mcrec' name='mcrec' type='text' /> gro:<input id='mcgro' name='mcgro' type='text' /> <br/>chi:<input id='mcchi' name='mcchi' type='text' size='100'/>");
		$("#mceng").attr("onchange","onchangemcdivgetinfo()");
		$("#mcid").attr("disabled",true);
	}
	if(selecttype=='add')
	{
		$("#deleremove").html("id:<input id='mcid' name='mcid' type='text' />  rec:<input id='mcrec' name='mcrec' type='text' /> gro:<input id='mcgro' name='mcgro' type='text' /> <br/>chi:<input id='mcchi' name='mcchi' type='text' size='100'/>");
		$("#mceng").attr("onchange","onchangemcdivcheckinfo()");
		
	}
}

function mcsubmit()
{

	tlist=$("#mclist").attr("value");
	teng=$("#mceng").attr("value");
	tid=$("#mcid").attr("value");
	trec=$("#mcrec").attr("value");
	tchi=$("#mcchi").attr("value");
	
	tchi=urlfit(tchi);

	lrevword=tid;
	//tgro=getPar('gro');
	tgro=$("#mcgro").attr("value");
	
	$("#wd"+lrevword).find("p.engspan").html(teng);
	$("#wd"+lrevword).find("p.chispan").html(tchi);

	var selecttype=$("#mcactionselect").attr('value');
	if(selecttype=='delete')
	{
		//alert(teng);
		$.ajax({url: "dele.php?list="+tlist+"&eng="+teng,success: function (){
																				//alert(teng+" has been removed from "+tlist);
																				clearmc(tlist);
																				funlastreviewwords();						
																			}
		});
	}
	if(selecttype=='update')
	{
		$.ajax({url: "update.php?list="+tlist+"&eng="+teng+"&id="+tid+"&gro="+tgro+"&chi="+tchi+"&rec="+trec,success: function (){
				//alert(teng+" has been updated");
				clearmc(tlist);
				funlastreviewwords();						
			}
		});
		
	}
	if(selecttype=='add')
	{
	$.ajax({url: "addnew.php?list="+tlist+"&eng="+teng+"&id="+tid+"&gro="+tgro+"&chi="+tchi+"&rec="+trec,success: function (){
				//alert(teng+" has been added");
				clearmc(tlist);
				funlastreviewwords();						
			}
		});
		
	}
}

function onchangemcdivgetinfo()
{
	tlist=$("#mclist").attr("value");
	teng=$("#mceng").attr("value");
	tid=$("#mcid").attr("value");
	tgro=getPar('gro');
	$.ajax({url: "getinfo.php?list="+tlist+"&eng="+teng,
			   success: function (r){
				   phpdata=JSON.parse(r);
				 //  for (x in phpdata){alert(phpdata[x])}
 
				   if(phpdata.chi=="null")
				   {alert("no_such_word!!");}
				   else
				   {
					   $("#mcchi").attr("value",phpdata.chi);
					   $("#mcgro").attr("value",phpdata.gro);
					   $("#mcrec").attr("value",phpdata.rec);
					   $("#mcid").attr("value",phpdata.id);
				   }
								   }
				});
}

function onchangemcdivcheckinfo()
{
	tlist=$("#mclist").attr("value");
	teng=$("#mceng").attr("value");	
	$.ajax({url: "getnextid.php?list="+tlist+"&eng="+teng,
			   success: function (r){if(r=="R"){$("#mcactionselect").attr('value','update');manconsolechange();onchangemcdivgetinfo();}else{maxid=r;$("#mcid").attr("value",maxid);$("#mcid").attr("disabled",true);}
			   //alert(r);
			   }
		   });

	
}

function subrefreshtimes()
{
	if(refreshtimes>1)
	{
		refreshtimes-=2;
		tnum=Number($("#totnum").text());
		$("#totnum").text(tnum+1);
		refreshexamwd();
	}
}

function refreshexamwd()
{
	$(".adddiv").remove();
	times=parseInt($("#skiptimes").attr("value"));
	
	if(times)
	{
		if(Number($("#totnum").text())-times<0)
		{
			$("#skiptimesbutton").attr("disabled",true);
			$("#skiptimes").attr("value","");
			return;
		}
		refreshtimes=refreshtimes+times-1;
		$("#totnum").text(Number($("#totnum").text())-times);
		
	}
	if(refreshtimes<wdlist.length)
	{
		$("#skiptimesbutton").attr("disabled",false);
	t=refreshtimes;
	//alert(wdlist)
	//for(x in wdlist)
	//alert(wdlist[x])
	
	rid=wdlist[t][0];
	//list=getPar('list');
	list=$("#formlist").attr("value");
	eng=wdlist[t][1];
	chi=wdlist[t][3];
	rec=wdlist[t][2];
	//gro=getPar('gro');
	gro=$("#formgro").attr("value");
	if(chitoeng){
		$("#examwd").html(chi);
	}
	else{
		$("#examwd").html(eng);
	}
	$("#examtdrec").text(rec);
	$("#examdict").attr("href","http://dict.cn/"+eng);
	if(jQuery.inArray(eng,impwdlist[0])==-1)
	{
		$("#examrecunrimg").html("<img id='recimg' src='images/unr.png' />");
	}
	else
	{
		$("#examrecunrimg").html("<img id='recimg' src='images/rec.png' />");
	}
	examrecbuttonposition=new Object();;
	examrecbuttonposition.x=$("#recimg").position().left+25;
	examrecbuttonposition.y=$("#recimg").position().top+35;
//	alert(examrecbuttonposition.x)
	$("#recimg").attr("onclick","addtoimp(examrecbuttonposition,"+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+",'"+rec+"')");
	$("#examwd").attr("onclick",'$("#examwd").html("'+chi+'<br/>'+eng+'")');
	$("#examwd").css({"color":"#0000ff","text-decoration":"none","background-color":"yellow",'font-weight' : 'bolder'});//lookwd("+wdlist[t][0]+",'"+wdlist[t][2]+"','"+wdlist[t][1]+"')
	$("#examwd").attr("ondblclick",'looksound("'+eng+'")');
	
	$("#examupbutton").attr("onclick","postu("+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+")");
	$("#examdownbutton").attr("onclick","postd("+rid+",'"+list+"','"+eng+"','"+chi+"',"+gro+")");
	$("#skipbutton").attr("onclick","refreshexamwd()");
	$("#spansubone").attr("onclick","totalnumsubone()");

	
		
	}
	else
	{
		//$("#totnum").text(Number($("#totnum").text())-1);
		$("#skiptimesbutton").attr("disabled",true);
		$("#skiptimes").attr("value","");
		$("#examwd").text("end!");
		$("#examtdrec").text("");
		$("#examdict").removeAttr("href");
		$("#recimg").removeAttr("onclick");
		$("#examwd").removeAttr("onclick");
		$("#skipbutton").removeAttr("onclick");
		$("#spanskipbutton").removeAttr("onclick");
		$("#spansubone").removeAttr("onclick");
		$("#examupbutton").removeAttr("onclick");
		$("#examdownbutton").removeAttr("onclick");
		
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
	refreshtimes=0;
	$.ajax({url: "getwdlist.php?list="+getPar('list')+"&idlo="+getPar('idlo')+"&idup="+getPar('idup')+"&gro="+getPar('gro'),
		async :false,
		success: function (r){
			   					wdlist=JSON.parse(r);
								//alert(wdlist);
								
							 }
     });
	getimpwdlist();
	
		   
	$("#totnum").text(wdlist.length)   
}

function changewdlist(type)
{
	
	if(localStorage.getItem("cidup")==null)
	{
		localStorage.setItem("clist","imp");
		localStorage.setItem("cgro","1");
		localStorage.setItem("cidlo","0");
		localStorage.setItem("cidup","100");
		
	/*
		localStorage.setItem("clist","imp");
		localStorage.setItem("cgro","1");
		localStorage.setItem("cidlo","0");
		localStorage.setItem("cidup","100");
		*/
	}
	
	
	
		clist=$("#formlist").attr("value");
		cgro=$("#formgro").attr("value");
		cidlo=$("#formidlo").attr("value");
		cidup=$("#formidup").attr("value");
		
		localStorage.setItem("clist",clist);
		localStorage.setItem("cgro",cgro);
		localStorage.setItem("cidlo",cidlo);
		localStorage.setItem("cidup",cidup);
	
	
	refreshtimes=0;
	
	/*
	
	*/
		
	//alert(clist+","+cgro+","+cidlo+","+cidup);
	

		//alert(eval("wdalllist."+clist+"["+cgro+"]"))

	wdlisttemp=eval("wdalllist."+clist+"["+(cgro-1)+"]");
	wdlist= new Array();
	for(x in wdlisttemp)
	{
		wdlist.push(wdlisttemp[x]);
	}
	totalnuminlist=wdlist.length;
	if(cidlo<1)
		cidlo=1;
	wdlist=wdlist.slice(cidlo-1,cidup);	
	//alert(wdlist.length)	
	shuffle(wdlist);
	impwdlist=wdalllist.impwdlist;
	if(type=="exam")
	{	
		refreshexamwd();
		$("#totnumlength").html(" /"+totalnuminlist);
	}
	if(type=="list")
		refreshlistwd();
	
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
		list=$("#formlist").attr("value");
		eng=wdlist[t][1];
		chi=wdlist[t][3];
		rec=wdlist[t][2];
		gro=$("#formgro").attr("value");
		
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
		//alert("lookwd("+this.id.substring(2)+",'"+chi+"','"+eng+"')");
eval("lookwd("+this.id.substring(2)+",'"+chi+"','"+eng+"')");};
		//$("#wd"+(parseInt(t)+1)).dblclick(function(){looksound(eng)});//eval("looksound('"+eng+"')")
		

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

//in js_addfunction.js
//functionasplay(mp3);
//function sop(Obj) //show object property
//function getPar(par)
//shuffle = function(o){ 
//urlfit(str)
