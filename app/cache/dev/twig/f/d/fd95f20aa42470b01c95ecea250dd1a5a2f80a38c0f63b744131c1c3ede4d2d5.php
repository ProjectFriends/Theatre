<?php

/* UserUserBundle:user:index.html.twig */
class __TwigTemplate_89ee89e905e26bb6d05df15435749555c862364838139c80fe155dc009e63086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backoffice.html.twig", "UserUserBundle:user:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90bf4d86dca9a5460ccc0d6490bcbb06bbe6edfdf727453ec01010f6e50d24bb = $this->env->getExtension("native_profiler");
        $__internal_90bf4d86dca9a5460ccc0d6490bcbb06bbe6edfdf727453ec01010f6e50d24bb->enter($__internal_90bf4d86dca9a5460ccc0d6490bcbb06bbe6edfdf727453ec01010f6e50d24bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserUserBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90bf4d86dca9a5460ccc0d6490bcbb06bbe6edfdf727453ec01010f6e50d24bb->leave($__internal_90bf4d86dca9a5460ccc0d6490bcbb06bbe6edfdf727453ec01010f6e50d24bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1059c82cc071c252844e9754384f0bfc57cddc051e86793273c656201526e9d = $this->env->getExtension("native_profiler");
        $__internal_f1059c82cc071c252844e9754384f0bfc57cddc051e86793273c656201526e9d->enter($__internal_f1059c82cc071c252844e9754384f0bfc57cddc051e86793273c656201526e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "    قائمة المشرفين ";
        
        $__internal_f1059c82cc071c252844e9754384f0bfc57cddc051e86793273c656201526e9d->leave($__internal_f1059c82cc071c252844e9754384f0bfc57cddc051e86793273c656201526e9d_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_05dbc7a4b2056c03623ccfef4c95709fdc4d0e252a22ecfb743f654b33105d0d = $this->env->getExtension("native_profiler");
        $__internal_05dbc7a4b2056c03623ccfef4c95709fdc4d0e252a22ecfb743f654b33105d0d->enter($__internal_05dbc7a4b2056c03623ccfef4c95709fdc4d0e252a22ecfb743f654b33105d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_05dbc7a4b2056c03623ccfef4c95709fdc4d0e252a22ecfb743f654b33105d0d->leave($__internal_05dbc7a4b2056c03623ccfef4c95709fdc4d0e252a22ecfb743f654b33105d0d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1808b2756608467a97a31c10f8626cfa2d7c240e7c7563a5e15d7468eedae55 = $this->env->getExtension("native_profiler");
        $__internal_f1808b2756608467a97a31c10f8626cfa2d7c240e7c7563a5e15d7468eedae55->enter($__internal_f1808b2756608467a97a31c10f8626cfa2d7c240e7c7563a5e15d7468eedae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
        <script type=\"text/javascript\">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-dashboard home-icon\"></i>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">قائمة المشرفين </a>
            </li>

        </ul><!-- .breadcrumb -->
    </div>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "editf"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "        <br/>
        <div class=\"alert alert-success alert-block\"> <a href=\"#\" data-dismiss=\"alert\" class=\"close\">×</a>
            ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"page-content\" >
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3 class=\"header smaller lighter blue\">قائمة المشرفين </h3>

                        <div class=\"table-header\">
                            قائمة المشرفين             </div>

                <div class=\"table-responsive\">
                    <div id=\"sample-table-2_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">
                        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover dataTable\" aria-describedby=\"sample-table-2_info\">
                            <thead>
                            <tr role=\"row\">
                                <th>°</th>
                                <th>  الإسم </th>
                                <th>اللقب </th>
                                <th>عنوان البريد الإلكتروني</th>
                               

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "                                <tr>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                   
                                    <td>
                                        <div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">

                                             <a class=\"blue \"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" >
                                                <i class=\"icon-zoom-in bigger-130\"></i>
                                            </a>

                                         
                                        <a class=\"green \"  href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_users", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" >
                                            <i class=\"icon-pencil bigger-130\"></i>
                                        </a>

                                        <a class=\"red id-btn-dialog2\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_users", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" >
                                            <i class=\"icon-trash bigger-130\"></i>
                                        </a>



                                        </div>
                                    </td>
                                </tr>

                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
";
        
        $__internal_f1808b2756608467a97a31c10f8626cfa2d7c240e7c7563a5e15d7468eedae55->leave($__internal_f1808b2756608467a97a31c10f8626cfa2d7c240e7c7563a5e15d7468eedae55_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_727d01393466e2a35f4582b57a064d5d79ab4889ad8cebaef388cab85f706190 = $this->env->getExtension("native_profiler");
        $__internal_727d01393466e2a35f4582b57a064d5d79ab4889ad8cebaef388cab85f706190->enter($__internal_727d01393466e2a35f4582b57a064d5d79ab4889ad8cebaef388cab85f706190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jqGrid/i18n/grid.locale-fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            var oTable1 = \$('#sample-table-2').dataTable({
                \"aoColumns\": [
                    null, null, null, null, {\"bSortable\": false}
                ],
                \"iDisplayLength\": 500,

                \"fnDrawCallback\": function()
                {
                    \$(\"#btnadd\").remove();
                 \$(\"#sample-table-2_filter\").prepend('<a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("add_users");
        echo "\" role=\"button\" class=\"green \" id=\"btnadd\" oncontextmenu=\"return false;\"><button style=\"float:left;\" class=\"btn btn-xs btn-pink\">إضافة مشرف جديد </button> </a>');
                }
            });

        });
    </script>






";
        
        $__internal_727d01393466e2a35f4582b57a064d5d79ab4889ad8cebaef388cab85f706190->leave($__internal_727d01393466e2a35f4582b57a064d5d79ab4889ad8cebaef388cab85f706190_prof);

    }

    public function getTemplateName()
    {
        return "UserUserBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 107,  240 => 95,  236 => 94,  232 => 93,  229 => 92,  223 => 91,  209 => 83,  184 => 72,  177 => 68,  169 => 63,  161 => 58,  157 => 57,  153 => 56,  149 => 55,  146 => 54,  129 => 53,  104 => 30,  95 => 27,  91 => 25,  87 => 24,  79 => 19,  66 => 8,  60 => 7,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::backoffice.html.twig' %}*/
/* */
/* {% block title %}    قائمة المشرفين {% endblock %}*/
/* {% block head %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="breadcrumbs" id="breadcrumbs">*/
/*         <script type="text/javascript">*/
/*             try {*/
/*                 ace.settings.check('breadcrumbs', 'fixed')*/
/*             } catch (e) {*/
/*             }*/
/*         </script>*/
/* */
/*         <ul class="breadcrumb">*/
/*             <li>*/
/*                 <i class="icon-dashboard home-icon"></i>*/
/*                 <a href="{{ path('users') }}">قائمة المشرفين </a>*/
/*             </li>*/
/* */
/*         </ul><!-- .breadcrumb -->*/
/*     </div>*/
/*     {% for flashMessage in app.session.flashbag.get('editf') %}*/
/*         <br/>*/
/*         <div class="alert alert-success alert-block"> <a href="#" data-dismiss="alert" class="close">×</a>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="page-content" >*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h3 class="header smaller lighter blue">قائمة المشرفين </h3>*/
/* */
/*                         <div class="table-header">*/
/*                             قائمة المشرفين             </div>*/
/* */
/*                 <div class="table-responsive">*/
/*                     <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">*/
/*                         <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">*/
/*                             <thead>*/
/*                             <tr role="row">*/
/*                                 <th>°</th>*/
/*                                 <th>  الإسم </th>*/
/*                                 <th>اللقب </th>*/
/*                                 <th>عنوان البريد الإلكتروني</th>*/
/*                                */
/* */
/*                                 <th>Action</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for user in users %}*/
/*                                 <tr>*/
/*                                     <td>{{loop.index }}</td>*/
/*                                     <td>{{ user.nom }}</td>*/
/*                                     <td>{{ user.prenom }}</td>*/
/*                                     <td>{{ user.email }}</td>*/
/*                                    */
/*                                     <td>*/
/*                                         <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">*/
/* */
/*                                              <a class="blue "  href="{{ path('user_show', { 'id': user.id }) }}" >*/
/*                                                 <i class="icon-zoom-in bigger-130"></i>*/
/*                                             </a>*/
/* */
/*                                          */
/*                                         <a class="green "  href="{{ path('view_users', {'id': user.id}) }}" >*/
/*                                             <i class="icon-pencil bigger-130"></i>*/
/*                                         </a>*/
/* */
/*                                         <a class="red id-btn-dialog2" href="{{ path('delete_users', {'id': user.id}) }}" >*/
/*                                             <i class="icon-trash bigger-130"></i>*/
/*                                         </a>*/
/* */
/* */
/* */
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/* */
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.row -->*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/jquery.dataTables.bootstrap.js')}}"></script>*/
/*     <script src="{{asset('assets/js/jqGrid/i18n/grid.locale-fr.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*             var oTable1 = $('#sample-table-2').dataTable({*/
/*                 "aoColumns": [*/
/*                     null, null, null, null, {"bSortable": false}*/
/*                 ],*/
/*                 "iDisplayLength": 500,*/
/* */
/*                 "fnDrawCallback": function()*/
/*                 {*/
/*                     $("#btnadd").remove();*/
/*                  $("#sample-table-2_filter").prepend('<a href="{{ path('add_users')}}" role="button" class="green " id="btnadd" oncontextmenu="return false;"><button style="float:left;" class="btn btn-xs btn-pink">إضافة مشرف جديد </button> </a>');*/
/*                 }*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
