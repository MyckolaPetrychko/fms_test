<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54f4973d01f36e3e963d368d93381514bd75e2db335afd9db7518c716209a59a extends Twig_Template
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
        $__internal_099e118b37588a0091192a6fc743c7ee3ce1781b40df7031984a055c5b8969ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099e118b37588a0091192a6fc743c7ee3ce1781b40df7031984a055c5b8969ae->enter($__internal_099e118b37588a0091192a6fc743c7ee3ce1781b40df7031984a055c5b8969ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9e8b2e1675f92ef3fb734cae588361e802640a1918d6df84d700d4c8ad6e134b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8b2e1675f92ef3fb734cae588361e802640a1918d6df84d700d4c8ad6e134b->enter($__internal_9e8b2e1675f92ef3fb734cae588361e802640a1918d6df84d700d4c8ad6e134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_099e118b37588a0091192a6fc743c7ee3ce1781b40df7031984a055c5b8969ae->leave($__internal_099e118b37588a0091192a6fc743c7ee3ce1781b40df7031984a055c5b8969ae_prof);

        
        $__internal_9e8b2e1675f92ef3fb734cae588361e802640a1918d6df84d700d4c8ad6e134b->leave($__internal_9e8b2e1675f92ef3fb734cae588361e802640a1918d6df84d700d4c8ad6e134b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
