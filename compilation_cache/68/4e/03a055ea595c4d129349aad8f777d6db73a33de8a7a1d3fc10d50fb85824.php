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


<script type=\"text/javascript\" src=\"js/jquery-1.8.2.js\"></script>
<script type=\"text/javascript\" src=\"js/toastr.min.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js/js_addfunction.js\"></script>
<script type=\"text/javascript\" src=\"js/js.js\"></script>
<script type=\"text/javascript\" src=\"js/mixitup/jquery.mixitup.min.js\"></script>

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
\t<div class=\"cl-xs-12 col-lg-8\">
\t\t<label>Filter:</label>
\t\t<button class=\"filter controlbtn\" data-filter=\"all\">All</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-common\">Category common</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-imp\">Category imp</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-mfl\">Category mfl</button>
\t\t<button class=\"filter controlbtn\" data-filter=\".category-inv\">Category inv</button>
\t</div>
\t<div class=\"cl-xs-12 col-lg-4\">
\t\t<label>Sort:</label>
\t\t<button class=\"sort controlbtn\" data-sort=\"myorder:asc\">Asc</button>
\t\t<button class=\"sort controlbtn\" data-sort=\"myorder:desc\">Desc</button>
\t\t<button class=\"sort controlbtn\" data-sort=\"random\">Random</button>
\t\t<button id=\"showmodebtn\" class=\"btn\" onclick=\"changetolist()\"><i class=\"glyphicon glyphicon-th-list\"></i></button>
\t\t<span id=\"ToggleConfig\" class=\"btn toggle-config config-open\"><i class=\"glyphicon glyphicon-cog\"></i></span>
\t</div>
\t<div class=\"cl-xs-12 col-lg-8\">
\t\t<form name=\"form1\" id=\"form1\" method=\"GET\">
\t\t\t<span class=\"banner\">
\t\t\t\tList:";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "
\t\t\t\t<select id=\"formlist\" name=\"list\" style=\"width: 119px;\">
\t\t\t\t\t<option  ";
        // line 118
        if (((isset($context["list"]) ? $context["list"] : null) == "imp")) {
            echo " selected=\"selected\" ";
        }
        echo " >imp</option>
\t\t\t\t\t<option  ";
        // line 119
        if (((isset($context["list"]) ? $context["list"] : null) == "i_mfl")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_mfl</option>
\t\t\t\t\t<option  ";
        // line 120
        if (((isset($context["list"]) ? $context["list"] : null) == "i_ivt")) {
            echo " selected=\"selected\" ";
        }
        echo " >i_ivt</option>
\t\t\t\t\t<option  ";
        // line 121
        if (((isset($context["list"]) ? $context["list"] : null) == "test")) {
            echo " selected=\"selected\" ";
        }
        echo " >test</option>
\t\t\t\t\t<option  ";
        // line 122
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlist")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlist</option>
\t\t\t\t\t<option ";
        // line 123
        if (((isset($context["list"]) ? $context["list"] : null) == "recent1")) {
            echo " selected=\"selected\" ";
        }
        echo " >recent1</option>
\t\t\t\t\t<option ";
        // line 124
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl1")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl1</option>
\t\t\t\t\t<option ";
        // line 125
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl2")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl2</option>
\t\t\t\t\t<option ";
        // line 126
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl3")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl3</option>
\t\t\t\t\t<option ";
        // line 127
        if (((isset($context["list"]) ? $context["list"] : null) == "wordlisttoefl4")) {
            echo " selected=\"selected\" ";
        }
        echo " >wordlisttoefl4</option>
\t\t\t\t\t<option ";
        // line 128
        if (((isset($context["list"]) ? $context["list"] : null) == "gre")) {
            echo " selected=\"selected\" ";
        }
        echo " >gre</option>
\t\t\t\t\t<option ";
        // line 129
        if (((isset($context["list"]) ? $context["list"] : null) == "six_1")) {
            echo " selected=\"selected\" ";
        }
        echo " >six_1</option>
\t\t\t\t\t<option ";
        // line 130
        if (((isset($context["list"]) ? $context["list"] : null) == "six")) {
            echo " selected=\"selected\" ";
        }
        echo " >six</option>
\t\t\t\t\t<option ";
        // line 131
        if (((isset($context["list"]) ? $context["list"] : null) == "four")) {
            echo " selected=\"selected\" ";
        }
        echo " >four</option>
\t\t\t\t\t<option ";
        // line 132
        if (((isset($context["list"]) ? $context["list"] : null) == "toefl")) {
            echo " selected=\"selected\" ";
        }
        echo " >toefl</option>
\t\t\t\t\t<option ";
        // line 133
        if (((isset($context["list"]) ? $context["list"] : null) == "ielts")) {
            echo " selected=\"selected\" ";
        }
        echo " >ielts</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;&nbsp; 
\t\t\t\tGroup:";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "
\t\t\t\t<select id=\"formgro\" name=\"gro\">
\t\t\t\t\t<option ";
        // line 138
        if (((isset($context["gro"]) ? $context["gro"] : null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo ">0</option>
\t\t\t\t\t<option ";
        // line 139
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">1</option>
\t\t\t\t\t<option ";
        // line 140
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " selected=\"selected\" ";
        }
        echo ">2</option>
\t\t\t\t\t<option ";
        // line 141
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " selected=\"selected\" ";
        }
        echo ">3</option>
\t\t\t\t\t<option ";
        // line 142
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " selected=\"selected\" ";
        }
        echo ">4</option>
\t\t\t\t\t<option ";
        // line 143
        if (((isset($context["gro"]) ? $context["gro"] : null) == 5)) {
            echo " selected=\"selected\" ";
        }
        echo ">5</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;&nbsp; 
\t\t\t\tIdfrom:";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "
\t\t\t\t<select name=\"idlo\">
\t\t\t\t\t";
        // line 148
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 149
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 150
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 151
        echo "\t\t\t\t\t";
        if ((((isset($context["idlo"]) ? $context["idlo"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 152
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 153
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 154
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 155
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 156
        echo twig_escape_filter($this->env, ((isset($context["idlo"]) ? $context["idlo"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\tto:";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "
\t\t\t\t<select name=\"idup\">
\t\t\t\t\t";
        // line 161
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 400) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 400), "html", null, true);
            echo "</option>";
        }
        // line 162
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 300) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 300), "html", null, true);
            echo "</option>";
        }
        // line 163
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 200) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 200), "html", null, true);
            echo "</option>";
        }
        // line 164
        echo "\t\t\t\t\t";
        if ((((isset($context["idup"]) ? $context["idup"] : null) - 100) >= 0)) {
            echo "<option>";
            echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) - 100), "html", null, true);
            echo "</option>";
        }
        // line 165
        echo "\t\t\t\t\t<option selected=\"selected\">";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "</option>
