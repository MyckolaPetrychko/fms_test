<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_594a2b01a8d79d1af45323d71bdf4776936e0432c244ceb0a77c29ff73d7f147 extends Twig_Template
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
        $__internal_3334318785cc6cc028edd7a0414e6a04a3cf34db444f3be30e55a5c55b23e54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3334318785cc6cc028edd7a0414e6a04a3cf34db444f3be30e55a5c55b23e54b->enter($__internal_3334318785cc6cc028edd7a0414e6a04a3cf34db444f3be30e55a5c55b23e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_40a4df9960530cfdc6d7a1369fc490b5c85b8a1ee16448897e6c6dc47a39aa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a4df9960530cfdc6d7a1369fc490b5c85b8a1ee16448897e6c6dc47a39aa76->enter($__internal_40a4df9960530cfdc6d7a1369fc490b5c85b8a1ee16448897e6c6dc47a39aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3334318785cc6cc028edd7a0414e6a04a3cf34db444f3be30e55a5c55b23e54b->leave($__internal_3334318785cc6cc028edd7a0414e6a04a3cf34db444f3be30e55a5c55b23e54b_prof);

        
        $__internal_40a4df9960530cfdc6d7a1369fc490b5c85b8a1ee16448897e6c6dc47a39aa76->leave($__internal_40a4df9960530cfdc6d7a1369fc490b5c85b8a1ee16448897e6c6dc47a39aa76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
