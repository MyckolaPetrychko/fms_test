<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e99bb523641b0a5d367d61f161199e56f4da09df8a0d1b3a0f16fdf201c0187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e99bb523641b0a5d367d61f161199e56f4da09df8a0d1b3a0f16fdf201c0187->enter($__internal_6e99bb523641b0a5d367d61f161199e56f4da09df8a0d1b3a0f16fdf201c0187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22d747e3ae1a039ae186edb176894731d8d40e15b92a51c8a530e45b4125d32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d747e3ae1a039ae186edb176894731d8d40e15b92a51c8a530e45b4125d32e->enter($__internal_22d747e3ae1a039ae186edb176894731d8d40e15b92a51c8a530e45b4125d32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6e99bb523641b0a5d367d61f161199e56f4da09df8a0d1b3a0f16fdf201c0187->leave($__internal_6e99bb523641b0a5d367d61f161199e56f4da09df8a0d1b3a0f16fdf201c0187_prof);

        
        $__internal_22d747e3ae1a039ae186edb176894731d8d40e15b92a51c8a530e45b4125d32e->leave($__internal_22d747e3ae1a039ae186edb176894731d8d40e15b92a51c8a530e45b4125d32e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_886ceee2ab2c606fb7d2ae8b23e414cfedbb6c58bac420ae22fc81d6bf7276de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886ceee2ab2c606fb7d2ae8b23e414cfedbb6c58bac420ae22fc81d6bf7276de->enter($__internal_886ceee2ab2c606fb7d2ae8b23e414cfedbb6c58bac420ae22fc81d6bf7276de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cf51010b16939403ffb315da450875b75ca5bfa6da22223e90e8f7ecaf0d3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf51010b16939403ffb315da450875b75ca5bfa6da22223e90e8f7ecaf0d3ce->enter($__internal_2cf51010b16939403ffb315da450875b75ca5bfa6da22223e90e8f7ecaf0d3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2cf51010b16939403ffb315da450875b75ca5bfa6da22223e90e8f7ecaf0d3ce->leave($__internal_2cf51010b16939403ffb315da450875b75ca5bfa6da22223e90e8f7ecaf0d3ce_prof);

        
        $__internal_886ceee2ab2c606fb7d2ae8b23e414cfedbb6c58bac420ae22fc81d6bf7276de->leave($__internal_886ceee2ab2c606fb7d2ae8b23e414cfedbb6c58bac420ae22fc81d6bf7276de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_418ccd1f30d522d702c130d89fbb821ba27ee4b4ae882f6112fa53e457cb72db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418ccd1f30d522d702c130d89fbb821ba27ee4b4ae882f6112fa53e457cb72db->enter($__internal_418ccd1f30d522d702c130d89fbb821ba27ee4b4ae882f6112fa53e457cb72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2bafec7e832f3a83e3675ddc089eae7c54d40bf4d38e9618c674302f3fd2b088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bafec7e832f3a83e3675ddc089eae7c54d40bf4d38e9618c674302f3fd2b088->enter($__internal_2bafec7e832f3a83e3675ddc089eae7c54d40bf4d38e9618c674302f3fd2b088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2bafec7e832f3a83e3675ddc089eae7c54d40bf4d38e9618c674302f3fd2b088->leave($__internal_2bafec7e832f3a83e3675ddc089eae7c54d40bf4d38e9618c674302f3fd2b088_prof);

        
        $__internal_418ccd1f30d522d702c130d89fbb821ba27ee4b4ae882f6112fa53e457cb72db->leave($__internal_418ccd1f30d522d702c130d89fbb821ba27ee4b4ae882f6112fa53e457cb72db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b5370e30c5dd87e89d42a4338dc7f32dd32a8f1aa16414ef70984e882c78b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b5370e30c5dd87e89d42a4338dc7f32dd32a8f1aa16414ef70984e882c78b6->enter($__internal_67b5370e30c5dd87e89d42a4338dc7f32dd32a8f1aa16414ef70984e882c78b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65ff317025ed43777b114249792006c17a901a0e3a33a1726988cb74458b3fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ff317025ed43777b114249792006c17a901a0e3a33a1726988cb74458b3fcb->enter($__internal_65ff317025ed43777b114249792006c17a901a0e3a33a1726988cb74458b3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65ff317025ed43777b114249792006c17a901a0e3a33a1726988cb74458b3fcb->leave($__internal_65ff317025ed43777b114249792006c17a901a0e3a33a1726988cb74458b3fcb_prof);

        
        $__internal_67b5370e30c5dd87e89d42a4338dc7f32dd32a8f1aa16414ef70984e882c78b6->leave($__internal_67b5370e30c5dd87e89d42a4338dc7f32dd32a8f1aa16414ef70984e882c78b6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a6af8031e30fcee43f6d70a8841a1e2f4a76591c647566a0441e38f159c8e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6af8031e30fcee43f6d70a8841a1e2f4a76591c647566a0441e38f159c8e88->enter($__internal_6a6af8031e30fcee43f6d70a8841a1e2f4a76591c647566a0441e38f159c8e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_25c7e287d8d12bce2f57fb315a15e66368b255749a523f413944410f0fd37d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c7e287d8d12bce2f57fb315a15e66368b255749a523f413944410f0fd37d12->enter($__internal_25c7e287d8d12bce2f57fb315a15e66368b255749a523f413944410f0fd37d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25c7e287d8d12bce2f57fb315a15e66368b255749a523f413944410f0fd37d12->leave($__internal_25c7e287d8d12bce2f57fb315a15e66368b255749a523f413944410f0fd37d12_prof);

        
        $__internal_6a6af8031e30fcee43f6d70a8841a1e2f4a76591c647566a0441e38f159c8e88->leave($__internal_6a6af8031e30fcee43f6d70a8841a1e2f4a76591c647566a0441e38f159c8e88_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony.local.com/public_html/app/Resources/views/base.html.twig");
    }
}
