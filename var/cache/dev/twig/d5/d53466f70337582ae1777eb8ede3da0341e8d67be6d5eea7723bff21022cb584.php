<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a7564d5fa77f70d202b25611e25fe35065aa54138cdff535bce9e0caa4ca6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7564d5fa77f70d202b25611e25fe35065aa54138cdff535bce9e0caa4ca6d3->enter($__internal_6a7564d5fa77f70d202b25611e25fe35065aa54138cdff535bce9e0caa4ca6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_472d5031827034b6c50b660b93ae33ce0f7094c13aa2433d9800a8dc3342ae62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472d5031827034b6c50b660b93ae33ce0f7094c13aa2433d9800a8dc3342ae62->enter($__internal_472d5031827034b6c50b660b93ae33ce0f7094c13aa2433d9800a8dc3342ae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6a7564d5fa77f70d202b25611e25fe35065aa54138cdff535bce9e0caa4ca6d3->leave($__internal_6a7564d5fa77f70d202b25611e25fe35065aa54138cdff535bce9e0caa4ca6d3_prof);

        
        $__internal_472d5031827034b6c50b660b93ae33ce0f7094c13aa2433d9800a8dc3342ae62->leave($__internal_472d5031827034b6c50b660b93ae33ce0f7094c13aa2433d9800a8dc3342ae62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa317236f1174ff3cb42367b7f15f0cda6f0b1aa57fcec692347694206c385d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa317236f1174ff3cb42367b7f15f0cda6f0b1aa57fcec692347694206c385d8->enter($__internal_aa317236f1174ff3cb42367b7f15f0cda6f0b1aa57fcec692347694206c385d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_376c3f07c39e539bb492f29eeed7ec37990533a143e544965969d552776944a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376c3f07c39e539bb492f29eeed7ec37990533a143e544965969d552776944a9->enter($__internal_376c3f07c39e539bb492f29eeed7ec37990533a143e544965969d552776944a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_376c3f07c39e539bb492f29eeed7ec37990533a143e544965969d552776944a9->leave($__internal_376c3f07c39e539bb492f29eeed7ec37990533a143e544965969d552776944a9_prof);

        
        $__internal_aa317236f1174ff3cb42367b7f15f0cda6f0b1aa57fcec692347694206c385d8->leave($__internal_aa317236f1174ff3cb42367b7f15f0cda6f0b1aa57fcec692347694206c385d8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f2c03db29687474cf0c7fa84eca17ad11377d1ead79574d2cd6566e74168b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2c03db29687474cf0c7fa84eca17ad11377d1ead79574d2cd6566e74168b3e->enter($__internal_7f2c03db29687474cf0c7fa84eca17ad11377d1ead79574d2cd6566e74168b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09b045328f7a429bd07867e389fe2cf8d7fdf68e2c3155dd51b3be100723c96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b045328f7a429bd07867e389fe2cf8d7fdf68e2c3155dd51b3be100723c96c->enter($__internal_09b045328f7a429bd07867e389fe2cf8d7fdf68e2c3155dd51b3be100723c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_09b045328f7a429bd07867e389fe2cf8d7fdf68e2c3155dd51b3be100723c96c->leave($__internal_09b045328f7a429bd07867e389fe2cf8d7fdf68e2c3155dd51b3be100723c96c_prof);

        
        $__internal_7f2c03db29687474cf0c7fa84eca17ad11377d1ead79574d2cd6566e74168b3e->leave($__internal_7f2c03db29687474cf0c7fa84eca17ad11377d1ead79574d2cd6566e74168b3e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c5df4472a571dc3a16b60cb87cdc7c8d193e7014f2a53ddc845384f869dc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c5df4472a571dc3a16b60cb87cdc7c8d193e7014f2a53ddc845384f869dc14->enter($__internal_f6c5df4472a571dc3a16b60cb87cdc7c8d193e7014f2a53ddc845384f869dc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_949d6fddf2cfb5c404e0a5bc4f99412a1605cb8386680557ead64031ab0a93cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949d6fddf2cfb5c404e0a5bc4f99412a1605cb8386680557ead64031ab0a93cc->enter($__internal_949d6fddf2cfb5c404e0a5bc4f99412a1605cb8386680557ead64031ab0a93cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_949d6fddf2cfb5c404e0a5bc4f99412a1605cb8386680557ead64031ab0a93cc->leave($__internal_949d6fddf2cfb5c404e0a5bc4f99412a1605cb8386680557ead64031ab0a93cc_prof);

        
        $__internal_f6c5df4472a571dc3a16b60cb87cdc7c8d193e7014f2a53ddc845384f869dc14->leave($__internal_f6c5df4472a571dc3a16b60cb87cdc7c8d193e7014f2a53ddc845384f869dc14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
