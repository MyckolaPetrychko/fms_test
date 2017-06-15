<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d53ac12b3a0d48c7ccbcc34bd04455db5fdd25cc6511349fc8f530a4dd35d94c extends Twig_Template
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
        $__internal_ef49df163cb1dabdf86330898225ed720dbdf1800c05656251e2a9e866c4d61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef49df163cb1dabdf86330898225ed720dbdf1800c05656251e2a9e866c4d61b->enter($__internal_ef49df163cb1dabdf86330898225ed720dbdf1800c05656251e2a9e866c4d61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dd096f831b73fbb064179ea4ff1bb937f7747cd7a6a839450af16f561dc1357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd096f831b73fbb064179ea4ff1bb937f7747cd7a6a839450af16f561dc1357a->enter($__internal_dd096f831b73fbb064179ea4ff1bb937f7747cd7a6a839450af16f561dc1357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ef49df163cb1dabdf86330898225ed720dbdf1800c05656251e2a9e866c4d61b->leave($__internal_ef49df163cb1dabdf86330898225ed720dbdf1800c05656251e2a9e866c4d61b_prof);

        
        $__internal_dd096f831b73fbb064179ea4ff1bb937f7747cd7a6a839450af16f561dc1357a->leave($__internal_dd096f831b73fbb064179ea4ff1bb937f7747cd7a6a839450af16f561dc1357a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
