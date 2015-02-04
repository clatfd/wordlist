<?php

/* twigframe.html */
class __TwigTemplate_684e03a055ea595c4d129349aad8f777d6db73a33de8a7a1d3fc10d50fb85824 extends Twig_Template
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

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/css.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-theme.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/toastr.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.min.css\">
<!-- <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\"> -->


<script type=\"text/javascript\" src=\"js/jquery-1.11.1.min.js\"></script>
<script type=\"text/javascript\" src=\"js/toastr.min.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js/js_addfunction.js\"></script>
<script type=\"text/javascript\" src=\"js/js.js\"></script>
<script type=\"text/javascript\" src=\"js/mixitup/jquery.mixitup.min.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.qrcode.js\"></script>
<script type=\"text/javascript\" src=\"js/qrcode.js\"></script>

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
\telse if(event.keyCode==81)
\t{
\t\t//alert(\"q\");
\t\t\$(\"button[data-sort=random]\").click()
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
\telse if(event.keyCode==84)
\t{
\t\t//alert(\"t\");
\t\t\$(\"#showstatis\").click();
\t}
//\telse{alert(event.keyCode)}

\t
}
</script>

<div class=\"control-bar row\">
\t<div class=\"cl-xs-8 col-md-5\">
\t\t<label>Filter:</label>
\t\t<button class=\"filter controlbtn\" data-filter=\"all\">All</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-common\">Com</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-imp\">Imp</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-mfl\">Mfl</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-inv\">Inv</button>
\t</div>
\t<div class=\"cl-xs-4 col-md-5\" onclick=\"mdclearfix()\">
\t\t<label>Sort:</label>
\t\t<button class=\"sort controlbtn\" data-sort=\"random\">Random</button>
\t\t<button class=\"sort controlbtn\" data-sort=\"myorder:asc\">Asc</button>
\t\t<button class=\"sort controlbtn\" data-sort=\"myorder:desc\">Desc</button>
\t\t<button class=\"btn banneraddbutton\" onclick=\"changetolist()\"><i class=\"glyphicon glyphicon-th-list\"></i></button>
\t\t<button id=\"ToggleConfig\" class=\"btn toggle-config config-open banneraddbutton\"  style=\"padding: 0px 5px;\"><i class=\"glyphicon glyphicon-cog\"></i></button>

\t\t
\t</div>
\t<div class=\"cl-xs-12 col-md-8\">
\t\t<form name=\"form1\" id=\"form1\" method=\"GET\">
\t\t\t<span class=\"banner\" style=\"width=100px\">
\t\t\t\tList:
\t\t\t\t<select id=\"formlist\" name=\"list\" style=\"width: 119px;\">
\t\t\t\t\t<option  ";
        // line 122
        if (((isset($context["list"]) ? $context["list"] : null) == "imp")) {
            echo " selected=\"selected\" ";
        }
        echo " >imp</option>
\t\t\t\t\t<option  ";
        // line 123
        if (((isset($context["list"]) ? $context["list"] : null) == "i_mfl")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_mfl</option>
\t\t\t\t\t<option  ";
        // line 124
        if (((isset($context["list"]) ? $context["list"] : null) == "i_ivt")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_ivt</option>
\t\t\t\t\t<option  ";
        // line 125
        if (((isset($context["list"]) ? $context["list"] : null) == "test")) {
            echo " selected=\"selected\" ";
        }
        echo " >test</option>
\t\t\t\t\t<option  ";
        // line 126
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlist")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlist</option>
\t\t\t\t\t<option ";
        // line 127
        if (((isset($context["list"]) ? $context["list"] : null) == "recent1")) {
            echo " selected=\"selected\" ";
        }
        echo " >recent1</option>
\t\t\t\t\t<option ";
        // line 128
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl1")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl1</option>
\t\t\t\t\t<option ";
        // line 129
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl2")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl2</option>
\t\t\t\t\t<option ";
        // line 130
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl3")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl3</option>
\t\t\t\t\t<option ";
        // line 131
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl4")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl4</option>
\t\t\t\t\t<option ";
        // line 132
        if (((isset($context["list"]) ? $context["list"] : null) == "gre")) {
            echo " selected=\"selected\" ";
        }
        echo " >gre</option>
\t\t\t\t\t<option ";
        // line 133
        if (((isset($context["list"]) ? $context["list"] : null) == "gre3000")) {
            echo " selected=\"selected\" ";
        }
        echo " >gre3000</option>
\t\t\t\t\t<option ";
        // line 134
        if (((isset($context["list"]) ? $context["list"] : null) == "six_1")) {
            echo " selected=\"selected\" ";
        }
        echo " >six_1</option>
\t\t\t\t\t<option ";
        // line 135
        if (((isset($context["list"]) ? $context["list"] : null) == "six")) {
            echo " selected=\"selected\" ";
        }
        echo " >six</option>
\t\t\t\t\t<option ";
        // line 136
        if (((isset($context["list"]) ? $context["list"] : null) == "four")) {
            echo " selected=\"selected\" ";
        }
        echo " >four</option>
\t\t\t\t\t<option ";
        // line 137
        if (((isset($context["list"]) ? $context["list"] : null) == "toefl")) {
            echo " selected=\"selected\" ";
        }
        echo " >toefl</option>
\t\t\t\t\t<option ";
        // line 138
        if (((isset($context["list"]) ? $context["list"] : null) == "ielts")) {
            echo " selected=\"selected\" ";
        }
        echo " >ielts</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tGroup:
\t\t\t\t<select id=\"formgro\" name=\"gro\">
\t\t\t\t\t<option ";
        // line 143
        if (((isset($context["gro"]) ? $context["gro"] : null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo ">0</option>
\t\t\t\t\t<option ";
        // line 144
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">1</option>
\t\t\t\t\t<option ";
        // line 145
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " selected=\"selected\" ";
        }
        echo ">2</option>
\t\t\t\t\t<option ";
        // line 146
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " selected=\"selected\" ";
        }
        echo ">3</option>
\t\t\t\t\t<option ";
        // line 147
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " selected=\"selected\" ";
        }
        echo ">4</option>
\t\t\t\t\t<option ";
        // line 148
        if (((isset($context["gro"]) ? $context["gro"] : null) == 5)) {
            echo " selected=\"selected\" ";
        }
        echo ">5</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tIdfrom:
\t\t\t\t<select name=\"idlo\">
\t\t\t\t\t";
        // line 153
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 154
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 155
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 156
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 157
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 158
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 159
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 160
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 161
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tto:
\t\t\t\t<select name=\"idup\">
\t\t\t\t\t";
        // line 166
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 167
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 168
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 169
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 170
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 171
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 172
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 173
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 174
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tRand:
\t\t\t\t<input id=\"randselectnum\" name=\"rd\" value=\"0\" />
\t\t\t\t<input id=\"formsubmit\" type=\"submit\" value=\"Go\" />
\t\t\t</span>
\t\t</form>
\t</div>
\t<div class=\"cl-xs-10 col-md-3 banner\">
\t\t<span id=\"reviewmodespan\"></span>
\t\t<span id=\"chitoengmodespan\"></span>
\t</div>
\t<div class=\"cl-xs-2 col-md-1 banner\" style=\"padding-top: 8px;\">
\t\t<i class=\"visible-xs visible-sm glyphicon glyphicon-phone\"></i>
\t\t<i class=\"visible-md fa fa-android\"></i>
\t\t<i class=\"visible-lg fa fa-windows\"></i>
        
\t</div>
</div>

<div id=\"Container\" class=\"sandbox\">
  \t<div class=\"row\">
\t\t";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wdlistarr"]) ? $context["wdlistarr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 198
            echo "\t\t\t<div class=\"col-xs-6 col-md-4 col-lg-3 mix";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["implist"]) ? $context["implist"] : null))) {
                echo " category-imp";
            }
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["mfllist"]) ? $context["mfllist"] : null))) {
                echo " category-mfl";
            }
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["ivtlist"]) ? $context["ivtlist"] : null))) {
                echo " category-ivt";
            }
            if (!twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["impalllist"]) ? $context["impalllist"] : null))) {
                echo " category-common";
            }
            echo "\" data-myorder=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ">
