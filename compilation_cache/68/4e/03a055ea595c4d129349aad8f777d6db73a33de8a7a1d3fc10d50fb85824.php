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
\t</div>
\t<div class=\"cl-xs-12 col-md-8\">
\t\t<form name=\"form1\" id=\"form1\" method=\"GET\">
\t\t\t<span class=\"banner\" style=\"width=100px\">
\t\t\t\tList:
\t\t\t\t<select id=\"formlist\" name=\"list\" style=\"width: 119px;\">
\t\t\t\t\t<option  ";
        // line 120
        if (((isset($context["list"]) ? $context["list"] : null) == "imp")) {
            echo " selected=\"selected\" ";
        }
        echo " >imp</option>
\t\t\t\t\t<option  ";
        // line 121
        if (((isset($context["list"]) ? $context["list"] : null) == "i_mfl")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_mfl</option>
\t\t\t\t\t<option  ";
        // line 122
        if (((isset($context["list"]) ? $context["list"] : null) == "i_ivt")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_ivt</option>
\t\t\t\t\t<option  ";
        // line 123
        if (((isset($context["list"]) ? $context["list"] : null) == "test")) {
            echo " selected=\"selected\" ";
        }
        echo " >test</option>
\t\t\t\t\t<option  ";
        // line 124
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlist")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlist</option>
\t\t\t\t\t<option ";
        // line 125
        if (((isset($context["list"]) ? $context["list"] : null) == "recent1")) {
            echo " selected=\"selected\" ";
        }
        echo " >recent1</option>
\t\t\t\t\t<option ";
        // line 126
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl1")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl1</option>
\t\t\t\t\t<option ";
        // line 127
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl2")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl2</option>
\t\t\t\t\t<option ";
        // line 128
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl3")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl3</option>
\t\t\t\t\t<option ";
        // line 129
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl4")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl4</option>
\t\t\t\t\t<option ";
        // line 130
        if (((isset($context["list"]) ? $context["list"] : null) == "gre")) {
            echo " selected=\"selected\" ";
        }
        echo " >gre</option>
\t\t\t\t\t<option ";
        // line 131
        if (((isset($context["list"]) ? $context["list"] : null) == "gre3000")) {
            echo " selected=\"selected\" ";
        }
        echo " >gre3000</option>
\t\t\t\t\t<option ";
        // line 132
        if (((isset($context["list"]) ? $context["list"] : null) == "six_1")) {
            echo " selected=\"selected\" ";
        }
        echo " >six_1</option>
\t\t\t\t\t<option ";
        // line 133
        if (((isset($context["list"]) ? $context["list"] : null) == "six")) {
            echo " selected=\"selected\" ";
        }
        echo " >six</option>
\t\t\t\t\t<option ";
        // line 134
        if (((isset($context["list"]) ? $context["list"] : null) == "four")) {
            echo " selected=\"selected\" ";
        }
        echo " >four</option>
\t\t\t\t\t<option ";
        // line 135
        if (((isset($context["list"]) ? $context["list"] : null) == "toefl")) {
            echo " selected=\"selected\" ";
        }
        echo " >toefl</option>
\t\t\t\t\t<option ";
        // line 136
        if (((isset($context["list"]) ? $context["list"] : null) == "ielts")) {
            echo " selected=\"selected\" ";
        }
        echo " >ielts</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tGroup:
\t\t\t\t<select id=\"formgro\" name=\"gro\">
\t\t\t\t\t<option ";
        // line 141
        if (((isset($context["gro"]) ? $context["gro"] : null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo ">0</option>
\t\t\t\t\t<option ";
        // line 142
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">1</option>
\t\t\t\t\t<option ";
        // line 143
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " selected=\"selected\" ";
        }
        echo ">2</option>
\t\t\t\t\t<option ";
        // line 144
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " selected=\"selected\" ";
        }
        echo ">3</option>
\t\t\t\t\t<option ";
        // line 145
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " selected=\"selected\" ";
        }
        echo ">4</option>
\t\t\t\t\t<option ";
        // line 146
        if (((isset($context["gro"]) ? $context["gro"] : null) == 5)) {
            echo " selected=\"selected\" ";
        }
        echo ">5</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tIdfrom:
\t\t\t\t<select name=\"idlo\">
\t\t\t\t\t";
        // line 151
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 152
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 153
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 154
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 155
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 156
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 157
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 158
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 159
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tto:
\t\t\t\t<select name=\"idup\">
\t\t\t\t\t";
        // line 164
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 165
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 166
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 167
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 168
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 169
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 170
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 171
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 172
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tRand:
\t\t\t\t<input id=\"randselectnum\" name=\"rd\" value=\"0\" />
\t\t\t\t<input id=\"formsubmit\" type=\"submit\" value=\"检索\" />
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
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wdlistarr"]) ? $context["wdlistarr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 196
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
            // line 197
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
            // line 198
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
            // line 200
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
            echo "\" class=\"impspan\" style=\"display:none\"><i class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["implist"]) ? $context["implist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "imp\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'imp')\">I</i><i class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["mfllist"]) ? $context["mfllist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "mfl\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'mfl')\">M</i><i class=\"";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["ivtlist"]) ? $context["ivtlist"] : null))) {
                echo "remove";
            } else {
                echo "add";
            }
            echo "ivt\" onclick=\"impadjust(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'ivt')\">V</i></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"bt";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" height=\"20\" class=\"updowndiv\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-up arrowp\" onclick=\"postu(";
            // line 203
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
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ")\"></span>
\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down arrowp\" onclick=\"postd(";
            // line 207
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
            // line 211
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 4) == 3)) {
                // line 212
                echo "\t\t\t<div class=\"clearfix visible-lg\"></div>
\t\t\t";
            }
            // line 214
            echo "\t\t\t";
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 3) == 2)) {
                // line 215
                echo "\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t";
            }
            // line 217
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t</div>
</div>
<p class=\"menu\">
  total number:<span id=\"totnum\">";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["totalnum"]) ? $context["totalnum"] : null), "html", null, true);
        echo "</span>/<span id=\"allgronum\"></span>
  &nbsp;&nbsp;  
  Remote_address:";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["Remote_address"]) ? $context["Remote_address"] : null), "html", null, true);
        echo ";
  Ip:<span id=\"ipaddr\">";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["ipaddress"]) ? $context["ipaddress"] : null), "html", null, true);
        echo "</span>
