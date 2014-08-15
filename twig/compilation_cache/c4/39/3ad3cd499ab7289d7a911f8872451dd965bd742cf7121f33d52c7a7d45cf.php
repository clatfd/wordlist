<?php

/* usercentermessage.html */
class __TwigTemplate_c4393ad3cd499ab7289d7a911f8872451dd965bd742cf7121f33d52c7a7d45cf extends Twig_Template
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
        echo "﻿
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zh-CN\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"zh-CN\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"zh-CN\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"zh-CN\">
  <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>复旦大学学生会</title>
    <meta name=\"description\" content=\"\">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel=\"stylesheet\" href=\"../lib/bootstrap/3.0.3/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"../lib/bootstrap/3.0.3/css/bootstrap-theme.min.css\" />

    <link rel=\"stylesheet\" href=\"css/index.css\" />
    <link rel=\"shortcut icon\" href=\"../favicon.ico\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"fd_su/style.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.jscrollpane.css\" media=\"all\" />
  </head>
  <body>
    <!--[if lt IE 7]>
    <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- header -->

    <div class=\"container\">
      <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Su.FD</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"nav-bar-collapse-1\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\">
              <a href=\"index.php\">首页</a>
            </li>
            <li>
              <a href=\"post.html\">新闻中心</a>
            </li>
            <li>
              <a href=\"post2.html\">校会简介</a>
            </li>
            <li>
              <a href=\"post3.html\">资源文档</a>
            </li>
            <li>
              <a href=\"assn.html\">社团在线</a>
            </li>
            <li>
              <a href=\"activity.html\">品牌活动</a>
            </li>
          </ul>
          

          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"#\">RSS</a>
            </li>
          
              <li class=\"dropdown\">
              <a data-toggle=\"dropdown\" href=\"#\">用户操作 <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                <li><a href='http://tac.fudan.edu.cn/thirds/xsh.act' class='login'>uis登陆</a></li>
                <li><a href='login.html' class='login'>登陆</a></li>

              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <!-- begin su-banner -->
      <div class=\"su-banner\">
        <div id=\"su-banner-search\">
          <form class=\"form-search\">
            <div class=\"input-group\">
              <input class=\"form-control\" placeholder=\"Search\" type=\"text\" id=\"search-input\"/>
              <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"submit\">
                  搜索
                </button> </span>
            </div>
          </form>
        </div>
      </div>
      <!-- end su-banner -->
      <!-- begin function bar -->
      <ul class=\"categories\">
        <li class=\"cat-item cat-item-1\">
          <a href=\"http://su.fudan.edu.cn/wiki/su_aac/download\" title=\"教室借用\">教室借用</a>
        </li>
        <li class=\"cat-item cat-item-1\">
          <a href=\"http://su.fudan.edu.cn/post/index.html\" title=\"信息发布\">信息发布</a>
        </li>
        <li class=\"cat-item cat-item-1\">
          <a href=\"http://su.fudan.edu.cn/wiki/su/assn\" title=\"精品社团\">精品社团</a>
        </li>
        <li class=\"cat-item cat-item-1\">
          <a href=\"http://su.fudan.edu.cn/wiki/su_aac/download\" title=\"横幅出借\">横幅出借</a>
        </li>
        <li class=\"cat-item cat-item-1\">
          <a href=\"http://su.fudan.edu.cn/wiki/su/intro\" title=\"快捷服务\">快捷服务</a>
        </li>
      </ul>
      <!-- end function bar -->
  

    <!-- end of header -->

    <!-- content -->
    <div class=\"content\" style=\"height:650px;\">
      <div class=\"sidebar col-md-3\">
        
        <div class=\"bs-example\">
            <ul class=\"nav nav-pills nav-stacked\"  style=\"max-width: 260px;margin-top: 30px;\">
              <li class=\"active\"><a href=\"javascript:\$('#usercentercontent').load('Test-message.php?type=all');\$('html,body').animate({scrollTop:0},'slow');\"> <i class=\"glyphicon glyphicon-home\"></i> <strong>用户中心</strong> </a></li>
              
            </ul>
            <br>
            <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
              <a href=\"TEST-usercentermessage.php\">
                <h3 class=\"panel-title\"><span id=\"badgeall\" class=\"badge pull-right\">0</span>
                        <strong>新消息</strong></h3>
                    </a>
            </div>
            
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('message.html?type=sys');\$('html,body').animate({scrollTop:0},'slow');\">
                      <i class=\"glyphicon glyphicon-envelope\"></i>
                      <span id=\"badgesys\" class=\"badge pull-right\">0</span>
                      系统消息
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('message.html?type=zgk');\$('html,body').animate({scrollTop:0},'slow');\">
                      <i class=\"glyphicon glyphicon-fullscreen\"></i>
                      <span id=\"badgezgk\" class=\"badge pull-right\">0</span>
                      下级组织转公开申请
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('message.html?type=zcy');\$('html,body').animate({scrollTop:0},'slow');\">
                      <i class=\"glyphicon glyphicon-hand-up\"></i>
                      <span id=\"badgezcy\" class=\"badge pull-right\">0</span>
                      下级列席成员加入申请
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('message.html?type=fre');\$('html,body').animate({scrollTop:0},'slow');\">
                      <i class=\"glyphicon glyphicon-warning-sign\"></i>
                      <span id=\"badgefre\" class=\"badge pull-right\">0</span>
                      账户冻结提示
                    </a>
            </div>
          </div>
            
            <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">
                      <strong>操作中心</strong></h3>
            </div>
            
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('accountinfo.html');\$('html,body').animate({scrollTop:0},'slow');\">
                    <i class=\"glyphicon glyphicon-user\"></i>
                      个人信息
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('newresource.html');\$('html,body').animate({scrollTop:0},'slow');\">
                    <i class=\"glyphicon glyphicon-send\"></i>
                      发布资源
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('resourcemanage.html');\$('html,body').animate({scrollTop:0},'slow');\">
                    <i class=\"glyphicon glyphicon-folder-open\"></i>
                      资源管理
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('organmanage.html');\$('html,body').animate({scrollTop:0},'slow');\">
                    <i class=\"glyphicon glyphicon-th\"></i>
                      内部组织管理
                    </a>
            </div>
            <div class=\"panel-body\">
              <a href=\"javascript:\$('#usercentercontent').load('membermanage.html');\$('html,body').animate({scrollTop:0},'slow');\">
                    <i class=\"glyphicon glyphicon-tower\"></i>
                      本组织成员管理
                    </a>
            </div>
            
          </div>


              
        </div>
      </div>
     
      <div class=\"col-md-9\" id=\"usercentercontent\">
        <p>Is loading..</p>
        <div class=\"progress progress-striped active\">
