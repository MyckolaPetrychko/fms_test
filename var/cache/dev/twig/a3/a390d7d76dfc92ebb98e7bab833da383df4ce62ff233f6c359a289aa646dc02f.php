<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3e445c0016a149d1983c07d2585961d8f0a63f8b2bddee6d2bef06e297516f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24c008022b0db3ace051d0633d271c8445c23d5a29be6ebaf1fb028d066e633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24c008022b0db3ace051d0633d271c8445c23d5a29be6ebaf1fb028d066e633->enter($__internal_e24c008022b0db3ace051d0633d271c8445c23d5a29be6ebaf1fb028d066e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ba992cd2d207bbb2f5427123f5e76394587e3b614d0bffeb96c4e0d02859ae12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba992cd2d207bbb2f5427123f5e76394587e3b614d0bffeb96c4e0d02859ae12->enter($__internal_ba992cd2d207bbb2f5427123f5e76394587e3b614d0bffeb96c4e0d02859ae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e24c008022b0db3ace051d0633d271c8445c23d5a29be6ebaf1fb028d066e633->leave($__internal_e24c008022b0db3ace051d0633d271c8445c23d5a29be6ebaf1fb028d066e633_prof);

        
        $__internal_ba992cd2d207bbb2f5427123f5e76394587e3b614d0bffeb96c4e0d02859ae12->leave($__internal_ba992cd2d207bbb2f5427123f5e76394587e3b614d0bffeb96c4e0d02859ae12_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_213ca86aa21c284ab21aa58cb1f56ca9e2a6afac10296aced771103fa882e838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213ca86aa21c284ab21aa58cb1f56ca9e2a6afac10296aced771103fa882e838->enter($__internal_213ca86aa21c284ab21aa58cb1f56ca9e2a6afac10296aced771103fa882e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e8aac1a1f742b8ac92a7d2ec07a03a5855d161a86c35e9764971a89f8b5b409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8aac1a1f742b8ac92a7d2ec07a03a5855d161a86c35e9764971a89f8b5b409->enter($__internal_2e8aac1a1f742b8ac92a7d2ec07a03a5855d161a86c35e9764971a89f8b5b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e8aac1a1f742b8ac92a7d2ec07a03a5855d161a86c35e9764971a89f8b5b409->leave($__internal_2e8aac1a1f742b8ac92a7d2ec07a03a5855d161a86c35e9764971a89f8b5b409_prof);

        
        $__internal_213ca86aa21c284ab21aa58cb1f56ca9e2a6afac10296aced771103fa882e838->leave($__internal_213ca86aa21c284ab21aa58cb1f56ca9e2a6afac10296aced771103fa882e838_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
