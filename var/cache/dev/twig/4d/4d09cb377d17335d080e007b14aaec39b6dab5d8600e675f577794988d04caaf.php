<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_32e8e6f7a6d33469d161eeedbde7ba636626c6779a6d6ca1c994a83ccc999393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d1f3fe009c9c2bf1516f691c6df4cce1ca1bede49bc6cd3f18c86d6e68074619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f3fe009c9c2bf1516f691c6df4cce1ca1bede49bc6cd3f18c86d6e68074619->enter($__internal_d1f3fe009c9c2bf1516f691c6df4cce1ca1bede49bc6cd3f18c86d6e68074619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a98874f3d3a354f51a145e4f864bc31c8bd23d0f03bccfb63cfa1fd7333fc680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98874f3d3a354f51a145e4f864bc31c8bd23d0f03bccfb63cfa1fd7333fc680->enter($__internal_a98874f3d3a354f51a145e4f864bc31c8bd23d0f03bccfb63cfa1fd7333fc680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f3fe009c9c2bf1516f691c6df4cce1ca1bede49bc6cd3f18c86d6e68074619->leave($__internal_d1f3fe009c9c2bf1516f691c6df4cce1ca1bede49bc6cd3f18c86d6e68074619_prof);

        
        $__internal_a98874f3d3a354f51a145e4f864bc31c8bd23d0f03bccfb63cfa1fd7333fc680->leave($__internal_a98874f3d3a354f51a145e4f864bc31c8bd23d0f03bccfb63cfa1fd7333fc680_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f584f39a085389d97ae72f677bd67103aa96f067125b436ffb1b31bdf7305e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f584f39a085389d97ae72f677bd67103aa96f067125b436ffb1b31bdf7305e09->enter($__internal_f584f39a085389d97ae72f677bd67103aa96f067125b436ffb1b31bdf7305e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0a5829e45a840626587e8c84e625cd0bbf24ba87aa2e54d7bb2ae7ee12d8cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a5829e45a840626587e8c84e625cd0bbf24ba87aa2e54d7bb2ae7ee12d8cfe->enter($__internal_f0a5829e45a840626587e8c84e625cd0bbf24ba87aa2e54d7bb2ae7ee12d8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f0a5829e45a840626587e8c84e625cd0bbf24ba87aa2e54d7bb2ae7ee12d8cfe->leave($__internal_f0a5829e45a840626587e8c84e625cd0bbf24ba87aa2e54d7bb2ae7ee12d8cfe_prof);

        
        $__internal_f584f39a085389d97ae72f677bd67103aa96f067125b436ffb1b31bdf7305e09->leave($__internal_f584f39a085389d97ae72f677bd67103aa96f067125b436ffb1b31bdf7305e09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/symfony.local.com/public_html/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
