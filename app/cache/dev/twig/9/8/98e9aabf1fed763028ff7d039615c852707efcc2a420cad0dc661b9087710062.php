<?php

/* ::frontoffice.html.twig */
class __TwigTemplate_f2049bb47b9b2d79bd12cdfeb5a73d5ba9ea1c85fff8758b0597fa6e0ade2d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dca1bb694527f3febf8e2d113f6c879aff26c318717b8c4a5b75ea0b94da61a = $this->env->getExtension("native_profiler");
        $__internal_1dca1bb694527f3febf8e2d113f6c879aff26c318717b8c4a5b75ea0b94da61a->enter($__internal_1dca1bb694527f3febf8e2d113f6c879aff26c318717b8c4a5b75ea0b94da61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::frontoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title></title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/dcalendar.picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/recaptcha.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/listnav.css"), "html", null, true);
        echo "\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body style=\"background-color:#EEE;\">";
        // line 27
        echo "      
            ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "

            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
        <script>
            function rtl(element)
            {
                if (element.setSelectionRange) {
                    element.setSelectionRange(0, 0);
                }
            }
        </script>



        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script type=\"text/javascript\">
            var RecaptchaOptions = {
                theme: 'custom',
                custom_theme_widget: 'recaptcha_widget'
            };
        </script>
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>";
        
        $__internal_1dca1bb694527f3febf8e2d113f6c879aff26c318717b8c4a5b75ea0b94da61a->leave($__internal_1dca1bb694527f3febf8e2d113f6c879aff26c318717b8c4a5b75ea0b94da61a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44179c96ff6e56c9f077ba0ed3db5690ec1cdbb06832517a02250bdfac4e1794 = $this->env->getExtension("native_profiler");
        $__internal_44179c96ff6e56c9f077ba0ed3db5690ec1cdbb06832517a02250bdfac4e1794->enter($__internal_44179c96ff6e56c9f077ba0ed3db5690ec1cdbb06832517a02250bdfac4e1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
        ";
        
        $__internal_44179c96ff6e56c9f077ba0ed3db5690ec1cdbb06832517a02250bdfac4e1794->leave($__internal_44179c96ff6e56c9f077ba0ed3db5690ec1cdbb06832517a02250bdfac4e1794_prof);

    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4d8bf802d8099c5daca7cc6e1447fafcd176d189abea161c33761a8c89450cc1 = $this->env->getExtension("native_profiler");
        $__internal_4d8bf802d8099c5daca7cc6e1447fafcd176d189abea161c33761a8c89450cc1->enter($__internal_4d8bf802d8099c5daca7cc6e1447fafcd176d189abea161c33761a8c89450cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 29
        echo "                 
            ";
        
        $__internal_4d8bf802d8099c5daca7cc6e1447fafcd176d189abea161c33761a8c89450cc1->leave($__internal_4d8bf802d8099c5daca7cc6e1447fafcd176d189abea161c33761a8c89450cc1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f5ebc07c2b272b15846fb2f5a1311b10874a10e86e4f34868f6823342d7bec9 = $this->env->getExtension("native_profiler");
        $__internal_5f5ebc07c2b272b15846fb2f5a1311b10874a10e86e4f34868f6823342d7bec9->enter($__internal_5f5ebc07c2b272b15846fb2f5a1311b10874a10e86e4f34868f6823342d7bec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "            ";
        
        $__internal_5f5ebc07c2b272b15846fb2f5a1311b10874a10e86e4f34868f6823342d7bec9->leave($__internal_5f5ebc07c2b272b15846fb2f5a1311b10874a10e86e4f34868f6823342d7bec9_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e90e9a55ba703f6d55a4d59ec7cf24299625782e1b134f402af448a14e6ae30c = $this->env->getExtension("native_profiler");
        $__internal_e90e9a55ba703f6d55a4d59ec7cf24299625782e1b134f402af448a14e6ae30c->enter($__internal_e90e9a55ba703f6d55a4d59ec7cf24299625782e1b134f402af448a14e6ae30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "        ";
        
        $__internal_e90e9a55ba703f6d55a4d59ec7cf24299625782e1b134f402af448a14e6ae30c->leave($__internal_e90e9a55ba703f6d55a4d59ec7cf24299625782e1b134f402af448a14e6ae30c_prof);

    }

    public function getTemplateName()
    {
        return "::frontoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  163 => 59,  156 => 34,  150 => 33,  142 => 29,  136 => 28,  128 => 10,  122 => 9,  114 => 61,  112 => 59,  100 => 50,  94 => 47,  80 => 35,  78 => 33,  74 => 31,  72 => 28,  69 => 27,  63 => 23,  59 => 22,  50 => 16,  46 => 15,  42 => 14,  38 => 12,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <title></title>*/
/*         {% block stylesheets %}*/
/* */
/*         {% endblock %}*/
/*         <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">*/
/*         <link href="{{ asset('front/css/dcalendar.picker.css') }}" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('front/css/recaptcha.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('front/css/listnav.css') }}">*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body style="background-color:#EEE;">{# empty Twig template #}*/
/*       */
/*             {% block navigation %}*/
/*                  */
/*             {% endblock %}*/
/* */
/* */
/*             {% block body %}*/
/*             {% endblock %}*/
/* */
/*         <script>*/
/*             function rtl(element)*/
/*             {*/
/*                 if (element.setSelectionRange) {*/
/*                     element.setSelectionRange(0, 0);*/
/*                 }*/
/*             }*/
/*         </script>*/
/* */
/* */
/* */
/*         <script src="{{ asset('front/js/jquery-1.11.3.min.js') }}"></script>*/
/* */
/*         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
/*         <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>*/
/*         <script src='https://www.google.com/recaptcha/api.js'></script>*/
/* */
/*         <script type="text/javascript">*/
/*             var RecaptchaOptions = {*/
/*                 theme: 'custom',*/
/*                 custom_theme_widget: 'recaptcha_widget'*/
/*             };*/
/*         </script>*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
