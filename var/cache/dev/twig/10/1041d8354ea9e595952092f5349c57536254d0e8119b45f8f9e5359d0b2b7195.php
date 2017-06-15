<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f220b1d96f4976a86ba86ab5207af3bce7503c13f58062f994a602dcf4d07bff extends Twig_Template
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
        $__internal_d4b66c558438fb98e133a0209ce392544d305b1482e2ac702dddef52964cdb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b66c558438fb98e133a0209ce392544d305b1482e2ac702dddef52964cdb4e->enter($__internal_d4b66c558438fb98e133a0209ce392544d305b1482e2ac702dddef52964cdb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d2da394d08e26344f112d58e77b74f826bd7cf14766b705de76230686aa37552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2da394d08e26344f112d58e77b74f826bd7cf14766b705de76230686aa37552->enter($__internal_d2da394d08e26344f112d58e77b74f826bd7cf14766b705de76230686aa37552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d4b66c558438fb98e133a0209ce392544d305b1482e2ac702dddef52964cdb4e->leave($__internal_d4b66c558438fb98e133a0209ce392544d305b1482e2ac702dddef52964cdb4e_prof);

        
        $__internal_d2da394d08e26344f112d58e77b74f826bd7cf14766b705de76230686aa37552->leave($__internal_d2da394d08e26344f112d58e77b74f826bd7cf14766b705de76230686aa37552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
