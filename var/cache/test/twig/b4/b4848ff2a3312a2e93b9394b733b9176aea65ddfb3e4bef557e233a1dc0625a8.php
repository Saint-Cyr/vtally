<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_40b22bb2b6d3c42429b20f7467e44852b79793f293cb2aba33b227abe688b8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edb9608fe72fcf58ba4b8d84ab26eb123a26bb731501ee052fc06f5fe5e3b818 = $this->env->getExtension("native_profiler");
        $__internal_edb9608fe72fcf58ba4b8d84ab26eb123a26bb731501ee052fc06f5fe5e3b818->enter($__internal_edb9608fe72fcf58ba4b8d84ab26eb123a26bb731501ee052fc06f5fe5e3b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb9608fe72fcf58ba4b8d84ab26eb123a26bb731501ee052fc06f5fe5e3b818->leave($__internal_edb9608fe72fcf58ba4b8d84ab26eb123a26bb731501ee052fc06f5fe5e3b818_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
