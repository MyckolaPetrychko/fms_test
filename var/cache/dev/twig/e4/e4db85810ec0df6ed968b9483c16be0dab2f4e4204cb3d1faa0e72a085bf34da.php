<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d040c603626afb1220dc1d60563037c42f312eec1d50728b18480912b217b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d040c603626afb1220dc1d60563037c42f312eec1d50728b18480912b217b2a->enter($__internal_0d040c603626afb1220dc1d60563037c42f312eec1d50728b18480912b217b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8685bd459b03e6bf4233bfc2e3cbbb5089b6f9587b8807ba1020f77651dab711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8685bd459b03e6bf4233bfc2e3cbbb5089b6f9587b8807ba1020f77651dab711->enter($__internal_8685bd459b03e6bf4233bfc2e3cbbb5089b6f9587b8807ba1020f77651dab711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d040c603626afb1220dc1d60563037c42f312eec1d50728b18480912b217b2a->leave($__internal_0d040c603626afb1220dc1d60563037c42f312eec1d50728b18480912b217b2a_prof);

        
        $__internal_8685bd459b03e6bf4233bfc2e3cbbb5089b6f9587b8807ba1020f77651dab711->leave($__internal_8685bd459b03e6bf4233bfc2e3cbbb5089b6f9587b8807ba1020f77651dab711_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00fb006f64c086628e382ca15954e2321047570bb07730415d46727db109b8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fb006f64c086628e382ca15954e2321047570bb07730415d46727db109b8d2->enter($__internal_00fb006f64c086628e382ca15954e2321047570bb07730415d46727db109b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3bd1dc6471bfb04fc7b8a633b865cb6e548f29a026257e537f3b2d5b266bb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bd1dc6471bfb04fc7b8a633b865cb6e548f29a026257e537f3b2d5b266bb21->enter($__internal_b3bd1dc6471bfb04fc7b8a633b865cb6e548f29a026257e537f3b2d5b266bb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b3bd1dc6471bfb04fc7b8a633b865cb6e548f29a026257e537f3b2d5b266bb21->leave($__internal_b3bd1dc6471bfb04fc7b8a633b865cb6e548f29a026257e537f3b2d5b266bb21_prof);

        
        $__internal_00fb006f64c086628e382ca15954e2321047570bb07730415d46727db109b8d2->leave($__internal_00fb006f64c086628e382ca15954e2321047570bb07730415d46727db109b8d2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac66796bfa41c48d0347a39b35ddd6cfa3017151abad85f8ee830b34239c8ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac66796bfa41c48d0347a39b35ddd6cfa3017151abad85f8ee830b34239c8ff9->enter($__internal_ac66796bfa41c48d0347a39b35ddd6cfa3017151abad85f8ee830b34239c8ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bef988b2821add9ad71783197050bb029f4309f2a4d9a185dcca7c255f4b921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef988b2821add9ad71783197050bb029f4309f2a4d9a185dcca7c255f4b921a->enter($__internal_bef988b2821add9ad71783197050bb029f4309f2a4d9a185dcca7c255f4b921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bef988b2821add9ad71783197050bb029f4309f2a4d9a185dcca7c255f4b921a->leave($__internal_bef988b2821add9ad71783197050bb029f4309f2a4d9a185dcca7c255f4b921a_prof);

        
        $__internal_ac66796bfa41c48d0347a39b35ddd6cfa3017151abad85f8ee830b34239c8ff9->leave($__internal_ac66796bfa41c48d0347a39b35ddd6cfa3017151abad85f8ee830b34239c8ff9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0013748cd9f02435626568afd4f4480c83646a0d0660f63d06712219e580867d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0013748cd9f02435626568afd4f4480c83646a0d0660f63d06712219e580867d->enter($__internal_0013748cd9f02435626568afd4f4480c83646a0d0660f63d06712219e580867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38e45fba817aad50ab98aa77024e8c7978499d548faaf9232666cb8ba32c8a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e45fba817aad50ab98aa77024e8c7978499d548faaf9232666cb8ba32c8a1e->enter($__internal_38e45fba817aad50ab98aa77024e8c7978499d548faaf9232666cb8ba32c8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_38e45fba817aad50ab98aa77024e8c7978499d548faaf9232666cb8ba32c8a1e->leave($__internal_38e45fba817aad50ab98aa77024e8c7978499d548faaf9232666cb8ba32c8a1e_prof);

        
        $__internal_0013748cd9f02435626568afd4f4480c83646a0d0660f63d06712219e580867d->leave($__internal_0013748cd9f02435626568afd4f4480c83646a0d0660f63d06712219e580867d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
