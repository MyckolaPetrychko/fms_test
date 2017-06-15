<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_984f14d3e9c21091a21e6efc556ecc6fc03816e6df617cf3134b7d53d0c9ef39 extends Twig_Template
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
        $__internal_cace33269b389769b1e8e75ae78c7e7e83c0da725e252aaa1e767dc486f1ed20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cace33269b389769b1e8e75ae78c7e7e83c0da725e252aaa1e767dc486f1ed20->enter($__internal_cace33269b389769b1e8e75ae78c7e7e83c0da725e252aaa1e767dc486f1ed20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_2568f7e083d1e1c61b0ec789b23c1d7c5996c7ee8f944024d4e2e872bbefc004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2568f7e083d1e1c61b0ec789b23c1d7c5996c7ee8f944024d4e2e872bbefc004->enter($__internal_2568f7e083d1e1c61b0ec789b23c1d7c5996c7ee8f944024d4e2e872bbefc004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_cace33269b389769b1e8e75ae78c7e7e83c0da725e252aaa1e767dc486f1ed20->leave($__internal_cace33269b389769b1e8e75ae78c7e7e83c0da725e252aaa1e767dc486f1ed20_prof);

        
        $__internal_2568f7e083d1e1c61b0ec789b23c1d7c5996c7ee8f944024d4e2e872bbefc004->leave($__internal_2568f7e083d1e1c61b0ec789b23c1d7c5996c7ee8f944024d4e2e872bbefc004_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
