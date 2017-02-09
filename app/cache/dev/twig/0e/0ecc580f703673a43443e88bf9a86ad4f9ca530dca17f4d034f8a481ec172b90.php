<?php

/* NBUsersBundle:Default:index.html.twig */
class __TwigTemplate_6e5a0da0504c64e13f28d672e3a9921309a62ae87833348f58f088cf3b97706b extends Twig_Template
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
        $__internal_12ebbcd9f62a5185e144082928695af822d353311ff407e5294ed764e21f6bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ebbcd9f62a5185e144082928695af822d353311ff407e5294ed764e21f6bb3->enter($__internal_12ebbcd9f62a5185e144082928695af822d353311ff407e5294ed764e21f6bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBUsersBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_12ebbcd9f62a5185e144082928695af822d353311ff407e5294ed764e21f6bb3->leave($__internal_12ebbcd9f62a5185e144082928695af822d353311ff407e5294ed764e21f6bb3_prof);

    }

    public function getTemplateName()
    {
        return "NBUsersBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "NBUsersBundle:Default:index.html.twig", "/var/www/html/Sonef/src/NB/UsersBundle/Resources/views/Default/index.html.twig");
    }
}
