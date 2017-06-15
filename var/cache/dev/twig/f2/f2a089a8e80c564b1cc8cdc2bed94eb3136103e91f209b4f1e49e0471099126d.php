<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2a9ffc5e42b197bfa495376e293c739ac5013e49ae219558927cae8fe8e70407 extends Twig_Template
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
        $__internal_37f1e636a99c4e5b4ab0bbd20af120eb8df17df31b08b9efbd7075461ed95c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f1e636a99c4e5b4ab0bbd20af120eb8df17df31b08b9efbd7075461ed95c1b->enter($__internal_37f1e636a99c4e5b4ab0bbd20af120eb8df17df31b08b9efbd7075461ed95c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d12cd5c23a5c11d1a12f6240119f74eeff25e7185a2ea92067b41d96ed3afa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12cd5c23a5c11d1a12f6240119f74eeff25e7185a2ea92067b41d96ed3afa16->enter($__internal_d12cd5c23a5c11d1a12f6240119f74eeff25e7185a2ea92067b41d96ed3afa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_37f1e636a99c4e5b4ab0bbd20af120eb8df17df31b08b9efbd7075461ed95c1b->leave($__internal_37f1e636a99c4e5b4ab0bbd20af120eb8df17df31b08b9efbd7075461ed95c1b_prof);

        
        $__internal_d12cd5c23a5c11d1a12f6240119f74eeff25e7185a2ea92067b41d96ed3afa16->leave($__internal_d12cd5c23a5c11d1a12f6240119f74eeff25e7185a2ea92067b41d96ed3afa16_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_efe9458eeba9625b312a105dac2cab2af57e82560611ce622914986c4990c599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe9458eeba9625b312a105dac2cab2af57e82560611ce622914986c4990c599->enter($__internal_efe9458eeba9625b312a105dac2cab2af57e82560611ce622914986c4990c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_baf6d66eef297259ae56cf9ed1ebe09165421bf24ab83be095e38d2df1b511b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf6d66eef297259ae56cf9ed1ebe09165421bf24ab83be095e38d2df1b511b4->enter($__internal_baf6d66eef297259ae56cf9ed1ebe09165421bf24ab83be095e38d2df1b511b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_baf6d66eef297259ae56cf9ed1ebe09165421bf24ab83be095e38d2df1b511b4->leave($__internal_baf6d66eef297259ae56cf9ed1ebe09165421bf24ab83be095e38d2df1b511b4_prof);

        
        $__internal_efe9458eeba9625b312a105dac2cab2af57e82560611ce622914986c4990c599->leave($__internal_efe9458eeba9625b312a105dac2cab2af57e82560611ce622914986c4990c599_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8da6e1406f9a1fbbd7934f6495ff7cfc5014039dbc47e381b926f708430c40c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da6e1406f9a1fbbd7934f6495ff7cfc5014039dbc47e381b926f708430c40c9->enter($__internal_8da6e1406f9a1fbbd7934f6495ff7cfc5014039dbc47e381b926f708430c40c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b965b02d62c8616693c25c4757765474b21f3e3ebc5dee7e166b6b1d70931f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b965b02d62c8616693c25c4757765474b21f3e3ebc5dee7e166b6b1d70931f82->enter($__internal_b965b02d62c8616693c25c4757765474b21f3e3ebc5dee7e166b6b1d70931f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_b965b02d62c8616693c25c4757765474b21f3e3ebc5dee7e166b6b1d70931f82->leave($__internal_b965b02d62c8616693c25c4757765474b21f3e3ebc5dee7e166b6b1d70931f82_prof);

        
        $__internal_8da6e1406f9a1fbbd7934f6495ff7cfc5014039dbc47e381b926f708430c40c9->leave($__internal_8da6e1406f9a1fbbd7934f6495ff7cfc5014039dbc47e381b926f708430c40c9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c015230111739d547e0eaae17c1ca97ce08fba7d83c1f2ff59151565171dc7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c015230111739d547e0eaae17c1ca97ce08fba7d83c1f2ff59151565171dc7c7->enter($__internal_c015230111739d547e0eaae17c1ca97ce08fba7d83c1f2ff59151565171dc7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0ab42ba5edb963e1d1849d130571e942080b42548f8ae17d437b4d425ace58c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab42ba5edb963e1d1849d130571e942080b42548f8ae17d437b4d425ace58c9->enter($__internal_0ab42ba5edb963e1d1849d130571e942080b42548f8ae17d437b4d425ace58c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0ab42ba5edb963e1d1849d130571e942080b42548f8ae17d437b4d425ace58c9->leave($__internal_0ab42ba5edb963e1d1849d130571e942080b42548f8ae17d437b4d425ace58c9_prof);

        
        $__internal_c015230111739d547e0eaae17c1ca97ce08fba7d83c1f2ff59151565171dc7c7->leave($__internal_c015230111739d547e0eaae17c1ca97ce08fba7d83c1f2ff59151565171dc7c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
