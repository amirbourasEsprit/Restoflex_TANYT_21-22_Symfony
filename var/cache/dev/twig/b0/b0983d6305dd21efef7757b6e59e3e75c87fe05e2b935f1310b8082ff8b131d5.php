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

/* fournisseur/index.html.twig */
class __TwigTemplate_573034a069797c3edaf343759dca894cf9646f53c78e31dcd0772a33f8c736c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'StyleAfterTemplate' => [$this, 'block_StyleAfterTemplate'],
            'content' => [$this, 'block_content'],
            'JsAfterTemplate' => [$this, 'block_JsAfterTemplate'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Fournisseurs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        // line 6
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/icon?family=Material+Icons"), "html", null, true);
        echo "\">
\t<style>

\t\t/* Table actions icons*/
\t\ttable.table td a.view {
\t\t\tcolor: #03A9F4;
\t\t}

\t\ttable.table td a.edit {
\t\t\tcolor: #FFC107;
\t\t}

\t\ttable.table td a.delete {
\t\t\tcolor: #E34724;
\t\t\ttext-align: center;
\t\t}
\t\t.hint-text {
\t\t\tfloat: left;
\t\t\tmargin-top: 6px;
\t\t\tfont-size: 95%;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-11\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Mes Fournisseurs</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"table-responsive-sm mt-4\">
\t\t\t\t\t\t\t<div class=\"d-none d-sm-inline-block form-inline navbar-search\">
\t\t\t\t\t\t\t\t<div class=\"input-group\" id=\"dataTable_filter\">
\t\t\t\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<table class=\"table table-hover \" id=\"myTable\">
\t\t\t\t\t\t\t\t<thead class=\"thead-light \">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom Fournisseur</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">email</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Numero</th>
                                        <th scope=\"col\">Date de Naissance</th>
                                        <th scope=\"col\">Adresse</th>
                                        <th scope=\"col\">Statut</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"myTable\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "idRole", [], "any", false, false, false, 71), "nomRole", [], "any", false, false, false, 71), "Utilisateur_fournisseur"))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "idRest", [], "any", false, false, false, 72), "idRest", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "idRest", [], "any", false, false, false, 72), "idRest", [], "any", false, false, false, 72)))) {
                    // line 73
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                    <td>";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "idFournisseur", [], "any", false, false, false, 76), "nomFournisseur", [], "any", false, false, false, 76), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "prenom", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "numTel", [], "any", false, false, false, 80), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 81
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "dateNaissance", [], "any", false, false, false, 81), "d-m-Y"), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 82), "html", null, true);
                    echo "</td>
                                                    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["fournisseur"], "statusCompte", [], "any", false, false, false, 84), "non_verifier"))) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["status_color"] = "badge badge-danger";
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["status_color"] = "badge badge-success";
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "statusCompte", [], "any", false, false, false, 89)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE254;</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"delete\" data-toggle=\"modal\" data-target=\"#deleteModal-";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 97), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE872;</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"deleteModal-";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"deleteModalLabel\">Voulez vous supprimer ?</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer_utilisateur_fournisseur", ["id" => twig_get_attribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                    echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "

\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 139
        echo "\t<script>
\t\t\$(document).ready(function () {
\$(\"#myInput\").on(\"keyup\", function () {
var value = \$(this).val().toLowerCase();
\$(\"#myTable > tbody > tr\").filter(function () {
\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 139,  321 => 138,  299 => 125,  291 => 122,  288 => 121,  275 => 111,  261 => 100,  255 => 97,  249 => 94,  238 => 89,  235 => 88,  232 => 87,  229 => 86,  226 => 85,  224 => 84,  219 => 82,  215 => 81,  211 => 80,  207 => 79,  203 => 78,  199 => 77,  195 => 76,  190 => 73,  187 => 72,  184 => 71,  180 => 70,  139 => 31,  129 => 30,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Fournisseurs
{% endblock %}
{% block StyleAfterTemplate %}
\t<link href=\"{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}\">
\t<style>

\t\t/* Table actions icons*/
\t\ttable.table td a.view {
\t\t\tcolor: #03A9F4;
\t\t}

\t\ttable.table td a.edit {
\t\t\tcolor: #FFC107;
\t\t}

\t\ttable.table td a.delete {
\t\t\tcolor: #E34724;
\t\t\ttext-align: center;
\t\t}
\t\t.hint-text {
\t\t\tfloat: left;
\t\t\tmargin-top: 6px;
\t\t\tfont-size: 95%;
\t\t}
\t</style>
{% endblock StyleAfterTemplate %}
{% block content %}
\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-11\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Mes Fournisseurs</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"table-responsive-sm mt-4\">
\t\t\t\t\t\t\t<div class=\"d-none d-sm-inline-block form-inline navbar-search\">
\t\t\t\t\t\t\t\t<div class=\"input-group\" id=\"dataTable_filter\">
\t\t\t\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<table class=\"table table-hover \" id=\"myTable\">
\t\t\t\t\t\t\t\t<thead class=\"thead-light \">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom Fournisseur</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">email</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Numero</th>
                                        <th scope=\"col\">Date de Naissance</th>
                                        <th scope=\"col\">Adresse</th>
                                        <th scope=\"col\">Statut</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"myTable\">
\t\t\t\t\t\t\t\t\t{% for fournisseur in fournisseurs %}
\t\t\t\t\t\t\t\t\t\t{% if fournisseur.idRole.nomRole=='Utilisateur_fournisseur'  %}
\t\t\t\t\t\t\t\t\t\t\t{% if fournisseur.idRest.idRest==app.user.idRest.idRest  %}


\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                    <td>{{ fournisseur.idFournisseur.nomFournisseur }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ fournisseur.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ fournisseur.prenom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ fournisseur.email }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ fournisseur.numTel }}</td>
                                                    <td>{{ fournisseur.dateNaissance |date('d-m-Y') }}</td>
                                                    <td>{{ fournisseur.adresse }}</td>
                                                    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if fournisseur.statusCompte == \"non_verifier\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set status_color = \"badge badge-danger\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set status_color = \"badge badge-success\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"{{status_color}}\">{{fournisseur.statusCompte| upper}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('update', {'id':fournisseur.id }) }}\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE254;</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"delete\" data-toggle=\"modal\" data-target=\"#deleteModal-{{ fournisseur.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xE872;</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"deleteModal-{{ fournisseur.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"deleteModalLabel\">Voulez vous supprimer ?</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('supprimer_utilisateur_fournisseur', {'id':fournisseur.id }) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>



{% endblock %}
{% block JsAfterTemplate %}
\t<script>
\t\t\$(document).ready(function () {
\$(\"#myInput\").on(\"keyup\", function () {
var value = \$(this).val().toLowerCase();
\$(\"#myTable > tbody > tr\").filter(function () {
\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
\t</script>
{% endblock %}
", "fournisseur/index.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\fournisseur\\index.html.twig");
    }
}
