<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba35e73652e32c7bf0f6e4cc515d8e1f08248792af9fb890c686763cec2f3b25 extends Twig_Template
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
        $__internal_bd0829ce27aa3e9195c2a1bd736cdbcea046cb5bc72224e3269a9e2e37d126a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0829ce27aa3e9195c2a1bd736cdbcea046cb5bc72224e3269a9e2e37d126a5->enter($__internal_bd0829ce27aa3e9195c2a1bd736cdbcea046cb5bc72224e3269a9e2e37d126a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e22b6ee92bd558bf7186519f277f22af1afb4414b3be002e20319b521e859c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b6ee92bd558bf7186519f277f22af1afb4414b3be002e20319b521e859c97->enter($__internal_e22b6ee92bd558bf7186519f277f22af1afb4414b3be002e20319b521e859c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bd0829ce27aa3e9195c2a1bd736cdbcea046cb5bc72224e3269a9e2e37d126a5->leave($__internal_bd0829ce27aa3e9195c2a1bd736cdbcea046cb5bc72224e3269a9e2e37d126a5_prof);

        
        $__internal_e22b6ee92bd558bf7186519f277f22af1afb4414b3be002e20319b521e859c97->leave($__internal_e22b6ee92bd558bf7186519f277f22af1afb4414b3be002e20319b521e859c97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
