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

/* base-front.html.twig */
class __TwigTemplate_f446d0f2225d8f5652f798b18accc5648c20f38fe41b22a25fcd50c81d61b6ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'panier' => [$this, 'block_panier'],
            'activeAccueil' => [$this, 'block_activeAccueil'],
            'activeEquipes' => [$this, 'block_activeEquipes'],
            'activeMatches' => [$this, 'block_activeMatches'],
            'activeStades' => [$this, 'block_activeStades'],
            'activeHebergements' => [$this, 'block_activeHebergements'],
            'activeEvenements' => [$this, 'block_activeEvenements'],
            'activeBoutique' => [$this, 'block_activeBoutique'],
            'activeProfil' => [$this, 'block_activeProfil'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>VolcanoFootBall</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/vendor/modernizr.js"), "html", null, true);
        echo "></script>
</head>
<body>
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li>
                            ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 27
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">déconnecter</a>
                            ";
        } else {
            // line 29
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">S'INSCRIRE/SE CONNECTER</a>
                            ";
        }
        // line 31
        echo "                        </li>
                        ";
        // line 32
        $this->displayBlock('panier', $context, $blocks);
        // line 33
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"header-lower clearfix\">
            <div class=container>
                <div class=row><h1 class=logo><a href=\"\"><img src=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo.png"), "html", null, true);
        echo " alt=image></a></h1>
                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu style=\"margin-left: 20px; margin-bottom:2px\">
                                    <ul class=\"nav navbar-nav menu-bar\">
                                        <li><a href=\"#\" ";
        // line 49
        $this->displayBlock('activeAccueil', $context, $blocks);
        echo ">Accueil <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=\"#\" ";
        // line 51
        $this->displayBlock('activeEquipes', $context, $blocks);
        echo ">Equipes <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" ";
        // line 53
        $this->displayBlock('activeMatches', $context, $blocks);
        echo ">Matches <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" ";
        // line 55
        $this->displayBlock('activeStades', $context, $blocks);
        echo ">Stades <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" ";
        // line 57
        $this->displayBlock('activeHebergements', $context, $blocks);
        echo ">Hébergements <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" ";
        // line 59
        $this->displayBlock('activeEvenements', $context, $blocks);
        echo ">Evenements <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a ";
        // line 61
        $this->displayBlock('activeBoutique', $context, $blocks);
        echo " href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherProduitsFront");
        echo "\">Boutique <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 64
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" ";
            $this->displayBlock('activeProfil', $context, $blocks);
            echo ">Profil <span></span> <span></span> <span></span>
                                                    <span></span></a></li>
                                        ";
        }
        // line 67
        echo "                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
      </div>
    </header>

    ";
        // line 77
        $this->displayBlock('js', $context, $blocks);
        // line 81
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "    <footer class=footer-type01>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src=";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo.png"), "html", null, true);
        echo " alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=\"\" class=bigsocial-link><i
                                            class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"\" class=bigsocial-link target=_blank><i
                                            class=\"fa fa-twitter\"></i></a></li>
                        </ul>
                        <p><a target=\"_blank\" href=\"\"></a></p></div>
                    <div class=footer-appstore>
                        <figure><a ><img src=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/appstore/apple.png"), "html", null, true);
        echo " alt=image></a></figure>
                        <figure><a ><img src=";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/appstore/google.png"), "html", null, true);
        echo " alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "        <link rel=stylesheet href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor.css"), "html", null, true);
        echo "\">
        <link rel=stylesheet href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/style.css"), "html", null, true);
        echo "\">
        <link rel=stylesheet type=text/css href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/layerslider.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_activeAccueil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeAccueil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeAccueil"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_activeEquipes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeEquipes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeEquipes"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_activeMatches($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeMatches"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeMatches"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_activeStades($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeStades"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeStades"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_activeHebergements($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeHebergements"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeHebergements"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_activeEvenements($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeEvenements"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeEvenements"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_activeBoutique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeBoutique"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeBoutique"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_activeProfil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeProfil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeProfil"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 78
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/vendor/vendor.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 82
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 82,  453 => 81,  441 => 79,  436 => 78,  426 => 77,  408 => 64,  390 => 61,  372 => 59,  354 => 57,  336 => 55,  318 => 53,  300 => 51,  282 => 49,  264 => 32,  252 => 14,  248 => 13,  243 => 12,  233 => 11,  211 => 99,  207 => 98,  193 => 87,  188 => 84,  185 => 81,  183 => 77,  171 => 67,  162 => 64,  160 => 63,  153 => 61,  148 => 59,  143 => 57,  138 => 55,  133 => 53,  128 => 51,  123 => 49,  110 => 39,  102 => 33,  100 => 32,  97 => 31,  91 => 29,  85 => 27,  83 => 26,  69 => 16,  67 => 11,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>VolcanoFootBall</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
    {% block css %}
        <link rel=stylesheet href=\"{{ asset('front-office/vendor.css') }}\">
        <link rel=stylesheet href=\"{{ asset('front-office/style.css') }}\">
        <link rel=stylesheet type=text/css href=\"{{ asset('front-office/css/layerslider.css') }}\">
    {% endblock %}
    <script src={{ asset('front-office/js/vendor/modernizr.js') }}></script>
</head>
<body>
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li>
                            {% if is_granted('ROLE_USER') %}
                                <a href=\"{{ path('app_logout') }}\">déconnecter</a>
                            {% else %}
                                <a href=\"{{ path('app_login') }}\">S'INSCRIRE/SE CONNECTER</a>
                            {% endif %}
                        </li>
                        {% block panier %}{% endblock %}
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"header-lower clearfix\">
            <div class=container>
                <div class=row><h1 class=logo><a href=\"\"><img src={{ asset('front-office/images/logo.png') }} alt=image></a></h1>
                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu style=\"margin-left: 20px; margin-bottom:2px\">
                                    <ul class=\"nav navbar-nav menu-bar\">
                                        <li><a href=\"#\" {% block activeAccueil %}{% endblock %}>Accueil <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=\"#\" {% block activeEquipes %}{% endblock %}>Equipes <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" {% block activeMatches %}{% endblock %}>Matches <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" {% block activeStades %}{% endblock %}>Stades <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" {% block activeHebergements %}{% endblock %}>Hébergements <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=\"#\" {% block activeEvenements %}{% endblock %}>Evenements <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a {% block activeBoutique %}{% endblock %} href=\"{{ path('AfficherProduitsFront') }}\">Boutique <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        {% if is_granted('ROLE_USER') %}
                                            <li><a href=\"{{ path('Profil',{'id':app.user.id}) }}\" {% block activeProfil %}{% endblock %}>Profil <span></span> <span></span> <span></span>
                                                    <span></span></a></li>
                                        {% endif %}
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
      </div>
    </header>

    {% block js %}
        <script src={{ asset('front-office/js/vendor/vendor.js') }}></script>
        <script src={{ asset('front-office/js/main.js') }}></script>
    {% endblock %}
    {% block content %}

    {% endblock %}
    <footer class=footer-type01>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src={{ asset('front-office/images/logo.png') }} alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=\"\" class=bigsocial-link><i
                                            class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"\" class=bigsocial-link target=_blank><i
                                            class=\"fa fa-twitter\"></i></a></li>
                        </ul>
                        <p><a target=\"_blank\" href=\"\"></a></p></div>
                    <div class=footer-appstore>
                        <figure><a ><img src={{ asset('front-office/images/appstore/apple.png') }} alt=image></a></figure>
                        <figure><a ><img src={{ asset('front-office/images/appstore/google.png') }} alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

</body>

</html>", "base-front.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\VolcanoFootball-main\\templates\\base-front.html.twig");
    }
}
