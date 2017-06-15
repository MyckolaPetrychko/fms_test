<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a865aacb736e171093408d80634033db60325f0f11a3bbeecf7ff713e314f6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_87dc1ef87c3c1a403568c709c5269e17123e15735c80e725da76a1c581925a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87dc1ef87c3c1a403568c709c5269e17123e15735c80e725da76a1c581925a5b->enter($__internal_87dc1ef87c3c1a403568c709c5269e17123e15735c80e725da76a1c581925a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_baf8804b0d73112da6283bca3df91f6a89544d4a4b029386294774b46dfacb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf8804b0d73112da6283bca3df91f6a89544d4a4b029386294774b46dfacb70->enter($__internal_baf8804b0d73112da6283bca3df91f6a89544d4a4b029386294774b46dfacb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87dc1ef87c3c1a403568c709c5269e17123e15735c80e725da76a1c581925a5b->leave($__internal_87dc1ef87c3c1a403568c709c5269e17123e15735c80e725da76a1c581925a5b_prof);

        
        $__internal_baf8804b0d73112da6283bca3df91f6a89544d4a4b029386294774b46dfacb70->leave($__internal_baf8804b0d73112da6283bca3df91f6a89544d4a4b029386294774b46dfacb70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a731e9965c9634b06dedd60b11bc8aeb01cf6349a25efa50e96873ed4082f8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a731e9965c9634b06dedd60b11bc8aeb01cf6349a25efa50e96873ed4082f8d6->enter($__internal_a731e9965c9634b06dedd60b11bc8aeb01cf6349a25efa50e96873ed4082f8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74cc415abcba981b329d1ee649b54d34868d1cc14ab45c8f02d6d23da0ce6f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cc415abcba981b329d1ee649b54d34868d1cc14ab45c8f02d6d23da0ce6f3c->enter($__internal_74cc415abcba981b329d1ee649b54d34868d1cc14ab45c8f02d6d23da0ce6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_74cc415abcba981b329d1ee649b54d34868d1cc14ab45c8f02d6d23da0ce6f3c->leave($__internal_74cc415abcba981b329d1ee649b54d34868d1cc14ab45c8f02d6d23da0ce6f3c_prof);

        
        $__internal_a731e9965c9634b06dedd60b11bc8aeb01cf6349a25efa50e96873ed4082f8d6->leave($__internal_a731e9965c9634b06dedd60b11bc8aeb01cf6349a25efa50e96873ed4082f8d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
