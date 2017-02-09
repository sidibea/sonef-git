<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3811883eaa431e85f9cc100178889005ae3114aac178d12fb5182c76618f7d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1529cb4cef042640fdad55a7e269f814225fbdc920d16f1ceed32126e9eedc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1529cb4cef042640fdad55a7e269f814225fbdc920d16f1ceed32126e9eedc3->enter($__internal_b1529cb4cef042640fdad55a7e269f814225fbdc920d16f1ceed32126e9eedc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1529cb4cef042640fdad55a7e269f814225fbdc920d16f1ceed32126e9eedc3->leave($__internal_b1529cb4cef042640fdad55a7e269f814225fbdc920d16f1ceed32126e9eedc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e62030d07515ac3c36be7626e45a39e6a72cdc3f182647854ebd5a8b43d81e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62030d07515ac3c36be7626e45a39e6a72cdc3f182647854ebd5a8b43d81e5b->enter($__internal_e62030d07515ac3c36be7626e45a39e6a72cdc3f182647854ebd5a8b43d81e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e62030d07515ac3c36be7626e45a39e6a72cdc3f182647854ebd5a8b43d81e5b->leave($__internal_e62030d07515ac3c36be7626e45a39e6a72cdc3f182647854ebd5a8b43d81e5b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_383d070278b2ea57960f5227c4c92a0a97f8005a7eadefa9f356b5a29bde69c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d070278b2ea57960f5227c4c92a0a97f8005a7eadefa9f356b5a29bde69c4->enter($__internal_383d070278b2ea57960f5227c4c92a0a97f8005a7eadefa9f356b5a29bde69c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_383d070278b2ea57960f5227c4c92a0a97f8005a7eadefa9f356b5a29bde69c4->leave($__internal_383d070278b2ea57960f5227c4c92a0a97f8005a7eadefa9f356b5a29bde69c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aedf794d69e5a03cff697821e2ce9134ada630012e4ed92eb82cf73fd36b89b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedf794d69e5a03cff697821e2ce9134ada630012e4ed92eb82cf73fd36b89b3->enter($__internal_aedf794d69e5a03cff697821e2ce9134ada630012e4ed92eb82cf73fd36b89b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_aedf794d69e5a03cff697821e2ce9134ada630012e4ed92eb82cf73fd36b89b3->leave($__internal_aedf794d69e5a03cff697821e2ce9134ada630012e4ed92eb82cf73fd36b89b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Sonef/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
