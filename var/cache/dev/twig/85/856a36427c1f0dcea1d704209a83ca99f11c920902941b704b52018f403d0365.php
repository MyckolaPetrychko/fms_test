<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7769a2bf121a16b69a543407a57e2a110a4cf87a40d604ae80bd5011ab542719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f646d9f8ecaf1f32d0acd3f2fcd97a7954a62d3e7433bdfa5de40d7349352937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f646d9f8ecaf1f32d0acd3f2fcd97a7954a62d3e7433bdfa5de40d7349352937->enter($__internal_f646d9f8ecaf1f32d0acd3f2fcd97a7954a62d3e7433bdfa5de40d7349352937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9a36b96cd72f32ef49d3186acc6946d7b8107419cf0e52e4ad006f63ec1ba69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a36b96cd72f32ef49d3186acc6946d7b8107419cf0e52e4ad006f63ec1ba69e->enter($__internal_9a36b96cd72f32ef49d3186acc6946d7b8107419cf0e52e4ad006f63ec1ba69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f646d9f8ecaf1f32d0acd3f2fcd97a7954a62d3e7433bdfa5de40d7349352937->leave($__internal_f646d9f8ecaf1f32d0acd3f2fcd97a7954a62d3e7433bdfa5de40d7349352937_prof);

        
        $__internal_9a36b96cd72f32ef49d3186acc6946d7b8107419cf0e52e4ad006f63ec1ba69e->leave($__internal_9a36b96cd72f32ef49d3186acc6946d7b8107419cf0e52e4ad006f63ec1ba69e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
