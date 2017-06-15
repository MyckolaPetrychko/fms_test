<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a0bbbafc620bb0227f7072194a9afafbf72a7812a30078044daa60d267bd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a0bbbafc620bb0227f7072194a9afafbf72a7812a30078044daa60d267bd9a->enter($__internal_93a0bbbafc620bb0227f7072194a9afafbf72a7812a30078044daa60d267bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b6796f690a0c656df5815f65e0e66fd4183a51a2ef9e3d33d5adac3efeb4126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6796f690a0c656df5815f65e0e66fd4183a51a2ef9e3d33d5adac3efeb4126f->enter($__internal_b6796f690a0c656df5815f65e0e66fd4183a51a2ef9e3d33d5adac3efeb4126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a0bbbafc620bb0227f7072194a9afafbf72a7812a30078044daa60d267bd9a->leave($__internal_93a0bbbafc620bb0227f7072194a9afafbf72a7812a30078044daa60d267bd9a_prof);

        
        $__internal_b6796f690a0c656df5815f65e0e66fd4183a51a2ef9e3d33d5adac3efeb4126f->leave($__internal_b6796f690a0c656df5815f65e0e66fd4183a51a2ef9e3d33d5adac3efeb4126f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a984890048f428bf82cfdea1a5d9383f45ff428d9a4e2b37e99f2c4b764a7d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a984890048f428bf82cfdea1a5d9383f45ff428d9a4e2b37e99f2c4b764a7d9d->enter($__internal_a984890048f428bf82cfdea1a5d9383f45ff428d9a4e2b37e99f2c4b764a7d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_257ad5c8bd5fe7faa4faa659f5b50a2eaa712bc9fb3670d08934bb200025dd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257ad5c8bd5fe7faa4faa659f5b50a2eaa712bc9fb3670d08934bb200025dd78->enter($__internal_257ad5c8bd5fe7faa4faa659f5b50a2eaa712bc9fb3670d08934bb200025dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_257ad5c8bd5fe7faa4faa659f5b50a2eaa712bc9fb3670d08934bb200025dd78->leave($__internal_257ad5c8bd5fe7faa4faa659f5b50a2eaa712bc9fb3670d08934bb200025dd78_prof);

        
        $__internal_a984890048f428bf82cfdea1a5d9383f45ff428d9a4e2b37e99f2c4b764a7d9d->leave($__internal_a984890048f428bf82cfdea1a5d9383f45ff428d9a4e2b37e99f2c4b764a7d9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
