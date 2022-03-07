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

/* user/profilFront.html.twig */
class __TwigTemplate_005fdb806b941df14eb3ae8b97a0d7bcacb0a34bec1127eefcfddac7da2f7dfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activeProfil' => [$this, 'block_activeProfil'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profilFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profilFront.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "user/profilFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_activeProfil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeProfil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeProfil"));

        // line 4
        echo "    class=active
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
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Profil</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Voici Votre <span>Informations</span></h2>

                <p class=headParagraph></p>
                <div  class=\"feedbackContact-open formcontact clearfix\">

                    <div class=form-group>
                        Votre Nom d'utilisateur
                        <div type=text class=\"form-control\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Nom
                        <div type=text class=form-control>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Prénom
                        <div type=text class=form-control>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Genre
                        <div type=text class=form-control>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 35, $this->source); })()), "genre", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Age
                        <div type=number class=form-control>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 39, $this->source); })()), "age", [], "any", false, false, false, 39), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Pays
                        <div type=text class=form-control>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 43, $this->source); })()), "pays", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Email
                        <div type=text class=form-control>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "</div>
                    </div>
                    <div class=form-group>
                        Votre Numéro de Téléphone
                        <div type=number class=form-control>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 51, $this->source); })()), "numTel", [], "any", false, false, false, 51), "html", null, true);
        echo "</div>
                    </div>

                    <a class=\"btn\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierProfil", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">Modifier Profil</a>

                </div>

            </div>


        </div>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profilFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  155 => 51,  148 => 47,  141 => 43,  134 => 39,  127 => 35,  120 => 31,  113 => 27,  106 => 23,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block activeProfil %}
    class=active
{% endblock %}


{% block content %}

    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Profil</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Voici Votre <span>Informations</span></h2>

                <p class=headParagraph></p>
                <div  class=\"feedbackContact-open formcontact clearfix\">

                    <div class=form-group>
                        Votre Nom d'utilisateur
                        <div type=text class=\"form-control\">{{ profil.username }}</div>
                    </div>
                    <div class=form-group>
                        Votre Nom
                        <div type=text class=form-control>{{ profil.nom }}</div>
                    </div>
                    <div class=form-group>
                        Votre Prénom
                        <div type=text class=form-control>{{ profil.prenom }}</div>
                    </div>
                    <div class=form-group>
                        Votre Genre
                        <div type=text class=form-control>{{ profil.genre }}</div>
                    </div>
                    <div class=form-group>
                        Votre Age
                        <div type=number class=form-control>{{ profil.age }}</div>
                    </div>
                    <div class=form-group>
                        Votre Pays
                        <div type=text class=form-control>{{ profil.pays }}</div>
                    </div>
                    <div class=form-group>
                        Votre Email
                        <div type=text class=form-control>{{ profil.email }}</div>
                    </div>
                    <div class=form-group>
                        Votre Numéro de Téléphone
                        <div type=number class=form-control>{{ profil.numTel }}</div>
                    </div>

                    <a class=\"btn\" href=\"{{ path('ModifierProfil',{'id':profil.id}) }}\">Modifier Profil</a>

                </div>

            </div>


        </div>
        </div>
    </section>


{% endblock %}
", "user/profilFront.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\user\\profilFront.html.twig");
    }
}
