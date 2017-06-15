<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b39b38123e72a4159b05653b130229b5d6c369aa44df7aa804a3dba68e8a59b7 extends Twig_Template
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
        $__internal_7ff7336c8da6e0d43ce11ad64a4ed66eb0586821c023cecedd43375e5c138a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff7336c8da6e0d43ce11ad64a4ed66eb0586821c023cecedd43375e5c138a88->enter($__internal_7ff7336c8da6e0d43ce11ad64a4ed66eb0586821c023cecedd43375e5c138a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_51bedf56403feaccb7493351a150a4c8e3e888e65deeb9a49f242ff903d308c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bedf56403feaccb7493351a150a4c8e3e888e65deeb9a49f242ff903d308c5->enter($__internal_51bedf56403feaccb7493351a150a4c8e3e888e65deeb9a49f242ff903d308c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ff7336c8da6e0d43ce11ad64a4ed66eb0586821c023cecedd43375e5c138a88->leave($__internal_7ff7336c8da6e0d43ce11ad64a4ed66eb0586821c023cecedd43375e5c138a88_prof);

        
        $__internal_51bedf56403feaccb7493351a150a4c8e3e888e65deeb9a49f242ff903d308c5->leave($__internal_51bedf56403feaccb7493351a150a4c8e3e888e65deeb9a49f242ff903d308c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
