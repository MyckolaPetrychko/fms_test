<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
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
        $__internal_a3575e78049b00d74ba90863eb716509b95d565fbba2fb6b2a19696e07e1a87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3575e78049b00d74ba90863eb716509b95d565fbba2fb6b2a19696e07e1a87a->enter($__internal_a3575e78049b00d74ba90863eb716509b95d565fbba2fb6b2a19696e07e1a87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4c70c1615ae7a148382380c63b7d66388a1ed5d6b39566c19c70aeebcb06ac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c70c1615ae7a148382380c63b7d66388a1ed5d6b39566c19c70aeebcb06ac98->enter($__internal_4c70c1615ae7a148382380c63b7d66388a1ed5d6b39566c19c70aeebcb06ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a3575e78049b00d74ba90863eb716509b95d565fbba2fb6b2a19696e07e1a87a->leave($__internal_a3575e78049b00d74ba90863eb716509b95d565fbba2fb6b2a19696e07e1a87a_prof);

        
        $__internal_4c70c1615ae7a148382380c63b7d66388a1ed5d6b39566c19c70aeebcb06ac98->leave($__internal_4c70c1615ae7a148382380c63b7d66388a1ed5d6b39566c19c70aeebcb06ac98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