\t\t\t\t\t<option>";
        // line 166
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 100), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 167
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 200), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 168
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 300), "html", null, true);
        echo " </option>
\t\t\t\t\t<option>";
        // line 169
        echo twig_escape_filter($this->env, ((isset($context["idup"]) ? $context["idup"] : null) + 400), "html", null, true);
        echo " </option>
\t\t\t\t</select>
\t\t\t\t<input id=\"formsubmit\" type=\"submit\" value=\"检索\" />
\t\t\t</span>
\t\t</form>
\t</div>
\t<div class=\"cl-xs-10 col-lg-3 banner\">
\t\t<span id=\"reviewmodespan\"></span>
\t\t<span id=\"chitoengmodespan\"></span>
\t</div>
\t<div class=\"cl-xs-2 col-lg-1 banner\">
\t\t<i class=\"visible-xs visible-sm glyphicon glyphicon-phone\"></i>
\t\t<i class=\"visible-md fa fa-android\"></i>
\t\t<i class=\"visible-lg fa fa-windows\"></i>
        
\t</div>
</div>

<div id=\"Container\" class=\"sandbox\">
  \t<div class=\"row\">
\t\t";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wdlistarr"]) ? $context["wdlistarr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 190
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
\t\t\t\t<div id=\"wdtb";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" class=\"divgrid\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >  
\t\t\t\t\t<div class=\"wdeng\" id=\"wd";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" align=\"center\" valign=\"middle\" onclick=\"lookwd(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum"), "html", null, true);
            echo ")\" ondblclick=\"looksound('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"recdiv\" height=\"40\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"recspan\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "rec"), "html", null, true);
            echo "&nbsp;</span><a href=\"http://dict.cn/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i></a>&nbsp;<img src=\"images/";
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), (isset($context["impalllist"]) ? $context["impalllist"] : null))) {
                echo "rec";
            } else {
                echo "unr";
            }
            echo ".png\" id=\"impunr";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" onclick=\"addtoimp(this,";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eng"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chi"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gro"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "rec"), "html", null, true);
            echo "')\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"bt";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" height=\"20\" class=\"updowndiv\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-up arrowp\" onclick=\"postu(";
            // line 197
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
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove arrowp\" onclick=\"javasxript:\$('div[data-myorder=";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "]').remove();\"></span>
\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down arrowp\" onclick=\"postd(";
            // line 201
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
            // line 205
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 4) == 3)) {
                // line 206
                echo "\t\t\t<div class=\"clearfix visible-lg\"></div>
\t\t\t";
            }
            // line 208
            echo "\t\t\t";
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "curnum") % 3) == 2)) {
                // line 209
                echo "\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t";
            }
            // line 211
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "\t</div>
</div>
<p class=\"menu\">
  total number:<span id=\"totnum\">";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["totalnum"]) ? $context["totalnum"] : null), "html", null, true);
        echo "</span>/<span id=\"allgronum\"></span>
  &nbsp;&nbsp;
  Remote_address:";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["Remote_address"]) ? $context["Remote_address"] : null), "html", null, true);
        echo ";
  Ip:";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["ipaddress"]) ? $context["ipaddress"] : null), "html", null, true);
        echo "
