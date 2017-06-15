<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1e734c42058fbbc91888a4c54ed4dc283303a60b29cd4f5f7dbe8d6428cca2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e63e06ba09e411649882ec6210785dfd1d59ae280af7aa3f866aa21bd02907b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63e06ba09e411649882ec6210785dfd1d59ae280af7aa3f866aa21bd02907b5->enter($__internal_e63e06ba09e411649882ec6210785dfd1d59ae280af7aa3f866aa21bd02907b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bc1d5604100642f48a25957f70a255ca9640484babda0fabb43bb6ffd654d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d5604100642f48a25957f70a255ca9640484babda0fabb43bb6ffd654d728->enter($__internal_bc1d5604100642f48a25957f70a255ca9640484babda0fabb43bb6ffd654d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63e06ba09e411649882ec6210785dfd1d59ae280af7aa3f866aa21bd02907b5->leave($__internal_e63e06ba09e411649882ec6210785dfd1d59ae280af7aa3f866aa21bd02907b5_prof);

        
        $__internal_bc1d5604100642f48a25957f70a255ca9640484babda0fabb43bb6ffd654d728->leave($__internal_bc1d5604100642f48a25957f70a255ca9640484babda0fabb43bb6ffd654d728_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3950ef85d61f628b577d8c9759ca503e32a53a9d5db02e5adecdba6df0a88ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3950ef85d61f628b577d8c9759ca503e32a53a9d5db02e5adecdba6df0a88ba5->enter($__internal_3950ef85d61f628b577d8c9759ca503e32a53a9d5db02e5adecdba6df0a88ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4167d7dc3e90f42cc109507415e153f6cff8094355c28de8b4c113a3cda635b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4167d7dc3e90f42cc109507415e153f6cff8094355c28de8b4c113a3cda635b4->enter($__internal_4167d7dc3e90f42cc109507415e153f6cff8094355c28de8b4c113a3cda635b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4167d7dc3e90f42cc109507415e153f6cff8094355c28de8b4c113a3cda635b4->leave($__internal_4167d7dc3e90f42cc109507415e153f6cff8094355c28de8b4c113a3cda635b4_prof);

        
        $__internal_3950ef85d61f628b577d8c9759ca503e32a53a9d5db02e5adecdba6df0a88ba5->leave($__internal_3950ef85d61f628b577d8c9759ca503e32a53a9d5db02e5adecdba6df0a88ba5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d314c0fa06ba090feca916f1681ce3056463e47102893a5746a0512cc844e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d314c0fa06ba090feca916f1681ce3056463e47102893a5746a0512cc844e40->enter($__internal_2d314c0fa06ba090feca916f1681ce3056463e47102893a5746a0512cc844e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7c80840bfcafae9d7863297294ca33e6d853c3f372893fccd5436f546d1f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c80840bfcafae9d7863297294ca33e6d853c3f372893fccd5436f546d1f932->enter($__internal_a7c80840bfcafae9d7863297294ca33e6d853c3f372893fccd5436f546d1f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a7c80840bfcafae9d7863297294ca33e6d853c3f372893fccd5436f546d1f932->leave($__internal_a7c80840bfcafae9d7863297294ca33e6d853c3f372893fccd5436f546d1f932_prof);

        
        $__internal_2d314c0fa06ba090feca916f1681ce3056463e47102893a5746a0512cc844e40->leave($__internal_2d314c0fa06ba090feca916f1681ce3056463e47102893a5746a0512cc844e40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
