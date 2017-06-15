<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_0c657be1b29e9f6fe99bf553219afaf7eb945661d339e027730556d7b4dc92b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c657be1b29e9f6fe99bf553219afaf7eb945661d339e027730556d7b4dc92b1->enter($__internal_0c657be1b29e9f6fe99bf553219afaf7eb945661d339e027730556d7b4dc92b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_02266e16e764599bfeb8c396e51471e8a009d508e7da3481649fefaab4207f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02266e16e764599bfeb8c396e51471e8a009d508e7da3481649fefaab4207f07->enter($__internal_02266e16e764599bfeb8c396e51471e8a009d508e7da3481649fefaab4207f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0c657be1b29e9f6fe99bf553219afaf7eb945661d339e027730556d7b4dc92b1->leave($__internal_0c657be1b29e9f6fe99bf553219afaf7eb945661d339e027730556d7b4dc92b1_prof);

        
        $__internal_02266e16e764599bfeb8c396e51471e8a009d508e7da3481649fefaab4207f07->leave($__internal_02266e16e764599bfeb8c396e51471e8a009d508e7da3481649fefaab4207f07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
