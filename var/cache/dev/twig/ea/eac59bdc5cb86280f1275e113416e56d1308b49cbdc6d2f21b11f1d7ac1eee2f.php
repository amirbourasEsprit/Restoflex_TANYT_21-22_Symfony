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

/* employe/updateEmployee.html.twig */
class __TwigTemplate_d7edb12603bfaed75fdd09c92106a12847c0f838af10ec81c292d50cf5dd2b00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/updateEmployee.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/updateEmployee.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/updateEmployee.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tModifier Employée
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_StyleAfterTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleAfterTemplate"));

        // line 14
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 15
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
\t\t.edit {
\t\t\tcolor: #FFC107;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "
\t<!-- Nested Row within Card Body -->


\t<div class=\"container mt-5\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"card p-3 py-4\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<img src=\"https://i.imgur.com/bDLhJiP.jpg\" width=\"100\" class=\"rounded-circle\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t<span class=\"bg-secondary p-1 px-4 rounded text-white\">";
        // line 54
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 54, $this->source); })()), "statusCompte", [], "any", false, false, false, 54)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<h5 class=\"mt-2 mb-0\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t";
        // line 56
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 56, $this->source); })()), "idRole", [], "any", false, false, false, 56), "nomRole", [], "any", false, false, false, 56), "Employée"))) {
            // line 57
            echo "\t\t\t\t\t\t<span>Employée</span>
\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t<span>Fournisseur</span>
\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t<div class=\"px-4 mt-1\">
\t\t\t\t\t\t\t<p class=\"fonts\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 64
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 64, $this->source); })()), "idRole", [], "any", false, false, false, 64), "nomRole", [], "any", false, false, false, 64), "Employée"))) {
            // line 65
            echo "\t\t\t\t\t\t <ul class=\"social-list\">
                        Salaire: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 66, $this->source); })()), "salaire", [], "any", false, false, false, 66), "html", null, true);
            echo " <br>
                        Solde congé: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 67, $this->source); })()), "soldeConge", [], "any", false, false, false, 67), "html", null, true);
            echo "<br>
\t\t\t\t\t\tPoste: ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 68, $this->source); })()), "posteEmploye", [], "any", false, false, false, 68), "html", null, true);
            echo "
                  \t  </ul>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t";
        // line 73
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 73, $this->source); })()), "statusCompte", [], "any", false, false, false, 73), "verifier"))) {
            // line 74
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verifier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary px-4\">Non verifier</a>

\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 77, $this->source); })()), "statusCompte", [], "any", false, false, false, 77), "non_verifier"))) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verifier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary px-4\">Verifier</a>

\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 81, $this->source); })()), "idRole", [], "any", false, false, false, 81), "nomRole", [], "any", false, false, false, 81), "Employée"))) {
            // line 82
            echo "\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary px-4 ms-3\" title=\"Edit\" data-toggle=\"modal\" data-target=\"#uploadModal\">
\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"uploadModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">

\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "salaire", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier le salaire")]]);
        // line 108
        echo "
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "salaire", [], "any", false, false, false, 110), 'errors');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "soldeConge", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier le solde")]]);
        // line 114
        echo "
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "soldeConge", [], "any", false, false, false, 116), 'errors');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "posteEmploye", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier le poste")]]);
        // line 122
        echo "
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "posteEmploye", [], "any", false, false, false, 124), 'errors');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "captcha", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Taper le code")]]);
        // line 128
        echo "
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "captcha", [], "any", false, false, false, 130), 'errors');
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn btn-success\">Modifier</button>
\t\t\t\t\t<a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEmployes");
        echo "\" class=\"btn btn-secondary btn btn-danger\">Annuler</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_end');
        echo "


\t\t\t\t<hr>

\t\t\t</div>
\t\t</div>

