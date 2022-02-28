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

/* stade/Affiche.html.twig */
class __TwigTemplate_90c07e9dd12b3da815f09d831856b035eeeb53e3538f3ceaf6c0ea4de477ab6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "stade/Affiche.html.twig", 1);
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
    <div class=\"row\"  , style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">

                <div class=\"card-body\">


                    <h4 class=\"card-title\">Liste Des Stades</h4>

                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "notice"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "
                            <div class=\"alert alert-success\">
                                ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashbag", [], "any", false, false, false, 21), "get", [0 => "Danger"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom </th>
                            <th>Adresse </th>
                            <th>Capacite</th>
                            <th>Date Ouverture</th>
                            <th>Photo</th>
                            <th> update / Delete</th>




                        </tr>
                        </thead>
                        <tbody>
                        <tr ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo ">
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "adresse", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "dateouverture", [], "any", false, false, false, 47), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td><img style=\"height: 100px\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["s"], "photo", [], "any", false, false, false, 48)), "html", null, true);
            echo "\"/></td>
                            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UpdateStade", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"ri-pencil-fill\"></i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStade", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"ri-delete-bin-fill\"></i></td>

                        </tr";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo ">
                        <li><a href=\"http://127.0.0.1:8000/stade/AddStade\">Add Stade</a></li>

                        </tbody>
                    </table>
                </div>
            </div>
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
        return "stade/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  134 => 42,  116 => 26,  107 => 23,  104 => 22,  99 => 21,  89 => 17,  85 => 15,  81 => 14,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}

    <div class=\"row\"  , style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">

                <div class=\"card-body\">


                    <h4 class=\"card-title\">Liste Des Stades</h4>

                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                        {% for flashMessage in app.session.flashbag.get('notice') %}

                            <div class=\"alert alert-success\">
                                {{ flashMessage }}
                            </div>

                        {% endfor %}
                        {% for flashMessage in app.session.flashbag.get('Danger') %}
                            <div class=\"alert alert-danger\">
                                {{ flashMessage }}
                            </div>
                        {% endfor %}
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom </th>
                            <th>Adresse </th>
                            <th>Capacite</th>
                            <th>Date Ouverture</th>
                            <th>Photo</th>
                            <th> update / Delete</th>




                        </tr>
                        </thead>
                        <tbody>
                        <tr {% for s in stade %}>
                            <td>{{ s.id }}</td>
                            <td>{{ s.nom }}</td>
                            <td>{{ s.adresse }}</td>
                            <td>{{ s.capacite }}</td>
                            <td>{{ s.dateouverture | date('d-m-Y') }}</td>
                            <td><img style=\"height: 100px\" src=\"{{ asset('uploads/images/') ~ s .photo }}\"/></td>
                            <td><a href=\"{{ path('UpdateStade',{'id':s.id})}}\"><i class=\"ri-pencil-fill\"></i></a><a href=\"{{ path('deleteStade',{'id':s.id})}}\"><i class=\"ri-delete-bin-fill\"></i></td>

                        </tr{% endfor %}>
                        <li><a href=\"http://127.0.0.1:8000/stade/AddStade\">Add Stade</a></li>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('#datatable-buttons').DataTable();

    </script>
{% endblock %}", "stade/Affiche.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\stade\\Affiche.html.twig");
    }
}
