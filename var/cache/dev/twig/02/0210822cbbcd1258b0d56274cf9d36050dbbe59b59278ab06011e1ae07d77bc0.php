<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_84e585cbef8028d7eea6b9840978363163df63b989c44136df256fb7cadea5bc extends Twig_Template
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
        $__internal_c506c4e89fb4ea1204f09e438ed52b83ed90f830cb2cc5290f82dff1dca8b05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c506c4e89fb4ea1204f09e438ed52b83ed90f830cb2cc5290f82dff1dca8b05f->enter($__internal_c506c4e89fb4ea1204f09e438ed52b83ed90f830cb2cc5290f82dff1dca8b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_31cee52ca85409f2f0d1caf44508d994a81172ce3f083cc3cbab2468ed427e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cee52ca85409f2f0d1caf44508d994a81172ce3f083cc3cbab2468ed427e75->enter($__internal_31cee52ca85409f2f0d1caf44508d994a81172ce3f083cc3cbab2468ed427e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c506c4e89fb4ea1204f09e438ed52b83ed90f830cb2cc5290f82dff1dca8b05f->leave($__internal_c506c4e89fb4ea1204f09e438ed52b83ed90f830cb2cc5290f82dff1dca8b05f_prof);

        
        $__internal_31cee52ca85409f2f0d1caf44508d994a81172ce3f083cc3cbab2468ed427e75->leave($__internal_31cee52ca85409f2f0d1caf44508d994a81172ce3f083cc3cbab2468ed427e75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
