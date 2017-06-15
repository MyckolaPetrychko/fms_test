<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7c3c913e422c57870d92437c37b7a31e55c39f9009ee828b16da790e92a86f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_264c7a0e70faa10b20bedb2ad485c8d7e2c35c6a83aa751c62fcd30bfca8a46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264c7a0e70faa10b20bedb2ad485c8d7e2c35c6a83aa751c62fcd30bfca8a46e->enter($__internal_264c7a0e70faa10b20bedb2ad485c8d7e2c35c6a83aa751c62fcd30bfca8a46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_75fd7d61016947c3a7d8705c6e8571030ab4a1d420c783512de419e2bdf7e0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fd7d61016947c3a7d8705c6e8571030ab4a1d420c783512de419e2bdf7e0cc->enter($__internal_75fd7d61016947c3a7d8705c6e8571030ab4a1d420c783512de419e2bdf7e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264c7a0e70faa10b20bedb2ad485c8d7e2c35c6a83aa751c62fcd30bfca8a46e->leave($__internal_264c7a0e70faa10b20bedb2ad485c8d7e2c35c6a83aa751c62fcd30bfca8a46e_prof);

        
        $__internal_75fd7d61016947c3a7d8705c6e8571030ab4a1d420c783512de419e2bdf7e0cc->leave($__internal_75fd7d61016947c3a7d8705c6e8571030ab4a1d420c783512de419e2bdf7e0cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c0ac37c20609304c061b2871d61d0bfb73c31393d62dbeb793a529c88c21208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0ac37c20609304c061b2871d61d0bfb73c31393d62dbeb793a529c88c21208->enter($__internal_0c0ac37c20609304c061b2871d61d0bfb73c31393d62dbeb793a529c88c21208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3bb7ac7de5865c37604880cc61d3764ce70ac433f5b40fe24f4b892c58b382ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb7ac7de5865c37604880cc61d3764ce70ac433f5b40fe24f4b892c58b382ce->enter($__internal_3bb7ac7de5865c37604880cc61d3764ce70ac433f5b40fe24f4b892c58b382ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_3bb7ac7de5865c37604880cc61d3764ce70ac433f5b40fe24f4b892c58b382ce->leave($__internal_3bb7ac7de5865c37604880cc61d3764ce70ac433f5b40fe24f4b892c58b382ce_prof);

        
        $__internal_0c0ac37c20609304c061b2871d61d0bfb73c31393d62dbeb793a529c88c21208->leave($__internal_0c0ac37c20609304c061b2871d61d0bfb73c31393d62dbeb793a529c88c21208_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
