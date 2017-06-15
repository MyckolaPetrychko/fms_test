<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a7d9be90ac4c8f7d509cb23a6fa258a9771ef4b4acf04a11697610e642bf75d extends Twig_Template
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
        $__internal_ca6f7b7bd54c1d324f7b9122bcec7790d3a429d6f776b3d2ceaf79df148e5bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6f7b7bd54c1d324f7b9122bcec7790d3a429d6f776b3d2ceaf79df148e5bff->enter($__internal_ca6f7b7bd54c1d324f7b9122bcec7790d3a429d6f776b3d2ceaf79df148e5bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a21506d671a7e1f0639a034f24c3c11f90f8948ddf10637205e44573b9db8aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21506d671a7e1f0639a034f24c3c11f90f8948ddf10637205e44573b9db8aed->enter($__internal_a21506d671a7e1f0639a034f24c3c11f90f8948ddf10637205e44573b9db8aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ca6f7b7bd54c1d324f7b9122bcec7790d3a429d6f776b3d2ceaf79df148e5bff->leave($__internal_ca6f7b7bd54c1d324f7b9122bcec7790d3a429d6f776b3d2ceaf79df148e5bff_prof);

        
        $__internal_a21506d671a7e1f0639a034f24c3c11f90f8948ddf10637205e44573b9db8aed->leave($__internal_a21506d671a7e1f0639a034f24c3c11f90f8948ddf10637205e44573b9db8aed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
