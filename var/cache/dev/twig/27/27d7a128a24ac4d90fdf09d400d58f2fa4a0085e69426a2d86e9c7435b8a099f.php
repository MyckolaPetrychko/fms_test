<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5575cdd5d06694f81fa439b8967ded2ef5bba1db65288cf36c22a9486f9f8687 extends Twig_Template
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
        $__internal_4a0d7e1933837f5d0ee737a2b2cf3659ed37e265106f3959b94aa53008433306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0d7e1933837f5d0ee737a2b2cf3659ed37e265106f3959b94aa53008433306->enter($__internal_4a0d7e1933837f5d0ee737a2b2cf3659ed37e265106f3959b94aa53008433306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5f6b1e08012241cad600718f1dbd81837696cb878720566968b9c8edaf4b3dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6b1e08012241cad600718f1dbd81837696cb878720566968b9c8edaf4b3dbb->enter($__internal_5f6b1e08012241cad600718f1dbd81837696cb878720566968b9c8edaf4b3dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4a0d7e1933837f5d0ee737a2b2cf3659ed37e265106f3959b94aa53008433306->leave($__internal_4a0d7e1933837f5d0ee737a2b2cf3659ed37e265106f3959b94aa53008433306_prof);

        
        $__internal_5f6b1e08012241cad600718f1dbd81837696cb878720566968b9c8edaf4b3dbb->leave($__internal_5f6b1e08012241cad600718f1dbd81837696cb878720566968b9c8edaf4b3dbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
