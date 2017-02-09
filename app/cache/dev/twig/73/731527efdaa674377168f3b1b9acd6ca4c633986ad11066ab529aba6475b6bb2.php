<?php

/* NBMainBundle::dasboard.html.twig */
class __TwigTemplate_56fda490ae9c8e34e2c10dc0c20d1ec780502cee7f63835310e0bdbae4da8682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::dasboard.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aeb08eb87c95d1489603d98165b3780f42409d19926dd6c6bddd9569e45702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aeb08eb87c95d1489603d98165b3780f42409d19926dd6c6bddd9569e45702d->enter($__internal_4aeb08eb87c95d1489603d98165b3780f42409d19926dd6c6bddd9569e45702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::dasboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aeb08eb87c95d1489603d98165b3780f42409d19926dd6c6bddd9569e45702d->leave($__internal_4aeb08eb87c95d1489603d98165b3780f42409d19926dd6c6bddd9569e45702d_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::dasboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}", "NBMainBundle::dasboard.html.twig", "/var/www/html/Sonef/src/NB/MainBundle/Resources/views/dasboard.html.twig");
    }
}
