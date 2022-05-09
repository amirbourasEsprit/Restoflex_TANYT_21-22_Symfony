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

/* fournisseur/UFournisseur.html.twig */
class __TwigTemplate_c6d51c411e5891001d019d2afd56a522596aeb79972622588dbd43723cd38331 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/UFournisseur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/UFournisseur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/UFournisseur.html.twig", 1);
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

        echo "Ajouter Fournisseur";
        
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
                        <h1 class=\"h4 text-gray-900 mb-4\">Ajouter un Fournisseur</h1>
                    </div>

                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "fournisseur"]]);
        echo "
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">

                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nomFournisseur", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom Fournisseur")]]);
        // line 23
        echo "
                            <div style=\"color:red;\"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nomFournisseur", [], "any", false, false, false, 24), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matricule Fiscale")]]);
        // line 28
        echo "
                            <div style=\"color:red;\"> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "domaineFournisseur", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domaine Fournisseur")]]);
        // line 35
        echo "
                            <div style=\"color:red;\"> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "domaineFournisseur", [], "any", false, false, false, 36), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "emailFournisseur", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Fournisseur")]]);
        // line 40
        echo "
                            <div style=\"color:red;\"> ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emailFournisseur", [], "any", false, false, false, 41), 'errors');
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "numTelFournisseur", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Télèphone Fournisseur")]]);
        // line 48
        echo "
                            <div style=\"color:red;\"> ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "numTelFournisseur", [], "any", false, false, false, 49), 'errors');
        echo "</div>
                        </div>
                        
                    </div>
                        <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adresseFournisseur", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse Fournisseur")]]);
        // line 56
        echo "
                            <div style=\"color:red;\"> ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "adresseFournisseur", [], "any", false, false, false, 57), 'errors');
        echo "</div>
                        </div>
                        </div>
                           
              ";
        // line 71
        echo "   
              
                <hr>
                <div class=\"d-grid gap-2 col-6 mx-auto\">
                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                        Modifier Fournisseur
                    </button>
                </div>

                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
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
        return "fournisseur/UFournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 80,  184 => 71,  177 => 57,  174 => 56,  172 => 55,  163 => 49,  160 => 48,  158 => 47,  149 => 41,  146 => 40,  144 => 39,  138 => 36,  135 => 35,  133 => 34,  125 => 29,  122 => 28,  120 => 27,  114 => 24,  111 => 23,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter Fournisseur{% endblock %}

{% block content %}

<!-- Nested Row within Card Body -->
<div class=\"row justify-content-md-center\">

    <div class=\"col-lg-6\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"p-5\">
                    <div class=\"text-center\">
                        <h1 class=\"h4 text-gray-900 mb-4\">Ajouter un Fournisseur</h1>
                    </div>

                    {{form_start(form,{attr:{'novalidate':'novalidate', 'class':\"fournisseur\"}})}}
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">

                            {{ form_widget(form.nomFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Nom Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.nomFournisseur) }}</div>
                        </div>
                        <div class=\"col-sm-6\">
                            {{ form_widget(form.matriculeFiscale,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Matricule Fiscale'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.matriculeFiscale) }}</div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            {{ form_widget(form.domaineFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Domaine Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.domaineFournisseur) }}</div>
                        </div>
                        <div class=\"col-sm-6\">
                            {{ form_widget(form.emailFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Email Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.emailFournisseur) }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            {{ form_widget(form.numTelFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Télèphone Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.numTelFournisseur) }}</div>
                        </div>
                        
                    </div>
                        <div class=\"form-group row\">
                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                            {{ form_widget(form.adresseFournisseur,{ 'attr': {'class': \"form-control form-control-user\",
                                            'placeholder': 'Adresse Fournisseur'|trans} }) }}
                            <div style=\"color:red;\"> {{ form_errors(form.adresseFournisseur) }}</div>
                        </div>
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
                        Modifier Fournisseur
                    </button>
                </div>

                {{form_end(form)}}

                <hr>

            </div>
        </div>

    </div>

</div>
</div>



{% endblock %}", "fournisseur/UFournisseur.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\fournisseur\\UFournisseur.html.twig");
    }
}
