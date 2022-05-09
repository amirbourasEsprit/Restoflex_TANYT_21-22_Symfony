<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /stock/stat.html.twig */
class __TwigTemplate_1c765dee702aced4234abe5d502a7dab5cd25a9f1c4cb2ef89f6b7f767535c55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'StyleAfterTemplate' => [$this, 'block_StyleAfterTemplate'],
            'layout' => [$this, 'block_layout'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/stock/stat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/stock/stat.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Load Flashy default CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    <title>
        ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 17
        echo "    </title>

    <!-- Custom fonts for this template-->
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('StyleAfterTemplate', $context, $blocks);
        // line 30
        echo "</head>
";
        // line 31
        $this->displayBlock('layout', $context, $blocks);
        // line 32
        echo "<body

        id=\"page-top\">
<!-- Flashy depends on jQuery -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Load Flashy default JavaScript -->
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
<!-- Include Flashy default partial -->
";
        // line 40
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

<!-- Page Wrapper -->
<div id=\"wrapper\">
    ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 201
        echo "

";
        // line 203
        $this->displayBlock('body', $context, $blocks);
        // line 228
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SB Admin 2 - Dashboard
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link
                href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/sb-admin-2.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 45
        echo "        <!-- Sidebar -->
        <ul
                class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-cog\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Restoflex<sup>TANYT</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr
                    class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fas fa-fw fa-chart-pie\"></i>
                    <span>Tableau de board</span>
                </a>

            </li>


            <hr
                    class=\"sidebar-divider\">

            ";
        // line 76
        echo "
            <!-- Nav Item - Charts -->
            ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 79
            echo "
                ";
            // line 80
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "idRole", [], "any", false, false, false, 80), "nomRole", [], "any", false, false, false, 80), "Gérant"))) {
                // line 81
                echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEmployes");
                echo "\">
                            <i class=\"fas fa-fw fa-users\"></i>
                            <span>Employes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-dolly\"></i>
                            <span>Fournisseurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-calendar-check\"></i>
                            <span>Congés</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                            <div class=\"bg-white py-2 collapse-inner rounded\">
                                <a class=\"collapse-item\" href=\"#\">Type Réclamations</a>
                                <a class=\"collapse-item\" href=\"#\">Mes Réclamations</a>
                            </div>
                        </div>
                    </li>
                ";
            }
            // line 119
            echo "            ";
        }
        // line 120
        echo "
            ";
        // line 122
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 123
            echo "
                ";
            // line 124
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "idRole", [], "any", false, false, false, 124), "nomRole", [], "any", false, false, false, 124), "Employée"))) {
                // line 125
                echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-calendar-check\"></i>
                            <span>Congés</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                    </li>

                ";
            }
            // line 146
            echo "            ";
        }
        // line 147
        echo "
            ";
        // line 149
        echo "
            <!-- Nav Item - Charts -->
            ";
        // line 151
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 152
            echo "
                ";
            // line 153
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "idRole", [], "any", false, false, false, 153), "nomRole", [], "any", false, false, false, 153), "Utilisateur_fournisseur"))) {
                // line 154
                echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-dolly\"></i>
                            <span>Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-file-invoice-dollar\"></i>
                            <span>Factures</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                    </li>
                ";
            }
            // line 181
            echo "            ";
        }
        // line 182
        echo "
            <!-- Divider -->
            <hr
                    class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            ";
        // line 198
        echo "
        </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 204
        echo "
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">

                        <h1 class=\"tg-filterbale-nav option-set\">Statistique Stock </h1>
                        <a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AStock");
        echo "\">Retour</a>
                        <div id=\"div_chart\"></div>

                        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                        <script type=\"text/javascript\">
                            ";
        // line 217
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 217, $this->source); })()), "div_chart");
        echo "
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/stock/stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 217,  438 => 212,  428 => 204,  418 => 203,  406 => 198,  394 => 182,  391 => 181,  362 => 154,  360 => 153,  357 => 152,  355 => 151,  351 => 149,  348 => 147,  345 => 146,  322 => 125,  320 => 124,  317 => 123,  314 => 122,  311 => 120,  308 => 119,  269 => 83,  265 => 81,  263 => 80,  260 => 79,  258 => 78,  254 => 76,  222 => 45,  212 => 44,  194 => 31,  176 => 29,  164 => 26,  155 => 21,  145 => 20,  125 => 15,  115 => 228,  113 => 203,  109 => 201,  107 => 44,  100 => 40,  95 => 38,  87 => 32,  85 => 31,  82 => 30,  80 => 29,  77 => 28,  75 => 20,  70 => 17,  68 => 15,  63 => 13,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Load Flashy default CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    <title>
        {% block title %}SB Admin 2 - Dashboard
        {% endblock %}
    </title>

    <!-- Custom fonts for this template-->
    {% block css%}
        <link href=\"{{asset('back-office/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link
                href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"{{asset('back-office/css/sb-admin-2.min.css')}} \" rel=\"stylesheet\">
    {% endblock %}

    {% block StyleAfterTemplate %}{% endblock StyleAfterTemplate %}
