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

/* matche/Update.html.twig */
class __TwigTemplate_4005617ac126dc92dd2df4a6f910b52bc43bd4f94b612561099c8f594e0dc051 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Update.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "matche/Update.html.twig", 1);
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

    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Modifier un Match : </h4>

                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "NomMatche", [], "any", false, false, false, 13), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "NomMatche", [], "any", false, false, false, 15), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "NomArbitre", [], "any", false, false, false, 19), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\"  ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "NomArbitre", [], "any", false, false, false, 21), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "tour", [], "any", false, false, false, 25), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\"  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "tour", [], "any", false, false, false, 27), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "time", [], "any", false, false, false, 37), 'label');
        echo "</label>
                        <div class=\"col-md-10\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "time", [], "any", false, false, false, 39), 'widget');
        echo "
                        </div>
                    </div>


                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "NomArbitre", [], "any", false, false, false, 44), 'widget');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "tour", [], "any", false, false, false, 45), 'widget');
        echo "

                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47), 'widget');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "time", [], "any", false, false, false, 48), 'widget');
        echo "
                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

                </div>
            </div> <!-- end col -->
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "matche/Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 49,  157 => 48,  153 => 47,  148 => 45,  144 => 44,  136 => 39,  131 => 37,  124 => 33,  119 => 31,  112 => 27,  107 => 25,  100 => 21,  95 => 19,  88 => 15,  83 => 13,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}


    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Modifier un Match : </h4>

                    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.NomMatche) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\" {{ form_widget(form.NomMatche) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.NomArbitre) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\"  {{ form_widget(form.NomArbitre) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.tour) }}</label>
                        <div class=\"col-md-10\">
                            <input class=\"form-control\"  {{ form_widget(form.tour) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.date) }}</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.date) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-date-input\" class=\"col-md-2 col-form-label\">{{ form_label(form.time) }}</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.time) }}
                        </div>
                    </div>


                    {{ form_widget(form.NomArbitre) }}
                    {{ form_widget(form.tour) }}

                    {{ form_widget(form.date) }}
                    {{ form_widget(form.time) }}
                    {{ form_end(form) }}

                </div>
            </div> <!-- end col -->
        </div>
    </div>
{% endblock %}
", "matche/Update.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\matche\\Update.html.twig");
    }
}
