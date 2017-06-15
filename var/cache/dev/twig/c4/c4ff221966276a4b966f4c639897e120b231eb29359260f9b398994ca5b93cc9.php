<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c477a836e135cb88cbd875420797abb5a748baa5794fe60e4021da151357093d extends Twig_Template
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
        $__internal_8738ad31f196366eb421b2787babd1f6feecde894c5869f7623f57bf9eaa11b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8738ad31f196366eb421b2787babd1f6feecde894c5869f7623f57bf9eaa11b3->enter($__internal_8738ad31f196366eb421b2787babd1f6feecde894c5869f7623f57bf9eaa11b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_43ac5ef35476361404a8d8f10935f7114195df2dadb4b910460e390aa31dd62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ac5ef35476361404a8d8f10935f7114195df2dadb4b910460e390aa31dd62b->enter($__internal_43ac5ef35476361404a8d8f10935f7114195df2dadb4b910460e390aa31dd62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8738ad31f196366eb421b2787babd1f6feecde894c5869f7623f57bf9eaa11b3->leave($__internal_8738ad31f196366eb421b2787babd1f6feecde894c5869f7623f57bf9eaa11b3_prof);

        
        $__internal_43ac5ef35476361404a8d8f10935f7114195df2dadb4b910460e390aa31dd62b->leave($__internal_43ac5ef35476361404a8d8f10935f7114195df2dadb4b910460e390aa31dd62b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