\t\t\t\t<div id=\"wddiv";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" class=\"divgrid\" border=\"0\" data-source=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "jsondata"), "html", null, true);
            echo "\" chi=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "\" eng=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "\" rec=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "rec"), "html", null, true);
            echo "\" gro=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "\">  
\t\t\t\t\t<div class=\"wdeng\" id=\"wd";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" align=\"center\" valign=\"middle\" onclick=\"lookwd(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"recdiv\" height=\"40\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"recspan\">";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "rec"), "html", null, true);
            echo "&nbsp;</span><a href=\"http://dict.cn/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i></a>&nbsp;<i class=\"glyphicon glyphicon-play\" onclick=\"findsound('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "')\"></i></a>&nbsp;<i class=\"glyphicon glyphicon-";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["impalllist"]) ? $context["impalllist"] : null))) {
                echo "star";
            } else {
                echo "plus";
            }
            echo "\" id=\"implabel";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" onclick=\"impspancontrol(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ")\"></i><span id=\"impspan";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" class=\"impspan\" style=\"display:none\"><div class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["implist"]) ? $context["implist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "imp\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'imp')\">I</div><div class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["mfllist"]) ? $context["mfllist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "mfl\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'mfl')\">M</div><div class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["ivtlist"]) ? $context["ivtlist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "ivt\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'ivt')\">V</div></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"bt";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" height=\"20\" class=\"updowndiv\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-up arrowp\" onclick=\"postu(";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "')\"></span>
