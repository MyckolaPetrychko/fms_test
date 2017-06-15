<?php

/* FMSUserBundle:Default:registration.html.twig */
class __TwigTemplate_f08859e2964ed0ac061aa262256eb6cefec2e790cbd5e3d28494d0d0a72568e6 extends Twig_Template
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
        $__internal_2ac1fe8b9dfd652dbe9fb5f4d21cac9054c7071ef7df810b229de3d7e04015ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac1fe8b9dfd652dbe9fb5f4d21cac9054c7071ef7df810b229de3d7e04015ad->enter($__internal_2ac1fe8b9dfd652dbe9fb5f4d21cac9054c7071ef7df810b229de3d7e04015ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMSUserBundle:Default:registration.html.twig"));

        $__internal_859fff6a062703373cf63949a426935037c09226b53952271acbf2da63a3834b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859fff6a062703373cf63949a426935037c09226b53952271acbf2da63a3834b->enter($__internal_859fff6a062703373cf63949a426935037c09226b53952271acbf2da63a3834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMSUserBundle:Default:registration.html.twig"));

        // line 1
        echo "<h1>Welcome to our site!</h1>

Your information:
";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "secondname", array()), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        
        $__internal_2ac1fe8b9dfd652dbe9fb5f4d21cac9054c7071ef7df810b229de3d7e04015ad->leave($__internal_2ac1fe8b9dfd652dbe9fb5f4d21cac9054c7071ef7df810b229de3d7e04015ad_prof);

        
        $__internal_859fff6a062703373cf63949a426935037c09226b53952271acbf2da63a3834b->leave($__internal_859fff6a062703373cf63949a426935037c09226b53952271acbf2da63a3834b_prof);

    }

    public function getTemplateName()
    {
        return "FMSUserBundle:Default:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Welcome to our site!</h1>

Your information:
{{ user.username }}
{{ user.secondname }}
{{ user.email }}", "FMSUserBundle:Default:registration.html.twig", "/var/www/symfony.local.com/public_html/src/FMS/UserBundle/Resources/views/Default/registration.html.twig");
    }
}
