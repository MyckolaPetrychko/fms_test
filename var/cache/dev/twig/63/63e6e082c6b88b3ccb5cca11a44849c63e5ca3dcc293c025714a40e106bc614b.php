<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c0bf4be0290bf58343fcf6e7d9901b2c5d567e9db02e78c01213c99f4fcea67 extends Twig_Template
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
        $__internal_4f46857e9ef57ee80742c46519d8635f56a5df012b68c37ebd88bdbff61ac9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f46857e9ef57ee80742c46519d8635f56a5df012b68c37ebd88bdbff61ac9e7->enter($__internal_4f46857e9ef57ee80742c46519d8635f56a5df012b68c37ebd88bdbff61ac9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dc012a5311ef6ae2282febd762f8a097fd86598a89f3aedb73b51ebf57c116be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc012a5311ef6ae2282febd762f8a097fd86598a89f3aedb73b51ebf57c116be->enter($__internal_dc012a5311ef6ae2282febd762f8a097fd86598a89f3aedb73b51ebf57c116be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f46857e9ef57ee80742c46519d8635f56a5df012b68c37ebd88bdbff61ac9e7->leave($__internal_4f46857e9ef57ee80742c46519d8635f56a5df012b68c37ebd88bdbff61ac9e7_prof);

        
        $__internal_dc012a5311ef6ae2282febd762f8a097fd86598a89f3aedb73b51ebf57c116be->leave($__internal_dc012a5311ef6ae2282febd762f8a097fd86598a89f3aedb73b51ebf57c116be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
