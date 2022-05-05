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

/* facture/facturePDF.html.twig */
class __TwigTemplate_dce995f4e063944bfa9efba40d3d14def3f27f249a4c032ac72148dc0d5cc253 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'StyleAfterTemplate' => [$this, 'block_StyleAfterTemplate'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/facturePDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/facturePDF.html.twig"));

        // line 1
        $this->displayBlock('StyleAfterTemplate', $context, $blocks);
        // line 50
        echo "

";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        // line 2
        echo "\t<style>
\t\t.detail-content {
\t\t\tmargin: 50px;
\t\t\twidth: fit-content;
\t\t}

\t\t.details-Box {
\t\t\tborder-width: 2px;
\t\t\tborder-style: solid;
\t\t\tborder-color: #2B54CC;
\t\t\tborder-radius: 5px;
\t\t\tpadding: 25px 50px;
\t\t\tmargin: 50px;
\t\t\twidth: fit-content;
\t\t\theight: 50%;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t}

\t\t.details-Box table tr td {
\t\t\tpadding: 15px;
\t\t\tcolor: #000000;
\t\t}

\t\t.title {
\t\t\tcolor: #2B54CC;
\t\t\tfont-size: 20px;
\t\t}

\t\t.title span {
\t\t\tcolor: #000000;
\t\t}

\t\t.btn-container {
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t}

\t\timg {
\t\t\twidth: 300px;
\t\t\tdisplay: block;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t}
\t</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "

\t<img src='data:image;base64,<?= ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["img64"]) || array_key_exists("img64", $context) ? $context["img64"] : (function () { throw new RuntimeError('Variable "img64" does not exist.', 55, $this->source); })()), "html", null, true);
        echo ";?>'/>

\t<div class=\"detail-content\">
\t\t<div class=\"title\">
\t\t\t<h1>Facture n°:
\t\t\t\t<span>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 60, $this->source); })()), "numFacture", [], "any", false, false, false, 60), "html", null, true);
        echo "</span>
\t\t\t</h1>
\t\t</div>
\t\t<div class=\"details-Box\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>Date:</td>
\t\t\t\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 67, $this->source); })()), "dateFacture", [], "any", false, false, false, 67), "m/d/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Total:</td>
\t\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 71, $this->source); })()), "total", [], "any", false, false, false, 71), "html", null, true);
        echo "DT</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Etat:</td>
\t\t\t\t\t<td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Nom du fournisseur:</td>
\t\t\t\t\t<td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 79, $this->source); })()), "idFournisseur", [], "any", false, false, false, 79), "nomFournisseur", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Nom du restaurant:</td>
\t\t\t\t\t<td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 83, $this->source); })()), "idRest", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/facturePDF.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 83,  181 => 79,  174 => 75,  167 => 71,  160 => 67,  150 => 60,  142 => 55,  138 => 53,  128 => 52,  71 => 2,  61 => 1,  51 => 52,  47 => 50,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block StyleAfterTemplate %}
\t<style>
\t\t.detail-content {
\t\t\tmargin: 50px;
\t\t\twidth: fit-content;
\t\t}

\t\t.details-Box {
\t\t\tborder-width: 2px;
\t\t\tborder-style: solid;
\t\t\tborder-color: #2B54CC;
\t\t\tborder-radius: 5px;
\t\t\tpadding: 25px 50px;
\t\t\tmargin: 50px;
\t\t\twidth: fit-content;
\t\t\theight: 50%;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t}

\t\t.details-Box table tr td {
\t\t\tpadding: 15px;
\t\t\tcolor: #000000;
\t\t}

\t\t.title {
\t\t\tcolor: #2B54CC;
\t\t\tfont-size: 20px;
\t\t}

\t\t.title span {
\t\t\tcolor: #000000;
\t\t}

\t\t.btn-container {
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t}

\t\timg {
\t\t\twidth: 300px;
\t\t\tdisplay: block;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t}
\t</style>

{% endblock StyleAfterTemplate %}


{% block content %}


\t<img src='data:image;base64,<?= {{ img64 }};?>'/>

\t<div class=\"detail-content\">
\t\t<div class=\"title\">
\t\t\t<h1>Facture n°:
\t\t\t\t<span>{{facture.numFacture}}</span>
\t\t\t</h1>
\t\t</div>
\t\t<div class=\"details-Box\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>Date:</td>
\t\t\t\t\t<td>{{facture.dateFacture|date(\"m/d/Y\")}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Total:</td>
\t\t\t\t\t<td>{{facture.total}}DT</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Etat:</td>
\t\t\t\t\t<td>{{facture.statut}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Nom du fournisseur:</td>
\t\t\t\t\t<td>{{facture.idFournisseur.nomFournisseur}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Nom du restaurant:</td>
\t\t\t\t\t<td>{{facture.idRest.nom}}</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>


\t{% endblock %}
", "facture/facturePDF.html.twig", "D:\\Nesrine Apps\\xxx\\htdocs\\Pidev_symfony_TANYT\\templates\\facture\\facturePDF.html.twig");
    }
}