</head>
{% block layout %}{% endblock layout %}
<body

        id=\"page-top\">
<!-- Flashy depends on jQuery -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Load Flashy default JavaScript -->
<script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
<!-- Include Flashy default partial -->
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}

<!-- Page Wrapper -->
<div id=\"wrapper\">
    {%block sidebar %}
        <!-- Sidebar -->
        <ul
                class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-cog\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Restoflex<sup>TANYT</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr
                    class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fas fa-fw fa-chart-pie\"></i>
                    <span>Tableau de board</span>
                </a>

            </li>


            <hr
                    class=\"sidebar-divider\">

            {# side bar pour le gérant#}

            <!-- Nav Item - Charts -->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                {% if app.user.idRole.nomRole==\"Gérant\"%}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('listEmployes') }}\">
                            <i class=\"fas fa-fw fa-users\"></i>
                            <span>Employes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-dolly\"></i>
                            <span>Fournisseurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-calendar-check\"></i>
                            <span>Congés</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                            <div class=\"bg-white py-2 collapse-inner rounded\">
                                <a class=\"collapse-item\" href=\"#\">Type Réclamations</a>
                                <a class=\"collapse-item\" href=\"#\">Mes Réclamations</a>
                            </div>
                        </div>
                    </li>
                {% endif %}
            {% endif %}

            {# side bar pour l'employee#}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                {% if app.user.idRole.nomRole==\"Employée\"%}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-calendar-check\"></i>
                            <span>Congés</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                    </li>

                {% endif %}
            {% endif %}

            {# side bar pour le utilisateur fournisseur#}

            <!-- Nav Item - Charts -->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                {% if app.user.idRole.nomRole==\"Utilisateur_fournisseur\"%}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-box-open\"></i>
                            <span>Commandes</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-dolly\"></i>
                            <span>Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-file-invoice-dollar\"></i>
                            <span>Factures</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-fw fa-exclamation-triangle\"></i>
                            <span>Réclamations</span>
                        </a>
                    </li>
                {% endif %}
            {% endif %}

            <!-- Divider -->
            <hr
                    class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            {#<!-- Sidebar Message -->
\t\t\t\t\t\t\t\t\t\t            <div class=\"sidebar-card\">
\t\t\t\t\t\t\t\t\t\t                <img class=\"sidebar-card-illustration mb-2\" src=\"{{asset('back-office/img/undraw_rocket.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t                <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
\t\t\t\t\t\t\t\t\t\t                <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
\t\t\t\t\t\t\t\t\t\t            </div>#}

        </ul>
    {% endblock %}


{% block body %}

    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">

                        <h1 class=\"tg-filterbale-nav option-set\">Statistique Stock </h1>
                        <a href=\"{{path('AStock')}}\">Retour</a>
                        <div id=\"div_chart\"></div>

                        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                        <script type=\"text/javascript\">
                            {{ gc_draw(piechart, 'div_chart') }}
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>


{% endblock %}
</div>", "/stock/stat.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\stock\\stat.html.twig");
    }
}