\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove arrowp\" onclick=\"removeword(";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ")\"></span>
\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down arrowp\" onclick=\"postd(";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "')\"></span>
\t\t\t\t\t</div>
\t\t\t \t</div>  
\t\t\t</div>
\t\t\t";
            // line 213
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 4) == 3)) {
                // line 214
                echo "\t\t\t<div class=\"clearfix visible-lg\"></div>
\t\t\t";
            }
            // line 216
            echo "\t\t\t";
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 3) == 2)) {
                // line 217
                echo "\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t";
            }
            // line 219
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "\t</div>
</div>
<p class=\"menu\">
  total number:<span id=\"totnum\">";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["totalnum"]) ? $context["totalnum"] : null), "html", null, true);
        echo "</span>/<span id=\"allgronum\"></span>
  &nbsp;&nbsp;  
  Remote_address:";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["Remote_address"]) ? $context["Remote_address"] : null), "html", null, true);
        echo ";
  Ip:<span id=\"ipaddr\">";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["ipaddress"]) ? $context["ipaddress"] : null), "html", null, true);
        echo "</span>
</p>

<div id=\"qrcode\"></div>

<div class=\"row control-foot\">
\t<div class=\"col-xs-12 col-lg-7\">
\t\t<button id=\"undo\" class=\"btn btn-danger\" style=\"opacity: 0.3;\" onclick=\"undo('";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "','default')\" disabled=\"disabled\">  Undo(U)  </button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"rev\" class=\"btn btn-success\" onclick=\"revall()\">Review(R)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"showall\" class=\"btn btn-success\" onclick=\"showall(";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo ")\">Show_all(S)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"buttonchitoeng\" class=\"btn btn-success\" onclick=\"funchitoeng()\">Chi->eng(C)</button>
\t\t&nbsp;&nbsp;    
\t\t<a href=\"exam.php?list=";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&amp;gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&amp;idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&amp;idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\"><button id=\"gotoexam\" class=\"btn btn-warning\">Go->exam(G)</button></a>
\t\t&nbsp;&nbsp;  
\t\t<a href=\"outputtocard.php?list=";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&amp;gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&amp;idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&amp;idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\"><button id=\"printcard\" class=\"btn btn-primary\">Print_cards(P)</button></a>
\t\t
\t</div>
\t<div class=\"col-xs-12 col-lg-5\">
\t\t<button id=\"manconsole\" class=\"btn btn-warning\" onclick=\"manconsole('";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "')\">Man_Console(M)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"buttonlastrevword\" class=\"btn btn-primary\" onclick=\"funlastreviewwords()\">Last_wd(L)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"buttonlooknextword\" class=\"btn btn-primary\" onclick=\"looknextword()\">Next_wd(N)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"showstatis\" class=\"btn btn-primary\" onclick=\"showstatis()\">showsts(T)</button>
\t</div>
</div>

<div class=\"progress\">
  <div class=\"progress-bar progress-bar-danger progress-bar-striped";
        // line 258
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-warning progress-bar-striped";
        // line 261
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-info progress-bar-striped";
        // line 264
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-primary progress-bar-striped";
        // line 267
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-success progress-bar-striped";
        // line 270
        if (((isset($context["gro"]) ? $context["gro"] : null) == 5)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
</div>

<div class=\"row control-foot\">
\t<div class=\"col-md-2 col-xs-3\">
\t\t <a class=\"menu\" href=\"twig.php?list=";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&gro=";
        echo twig_escape_filter($this->env, ((isset($context["gro"]) ? $context["gro"] : null) - 1), "html", null, true);
        echo "&idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\">last_group </a>
\t </div>
 \t<div class=\"col-md-2 col-xs-3\">
\t\t<a class=\"menu\" href=\"twig.php?list=";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&gro=";
        echo twig_escape_filter($this->env, ((isset($context["gro"]) ? $context["gro"] : null) + 1), "html", null, true);
        echo "&idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\">next_group </a>
\t</div>
\t<div class=\"col-md-2 col-xs-3\">
\t\t<a class=\"menu\" href=\"twig.php?list=";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&amp;gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&amp;idlo=";
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) - 100), "html", null, true);
        echo "&amp;idup=";
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
        echo "\">last_list </a>
  \t</div>
  \t<div class=\"col-md-2 col-xs-3\">
