<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_8c3b6f27d29eea3326aecd22ee0f715883a68dab24b129345ed504be62ba2e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c2545a6390fd0d46c27d6c48ff02828edfbacd72fd8f3c94be434ff32031ec4 = $this->env->getExtension("native_profiler");
        $__internal_4c2545a6390fd0d46c27d6c48ff02828edfbacd72fd8f3c94be434ff32031ec4->enter($__internal_4c2545a6390fd0d46c27d6c48ff02828edfbacd72fd8f3c94be434ff32031ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2545a6390fd0d46c27d6c48ff02828edfbacd72fd8f3c94be434ff32031ec4->leave($__internal_4c2545a6390fd0d46c27d6c48ff02828edfbacd72fd8f3c94be434ff32031ec4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
