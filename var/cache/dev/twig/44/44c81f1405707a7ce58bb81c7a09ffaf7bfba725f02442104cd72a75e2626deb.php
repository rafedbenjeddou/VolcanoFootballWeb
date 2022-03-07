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

/* produit/modifier.html.twig */
class __TwigTemplate_bf9b39ecc4deda0c259bdb10cc64979d29f8acf86123b65f99707bed359ba730 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/modifier.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/modifier.html.twig", 1);
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

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <h4 class=\"card-title\">Modifier Produit</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "taille", [], "any", false, false, false, 44), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "taille", [], "any", false, false, false, 46), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "couleur", [], "any", false, false, false, 51), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "couleur", [], "any", false, false, false, 53), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nbrEtoiles", [], "any", false, false, false, 58), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nbrEtoiles", [], "any", false, false, false, 60), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prix", [], "any", false, false, false, 65), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input type=\"number\" class=\"form-control\" ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prix", [], "any", false, false, false, 67), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'widget');
        echo "
                        </div>
                    </div>

                    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
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
        return "produit/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 78,  205 => 74,  200 => 72,  192 => 67,  187 => 65,  179 => 60,  174 => 58,  166 => 53,  161 => 51,  153 => 46,  148 => 44,  140 => 39,  135 => 37,  127 => 32,  122 => 30,  114 => 25,  97 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                    <h4 class=\"card-title\">Modifier Produit</h4>
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

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.description) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.description) }}
                        </div>
                    </div>

                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>


{% endblock %}



", "produit/modifier.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\produit\\modifier.html.twig");
    }
}
