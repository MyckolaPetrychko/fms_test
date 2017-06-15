<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_70b0f8010ad22ce4ab976f5661a1aeb9d22f01fb58d3c3a1ed4e6596af693a10 extends Twig_Template
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
        $__internal_ce2895dd0f29a998a645bd62ecd30a624058d29c2d8d9116209c170878fa8154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2895dd0f29a998a645bd62ecd30a624058d29c2d8d9116209c170878fa8154->enter($__internal_ce2895dd0f29a998a645bd62ecd30a624058d29c2d8d9116209c170878fa8154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1aab3cc2dc96c12a195d1230428943b3dcbef1d41bfbfeedcfcacf9797b224af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aab3cc2dc96c12a195d1230428943b3dcbef1d41bfbfeedcfcacf9797b224af->enter($__internal_1aab3cc2dc96c12a195d1230428943b3dcbef1d41bfbfeedcfcacf9797b224af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ce2895dd0f29a998a645bd62ecd30a624058d29c2d8d9116209c170878fa8154->leave($__internal_ce2895dd0f29a998a645bd62ecd30a624058d29c2d8d9116209c170878fa8154_prof);

        
        $__internal_1aab3cc2dc96c12a195d1230428943b3dcbef1d41bfbfeedcfcacf9797b224af->leave($__internal_1aab3cc2dc96c12a195d1230428943b3dcbef1d41bfbfeedcfcacf9797b224af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
