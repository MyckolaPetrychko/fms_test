<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3af40ba5edc25b5b0e79f50b081b0ae0e64d19ff4c9ba5d487458935aa359e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b3ec077621f35e098d3e2516125de575c8400b7fa422afe23362b75761bc57fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ec077621f35e098d3e2516125de575c8400b7fa422afe23362b75761bc57fc->enter($__internal_b3ec077621f35e098d3e2516125de575c8400b7fa422afe23362b75761bc57fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_121dd5cf41e4673eeca735fba4182f2ee2a95cefe2e6f7bd8f037d0a1d3758eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121dd5cf41e4673eeca735fba4182f2ee2a95cefe2e6f7bd8f037d0a1d3758eb->enter($__internal_121dd5cf41e4673eeca735fba4182f2ee2a95cefe2e6f7bd8f037d0a1d3758eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ec077621f35e098d3e2516125de575c8400b7fa422afe23362b75761bc57fc->leave($__internal_b3ec077621f35e098d3e2516125de575c8400b7fa422afe23362b75761bc57fc_prof);

        
        $__internal_121dd5cf41e4673eeca735fba4182f2ee2a95cefe2e6f7bd8f037d0a1d3758eb->leave($__internal_121dd5cf41e4673eeca735fba4182f2ee2a95cefe2e6f7bd8f037d0a1d3758eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac301a9fa0545e941a8e4210ffb51465524cfdbb1f9e7634969136edc3e0e32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac301a9fa0545e941a8e4210ffb51465524cfdbb1f9e7634969136edc3e0e32a->enter($__internal_ac301a9fa0545e941a8e4210ffb51465524cfdbb1f9e7634969136edc3e0e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_983dcb33c879146e965383e3249080edc5aecad98efef8d12aa19d9be3f0b4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983dcb33c879146e965383e3249080edc5aecad98efef8d12aa19d9be3f0b4e7->enter($__internal_983dcb33c879146e965383e3249080edc5aecad98efef8d12aa19d9be3f0b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_983dcb33c879146e965383e3249080edc5aecad98efef8d12aa19d9be3f0b4e7->leave($__internal_983dcb33c879146e965383e3249080edc5aecad98efef8d12aa19d9be3f0b4e7_prof);

        
        $__internal_ac301a9fa0545e941a8e4210ffb51465524cfdbb1f9e7634969136edc3e0e32a->leave($__internal_ac301a9fa0545e941a8e4210ffb51465524cfdbb1f9e7634969136edc3e0e32a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
