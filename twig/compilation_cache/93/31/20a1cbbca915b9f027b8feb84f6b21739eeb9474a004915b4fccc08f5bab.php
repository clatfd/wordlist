<?php

/* default.html */
class __TwigTemplate_933120a1cbbca915b9f027b8feb84f6b21739eeb9474a004915b4fccc08f5bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<?php require_once(\"sys_conf.inc\");
?>

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "<?php echo \$_GET['list'].\"_\".\$_GET['gro'].\"_\".\$_GET['idlo'].\"~\".\$_GET['idup'] ?></title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"css.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"toastr.min.css\">

<script type=\"text/javascript\" src=\"jquery-1.8.2.js\"></script>
<script type=\"text/javascript\" src=\"toastr.min.js\"></script>
<script type=\"text/javascript\" src=\"bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js_addfunction.js\"></script>
<script type=\"text/javascript\" src=\"js.js\"></script>
<script type=\"text/javascript\" src=\"mixitup/jquery.mixitup.min.js\"></script>



<script type=\"text/JavaScript\">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+\".location='\"+selObj.options[selObj.selectedIndex].value+\"'\");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

</head>



<body onkeyup=\"whichButton(event)\">
<script type=\"text/javascript\">

initialforwdlist();

function whichButton(event)
{
\tif(event.keyCode==83)
\t{
\t\t//alert(\"s\");
\t\t\$(\"#showall\").click();
\t}
\telse if(event.keyCode==82)
\t{
\t\t//alert(\"r\");
\t\t\$(\"#rev\").click();
\t}
\telse if(event.keyCode==71)
\t{
\t\t//alert(\"g\");
\t\t\$(\"#gotoexam\").click();
\t}
\telse if(event.keyCode==85)
\t{
\t\t//alert(\"u\");
\t\t\$(\"#undo\").click();
\t}\t
\telse if(event.keyCode==80)
\t{
\t\t//alert(\"p\");
\t\t\$(\"#printcard\").click();
\t}\t
\telse if(event.keyCode==88)
\t{
\t\t//alert(\"x\");
\t\t\$(\"#xiaomiversion\").click();
\t}\t
\telse if(event.keyCode==77)
\t{
\t\t//alert(\"m\");
\t\t\$(\"#manconsole\").click();
\t}\t
\telse if(event.keyCode==13)
\t{
\t\t//alert(\"Enter\");
\t\t\$(\"#formsubmit\").click();
\t}
\telse if(event.keyCode==67)
\t{
\t\t//alert(\"c\");
\t\t\$(\"#buttonchitoeng\").click();
\t}\t
\telse if(event.keyCode==76)
\t{
\t\t//alert(\"l\");
\t\t\$(\"#buttonlastrevword\").click();
\t}\t
\telse if(event.keyCode==78)
\t{
\t\t//alert(\"n\");
\t\t\$(\"#buttonlooknextword\").click();
\t}
//\telse{alert(event.keyCode)}

\t
}
</script>

<div class=\"controls\">
  <label>Filter:</label>
  
  <button class=\"filter\" data-filter=\"all\">All</button>
  <button class=\"filter\" data-filter=\".category-1\">Category 1</button>
  <button class=\"filter\" data-filter=\".category-2\">Category 2</button>
  
  <label>Sort:</label>
  
  <button class=\"sort\" data-sort=\"myorder:asc\">Asc</button>
  <button class=\"sort\" data-sort=\"myorder:desc\">Desc</button>
</div>

<div class=\"content\" style=\"margin-left: 50px;\">
<form name=\"form1\" id=\"form1\" method=\"GET\">
<span id=\"banner\">
List:<?php echo \$_GET['list'] ?>

  <?php include('list.php') ?>

 &nbsp;&nbsp; Group:<?php echo \$_GET['gro'] ?>
<select id=\"formgro\" name=\"gro\">
  <option <?php if(\$_GET['gro']==0) echo \"selected=\\\"selected\\\"\" ?>>0</option>
  <option <?php if(\$_GET['gro']==1) echo \"selected=\\\"selected\\\"\" ?>>1</option>
  <option <?php if(\$_GET['gro']==2) echo \"selected=\\\"selected\\\"\" ?>>2</option>
  <option <?php if(\$_GET['gro']==3) echo \"selected=\\\"selected\\\"\" ?>>3</option>
  <option <?php if(\$_GET['gro']==4) echo \"selected=\\\"selected\\\"\" ?>>4</option>
  <option <?php if(\$_GET['gro']==5) echo \"selected=\\\"selected\\\"\" ?>>5</option>
</select>
&nbsp;&nbsp; Idfrom:<?php echo \$_GET['idlo'] ?>
<select name=\"idlo\">
  <option><?php echo \$_GET['idlo']-400 ?></option>
  <option><?php echo \$_GET['idlo']-300 ?></option>
  <option><?php echo \$_GET['idlo']-200 ?></option>
  <option><?php echo \$_GET['idlo']-100 ?></option>
  <option <?php echo \"selected=\\\"selected\\\"\" ?>><?php echo \$_GET['idlo'] ?></option>
  <option><?php echo \$_GET['idlo']+100 ?></option>
  <option><?php echo \$_GET['idlo']+200 ?></option>
  <option><?php echo \$_GET['idlo']+300 ?></option>
  <option><?php echo \$_GET['idlo']+400 ?></option>
 
</select>
&nbsp;to:<?php echo \$_GET['idup'] ?>
<select name=\"idup\">
  <option><?php echo \$_GET['idup']-400 ?></option>
  <option><?php echo \$_GET['idup']-300 ?></option>
  <option><?php echo \$_GET['idup']-200 ?></option>
  <option><?php echo \$_GET['idup']-100 ?></option>
  <option <?php echo \"selected=\\\"selected\\\"\" ?>><?php echo \$_GET['idup'] ?></option>
  <option><?php echo \$_GET['idup']+100 ?></option>
  <option><?php echo \$_GET['idup']+200 ?></option>
  <option><?php echo \$_GET['idup']+300 ?></option>
  <option><?php echo \$_GET['idup']+400 ?></option>
</select>
<input id=\"formsubmit\" type=\"submit\" value=\"检索\" />
<span id=\"reviewmodespan\"></span>
<span id=\"chitoengmodespan\"></span>
</span>
</form>

<div id=\"Container\" class=\"container\">
<!-- <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
 <tr>
  -->    
\t<?php
\t
\t\$link_id=mysql_connect(\$DBHOST,\$DBUSER,\$DBPWD);
\tmysql_select_db(\$DBNAME);
\tmysql_query(\"SET NAMES 'utf8'\");
\t\$implist = array(); 
\t
\t\$sql=\"Select * from imp \";\t
\t\$implisttemp=mysql_query(\$sql);
\twhile (\$rowi=mysql_fetch_array(\$implisttemp))
\t{\t
\t\tarray_push(\$implist, \$rowi[3]);
\t}
\t\$sql=\"Select * from i_mfl \";\t
\t\$implisttemp=mysql_query(\$sql);
\twhile (\$rowii=mysql_fetch_array(\$implisttemp))
\t{\t
\t\tarray_push(\$implist, \$rowii[3]);
\t}
\t\$sql=\"Select * from i_ivt \";\t
\t\$implisttemp=mysql_query(\$sql);
\twhile (\$rowiii=mysql_fetch_array(\$implisttemp))
\t{\t
\t\tarray_push(\$implist, \$rowiii[3]);
\t}\t
\t
\t\$sql=\"Select * from \".\$_GET['list'].\"  where gro=\".\$_GET['gro'].\" and id>\".(\$_GET['idlo']-1).\" and id<\".(\$_GET['idup']+1);\t
\t\$result=mysql_query(\$sql);
\t\$i=0;
\t\$arr = array(); 
\twhile (\$rowt=mysql_fetch_array(\$result))
\t{
\t
\t
\tarray_push(\$arr, \$rowt);
\t\$i++;
\t}
\tshuffle(\$arr);
\t//print_r(\$arr);
\t\$j=-1;
\twhile(\$i)
\t{
\t\$i--;
\t\$j++;
\t\$row=\$arr[\$i];
\tprint_r(\$row);
\t//echo (\"</br>\");
\t
\t?>




\t<!-- <td> -->
\t<div class=\"mix category-1\" data-myorder=\"1\">
\t <table width=\"250\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"wdtb<?php echo \$row[\"id\"]; ?>\">  
\t\t<tr>
\t\t\t<td height=\"70\" colspan=\"2\" align=\"center\" valign=\"middle\" class=\"wdeng\" id=\"wd<?php echo \$row[\"id\"]; ?>\" onclick=\"lookwd(<?php echo \$row[\"id\"]; ?>,'<?php echo \$row[\"chi\"]; ?>','<?php echo \$row[\"eng\"]; ?>',<?php echo \$j ?>)\" ondblclick=\"looksound('<?php echo \$row[\"eng\"]; ?>')\"><?php echo \$row[\"id\"]; ?>&nbsp;&nbsp;&nbsp;<?php echo \$row[\"eng\"]; ?></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td height=\"40\" colspan=\"2\" align=\"center\" valign=\"middle\"><?php echo \$row[\"gro\"]; ?>&nbsp;<?php echo \$row[\"rec\"]; ?>&nbsp;<a href=\"http://dict.cn/<?php echo \$row[\"eng\"] ?>\" target=\"_blank\"><img src=\"images/favicon.ico\"/></a>&nbsp;<img src=\"images/<?php if(in_array(\$row[\"eng\"], \$implist)){ echo 'rec';} else { echo 'unr';} ?>.png\" id=\"impunr<?php echo \$row[\"id\"]; ?>\" <?php /*if(in_array(\$row[\"eng\"], \$implist)){}else*/{ echo \"onclick=\\\"addtoimp(this,\".\$row['id'].\",'\". \$_GET['list'].\"','\". \$row['eng'] .\"','\". \$row['chi'].\"','\".  \$row['gro'] .\"','\".  \$row['rec'] .\"')\\\"\";} ?>/></td>
\t\t</tr>
\t\t<tr id=\"bt<?php echo \$row[\"id\"]; ?>\">
\t\t\t<td width=\"50%\" height=\"30\" align=\"center\" valign=\"middle\" onclick=\"postu(<?php echo \$row[\"id\"]; ?>,'<?php echo \$_GET['list'] ?>','<?php echo \$row[\"eng\"] ?>','<?php echo \$row[\"chi\"] ?>','<?php echo \$row[\"gro\"]; ?>')\"><img src=\"images/up.png\" width=\"52\" height=\"18\" border=\"0\" /></td>
\t\t\t<td width=\"50%\" align=\"center\" valign=\"middle\" onclick=\"postd(<?php echo \$row[\"id\"]; ?>,'<?php echo \$_GET['list'] ?>','<?php echo \$row[\"eng\"] ?>','<?php echo \$row[\"chi\"] ?>','<?php echo \$row[\"gro\"]; ?>')\"><img src=\"images/down.jpg\" width=\"52\" height=\"18\" border=\"0\" /></td>
\t\t</tr>
\t\t\t\t\t
\t </table>  
\t</div>
\t<!-- </td>  -->    


<?php
// if (\$j%5==4)
// \techo \"</tr><tr>\";
 }
?>
  <!-- </tr> -->
<!-- 
\t</td>
  </tr>

</table> -->
</div>
<p class=\"menu\">
  total number:<span id=\"totnum\"><?php echo \$j+1; ?></span>
  &nbsp;&nbsp;
  Remote_address:<?php echo \$_SERVER[\"REMOTE_ADDR\"];?>;
  Ip:<?php include('getip.php');?>
</p>
<button id=\"undo\" style=\"opacity: 0.01;\" onclick=\"undo('<?php echo \$_GET['list'] ?>','default')\">  Undo(U)  </button>
&nbsp;&nbsp;
<button id=\"rev\" onclick=\"revall()\">Review_mode(R)</button>
  
<a href=\"exam.php?list=<?php echo \$_GET['list'] ?>&amp;gro=<?php echo \$_GET['gro'] ?>&amp;idlo=<?php echo \$_GET['idlo'] ?>&amp;idup=<?php echo \$_GET['idup'] ?>\"><button id=\"gotoexam\">Go_to_exam(G)</button></a>
&nbsp;&nbsp;
<button id=\"showall\" onclick=\"showall(<?php echo \$_GET['idlo'] ?>,<?php echo \$_GET['idup'] ?>)\">Show_all(S)</button>
&nbsp;&nbsp;
<a href=\"outputtocard.php?list=<?php echo \$_GET['list'] ?>&amp;gro=<?php echo \$_GET['gro'] ?>&amp;idlo=<?php echo \$_GET['idlo'] ?>&amp;idup=<?php echo \$_GET['idup'] ?>\"><button id=\"printcard\">Print_cards(P)</button></a>
&nbsp;&nbsp;
<a href=\"defaultm.php?list=<?php echo \$_GET['list'] ?>&amp;gro=<?php echo \$_GET['gro'] ?>&amp;idlo=<?php echo \$_GET['idlo'] ?>&amp;idup=<?php echo \$_GET['idup'] ?>\"><button id=\"xiaomiversion\">Xiaomi version(X)</button></a>
&nbsp;&nbsp;
<button id=\"manconsole\" onclick=\"manconsole('<?php echo  \$_GET['list'] ?>')\">Manual_Console(M)</button>
&nbsp;&nbsp;
<button id=\"buttonchitoeng\" onclick=\"funchitoeng()\">Chi_to_eng(C)</button>
&nbsp;&nbsp;
<button id=\"buttonlastrevword\" onclick=\"funlastreviewwords()\">Last_word(L)</button>
&nbsp;&nbsp;
<button id=\"buttonlooknextword\" onclick=\"looknextword()\">Next_word(N)</button>

<!--　<input onclick=document.all.WebBrowser.ExecWB(4,1) type=button value=另存为 name=Button2> -->

<br/>
<iframe frameborder=\"0\" height=\"18px\"  scrolling=\"no\" marginheight=\"0px\" src=\"/H-wordlist/briefsta.php?list=<?php echo \$_GET['list'] ?>&amp;idlo=<?php echo \$_GET['idlo'] ?>&amp;idup=<?php echo \$_GET['idup'] ?>\" id=\"ifrmstatdefault\">\t</iframe>
<br/>


<?php
\tinclude(\"switchbar.php\");
?>




<script type=\"text/javascript\">
//movable div
var \$j=function(id){return document.getElementById(id);};
var getMouseP=function (e){
\t//获取鼠标坐标 请传递evnet参数
\te = e || window.event;
\tvar m=(e.pageX || e.pageY)?{ x:e.pageX, y:e.pageY } : { x:e.clientX + document.body.scrollLeft - document.body.clientLeft, y:e.clientY + document.body.scrollTop  - document.body.clientTop };
\treturn m;
};
    
move=function(o,t){
\to=\$j(o);
\tt=\$j(t);
\to.onmousedown=function(ev){
\t
\t\tvar mxy=getMouseP(ev);//获取当前鼠标坐标
\t\tvar by={x:mxy.x-(t.offsetLeft),y:mxy.y-(t.offsetTop)};
\t\to.style.cursor=\"move\";
\t\tdocument.onmousemove=function(ev){
\t\t\tvar mxy=getMouseP(ev);
\t\t\tt.style.left=mxy.x-by.x+\"px\";
\t\t\tt.style.top=mxy.y-by.y+\"px\";
\t\t\tt.style.opacity=\"0.8\";
\t\t};
\t\tdocument.onmouseup=function(){
\t\t\t//window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
\t\t\tthis.onmousemove=null;
\t\t\tt.style.opacity=\"1\";
\t\t}
\t}
}

// ]]>

\$(function(){
  \$('#Container').mixItUp();
});
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
