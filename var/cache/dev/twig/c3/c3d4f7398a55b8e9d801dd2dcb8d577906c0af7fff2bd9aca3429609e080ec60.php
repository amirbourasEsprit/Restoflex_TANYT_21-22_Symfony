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

/* conge/AfficheAdmin.html.twig */
class __TwigTemplate_c2fe15d3a85ec0e59fd0c668ed5aeadd77f4ce07ba142e9630012c057a8f56d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/AfficheAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/AfficheAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conge/AfficheAdmin.html.twig", 1);
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

        echo "Liste des Congés";
        
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

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "<div class=\"row justify-content-md-center\">

    <div class=\"col-lg-10\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"p-5\">
                 <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des Congés</h1>
                </div>
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterConge");
        echo "\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
                  <span class=\"text\">Ajouter des Congés</span>  
                </a>
              
                    <div class=\"table-responsive-sm mt-4\">
                       <div class=\"d-none d-sm-inline-block form-inline navbar-search\">
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

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                    <th scope=\"col\">Nom </th>
                                    <th scope=\"col\">Date début </th>
                                    <th scope=\"col\">Date fin </th>
                                    <th scope=\"col\">Type du Congé </th>
                                    <th scope=\"col\">Etat </th>
                                </tr>
                            </thead>
                            <tbody id=\"myTable\">
                                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 71
            echo "                                <tr>
                                    <td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "idUtilisateur", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateDeb", [], "any", false, false, false, 73), "m/d/Y"), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateFin", [], "any", false, false, false, 74), "m/d/Y"), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "idTypeConge", [], "any", false, false, false, 75), "nomTypeConge", [], "any", false, false, false, 75), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 76), "html", null, true);
            echo " </td>
                                    <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AccepterConge", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idConge", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">Approuver</a></td>
                                    <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RefuserConge", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idConge", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">Refuser</a></td>
                                    <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerConge", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idConge", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierConge", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "idConge", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">Modifier</a></td>
                                   
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_JsAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JsAfterTemplate"));

        // line 95
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
        return "conge/AfficheAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 95,  251 => 94,  232 => 84,  222 => 80,  218 => 79,  214 => 78,  210 => 77,  206 => 76,  202 => 75,  198 => 74,  194 => 73,  190 => 72,  187 => 71,  183 => 70,  148 => 38,  138 => 30,  128 => 29,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Congés{% endblock %}
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

    <div class=\"col-lg-10\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"p-5\">
                 <div class=\"text-center\"><h1 class=\"h4 text-gray-900 mb-4\">Liste des Congés</h1>
                </div>
                <a href=\"{{ path('AjouterConge') }}\" class=\"btn btn-success btn float-right col-sm col-md-3\">
                  <span class=\"icon text-white-50\">
                    <i style=\"float: left;\" class=\"material-icons mr-2\">&#xE147;</i>
                  </span>
                  <span class=\"text\">Ajouter des Congés</span>  
                </a>
              
                    <div class=\"table-responsive-sm mt-4\">
                       <div class=\"d-none d-sm-inline-block form-inline navbar-search\">
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

                        <br>
                        <table class=\"table table-hover \" id=\"myTable\">
                            <thead class=\"thead-light \">
                                <tr>
                                    <th scope=\"col\">Nom </th>
                                    <th scope=\"col\">Date début </th>
                                    <th scope=\"col\">Date fin </th>
                                    <th scope=\"col\">Type du Congé </th>
                                    <th scope=\"col\">Etat </th>
                                </tr>
                            </thead>
                            <tbody id=\"myTable\">
                                {% for c in conge %}
                                <tr>
                                    <td> {{c.idUtilisateur.nom}} </td>
                                    <td> {{c.dateDeb|date(\"m/d/Y\")}} </td>
                                    <td> {{c.dateFin|date(\"m/d/Y\")}} </td>
                                    <td> {{c.idTypeConge.nomTypeConge}} </td>
                                    <td> {{c.etat}} </td>
                                    <td><a href=\"{{ path('AccepterConge',{'id':c.idConge}) }}\">Approuver</a></td>
                                    <td><a href=\"{{ path('RefuserConge',{'id':c.idConge}) }}\">Refuser</a></td>
                                    <td><a href=\"{{ path('SupprimerConge',{'id':c.idConge}) }}\">Supprimer</a></td>
                                    <td><a href=\"{{ path('ModifierConge',{'id':c.idConge}) }}\">Modifier</a></td>
                                   
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
{% endblock %}", "conge/AfficheAdmin.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\conge\\AfficheAdmin.html.twig");
    }
}
