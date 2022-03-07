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

/* user/profilBack.html.twig */
class __TwigTemplate_438015ce4b61f97087debc1057baac7b3e9741dc11035805972e236b6b8ad071 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profilBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profilBack.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "user/profilBack.html.twig", 1);
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

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Profil</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Nom d'utilisateur</label>
                        <div class=\"col-md-10\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\" id=\"validationTooltipUsernamePrepend\">@</span>
                                </div>
                                <div class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Nom</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Prénom</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">Votre Genre</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 56, $this->source); })()), "genre", [], "any", false, false, false, 56), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Age</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 63, $this->source); })()), "age", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Pays</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 70, $this->source); })()), "pays", [], "any", false, false, false, 70), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Email</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Numéro de Téléphone</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 84, $this->source); })()), "numTel", [], "any", false, false, false, 84), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">Votre Roles</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 92, $this->source); })()), "roles", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 93
            echo "                                    ";
            if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                // line 94
                echo "                                        Utilisateur
                                    ";
            } elseif ((0 === twig_compare(            // line 95
$context["role"], "ROLE_ADMIN"))) {
                // line 96
                echo "                                        Administrateur
                                    ";
            }
            // line 98
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                            </div>
                        </div>
                    </div>

                    <a class=\"btn btn-primary waves-effect waves-light\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierUser", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\">Modifier Votre Informations</a>

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
        return "user/profilBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 103,  224 => 99,  218 => 98,  214 => 96,  212 => 95,  209 => 94,  206 => 93,  202 => 92,  191 => 84,  181 => 77,  171 => 70,  161 => 63,  151 => 56,  141 => 49,  131 => 42,  120 => 34,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Profil</h4>
                    <p class=\"card-title-desc\"></p>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Nom d'utilisateur</label>
                        <div class=\"col-md-10\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\" id=\"validationTooltipUsernamePrepend\">@</span>
                                </div>
                                <div class=\"form-control\">{{ profil.username }}</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Nom</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.nom }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Prénom</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.prenom }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">Votre Genre</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.genre }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Age</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.age }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Pays</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.pays }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Email</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.email }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-md-2 col-form-label\">Votre Numéro de Téléphone</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">{{ profil.numTel }}</div>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-md-2 col-form-label\">Votre Roles</label>
                        <div class=\"col-md-10\">
                            <div class=\"form-control\">
                                {% for role in profil.roles %}
                                    {% if role == \"ROLE_USER\" %}
                                        Utilisateur
                                    {% elseif role == \"ROLE_ADMIN\" %}
                                        Administrateur
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>

                    <a class=\"btn btn-primary waves-effect waves-light\" href=\"{{ path('ModifierUser',{'id':profil.id}) }}\">Modifier Votre Informations</a>

                </div>
            </div>
        </div>
    </div>


{% endblock %}



", "user/profilBack.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\user\\profilBack.html.twig");
    }
}
