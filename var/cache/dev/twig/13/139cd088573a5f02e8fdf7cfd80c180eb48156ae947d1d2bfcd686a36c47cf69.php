<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_920d91151767350a31cc353abff5fff66520d73f5ef0f1d6769464638c98f614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac8ae24a0483bb9abe981b6273573040d7eaed0513ef4299c49e322f7e8b3af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8ae24a0483bb9abe981b6273573040d7eaed0513ef4299c49e322f7e8b3af9->enter($__internal_ac8ae24a0483bb9abe981b6273573040d7eaed0513ef4299c49e322f7e8b3af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_65f61c3d1a184c2ae8d0febb74f38a7f43dbe037020d644248ed9871e06a75f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f61c3d1a184c2ae8d0febb74f38a7f43dbe037020d644248ed9871e06a75f5->enter($__internal_65f61c3d1a184c2ae8d0febb74f38a7f43dbe037020d644248ed9871e06a75f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ac8ae24a0483bb9abe981b6273573040d7eaed0513ef4299c49e322f7e8b3af9->leave($__internal_ac8ae24a0483bb9abe981b6273573040d7eaed0513ef4299c49e322f7e8b3af9_prof);

        
        $__internal_65f61c3d1a184c2ae8d0febb74f38a7f43dbe037020d644248ed9871e06a75f5->leave($__internal_65f61c3d1a184c2ae8d0febb74f38a7f43dbe037020d644248ed9871e06a75f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b53d19e68c0ccad96b64d80a79249242542b2cae8e099e72ce6c416224ecc5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53d19e68c0ccad96b64d80a79249242542b2cae8e099e72ce6c416224ecc5fe->enter($__internal_b53d19e68c0ccad96b64d80a79249242542b2cae8e099e72ce6c416224ecc5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_30a0135195e891dcf502214cb93082a5cc87681932a3a11a054f68e5ddbe10b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a0135195e891dcf502214cb93082a5cc87681932a3a11a054f68e5ddbe10b9->enter($__internal_30a0135195e891dcf502214cb93082a5cc87681932a3a11a054f68e5ddbe10b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_30a0135195e891dcf502214cb93082a5cc87681932a3a11a054f68e5ddbe10b9->leave($__internal_30a0135195e891dcf502214cb93082a5cc87681932a3a11a054f68e5ddbe10b9_prof);

        
        $__internal_b53d19e68c0ccad96b64d80a79249242542b2cae8e099e72ce6c416224ecc5fe->leave($__internal_b53d19e68c0ccad96b64d80a79249242542b2cae8e099e72ce6c416224ecc5fe_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_96208dfe389b2461fc0d3a013da2c80a7846e3be51dfd4bc6008aba3aa741206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96208dfe389b2461fc0d3a013da2c80a7846e3be51dfd4bc6008aba3aa741206->enter($__internal_96208dfe389b2461fc0d3a013da2c80a7846e3be51dfd4bc6008aba3aa741206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_029ab4b89fe62a8798b01a1eb08c3f8c15da746e293034a15167bd21469de860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029ab4b89fe62a8798b01a1eb08c3f8c15da746e293034a15167bd21469de860->enter($__internal_029ab4b89fe62a8798b01a1eb08c3f8c15da746e293034a15167bd21469de860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_029ab4b89fe62a8798b01a1eb08c3f8c15da746e293034a15167bd21469de860->leave($__internal_029ab4b89fe62a8798b01a1eb08c3f8c15da746e293034a15167bd21469de860_prof);

        
        $__internal_96208dfe389b2461fc0d3a013da2c80a7846e3be51dfd4bc6008aba3aa741206->leave($__internal_96208dfe389b2461fc0d3a013da2c80a7846e3be51dfd4bc6008aba3aa741206_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f20757bbdc96583ee0fca0e1932ae2f5eda71b7898689afe29ac1eb80ec06cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20757bbdc96583ee0fca0e1932ae2f5eda71b7898689afe29ac1eb80ec06cd4->enter($__internal_f20757bbdc96583ee0fca0e1932ae2f5eda71b7898689afe29ac1eb80ec06cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_eefededd762830af60b081de869253a0cbe6d1fb9895169685907bb3465260e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefededd762830af60b081de869253a0cbe6d1fb9895169685907bb3465260e1->enter($__internal_eefededd762830af60b081de869253a0cbe6d1fb9895169685907bb3465260e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eefededd762830af60b081de869253a0cbe6d1fb9895169685907bb3465260e1->leave($__internal_eefededd762830af60b081de869253a0cbe6d1fb9895169685907bb3465260e1_prof);

        
        $__internal_f20757bbdc96583ee0fca0e1932ae2f5eda71b7898689afe29ac1eb80ec06cd4->leave($__internal_f20757bbdc96583ee0fca0e1932ae2f5eda71b7898689afe29ac1eb80ec06cd4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
