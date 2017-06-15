<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_dcb210b6f39363137292a5b7bdd3cc753f60acba47e3ce5c9d77df093a6727fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da8e6e5b9f2de79b70f75eb2cd0cd0495d1d7ae48ef837706f69b4a86c254313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8e6e5b9f2de79b70f75eb2cd0cd0495d1d7ae48ef837706f69b4a86c254313->enter($__internal_da8e6e5b9f2de79b70f75eb2cd0cd0495d1d7ae48ef837706f69b4a86c254313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_44fb7fd2aca9266b085caf4301f2e21e5a59705d8eb04cee06373f263ab7606a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fb7fd2aca9266b085caf4301f2e21e5a59705d8eb04cee06373f263ab7606a->enter($__internal_44fb7fd2aca9266b085caf4301f2e21e5a59705d8eb04cee06373f263ab7606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8e6e5b9f2de79b70f75eb2cd0cd0495d1d7ae48ef837706f69b4a86c254313->leave($__internal_da8e6e5b9f2de79b70f75eb2cd0cd0495d1d7ae48ef837706f69b4a86c254313_prof);

        
        $__internal_44fb7fd2aca9266b085caf4301f2e21e5a59705d8eb04cee06373f263ab7606a->leave($__internal_44fb7fd2aca9266b085caf4301f2e21e5a59705d8eb04cee06373f263ab7606a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65a473d2cd93ccb5907aa1bdbf7aa0abc2d142bf5f1f3c5ed767de4701360c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a473d2cd93ccb5907aa1bdbf7aa0abc2d142bf5f1f3c5ed767de4701360c20->enter($__internal_65a473d2cd93ccb5907aa1bdbf7aa0abc2d142bf5f1f3c5ed767de4701360c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_31d5d2601a104e87762e89dbb2a10e68c35a7f349ad0c8f1894e45eb88ef80e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d5d2601a104e87762e89dbb2a10e68c35a7f349ad0c8f1894e45eb88ef80e2->enter($__internal_31d5d2601a104e87762e89dbb2a10e68c35a7f349ad0c8f1894e45eb88ef80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_31d5d2601a104e87762e89dbb2a10e68c35a7f349ad0c8f1894e45eb88ef80e2->leave($__internal_31d5d2601a104e87762e89dbb2a10e68c35a7f349ad0c8f1894e45eb88ef80e2_prof);

        
        $__internal_65a473d2cd93ccb5907aa1bdbf7aa0abc2d142bf5f1f3c5ed767de4701360c20->leave($__internal_65a473d2cd93ccb5907aa1bdbf7aa0abc2d142bf5f1f3c5ed767de4701360c20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
