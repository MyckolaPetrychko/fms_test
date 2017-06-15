<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_34f7fe0fd5deaff3e0f6dcc896a20eb2952fb3203d6fc3ea8e628f3c855db125 extends Twig_Template
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
        $__internal_8e589a25e71e57a32548e8faab0898f055b30e8b34a0c8ffe24ce0de94d79639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e589a25e71e57a32548e8faab0898f055b30e8b34a0c8ffe24ce0de94d79639->enter($__internal_8e589a25e71e57a32548e8faab0898f055b30e8b34a0c8ffe24ce0de94d79639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ac6e33956d7d844dbc1e35eeb37279e569b36847616da941b249f99cda9d9e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6e33956d7d844dbc1e35eeb37279e569b36847616da941b249f99cda9d9e91->enter($__internal_ac6e33956d7d844dbc1e35eeb37279e569b36847616da941b249f99cda9d9e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8e589a25e71e57a32548e8faab0898f055b30e8b34a0c8ffe24ce0de94d79639->leave($__internal_8e589a25e71e57a32548e8faab0898f055b30e8b34a0c8ffe24ce0de94d79639_prof);

        
        $__internal_ac6e33956d7d844dbc1e35eeb37279e569b36847616da941b249f99cda9d9e91->leave($__internal_ac6e33956d7d844dbc1e35eeb37279e569b36847616da941b249f99cda9d9e91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
