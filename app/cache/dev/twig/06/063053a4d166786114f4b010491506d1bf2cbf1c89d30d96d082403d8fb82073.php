<?php

/* NBUsersBundle:Security:login.html.twig */
class __TwigTemplate_2b9b481d4770ebdba1b4b00c29dab1c28cb5b26597d9f33a9fa1421c3e17ee8e extends Twig_Template
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
        $__internal_150a7d7d418ba04ae7f438a3712b1d658acdacedd6a0b252ee15734c1ac56039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150a7d7d418ba04ae7f438a3712b1d658acdacedd6a0b252ee15734c1ac56039->enter($__internal_150a7d7d418ba04ae7f438a3712b1d658acdacedd6a0b252ee15734c1ac56039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBUsersBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>nextBus | Connexion </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/pages/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/css/components.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/layout/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/layout/css/themes/darkblue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/layout/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->

    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"login\">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class=\"menu-toggler sidebar-toggler\">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\">
        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/logo.png"), "html", null, true);
        echo "\" height=\"\" alt=\"logo\" class=\"logo-default\"/>

    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <h3 class=\"form-title\">Connexion</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
\t\t\t<span>
                ";
        // line 71
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 71, $this->getSourceContext()); })())) {
            // line 72
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 72, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "

                ";
        }
        // line 75
        echo "\t\t\tVeuillez fournir une adresse Email et un mot de passe. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Nom d'utilisateur</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Nom d'utilisateur\" name=\"_username\"/>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Mot de passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" name=\"_password\"/>
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-success uppercase\">Se connecter</button>
            <label class=\"rememberme check\">
                <input type=\"checkbox\" name=\"_remember_me\" />Restez connecter </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublier ?</a>
        </div>


    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"index.html\" method=\"post\">
        <h3>Mot de passe oublie ?</h3>
        <p>
            Entrez votre adresse e-mail pour re-initialiser votre mot de passe.
        </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\"/>
        </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Precedent</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Envoyer</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->

</div>
<div class=\"copyright\">
    ";
        // line 114
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy; Next Group .
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"../../assets/global/plugins/respond.min.js\"></script>
<script src=\"../../assets/global/plugins/excanvas.min.js\"></script>
<![endif]-->
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/layout/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/admin/pages/scripts/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
        
        $__internal_150a7d7d418ba04ae7f438a3712b1d658acdacedd6a0b252ee15734c1ac56039->leave($__internal_150a7d7d418ba04ae7f438a3712b1d658acdacedd6a0b252ee15734c1ac56039_prof);

    }

    public function getTemplateName()
    {
        return "NBUsersBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 144,  248 => 143,  244 => 142,  240 => 141,  234 => 138,  228 => 135,  224 => 134,  220 => 133,  216 => 132,  212 => 131,  208 => 130,  203 => 128,  199 => 127,  183 => 114,  142 => 75,  135 => 72,  133 => 71,  125 => 66,  114 => 58,  110 => 57,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  70 => 35,  64 => 32,  60 => 31,  56 => 30,  52 => 29,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>nextBus | Connexion </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/global/plugins/uniform/css/uniform.default.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"{{ absolute_url('assets/admin/pages/css/login.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href=\"{{ absolute_url('assets/global/css/components.css') }}\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/global/css/plugins.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/admin/layout/css/layout.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url('assets/admin/layout/css/themes/darkblue.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"{{ absolute_url('assets/admin/layout/css/custom.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->

    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"login\">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class=\"menu-toggler sidebar-toggler\">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"{{ path('nb_main_homepage') }}\">
        <img src=\"{{ absolute_url('assets/logo.png') }}\" height=\"\" alt=\"logo\" class=\"logo-default\"/>

    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"{{ path('login_check') }}\" method=\"post\">
        <h3 class=\"form-title\">Connexion</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
\t\t\t<span>
                {% if error %}
                    {{ error.message }}

                {% endif %}
\t\t\tVeuillez fournir une adresse Email et un mot de passe. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Nom d'utilisateur</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Nom d'utilisateur\" name=\"_username\"/>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Mot de passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" name=\"_password\"/>
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-success uppercase\">Se connecter</button>
            <label class=\"rememberme check\">
                <input type=\"checkbox\" name=\"_remember_me\" />Restez connecter </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublier ?</a>
        </div>


    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"index.html\" method=\"post\">
        <h3>Mot de passe oublie ?</h3>
        <p>
            Entrez votre adresse e-mail pour re-initialiser votre mot de passe.
        </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\"/>
        </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Precedent</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Envoyer</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->

</div>
<div class=\"copyright\">
    {{ \"now\" | date('Y') }} &copy; Next Group .
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"../../assets/global/plugins/respond.min.js\"></script>
<script src=\"../../assets/global/plugins/excanvas.min.js\"></script>
<![endif]-->
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"{{ absolute_url('assets/global/plugins/respond.min.js') }}\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/excanvas.min.js') }}\"></script>
<![endif]-->
<script src=\"{{ absolute_url('assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/jquery-migrate.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/jquery.cokie.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/global/plugins/uniform/jquery.uniform.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"{{ absolute_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ absolute_url('assets/global/scripts/metronic.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/admin/layout/scripts/layout.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/admin/layout/scripts/demo.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ absolute_url('assets/admin/pages/scripts/login.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>", "NBUsersBundle:Security:login.html.twig", "/var/www/html/Sonef/src/NB/UsersBundle/Resources/views/Security/login.html.twig");
    }
}
