<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_185ba3fe692def0904203c1c72ec9cdbb468db6c6f9883824b84cab1e9f90b74 extends Twig_Template
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
        $__internal_73b5b64438f1c0f9a2e83cc408b5bd12a1215e11697b027238021430417f3732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b5b64438f1c0f9a2e83cc408b5bd12a1215e11697b027238021430417f3732->enter($__internal_73b5b64438f1c0f9a2e83cc408b5bd12a1215e11697b027238021430417f3732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c716dfdb1b390da5a42aeaf7da28963682298f3d0896702a3ceb5af68fc37f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c716dfdb1b390da5a42aeaf7da28963682298f3d0896702a3ceb5af68fc37f19->enter($__internal_c716dfdb1b390da5a42aeaf7da28963682298f3d0896702a3ceb5af68fc37f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_73b5b64438f1c0f9a2e83cc408b5bd12a1215e11697b027238021430417f3732->leave($__internal_73b5b64438f1c0f9a2e83cc408b5bd12a1215e11697b027238021430417f3732_prof);

        
        $__internal_c716dfdb1b390da5a42aeaf7da28963682298f3d0896702a3ceb5af68fc37f19->leave($__internal_c716dfdb1b390da5a42aeaf7da28963682298f3d0896702a3ceb5af68fc37f19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
