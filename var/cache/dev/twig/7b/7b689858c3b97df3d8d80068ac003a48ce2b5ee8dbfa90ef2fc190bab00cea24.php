<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c6ef73861f95ac5fc02c9f77bdf2e99ece9af1cd98da7fe0a7ee4dda4d34c113 extends Twig_Template
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
        $__internal_dd4ec215365be89306717be7cc6d386c8b5810a84f728e188df1f18d87b2503c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4ec215365be89306717be7cc6d386c8b5810a84f728e188df1f18d87b2503c->enter($__internal_dd4ec215365be89306717be7cc6d386c8b5810a84f728e188df1f18d87b2503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fbbabfc01b7f96c106ade9a2024353d668318e830e0620ec46029aad2c022199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbabfc01b7f96c106ade9a2024353d668318e830e0620ec46029aad2c022199->enter($__internal_fbbabfc01b7f96c106ade9a2024353d668318e830e0620ec46029aad2c022199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dd4ec215365be89306717be7cc6d386c8b5810a84f728e188df1f18d87b2503c->leave($__internal_dd4ec215365be89306717be7cc6d386c8b5810a84f728e188df1f18d87b2503c_prof);

        
        $__internal_fbbabfc01b7f96c106ade9a2024353d668318e830e0620ec46029aad2c022199->leave($__internal_fbbabfc01b7f96c106ade9a2024353d668318e830e0620ec46029aad2c022199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
