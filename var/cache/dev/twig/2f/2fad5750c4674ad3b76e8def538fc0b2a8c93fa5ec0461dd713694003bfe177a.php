<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7a02132bc5059f611e066abc0e8b3d9e5f50f0aa4bfcdb4d656d9fe20ae81146 extends Twig_Template
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
        $__internal_26a987d669cc65cac5e94ca1aed6c4fca9509d9ae6df7be4eeb7c2c2e0d58cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a987d669cc65cac5e94ca1aed6c4fca9509d9ae6df7be4eeb7c2c2e0d58cc2->enter($__internal_26a987d669cc65cac5e94ca1aed6c4fca9509d9ae6df7be4eeb7c2c2e0d58cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1753fea37b311df2c7a14f5091816c9e5b54269698be8c456c24ff390af9c8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1753fea37b311df2c7a14f5091816c9e5b54269698be8c456c24ff390af9c8d0->enter($__internal_1753fea37b311df2c7a14f5091816c9e5b54269698be8c456c24ff390af9c8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_26a987d669cc65cac5e94ca1aed6c4fca9509d9ae6df7be4eeb7c2c2e0d58cc2->leave($__internal_26a987d669cc65cac5e94ca1aed6c4fca9509d9ae6df7be4eeb7c2c2e0d58cc2_prof);

        
        $__internal_1753fea37b311df2c7a14f5091816c9e5b54269698be8c456c24ff390af9c8d0->leave($__internal_1753fea37b311df2c7a14f5091816c9e5b54269698be8c456c24ff390af9c8d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
