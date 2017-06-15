<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_172c78e97363d7b2f827e2febfafe708bfb5604fae8230b8bcf9d255bc95c312 extends Twig_Template
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
        $__internal_205e73e4d2d5834d732a60f0603f94efb90a8bf1c19eb82b0db9992d7a16b628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205e73e4d2d5834d732a60f0603f94efb90a8bf1c19eb82b0db9992d7a16b628->enter($__internal_205e73e4d2d5834d732a60f0603f94efb90a8bf1c19eb82b0db9992d7a16b628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3d1855a065fbffc8b48941bcbd6ee1ad82d97b1f0bd00c8c1b9312f1fbd01fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1855a065fbffc8b48941bcbd6ee1ad82d97b1f0bd00c8c1b9312f1fbd01fcb->enter($__internal_3d1855a065fbffc8b48941bcbd6ee1ad82d97b1f0bd00c8c1b9312f1fbd01fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_205e73e4d2d5834d732a60f0603f94efb90a8bf1c19eb82b0db9992d7a16b628->leave($__internal_205e73e4d2d5834d732a60f0603f94efb90a8bf1c19eb82b0db9992d7a16b628_prof);

        
        $__internal_3d1855a065fbffc8b48941bcbd6ee1ad82d97b1f0bd00c8c1b9312f1fbd01fcb->leave($__internal_3d1855a065fbffc8b48941bcbd6ee1ad82d97b1f0bd00c8c1b9312f1fbd01fcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
