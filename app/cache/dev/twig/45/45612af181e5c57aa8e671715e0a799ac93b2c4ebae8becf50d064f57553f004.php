<?php

/* ::base.html.twig */
class __TwigTemplate_055342f44c03d620984f462ddfc55edce76f177386e9585deedf5f69d6806003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6f182cb2f69dc325d159684355ebe402a11e4c917e5f240e47bf28531d2c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6f182cb2f69dc325d159684355ebe402a11e4c917e5f240e47bf28531d2c7d->enter($__internal_6e6f182cb2f69dc325d159684355ebe402a11e4c917e5f240e47bf28531d2c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
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
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    ";
        // line 35
        $this->displayBlock('pagestyle', $context, $blocks);
        // line 36
        echo "    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.css")), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/plugins.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/layout/css/layout.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/layout/css/themes/darkblue.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/layout/css/custom.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply \"page-header-fixed-mobile\" and \"page-footer-fixed-mobile\" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply \"page-sidebar-closed\" class to the body and \"page-sidebar-menu-closed\" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply \"page-sidebar-hide\" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply \"page-sidebar-closed-hide-logo\" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-hide\" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-fixed\" class to have fixed sidebar -->
<!-- DOC: Apply \"page-footer-fixed\" class to the body element to have fixed footer -->
<!-- DOC: Apply \"page-sidebar-reversed\" class to put the sidebar on the right side -->
<!-- DOC: Apply \"page-full-width\" class to the body element to have full width page without the sidebar menu -->
<body class=\"page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid\">
<!-- BEGIN HEADER -->
<div class=\"page-header -i navbar navbar-fixed-top\">
    <!-- BEGIN HEADER INNER -->
    <div class=\"page-header-inner\">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"/>
            </a>
            <div class=\"menu-toggler sidebar-toggler hide\">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class=\"top-menu\">
            <ul class=\"nav navbar-nav pull-right\">

                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                <li class=\"dropdown dropdown-user\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                        <img alt=\"\" class=\"img-circle\" src=\"assets/admin/layout/img/avatar3_small.jpg\"/>
\t\t\t\t\t<span class=\"username username-hide-on-mobile\">
\t\t\t\t\tNick </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon-user\"></i> Changer mot de passe </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"icon-key\"></i> Se deconnecter </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle\">
                        <i class=\"icon-logout\"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class=\"clearfix\">
</div>
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar-wrapper\">
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        ";
        // line 125
        $this->loadTemplate("includes/sidebar.html.twig", "::base.html.twig", 125)->display($context);
        // line 126
        echo "
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class=\"modal fade\" id=\"portlet-config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                            <h4 class=\"modal-title\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                            Widget settings form goes here
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn blue\">Save changes</button>
                            <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <!-- BEGIN PAGE HEADER-->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"fa fa-home\"></i>
                        <a href=\"index.html\">Home</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    <li>
                        <a href=\"#\">Dashboard</a>
                    </li>
                </ul>
                <div class=\"page-toolbar\">
                    <div id=\"dashboard-report-range\" class=\"pull-right tooltips btn btn-sm btn-default\" data-container=\"body\" data-placement=\"bottom\" data-original-title=\"Change dashboard date range\">
                        <i class=\"icon-calendar\"></i>&nbsp; <span class=\"thin uppercase visible-lg-inline-block\"></span>&nbsp; <i class=\"fa fa-angle-down\"></i>
                    </div>
                </div>
            </div>
            <h3 class=\"page-title\">
                Dashboard <small>reports & statistics</small>
            </h3>
            <!-- END PAGE HEADER-->


        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"../../assets/global/plugins/respond.min.js\"></script>
