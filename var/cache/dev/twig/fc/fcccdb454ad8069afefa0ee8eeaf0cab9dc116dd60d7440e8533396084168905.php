<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_670cefa3dfdad895f57e5b247d48d54d5de97b886ea64bf5ba717e302973ea0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670cefa3dfdad895f57e5b247d48d54d5de97b886ea64bf5ba717e302973ea0b->enter($__internal_670cefa3dfdad895f57e5b247d48d54d5de97b886ea64bf5ba717e302973ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_459820eef61734d657e795c5c146618135097c32fca15cef71769acc7b4eb41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459820eef61734d657e795c5c146618135097c32fca15cef71769acc7b4eb41f->enter($__internal_459820eef61734d657e795c5c146618135097c32fca15cef71769acc7b4eb41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_670cefa3dfdad895f57e5b247d48d54d5de97b886ea64bf5ba717e302973ea0b->leave($__internal_670cefa3dfdad895f57e5b247d48d54d5de97b886ea64bf5ba717e302973ea0b_prof);

        
        $__internal_459820eef61734d657e795c5c146618135097c32fca15cef71769acc7b4eb41f->leave($__internal_459820eef61734d657e795c5c146618135097c32fca15cef71769acc7b4eb41f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
