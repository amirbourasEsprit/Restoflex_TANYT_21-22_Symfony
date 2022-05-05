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

/* facture/ajouter_fact.html.twig */
class __TwigTemplate_95221469dc7e2b31bddbd7485087855a7c9ccb78e5d2be9aa235c17fe99ec680 extends Template
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
            'choice_widget' => [$this, 'block_choice_widget'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/ajouter_fact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/ajouter_fact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/ajouter_fact.html.twig", 1);
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

        echo "Ajouter Facture
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
\t<!-- Nested Row within Card Body -->
\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Ajouter Facture</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">

\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateFacture", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom")]]);
        // line 25
        echo "
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateFacture", [], "any", false, false, false, 27), 'errors');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-check \">
\t\t\t\t\t\t\t\t\t";
        // line 31
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 42
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44), 'errors');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "total", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total")]]);
        // line 50
        echo "
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "total", [], "any", false, false, false, 52), 'errors');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "idFournisseur", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe")]]);
        // line 56
        echo "
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "idFournisseur", [], "any", false, false, false, 58), 'errors');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "idRest", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email")]]);
        // line 64
        echo "
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "idRest", [], "any", false, false, false, 66), 'errors');
        echo "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"d-grid gap-2 col-6 mx-auto\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
\t\t\t\t\t\t\t\tAjouter Facture
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t<hr>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 32
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label  \">";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => " radio-inline", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom")]]);
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            // line 38
            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/ajouter_fact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 40,  232 => 38,  230 => 37,  228 => 35,  226 => 34,  222 => 33,  219 => 32,  209 => 31,  186 => 79,  170 => 66,  166 => 64,  164 => 63,  156 => 58,  152 => 56,  150 => 55,  144 => 52,  140 => 50,  138 => 49,  130 => 44,  126 => 42,  124 => 31,  117 => 27,  113 => 25,  111 => 24,  104 => 20,  90 => 8,  80 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter Facture
{% endblock %}


{% block content %}

\t<!-- Nested Row within Card Body -->
\t<div class=\"row justify-content-md-center\">

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Ajouter Facture</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{form_start(form,{attr:{'novalidate':'novalidate', 'class':\"user\"}})}}
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">

\t\t\t\t\t\t\t\t{{ form_widget(form.dateFacture,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Nom'|trans} }) }}
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.dateFacture) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-check \">
\t\t\t\t\t\t\t\t\t{% block choice_widget %}

\t\t\t\t\t\t\t\t\t\t{% for child in form.statut %}
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label  \">
\t\t\t\t\t\t\t\t\t\t\t\t{{- form_widget(child,{ 'attr': {'class': \" radio-inline\",
                                            'placeholder': 'Nom'|trans}}) -}}
\t\t\t\t\t\t\t\t\t\t\t\t{{- form_label(child, null) -}}
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t{% endblock choice_widget %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.statut) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t{{ form_widget(form.total,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Total'|trans} }) }}
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.total) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t{{ form_widget(form.idFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Mot de passe'|trans} }) }}
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.idFournisseur) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t{{ form_widget(form.idRest,{ 'attr': {'class': \"form-control form-control-user\",
                                        'placeholder': 'Email'|trans} }) }}
\t\t\t\t\t\t\t\t<div style=\"color:red;\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.idRest) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"d-grid gap-2 col-6 mx-auto\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
\t\t\t\t\t\t\t\tAjouter Facture
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{form_end(form)}}

\t\t\t\t\t\t<hr>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>

{% endblock %}
", "facture/ajouter_fact.html.twig", "D:\\Nesrine Apps\\xxx\\htdocs\\Pidev_symfony_TANYT\\templates\\facture\\ajouter_fact.html.twig");
    }
}
