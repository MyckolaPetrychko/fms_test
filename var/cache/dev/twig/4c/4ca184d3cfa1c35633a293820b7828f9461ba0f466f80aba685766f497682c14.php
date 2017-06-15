<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bc9dfcc7b73f6cfb25b1b75f863bd30c0a3fadc8be94f03dd51dad63ab97b5b7 extends Twig_Template
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
        $__internal_19b2419aabc8cd8390ce3a388d1df0d3c5193bcf320b081be870605d840034a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b2419aabc8cd8390ce3a388d1df0d3c5193bcf320b081be870605d840034a5->enter($__internal_19b2419aabc8cd8390ce3a388d1df0d3c5193bcf320b081be870605d840034a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_253021b418432fa4ce1aaba5cd010adb1c373e03809af46ae82ecd55996b14b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253021b418432fa4ce1aaba5cd010adb1c373e03809af46ae82ecd55996b14b8->enter($__internal_253021b418432fa4ce1aaba5cd010adb1c373e03809af46ae82ecd55996b14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_19b2419aabc8cd8390ce3a388d1df0d3c5193bcf320b081be870605d840034a5->leave($__internal_19b2419aabc8cd8390ce3a388d1df0d3c5193bcf320b081be870605d840034a5_prof);

        
        $__internal_253021b418432fa4ce1aaba5cd010adb1c373e03809af46ae82ecd55996b14b8->leave($__internal_253021b418432fa4ce1aaba5cd010adb1c373e03809af46ae82ecd55996b14b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
