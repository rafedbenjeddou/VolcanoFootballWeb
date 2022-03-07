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

/* security/login.html.twig */
class __TwigTemplate_da2de8eb290bbc3dbd871fde426ba488e8648306d07b5dfc6a846301a93bbc8f extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "security/login.html.twig", 1);
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
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>connexion</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Connectez-vous Pour Continuer <span>Vers Volcano Football</span></h2>

                <p class=headParagraph></p>

                <form  action=\"\" method=\"post\">

                    ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "                        <div class=\"alert alert-danger\">les informations d'identification invalides !</div>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                        <div class=\"mb-3\">
                            Vous êtes connecté en tant que ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                        </div>
                    ";
        }
        // line 25
        echo "
                    <div class=form-group>
                        <input style=\"height: 60px; width: 49%; float: left; margin-right: 1% \" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus placeholder=\"Nom d'utilisateur\">
                    </div>

                    <div class=form-group>
                        <input style=\"height: 60px; width: 49%; margin-left: 1% \" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de Passe\">
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                    ";
        // line 48
        echo "

                    <button type=submit class=\"btn btn-red\" >Connexion</button>
                    <div class=form-message></div>

                    <div style=\"margin-top: 10px\">
                        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscrire");
        echo "\" class=\"text-muted\"><h4>S'inscrire</h4> </a>
                    </div>



                    <div style=\"margin-top: 10px\" class=\"mt-4\">
                        <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-muted\"><i class=\"mdi mdi-lock mr-1\"></i> Mot de passe oublié?</a>
                    </div>



                </form>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  134 => 54,  126 => 48,  120 => 35,  109 => 27,  105 => 25,  97 => 22,  94 => 21,  92 => 20,  89 => 19,  85 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}

    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>connexion</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Connectez-vous Pour Continuer <span>Vers Volcano Football</span></h2>

                <p class=headParagraph></p>

                <form  action=\"\" method=\"post\">

                    {% if error %}
                        <div class=\"alert alert-danger\">les informations d'identification invalides !</div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            Vous êtes connecté en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                        </div>
                    {% endif %}

                    <div class=form-group>
                        <input style=\"height: 60px; width: 49%; float: left; margin-right: 1% \" type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus placeholder=\"Nom d'utilisateur\">
                    </div>

                    <div class=form-group>
                        <input style=\"height: 60px; width: 49%; margin-left: 1% \" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Mot de Passe\">
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                    {#
                    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                    See https://symfony.com/doc/current/security/remember_me.html

                    <div class=\"checkbox mb-3\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>
                    #}


                    <button type=submit class=\"btn btn-red\" >Connexion</button>
                    <div class=form-message></div>

                    <div style=\"margin-top: 10px\">
                        <a href=\"{{ path('inscrire') }}\" class=\"text-muted\"><h4>S'inscrire</h4> </a>
                    </div>



                    <div style=\"margin-top: 10px\" class=\"mt-4\">
                        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-muted\"><i class=\"mdi mdi-lock mr-1\"></i> Mot de passe oublié?</a>
                    </div>



                </form>
            </div>


        </div>
        </div>
    </section>


{% endblock %}
", "security/login.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\VolcanoFootball-main\\templates\\security\\login.html.twig");
    }
}
