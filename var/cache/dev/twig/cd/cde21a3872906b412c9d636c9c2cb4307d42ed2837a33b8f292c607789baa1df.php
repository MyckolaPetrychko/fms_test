<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3a2d0253641e6e6c6a77d79e7b24693b81be975c66e39cb336bae7b3c809e14 extends Twig_Template
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
        $__internal_cc10105563ffa0759022883cbc7215858aae8945c686ce322e96c0605c8c920b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc10105563ffa0759022883cbc7215858aae8945c686ce322e96c0605c8c920b->enter($__internal_cc10105563ffa0759022883cbc7215858aae8945c686ce322e96c0605c8c920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3c925f5d64edff1d026f3d133143cebe58ed9617701f72154f7af7c2c8a58109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c925f5d64edff1d026f3d133143cebe58ed9617701f72154f7af7c2c8a58109->enter($__internal_3c925f5d64edff1d026f3d133143cebe58ed9617701f72154f7af7c2c8a58109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cc10105563ffa0759022883cbc7215858aae8945c686ce322e96c0605c8c920b->leave($__internal_cc10105563ffa0759022883cbc7215858aae8945c686ce322e96c0605c8c920b_prof);

        
        $__internal_3c925f5d64edff1d026f3d133143cebe58ed9617701f72154f7af7c2c8a58109->leave($__internal_3c925f5d64edff1d026f3d133143cebe58ed9617701f72154f7af7c2c8a58109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
