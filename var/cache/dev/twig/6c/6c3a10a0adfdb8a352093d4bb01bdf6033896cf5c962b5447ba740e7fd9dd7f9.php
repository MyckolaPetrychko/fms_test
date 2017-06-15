<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_681119f560756d0910b80b0ed4c59c2aac9518ee3f404aa92ab2a8759637c574 extends Twig_Template
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
        $__internal_8883dda0a7d412e8561ccaf774018ccc7556b299ce3a19d67d7b5b9705d30a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8883dda0a7d412e8561ccaf774018ccc7556b299ce3a19d67d7b5b9705d30a3d->enter($__internal_8883dda0a7d412e8561ccaf774018ccc7556b299ce3a19d67d7b5b9705d30a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ad6f3aaaf0a7e6cafef62b752bc296aa6df812dd88d6ee8bfc52bb07976cd1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6f3aaaf0a7e6cafef62b752bc296aa6df812dd88d6ee8bfc52bb07976cd1ca->enter($__internal_ad6f3aaaf0a7e6cafef62b752bc296aa6df812dd88d6ee8bfc52bb07976cd1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8883dda0a7d412e8561ccaf774018ccc7556b299ce3a19d67d7b5b9705d30a3d->leave($__internal_8883dda0a7d412e8561ccaf774018ccc7556b299ce3a19d67d7b5b9705d30a3d_prof);

        
        $__internal_ad6f3aaaf0a7e6cafef62b752bc296aa6df812dd88d6ee8bfc52bb07976cd1ca->leave($__internal_ad6f3aaaf0a7e6cafef62b752bc296aa6df812dd88d6ee8bfc52bb07976cd1ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
