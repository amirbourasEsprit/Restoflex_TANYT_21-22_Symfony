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

/* fournisseur/fournisseur.html.twig */
class __TwigTemplate_cd52aec5f0b0e2cd56e6231b526ee0c248c51897d14c1fe46653beebb4de4710 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/fournisseur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/fournisseur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/fournisseur.html.twig", 1);
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
        echo "  <link href=\"";
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
        echo "<div class=\"row justify-content-md-center\">

   ";
        // line 38
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
                        <div class=\"row\">
                            <div class=\"col-sm col-md-6\">
                                <div id=\"dataTable_filter\" class=\"dataTables_filter\">
                                    <input id=\"myInput\" type=\"text\"
                                            class=\"form-control form-control-sm float-right\" placeholder=\"Search\"
                                            aria-controls=\"dataTable\">
                                </div>
                            </div>
                            
                        </div>

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                   ";
        // line 67
        echo "
                                    <th scope=\"col\">   <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\"class=\"alert-info\"> </a>   Nom Fournisseur </th>
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
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 80
            echo "                                <tr>
                                   

                     <td> <a  href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showf", ["idFournisseur" => twig_get_attribute($this->env, $this->source, $context["f"], "idFournisseur", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\"class=\"alert-info\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nomFournisseur", [], "any", false, false, false, 83), "html", null, true);
            echo "</a> </td>
                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nomFournisseur", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "matriculeFiscale", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "domaineFournisseur", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "numTelFournisseur", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                        <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "emailFournisseur", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "adresseFournisseur", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                     ";
            // line 91
            echo "                                      <td> <img src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/") . twig_get_attribute($this->env, $this->source, $context["f"], "logo", [], "any", false, false, false, 91)), "html", null, true);
            echo "\" style=\"width: 60px height=60px\"></td>
                                      
                                        ";
            // line 94
            echo "


                                    <td>
                                        <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Sfournisseur", ["idFournisseur" => twig_get_attribute($this->env, $this->source, $context["f"], "idFournisseur", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\"class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                    </td>
                                    <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ufournisseur", ["idFournisseur" => twig_get_attribute($this->env, $this->source, $context["f"], "idFournisseur", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">Modifier</a></td>

    
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
          ";
        // line 114
        echo "
        <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/Fournisseur/TriA\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
            <span class=\"text\">Trier par Nom</span>
        </a>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 127
        echo "
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
  \$(document).ready(function(){
    \$(\"#myInput\").on(\"keyup\", function() {
      var value = \$(this).val().toLowerCase();
      \$(\"#myTable > tbody > tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/fournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 127,  282 => 126,  262 => 114,  256 => 107,  245 => 102,  238 => 98,  232 => 94,  226 => 91,  222 => 89,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  196 => 83,  191 => 80,  187 => 79,  173 => 68,  170 => 67,  142 => 38,  138 => 33,  128 => 32,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
                        <div class=\"row\">
                            <div class=\"col-sm col-md-6\">
                                <div id=\"dataTable_filter\" class=\"dataTables_filter\">
                                    <input id=\"myInput\" type=\"text\"
                                            class=\"form-control form-control-sm float-right\" placeholder=\"Search\"
                                            aria-controls=\"dataTable\">
                                </div>
                            </div>
                            
                        </div>

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                   {#} <th scope=\"col\">Nom</th>

                                    <th scope=\"col\">Action</th>#}

                                    <th scope=\"col\">   <a href=\"{{ path('tri') }}\"class=\"alert-info\"> </a>   Nom Fournisseur </th>
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
                                {% for f in list %}
                                <tr>
                                   

                     <td> <a  href=\"{{ path('showf',{'idFournisseur':f.idFournisseur}) }}\"class=\"alert-info\"> {{f.nomFournisseur}}</a> </td>
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
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
          {#</div>
        </div>
    </div>#}

        <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/Fournisseur/TriA\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
            <span class=\"text\">Trier par Nom</span>
        </a>

</div>

{% endblock %}

{% block JsAfterTemplate %}

     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
  \$(document).ready(function(){
    \$(\"#myInput\").on(\"keyup\", function() {
      var value = \$(this).val().toLowerCase();
      \$(\"#myTable > tbody > tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
{% endblock %}", "fournisseur/fournisseur.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\fournisseur\\fournisseur.html.twig");
    }
}
