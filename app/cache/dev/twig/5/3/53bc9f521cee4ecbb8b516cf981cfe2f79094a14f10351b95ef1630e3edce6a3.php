<?php

/* ::backoffice.html.twig */
class __TwigTemplate_298e31a15c595fca9ce1bb5d5b42a96bb4746d3cb83cfa1c0086212cda422ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9949f3dfcaf147f9b5d5e8a1a27f8aad83b38148215901afd4dab83601f1c449 = $this->env->getExtension("native_profiler");
        $__internal_9949f3dfcaf147f9b5d5e8a1a27f8aad83b38148215901afd4dab83601f1c449->enter($__internal_9949f3dfcaf147f9b5d5e8a1a27f8aad83b38148215901afd4dab83601f1c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
</html>
<html lang=\"ar\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"description\" content=\"overview &amp; stats\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />


    <!-- basic styles -->
 <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/jquery-ui-1.10.3.full.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/dhtmlx.css"), "html", null, true);
        echo "\" />
    <!--[if IE 7]>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->

    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace.print.css"), "html", null, true);
        echo "\" media=\"print\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("colorbox/colorbox.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 8]>
    <link rel=\"stylesheet\" href=\"assets/css/ace-ie.min.css\" />
    <![endif]-->

    <!-- inline styles related to this page -->
    ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "    <!-- ace settings handler -->

    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- <link rel=\"shortcut icon\" href=\"http://labs.google.com/ridefinder/images/mm_20_green.png\" type=\"image/x-icon\"/>
    -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<div class=\"navbar navbar-default\" id=\"navbar\">
    <script type=\"text/javascript\">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class=\"navbar-container\" id=\"navbar-container\">
        <div class=\"navbar-header pull-left\">
            <img src =\"\"/>
        </div><!-- /.navbar-header -->

        <div class=\"navbar-header pull-right\" role=\"navigation\">
            <ul class=\"nav ace-nav\">
                <li class=\"green\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        Version &nbsp;<b>1</b>
                    </a>

                </li>
                <li class=\"purple\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-bell-alt icon-animated-bell\"></i>
                        <span class=\"badge badge-important\" id=\"countnotif\"></span>
                    </a>

                    <ul class=\"pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\" style=\" height: 570px; overflow-y: scroll;\">
                        <li class=\"dropdown-header\">
                            <i class=\"icon-warning-sign\"></i>
                            <span id=\"countnotif2\"> </span>  Notifications



                        </li>
                       55555
                    </ul>
                </li>

                <li class=\"light-blue\">
                    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">

                                <span class=\"user-info\">
                                    <small>Bienvenue,</small>
                                    ";
        // line 100
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 101
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 103
        echo "                                </span>

                        <i class=\"icon-caret-down\"></i>
                    </a>

                    <ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                        <li>
                            <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                <i class=\"icon-off\"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class=\"main-container\" id=\"main-container\">
    <script type=\"text/javascript\">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class=\"main-container-inner\">
        <a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
            <span class=\"menu-text\"></span>
        </a>

        <div class=\"sidebar\" id=\"sidebar\">
            <script type=\"text/javascript\">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
            </script>


            ";
        // line 144
        $this->loadTemplate("navbar.html.twig", "::backoffice.html.twig", 144)->display($context);
        // line 145
        echo "
            <div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
                <i class=\"icon-double-angle-left\" data-icon1=\"icon-double-angle-left\" data-icon2=\"icon-double-angle-right\"></i>
            </div>

            <script type=\"text/javascript\">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
    <!--        <a href=\"#\" title=\"tuninfoforyou\" target=\"blank\"><img src =\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" style=\"width: 177px;position: fixed;bottom: 0;left: 0;\"/></a>
-->
        </div>

        <div class=\"main-content\">
            ";
        // line 161
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "            <div id=\"dialog-confirm\" class=\"hide\">
                <div class=\"alert alert-info bigger-110\">
                    cet enregistrement sera supprimer
                </div>

                <div class=\"space-6\"></div>

                <p class=\"bigger-110 bolder center grey\">
                    <i class=\"icon-hand-right blue bigger-120\"></i>
                    Voulez êtes Sûr!!
                </p>
            </div>







        </div><!-- /.main-content -->

    </div><!-- /.main-container-inner -->
    <footer style=\"left:45%;position:absolute;bottom: 0px;\">
        <small>© Copyright 2015,<a href=\"#\">Biznshare</a>  </small>
    </footer>


</div><!-- /.main-container -->



<!--[if !IE]> -->

