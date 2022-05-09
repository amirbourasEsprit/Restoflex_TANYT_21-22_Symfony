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

/* fournisseur/detailf.html.twig */
class __TwigTemplate_0cc4277ec8feb648adcb73f577fc9d2d7a87376ca211c8727814c5c84a721e6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/detailf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/detailf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/detailf.html.twig", 1);
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

        echo "Liste des fournisseurs";
        
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

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "<div class=\"row justify-content-md-center\">

   ";
        // line 36
        echo "                <div class=\"p-5\">
                 <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des fournisseurs</h1>
                </div>
                <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/AjouterFournisseur\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
                  <span class=\"text\">Ajouter des fournisseurs</span>
                </a>

                    <div class=\"table-responsive-sm mt-4\">

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                   ";
        // line 55
        echo "                                    <th scope=\"col\"> Nom Fournisseur</th>
                                    <th scope=\"col\">Matricule Fiscale</th>
                                    <th scope=\"col\">Domaine Fournisseur</th>
                                    <th scope=\"col\">Tel Fournisseur</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Adreesse</th>
                                    <th scope=\"col\" >logo</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody id=\"myTable\">

                                <tr>


                                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "nomFournisseur", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                        <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 71, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 72, $this->source); })()), "domaineFournisseur", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                        <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "numTelFournisseur", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), "emailFournisseur", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                        <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "adresseFournisseur", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                                     ";
        // line 77
        echo "                                      <td> <img src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/") . twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 77, $this->source); })()), "logo", [], "any", false, false, false, 77)), "html", null, true);
        echo "\" style=\"width: 60px height=60px\"></td>

                                        ";
        // line 80
        echo "


                                    <td>
                                        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Sfournisseur", ["idFournisseur" => twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 84, $this->source); })()), "idFournisseur", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\"class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                    </td>
                                    <td>
                                    <a class=\"btn btn-success\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ufournisseur", ["idFournisseur" => twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 88, $this->source); })()), "idFournisseur", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\">Modifier</a></td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
          ";
        // line 100
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 105
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/detailf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 105,  244 => 104,  232 => 100,  220 => 88,  213 => 84,  207 => 80,  201 => 77,  197 => 75,  193 => 74,  189 => 73,  185 => 72,  181 => 71,  177 => 70,  160 => 55,  142 => 36,  138 => 31,  128 => 30,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des fournisseurs{% endblock %}
{% block StyleAfterTemplate %}
    <link href=\"{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}\">
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
<div class=\"row justify-content-md-center\">

   {#  <div class=\"col-lg-6\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">#}
                <div class=\"p-5\">
                 <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des fournisseurs</h1>
                </div>
                <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/AjouterFournisseur\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
                  <span class=\"text\">Ajouter des fournisseurs</span>
                </a>

                    <div class=\"table-responsive-sm mt-4\">

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                   {#} <th scope=\"col\">Nom</th>

                                    #}
                                    <th scope=\"col\"> Nom Fournisseur</th>
                                    <th scope=\"col\">Matricule Fiscale</th>
                                    <th scope=\"col\">Domaine Fournisseur</th>
                                    <th scope=\"col\">Tel Fournisseur</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Adreesse</th>
                                    <th scope=\"col\" >logo</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody id=\"myTable\">

                                <tr>


                                        <td>{{f.nomFournisseur}}</td>
                                        <td>{{f.matriculeFiscale}}</td>
                                        <td>{{f.domaineFournisseur}}</td>
                                        <td>{{f.numTelFournisseur}}</td>
                                        <td>{{f.emailFournisseur}}</td>
                                        <td>{{f.adresseFournisseur}}</td>
                                     {# <td>{{f.logo}}</td> #}
                                      <td> <img src=\"{{ asset('/uploads/images/')~ f.logo }}\" style=\"width: 60px height=60px\"></td>

                                        {#  product.brochureFilename #}



                                    <td>
                                        <a href=\"{{ path('Sfournisseur',{'idFournisseur':f.idFournisseur}) }}\"class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                    </td>
                                    <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('Ufournisseur',{'idFournisseur':f.idFournisseur}) }}\">Modifier</a></td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
          {#</div>
        </div>
    </div>#}


{% endblock %}

{% block JsAfterTemplate %}

{% endblock %}", "fournisseur/detailf.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\fournisseur\\detailf.html.twig");
    }
}
