<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_e07973ea2f72597769d13e9f3564aa00a89cb3e60871f85d34981e506fb76694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07973ea2f72597769d13e9f3564aa00a89cb3e60871f85d34981e506fb76694->enter($__internal_e07973ea2f72597769d13e9f3564aa00a89cb3e60871f85d34981e506fb76694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8ac482bb782f5a291591a7f43cc263d05f942b074ce559b4238722ac45ed2304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac482bb782f5a291591a7f43cc263d05f942b074ce559b4238722ac45ed2304->enter($__internal_8ac482bb782f5a291591a7f43cc263d05f942b074ce559b4238722ac45ed2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e07973ea2f72597769d13e9f3564aa00a89cb3e60871f85d34981e506fb76694->leave($__internal_e07973ea2f72597769d13e9f3564aa00a89cb3e60871f85d34981e506fb76694_prof);

        
        $__internal_8ac482bb782f5a291591a7f43cc263d05f942b074ce559b4238722ac45ed2304->leave($__internal_8ac482bb782f5a291591a7f43cc263d05f942b074ce559b4238722ac45ed2304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
