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

/* stock/Ustock.html.twig */
class __TwigTemplate_f96f277dc36d1f773694d3eec408f4d4ca572aedcc28a4417cbbff1ddc55fc67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/Ustock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/Ustock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/Ustock.html.twig", 1);
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

        echo "Ajouter stock";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<!-- Nested Row within Card Body -->
<div class=\"row justify-content-md-center\">

    <div class=\"col-lg-6\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"p-5\">
                    <div class=\"text-center\">
                        <h1 class=\"h4 text-gray-900 mb-4\">Ajouter un stock</h1>
                    </div>

                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "stock"]]);
        echo "
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">

                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nomStock", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom Fournisseur")]]);
        // line 23
        echo "
                            <div style=\"color:red;\"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nomStock", [], "any", false, false, false, 24), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prix Unitaire")]]);
        // line 28
        echo "
                            <div style=\"color:red;\"> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "quantite", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantite")]]);
        // line 35
        echo "
                            <div style=\"color:red;\"> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "quantite", [], "any", false, false, false, 36), 'errors');
        echo "</div>
                        </div>
                        ";
        // line 43
        echo "                    </div>

                  
                           
              ";
        // line 57
        echo "   
              
                <hr>
                <div class=\"d-grid gap-2 col-6 mx-auto\">
                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                        Modifer stock
                    </button>
                </div>

                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "

                <hr>

            </div>
        </div>

    </div>

</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stock/Ustock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  149 => 57,  143 => 43,  138 => 36,  135 => 35,  133 => 34,  125 => 29,  122 => 28,  120 => 27,  114 => 24,  111 => 23,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter stock{% endblock %}

{% block content %}

<!-- Nested Row within Card Body -->
<div class=\"row justify-content-md-center\">

    <div class=\"col-lg-6\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"p-5\">
                    <div class=\"text-center\">
                        <h1 class=\"h4 text-gray-900 mb-4\">Ajouter un stock</h1>
                    </div>

                    {{form_start(form,{attr:{'novalidate':'novalidate', 'class':\"stock\"}})}}
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">

                            {{ form_widget(form.nomStock, {'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Nom Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.nomStock) }}</div>
                        </div>
                        <div class=\"col-sm-6\">
                            {{ form_widget(form.prixUnitaire,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Prix Unitaire'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.prixUnitaire) }}</div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            {{ form_widget(form.quantite,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Quantite'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.quantite) }}</div>
                        </div>
                        {#<div class=\"col-sm-6\">
                            {{ form_widget(form.idFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Email Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.idFournisseur) }}</div>
                        </div> #}
                    </div>

                  
                           
              {#
                 <div class=\"form-group row\">

                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            {{ form_widget(form.captcha,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder':'Tapez le Code'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.captcha) }}</div>
                        </div>
                    </div>
                </div>
              #}   
              
                <hr>
                <div class=\"d-grid gap-2 col-6 mx-auto\">
                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                        Modifer stock
                    </button>
                </div>

                {{form_end(form)}}

                <hr>

            </div>
        </div>

    </div>

</div>
</div>



{% endblock %}", "stock/Ustock.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\stock\\Ustock.html.twig");
    }
}
