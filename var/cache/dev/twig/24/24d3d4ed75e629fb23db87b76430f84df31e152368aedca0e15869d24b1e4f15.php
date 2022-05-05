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

/* facture/afficher_fact.html.twig */
class __TwigTemplate_ffb55f02137a3ae5200c385c2f8cd5583d349b57b69ba485d061ce3d9eeabb5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/afficher_fact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/afficher_fact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/afficher_fact.html.twig", 1);
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

        echo "Liste des Factures
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

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "

\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Liste des Factures</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn float-right col-sm col-md-3\">
\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t<i style=\"float: left;\" class=\"material-icons mr-2\">&#xe26b;</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"text\">Statistique</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"table-responsive-sm mt-4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm col-md-6\">
\t\t\t\t\t\t\t\t\t<div id=\"dataTable_filter\" class=\"dataTables_filter\">
\t\t\t\t\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" class=\"form-control form-control-sm float-right\" placeholder=\"Search\" aria-controls=\"dataTable\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<table class=\"table table-hover \" id=\"myTable\">
\t\t\t\t\t\t\t\t<thead class=\"thead-light \">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tN° Facture
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tEtat
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"myTable\">
\t\t\t\t\t\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "numFacture", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "dateFacture", [], "any", false, false, false, 79), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "statut", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteFact", ["numFacture" => twig_get_attribute($this->env, $this->source, $context["f"], "numFacture", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xe872;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateFact", ["numFacture" => twig_get_attribute($this->env, $this->source, $context["f"], "numFacture", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"edit\" title=\"Update\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xe3c9;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailsFact", ["numFacture" => twig_get_attribute($this->env, $this->source, $context["f"], "numFacture", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"view\" title=\"Details\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xeac9;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 108
        echo "\t\t<script>
\t\t\t\$(document).ready(function () {
\$(\"#myInput\").on(\"keyup\", function () {
var value = \$(this).val().toLowerCase();
\$(\"#myTable > tbody > tr\").filter(function () {
\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/afficher_fact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 108,  252 => 107,  230 => 94,  218 => 88,  212 => 85,  206 => 82,  201 => 80,  197 => 79,  193 => 78,  190 => 77,  186 => 76,  140 => 32,  130 => 31,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Factures
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

\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Liste des Factures</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn float-right col-sm col-md-3\">
\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t<i style=\"float: left;\" class=\"material-icons mr-2\">&#xe26b;</i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"text\">Statistique</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"table-responsive-sm mt-4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm col-md-6\">
\t\t\t\t\t\t\t\t\t<div id=\"dataTable_filter\" class=\"dataTables_filter\">
\t\t\t\t\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" class=\"form-control form-control-sm float-right\" placeholder=\"Search\" aria-controls=\"dataTable\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<table class=\"table table-hover \" id=\"myTable\">
\t\t\t\t\t\t\t\t<thead class=\"thead-light \">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tN° Facture
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\t\t\tEtat
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"myTable\">
\t\t\t\t\t\t\t\t\t{% for f in factures %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ f.numFacture }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ f.dateFacture |date(\"m/d/Y\")}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ f.statut }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('deleteFact', {'numFacture': f.numFacture}) }}\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xe872;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('updateFact', {'numFacture': f.numFacture}) }}\" class=\"edit\" title=\"Update\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xe3c9;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('detailsFact', {'numFacture': f.numFacture}) }}\" class=\"view\" title=\"Details\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">&#xeac9;</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t{% endblock %}
\t{% block JsAfterTemplate %}
\t\t<script>
\t\t\t\$(document).ready(function () {
\$(\"#myInput\").on(\"keyup\", function () {
var value = \$(this).val().toLowerCase();
\$(\"#myTable > tbody > tr\").filter(function () {
\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
\t\t</script>
\t{% endblock %}
", "facture/afficher_fact.html.twig", "D:\\Nesrine Apps\\xxx\\htdocs\\Pidev_symfony_TANYT\\templates\\facture\\afficher_fact.html.twig");
    }
}