</p>

<div id=\"qrcode\"></div>

<div class=\"row control-foot\">
\t<div class=\"col-xs-12 col-lg-7\">
\t\t<button id=\"undo\" class=\"btn btn-danger\" style=\"opacity: 0.3;\" onclick=\"undo('";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "','default')\" disabled=\"disabled\">  Undo(U)  </button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"rev\" class=\"btn btn-success\" onclick=\"revall()\">Review(R)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"showall\" class=\"btn btn-success\" onclick=\"showall(";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo ")\">Show_all(S)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"buttonchitoeng\" class=\"btn btn-success\" onclick=\"funchitoeng()\">Chi->eng(C)</button>
\t\t&nbsp;&nbsp;    
\t\t<a href=\"exam.php?list=";
        // line 239
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
        // line 241
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
        // line 245
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
        // line 256
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-warning progress-bar-striped";
        // line 259
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-info progress-bar-striped";
        // line 262
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-primary progress-bar-striped";
        // line 265
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-success progress-bar-striped";
        // line 268
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
        // line 275
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
        // line 278
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
        // line 281
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
        // line 284
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
        // line 329
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
  }
);
\$(function(){
\t\$('#qrcode').click(function() {
\t    \$(qrcode).css(\"display\",\"none\");
\t  }
\t);
\t\$('#qrcode').qrcode(\"http://";
        // line 358
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
        return array (  821 => 358,  785 => 329,  731 => 284,  719 => 281,  707 => 278,  695 => 275,  683 => 268,  675 => 265,  667 => 262,  659 => 259,  651 => 256,  637 => 245,  624 => 241,  613 => 239,  604 => 235,  597 => 231,  587 => 224,  583 => 223,  578 => 221,  573 => 218,  567 => 217,  563 => 215,  560 => 214,  556 => 212,  554 => 211,  539 => 207,  534 => 205,  521 => 203,  517 => 202,  470 => 200,  453 => 198,  439 => 197,  421 => 196,  417 => 195,  391 => 172,  387 => 171,  383 => 170,  379 => 169,  374 => 168,  367 => 167,  360 => 166,  353 => 165,  347 => 164,  339 => 159,  335 => 158,  331 => 157,  327 => 156,  322 => 155,  315 => 154,  308 => 153,  301 => 152,  295 => 151,  285 => 146,  279 => 145,  273 => 144,  267 => 143,  261 => 142,  255 => 141,  245 => 136,  239 => 135,  233 => 134,  227 => 133,  221 => 132,  215 => 131,  209 => 130,  203 => 129,  197 => 128,  191 => 127,  185 => 126,  179 => 125,  173 => 124,  167 => 123,  161 => 122,  155 => 121,  149 => 120,  26 => 6,  19 => 1,);
    }
}
