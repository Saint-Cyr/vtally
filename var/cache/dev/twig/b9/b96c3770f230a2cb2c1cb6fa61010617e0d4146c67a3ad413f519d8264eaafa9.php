<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_04e2aa0a55fb19f83e8a38992c017d9d57ce174694a4f71c5cfdec27b07d0586 extends Twig_Template
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
        $__internal_426c82c3606beb5567ec5ce55c4bce7a5da01904a0aa0c144ef7701c83ca6a81 = $this->env->getExtension("native_profiler");
        $__internal_426c82c3606beb5567ec5ce55c4bce7a5da01904a0aa0c144ef7701c83ca6a81->enter($__internal_426c82c3606beb5567ec5ce55c4bce7a5da01904a0aa0c144ef7701c83ca6a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_426c82c3606beb5567ec5ce55c4bce7a5da01904a0aa0c144ef7701c83ca6a81->leave($__internal_426c82c3606beb5567ec5ce55c4bce7a5da01904a0aa0c144ef7701c83ca6a81_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3d003fd0fc64d98987f991b28ac7a78c969358cd3ca2dc112de0e07898255a1d = $this->env->getExtension("native_profiler");
            $__internal_3d003fd0fc64d98987f991b28ac7a78c969358cd3ca2dc112de0e07898255a1d->enter($__internal_3d003fd0fc64d98987f991b28ac7a78c969358cd3ca2dc112de0e07898255a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                // line 6
                echo "
        <div class=\"";
                // line 7
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                echo "\">
            <div class=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "box_class", array()), "html", null, true);
                echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 15
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 17
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array()) != false)) {
                    // line 18
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                    echo "</p>
                        ";
                }
                // line 20
                echo "
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 22
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 23
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 25
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 26
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </div>
                </div>
                ";
                // line 31
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </div>
";
            
            $__internal_3d003fd0fc64d98987f991b28ac7a78c969358cd3ca2dc112de0e07898255a1d->leave($__internal_3d003fd0fc64d98987f991b28ac7a78c969358cd3ca2dc112de0e07898255a1d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  122 => 31,  118 => 28,  109 => 26,  104 => 25,  98 => 23,  95 => 22,  90 => 21,  87 => 20,  81 => 18,  79 => 17,  75 => 15,  69 => 11,  63 => 8,  59 => 7,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  27 => 1,);
    }
}
/* {% macro render_groups(admin, form, groups, has_tab) %}*/
/*     <div class="row">*/
/* */
/*     {% for code in groups %}*/
/*         {% set form_group = admin.formgroups[code] %}*/
/* */
/*         <div class="{{ form_group.class | default('col-md-12') }}">*/
/*             <div class="{{ form_group.box_class }}">*/
/*                 <div class="box-header">*/
/*                     <h4 class="box-title">*/
/*                         {{ admin.trans(form_group.name, {}, form_group.translation_domain) }}*/
/*                     </h4>*/
/*                 </div>*/
/*                 {#<div class="box{% if loop.first %} in{% endif %}" id="{{ admin.uniqid }}_{{ loop.index }}">#}*/
/*                 <div class="box-body">*/
/*                     <div class="sonata-ba-collapsed-fields">*/
/*                         {% if form_group.description != false %}*/
/*                             <p>{{ form_group.description|raw }}</p>*/
/*                         {% endif %}*/
/* */
/*                         {% for field_name in form_group.fields %}*/
/*                             {% if admin.formfielddescriptions[field_name] is defined %}*/
/*                                 {{ form_row(form[field_name])}}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*                 {#</div>#}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
