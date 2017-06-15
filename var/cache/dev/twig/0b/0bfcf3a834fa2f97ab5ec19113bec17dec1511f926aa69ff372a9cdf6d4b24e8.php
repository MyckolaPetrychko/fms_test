<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e87a8962bae00991d0d8b538da70b61dc25ff53de7620c5cf300444c7206712b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_f125969c48207e2595575d2a645619dbcfeaa3c17590cca3ceec61f970e5b4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f125969c48207e2595575d2a645619dbcfeaa3c17590cca3ceec61f970e5b4f6->enter($__internal_f125969c48207e2595575d2a645619dbcfeaa3c17590cca3ceec61f970e5b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e20ea73a0873b671c70300e6f6a2d3bc2cda3206a249a0d609b8b0198888b860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20ea73a0873b671c70300e6f6a2d3bc2cda3206a249a0d609b8b0198888b860->enter($__internal_e20ea73a0873b671c70300e6f6a2d3bc2cda3206a249a0d609b8b0198888b860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f125969c48207e2595575d2a645619dbcfeaa3c17590cca3ceec61f970e5b4f6->leave($__internal_f125969c48207e2595575d2a645619dbcfeaa3c17590cca3ceec61f970e5b4f6_prof);

        
        $__internal_e20ea73a0873b671c70300e6f6a2d3bc2cda3206a249a0d609b8b0198888b860->leave($__internal_e20ea73a0873b671c70300e6f6a2d3bc2cda3206a249a0d609b8b0198888b860_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_863d65260929f06422fe67324183c2e3045d7271487d4df450ebac88a5691409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863d65260929f06422fe67324183c2e3045d7271487d4df450ebac88a5691409->enter($__internal_863d65260929f06422fe67324183c2e3045d7271487d4df450ebac88a5691409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a00e972aa91290e265b43e00d3f3085aa76bdd1e054b833566c5c41730dcf18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00e972aa91290e265b43e00d3f3085aa76bdd1e054b833566c5c41730dcf18d->enter($__internal_a00e972aa91290e265b43e00d3f3085aa76bdd1e054b833566c5c41730dcf18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a00e972aa91290e265b43e00d3f3085aa76bdd1e054b833566c5c41730dcf18d->leave($__internal_a00e972aa91290e265b43e00d3f3085aa76bdd1e054b833566c5c41730dcf18d_prof);

        
        $__internal_863d65260929f06422fe67324183c2e3045d7271487d4df450ebac88a5691409->leave($__internal_863d65260929f06422fe67324183c2e3045d7271487d4df450ebac88a5691409_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
