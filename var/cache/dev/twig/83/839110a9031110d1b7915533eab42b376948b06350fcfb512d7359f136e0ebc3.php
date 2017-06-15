<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a0986d5bf5598ade5a5a6c4687dc086a0057bb31dd1865929869549ff5d4b0d extends Twig_Template
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
        $__internal_0c6a13b2a8caedc93b1d15727b89bbc260c1add0cd168b1e7a6957351cf2af9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6a13b2a8caedc93b1d15727b89bbc260c1add0cd168b1e7a6957351cf2af9f->enter($__internal_0c6a13b2a8caedc93b1d15727b89bbc260c1add0cd168b1e7a6957351cf2af9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1c142fdcdb1c9ab2deb1725e1e41951a395f4e4f183834cf254362fae83902d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c142fdcdb1c9ab2deb1725e1e41951a395f4e4f183834cf254362fae83902d3->enter($__internal_1c142fdcdb1c9ab2deb1725e1e41951a395f4e4f183834cf254362fae83902d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0c6a13b2a8caedc93b1d15727b89bbc260c1add0cd168b1e7a6957351cf2af9f->leave($__internal_0c6a13b2a8caedc93b1d15727b89bbc260c1add0cd168b1e7a6957351cf2af9f_prof);

        
        $__internal_1c142fdcdb1c9ab2deb1725e1e41951a395f4e4f183834cf254362fae83902d3->leave($__internal_1c142fdcdb1c9ab2deb1725e1e41951a395f4e4f183834cf254362fae83902d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
