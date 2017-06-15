<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_16a8ef8b292ed6e4cff6a20c8ea50911a0208bd4f9ccdebe23eb3e28ed620ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b37ab7389c67e8398bd8b59d98a7472197ceb90c7c637dfdef623d20177a6b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ab7389c67e8398bd8b59d98a7472197ceb90c7c637dfdef623d20177a6b66->enter($__internal_b37ab7389c67e8398bd8b59d98a7472197ceb90c7c637dfdef623d20177a6b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_da003578adab83597e2324a0bcd760cc0788f9807577840ae5989f2cf7101fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da003578adab83597e2324a0bcd760cc0788f9807577840ae5989f2cf7101fec->enter($__internal_da003578adab83597e2324a0bcd760cc0788f9807577840ae5989f2cf7101fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37ab7389c67e8398bd8b59d98a7472197ceb90c7c637dfdef623d20177a6b66->leave($__internal_b37ab7389c67e8398bd8b59d98a7472197ceb90c7c637dfdef623d20177a6b66_prof);

        
        $__internal_da003578adab83597e2324a0bcd760cc0788f9807577840ae5989f2cf7101fec->leave($__internal_da003578adab83597e2324a0bcd760cc0788f9807577840ae5989f2cf7101fec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d633d77b50f865de5f51de5ede6c9a0aba034cba4bf32977a1d5908eca73d0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d633d77b50f865de5f51de5ede6c9a0aba034cba4bf32977a1d5908eca73d0c8->enter($__internal_d633d77b50f865de5f51de5ede6c9a0aba034cba4bf32977a1d5908eca73d0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_151d619c74d25ef90b456a75ed7fb1a6e243330dfb262a844368e4394f52ab33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151d619c74d25ef90b456a75ed7fb1a6e243330dfb262a844368e4394f52ab33->enter($__internal_151d619c74d25ef90b456a75ed7fb1a6e243330dfb262a844368e4394f52ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_151d619c74d25ef90b456a75ed7fb1a6e243330dfb262a844368e4394f52ab33->leave($__internal_151d619c74d25ef90b456a75ed7fb1a6e243330dfb262a844368e4394f52ab33_prof);

        
        $__internal_d633d77b50f865de5f51de5ede6c9a0aba034cba4bf32977a1d5908eca73d0c8->leave($__internal_d633d77b50f865de5f51de5ede6c9a0aba034cba4bf32977a1d5908eca73d0c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
