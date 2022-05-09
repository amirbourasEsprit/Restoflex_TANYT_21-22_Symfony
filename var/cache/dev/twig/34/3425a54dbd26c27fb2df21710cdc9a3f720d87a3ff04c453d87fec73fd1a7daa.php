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
class __TwigTemplate_37fa84ab0370b699866ec0a6c7d855fdc66321340eaadbd7ecccd733f5a5b522 extends Template
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
                    <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
                    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", [0 => "mercuryseries_flashy_notification"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            echo "                        <script id=\"flashy-template\" type=\"text/template\">
                            <div class=\"flashy flashy--";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                                <a class=\"flashy__body\" href=\"#\" target=\"_blank\"></a>
                            </div>
                        </script>

                        <script>
                            flashy(\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 58), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "link", [], "any", false, false, false, 58), "html", null, true);
            echo "\");
                        </script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "

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
        // line 82
        echo "                                 <th scope=\"col\">id stock</th>
                                  <th scope=\"col\">nom stock </th>
                                  <th scope=\"col\"> prix untitaire</th>
                                 <th scope=\"col\">quantite</th>
                                 <th scope=\"col\"> nom Fournisseur</th>
                               
                                 ";
        // line 89
        echo "                                </tr>
                            </thead>
                            <a  href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export");
        echo "\">Exporter Excel</a>
                            <h1>
                                Total Stock : ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "
                            </h1>
                            <tbody id=\"myTable\">
                              ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 97
            echo "
                                <tr>
                                   
                                     <td> ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                                     <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nomStock", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                                      <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "prixUnitaire", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                                      <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "quantite", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "idFournisseur", [], "any", false, false, false, 104), "idFournisseur", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                                    <td>
                                        <a  href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Sstock", ["idStock" => twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i
                                                class=\"material-icons\">&#xe872;</i></a>
                                                  <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ustock", ["idStock" => twig_get_attribute($this->env, $this->source, $context["s"], "idStock", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">Modifier</a>
                                   </td>

                                    
                              ";
            // line 115
            echo "   
                                   
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
          ";
        // line 124
        echo "  


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 129
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
        return array (  303 => 129,  293 => 128,  280 => 124,  274 => 118,  266 => 115,  259 => 108,  254 => 106,  249 => 104,  245 => 103,  241 => 102,  237 => 101,  233 => 100,  228 => 97,  224 => 96,  218 => 93,  213 => 91,  209 => 89,  201 => 82,  181 => 61,  170 => 58,  161 => 52,  158 => 51,  154 => 50,  140 => 38,  138 => 33,  128 => 32,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
                    {% for message in app.flashes('mercuryseries_flashy_notification') %}
                        <script id=\"flashy-template\" type=\"text/template\">
                            <div class=\"flashy flashy--{{ message.type }}\">
                                <a class=\"flashy__body\" href=\"#\" target=\"_blank\"></a>
                            </div>
                        </script>

                        <script>
                            flashy(\"{{ message.message }}\", \"{{ message.link }}\");
                        </script>
                    {% endfor %}


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
                            <a  href=\"{{ path('export') }}\">Exporter Excel</a>
                            <h1>
                                Total Stock : {{ totalStock }}
                            </h1>
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
