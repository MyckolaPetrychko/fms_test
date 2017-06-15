<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4e61d1ca61e041a7465b70c76386d2ba013a7f12b8eed265777b2060f5d44d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f24a8cdfb33db40117613e6cc7354b8895102106e1caac8c1d181ac2c70d4ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24a8cdfb33db40117613e6cc7354b8895102106e1caac8c1d181ac2c70d4ce9->enter($__internal_f24a8cdfb33db40117613e6cc7354b8895102106e1caac8c1d181ac2c70d4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_21d8a514ccab52b6b709240527f5b69d8a694bb0cdce5944c75fc01cb1bdbcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d8a514ccab52b6b709240527f5b69d8a694bb0cdce5944c75fc01cb1bdbcc3->enter($__internal_21d8a514ccab52b6b709240527f5b69d8a694bb0cdce5944c75fc01cb1bdbcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24a8cdfb33db40117613e6cc7354b8895102106e1caac8c1d181ac2c70d4ce9->leave($__internal_f24a8cdfb33db40117613e6cc7354b8895102106e1caac8c1d181ac2c70d4ce9_prof);

        
        $__internal_21d8a514ccab52b6b709240527f5b69d8a694bb0cdce5944c75fc01cb1bdbcc3->leave($__internal_21d8a514ccab52b6b709240527f5b69d8a694bb0cdce5944c75fc01cb1bdbcc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bcb15ea34e04393b4e0597aff37a18a81cd63f31b6ad68e375655d26650ac3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcb15ea34e04393b4e0597aff37a18a81cd63f31b6ad68e375655d26650ac3f->enter($__internal_0bcb15ea34e04393b4e0597aff37a18a81cd63f31b6ad68e375655d26650ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6dca7d2d26b9f9aa76c50124137ce7c99d92f00360e50b754e94662eed5c5b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dca7d2d26b9f9aa76c50124137ce7c99d92f00360e50b754e94662eed5c5b31->enter($__internal_6dca7d2d26b9f9aa76c50124137ce7c99d92f00360e50b754e94662eed5c5b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6dca7d2d26b9f9aa76c50124137ce7c99d92f00360e50b754e94662eed5c5b31->leave($__internal_6dca7d2d26b9f9aa76c50124137ce7c99d92f00360e50b754e94662eed5c5b31_prof);

        
        $__internal_0bcb15ea34e04393b4e0597aff37a18a81cd63f31b6ad68e375655d26650ac3f->leave($__internal_0bcb15ea34e04393b4e0597aff37a18a81cd63f31b6ad68e375655d26650ac3f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52ddb6df4ba6855ec8260b19a58c11bf3d25371eba1e2ee01bd8e98e352860c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ddb6df4ba6855ec8260b19a58c11bf3d25371eba1e2ee01bd8e98e352860c9->enter($__internal_52ddb6df4ba6855ec8260b19a58c11bf3d25371eba1e2ee01bd8e98e352860c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78cf448e41cc0cf9e25f1c599a6d56d8ca7f17063f8dd40c0e11497ecb669aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cf448e41cc0cf9e25f1c599a6d56d8ca7f17063f8dd40c0e11497ecb669aba->enter($__internal_78cf448e41cc0cf9e25f1c599a6d56d8ca7f17063f8dd40c0e11497ecb669aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_78cf448e41cc0cf9e25f1c599a6d56d8ca7f17063f8dd40c0e11497ecb669aba->leave($__internal_78cf448e41cc0cf9e25f1c599a6d56d8ca7f17063f8dd40c0e11497ecb669aba_prof);

        
        $__internal_52ddb6df4ba6855ec8260b19a58c11bf3d25371eba1e2ee01bd8e98e352860c9->leave($__internal_52ddb6df4ba6855ec8260b19a58c11bf3d25371eba1e2ee01bd8e98e352860c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
