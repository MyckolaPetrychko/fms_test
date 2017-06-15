<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8f9aa06991283aeeb11ef01da5388fe70af9036774ecedc4781950de3fd4634 extends Twig_Template
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
        $__internal_f52fea9cb91dba8e8fb6b95df34b7f8bf0c7317fb805a844110101b2fbb3dcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52fea9cb91dba8e8fb6b95df34b7f8bf0c7317fb805a844110101b2fbb3dcf5->enter($__internal_f52fea9cb91dba8e8fb6b95df34b7f8bf0c7317fb805a844110101b2fbb3dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b51bda432497c2a34ad7d80db8dc24a410a27579feeb499dae57be81ecca50ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51bda432497c2a34ad7d80db8dc24a410a27579feeb499dae57be81ecca50ec->enter($__internal_b51bda432497c2a34ad7d80db8dc24a410a27579feeb499dae57be81ecca50ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f52fea9cb91dba8e8fb6b95df34b7f8bf0c7317fb805a844110101b2fbb3dcf5->leave($__internal_f52fea9cb91dba8e8fb6b95df34b7f8bf0c7317fb805a844110101b2fbb3dcf5_prof);

        
        $__internal_b51bda432497c2a34ad7d80db8dc24a410a27579feeb499dae57be81ecca50ec->leave($__internal_b51bda432497c2a34ad7d80db8dc24a410a27579feeb499dae57be81ecca50ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
