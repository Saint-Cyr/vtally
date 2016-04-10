<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_18708e8860fbff5087d1574e9eaf27b76719994ac5eecd792b86e7999b30c86f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58e43f576d1263b43c9ac1c7ac20b6794b14af47eb5b8a97958818a4f27e174f = $this->env->getExtension("native_profiler");
        $__internal_58e43f576d1263b43c9ac1c7ac20b6794b14af47eb5b8a97958818a4f27e174f->enter($__internal_58e43f576d1263b43c9ac1c7ac20b6794b14af47eb5b8a97958818a4f27e174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58e43f576d1263b43c9ac1c7ac20b6794b14af47eb5b8a97958818a4f27e174f->leave($__internal_58e43f576d1263b43c9ac1c7ac20b6794b14af47eb5b8a97958818a4f27e174f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8fa137aa992260d2a1fe6bbe0f60773c46fc208782d307a21e0fb109207dc384 = $this->env->getExtension("native_profiler");
        $__internal_8fa137aa992260d2a1fe6bbe0f60773c46fc208782d307a21e0fb109207dc384->enter($__internal_8fa137aa992260d2a1fe6bbe0f60773c46fc208782d307a21e0fb109207dc384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8fa137aa992260d2a1fe6bbe0f60773c46fc208782d307a21e0fb109207dc384->leave($__internal_8fa137aa992260d2a1fe6bbe0f60773c46fc208782d307a21e0fb109207dc384_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1d8f7a9a8f89e25f6e25c84fec9068cd39d3289ff506b332657cbcd46aee0d8e = $this->env->getExtension("native_profiler");
        $__internal_1d8f7a9a8f89e25f6e25c84fec9068cd39d3289ff506b332657cbcd46aee0d8e->enter($__internal_1d8f7a9a8f89e25f6e25c84fec9068cd39d3289ff506b332657cbcd46aee0d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1d8f7a9a8f89e25f6e25c84fec9068cd39d3289ff506b332657cbcd46aee0d8e->leave($__internal_1d8f7a9a8f89e25f6e25c84fec9068cd39d3289ff506b332657cbcd46aee0d8e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_511f7856b48a5c5a80505f49b28b1ef8fc3945cfd9188e4fc53b207f9e2171e0 = $this->env->getExtension("native_profiler");
        $__internal_511f7856b48a5c5a80505f49b28b1ef8fc3945cfd9188e4fc53b207f9e2171e0->enter($__internal_511f7856b48a5c5a80505f49b28b1ef8fc3945cfd9188e4fc53b207f9e2171e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_511f7856b48a5c5a80505f49b28b1ef8fc3945cfd9188e4fc53b207f9e2171e0->leave($__internal_511f7856b48a5c5a80505f49b28b1ef8fc3945cfd9188e4fc53b207f9e2171e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
