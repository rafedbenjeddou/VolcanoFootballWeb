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

/* produit/ajouter.html.twig */
class __TwigTemplate_8f2264000df381155100b8ba42123b43939f9ea25d7b04113cc58aacc2c7eb61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'user' => [$this, 'block_user'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/ajouter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
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
    ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "
    <!-- start page title -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between\">
                <!--<h4 class=\"mb-0\">Responsive Table</h4>-->

                <div class=\"page-title-right\">
                    <ol class=\"breadcrumb m-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produit</a></li>
                        <li class=\"breadcrumb-item active\">Ajouter</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <h4 class=\"card-title\">Ajouter Produit</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "taille", [], "any", false, false, false, 52), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "taille", [], "any", false, false, false, 54), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "couleur", [], "any", false, false, false, 59), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "couleur", [], "any", false, false, false, 61), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nbrEtoiles", [], "any", false, false, false, 66), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "nbrEtoiles", [], "any", false, false, false, 68), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "prix", [], "any", false, false, false, 73), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input type=\"number\" class=\"form-control\" ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "prix", [], "any", false, false, false, 75), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'label');
        echo "</label>
                        <div>
                            <textarea class=\"form-control\" rows=\"5\" ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget');
        echo "
                            </textarea>
                        </div>
                    </div>


                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "photo", [], "any", false, false, false, 88), 'widget');
        echo "

                    <hr>


                    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "

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
        return "produit/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 93,  222 => 88,  213 => 82,  208 => 80,  200 => 75,  195 => 73,  187 => 68,  182 => 66,  174 => 61,  169 => 59,  161 => 54,  156 => 52,  148 => 47,  143 => 45,  135 => 40,  130 => 38,  122 => 33,  97 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block user %}
    {{ user }}
{% endblock %}

{% block content %}

    {% form_theme form 'bootstrap_4_layout.html.twig' %}

    <!-- start page title -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between\">
                <!--<h4 class=\"mb-0\">Responsive Table</h4>-->

                <div class=\"page-title-right\">
                    <ol class=\"breadcrumb m-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produit</a></li>
                        <li class=\"breadcrumb-item active\">Ajouter</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                    <h4 class=\"card-title\">Ajouter Produit</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.nom) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.nom) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.type) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.type) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">{{ form_label(form.taille) }}</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.taille) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.couleur) }}</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.couleur) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">{{ form_label(form.nbrEtoiles) }}</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.nbrEtoiles) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.prix) }}</label>
                        <div class=\"col-md-10\">
                            <input type=\"number\" class=\"form-control\" {{ form_widget(form.prix) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label>{{ form_label(form.description) }}</label>
                        <div>
                            <textarea class=\"form-control\" rows=\"5\" {{ form_widget(form.description) }}
                            </textarea>
                        </div>
                    </div>


                    {{ form_widget(form.photo) }}

                    <hr>


                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>


{% endblock %}



", "produit/ajouter.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\produit\\ajouter.html.twig");
    }
}
