<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_debf8e5bb5a67a2d92a0b7c68a933f6c2f24df9bd80aab9b6cb86f8f65f4bfd9 extends Twig_Template
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
        $__internal_59a8f5ad42f534e649789c5f5e0bdaef17585d6e6888dc700d4ed04f1491ffb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a8f5ad42f534e649789c5f5e0bdaef17585d6e6888dc700d4ed04f1491ffb7->enter($__internal_59a8f5ad42f534e649789c5f5e0bdaef17585d6e6888dc700d4ed04f1491ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4f3ca9c8d3d530531c6fb636fbd7bbe2da4bd3e642976a441029eecfd10e0cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3ca9c8d3d530531c6fb636fbd7bbe2da4bd3e642976a441029eecfd10e0cf2->enter($__internal_4f3ca9c8d3d530531c6fb636fbd7bbe2da4bd3e642976a441029eecfd10e0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_59a8f5ad42f534e649789c5f5e0bdaef17585d6e6888dc700d4ed04f1491ffb7->leave($__internal_59a8f5ad42f534e649789c5f5e0bdaef17585d6e6888dc700d4ed04f1491ffb7_prof);

        
        $__internal_4f3ca9c8d3d530531c6fb636fbd7bbe2da4bd3e642976a441029eecfd10e0cf2->leave($__internal_4f3ca9c8d3d530531c6fb636fbd7bbe2da4bd3e642976a441029eecfd10e0cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
