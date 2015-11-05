<?php

/* FrontOfficeBundle:Event:event.html.twig */
class __TwigTemplate_a24f441a4f356e8a7bb0247d9be48f9f8dc06022e2bb58b3d50ae5a3dac1166d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::layoutfront.html.twig", "FrontOfficeBundle:Event:event.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::layoutfront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46380fd901b31fbc23b24b98bde4bb1bf1245046eea70aa2a635144ede1d8bd = $this->env->getExtension("native_profiler");
        $__internal_d46380fd901b31fbc23b24b98bde4bb1bf1245046eea70aa2a635144ede1d8bd->enter($__internal_d46380fd901b31fbc23b24b98bde4bb1bf1245046eea70aa2a635144ede1d8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Event:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46380fd901b31fbc23b24b98bde4bb1bf1245046eea70aa2a635144ede1d8bd->leave($__internal_d46380fd901b31fbc23b24b98bde4bb1bf1245046eea70aa2a635144ede1d8bd_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Event:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FrontOfficeBundle::layoutfront.html.twig" %}*/
/* */
