<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_6151086a0bb6859e7eed54e92a2995e82b3d329dc735abd12903d703a73da9d0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c8114ec1b38fec4fedef2f9c11313baa52bca025cf17cf93b9e06717bbb3573 = $this->env->getExtension("native_profiler");
        $__internal_4c8114ec1b38fec4fedef2f9c11313baa52bca025cf17cf93b9e06717bbb3573->enter($__internal_4c8114ec1b38fec4fedef2f9c11313baa52bca025cf17cf93b9e06717bbb3573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8114ec1b38fec4fedef2f9c11313baa52bca025cf17cf93b9e06717bbb3573->leave($__internal_4c8114ec1b38fec4fedef2f9c11313baa52bca025cf17cf93b9e06717bbb3573_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
