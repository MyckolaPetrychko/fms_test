<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_545e108df7a891edc831e3a223799206c08396ae6e39f72d5b17607a2bb479ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63b8153a7d585c577b97f179420b6ac6e4a09aa3de4eedfaa1866115913a53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63b8153a7d585c577b97f179420b6ac6e4a09aa3de4eedfaa1866115913a53f->enter($__internal_a63b8153a7d585c577b97f179420b6ac6e4a09aa3de4eedfaa1866115913a53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8a930e76c601aee61f7318e79f1e764b8519a22ae2aca2c752ee4c5b39dff440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a930e76c601aee61f7318e79f1e764b8519a22ae2aca2c752ee4c5b39dff440->enter($__internal_8a930e76c601aee61f7318e79f1e764b8519a22ae2aca2c752ee4c5b39dff440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63b8153a7d585c577b97f179420b6ac6e4a09aa3de4eedfaa1866115913a53f->leave($__internal_a63b8153a7d585c577b97f179420b6ac6e4a09aa3de4eedfaa1866115913a53f_prof);

        
        $__internal_8a930e76c601aee61f7318e79f1e764b8519a22ae2aca2c752ee4c5b39dff440->leave($__internal_8a930e76c601aee61f7318e79f1e764b8519a22ae2aca2c752ee4c5b39dff440_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18295bec875c0f3ca87304493643a761502db6e08864b86d92b3e8b08372e86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18295bec875c0f3ca87304493643a761502db6e08864b86d92b3e8b08372e86a->enter($__internal_18295bec875c0f3ca87304493643a761502db6e08864b86d92b3e8b08372e86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2665568fbd3a463c3f77482f6d58b5e97866585bd5ed555826a6d84aa6e855d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2665568fbd3a463c3f77482f6d58b5e97866585bd5ed555826a6d84aa6e855d3->enter($__internal_2665568fbd3a463c3f77482f6d58b5e97866585bd5ed555826a6d84aa6e855d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2665568fbd3a463c3f77482f6d58b5e97866585bd5ed555826a6d84aa6e855d3->leave($__internal_2665568fbd3a463c3f77482f6d58b5e97866585bd5ed555826a6d84aa6e855d3_prof);

        
        $__internal_18295bec875c0f3ca87304493643a761502db6e08864b86d92b3e8b08372e86a->leave($__internal_18295bec875c0f3ca87304493643a761502db6e08864b86d92b3e8b08372e86a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
