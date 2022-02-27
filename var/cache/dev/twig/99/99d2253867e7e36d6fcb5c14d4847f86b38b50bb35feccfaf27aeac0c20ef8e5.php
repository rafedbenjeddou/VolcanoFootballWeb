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

/* matche/Affiche.html.twig */
class __TwigTemplate_9dc3ad1056fac185f357277be88c13dda9b42b4edbf0da09845284e281d67d58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "matche/Affiche.html.twig", 1);
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
        echo "    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">

                    <h4  class=\"card-title\">Liste Des Matchs</h4>
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>NomMatche</th>
                            <th>NomArbitre</th>
                            <th>Stade</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Tour</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) || array_key_exists("matche", $context) ? $context["matche"] : (function () { throw new RuntimeError('Variable "matche" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo ">
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomMatche", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomArbitre", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "stade", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "date", [], "any", false, false, false, 35), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "time", [], "any", false, false, false, 36), "H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "tour", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMatche", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"ri-pencil-fill\"></i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteMatche", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"ri-delete-bin-fill\"></i></a></td>


                        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo ">
                        </tbody>
                    </table>
                    <td><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeM");
        echo "\">Imprimer</a></td>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#datatable-buttons').DataTable()
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "matche/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 44,  156 => 41,  144 => 38,  140 => 37,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  110 => 30,  92 => 14,  83 => 11,  80 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}
    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">

                    <h4  class=\"card-title\">Liste Des Matchs</h4>
                    {% for message in app.flashes('info') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>NomMatche</th>
                            <th>NomArbitre</th>
                            <th>Stade</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Tour</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr {% for m in matche %}>
                            <td>{{ m.id }}</td>
                            <td>{{ m.NomMatche }}</td>
                            <td>{{ m.NomArbitre }}</td>
                            <td>{{ m.stade.nom }}</td>
                            <td>{{ m.date|date('d-m-Y') }}</td>
                            <td>{{ m.time|date(\"H:i:s\")}}</td>
                            <td>{{ m.tour }}</td>
                            <td><a href=\"{{ path('modifierMatche',{'id':m.id}) }}\"><i class=\"ri-pencil-fill\"></i></a><a href=\"{{ path('deleteMatche',{'id':m.id}) }}\"><i class=\"ri-delete-bin-fill\"></i></a></td>


                        </tr {% endfor %}>
                        </tbody>
                    </table>
                    <td><a href=\"{{ path('ListeM') }}\">Imprimer</a></td>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#datatable-buttons').DataTable()
    </script>
{% endblock %}
", "matche/Affiche.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\matche\\Affiche.html.twig");
    }
}
