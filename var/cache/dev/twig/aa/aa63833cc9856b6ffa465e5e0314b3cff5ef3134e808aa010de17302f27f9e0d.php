<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7666449e8d2572653fa85930b119b191eadbf9b4ee08e9a7f913d69caee39022 extends Twig_Template
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
        $__internal_e389126dc4132e717807a0d2f56bf29b9203bd8643e5f60fe97db21c699b67e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e389126dc4132e717807a0d2f56bf29b9203bd8643e5f60fe97db21c699b67e2->enter($__internal_e389126dc4132e717807a0d2f56bf29b9203bd8643e5f60fe97db21c699b67e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_888232e01db0fe4c4914ec2af37e84e260fd8b0135aaa867a9fe118995986358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888232e01db0fe4c4914ec2af37e84e260fd8b0135aaa867a9fe118995986358->enter($__internal_888232e01db0fe4c4914ec2af37e84e260fd8b0135aaa867a9fe118995986358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e389126dc4132e717807a0d2f56bf29b9203bd8643e5f60fe97db21c699b67e2->leave($__internal_e389126dc4132e717807a0d2f56bf29b9203bd8643e5f60fe97db21c699b67e2_prof);

        
        $__internal_888232e01db0fe4c4914ec2af37e84e260fd8b0135aaa867a9fe118995986358->leave($__internal_888232e01db0fe4c4914ec2af37e84e260fd8b0135aaa867a9fe118995986358_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
