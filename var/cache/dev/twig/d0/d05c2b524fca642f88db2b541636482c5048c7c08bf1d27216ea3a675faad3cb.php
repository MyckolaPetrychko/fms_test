<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_256effdaa7b675172da42e74be9318a9e8674b614d11c9998742dc2b70e24f9c extends Twig_Template
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
        $__internal_bd396c3059ae16bd6c2300e90c933906bad5f2bd9c06247cf4b030c20611c9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd396c3059ae16bd6c2300e90c933906bad5f2bd9c06247cf4b030c20611c9b3->enter($__internal_bd396c3059ae16bd6c2300e90c933906bad5f2bd9c06247cf4b030c20611c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1a561128744c9a2ac6600f94cd91d51030a8a59f487db223ebea4cace8031c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a561128744c9a2ac6600f94cd91d51030a8a59f487db223ebea4cace8031c54->enter($__internal_1a561128744c9a2ac6600f94cd91d51030a8a59f487db223ebea4cace8031c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bd396c3059ae16bd6c2300e90c933906bad5f2bd9c06247cf4b030c20611c9b3->leave($__internal_bd396c3059ae16bd6c2300e90c933906bad5f2bd9c06247cf4b030c20611c9b3_prof);

        
        $__internal_1a561128744c9a2ac6600f94cd91d51030a8a59f487db223ebea4cace8031c54->leave($__internal_1a561128744c9a2ac6600f94cd91d51030a8a59f487db223ebea4cace8031c54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
