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

/* stock/stock.html.twig */
class __TwigTemplate_eb4cede26160ee93f71b5b93b693e37471ab6080865d2c0990d24fd98ecd5efe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/stock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/stock.html.twig", 1);
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
        echo " ";
        // line 38
        echo "                <div class=\"p-5\">
                 <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des stocks</h1>
                </div>
  <a href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/ajstock\" class=\"btn btn-success btn float-right col-sm col-md-3\">                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>

                  <span class=\"text\">Ajouter des stocks</span>

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
        echo "                                 <th scope=\"col\">id stock</th>
                                  <th scope=\"col\">nom stock </th>
                                  <th scope=\"col\"> prix untitaire</th>
                                 <th scope=\"col\">quantite</th>
                                 <th scope=\"col\"> nom Fournisseur</th>
                               
                                 ";
        // line 74
        echo "                                </tr>
                            </thead>
                            <tbody id=\"myTable\">
                              ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 78
            echo "                                <tr>
                                   
                                     <td> ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                     <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nomStock", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                      <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "prixUnitaire", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                      <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "quantite", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "idFournisseur", [], "any", false, false, false, 84), "idFournisseur", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                    <td>
                                        <a  href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Sstock", ["idStock" => twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                                  <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ustock", ["idStock" => twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">Modifier</a>
                                   </td>
                                    
                              ";
            // line 94
            echo "   
                                   
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
          ";
        // line 103
        echo "  


";
        
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
        echo "<script>
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
        return "stock/stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 108,  248 => 107,  235 => 103,  229 => 97,  221 => 94,  215 => 88,  210 => 86,  205 => 84,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  185 => 78,  181 => 77,  176 => 74,  168 => 67,  140 => 38,  138 => 33,  128 => 32,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des stocks{% endblock %}
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
                                 <th scope=\"col\">id stock</th>
                                  <th scope=\"col\">nom stock </th>
                                  <th scope=\"col\"> prix untitaire</th>
                                 <th scope=\"col\">quantite</th>
                                 <th scope=\"col\"> nom Fournisseur</th>
                               
                                 {# <th scope=\"col\"> id fournisseur</th> #}
                                </tr>
                            </thead>
                            <tbody id=\"myTable\">
                              {% for s in list %}
                                <tr>
                                   
                                     <td> {{s.idStock}}</td>
                                     <td>{{s.nomStock}}</td>
                                      <td>{{s.prixUnitaire}}</td>
                                      <td>{{s.quantite}}</td>
                                <td>{{s.idFournisseur.idFournisseur}}</td>
                                    <td>
                                        <a  href=\"{{path('Sstock',{'idStock':s.idStock})}}\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                                  <a href=\"{{path('Ustock',{'idStock':s.idStock})}}\">Modifier</a>
                                   </td>
                                    
                              {#<td>
                                                                   <a href=\"{{path('Ustock',{'idStock':s.idStock})}}\">Modifier</a></td>

                                    <a  href=\"{{path('UStock',{'idStock':s.idStock})}}\">Modifier</a></td>#}   
                                   
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
          {#</div>
        </div>
    </div>#}  


{% endblock %}
{% block JsAfterTemplate %}
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
{% endblock %}", "stock/stock.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\stock\\stock.html.twig");
    }
}
