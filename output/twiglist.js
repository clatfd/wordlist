function getcurrentlistinfo(changerange){
	
	if(localStorage.getItem("cidup")==null)		//init fail at ie and phone
	{
		alert("firstuse");
		localStorage.setItem("clist","gre");
		localStorage.setItem("cgro","1");
		localStorage.setItem("cidlo","1");
		localStorage.setItem("cidup","25");
		
		$("#formlist").val("gre");
		$("#formgro").val("1");
		$("#formidlo").val("1");
		$("#formidup").val("25");

		clist=$("#formlist").attr("value");
		cgro=$("#formgro").attr("value");
		cidlo=$("#formidlo").attr("value");
		cidup=$("#formidup").attr("value");
	}
	else{
		if(changerange){
			clist=$("#formlist").val();
			cgro=$("#formgro").val();
			cidlo=$("#formidlo").val();
			cidup=$("#formidup").val();
			if(cidlo<1){
				cidlo=1;
				$("#formidlo").val(1);
			}
			localStorage.setItem("clist",clist);
			localStorage.setItem("cgro",cgro);
			localStorage.setItem("cidlo",cidlo);
			localStorage.setItem("cidup",cidup);
		}
		else{
			clist=localStorage.getItem("clist",clist);
			cgro=localStorage.getItem("cgro",cgro);
			cidlo=localStorage.getItem("cidlo",cidlo);
			cidup=localStorage.getItem("cidup",cidup);
			$("#formlist").val(clist);
			$("#formgro").val(cgro);
			$("#formidlo").val(cidlo);
			$("#formidup").val(cidup);

		}
	}
	//alert(clist+","+cgro+","+cidlo+","+cidup);
	cwdlist=wdalllist[clist][(parseInt(cgro)-1)].slice(parseInt(cidlo)-1,cidup);
	shuffle(cwdlist);
// generatewdlist
	dataprint="";
  	curnum=0;
		 for (worditem in cwdlist){
		 	iid=cwdlist[worditem][0];
		 	ieng=cwdlist[worditem][1];
		 	irec=cwdlist[worditem][2];
		 	ichi=cwdlist[worditem][3];
			dataprint+='<div class="col-xs-6 col-md-4 col-lg-3 mix" '+'data-myorder='+iid+'>\
				<div id="wdtb'+iid+'" class="divgrid" border="0" cellspacing="0" cellpadding="0" >\
					<div class="wdeng" id="wd'+iid+'" align="center" valign="middle" onclick="lookwd('+iid+',\''+ichi+'\',\''+ieng+'\','+curnum+')" ondblclick="looksound(\''+ieng+'\')">'+iid+'&nbsp;&nbsp;&nbsp;'+ieng+'					</div>\
					<div class="recdiv" height="40" colspan="2" align="center" valign="middle"><span class="recspan">'+cgro+'&nbsp;'+irec+'&nbsp;</span><a href="http://dict.cn/'+ieng+'" target="_blank"><i class="glyphicon glyphicon-book"></i></a>\
					</div>\
					<div id="bt{{item.id}}" height="20" class="updowndiv">\
						<span class="glyphicon glyphicon-chevron-up arrowp" onclick="postu({{item.id}},\'{{list}}\',\'{{item.eng}}\',\'{{item.chi}}\',\'{{item.gro}}\')"></span>\
						\
						<span class="glyphicon glyphicon-remove arrowp arrowp" onclick="removeword('+iid+')"></span>\
						\
						<span class="glyphicon glyphicon-chevron-down arrowp" onclick="postd({{item.id}},\'{{list}}\',\'{{item.eng}}\',\'{{item.chi}}\',\'{{item.gro}}\')"></span>\
					</div>\
			 	</div>  \
			</div>';
			if(curnum%2==1)
			dataprint+='<div class="clearfix visible-xs visible-sm"></div>';
			if(curnum%3==2)
			dataprint+='<div class="clearfix visible-md"></div>';
			curnum++;
		}
		$(".itemprint").html(dataprint);
		$("#totnum").html(cwdlist.length);
		$("#totnumlength").html(wdalllist[clist][(parseInt(cgro)-1)].length);
		$("button[data-sort='random']").click();
}
function refreshstatis(){
	$("#dateinput").append("Created date："+wdalllist.datecreated);
	$("#totnum").html(cwdlist.length);
	$("#totnumlength").html(wdalllist[clist][parseInt(cgro)-1].length);

	var gronum=Array();
	var gropercent=Array();
	var listtotalnum=0;
	for(i=0;i<5;i++){
		gronum[i]=wdalllist[clist][i].length;
		listtotalnum+=gronum[i];
	}
	for(i=0;i<4;i++){
		gropercent[i]=gronum[i]/listtotalnum;
	}
	//to avoid total percentage over 100 due to decimal 
	gropercent[4]=1-gropercent[0]-gropercent[1]-gropercent[2]-gropercent[3];	
	for(pbi=0;pbi<5;pbi++){
		$(".progress-bar").eq(pbi).attr("aria-valuenow",gropercent[pbi]);
		$(".progress-bar").eq(pbi).html((gropercent[pbi]*100).toFixed(1)+"%");
		if(gropercent[pbi]>0.07)
			$(".progress-bar").eq(pbi).append(" "+gronum[pbi]);
		$(".progress-bar").eq(pbi).css("width",(gropercent[pbi]*100).toFixed(1)+"%");
	}
}
function getcookie(){

}
function setcookie(){

}