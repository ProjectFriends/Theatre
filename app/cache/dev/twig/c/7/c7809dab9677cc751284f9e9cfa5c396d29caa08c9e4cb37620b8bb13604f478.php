<?php

/* FrontOfficeBundle::layoutfront.html.twig */
class __TwigTemplate_ec71216d552b968ffd6f93db5c5c1fd4714f8cc55d32a055a9d8aa7b8e782eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontoffice.html.twig", "FrontOfficeBundle::layoutfront.html.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15f9fddf1146893373ef9a803f2ff11cb5f076ddeab61962e1bae53996e7a7f9 = $this->env->getExtension("native_profiler");
        $__internal_15f9fddf1146893373ef9a803f2ff11cb5f076ddeab61962e1bae53996e7a7f9->enter($__internal_15f9fddf1146893373ef9a803f2ff11cb5f076ddeab61962e1bae53996e7a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::layoutfront.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f9fddf1146893373ef9a803f2ff11cb5f076ddeab61962e1bae53996e7a7f9->leave($__internal_15f9fddf1146893373ef9a803f2ff11cb5f076ddeab61962e1bae53996e7a7f9_prof);

    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8b9c52ec21f232470ec9751b9c89a6ac54272fefa6b5c03739fa60d39f5a7a9d = $this->env->getExtension("native_profiler");
        $__internal_8b9c52ec21f232470ec9751b9c89a6ac54272fefa6b5c03739fa60d39f5a7a9d->enter($__internal_8b9c52ec21f232470ec9751b9c89a6ac54272fefa6b5c03739fa60d39f5a7a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 3
        echo "    <div id=\"global_page\">
        <header>
            <div id=\"top_theatre\">
                <div class=\"navbar navbar-conx pro-1\">
                    <div class=\"container\">
                        <div class=\"row conx\">
                            <div class=\"navbar-header\">

                                ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "

                                    <p class=\"navbar-text navbar-right\">
                                       <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" > تسجيل الخروج</a>
                                        |
                                       <a href=\"#\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                    </p>

                                ";
        } else {
            // line 21
            echo "
                                    <p class=\"navbar-text navbar-right\">
                                        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">تسجيل الدخول</a>
                                        |
                                        <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">فتح حساب</a>
                                    </p>

                                ";
        }
        // line 29
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"header clearfix\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"topbar\">
                                <div class=\"col-lg-4\">
                                    <div class=\"logo pull-left\">
                                        <a href=\"\" title=\"HR Easy Blog\"><img src=\"http://www.theatre-contemporain.net/images/menu/logo/logo_theatre-280x40-white.png\" alt=\"HR Easy Blog\" id=\"logo\" data-pin-nopin=\"true\"></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-8\">
                                    <div class=\"pull-right top-ads hidden-xs\"><img src=\"http://www.themevina.com/images/468x60.jpg\" alt=\"\" data-pin-nopin=\"true\"></div>\t\t</div>
                            </div>


                            <div id=\"navigation\" class=\"navbar navbar-default\">

                                <div class=\"navbar-header\">
                                    <button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                                <div class=\"navbar-collapse collapse\">
                                    <ul  class=\"nav navbar-nav\" >
                                        <li>
                                            <a href=\"\" class=\"blue\">مواضيع الساعة</a>
                                        </li>
                                        <li class=\"active\"><a href=\"\" class=\"blueciel\">السيرة الذاتية</a></li>
                                        <li><a href=\"\"  class=\"vert\">نصوص</a></li>
                                        <li><a href=\"\" class=\"rouge\">عروض</a></li>
                                        <li><a href=\"\"  class=\"jaune\">التثقيف</a></li>
                                        <li><a href=\"\"  class=\"vertfonce\">الفضاء النقدي</a></li>
                                        <li><a  href=\"\"  class=\"grisfonce\">مسرح</a></li>
                                        <li><a  href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("front_office_event");
        echo "\"  class=\"grisclair\">الفعاليات</a></li>
                                        <li><a  href=\"\"  class=\"blue\">اعلانات</a></li>
                                    </ul>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
";
        
        $__internal_8b9c52ec21f232470ec9751b9c89a6ac54272fefa6b5c03739fa60d39f5a7a9d->leave($__internal_8b9c52ec21f232470ec9751b9c89a6ac54272fefa6b5c03739fa60d39f5a7a9d_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea579c8b4b8a09e50236a9e5f2c9d9b0354aaa138b59ab45cb0ca70c7c8bf18 = $this->env->getExtension("native_profiler");
        $__internal_9ea579c8b4b8a09e50236a9e5f2c9d9b0354aaa138b59ab45cb0ca70c7c8bf18->enter($__internal_9ea579c8b4b8a09e50236a9e5f2c9d9b0354aaa138b59ab45cb0ca70c7c8bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "    <div id=\"wrapper\">
        ";
        // line 83
        $this->displayBlock('contenu', $context, $blocks);
        // line 85
        echo "        <footer>
            <div class=\"container\"  id=\"footer\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">

                        <ul class=\"menufooter\">
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                        </ul>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">

                        <ul class=\"menufooter\">
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">

                        <ul class=\"menufooter\">
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">

                        <ul class=\"menufooter\">
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                            <li><a href=\"#\">رابط واحد</a></li>
                        </ul>
                    </div>
                </div>
            </div>  
            <!-- FOOTER_LINK} -->
        </footer>
    </div>  
";
        
        $__internal_9ea579c8b4b8a09e50236a9e5f2c9d9b0354aaa138b59ab45cb0ca70c7c8bf18->leave($__internal_9ea579c8b4b8a09e50236a9e5f2c9d9b0354aaa138b59ab45cb0ca70c7c8bf18_prof);

    }

    // line 83
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ef16b670cefac3738677398d6a4c6bc6fe1ff43b06b9fedc78aa6d370a142182 = $this->env->getExtension("native_profiler");
        $__internal_ef16b670cefac3738677398d6a4c6bc6fe1ff43b06b9fedc78aa6d370a142182->enter($__internal_ef16b670cefac3738677398d6a4c6bc6fe1ff43b06b9fedc78aa6d370a142182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 84
        echo "        ";
        
        $__internal_ef16b670cefac3738677398d6a4c6bc6fe1ff43b06b9fedc78aa6d370a142182->leave($__internal_ef16b670cefac3738677398d6a4c6bc6fe1ff43b06b9fedc78aa6d370a142182_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::layoutfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 84,  214 => 83,  158 => 85,  156 => 83,  153 => 82,  147 => 81,  128 => 68,  87 => 29,  80 => 25,  75 => 23,  71 => 21,  64 => 17,  59 => 15,  54 => 12,  52 => 11,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::frontoffice.html.twig" %}*/
/* {% block navigation %}*/
/*     <div id="global_page">*/
/*         <header>*/
/*             <div id="top_theatre">*/
/*                 <div class="navbar navbar-conx pro-1">*/
/*                     <div class="container">*/
/*                         <div class="row conx">*/
/*                             <div class="navbar-header">*/
/* */
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/* */
/*                                     <p class="navbar-text navbar-right">*/
/*                                        <a href="{{ path('fos_user_security_logout') }}" > تسجيل الخروج</a>*/
/*                                         |*/
/*                                        <a href="#"> {{  app.user.username }}</a>*/
/*                                     </p>*/
/* */
/*                                 {% else %}*/
/* */
/*                                     <p class="navbar-text navbar-right">*/
/*                                         <a href="{{ path('fos_user_security_login') }}">تسجيل الدخول</a>*/
/*                                         |*/
/*                                         <a href="{{ path('fos_user_registration_register') }}">فتح حساب</a>*/
/*                                     </p>*/
/* */
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="header clearfix">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="topbar">*/
/*                                 <div class="col-lg-4">*/
/*                                     <div class="logo pull-left">*/
/*                                         <a href="" title="HR Easy Blog"><img src="http://www.theatre-contemporain.net/images/menu/logo/logo_theatre-280x40-white.png" alt="HR Easy Blog" id="logo" data-pin-nopin="true"></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-lg-8">*/
/*                                     <div class="pull-right top-ads hidden-xs"><img src="http://www.themevina.com/images/468x60.jpg" alt="" data-pin-nopin="true"></div>		</div>*/
/*                             </div>*/
/* */
/* */
/*                             <div id="navigation" class="navbar navbar-default">*/
/* */
/*                                 <div class="navbar-header">*/
/*                                     <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">*/
/*                                         <span class="sr-only">Toggle navigation</span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                     </button>*/
/*                                 </div>*/
/*                                 <div class="navbar-collapse collapse">*/
/*                                     <ul  class="nav navbar-nav" >*/
/*                                         <li>*/
/*                                             <a href="" class="blue">مواضيع الساعة</a>*/
/*                                         </li>*/
/*                                         <li class="active"><a href="" class="blueciel">السيرة الذاتية</a></li>*/
/*                                         <li><a href=""  class="vert">نصوص</a></li>*/
/*                                         <li><a href="" class="rouge">عروض</a></li>*/
/*                                         <li><a href=""  class="jaune">التثقيف</a></li>*/
/*                                         <li><a href=""  class="vertfonce">الفضاء النقدي</a></li>*/
/*                                         <li><a  href=""  class="grisfonce">مسرح</a></li>*/
/*                                         <li><a  href="{{ path('front_office_event') }}"  class="grisclair">الفعاليات</a></li>*/
/*                                         <li><a  href=""  class="blue">اعلانات</a></li>*/
/*                                     </ul>       */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         {% block contenu %}*/
/*         {% endblock %}*/
/*         <footer>*/
/*             <div class="container"  id="footer">*/
/*                 <div class="row">*/
/*                     <div class="col-md-3 col-sm-6">*/
/* */
/*                         <ul class="menufooter">*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3 col-sm-6">*/
/* */
/*                         <ul class="menufooter">*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6">*/
/* */
/*                         <ul class="menufooter">*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6">*/
/* */
/*                         <ul class="menufooter">*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                             <li><a href="#">رابط واحد</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>  */
/*             <!-- FOOTER_LINK} -->*/
/*         </footer>*/
/*     </div>  */
/* {% endblock %}*/
