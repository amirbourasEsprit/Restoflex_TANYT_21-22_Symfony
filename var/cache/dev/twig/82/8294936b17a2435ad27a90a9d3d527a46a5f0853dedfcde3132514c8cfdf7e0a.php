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

/* type_rec/AjoutTypeRec.html.twig */
class __TwigTemplate_644290b453d95e89c862ddb774288e0a577bb8a6ce1176749df6bbf3387a9369 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_rec/AjoutTypeRec.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_rec/AjoutTypeRec.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "type_rec/AjoutTypeRec.html.twig", 1);
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

        echo "Ajouter Type Reclamation
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<!-- Nested Row within Card Body -->
\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Ajouter un type</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-15\">
\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nomTypeReclamation", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom Type Reclamation")]]);
        // line 23
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 26
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nomTypeReclamation", [], "any", false, false, false, 26), 'errors'))) {
            // line 27
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nomTypeReclamation", [], "any", false, false, false, 27), 'errors');
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"d-grid gap-2 col-6 mx-auto\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
\t\t\t\t\t\t\tAjouter Type Reclamation
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t<hr>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "type_rec/AjoutTypeRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  124 => 29,  118 => 27,  116 => 26,  111 => 23,  109 => 22,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter Type Reclamation
{% endblock %}

{% block content %}

\t<!-- Nested Row within Card Body -->
\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Ajouter un type</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{form_start(form,{attr:{'novalidate':'novalidate'}})}}
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-15\">
\t\t\t\t\t\t\t\t{{ form_widget(form.nomTypeReclamation,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Nom Type Reclamation'|trans}}) }}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if form_errors(form.nomTypeReclamation) is not empty %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ form_errors(form.nomTypeReclamation) }}</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"d-grid gap-2 col-6 mx-auto\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
\t\t\t\t\t\t\tAjouter Type Reclamation
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t{{form_end(form)}}

\t\t\t\t\t<hr>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>
</div>{% endblock %}
", "type_rec/AjoutTypeRec.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\type_rec\\AjoutTypeRec.html.twig");
    }
}
