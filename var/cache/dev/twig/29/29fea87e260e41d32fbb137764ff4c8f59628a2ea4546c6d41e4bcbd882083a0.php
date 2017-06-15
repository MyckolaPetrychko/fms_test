<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_69499cd06c79772967cb38fc760e58b6fe977631e13e85f55d0c88c0fd51894a extends Twig_Template
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
        $__internal_6700c3b63e0093168aa028bb1c93428435c681c74646db8a43ff805c3ea238f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6700c3b63e0093168aa028bb1c93428435c681c74646db8a43ff805c3ea238f0->enter($__internal_6700c3b63e0093168aa028bb1c93428435c681c74646db8a43ff805c3ea238f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_01d08b2dd44169443fc400de34105199529ca3c3733122bc67fe269270491f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d08b2dd44169443fc400de34105199529ca3c3733122bc67fe269270491f67->enter($__internal_01d08b2dd44169443fc400de34105199529ca3c3733122bc67fe269270491f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_6700c3b63e0093168aa028bb1c93428435c681c74646db8a43ff805c3ea238f0->leave($__internal_6700c3b63e0093168aa028bb1c93428435c681c74646db8a43ff805c3ea238f0_prof);

        
        $__internal_01d08b2dd44169443fc400de34105199529ca3c3733122bc67fe269270491f67->leave($__internal_01d08b2dd44169443fc400de34105199529ca3c3733122bc67fe269270491f67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