\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/updateEmployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 140,  313 => 138,  302 => 130,  298 => 128,  296 => 127,  290 => 124,  286 => 122,  284 => 121,  276 => 116,  272 => 114,  270 => 113,  264 => 110,  260 => 108,  258 => 107,  251 => 103,  233 => 87,  226 => 82,  223 => 81,  216 => 78,  213 => 77,  206 => 74,  204 => 73,  200 => 71,  194 => 68,  190 => 67,  186 => 66,  183 => 65,  181 => 64,  176 => 61,  172 => 59,  168 => 57,  166 => 56,  160 => 55,  156 => 54,  142 => 42,  132 => 41,  96 => 15,  91 => 14,  81 => 13,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%block title %}
\tModifier Employée
{% endblock %}
{#
{% block header %}{% endblock %}

{% block sidebar %}{% endblock %}
{% block navbar %}{% endblock %}

{% block footer %}{% endblock %}
#}
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
\t\t.edit {
\t\t\tcolor: #FFC107;
\t\t}
\t</style>
{% endblock StyleAfterTemplate %}
{% block content %}

\t<!-- Nested Row within Card Body -->


\t<div class=\"container mt-5\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"card p-3 py-4\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<img src=\"https://i.imgur.com/bDLhJiP.jpg\" width=\"100\" class=\"rounded-circle\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t<span class=\"bg-secondary p-1 px-4 rounded text-white\">{{employe.statusCompte|upper}}</span>
\t\t\t\t\t\t<h5 class=\"mt-2 mb-0\">{{employe.nom}} {{employe.prenom }}</h5>
\t\t\t\t\t\t{% if employe.idRole.nomRole==\"Employée\" %}
\t\t\t\t\t\t<span>Employée</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span>Fournisseur</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"px-4 mt-1\">
\t\t\t\t\t\t\t<p class=\"fonts\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if employe.idRole.nomRole==\"Employée\" %}
\t\t\t\t\t\t <ul class=\"social-list\">
                        Salaire: {{employe.salaire}} <br>
                        Solde congé: {{employe.soldeConge }}<br>
\t\t\t\t\t\tPoste: {{employe.posteEmploye}}
                  \t  </ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t{% if employe.statusCompte=='verifier'%}
\t\t\t\t\t\t\t\t<a href=\"{{ path('verifier', {'id':employe.id }) }}\" class=\"btn btn-outline-primary px-4\">Non verifier</a>

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if employe.statusCompte=='non_verifier'%}
\t\t\t\t\t\t\t\t<a href=\"{{ path('verifier', {'id':employe.id }) }}\" class=\"btn btn-outline-primary px-4\">Verifier</a>

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if employe.idRole.nomRole==\"Employée\" %}
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary px-4 ms-3\" title=\"Edit\" data-toggle=\"modal\" data-target=\"#uploadModal\">
\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"uploadModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t{{form_start(form,{attr:{'novalidate':'novalidate', 'class':\"user\"}})}}
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">

\t\t\t\t\t\t\t{{ form_widget(form.salaire,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Modifier le salaire'|trans} }) }}
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t{{ form_errors(form.salaire) }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t{{ form_widget(form.soldeConge,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Modifier le solde'|trans} }) }}
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t{{ form_errors(form.soldeConge) }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t{{ form_widget(form.posteEmploye,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Modifier le poste'|trans} }) }}
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t{{ form_errors(form.posteEmploye) }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t{{ form_widget(form.captcha,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Taper le code'|trans} }) }}
\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t{{ form_errors(form.captcha) }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn btn-success\">Modifier</button>
\t\t\t\t\t<a href=\"{{ path('listEmployes') }}\" class=\"btn btn-secondary btn btn-danger\">Annuler</a>
\t\t\t\t</div>
\t\t\t\t{{form_end(form)}}


\t\t\t\t<hr>

\t\t\t</div>
\t\t</div>

\t</div>

{% endblock %}
", "employe/updateEmployee.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\employe\\updateEmployee.html.twig");
    }
}
