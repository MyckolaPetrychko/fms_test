<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3e9d49d4f45dcf3aede3509e043dc06a0fedd52ac93a9d7bf7d465d6a59d3073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9d49d4f45dcf3aede3509e043dc06a0fedd52ac93a9d7bf7d465d6a59d3073->enter($__internal_3e9d49d4f45dcf3aede3509e043dc06a0fedd52ac93a9d7bf7d465d6a59d3073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7885cd16ce038310a0e800ab0b1ad058e72a03d7bf2283c70fc2dd23dbbd4886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7885cd16ce038310a0e800ab0b1ad058e72a03d7bf2283c70fc2dd23dbbd4886->enter($__internal_7885cd16ce038310a0e800ab0b1ad058e72a03d7bf2283c70fc2dd23dbbd4886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e9d49d4f45dcf3aede3509e043dc06a0fedd52ac93a9d7bf7d465d6a59d3073->leave($__internal_3e9d49d4f45dcf3aede3509e043dc06a0fedd52ac93a9d7bf7d465d6a59d3073_prof);

        
        $__internal_7885cd16ce038310a0e800ab0b1ad058e72a03d7bf2283c70fc2dd23dbbd4886->leave($__internal_7885cd16ce038310a0e800ab0b1ad058e72a03d7bf2283c70fc2dd23dbbd4886_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3add6f1a5ece3a436a96dd70d12324d773444e83064d32d6f36780413f81a115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3add6f1a5ece3a436a96dd70d12324d773444e83064d32d6f36780413f81a115->enter($__internal_3add6f1a5ece3a436a96dd70d12324d773444e83064d32d6f36780413f81a115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c30dac26eb274116f880eaba5132a5e0e6ed736221f129b32fd392cb5be7932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c30dac26eb274116f880eaba5132a5e0e6ed736221f129b32fd392cb5be7932->enter($__internal_0c30dac26eb274116f880eaba5132a5e0e6ed736221f129b32fd392cb5be7932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c30dac26eb274116f880eaba5132a5e0e6ed736221f129b32fd392cb5be7932->leave($__internal_0c30dac26eb274116f880eaba5132a5e0e6ed736221f129b32fd392cb5be7932_prof);

        
        $__internal_3add6f1a5ece3a436a96dd70d12324d773444e83064d32d6f36780413f81a115->leave($__internal_3add6f1a5ece3a436a96dd70d12324d773444e83064d32d6f36780413f81a115_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ae3e13b0b6c4980132e5b24398db74dbdc6f41efedcbd17ed98815505bed4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae3e13b0b6c4980132e5b24398db74dbdc6f41efedcbd17ed98815505bed4f5->enter($__internal_6ae3e13b0b6c4980132e5b24398db74dbdc6f41efedcbd17ed98815505bed4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aeabb22bb0e22364fd9244d8495c2facc9d275f618efc3bd740316ad5a9a9bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeabb22bb0e22364fd9244d8495c2facc9d275f618efc3bd740316ad5a9a9bcd->enter($__internal_aeabb22bb0e22364fd9244d8495c2facc9d275f618efc3bd740316ad5a9a9bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aeabb22bb0e22364fd9244d8495c2facc9d275f618efc3bd740316ad5a9a9bcd->leave($__internal_aeabb22bb0e22364fd9244d8495c2facc9d275f618efc3bd740316ad5a9a9bcd_prof);

        
        $__internal_6ae3e13b0b6c4980132e5b24398db74dbdc6f41efedcbd17ed98815505bed4f5->leave($__internal_6ae3e13b0b6c4980132e5b24398db74dbdc6f41efedcbd17ed98815505bed4f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56121bbc3a0117f6b705e6fc1fbf7fc84ca30c3694146d787373f01025bd6b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56121bbc3a0117f6b705e6fc1fbf7fc84ca30c3694146d787373f01025bd6b10->enter($__internal_56121bbc3a0117f6b705e6fc1fbf7fc84ca30c3694146d787373f01025bd6b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c440a235a4416636377bafc6a758b9645d8e1e9d5e4c7c84ec2d29730ab64dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c440a235a4416636377bafc6a758b9645d8e1e9d5e4c7c84ec2d29730ab64dca->enter($__internal_c440a235a4416636377bafc6a758b9645d8e1e9d5e4c7c84ec2d29730ab64dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c440a235a4416636377bafc6a758b9645d8e1e9d5e4c7c84ec2d29730ab64dca->leave($__internal_c440a235a4416636377bafc6a758b9645d8e1e9d5e4c7c84ec2d29730ab64dca_prof);

        
        $__internal_56121bbc3a0117f6b705e6fc1fbf7fc84ca30c3694146d787373f01025bd6b10->leave($__internal_56121bbc3a0117f6b705e6fc1fbf7fc84ca30c3694146d787373f01025bd6b10_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
