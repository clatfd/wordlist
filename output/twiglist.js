function getcurrentlistinfo(){
	
	if(localStorage.getItem("cidup")==null)
	{
		localStorage.setItem("clist","gre");
		localStorage.setItem("cgro","1");
		localStorage.setItem("cidlo","1");
		localStorage.setItem("cidup","100");
		
	}
	clist=$("#formlist").attr("value");
	cgro=$("#formgro").attr("value");
	cidlo=$("#formidlo").attr("value");
	cidup=$("#formidup").attr("value");
	
	localStorage.setItem("clist",clist);
	localStorage.setItem("cgro",cgro);
	localStorage.setItem("cidlo",cidlo);
	localStorage.setItem("cidup",cidup);
	if(cidlo<1)
		cidlo=1;
	cwdlist=wdalllist[clist][cgro].slice(cidlo-1,cidup);
	shuffle(cwdlist);
	
// generatewdlist
	dataprint="";
  	curnum=0;
		 for (item in cwdlist){
		 	iid=cwdlist[item][0];
		 	ieng=cwdlist[item][1];
		 	irec=cwdlist[item][2];
		 	ichi=cwdlist[item][3];
			dataprint+='<div class="col-xs-6 col-md-4 col-lg-3 mix" '+'data-myorder='+iid+'>\
				<div id="wdtb'+iid+'" class="divgrid" border="0" cellspacing="0" cellpadding="0" >\
					<div class="wdeng" id="wd'+iid+'" align="center" valign="middle" onclick="lookwd('+iid+',\''+ichi+'\',\''+ieng+'\','+curnum+')" ondblclick="looksound(\''+ieng+'\')">'+iid+'&nbsp;&nbsp;&nbsp;'+ieng+'					</div>\
					<div class="recdiv" height="40" colspan="2" align="center" valign="middle"><span class="recspan">'+cgro+'&nbsp;'+irec+'&nbsp;</span><a href="http://dict.cn/'+ieng+'" target="_blank"><i class="glyphicon glyphicon-book"></i></a>\
					</div>\
					<div id="bt{{item.id}}" height="20" class="updowndiv">\
						<span class="glyphicon glyphicon-chevron-up" onclick="postu({{item.id}},\'{{list}}\',\'{{item.eng}}\',\'{{item.chi}}\',\'{{item.gro}}\')"></span>\
						&nbsp;&nbsp;&nbsp;&nbsp;\
						<span class="glyphicon glyphicon-chevron-down" onclick="postd({{item.id}},\'{{list}}\',\'{{item.eng}}\',\'{{item.chi}}\',\'{{item.gro}}\')"></span>\
					</div>\
			 	</div>  \
			</div>';
			if(curnum%4==3)
			dataprint+='<div class="clearfix visible-lg"></div>';
			if(curnum%3==2)
			dataprint+='<div class="clearfix visible-md"></div>';
			curnum++;
		}
		$(".itemprint").html(dataprint);
		$("button[data-sort='random']").click();
}
function refreshstatis(){
	$("#dateinput").append("Created date："+wdalllist.datecreated);
	$("#totnum").html(cwdlist.length);
	$("#totnumlength").html(wdalllist[clist][cgro].length);
}
