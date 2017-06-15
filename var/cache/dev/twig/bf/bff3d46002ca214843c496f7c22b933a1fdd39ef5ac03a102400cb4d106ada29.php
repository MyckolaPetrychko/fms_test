<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d53efc76f6c8fbd8360fdf060ae33c49b2a41285a12e4d39e71494e6af250a6 extends Twig_Template
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
        $__internal_f1054e86dd66a412690b06c6440c94921e50217f5f0d0982c6ad1c1c01826709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1054e86dd66a412690b06c6440c94921e50217f5f0d0982c6ad1c1c01826709->enter($__internal_f1054e86dd66a412690b06c6440c94921e50217f5f0d0982c6ad1c1c01826709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ec4c29e9df0cb9eef1bf36ffdd3a67a8cb0b13cb62c7db47d4d58d53a8fa1576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4c29e9df0cb9eef1bf36ffdd3a67a8cb0b13cb62c7db47d4d58d53a8fa1576->enter($__internal_ec4c29e9df0cb9eef1bf36ffdd3a67a8cb0b13cb62c7db47d4d58d53a8fa1576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f1054e86dd66a412690b06c6440c94921e50217f5f0d0982c6ad1c1c01826709->leave($__internal_f1054e86dd66a412690b06c6440c94921e50217f5f0d0982c6ad1c1c01826709_prof);

        
        $__internal_ec4c29e9df0cb9eef1bf36ffdd3a67a8cb0b13cb62c7db47d4d58d53a8fa1576->leave($__internal_ec4c29e9df0cb9eef1bf36ffdd3a67a8cb0b13cb62c7db47d4d58d53a8fa1576_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
