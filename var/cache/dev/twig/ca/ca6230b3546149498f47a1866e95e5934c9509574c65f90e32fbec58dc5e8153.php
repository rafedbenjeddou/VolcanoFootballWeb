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

/* produit/afficher.html.twig */
class __TwigTemplate_b4aa034396a12b0d1e302b15cafa8440e23021d071d7b795732c0571d8817ae4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/afficher.html.twig", 1);
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
    <!-- start page title -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between\">
                <!--<h4 class=\"mb-0\">Responsive Table</h4>-->

                <div class=\"page-title-right\">
                    <ol class=\"breadcrumb m-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produit</a></li>
                        <li class=\"breadcrumb-item active\">Afficher</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start row -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Tableau Des Produits</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Nom</th>
                                    <th >Type</th>
                                    <th >Taille</th>
                                    <th >Couleur</th>
                                    <th >Nombre d'Etoiles</th>
                                    <th >Description</th>
                                    <th >Prix</th>
                                    <th >Photo</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "type", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "taille", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "couleur", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbrEtoiles", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td><img style=\"height: 100px\" src=\"";
            // line 62
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["p"], "photo", [], "any", false, false, false, 62)), "html", null, true);
            echo "\"/></td>
                                    <td>
                                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
                                    </td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo ">
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <script>
        \$('#tech-companies-1').DataTable();
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  186 => 65,  182 => 64,  177 => 62,  173 => 61,  169 => 60,  165 => 59,  161 => 58,  157 => 57,  153 => 56,  149 => 55,  145 => 54,  139 => 53,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block user %}
    {{ user }}
{% endblock %}

{% block content %}

    <!-- start page title -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between\">
                <!--<h4 class=\"mb-0\">Responsive Table</h4>-->

                <div class=\"page-title-right\">
                    <ol class=\"breadcrumb m-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produit</a></li>
                        <li class=\"breadcrumb-item active\">Afficher</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start row -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Tableau Des Produits</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Nom</th>
                                    <th >Type</th>
                                    <th >Taille</th>
                                    <th >Couleur</th>
                                    <th >Nombre d'Etoiles</th>
                                    <th >Description</th>
                                    <th >Prix</th>
                                    <th >Photo</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr {% for p in produit %}>
                                    <td>{{ p.id }}</td>
                                    <td>{{ p.nom }}</td>
                                    <td>{{ p.type }}</td>
                                    <td>{{ p.taille }}</td>
                                    <td>{{ p.couleur }}</td>
                                    <td>{{ p.nbrEtoiles }}</td>
                                    <td>{{ p.description }}</td>
                                    <td>{{ p.prix }}</td>
                                    <td><img style=\"height: 100px\" src=\"{{ asset('uploads/images/') ~ p.photo }}\"/></td>
                                    <td>
                                        <a href=\"{{ path('ModifierProduit',{'id':p.id}) }}\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"{{ path('SupprimerProduit',{'id':p.id}) }}\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
                                    </td>
                                </tr {% endfor %}>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <script>
        \$('#tech-companies-1').DataTable();
    </script>

{% endblock %}
", "produit/afficher.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\produit\\afficher.html.twig");
    }
}
