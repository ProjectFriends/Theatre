<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_30ede18fa72130f2158c0f0b74c43a0ec0f9077a3d33882069ebf72abec829b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f11a600edbd804f4da12422dced3941a3f0e72610ad721a7e8f35b7b77036ff7 = $this->env->getExtension("native_profiler");
        $__internal_f11a600edbd804f4da12422dced3941a3f0e72610ad721a7e8f35b7b77036ff7->enter($__internal_f11a600edbd804f4da12422dced3941a3f0e72610ad721a7e8f35b7b77036ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11a600edbd804f4da12422dced3941a3f0e72610ad721a7e8f35b7b77036ff7->leave($__internal_f11a600edbd804f4da12422dced3941a3f0e72610ad721a7e8f35b7b77036ff7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1121373f2ea695e0e50684078d558b50e3c86e13a7925fedd987906ede548ad = $this->env->getExtension("native_profiler");
        $__internal_b1121373f2ea695e0e50684078d558b50e3c86e13a7925fedd987906ede548ad->enter($__internal_b1121373f2ea695e0e50684078d558b50e3c86e13a7925fedd987906ede548ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1121373f2ea695e0e50684078d558b50e3c86e13a7925fedd987906ede548ad->leave($__internal_b1121373f2ea695e0e50684078d558b50e3c86e13a7925fedd987906ede548ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cdb878fbc6c4889594bfeba0c7863837a2458a677dfbf41d3c466d60dd5e9ac = $this->env->getExtension("native_profiler");
        $__internal_0cdb878fbc6c4889594bfeba0c7863837a2458a677dfbf41d3c466d60dd5e9ac->enter($__internal_0cdb878fbc6c4889594bfeba0c7863837a2458a677dfbf41d3c466d60dd5e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cdb878fbc6c4889594bfeba0c7863837a2458a677dfbf41d3c466d60dd5e9ac->leave($__internal_0cdb878fbc6c4889594bfeba0c7863837a2458a677dfbf41d3c466d60dd5e9ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_047a0ad7faef8e687609001301263871f18dde5c04e3d35e2f2e11e3e8309a22 = $this->env->getExtension("native_profiler");
        $__internal_047a0ad7faef8e687609001301263871f18dde5c04e3d35e2f2e11e3e8309a22->enter($__internal_047a0ad7faef8e687609001301263871f18dde5c04e3d35e2f2e11e3e8309a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_047a0ad7faef8e687609001301263871f18dde5c04e3d35e2f2e11e3e8309a22->leave($__internal_047a0ad7faef8e687609001301263871f18dde5c04e3d35e2f2e11e3e8309a22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
