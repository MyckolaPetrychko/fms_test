<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_34edeb018be0771bbd604a513881fa88fecf2c79350b34f034d9c7b129de1b14 extends Twig_Template
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
        $__internal_057406c28c50e883b7c4272273ef3786585f4f67c7f7ab22dd599a54b2cdb75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057406c28c50e883b7c4272273ef3786585f4f67c7f7ab22dd599a54b2cdb75f->enter($__internal_057406c28c50e883b7c4272273ef3786585f4f67c7f7ab22dd599a54b2cdb75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1b1c6c0cdfe625be3b106bc131d0df4abf0064f3c75ceca46990a8a2029f2c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1c6c0cdfe625be3b106bc131d0df4abf0064f3c75ceca46990a8a2029f2c1d->enter($__internal_1b1c6c0cdfe625be3b106bc131d0df4abf0064f3c75ceca46990a8a2029f2c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_057406c28c50e883b7c4272273ef3786585f4f67c7f7ab22dd599a54b2cdb75f->leave($__internal_057406c28c50e883b7c4272273ef3786585f4f67c7f7ab22dd599a54b2cdb75f_prof);

        
        $__internal_1b1c6c0cdfe625be3b106bc131d0df4abf0064f3c75ceca46990a8a2029f2c1d->leave($__internal_1b1c6c0cdfe625be3b106bc131d0df4abf0064f3c75ceca46990a8a2029f2c1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
