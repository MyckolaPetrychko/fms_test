<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3baad36e09d19897fc58c59cbb744fec00018681ffa218e755a693e7294f1629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_fc00e75dd46ace60e7a451dbbe0eb1bcba8697a6cce23453d8ac70e8d309fe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc00e75dd46ace60e7a451dbbe0eb1bcba8697a6cce23453d8ac70e8d309fe6c->enter($__internal_fc00e75dd46ace60e7a451dbbe0eb1bcba8697a6cce23453d8ac70e8d309fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ac0e371c4c578c0299ccc35d790c13b1b1fbdfc8dd9c810346ecb9f8d462aa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0e371c4c578c0299ccc35d790c13b1b1fbdfc8dd9c810346ecb9f8d462aa5b->enter($__internal_ac0e371c4c578c0299ccc35d790c13b1b1fbdfc8dd9c810346ecb9f8d462aa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc00e75dd46ace60e7a451dbbe0eb1bcba8697a6cce23453d8ac70e8d309fe6c->leave($__internal_fc00e75dd46ace60e7a451dbbe0eb1bcba8697a6cce23453d8ac70e8d309fe6c_prof);

        
        $__internal_ac0e371c4c578c0299ccc35d790c13b1b1fbdfc8dd9c810346ecb9f8d462aa5b->leave($__internal_ac0e371c4c578c0299ccc35d790c13b1b1fbdfc8dd9c810346ecb9f8d462aa5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_424ed7044ef388b3c12e3c407d9b24f87348062cdbd01c9fe06a83de9e758b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424ed7044ef388b3c12e3c407d9b24f87348062cdbd01c9fe06a83de9e758b67->enter($__internal_424ed7044ef388b3c12e3c407d9b24f87348062cdbd01c9fe06a83de9e758b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6f299160d1e22db37ce7fa2ad546def36ae8cafaf6331f7d2aa72a786487e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f299160d1e22db37ce7fa2ad546def36ae8cafaf6331f7d2aa72a786487e99->enter($__internal_c6f299160d1e22db37ce7fa2ad546def36ae8cafaf6331f7d2aa72a786487e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c6f299160d1e22db37ce7fa2ad546def36ae8cafaf6331f7d2aa72a786487e99->leave($__internal_c6f299160d1e22db37ce7fa2ad546def36ae8cafaf6331f7d2aa72a786487e99_prof);

        
        $__internal_424ed7044ef388b3c12e3c407d9b24f87348062cdbd01c9fe06a83de9e758b67->leave($__internal_424ed7044ef388b3c12e3c407d9b24f87348062cdbd01c9fe06a83de9e758b67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
