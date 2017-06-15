<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58263f4e03d50c5cf9878f99efd29918963ed525153142cba9be12fb135021f6 extends Twig_Template
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
        $__internal_a679be4475ed1de49cce2276b406772f1eb57a4f69d392f2001810fe1bf3d262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a679be4475ed1de49cce2276b406772f1eb57a4f69d392f2001810fe1bf3d262->enter($__internal_a679be4475ed1de49cce2276b406772f1eb57a4f69d392f2001810fe1bf3d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d7ce8f9a283576a78f20d82d62909d500a5b49dc774b709dfafe07917b22a110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ce8f9a283576a78f20d82d62909d500a5b49dc774b709dfafe07917b22a110->enter($__internal_d7ce8f9a283576a78f20d82d62909d500a5b49dc774b709dfafe07917b22a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a679be4475ed1de49cce2276b406772f1eb57a4f69d392f2001810fe1bf3d262->leave($__internal_a679be4475ed1de49cce2276b406772f1eb57a4f69d392f2001810fe1bf3d262_prof);

        
        $__internal_d7ce8f9a283576a78f20d82d62909d500a5b49dc774b709dfafe07917b22a110->leave($__internal_d7ce8f9a283576a78f20d82d62909d500a5b49dc774b709dfafe07917b22a110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
