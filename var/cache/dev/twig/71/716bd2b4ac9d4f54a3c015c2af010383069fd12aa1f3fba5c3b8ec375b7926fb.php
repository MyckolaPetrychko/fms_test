<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_83d23abda652790311a706a350bc74725a82982392b755edf4e5d831c1f84c52 extends Twig_Template
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
        $__internal_ada3281ce4e72776bfedf557bf52933d7522b1a29dd41857f820d2be38beaa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada3281ce4e72776bfedf557bf52933d7522b1a29dd41857f820d2be38beaa5c->enter($__internal_ada3281ce4e72776bfedf557bf52933d7522b1a29dd41857f820d2be38beaa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ff01fa2ba0a9fde9859413d0c077853b5ad14280e298d3b830c789d93c876ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff01fa2ba0a9fde9859413d0c077853b5ad14280e298d3b830c789d93c876ef5->enter($__internal_ff01fa2ba0a9fde9859413d0c077853b5ad14280e298d3b830c789d93c876ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_ada3281ce4e72776bfedf557bf52933d7522b1a29dd41857f820d2be38beaa5c->leave($__internal_ada3281ce4e72776bfedf557bf52933d7522b1a29dd41857f820d2be38beaa5c_prof);

        
        $__internal_ff01fa2ba0a9fde9859413d0c077853b5ad14280e298d3b830c789d93c876ef5->leave($__internal_ff01fa2ba0a9fde9859413d0c077853b5ad14280e298d3b830c789d93c876ef5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
