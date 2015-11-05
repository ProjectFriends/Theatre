<?php

/* navbar.html.twig */
class __TwigTemplate_90ae9f91ad78ee78f5f2ceebd31c3607db70e1d2996071b684e7c95f5ddc5f78 extends Twig_Template
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
        $__internal_d59da94679b2b41d4b3e0e0429a15dc096f1edfe16fcb87afaa45287dbba8efe = $this->env->getExtension("native_profiler");
        $__internal_d59da94679b2b41d4b3e0e0429a15dc096f1edfe16fcb87afaa45287dbba8efe->enter($__internal_d59da94679b2b41d4b3e0e0429a15dc096f1edfe16fcb87afaa45287dbba8efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-list\">
 <li class=\"";
        // line 2
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "users")) {
            echo "active";
        }
        echo "\">

        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">
            <i class=\"icon-user\"></i>
            <span class=\"menu-text\">قائمة المشرفين </span>
        </a>

    </li>

<li class=\"";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_membre")) {
            echo "active";
        }
        echo "\">

        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_membre");
        echo "\">
            <i class=\"icon-user\"></i>
            <span class=\"menu-text\">قائمة الاعضاء الموقع
        </span></a>

    </li>


    <li class=\"";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "activite")) {
            echo "active open";
        }
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "artistes")) {
            echo "active open";
        }
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "structure")) {
            echo "active open";
        }
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "pays")) {
            echo "active open";
        }
        echo "\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("artistes");
        echo "\" class=\"dropdown-toggle\">
            <i class=\"icon-cogs\"></i>
            <span class=\"menu-text\"> تكوينات الموقع</span>

            <b class=\"arrow icon-angle-down\"></b>
        </a>

        <ul class=\"submenu\">
            <li class=\"";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "artistes")) {
            echo "active ";
        }
        echo "\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("artistes");
        echo "\">
                    <i class=\"icon-double-angle-right\"></i>
                    قائمة الفنان
                </a>
            </li>


   <li class=\"";
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "pays")) {
            echo "active ";
        }
        echo "\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pays");
        echo "\">
                    <i class=\"icon-double-angle-right\"></i>قائمة البلدان
                    </a>
   </li>



   <li class=\"";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "structure")) {
            echo "active ";
        }
        echo "\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("structure");
        echo "\">
                    <i class=\"icon-double-angle-right\"></i>نوع الهيكل
                    </a>
   </li>



   <li class=\"";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "activite")) {
            echo "active ";
        }
        echo "\">
                <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("activite");
        echo "\">
                    <i class=\"icon-double-angle-right\"></i>قطاع الأعمال
                    </a>
   </li>




        </ul>
    </li>




</ul><!-- /.nav-list -->";
        
        $__internal_d59da94679b2b41d4b3e0e0429a15dc096f1edfe16fcb87afaa45287dbba8efe->leave($__internal_d59da94679b2b41d4b3e0e0429a15dc096f1edfe16fcb87afaa45287dbba8efe_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  134 => 54,  124 => 47,  118 => 46,  108 => 39,  102 => 38,  92 => 31,  86 => 30,  75 => 22,  60 => 21,  49 => 13,  42 => 11,  32 => 4,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-list">*/
/*  <li class="{% if app.request.attributes.get('_route') == 'users' %}active{% endif %}">*/
/* */
/*         <a href="{{ path('users') }}">*/
/*             <i class="icon-user"></i>*/
/*             <span class="menu-text">قائمة المشرفين </span>*/
/*         </a>*/
/* */
/*     </li>*/
/* */
/* <li class="{% if app.request.attributes.get('_route') == 'user_membre' %}active{% endif %}">*/
/* */
/*         <a href="{{ path('user_membre') }}">*/
/*             <i class="icon-user"></i>*/
/*             <span class="menu-text">قائمة الاعضاء الموقع*/
/*         </span></a>*/
/* */
/*     </li>*/
/* */
/* */
/*     <li class="{% if app.request.attributes.get('_route') == 'activite' %}active open{% endif %}{% if app.request.attributes.get('_route') == 'artistes' %}active open{% endif %}{% if app.request.attributes.get('_route') == 'structure' %}active open{% endif %}{% if app.request.attributes.get('_route') == 'pays' %}active open{% endif %}">*/
/*         <a href="{{ path('artistes') }}" class="dropdown-toggle">*/
/*             <i class="icon-cogs"></i>*/
/*             <span class="menu-text"> تكوينات الموقع</span>*/
/* */
/*             <b class="arrow icon-angle-down"></b>*/
/*         </a>*/
/* */
/*         <ul class="submenu">*/
/*             <li class="{% if app.request.attributes.get('_route') == 'artistes' %}active {% endif %}">*/
/*                 <a href="{{ path('artistes') }}">*/
/*                     <i class="icon-double-angle-right"></i>*/
/*                     قائمة الفنان*/
/*                 </a>*/
/*             </li>*/
/* */
/* */
/*    <li class="{% if app.request.attributes.get('_route') == 'pays' %}active {% endif %}">*/
/*                 <a href="{{ path('pays') }}">*/
/*                     <i class="icon-double-angle-right"></i>قائمة البلدان*/
/*                     </a>*/
/*    </li>*/
/* */
/* */
/* */
/*    <li class="{% if app.request.attributes.get('_route') == 'structure' %}active {% endif %}">*/
/*                 <a href="{{ path('structure') }}">*/
/*                     <i class="icon-double-angle-right"></i>نوع الهيكل*/
/*                     </a>*/
/*    </li>*/
/* */
/* */
/* */
/*    <li class="{% if app.request.attributes.get('_route') == 'activite' %}active {% endif %}">*/
/*                 <a href="{{ path('activite') }}">*/
/*                     <i class="icon-double-angle-right"></i>قطاع الأعمال*/
/*                     </a>*/
/*    </li>*/
/* */
/* */
/* */
/* */
/*         </ul>*/
/*     </li>*/
/* */
/* */
/* */
/* */
/* </ul><!-- /.nav-list -->*/
