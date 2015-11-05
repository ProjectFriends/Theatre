<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_904e4e8b9c18fb85e51cf6db439df38aec04379f39ab7dded9c25bb1018abf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layoutUser.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a151a58cf32a310ed6fc73d17ee9a38df4cb34c762468ae29d876df0488a23 = $this->env->getExtension("native_profiler");
        $__internal_71a151a58cf32a310ed6fc73d17ee9a38df4cb34c762468ae29d876df0488a23->enter($__internal_71a151a58cf32a310ed6fc73d17ee9a38df4cb34c762468ae29d876df0488a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a151a58cf32a310ed6fc73d17ee9a38df4cb34c762468ae29d876df0488a23->leave($__internal_71a151a58cf32a310ed6fc73d17ee9a38df4cb34c762468ae29d876df0488a23_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_138b4de50ccfa42bb10e4284bf4b619a3963ec7064c63b752122f885812689e7 = $this->env->getExtension("native_profiler");
        $__internal_138b4de50ccfa42bb10e4284bf4b619a3963ec7064c63b752122f885812689e7->enter($__internal_138b4de50ccfa42bb10e4284bf4b619a3963ec7064c63b752122f885812689e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "
    <div id=\"wrapper\">
        <div class=\"container\" id=\"contenu_site\">

            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"heading\">
                              
                                <div class=\" clearfix\"></div>
                                <form class=\"form-horizontal\" role=\"form\" id=\"inscrit\"  action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\"  method=\"POST\">
                                    ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                                        <div>
                                            <center><font color ='red'> <b>  Connection refused username or password are invalid</b></font> </center>

                                        </div>
                                    ";
        }
        // line 20
        echo " 


                                    <div class=\" clearfix\"></div>

                                   <div class=\"form-group\" style=\"padding-top: 52px;\">
                                        <label for=\"inputStandard\" class=\"col-md-2  col-xs-12 control-label\">البريد الإلكتروني/ اسم المستخدم</label>
                                        <div class=\"col-lg-4 col-xs-12 col-md-4 inputtext\">
                                            <input type=\"text\" style=\"direction:RTL;\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"inputStandard\" class=\"col-md-2 col-xs-12 control-label\"> كلمة مرور</label>
                                        <div class=\"col-lg-4 col-xs-12 col-md-4 inputtext\">
                                            <input type=\"password\" style=\"direction:RTL;\" id=\"password\" name=\"_password\" class=\"form-control\"  />
                                           
                                        </div>
                                    </div>



                                    <div class=\"form-group\">
                                        <div class=\"col-sm-4 col-md-8 col-xs-12 \">
                                        
                                              <input type=\"submit\" class=\"btn btn-primary pull-right clearfix\" value=\"الدخول\">
                                              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                        </div>
                                        <div class=\"col-sm-4 col-md-4 col-xs-12 \">
                                            <button type=\"submit\" class=\"btn btn-default pull-left\">إلغاء</button>
                                        </div>

                                    </div>
                                </form>

                                <div class=\" clearfix\"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_138b4de50ccfa42bb10e4284bf4b619a3963ec7064c63b752122f885812689e7->leave($__internal_138b4de50ccfa42bb10e4284bf4b619a3963ec7064c63b752122f885812689e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  76 => 28,  66 => 20,  59 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layoutUser.html.twig" %}*/
/* {% block contenu %}*/
/* */
/*     <div id="wrapper">*/
/*         <div class="container" id="contenu_site">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="content">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="heading">*/
/*                               */
/*                                 <div class=" clearfix"></div>*/
/*                                 <form class="form-horizontal" role="form" id="inscrit"  action="{{ path('fos_user_security_check') }}"  method="POST">*/
/*                                     {% if error %}*/
/*                                         <div>*/
/*                                             <center><font color ='red'> <b>  Connection refused username or password are invalid</b></font> </center>*/
/* */
/*                                         </div>*/
/*                                     {% endif %} */
/* */
/* */
/*                                     <div class=" clearfix"></div>*/
/* */
/*                                    <div class="form-group" style="padding-top: 52px;">*/
/*                                         <label for="inputStandard" class="col-md-2  col-xs-12 control-label">البريد الإلكتروني/ اسم المستخدم</label>*/
/*                                         <div class="col-lg-4 col-xs-12 col-md-4 inputtext">*/
/*                                             <input type="text" style="direction:RTL;" class="form-control" id="username" name="_username" value="{{ last_username }}"  />*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="inputStandard" class="col-md-2 col-xs-12 control-label"> كلمة مرور</label>*/
/*                                         <div class="col-lg-4 col-xs-12 col-md-4 inputtext">*/
/*                                             <input type="password" style="direction:RTL;" id="password" name="_password" class="form-control"  />*/
/*                                            */
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="col-sm-4 col-md-8 col-xs-12 ">*/
/*                                         */
/*                                               <input type="submit" class="btn btn-primary pull-right clearfix" value="الدخول">*/
/*                                               <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                                         </div>*/
/*                                         <div class="col-sm-4 col-md-4 col-xs-12 ">*/
/*                                             <button type="submit" class="btn btn-default pull-left">إلغاء</button>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </form>*/
/* */
/*                                 <div class=" clearfix"></div>*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
