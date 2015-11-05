<?php

/* FOSUserBundle::layoutUser.html.twig */
class __TwigTemplate_665b4dfdd44352ef461b52bb020158fa4350135d2ae56f9d72ca3246b0eca455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontoffice.html.twig", "FOSUserBundle::layoutUser.html.twig", 1);
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
        $__internal_ace10d13e5815f5c0ade35114d97e35a5352dc300a8aeb2838b71b3032c84a62 = $this->env->getExtension("native_profiler");
        $__internal_ace10d13e5815f5c0ade35114d97e35a5352dc300a8aeb2838b71b3032c84a62->enter($__internal_ace10d13e5815f5c0ade35114d97e35a5352dc300a8aeb2838b71b3032c84a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layoutUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace10d13e5815f5c0ade35114d97e35a5352dc300a8aeb2838b71b3032c84a62->leave($__internal_ace10d13e5815f5c0ade35114d97e35a5352dc300a8aeb2838b71b3032c84a62_prof);

    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_529368a53b2202ebab93fa1809d26952116643e800c98e961af7c79ff010934f = $this->env->getExtension("native_profiler");
        $__internal_529368a53b2202ebab93fa1809d26952116643e800c98e961af7c79ff010934f->enter($__internal_529368a53b2202ebab93fa1809d26952116643e800c98e961af7c79ff010934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 3
        echo "     <div id=\"global_page\">
    <header>

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


                </div>
            </div>
        </div>

    </header>
         
        </div>
";
        
        $__internal_529368a53b2202ebab93fa1809d26952116643e800c98e961af7c79ff010934f->leave($__internal_529368a53b2202ebab93fa1809d26952116643e800c98e961af7c79ff010934f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7e08169a141a4e730819c309ffee2aa66c4db0f6d76877f94d7268c00479cb = $this->env->getExtension("native_profiler");
        $__internal_1a7e08169a141a4e730819c309ffee2aa66c4db0f6d76877f94d7268c00479cb->enter($__internal_1a7e08169a141a4e730819c309ffee2aa66c4db0f6d76877f94d7268c00479cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 31
        echo "    <footer>
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
";
        
        $__internal_1a7e08169a141a4e730819c309ffee2aa66c4db0f6d76877f94d7268c00479cb->leave($__internal_1a7e08169a141a4e730819c309ffee2aa66c4db0f6d76877f94d7268c00479cb_prof);

    }

    // line 29
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d7b2545f84245b65a300ea3fab452c96fde207e5c3b17d933990f468321e620b = $this->env->getExtension("native_profiler");
        $__internal_d7b2545f84245b65a300ea3fab452c96fde207e5c3b17d933990f468321e620b->enter($__internal_d7b2545f84245b65a300ea3fab452c96fde207e5c3b17d933990f468321e620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 30
        echo "    ";
        
        $__internal_d7b2545f84245b65a300ea3fab452c96fde207e5c3b17d933990f468321e620b->leave($__internal_d7b2545f84245b65a300ea3fab452c96fde207e5c3b17d933990f468321e620b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  137 => 29,  82 => 31,  79 => 29,  73 => 28,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::frontoffice.html.twig" %}*/
/* {% block navigation %}*/
/*      <div id="global_page">*/
/*     <header>*/
/* */
/*         <div class="header clearfix">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="topbar">*/
/*                         <div class="col-lg-4">*/
/*                             <div class="logo pull-left">*/
/*                                 <a href="" title="HR Easy Blog"><img src="http://www.theatre-contemporain.net/images/menu/logo/logo_theatre-280x40-white.png" alt="HR Easy Blog" id="logo" data-pin-nopin="true"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-8">*/
/*                             <div class="pull-right top-ads hidden-xs"><img src="http://www.themevina.com/images/468x60.jpg" alt="" data-pin-nopin="true"></div>		</div>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </header>*/
/*          */
/*         </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block contenu %}*/
/*     {% endblock %}*/
/*     <footer>*/
/*         <div class="container"  id="footer">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-6">*/
/* */
/*                     <ul class="menufooter">*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3 col-sm-6">*/
/* */
/*                     <ul class="menufooter">*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/* */
/*                     <ul class="menufooter">*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/* */
/*                     <ul class="menufooter">*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                         <li><a href="#">رابط واحد</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>  */
/*         <!-- FOOTER_LINK} -->*/
/*     </footer>*/
/* {% endblock %}*/
