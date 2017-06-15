<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76404c5fabb4d4179e1c5abe01233cef35360e427487fba53ccbfed17d5cb66c extends Twig_Template
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
        $__internal_f33e106fd5e885788fde7175e3725ad90a28260a25d5e3ed71f3fb556584c984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33e106fd5e885788fde7175e3725ad90a28260a25d5e3ed71f3fb556584c984->enter($__internal_f33e106fd5e885788fde7175e3725ad90a28260a25d5e3ed71f3fb556584c984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6bd387b157a28b92da70080c9a5e6bf47c700057ae76303040951175ffd91b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd387b157a28b92da70080c9a5e6bf47c700057ae76303040951175ffd91b8e->enter($__internal_6bd387b157a28b92da70080c9a5e6bf47c700057ae76303040951175ffd91b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f33e106fd5e885788fde7175e3725ad90a28260a25d5e3ed71f3fb556584c984->leave($__internal_f33e106fd5e885788fde7175e3725ad90a28260a25d5e3ed71f3fb556584c984_prof);

        
        $__internal_6bd387b157a28b92da70080c9a5e6bf47c700057ae76303040951175ffd91b8e->leave($__internal_6bd387b157a28b92da70080c9a5e6bf47c700057ae76303040951175ffd91b8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
