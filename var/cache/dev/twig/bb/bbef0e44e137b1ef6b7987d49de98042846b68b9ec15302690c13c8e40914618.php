<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_748581b5f23cfc772fb955a043833322a1781cd61ddf6bd4e2023f3133ec98b8 extends Twig_Template
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
        $__internal_be9c2a1450346d3912e347817c8a7571bd4b4b361c9e75cfde2dfa383ee8959d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9c2a1450346d3912e347817c8a7571bd4b4b361c9e75cfde2dfa383ee8959d->enter($__internal_be9c2a1450346d3912e347817c8a7571bd4b4b361c9e75cfde2dfa383ee8959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_84ce316d1f1f25c1c5debab8ee5ba85b6828f0b6fc6c0618fd8426b404fcde2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ce316d1f1f25c1c5debab8ee5ba85b6828f0b6fc6c0618fd8426b404fcde2b->enter($__internal_84ce316d1f1f25c1c5debab8ee5ba85b6828f0b6fc6c0618fd8426b404fcde2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_be9c2a1450346d3912e347817c8a7571bd4b4b361c9e75cfde2dfa383ee8959d->leave($__internal_be9c2a1450346d3912e347817c8a7571bd4b4b361c9e75cfde2dfa383ee8959d_prof);

        
        $__internal_84ce316d1f1f25c1c5debab8ee5ba85b6828f0b6fc6c0618fd8426b404fcde2b->leave($__internal_84ce316d1f1f25c1c5debab8ee5ba85b6828f0b6fc6c0618fd8426b404fcde2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
