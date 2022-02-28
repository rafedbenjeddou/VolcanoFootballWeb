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

/* commande/afficher.html.twig */
class __TwigTemplate_f38224425f509b620507c434e6289607d19d3c6d0553a7cf4fe56fda1ceb8128 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "commande/afficher.html.twig", 1);
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
                    <h4 class=\"card-title\">Tableau des Commandes</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Nom d'Utilisateur</th>
                                    <th >Nom de Produit</th>
                                    <th >Quantité</th>
                                    <th >Date d'ajout</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "produit", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "quantite", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateAjout", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierCommande", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerCommande", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
                                    </td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        return "commande/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  166 => 57,  162 => 56,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  141 => 50,  135 => 49,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
                    <h4 class=\"card-title\">Tableau des Commandes</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Nom d'Utilisateur</th>
                                    <th >Nom de Produit</th>
                                    <th >Quantité</th>
                                    <th >Date d'ajout</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr {% for c in commandes %}>
                                    <td>{{ c.id }}</td>
                                    <td>{{ c.user.username }}</td>
                                    <td>{{ c.produit.nom }}</td>
                                    <td>{{ c.quantite }}</td>
                                    <td>{{ c.dateAjout|date('Y-m-d H:i:s') }}</td>
                                    <td>
                                        <a href=\"{{ path('ModifierCommande',{'id':c.id}) }}\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"{{ path('SupprimerCommande',{'id':c.id}) }}\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
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
", "commande/afficher.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\commande\\afficher.html.twig");
    }
}
