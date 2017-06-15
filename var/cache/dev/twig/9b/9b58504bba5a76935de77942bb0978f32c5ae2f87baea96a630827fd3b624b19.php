<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbdf2d02f6a469cefe700918f2519bf108680707fa48e2e027582ece7942340a extends Twig_Template
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
        $__internal_c110710612ced238d3e82dba7c15c965df145c0995a04ab587524583a2a3fa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c110710612ced238d3e82dba7c15c965df145c0995a04ab587524583a2a3fa18->enter($__internal_c110710612ced238d3e82dba7c15c965df145c0995a04ab587524583a2a3fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_250aa1996dbc212f6d8bbbef6b14d36f420cf6e95603e187c57bc81059bb5b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250aa1996dbc212f6d8bbbef6b14d36f420cf6e95603e187c57bc81059bb5b7d->enter($__internal_250aa1996dbc212f6d8bbbef6b14d36f420cf6e95603e187c57bc81059bb5b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c110710612ced238d3e82dba7c15c965df145c0995a04ab587524583a2a3fa18->leave($__internal_c110710612ced238d3e82dba7c15c965df145c0995a04ab587524583a2a3fa18_prof);

        
        $__internal_250aa1996dbc212f6d8bbbef6b14d36f420cf6e95603e187c57bc81059bb5b7d->leave($__internal_250aa1996dbc212f6d8bbbef6b14d36f420cf6e95603e187c57bc81059bb5b7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
