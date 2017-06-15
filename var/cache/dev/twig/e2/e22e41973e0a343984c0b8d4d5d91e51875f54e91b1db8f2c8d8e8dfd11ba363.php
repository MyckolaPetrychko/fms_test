<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f999432b5b4aa907a60a17a12299715ff89fc9bf8dd464c798caa48e50b69489 extends Twig_Template
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
        $__internal_a704aab678b9ac2d15cfa748f8c89e518c54a2ef38b83589a6836800452d8398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a704aab678b9ac2d15cfa748f8c89e518c54a2ef38b83589a6836800452d8398->enter($__internal_a704aab678b9ac2d15cfa748f8c89e518c54a2ef38b83589a6836800452d8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cc20a8d3201ba3e0de5f083ae109a3f1bb88be864135a0f426bc03138a92bf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc20a8d3201ba3e0de5f083ae109a3f1bb88be864135a0f426bc03138a92bf66->enter($__internal_cc20a8d3201ba3e0de5f083ae109a3f1bb88be864135a0f426bc03138a92bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a704aab678b9ac2d15cfa748f8c89e518c54a2ef38b83589a6836800452d8398->leave($__internal_a704aab678b9ac2d15cfa748f8c89e518c54a2ef38b83589a6836800452d8398_prof);

        
        $__internal_cc20a8d3201ba3e0de5f083ae109a3f1bb88be864135a0f426bc03138a92bf66->leave($__internal_cc20a8d3201ba3e0de5f083ae109a3f1bb88be864135a0f426bc03138a92bf66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
