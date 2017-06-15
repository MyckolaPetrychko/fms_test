<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d0e799411cef0d5d99fdd268760e5610f0a9b49a750a0d40ca816e365d19ebe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_fa39263b10924ff9d54f4c82b7748315437bca04475c816e460ac7261f6d801a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa39263b10924ff9d54f4c82b7748315437bca04475c816e460ac7261f6d801a->enter($__internal_fa39263b10924ff9d54f4c82b7748315437bca04475c816e460ac7261f6d801a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_75be4a187a8770dc56a5efa8ce30c79685f91268af1bd55c69f20dfe55c4c772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75be4a187a8770dc56a5efa8ce30c79685f91268af1bd55c69f20dfe55c4c772->enter($__internal_75be4a187a8770dc56a5efa8ce30c79685f91268af1bd55c69f20dfe55c4c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa39263b10924ff9d54f4c82b7748315437bca04475c816e460ac7261f6d801a->leave($__internal_fa39263b10924ff9d54f4c82b7748315437bca04475c816e460ac7261f6d801a_prof);

        
        $__internal_75be4a187a8770dc56a5efa8ce30c79685f91268af1bd55c69f20dfe55c4c772->leave($__internal_75be4a187a8770dc56a5efa8ce30c79685f91268af1bd55c69f20dfe55c4c772_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4b68a9587c461e2ababe1e73ec89203e01dba6e9a0e535323bcddf5e937b2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b68a9587c461e2ababe1e73ec89203e01dba6e9a0e535323bcddf5e937b2af->enter($__internal_f4b68a9587c461e2ababe1e73ec89203e01dba6e9a0e535323bcddf5e937b2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78de4f3afcc66297767c814dfc1bbf2e9b4284f41a33767462ae4801e4a7070b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78de4f3afcc66297767c814dfc1bbf2e9b4284f41a33767462ae4801e4a7070b->enter($__internal_78de4f3afcc66297767c814dfc1bbf2e9b4284f41a33767462ae4801e4a7070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_78de4f3afcc66297767c814dfc1bbf2e9b4284f41a33767462ae4801e4a7070b->leave($__internal_78de4f3afcc66297767c814dfc1bbf2e9b4284f41a33767462ae4801e4a7070b_prof);

        
        $__internal_f4b68a9587c461e2ababe1e73ec89203e01dba6e9a0e535323bcddf5e937b2af->leave($__internal_f4b68a9587c461e2ababe1e73ec89203e01dba6e9a0e535323bcddf5e937b2af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