<script type=\"text/javascript\">
    window.jQuery || document.write(\"<script src='";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type=\"text/javascript\">
    window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->

<script type=\"text/javascript\">
    if (\"ontouchend\" in document)
        document.write(\"<script src='";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
</script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui-1.10.3.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dhtmlx.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootbox.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->


<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("colorbox/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(function (\$) {
        \$(\".id-btn-dialog2\").on('click', function (e) {
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            \$(\"#dialog-confirm\").removeClass('hide').dialog({
                resizable: false,
                modal: true,
                title: \"\\t Confirmation\",
                title_html: true,
                buttons: [
                    {
                        html: \"<i class='icon-trash bigger-110'></i>&nbsp; Supprimer\",
                        \"class\": \"btn btn-danger btn-xs\",
                        click: function () {
                            //\$(this).dialog(\"close\");

                            \$(location).attr('href', url);
                        }
                    }
                    ,
                    {
                        html: \"<i class='icon-remove bigger-110'></i>&nbsp; Annuler\",
                        \"class\": \"btn btn-xs\",
                        click: function () {
                            \$(this).dialog(\"close\");
                        }
                    }
                ]
            });
        });
    })
</script >
<!--script>
    jQuery(function (\$) {

        \$(\".iframe\").colorbox({iframe: true, width: \"50%\", height: \"80%\", overlayClose: false});
        var notif = 0;
        notif += notifentrtien;
        notif += notifcotrat;
        notif += notifcotrat2;
        notif += notifleasing;
        //..........
        \$(\"#countnotif\").html(notif);
        \$(\"#countnotif2\").html(notif);
    });
</script-->
";
        // line 271
        $this->displayBlock('javascripts', $context, $blocks);
        // line 273
        echo "
</body>
</html>";
        
        $__internal_9949f3dfcaf147f9b5d5e8a1a27f8aad83b38148215901afd4dab83601f1c449->leave($__internal_9949f3dfcaf147f9b5d5e8a1a27f8aad83b38148215901afd4dab83601f1c449_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0059f1c0ab44f13d6118e89a94b478a120cce3556a8bf22da097582ffd2ab8b3 = $this->env->getExtension("native_profiler");
        $__internal_0059f1c0ab44f13d6118e89a94b478a120cce3556a8bf22da097582ffd2ab8b3->enter($__internal_0059f1c0ab44f13d6118e89a94b478a120cce3556a8bf22da097582ffd2ab8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Biznshare";
        
        $__internal_0059f1c0ab44f13d6118e89a94b478a120cce3556a8bf22da097582ffd2ab8b3->leave($__internal_0059f1c0ab44f13d6118e89a94b478a120cce3556a8bf22da097582ffd2ab8b3_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_539a8d4525c3c3c45a2180556e2af6568db0f5b38cb38343b4122c03a30da53f = $this->env->getExtension("native_profiler");
        $__internal_539a8d4525c3c3c45a2180556e2af6568db0f5b38cb38343b4122c03a30da53f->enter($__internal_539a8d4525c3c3c45a2180556e2af6568db0f5b38cb38343b4122c03a30da53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_539a8d4525c3c3c45a2180556e2af6568db0f5b38cb38343b4122c03a30da53f->leave($__internal_539a8d4525c3c3c45a2180556e2af6568db0f5b38cb38343b4122c03a30da53f_prof);

    }

    // line 161
    public function block_body($context, array $blocks = array())
    {
        $__internal_43144debbfc19ffde048994660c7d4fb8d3ae4a72d88903bba4b706b61f4ad26 = $this->env->getExtension("native_profiler");
        $__internal_43144debbfc19ffde048994660c7d4fb8d3ae4a72d88903bba4b706b61f4ad26->enter($__internal_43144debbfc19ffde048994660c7d4fb8d3ae4a72d88903bba4b706b61f4ad26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43144debbfc19ffde048994660c7d4fb8d3ae4a72d88903bba4b706b61f4ad26->leave($__internal_43144debbfc19ffde048994660c7d4fb8d3ae4a72d88903bba4b706b61f4ad26_prof);

    }

    // line 271
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2200a5d51eac928ebce6289a31c3fe27a3ab531c45be46cc3dbbe8b2f71727eb = $this->env->getExtension("native_profiler");
        $__internal_2200a5d51eac928ebce6289a31c3fe27a3ab531c45be46cc3dbbe8b2f71727eb->enter($__internal_2200a5d51eac928ebce6289a31c3fe27a3ab531c45be46cc3dbbe8b2f71727eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2200a5d51eac928ebce6289a31c3fe27a3ab531c45be46cc3dbbe8b2f71727eb->leave($__internal_2200a5d51eac928ebce6289a31c3fe27a3ab531c45be46cc3dbbe8b2f71727eb_prof);

    }

    public function getTemplateName()
    {
        return "::backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 271,  427 => 161,  415 => 41,  403 => 6,  394 => 273,  392 => 271,  341 => 223,  337 => 222,  332 => 220,  324 => 215,  320 => 214,  316 => 213,  312 => 212,  308 => 211,  303 => 209,  287 => 196,  251 => 162,  249 => 161,  241 => 156,  228 => 145,  226 => 144,  189 => 110,  180 => 103,  174 => 101,  172 => 100,  113 => 44,  109 => 42,  107 => 41,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  74 => 26,  64 => 19,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* </html>*/
/* <html lang="ar">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <title>{% block title %}Biznshare{% endblock %}</title>*/
/* */
/*     <meta name="description" content="overview &amp; stats" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* */
/* */
/*     <!-- basic styles -->*/
/*  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />*/
/*     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/jquery-ui-1.10.3.full.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/dhtmlx.css')}}" />*/
/*     <!--[if IE 7]>*/
/*     <link rel="stylesheet" href="{{asset('assets/css/font-awesome-ie7.min.css')}}" />*/
/*     <![endif]-->*/
/* */
/*     <!-- page specific plugin styles -->*/
/* */
/*     <!-- fonts -->*/
/* */
/*     <link rel="stylesheet" href="{{asset('assets/css/ace-fonts.css')}}" />*/
/* */
/*     <!-- ace styles -->*/
/* */
/*     <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" media="screen" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/ace.print.css')}}" media="print" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('colorbox/colorbox.css')}}" />*/
/* */
/*     <!--[if lte IE 8]>*/
/*     <link rel="stylesheet" href="assets/css/ace-ie.min.css" />*/
/*     <![endif]-->*/
/* */
/*     <!-- inline styles related to this page -->*/
/*     {% block stylesheets %} {% endblock %}*/
/*     <!-- ace settings handler -->*/
/* */
/*     <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- <link rel="shortcut icon" href="http://labs.google.com/ridefinder/images/mm_20_green.png" type="image/x-icon"/>*/
/*     -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="assets/js/html5shiv.js"></script>*/
/*     <script src="assets/js/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* <div class="navbar navbar-default" id="navbar">*/
/*     <script type="text/javascript">*/
/*         try {*/
/*             ace.settings.check('navbar', 'fixed')*/
/*         } catch (e) {*/
/*         }*/
/*     </script>*/
/* */
/*     <div class="navbar-container" id="navbar-container">*/
/*         <div class="navbar-header pull-left">*/
/*             <img src =""/>*/
/*         </div><!-- /.navbar-header -->*/
/* */
/*         <div class="navbar-header pull-right" role="navigation">*/
/*             <ul class="nav ace-nav">*/
/*                 <li class="green">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         Version &nbsp;<b>1</b>*/
/*                     </a>*/
/* */
/*                 </li>*/
/*                 <li class="purple">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-bell-alt icon-animated-bell"></i>*/
/*                         <span class="badge badge-important" id="countnotif"></span>*/
/*                     </a>*/
/* */
/*                     <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close" style=" height: 570px; overflow-y: scroll;">*/
/*                         <li class="dropdown-header">*/
/*                             <i class="icon-warning-sign"></i>*/
/*                             <span id="countnotif2"> </span>  Notifications*/
/* */
/* */
/* */
/*                         </li>*/
/*                        55555*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="light-blue">*/
/*                     <a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* */
/*                                 <span class="user-info">*/
/*                                     <small>Bienvenue,</small>*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                         {{ app.user.username }}*/
/*                                     {% endif %}*/
/*                                 </span>*/
/* */
/*                         <i class="icon-caret-down"></i>*/
/*                     </a>*/
/* */
/*                     <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/*                         <li>*/
/*                             <a href="{{ path('fos_user_security_logout') }}">*/
/*                                 <i class="icon-off"></i>*/
/*                                 Logout*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul><!-- /.ace-nav -->*/
/*         </div><!-- /.navbar-header -->*/
/*     </div><!-- /.container -->*/
/* </div>*/
/* */
/* <div class="main-container" id="main-container">*/
/*     <script type="text/javascript">*/
/*         try {*/
/*             ace.settings.check('main-container', 'fixed')*/
/*         } catch (e) {*/
/*         }*/
/*     </script>*/
/* */
/*     <div class="main-container-inner">*/
/*         <a class="menu-toggler" id="menu-toggler" href="#">*/
/*             <span class="menu-text"></span>*/
/*         </a>*/
/* */
/*         <div class="sidebar" id="sidebar">*/
/*             <script type="text/javascript">*/
/*                 try {*/
/*                     ace.settings.check('sidebar', 'fixed')*/
/*                 } catch (e) {*/
/*                 }*/
/*             </script>*/
/* */
/* */
/*             {% include 'navbar.html.twig' %}*/
/* */
/*             <div class="sidebar-collapse" id="sidebar-collapse">*/
/*                 <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/*                 try {*/
/*                     ace.settings.check('sidebar', 'collapsed')*/
/*                 } catch (e) {*/
/*                 }*/
/*             </script>*/
/*     <!--        <a href="#" title="tuninfoforyou" target="blank"><img src ="{{asset('assets/img/logo.png')}}" style="width: 177px;position: fixed;bottom: 0;left: 0;"/></a>*/
/* -->*/
/*         </div>*/
/* */
/*         <div class="main-content">*/
/*             {% block body %}{% endblock %}*/
/*             <div id="dialog-confirm" class="hide">*/
/*                 <div class="alert alert-info bigger-110">*/
/*                     cet enregistrement sera supprimer*/
/*                 </div>*/
/* */
/*                 <div class="space-6"></div>*/
/* */
/*                 <p class="bigger-110 bolder center grey">*/
/*                     <i class="icon-hand-right blue bigger-120"></i>*/
/*                     Voulez êtes Sûr!!*/
/*                 </p>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         </div><!-- /.main-content -->*/
/* */
/*     </div><!-- /.main-container-inner -->*/
/*     <footer style="left:45%;position:absolute;bottom: 0px;">*/
/*         <small>© Copyright 2015,<a href="#">Biznshare</a>  </small>*/
/*     </footer>*/
/* */
/* */
/* </div><!-- /.main-container -->*/
/* */
/* */
/* */
/* <!--[if !IE]> -->*/
/* */
/* <script type="text/javascript">*/
/*     window.jQuery || document.write("<script src='{{asset('assets/js/jquery-1.10.2.min.js')}}'>" + "<" + "/script>");*/
/* </script>*/
/* */
/* <!-- <![endif]-->*/
/* */
/* <!--[if IE]>*/
/* <script type="text/javascript">*/
/*     window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");*/
/* </script>*/
/* <![endif]-->*/
/* */
/* <script type="text/javascript">*/
/*     if ("ontouchend" in document)*/
/*         document.write("<script src='{{asset('assets/js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");*/
/* </script>*/
/* <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/typeahead-bs2.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/jquery-ui-1.10.3.full.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/dhtmlx.js')}}"></script>*/
/* <script src="{{asset('bootbox.js')}}"></script>*/
/* */
/* <!-- page specific plugin scripts -->*/
/* */
/* */
/* <script src="{{asset('colorbox/jquery.colorbox.js')}}"></script>*/
/* */
/* <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/* <script type="text/javascript">*/
/*     jQuery(function ($) {*/
/*         $(".id-btn-dialog2").on('click', function (e) {*/
/*             e.preventDefault();*/
/*             var url = $(this).attr("href");*/
/*             $("#dialog-confirm").removeClass('hide').dialog({*/
/*                 resizable: false,*/
/*                 modal: true,*/
/*                 title: "\t Confirmation",*/
/*                 title_html: true,*/
/*                 buttons: [*/
/*                     {*/
/*                         html: "<i class='icon-trash bigger-110'></i>&nbsp; Supprimer",*/
/*                         "class": "btn btn-danger btn-xs",*/
/*                         click: function () {*/
/*                             //$(this).dialog("close");*/
/* */
/*                             $(location).attr('href', url);*/
/*                         }*/
/*                     }*/
/*                     ,*/
/*                     {*/
/*                         html: "<i class='icon-remove bigger-110'></i>&nbsp; Annuler",*/
/*                         "class": "btn btn-xs",*/
/*                         click: function () {*/
/*                             $(this).dialog("close");*/
/*                         }*/
/*                     }*/
/*                 ]*/
/*             });*/
/*         });*/
/*     })*/
/* </script >*/
/* <!--script>*/
/*     jQuery(function ($) {*/
/* */
/*         $(".iframe").colorbox({iframe: true, width: "50%", height: "80%", overlayClose: false});*/
/*         var notif = 0;*/
/*         notif += notifentrtien;*/
/*         notif += notifcotrat;*/
/*         notif += notifcotrat2;*/
/*         notif += notifleasing;*/
/*         //..........*/
/*         $("#countnotif").html(notif);*/
/*         $("#countnotif2").html(notif);*/
/*     });*/
/* </script-->*/
/* {% block javascripts %}*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