\t\t<a class=\"menu\" href=\"twig.php?list=";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&amp;gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&amp;idlo=";
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 100), "html", null, true);
        echo "&amp;idup=";
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 100), "html", null, true);
        echo "\">next_list </a> 
\t</div>
  \t<div class=\"col-md-4 col-xs-6\">
  \t\t<a class=\"menu\" href=\"Index.html\">return</a>
  \t</div>
</div>



<script type=\"text/javascript\">
if(localStorage.getItem(\"rev\")==\"1\")
\t\$(\"#reviewmodespan\").append(\"Review \");
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
function renewstatic(){
\$.ajax({url: \"briefsta.php?list=";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\",
\t\t\tsuccess: function (r){
\t\t\t\tstadata=JSON.parse(r);
\t\t\t\tstadata[4]=(100-parseFloat(stadata[0].slice(0,-1))-parseFloat(stadata[1].slice(0,-1))-parseFloat(stadata[2].slice(0,-1))-parseFloat(stadata[3].slice(0,-1))).toFixed(1)+\"%\";
\t\t\t\tfor(pbi=0;pbi<5;pbi++){
\t\t\t\t\t\$(\".progress-bar\").eq(pbi).attr(\"aria-valuenow\",stadata[pbi].slice(0,-1));
\t\t\t\t\t\$(\".progress-bar\").eq(pbi).html(stadata[pbi]);
\t\t\t\t\t\$(\".progress-bar\").eq(pbi).css(\"width\",stadata[pbi]);
\t\t\t\t}
\t\t\t\t\$(\"#allgronum\").html(stadata[5]);
\t\t\t}
\t\t});
}
\$(function(){
\t\$('#Container').mixItUp();
\trenewstatic();
\t\$(\".progress\").click(function(){renewstatic()});
});

\$(\"#ipaddr\").hover(
  function() {
    \$(qrcode).css(\"display\",\"inline-block\");
  },
  function() {
    \$(qrcode).css(\"display\",\"none\");
  }
);
\$(function(){
\t\$('#qrcode').qrcode(\"http://";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["ipaddress"]) ? $context["ipaddress"] : null), "html", null, true);
        echo "/H-wordlist/twig.php?list=";
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "&rd=";
        echo twig_escape_filter($this->env, (isset($context["rd"]) ? $context["rd"] : null), "html", null, true);
        echo "\");
})
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "twigframe.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 359,  787 => 331,  733 => 286,  721 => 283,  709 => 280,  697 => 277,  685 => 270,  677 => 267,  669 => 264,  661 => 261,  653 => 258,  639 => 247,  626 => 243,  615 => 241,  606 => 237,  599 => 233,  589 => 226,  585 => 225,  580 => 223,  575 => 220,  569 => 219,  565 => 217,  562 => 216,  558 => 214,  556 => 213,  541 => 209,  536 => 207,  523 => 205,  519 => 204,  472 => 202,  455 => 200,  441 => 199,  423 => 198,  419 => 197,  393 => 174,  389 => 173,  385 => 172,  381 => 171,  376 => 170,  369 => 169,  362 => 168,  355 => 167,  349 => 166,  341 => 161,  337 => 160,  333 => 159,  329 => 158,  324 => 157,  317 => 156,  310 => 155,  303 => 154,  297 => 153,  287 => 148,  281 => 147,  275 => 146,  269 => 145,  263 => 144,  257 => 143,  247 => 138,  241 => 137,  235 => 136,  229 => 135,  223 => 134,  217 => 133,  211 => 132,  205 => 131,  199 => 130,  193 => 129,  187 => 128,  181 => 127,  175 => 126,  169 => 125,  163 => 124,  157 => 123,  151 => 122,  26 => 6,  19 => 1,);
    }
}
