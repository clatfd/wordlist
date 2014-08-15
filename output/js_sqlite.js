// JavaScript Document

updown=2;	//0:up 1:down
lid=0;		//last id

function lookwd(pid,chi,eng)
{

	$("#wd"+pid).html(chi);
	$("#wd"+pid).append("<br/>"+eng);
	$("#wd"+pid).delay(3000);
	$("#wd"+pid).fadeTo("slow",0.01);
    $("#wd"+pid).css({"color":"#0000ff","text-decoration":"none","background-color":"yellow",'font-weight' : 'bolder'});

	var s=setTimeout("dela("+pid+",'"+eng+"')",3500)
	
	
}

function dela(pid,eng)
{
	$("#wd"+pid).html(eng);	
	$("#wd"+pid).fadeTo("slow",0.99);
}

function postu(pid,list)
{
	$.ajax({url: "Up_sqlite.php?list="+list+"&id="+pid, success:function(){ $("#wdtb"+pid).fadeTo("slow",0.01);}});
	$("#bt"+pid).remove();
	$("#undo").fadeTo("slow",0.99);
	updown=0;
	lid=pid;
}
function postd(pid,list)
{
	$.ajax({url: "Down_sqlite.php?list="+list+"&id="+pid, success: function (){$("#wdtb"+pid).fadeTo("slow",0.01);}});
	$("#undo").fadeTo("slow",0.99);
	updown=1;
	lid=pid;
}

function undo(list)
{
	if(updown==0)
		$.ajax({url: "Down_sqlite.php?list="+list+"&id="+lid});
	if(updown==1)
		$.ajax({url: "Up_sqlite.php?list="+list+"&id="+lid});
	$("#undo").fadeTo("slow",0.01);
	$("#wdtb"+lid).fadeTo("slow",0.99);
	lid=0;
	updown=2;
}