<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_860df28b61090c7653bdef7e8322173e375f7e7e5ffb8b6197621272907dcc0a extends Twig_Template
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
        $__internal_0ebd1d21d46b5abb4a306e047e238010e1b5f5b7f8ae156e9f9ff2827e55d1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebd1d21d46b5abb4a306e047e238010e1b5f5b7f8ae156e9f9ff2827e55d1c9->enter($__internal_0ebd1d21d46b5abb4a306e047e238010e1b5f5b7f8ae156e9f9ff2827e55d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_47157db58820d4c938c1184aeba2249cf995b8b286a61c8301001e426d08c8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47157db58820d4c938c1184aeba2249cf995b8b286a61c8301001e426d08c8cb->enter($__internal_47157db58820d4c938c1184aeba2249cf995b8b286a61c8301001e426d08c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0ebd1d21d46b5abb4a306e047e238010e1b5f5b7f8ae156e9f9ff2827e55d1c9->leave($__internal_0ebd1d21d46b5abb4a306e047e238010e1b5f5b7f8ae156e9f9ff2827e55d1c9_prof);

        
        $__internal_47157db58820d4c938c1184aeba2249cf995b8b286a61c8301001e426d08c8cb->leave($__internal_47157db58820d4c938c1184aeba2249cf995b8b286a61c8301001e426d08c8cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
