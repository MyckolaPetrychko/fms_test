<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_78bd6ec02ff7b87169236938d4fcce35f1f03e74a8977115e35029a1c6064e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_921868ac7db9bdaf768277a507144f4af915c515a3c27bb6407a23ef61776e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921868ac7db9bdaf768277a507144f4af915c515a3c27bb6407a23ef61776e76->enter($__internal_921868ac7db9bdaf768277a507144f4af915c515a3c27bb6407a23ef61776e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_efebe58e4260fc3b1f805f9dd1a3ead0e605c072e35ed185fa3a6ea2d34bb3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efebe58e4260fc3b1f805f9dd1a3ead0e605c072e35ed185fa3a6ea2d34bb3a3->enter($__internal_efebe58e4260fc3b1f805f9dd1a3ead0e605c072e35ed185fa3a6ea2d34bb3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921868ac7db9bdaf768277a507144f4af915c515a3c27bb6407a23ef61776e76->leave($__internal_921868ac7db9bdaf768277a507144f4af915c515a3c27bb6407a23ef61776e76_prof);

        
        $__internal_efebe58e4260fc3b1f805f9dd1a3ead0e605c072e35ed185fa3a6ea2d34bb3a3->leave($__internal_efebe58e4260fc3b1f805f9dd1a3ead0e605c072e35ed185fa3a6ea2d34bb3a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9eb528223578de58d87b2302b5746215cfb1ee3f3291bd36d524f741b1a5a49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb528223578de58d87b2302b5746215cfb1ee3f3291bd36d524f741b1a5a49b->enter($__internal_9eb528223578de58d87b2302b5746215cfb1ee3f3291bd36d524f741b1a5a49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f23be80bb9a752493e8796846f77a3d669929d73f130764278662910aa115b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f23be80bb9a752493e8796846f77a3d669929d73f130764278662910aa115b9->enter($__internal_1f23be80bb9a752493e8796846f77a3d669929d73f130764278662910aa115b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1f23be80bb9a752493e8796846f77a3d669929d73f130764278662910aa115b9->leave($__internal_1f23be80bb9a752493e8796846f77a3d669929d73f130764278662910aa115b9_prof);

        
        $__internal_9eb528223578de58d87b2302b5746215cfb1ee3f3291bd36d524f741b1a5a49b->leave($__internal_9eb528223578de58d87b2302b5746215cfb1ee3f3291bd36d524f741b1a5a49b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