<script src=\"../../assets/global/plugins/excanvas.min.js\"></script>
<![endif]-->
<script src=\"../../assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"../../assets/global/plugins/jquery-ui/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.cokie.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/uniform/jquery.uniform.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.resize.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.categories.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.pulsate.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-daterangepicker/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src=\"../../assets/global/plugins/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"../../assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/quick-sidebar.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/demo.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/pages/scripts/index.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/pages/scripts/tasks.js\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
        
        $__internal_6e6f182cb2f69dc325d159684355ebe402a11e4c917e5f240e47bf28531d2c7d->leave($__internal_6e6f182cb2f69dc325d159684355ebe402a11e4c917e5f240e47bf28531d2c7d_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_c95a9532506decddbdae6e7f73b8e8e68a1161cc03644631cb09d286e7d20bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95a9532506decddbdae6e7f73b8e8e68a1161cc03644631cb09d286e7d20bb4->enter($__internal_c95a9532506decddbdae6e7f73b8e8e68a1161cc03644631cb09d286e7d20bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_c95a9532506decddbdae6e7f73b8e8e68a1161cc03644631cb09d286e7d20bb4->leave($__internal_c95a9532506decddbdae6e7f73b8e8e68a1161cc03644631cb09d286e7d20bb4_prof);

    }

    // line 35
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_3b45a3eab86ed429f5e0641aaf8f48704585ce3d19bbb88c77bad838f3e38a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b45a3eab86ed429f5e0641aaf8f48704585ce3d19bbb88c77bad838f3e38a7f->enter($__internal_3b45a3eab86ed429f5e0641aaf8f48704585ce3d19bbb88c77bad838f3e38a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        echo " ";
        
        $__internal_3b45a3eab86ed429f5e0641aaf8f48704585ce3d19bbb88c77bad838f3e38a7f->leave($__internal_3b45a3eab86ed429f5e0641aaf8f48704585ce3d19bbb88c77bad838f3e38a7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 35,  334 => 21,  194 => 126,  192 => 125,  130 => 66,  126 => 65,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  80 => 36,  78 => 35,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  46 => 21,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
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
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>{% block title %} {% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/plugins/uniform/css/uniform.default.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    {% block pagestyle %} {% endblock %}
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href=\"{{ absolute_url(asset('assets/global/css/components.css')) }}\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/global/css/plugins.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/admin/layout/css/layout.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ absolute_url(asset('assets/admin/layout/css/themes/darkblue.css')) }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"{{ absolute_url(asset('assets/admin/layout/css/custom.css')) }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply \"page-header-fixed-mobile\" and \"page-footer-fixed-mobile\" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply \"page-sidebar-closed\" class to the body and \"page-sidebar-menu-closed\" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply \"page-sidebar-hide\" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply \"page-sidebar-closed-hide-logo\" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-hide\" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-fixed\" class to have fixed sidebar -->
<!-- DOC: Apply \"page-footer-fixed\" class to the body element to have fixed footer -->
<!-- DOC: Apply \"page-sidebar-reversed\" class to put the sidebar on the right side -->
<!-- DOC: Apply \"page-full-width\" class to the body element to have full width page without the sidebar menu -->
<body class=\"page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid\">
<!-- BEGIN HEADER -->
<div class=\"page-header -i navbar navbar-fixed-top\">
    <!-- BEGIN HEADER INNER -->
    <div class=\"page-header-inner\">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a href=\"{{ path('nb_main_homepage') }}\">
                <img src=\"{{ absolute_url('assets/logo.png') }}\" alt=\"logo\" class=\"logo-default\"/>
            </a>
            <div class=\"menu-toggler sidebar-toggler hide\">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class=\"top-menu\">
            <ul class=\"nav navbar-nav pull-right\">

                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                <li class=\"dropdown dropdown-user\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                        <img alt=\"\" class=\"img-circle\" src=\"assets/admin/layout/img/avatar3_small.jpg\"/>
\t\t\t\t\t<span class=\"username username-hide-on-mobile\">
\t\t\t\t\tNick </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon-user\"></i> Changer mot de passe </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"icon-key\"></i> Se deconnecter </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle\">
                        <i class=\"icon-logout\"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class=\"clearfix\">
</div>
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar-wrapper\">
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        {% include \"includes/sidebar.html.twig\" %}

    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class=\"modal fade\" id=\"portlet-config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                            <h4 class=\"modal-title\">Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                            Widget settings form goes here
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn blue\">Save changes</button>
                            <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <!-- BEGIN PAGE HEADER-->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"fa fa-home\"></i>
                        <a href=\"index.html\">Home</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    <li>
                        <a href=\"#\">Dashboard</a>
                    </li>
                </ul>
                <div class=\"page-toolbar\">
                    <div id=\"dashboard-report-range\" class=\"pull-right tooltips btn btn-sm btn-default\" data-container=\"body\" data-placement=\"bottom\" data-original-title=\"Change dashboard date range\">
                        <i class=\"icon-calendar\"></i>&nbsp; <span class=\"thin uppercase visible-lg-inline-block\"></span>&nbsp; <i class=\"fa fa-angle-down\"></i>
                    </div>
                </div>
            </div>
            <h3 class=\"page-title\">
                Dashboard <small>reports & statistics</small>
            </h3>
            <!-- END PAGE HEADER-->


        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"../../assets/global/plugins/respond.min.js\"></script>
<script src=\"../../assets/global/plugins/excanvas.min.js\"></script>
<![endif]-->
<script src=\"../../assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"../../assets/global/plugins/jquery-ui/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.cokie.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/uniform/jquery.uniform.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.resize.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/flot/jquery.flot.categories.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.pulsate.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-daterangepicker/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src=\"../../assets/global/plugins/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"../../assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/quick-sidebar.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/layout/scripts/demo.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/pages/scripts/index.js\" type=\"text/javascript\"></script>
<script src=\"../../assets/admin/pages/scripts/tasks.js\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>", "::base.html.twig", "/var/www/html/Sonef/app/Resources/views/base.html.twig");
    }
}
