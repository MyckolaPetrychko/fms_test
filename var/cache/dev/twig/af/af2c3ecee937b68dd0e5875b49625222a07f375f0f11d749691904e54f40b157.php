<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cafe743c7842cc2cac3000572289a6daadb839517865a736ef43ea1d86432af extends Twig_Template
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
        $__internal_57eeb526d773fb2b9a9be8ca437518e66171867fadbcc289a44646e2e409d067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57eeb526d773fb2b9a9be8ca437518e66171867fadbcc289a44646e2e409d067->enter($__internal_57eeb526d773fb2b9a9be8ca437518e66171867fadbcc289a44646e2e409d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2777904275772d334daca117f2f42c5be39c95dbaa649ad22f3b6bc5905899a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2777904275772d334daca117f2f42c5be39c95dbaa649ad22f3b6bc5905899a2->enter($__internal_2777904275772d334daca117f2f42c5be39c95dbaa649ad22f3b6bc5905899a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_57eeb526d773fb2b9a9be8ca437518e66171867fadbcc289a44646e2e409d067->leave($__internal_57eeb526d773fb2b9a9be8ca437518e66171867fadbcc289a44646e2e409d067_prof);

        
        $__internal_2777904275772d334daca117f2f42c5be39c95dbaa649ad22f3b6bc5905899a2->leave($__internal_2777904275772d334daca117f2f42c5be39c95dbaa649ad22f3b6bc5905899a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
