<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2a10be9f60a75446844db937b2de41824e27cf690c0ad1d31a99d6d3ab87a9d2 extends Twig_Template
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
        $__internal_b0126f4bd61b6d4aa6454311ed4da5a09e63a82ca07b588844f69b71906ff2ad = $this->env->getExtension("native_profiler");
        $__internal_b0126f4bd61b6d4aa6454311ed4da5a09e63a82ca07b588844f69b71906ff2ad->enter($__internal_b0126f4bd61b6d4aa6454311ed4da5a09e63a82ca07b588844f69b71906ff2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0126f4bd61b6d4aa6454311ed4da5a09e63a82ca07b588844f69b71906ff2ad->leave($__internal_b0126f4bd61b6d4aa6454311ed4da5a09e63a82ca07b588844f69b71906ff2ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37ccf4b7f78dba701492d71db08c78ceaee245b7df3d1fed15489b6319c266c0 = $this->env->getExtension("native_profiler");
        $__internal_37ccf4b7f78dba701492d71db08c78ceaee245b7df3d1fed15489b6319c266c0->enter($__internal_37ccf4b7f78dba701492d71db08c78ceaee245b7df3d1fed15489b6319c266c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37ccf4b7f78dba701492d71db08c78ceaee245b7df3d1fed15489b6319c266c0->leave($__internal_37ccf4b7f78dba701492d71db08c78ceaee245b7df3d1fed15489b6319c266c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f69c2ab629d58da7e3fea4ccec95c09dd138a85534784054d934f88b73b3a450 = $this->env->getExtension("native_profiler");
        $__internal_f69c2ab629d58da7e3fea4ccec95c09dd138a85534784054d934f88b73b3a450->enter($__internal_f69c2ab629d58da7e3fea4ccec95c09dd138a85534784054d934f88b73b3a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f69c2ab629d58da7e3fea4ccec95c09dd138a85534784054d934f88b73b3a450->leave($__internal_f69c2ab629d58da7e3fea4ccec95c09dd138a85534784054d934f88b73b3a450_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_339f201a4ccf6090bce20a2a575881e9cce7b0a0605f0d651dfecd75a0045906 = $this->env->getExtension("native_profiler");
        $__internal_339f201a4ccf6090bce20a2a575881e9cce7b0a0605f0d651dfecd75a0045906->enter($__internal_339f201a4ccf6090bce20a2a575881e9cce7b0a0605f0d651dfecd75a0045906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_339f201a4ccf6090bce20a2a575881e9cce7b0a0605f0d651dfecd75a0045906->leave($__internal_339f201a4ccf6090bce20a2a575881e9cce7b0a0605f0d651dfecd75a0045906_prof);

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
