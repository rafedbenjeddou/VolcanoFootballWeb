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

/* kiosque/Affiche.html.twig */
class __TwigTemplate_f9f4e43e7ca7387963b9786b1dc0c91fc9be14adaed1d760a16cfa6a05d18b8e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kiosque/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kiosque/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "kiosque/Affiche.html.twig", 1);
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



    <div class=\"row\" , style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">


                <div class=\"card-body\">

                    <h4 class=\"card-title\">Liste Des Kiosque</h4>
                    <table id=\"tech-companies-1\" class=\"table\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "flashbag", [], "any", false, false, false, 16), "get", [0 => "Message"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 18
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashbag", [], "any", false, false, false, 21), "get", [0 => "Alerte"], "method", false, false, false, 21));
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
                            <th>id</th>
                            <th>Stade</th>
                            <th>Nom </th>
                            <th>Type</th>
                            <th>Photo Kiosque</th>
                            <th>Update /Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kiosque"]) || array_key_exists("kiosque", $context) ? $context["kiosque"] : (function () { throw new RuntimeError('Variable "kiosque" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            echo ">
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["k"], "getStade", [], "method", false, false, false, 41), "getNom", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "Nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "Type", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td><img style=\"height: 100px\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["k"], "photo", [], "any", false, false, false, 44)), "html", null, true);
            echo "\"/></td>


                            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UpdateKiosque", ["id" => twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><i class=\"ri-pencil-fill\"></i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteKiosque", ["id" => twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><i class=\"ri-delete-bin-fill\"></i></a></td>

                        </tr";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo ">
                        <li><a href=\"http://127.0.0.1:8000/kiosque/AddKiosque\">Add Kiosque</a></li>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#tech-companies-1').DataTable();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "kiosque/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  159 => 47,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  131 => 39,  116 => 26,  107 => 23,  104 => 22,  99 => 21,  90 => 18,  87 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}




    <div class=\"row\" , style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">


                <div class=\"card-body\">

                    <h4 class=\"card-title\">Liste Des Kiosque</h4>
                    <table id=\"tech-companies-1\" class=\"table\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                        {% for flashMessage in app.session.flashbag.get('Message') %}
                            <div class=\"alert alert-success\">
                                {{ flashMessage }}
                            </div>
                        {% endfor %}
                        {% for flashMessage in app.session.flashbag.get('Alerte') %}
                            <div class=\"alert alert-danger\">
                                {{ flashMessage }}
                            </div>
                        {% endfor %}
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Stade</th>
                            <th>Nom </th>
                            <th>Type</th>
                            <th>Photo Kiosque</th>
                            <th>Update /Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr {% for k in kiosque %}>
                            <td>{{ k.id }}</td>
                            <td>{{ k.getStade().getNom() }}</td>
                            <td>{{ k.Nom }}</td>
                            <td>{{ k.Type }}</td>
                            <td><img style=\"height: 100px\" src=\"{{ asset('uploads/images/') ~ k.photo }}\"/></td>


                            <td><a href=\"{{ path('UpdateKiosque',{'id':k.id})}}\"><i class=\"ri-pencil-fill\"></i></a><a href=\"{{ path('deleteKiosque',{'id':k.id})}}\"><i class=\"ri-delete-bin-fill\"></i></a></td>

                        </tr{% endfor %}>
                        <li><a href=\"http://127.0.0.1:8000/kiosque/AddKiosque\">Add Kiosque</a></li>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#tech-companies-1').DataTable();
    </script>
{% endblock %}", "kiosque/Affiche.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\kiosque\\Affiche.html.twig");
    }
}
