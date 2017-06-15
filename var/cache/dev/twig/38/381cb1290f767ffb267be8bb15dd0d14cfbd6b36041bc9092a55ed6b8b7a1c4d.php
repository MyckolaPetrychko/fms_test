<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2537eb5e88e769e9e9b6c2b18556a444fb49289c380ba9d4eb562b5412566244 extends Twig_Template
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
        $__internal_4428cbbfb24285c7ce477c422c9a1ef09bcc8887c0c8c10ed3029010d31f4fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4428cbbfb24285c7ce477c422c9a1ef09bcc8887c0c8c10ed3029010d31f4fe4->enter($__internal_4428cbbfb24285c7ce477c422c9a1ef09bcc8887c0c8c10ed3029010d31f4fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_88a3f03b606e9dc3404c61d58b9a5ef023b5ccd2e1c5dd83739177701d6bca6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a3f03b606e9dc3404c61d58b9a5ef023b5ccd2e1c5dd83739177701d6bca6a->enter($__internal_88a3f03b606e9dc3404c61d58b9a5ef023b5ccd2e1c5dd83739177701d6bca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4428cbbfb24285c7ce477c422c9a1ef09bcc8887c0c8c10ed3029010d31f4fe4->leave($__internal_4428cbbfb24285c7ce477c422c9a1ef09bcc8887c0c8c10ed3029010d31f4fe4_prof);

        
        $__internal_88a3f03b606e9dc3404c61d58b9a5ef023b5ccd2e1c5dd83739177701d6bca6a->leave($__internal_88a3f03b606e9dc3404c61d58b9a5ef023b5ccd2e1c5dd83739177701d6bca6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
