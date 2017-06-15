<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a2cd2b508de6143e1fac8faaeb2908e72dfd6ffa037cc4386c107e3b89c17247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_22db7d695ad8766a15fe68ac35a807ab34cc2a204f32292e88d012e45d72b0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22db7d695ad8766a15fe68ac35a807ab34cc2a204f32292e88d012e45d72b0a7->enter($__internal_22db7d695ad8766a15fe68ac35a807ab34cc2a204f32292e88d012e45d72b0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c3a30e12c87b261386762beafa66b78e9339cea5cf4aa5e5cc588ffb1a252c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a30e12c87b261386762beafa66b78e9339cea5cf4aa5e5cc588ffb1a252c6c->enter($__internal_c3a30e12c87b261386762beafa66b78e9339cea5cf4aa5e5cc588ffb1a252c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22db7d695ad8766a15fe68ac35a807ab34cc2a204f32292e88d012e45d72b0a7->leave($__internal_22db7d695ad8766a15fe68ac35a807ab34cc2a204f32292e88d012e45d72b0a7_prof);

        
        $__internal_c3a30e12c87b261386762beafa66b78e9339cea5cf4aa5e5cc588ffb1a252c6c->leave($__internal_c3a30e12c87b261386762beafa66b78e9339cea5cf4aa5e5cc588ffb1a252c6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac0298cc61df89bbe722c7cc0916858cfbf3fa5ea1fee5520a9b79195c247514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0298cc61df89bbe722c7cc0916858cfbf3fa5ea1fee5520a9b79195c247514->enter($__internal_ac0298cc61df89bbe722c7cc0916858cfbf3fa5ea1fee5520a9b79195c247514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08fefea40d5daa0601f21ce3920997431fd3e5e5c2c9f274eaf79c268b8294ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fefea40d5daa0601f21ce3920997431fd3e5e5c2c9f274eaf79c268b8294ba->enter($__internal_08fefea40d5daa0601f21ce3920997431fd3e5e5c2c9f274eaf79c268b8294ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_08fefea40d5daa0601f21ce3920997431fd3e5e5c2c9f274eaf79c268b8294ba->leave($__internal_08fefea40d5daa0601f21ce3920997431fd3e5e5c2c9f274eaf79c268b8294ba_prof);

        
        $__internal_ac0298cc61df89bbe722c7cc0916858cfbf3fa5ea1fee5520a9b79195c247514->leave($__internal_ac0298cc61df89bbe722c7cc0916858cfbf3fa5ea1fee5520a9b79195c247514_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
