<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_09486ce732be869d7f8ac9e4a83f447986a3ce162945cfbf30a96b20de9b808f extends Twig_Template
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
        $__internal_548cfa9bb40e80bee0861207b099c73896e440082abeb4084a4ac5c6d98d0bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548cfa9bb40e80bee0861207b099c73896e440082abeb4084a4ac5c6d98d0bcf->enter($__internal_548cfa9bb40e80bee0861207b099c73896e440082abeb4084a4ac5c6d98d0bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0bbd97000376d52320f611e66bccbccf72607080932dc1416b02e4acc0be90b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbd97000376d52320f611e66bccbccf72607080932dc1416b02e4acc0be90b4->enter($__internal_0bbd97000376d52320f611e66bccbccf72607080932dc1416b02e4acc0be90b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_548cfa9bb40e80bee0861207b099c73896e440082abeb4084a4ac5c6d98d0bcf->leave($__internal_548cfa9bb40e80bee0861207b099c73896e440082abeb4084a4ac5c6d98d0bcf_prof);

        
        $__internal_0bbd97000376d52320f611e66bccbccf72607080932dc1416b02e4acc0be90b4->leave($__internal_0bbd97000376d52320f611e66bccbccf72607080932dc1416b02e4acc0be90b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
