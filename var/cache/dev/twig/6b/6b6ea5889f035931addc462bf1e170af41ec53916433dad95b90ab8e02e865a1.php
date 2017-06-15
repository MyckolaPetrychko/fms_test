<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2c4dd4080746bed99d95978df6e4f74c4057375778db31afa6e42e6d1767731a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_82f724807a1b58bb2d73acaee1fc1233e1164bb37f3fd61d43515ec84182129d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f724807a1b58bb2d73acaee1fc1233e1164bb37f3fd61d43515ec84182129d->enter($__internal_82f724807a1b58bb2d73acaee1fc1233e1164bb37f3fd61d43515ec84182129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e1d794235e50b098279dff35abaa1ca1f543bdf56eec5b7d74a5ece20953e3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d794235e50b098279dff35abaa1ca1f543bdf56eec5b7d74a5ece20953e3fe->enter($__internal_e1d794235e50b098279dff35abaa1ca1f543bdf56eec5b7d74a5ece20953e3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f724807a1b58bb2d73acaee1fc1233e1164bb37f3fd61d43515ec84182129d->leave($__internal_82f724807a1b58bb2d73acaee1fc1233e1164bb37f3fd61d43515ec84182129d_prof);

        
        $__internal_e1d794235e50b098279dff35abaa1ca1f543bdf56eec5b7d74a5ece20953e3fe->leave($__internal_e1d794235e50b098279dff35abaa1ca1f543bdf56eec5b7d74a5ece20953e3fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63f874599858d2d1fde9746a62fa46fada6967c6a39e0d88e813a007d37e0981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f874599858d2d1fde9746a62fa46fada6967c6a39e0d88e813a007d37e0981->enter($__internal_63f874599858d2d1fde9746a62fa46fada6967c6a39e0d88e813a007d37e0981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8bbdc6b3597220ef8b9ae0f02b0943f9f2be6ca965aafbafb4a63e1bec69d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbdc6b3597220ef8b9ae0f02b0943f9f2be6ca965aafbafb4a63e1bec69d101->enter($__internal_8bbdc6b3597220ef8b9ae0f02b0943f9f2be6ca965aafbafb4a63e1bec69d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8bbdc6b3597220ef8b9ae0f02b0943f9f2be6ca965aafbafb4a63e1bec69d101->leave($__internal_8bbdc6b3597220ef8b9ae0f02b0943f9f2be6ca965aafbafb4a63e1bec69d101_prof);

        
        $__internal_63f874599858d2d1fde9746a62fa46fada6967c6a39e0d88e813a007d37e0981->leave($__internal_63f874599858d2d1fde9746a62fa46fada6967c6a39e0d88e813a007d37e0981_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
