<?php

/* FMSNotificationBundle:Default:registration.html.twig */
class __TwigTemplate_edf823043237b50a5e3718405ac6c2c407574a0a9f21d591fdc86278935db396 extends Twig_Template
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
        $__internal_2ef932865f01db93d744db0d8fdac0e31cc851fc62f9e978670862004725c1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef932865f01db93d744db0d8fdac0e31cc851fc62f9e978670862004725c1dc->enter($__internal_2ef932865f01db93d744db0d8fdac0e31cc851fc62f9e978670862004725c1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMSNotificationBundle:Default:registration.html.twig"));

        $__internal_5e021ea9f0cabc24b24f596d0d26c2fcb40c7a999abb8a66c325bb2b19fab851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e021ea9f0cabc24b24f596d0d26c2fcb40c7a999abb8a66c325bb2b19fab851->enter($__internal_5e021ea9f0cabc24b24f596d0d26c2fcb40c7a999abb8a66c325bb2b19fab851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMSNotificationBundle:Default:registration.html.twig"));

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
        
        $__internal_2ef932865f01db93d744db0d8fdac0e31cc851fc62f9e978670862004725c1dc->leave($__internal_2ef932865f01db93d744db0d8fdac0e31cc851fc62f9e978670862004725c1dc_prof);

        
        $__internal_5e021ea9f0cabc24b24f596d0d26c2fcb40c7a999abb8a66c325bb2b19fab851->leave($__internal_5e021ea9f0cabc24b24f596d0d26c2fcb40c7a999abb8a66c325bb2b19fab851_prof);

    }

    public function getTemplateName()
    {
        return "FMSNotificationBundle:Default:registration.html.twig";
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
{{ user.email }}", "FMSNotificationBundle:Default:registration.html.twig", "/var/www/symfony.local.com/public_html/src/FMS/NotificationBundle/Resources/views/Default/registration.html.twig");
    }
}
