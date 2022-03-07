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

/* stade/Add.html.twig */
class __TwigTemplate_914d7ceb27e138b89b4c981c9e527c8dcda3d5eb3421d6fe649bdb66ee84ef1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Add.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "stade/Add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "

    ";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 6
        echo "



    <div class=\"row\" style=\"width: 100%;\">

        <div class=\"col-12\">
            <div class=\"card\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"card-body\">
                    <h1>Ajouter Stade</h1>
                    <p class=\"card-title-desc\"></p>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Nom", [], "any", false, false, false, 19), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Nom", [], "any", false, false, false, 21), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Adresse", [], "any", false, false, false, 25), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Adresse", [], "any", false, false, false, 27), 'widget');
        echo "
                        </div>

                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Capacite", [], "any", false, false, false, 33), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Capacite", [], "any", false, false, false, 35), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'widget');
        echo "
                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "


                </div>
            </div> <!-- end col -->
        </div> <!-- end col -->
    </div>
    </div>






    <script>
        \$('#datatable-buttons').DataTable();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stade/Add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  129 => 38,  123 => 35,  118 => 33,  109 => 27,  104 => 25,  97 => 21,  92 => 19,  84 => 14,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}


    {% form_theme form 'bootstrap_4_layout.html.twig' %}




    <div class=\"row\" style=\"width: 100%;\">

        <div class=\"col-12\">
            <div class=\"card\">
                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                <div class=\"card-body\">
                    <h1>Ajouter Stade</h1>
                    <p class=\"card-title-desc\"></p>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.Nom) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.Nom) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.Adresse) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.Adresse) }}
                        </div>

                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.Capacite) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.Capacite) }}
                        </div>
                    </div>
                    {{ form_widget(form) }}
                    {{ form_end(form) }}


                </div>
            </div> <!-- end col -->
        </div> <!-- end col -->
    </div>
    </div>






    <script>
        \$('#datatable-buttons').DataTable();
    </script>
{% endblock %}", "stade/Add.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\stade\\Add.html.twig");
    }
}