</p>
<div class=\"row control-foot\">
\t<div class=\"col-xs-12 col-lg-7\">
\t\t<button id=\"undo\" class=\"btn btn-danger\" style=\"opacity: 0.3;\" onclick=\"undo('";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "','default')\" disabled=\"disabled\">  Undo(U)  </button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"rev\" class=\"btn btn-success\" onclick=\"revall()\">Review_mode(R)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"showall\" class=\"btn btn-success\" onclick=\"showall(";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo ")\">Show_all(S)</button>
\t\t&nbsp;&nbsp;    
\t\t<button id=\"buttonchitoeng\" class=\"btn btn-success\" onclick=\"funchitoeng()\">Chi_to_eng(C)</button>
\t\t&nbsp;&nbsp;    
\t\t<a href=\"exam.php?list=";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "&amp;gro=";
        echo twig_escape_filter($this->env, (isset($context["gro"]) ? $context["gro"] : null), "html", null, true);
        echo "&amp;idlo=";
        echo twig_escape_filter($this->env, (isset($context["idlo"]) ? $context["idlo"] : null), "html", null, true);
        echo "&amp;idup=";
        echo twig_escape_filter($this->env, (isset($context["idup"]) ? $context["idup"] : null), "html", null, true);
        echo "\"><button id=\"gotoexam\" class=\"btn btn-warning\">Go_to_exam(G)</button></a>
\t\t&nbsp;&nbsp;  
\t\t<a href=\"outputtocard.php?list=";
        // line 232
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
        // line 236
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : null), "html", null, true);
        echo "')\">Manual_Console(M)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"buttonlastrevword\" class=\"btn btn-primary\" onclick=\"funlastreviewwords()\">Last_word(L)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"buttonlooknextword\" class=\"btn btn-primary\" onclick=\"looknextword()\">Next_word(N)</button>
\t\t&nbsp;&nbsp;  
\t\t<button id=\"showstatis\" class=\"btn btn-primary\" onclick=\"showstatis()\">showstatis(T)</button>
\t</div>
</div>

<div class=\"progress\">
  <div class=\"progress-bar progress-bar-danger progress-bar-striped";
        // line 247
        if (((isset($context["gro"]) ? $context["gro"] : null) == 1)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-warning progress-bar-striped";
        // line 250
        if (((isset($context["gro"]) ? $context["gro"] : null) == 2)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-info progress-bar-striped";
        // line 253
        if (((isset($context["gro"]) ? $context["gro"] : null) == 3)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-primary progress-bar-striped";
        // line 256
        if (((isset($context["gro"]) ? $context["gro"] : null) == 4)) {
            echo " active";
        }
        echo "\" id=\"gro1probar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
    0%
  </div>
  <div class=\"progress-bar progress-bar-success progress-bar-striped";
        // line 259
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
        // line 266
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
        // line 269
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
        // line 272
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
        // line 275
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
\t\$(\"#reviewmodespan\").append(\"&nbsp;&nbsp;Review \");
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
        // line 320
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
        return array (  757 => 320,  703 => 275,  691 => 272,  679 => 269,  667 => 266,  655 => 259,  647 => 256,  639 => 253,  631 => 250,  623 => 247,  609 => 236,  596 => 232,  585 => 230,  576 => 226,  569 => 222,  562 => 218,  558 => 217,  553 => 215,  548 => 212,  542 => 211,  538 => 209,  535 => 208,  531 => 206,  529 => 205,  514 => 201,  509 => 199,  496 => 197,  492 => 196,  463 => 194,  444 => 192,  440 => 191,  422 => 190,  418 => 189,  395 => 169,  391 => 168,  387 => 167,  383 => 166,  378 => 165,  371 => 164,  364 => 163,  357 => 162,  351 => 161,  346 => 159,  340 => 156,  336 => 155,  332 => 154,  328 => 153,  323 => 152,  316 => 151,  309 => 150,  302 => 149,  296 => 148,  291 => 146,  283 => 143,  277 => 142,  271 => 141,  265 => 140,  259 => 139,  253 => 138,  248 => 136,  240 => 133,  234 => 132,  228 => 131,  222 => 130,  216 => 129,  210 => 128,  204 => 127,  198 => 126,  192 => 125,  186 => 124,  180 => 123,  174 => 122,  168 => 121,  162 => 120,  156 => 119,  150 => 118,  145 => 116,  26 => 6,  19 => 1,);
    }
}
