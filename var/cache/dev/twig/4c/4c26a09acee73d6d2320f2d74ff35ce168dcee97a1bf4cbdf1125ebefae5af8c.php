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

/* stock/detail.html.twig */
class __TwigTemplate_26c727f4c42d5a3c6c9254cb024bdc6f3e0f6ebbbaf5008278da5414e276893e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/detail.html.twig", 1);
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

        echo "Liste des stocks";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/icon?family=Material+Icons"), "html", null, true);
        echo "\">
    <style>

        /* Table actions icons*/
        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
            text-align: center;
        }
        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    ";
        // line 38
        echo "    <div class=\"p-5\">
        <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des stocks</h1>
        </div>
        <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/ajstock\" class=\"btn btn-success btn float-right col-sm col-md-3\">                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
            <span class=\"text\">Ajouter des stocks</span>
        </a>




        <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

<br>
        <div>   <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/afficherStock\" class=\"btn btn-danger float-right col-sm col-md-3\">
                Afficher les stocks </a></div>
        <div class=\"table-responsive-sm mt-4\">

            <br>

            <table class=\"table table-hover \" id=\"myTable\">
                <thead class=\"thead-light \">
                <tr>

                    <th scope=\"col\">nom stock </th>
                    <th scope=\"col\"> prix untitaire</th>
                    <th scope=\"col\">quantite</th>
                    <th scope=\"col\"> nom Fournisseur</th>
                    <th scope=\"col\">Action</th>
                    ";
        // line 70
        echo "                </tr>
                </thead>

                <tbody id=\"myTable\">

                <tr>
                    ";
        // line 77
        echo "                    <td> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 77, $this->source); })()), "nomStock", [], "any", false, false, false, 77), "html", null, true);
        echo "
                    </td>
                    <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 79, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                    <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 80, $this->source); })()), "quantite", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                    <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 81, $this->source); })()), "idFournisseur", [], "any", false, false, false, 81), "idFournisseur", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
                    <td>
                        <a  href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Sstock", ["idStock" => twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 83, $this->source); })()), "idStock", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                    class=\"material-icons\">&#xe872;</i></a>
                        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ustock", ["idStock" => twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 85, $this->source); })()), "idStock", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">Modifier</a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
    ";
        // line 94
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stock/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 98,  226 => 97,  214 => 94,  205 => 85,  200 => 83,  195 => 81,  191 => 80,  187 => 79,  181 => 77,  173 => 70,  140 => 38,  138 => 33,  128 => 32,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des stocks{% endblock %}
{% block StyleAfterTemplate %}
    <link href=\"{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}\">
    <style>

        /* Table actions icons*/
        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
            text-align: center;
        }
        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }
    </style>
{% endblock StyleAfterTemplate %}



{% block content %}
    {# <div class=\"row justify-content-md-center\">

    <div class=\"col-lg-6\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">#}
    <div class=\"p-5\">
        <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des stocks</h1>
        </div>
        <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/ajstock\" class=\"btn btn-success btn float-right col-sm col-md-3\">                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
            <span class=\"text\">Ajouter des stocks</span>
        </a>




        <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

<br>
        <div>   <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/afficherStock\" class=\"btn btn-danger float-right col-sm col-md-3\">
                Afficher les stocks </a></div>
        <div class=\"table-responsive-sm mt-4\">

            <br>

            <table class=\"table table-hover \" id=\"myTable\">
                <thead class=\"thead-light \">
                <tr>

                    <th scope=\"col\">nom stock </th>
                    <th scope=\"col\"> prix untitaire</th>
                    <th scope=\"col\">quantite</th>
                    <th scope=\"col\"> nom Fournisseur</th>
                    <th scope=\"col\">Action</th>
                    {# <th scope=\"col\"> id fournisseur</th> #}
                </tr>
                </thead>

                <tbody id=\"myTable\">

                <tr>
                    {#<td> {{s.idStock}}</td> #}
                    <td> {{d.nomStock}}
                    </td>
                    <td>{{d.prixUnitaire}}</td>
                    <td>{{d.quantite}}</td>
                    <td>{{d.idFournisseur.idFournisseur}}</td>
                    <td>
                        <a  href=\"{{path('Sstock',{'idStock':d.idStock})}}\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                    class=\"material-icons\">&#xe872;</i></a>
                        <a href=\"{{path('Ustock',{'idStock':d.idStock})}}\">Modifier</a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
    {#</div>
        </div>
    </div>#}


{% endblock %}
{% block JsAfterTemplate %}

{% endblock %}", "stock/detail.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\stock\\detail.html.twig");
    }
}