\t\t\t<div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
\t\t\t\t<span class=\"sr-only\">45% Complete</span>
\t\t\t</div>
        </div>
        <div class=\"alert alert-info\" align=\"center\" style=\"font-size: 25px;\">
\t\t\t<strong> 新消息 </strong> 
\t\t</div>
\t\t<p>???</p>
\t\t";
        // line 231
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 232
            echo "\t\t<div id=\"messagediv";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pageid"), "html", null, true);
            echo "\" class=\"messageitem alert alert-warning alert-dismissable\" onclick=\"readmessage('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pageid"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "databaseid"), "html", null, true);
            echo "')\" style=\"cursor: pointer;\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
\t\t\t<strong> <p align=\"left\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pageid"), "html", null, true);
            echo "  [ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "messagetype"), "html", null, true);
            echo " ] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content"), "html", null, true);
            echo "</p></strong> <p align=\"right\">由账户：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "senderaccount"), "html", null, true);
            echo " 发来</p>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "      </div>
    
    </div>
    <!-- end of content -->




    <!-- footer -->
    <div class=\"row\">   
    <nav id=\"footer-text\">
      <p class=\"navbar-text\">
        复旦大学学生会 信息部 © 2013
      </p>
    </nav>
    </div>
  
    <!-- end of footer -->


    <script src=\"js/vendor/modernizr-2.6.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"../lib/jquery/jquery-1.10.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"../lib/bootstrap/3.0.3/js/bootstrap.min.js\"></script>

    <script type=\"text/javascript\" src=\"js/usercenter.js\"></script>

      <script type=\"text/javascript\">
        Modernizr.load([{
//          load : ['js/vendor/jquery-1.10.2.min.js'],
//          load : ['//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'],
          complete : function() {
            if (!window.jQuery) {
              Modernizr.load('../lib/jquery/jquery-1.10.2.min.js');
            }
          }
        }, {
          // This will wait for the fallback to load and
          // execute if it needs to.
//          load : ['js/jquery.contentcarousel.js','js/jquery.easing.1.3.js', 'js/vendor/bootstrap.min.js', 'js/unslider.js']
        }, {
          load : ['js/vendor/sea.js', 'js/sea-modules/config.js'],
          complete : function() {
            seajs.use('common');
            //seajs.use('index/main');
          }
        }]);
      </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "usercentermessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 237,  265 => 234,  255 => 232,  251 => 231,  19 => 1,);
    }
}
