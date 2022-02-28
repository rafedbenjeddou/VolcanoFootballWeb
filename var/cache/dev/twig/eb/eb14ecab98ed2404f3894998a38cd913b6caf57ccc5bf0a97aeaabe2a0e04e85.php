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

/* user/afficher.html.twig */
class __TwigTemplate_94740f351350aca9b6456bf406217b22ccd8d9e3e8dd84c7725fde9e445799c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "user/afficher.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <!-- start page title -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between\">
                <!--<h4 class=\"mb-0\">Responsive Table</h4>-->

                <div class=\"page-title-right\">
                    <ol class=\"breadcrumb m-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Utilisateur</a></li>
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
                    <h4 class=\"card-title\">Tableau des Utilisateurs</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Username</th>
                                    <th >Nom</th>
                                    <th >Prenom</th>
                                    <th >Genre</th>
                                    <th >Age</th>
                                    <th >Pays</th>
                                    <th >Email</th>
                                    <th >Numéro de Téléphone</th>
                                    <th >Role</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo ">
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "genre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "age", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "pays", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "numTel", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                    <td>

                                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 68
                echo "                                            ";
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    // line 69
                    echo "                                                Utilisateur
                                            ";
                } elseif ((0 === twig_compare(                // line 70
$context["role"], "ROLE_ADMIN"))) {
                    // line 71
                    echo "                                                Administrateur
                                            ";
                }
                // line 73
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierUser", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerUser", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
                                    </td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return "user/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 80,  214 => 78,  210 => 77,  205 => 74,  199 => 73,  195 => 71,  193 => 70,  190 => 69,  187 => 68,  183 => 67,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  149 => 57,  145 => 56,  139 => 55,  91 => 9,  81 => 8,  69 => 4,  59 => 3,  36 => 1,);
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
                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Utilisateur</a></li>
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
                    <h4 class=\"card-title\">Tableau des Utilisateurs</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"table-rep-plugin\">
                        <div class=\"table-responsive mb-0\" data-pattern=\"priority-columns\">
                            <table id=\"tech-companies-1\" class=\"table\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th >Username</th>
                                    <th >Nom</th>
                                    <th >Prenom</th>
                                    <th >Genre</th>
                                    <th >Age</th>
                                    <th >Pays</th>
                                    <th >Email</th>
                                    <th >Numéro de Téléphone</th>
                                    <th >Role</th>
                                    <th style=\"width: 120px;\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr {% for u in users %}>
                                    <td>{{ u.id }}</td>
                                    <td>{{ u.username }}</td>
                                    <td>{{ u.nom }}</td>
                                    <td>{{ u.prenom }}</td>
                                    <td>{{ u.genre }}</td>
                                    <td>{{ u.age }}</td>
                                    <td>{{ u.pays }}</td>
                                    <td>{{ u.email }}</td>
                                    <td>{{ u.numTel }}</td>
                                    <td>

                                        {% for role in u.roles %}
                                            {% if role == \"ROLE_USER\" %}
                                                Utilisateur
                                            {% elseif role == \"ROLE_ADMIN\" %}
                                                Administrateur
                                            {% endif %}
                                        {% endfor %}

                                    </td>
                                    <td>
                                        <a href=\"{{ path('ModifierUser',{'id':u.id}) }}\" class=\"mr-3 text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\" data-original-title=\"Edit\"><i class=\"mdi mdi-pencil font-size-18\"></i></a>
                                        <a href=\"{{ path('SupprimerUser',{'id':u.id}) }}\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" data-original-title=\"Delete\"><i class=\"mdi mdi-trash-can font-size-18\"></i></a>
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
", "user/afficher.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\user\\afficher.html.twig");
    }
}
