<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4c5e398cf32ecdcd0d964c7b0985dafb1ca5328db16ef1aeea780a91cafd3d49 extends Twig_Template
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
        $__internal_c1cb9e48329342794788c35b4473acee0792d12349c0536be1f56930110d0e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cb9e48329342794788c35b4473acee0792d12349c0536be1f56930110d0e59->enter($__internal_c1cb9e48329342794788c35b4473acee0792d12349c0536be1f56930110d0e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3a8f317c69779d10e4e0d16a479c80aba338a4380b458de7b48e457a7ac52f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8f317c69779d10e4e0d16a479c80aba338a4380b458de7b48e457a7ac52f15->enter($__internal_3a8f317c69779d10e4e0d16a479c80aba338a4380b458de7b48e457a7ac52f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c1cb9e48329342794788c35b4473acee0792d12349c0536be1f56930110d0e59->leave($__internal_c1cb9e48329342794788c35b4473acee0792d12349c0536be1f56930110d0e59_prof);

        
        $__internal_3a8f317c69779d10e4e0d16a479c80aba338a4380b458de7b48e457a7ac52f15->leave($__internal_3a8f317c69779d10e4e0d16a479c80aba338a4380b458de7b48e457a7ac52f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
