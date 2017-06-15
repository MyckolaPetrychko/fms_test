<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7ef40cafac11eebbaff44ffdebc8c7252561b620626b78935f0799281b17a71 extends Twig_Template
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
        $__internal_d166a6955dc891b642837b0ce6002a9bcec33a99ec41833bc66ccb37cae477e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d166a6955dc891b642837b0ce6002a9bcec33a99ec41833bc66ccb37cae477e4->enter($__internal_d166a6955dc891b642837b0ce6002a9bcec33a99ec41833bc66ccb37cae477e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_19f519aa5eb55fd7c749b94ccf95c87343c52c43fda8559450dd0c5f5084e595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f519aa5eb55fd7c749b94ccf95c87343c52c43fda8559450dd0c5f5084e595->enter($__internal_19f519aa5eb55fd7c749b94ccf95c87343c52c43fda8559450dd0c5f5084e595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d166a6955dc891b642837b0ce6002a9bcec33a99ec41833bc66ccb37cae477e4->leave($__internal_d166a6955dc891b642837b0ce6002a9bcec33a99ec41833bc66ccb37cae477e4_prof);

        
        $__internal_19f519aa5eb55fd7c749b94ccf95c87343c52c43fda8559450dd0c5f5084e595->leave($__internal_19f519aa5eb55fd7c749b94ccf95c87343c52c43fda8559450dd0c5f5084e595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
