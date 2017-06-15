<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2c4b10a48cc4dfde66f2fb516f9527ea093d840376ae78f19adac503c82b6ba extends Twig_Template
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
        $__internal_b7757cc40180f5d830502461bd2239b6314b6ed7e31f725e73677af65996d467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7757cc40180f5d830502461bd2239b6314b6ed7e31f725e73677af65996d467->enter($__internal_b7757cc40180f5d830502461bd2239b6314b6ed7e31f725e73677af65996d467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e86bf3f57d80cbed1e611b446c0a02b6c4265e372ec4ea2f072a9dcd522ebdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86bf3f57d80cbed1e611b446c0a02b6c4265e372ec4ea2f072a9dcd522ebdd0->enter($__internal_e86bf3f57d80cbed1e611b446c0a02b6c4265e372ec4ea2f072a9dcd522ebdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b7757cc40180f5d830502461bd2239b6314b6ed7e31f725e73677af65996d467->leave($__internal_b7757cc40180f5d830502461bd2239b6314b6ed7e31f725e73677af65996d467_prof);

        
        $__internal_e86bf3f57d80cbed1e611b446c0a02b6c4265e372ec4ea2f072a9dcd522ebdd0->leave($__internal_e86bf3f57d80cbed1e611b446c0a02b6c4265e372ec4ea2f072a9dcd522ebdd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
