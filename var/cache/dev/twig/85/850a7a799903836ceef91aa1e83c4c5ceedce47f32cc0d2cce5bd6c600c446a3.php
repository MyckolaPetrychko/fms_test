<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11d15114edb16eb3fdc0488967b0a7d96e87f337dca5248c479bef3493cd2980 extends Twig_Template
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
        $__internal_6b13cc4621db1638bad5357733bd29eb7f736448033aa9ab420d2077533faf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b13cc4621db1638bad5357733bd29eb7f736448033aa9ab420d2077533faf1b->enter($__internal_6b13cc4621db1638bad5357733bd29eb7f736448033aa9ab420d2077533faf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e3b509628885a01866f86abfba06a1834727e94b8072a461521a23197ddf51a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b509628885a01866f86abfba06a1834727e94b8072a461521a23197ddf51a7->enter($__internal_e3b509628885a01866f86abfba06a1834727e94b8072a461521a23197ddf51a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6b13cc4621db1638bad5357733bd29eb7f736448033aa9ab420d2077533faf1b->leave($__internal_6b13cc4621db1638bad5357733bd29eb7f736448033aa9ab420d2077533faf1b_prof);

        
        $__internal_e3b509628885a01866f86abfba06a1834727e94b8072a461521a23197ddf51a7->leave($__internal_e3b509628885a01866f86abfba06a1834727e94b8072a461521a23197ddf51a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
