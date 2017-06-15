<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b11e71f19d4dd921d6334c419fce5f06b6dce35e3c1de3b24c8b836f709c2c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17319b636861baccf7885c41c9aaa7b6156540619a4f53a61898e04b9aa335c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17319b636861baccf7885c41c9aaa7b6156540619a4f53a61898e04b9aa335c2->enter($__internal_17319b636861baccf7885c41c9aaa7b6156540619a4f53a61898e04b9aa335c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fb99feb03a3f0d992ad45361e5ec637d0265e80aea0f70d8243533ef65f78ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb99feb03a3f0d992ad45361e5ec637d0265e80aea0f70d8243533ef65f78ecd->enter($__internal_fb99feb03a3f0d992ad45361e5ec637d0265e80aea0f70d8243533ef65f78ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17319b636861baccf7885c41c9aaa7b6156540619a4f53a61898e04b9aa335c2->leave($__internal_17319b636861baccf7885c41c9aaa7b6156540619a4f53a61898e04b9aa335c2_prof);

        
        $__internal_fb99feb03a3f0d992ad45361e5ec637d0265e80aea0f70d8243533ef65f78ecd->leave($__internal_fb99feb03a3f0d992ad45361e5ec637d0265e80aea0f70d8243533ef65f78ecd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9983f8cbaaeb041fffdd37e28704bad38315410978acd33439f9114131dd3e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9983f8cbaaeb041fffdd37e28704bad38315410978acd33439f9114131dd3e7e->enter($__internal_9983f8cbaaeb041fffdd37e28704bad38315410978acd33439f9114131dd3e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71faa73c2fdc3de7f9b251873a09f2ecab001d04be3a6317bab73f66ae621c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71faa73c2fdc3de7f9b251873a09f2ecab001d04be3a6317bab73f66ae621c91->enter($__internal_71faa73c2fdc3de7f9b251873a09f2ecab001d04be3a6317bab73f66ae621c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71faa73c2fdc3de7f9b251873a09f2ecab001d04be3a6317bab73f66ae621c91->leave($__internal_71faa73c2fdc3de7f9b251873a09f2ecab001d04be3a6317bab73f66ae621c91_prof);

        
        $__internal_9983f8cbaaeb041fffdd37e28704bad38315410978acd33439f9114131dd3e7e->leave($__internal_9983f8cbaaeb041fffdd37e28704bad38315410978acd33439f9114131dd3e7e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f3ce2316af11ac0439684f82c8de21ba62fbc76be008fda05a4038441160b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f3ce2316af11ac0439684f82c8de21ba62fbc76be008fda05a4038441160b5->enter($__internal_17f3ce2316af11ac0439684f82c8de21ba62fbc76be008fda05a4038441160b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6de391e8710e85aa52f95c714c5b91d3b7a7245541e77f0ff15784c15f25180f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de391e8710e85aa52f95c714c5b91d3b7a7245541e77f0ff15784c15f25180f->enter($__internal_6de391e8710e85aa52f95c714c5b91d3b7a7245541e77f0ff15784c15f25180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6de391e8710e85aa52f95c714c5b91d3b7a7245541e77f0ff15784c15f25180f->leave($__internal_6de391e8710e85aa52f95c714c5b91d3b7a7245541e77f0ff15784c15f25180f_prof);

        
        $__internal_17f3ce2316af11ac0439684f82c8de21ba62fbc76be008fda05a4038441160b5->leave($__internal_17f3ce2316af11ac0439684f82c8de21ba62fbc76be008fda05a4038441160b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
