<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a223a0cfb9d4e64b064a61d280ff9a68fb799eec8aa48f773e83db2b882c53ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e25d1aaaf66877c1051d347ed3817cf2e706ca0442ccdfce6fa5ba4707284094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25d1aaaf66877c1051d347ed3817cf2e706ca0442ccdfce6fa5ba4707284094->enter($__internal_e25d1aaaf66877c1051d347ed3817cf2e706ca0442ccdfce6fa5ba4707284094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25d1aaaf66877c1051d347ed3817cf2e706ca0442ccdfce6fa5ba4707284094->leave($__internal_e25d1aaaf66877c1051d347ed3817cf2e706ca0442ccdfce6fa5ba4707284094_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9d65fa93ddf27244d8b0244e05449206d7e1ae3ebcf4ee50717d930e1c171af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d65fa93ddf27244d8b0244e05449206d7e1ae3ebcf4ee50717d930e1c171af->enter($__internal_a9d65fa93ddf27244d8b0244e05449206d7e1ae3ebcf4ee50717d930e1c171af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a9d65fa93ddf27244d8b0244e05449206d7e1ae3ebcf4ee50717d930e1c171af->leave($__internal_a9d65fa93ddf27244d8b0244e05449206d7e1ae3ebcf4ee50717d930e1c171af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28bced7203fc3097fa4be1c0df8e35bc92259f644cd80650720a639ccc7eb6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bced7203fc3097fa4be1c0df8e35bc92259f644cd80650720a639ccc7eb6b2->enter($__internal_28bced7203fc3097fa4be1c0df8e35bc92259f644cd80650720a639ccc7eb6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_28bced7203fc3097fa4be1c0df8e35bc92259f644cd80650720a639ccc7eb6b2->leave($__internal_28bced7203fc3097fa4be1c0df8e35bc92259f644cd80650720a639ccc7eb6b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d40b1145f962dfc6fbdec9d2c369ade881af20690765db1d35c3a4c2faba03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d40b1145f962dfc6fbdec9d2c369ade881af20690765db1d35c3a4c2faba03a->enter($__internal_0d40b1145f962dfc6fbdec9d2c369ade881af20690765db1d35c3a4c2faba03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d40b1145f962dfc6fbdec9d2c369ade881af20690765db1d35c3a4c2faba03a->leave($__internal_0d40b1145f962dfc6fbdec9d2c369ade881af20690765db1d35c3a4c2faba03a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Sonef/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
