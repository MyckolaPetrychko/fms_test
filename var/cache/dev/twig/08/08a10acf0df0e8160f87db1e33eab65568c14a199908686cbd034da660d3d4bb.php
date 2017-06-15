<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0fbff5b886f18f5639f1b885e89da12b11f6a82cc2da60cb53764eb916eb2fb4 extends Twig_Template
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
        $__internal_c97fdfdd814f013b974c382d6777f4ae04537b25d43026c8c17ef904843f0ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97fdfdd814f013b974c382d6777f4ae04537b25d43026c8c17ef904843f0ab5->enter($__internal_c97fdfdd814f013b974c382d6777f4ae04537b25d43026c8c17ef904843f0ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cc1dbb0530e4602d491e5f72bdeed7130b9b5d52d7045253910c4b5b4acf427e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1dbb0530e4602d491e5f72bdeed7130b9b5d52d7045253910c4b5b4acf427e->enter($__internal_cc1dbb0530e4602d491e5f72bdeed7130b9b5d52d7045253910c4b5b4acf427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c97fdfdd814f013b974c382d6777f4ae04537b25d43026c8c17ef904843f0ab5->leave($__internal_c97fdfdd814f013b974c382d6777f4ae04537b25d43026c8c17ef904843f0ab5_prof);

        
        $__internal_cc1dbb0530e4602d491e5f72bdeed7130b9b5d52d7045253910c4b5b4acf427e->leave($__internal_cc1dbb0530e4602d491e5f72bdeed7130b9b5d52d7045253910c4b5b4acf427e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
