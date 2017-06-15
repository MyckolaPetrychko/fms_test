<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_0cb4cd6f69ce860fc846843955b717a4229e4a44185fa77bd658cf17eec793e6 extends Twig_Template
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
        $__internal_94ffdce5bcb2d48d120d802b5b875845f95054e98f7a36ff519e923edc0b223c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ffdce5bcb2d48d120d802b5b875845f95054e98f7a36ff519e923edc0b223c->enter($__internal_94ffdce5bcb2d48d120d802b5b875845f95054e98f7a36ff519e923edc0b223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_20cf2249a3e7d95b07c2f84d278dc5b94258937d351cc4d936c53ff4d0926749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cf2249a3e7d95b07c2f84d278dc5b94258937d351cc4d936c53ff4d0926749->enter($__internal_20cf2249a3e7d95b07c2f84d278dc5b94258937d351cc4d936c53ff4d0926749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_94ffdce5bcb2d48d120d802b5b875845f95054e98f7a36ff519e923edc0b223c->leave($__internal_94ffdce5bcb2d48d120d802b5b875845f95054e98f7a36ff519e923edc0b223c_prof);

        
        $__internal_20cf2249a3e7d95b07c2f84d278dc5b94258937d351cc4d936c53ff4d0926749->leave($__internal_20cf2249a3e7d95b07c2f84d278dc5b94258937d351cc4d936c53ff4d0926749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/symfony.local.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
