<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5f1993c881312d3ee16baa780c7f63db3cf931aa260c522a46fe028ca781fb5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c5537af9dedb56769b7ab59a27255d3fc5010c2c866f2c19f6e101d1db6648b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5537af9dedb56769b7ab59a27255d3fc5010c2c866f2c19f6e101d1db6648b0->enter($__internal_c5537af9dedb56769b7ab59a27255d3fc5010c2c866f2c19f6e101d1db6648b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b637860b9849cc8c99bd1b425cf4537e28837be11f2b2e40664afca5282be8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b637860b9849cc8c99bd1b425cf4537e28837be11f2b2e40664afca5282be8e6->enter($__internal_b637860b9849cc8c99bd1b425cf4537e28837be11f2b2e40664afca5282be8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5537af9dedb56769b7ab59a27255d3fc5010c2c866f2c19f6e101d1db6648b0->leave($__internal_c5537af9dedb56769b7ab59a27255d3fc5010c2c866f2c19f6e101d1db6648b0_prof);

        
        $__internal_b637860b9849cc8c99bd1b425cf4537e28837be11f2b2e40664afca5282be8e6->leave($__internal_b637860b9849cc8c99bd1b425cf4537e28837be11f2b2e40664afca5282be8e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3ae9d4df50e7faf1a9f89238c1a459f28bb4301d8e22c0efa883f10bd5968b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ae9d4df50e7faf1a9f89238c1a459f28bb4301d8e22c0efa883f10bd5968b8->enter($__internal_a3ae9d4df50e7faf1a9f89238c1a459f28bb4301d8e22c0efa883f10bd5968b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0bed440d9dab14ee40d3d2a1817d69c1d06f0d521b559c48d39536f5b08256fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bed440d9dab14ee40d3d2a1817d69c1d06f0d521b559c48d39536f5b08256fa->enter($__internal_0bed440d9dab14ee40d3d2a1817d69c1d06f0d521b559c48d39536f5b08256fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0bed440d9dab14ee40d3d2a1817d69c1d06f0d521b559c48d39536f5b08256fa->leave($__internal_0bed440d9dab14ee40d3d2a1817d69c1d06f0d521b559c48d39536f5b08256fa_prof);

        
        $__internal_a3ae9d4df50e7faf1a9f89238c1a459f28bb4301d8e22c0efa883f10bd5968b8->leave($__internal_a3ae9d4df50e7faf1a9f89238c1a459f28bb4301d8e22c0efa883f10bd5968b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
