<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3340ab11ba7500f2d3ab826367a6f4819c97f5bd9c7273a6673e09bcbe29988e extends Twig_Template
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
        $__internal_87ab5d911d33d77fd9fb477ae92e592090daacc47e5d04fae035196676b632f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ab5d911d33d77fd9fb477ae92e592090daacc47e5d04fae035196676b632f9->enter($__internal_87ab5d911d33d77fd9fb477ae92e592090daacc47e5d04fae035196676b632f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_409563e174d51182911ec1868b353322e49860e3c17b0741a73762826101a704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409563e174d51182911ec1868b353322e49860e3c17b0741a73762826101a704->enter($__internal_409563e174d51182911ec1868b353322e49860e3c17b0741a73762826101a704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_87ab5d911d33d77fd9fb477ae92e592090daacc47e5d04fae035196676b632f9->leave($__internal_87ab5d911d33d77fd9fb477ae92e592090daacc47e5d04fae035196676b632f9_prof);

        
        $__internal_409563e174d51182911ec1868b353322e49860e3c17b0741a73762826101a704->leave($__internal_409563e174d51182911ec1868b353322e49860e3c17b0741a73762826101a704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
