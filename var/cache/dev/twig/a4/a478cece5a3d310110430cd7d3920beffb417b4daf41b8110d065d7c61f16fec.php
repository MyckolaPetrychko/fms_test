<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_61aeb43e60dfda1459470934c7479e104b979a5aa68c811ddf8cbb040e10a06d extends Twig_Template
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
        $__internal_cfa598bd1bf780ff1da14033bc00085bbd702b4a6ea72484061daa18199d6c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa598bd1bf780ff1da14033bc00085bbd702b4a6ea72484061daa18199d6c6d->enter($__internal_cfa598bd1bf780ff1da14033bc00085bbd702b4a6ea72484061daa18199d6c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0be8c6615b68e1f4d7dea8b91796f185e37df3dd296de97b9f6bb6d2764871cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be8c6615b68e1f4d7dea8b91796f185e37df3dd296de97b9f6bb6d2764871cc->enter($__internal_0be8c6615b68e1f4d7dea8b91796f185e37df3dd296de97b9f6bb6d2764871cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cfa598bd1bf780ff1da14033bc00085bbd702b4a6ea72484061daa18199d6c6d->leave($__internal_cfa598bd1bf780ff1da14033bc00085bbd702b4a6ea72484061daa18199d6c6d_prof);

        
        $__internal_0be8c6615b68e1f4d7dea8b91796f185e37df3dd296de97b9f6bb6d2764871cc->leave($__internal_0be8c6615b68e1f4d7dea8b91796f185e37df3dd296de97b9f6bb6d2764871cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
