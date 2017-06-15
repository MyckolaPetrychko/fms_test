<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f307ff16ab6df60139c79bef12fd31483cc1ea795768f99f1977fc25af3de40 extends Twig_Template
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
        $__internal_726df601b92586245cc648fe201522dc706eeffb09d171a34fad620d98906b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726df601b92586245cc648fe201522dc706eeffb09d171a34fad620d98906b93->enter($__internal_726df601b92586245cc648fe201522dc706eeffb09d171a34fad620d98906b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5a23ef42ba35052bc95968fe92384427c102e9a4fcae8fe9612c689f56beadfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a23ef42ba35052bc95968fe92384427c102e9a4fcae8fe9612c689f56beadfd->enter($__internal_5a23ef42ba35052bc95968fe92384427c102e9a4fcae8fe9612c689f56beadfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_726df601b92586245cc648fe201522dc706eeffb09d171a34fad620d98906b93->leave($__internal_726df601b92586245cc648fe201522dc706eeffb09d171a34fad620d98906b93_prof);

        
        $__internal_5a23ef42ba35052bc95968fe92384427c102e9a4fcae8fe9612c689f56beadfd->leave($__internal_5a23ef42ba35052bc95968fe92384427c102e9a4fcae8fe9612c689f56beadfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
