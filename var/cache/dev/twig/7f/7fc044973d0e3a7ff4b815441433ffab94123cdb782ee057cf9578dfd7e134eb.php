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

/* reservationk/offre.html.twig */
class __TwigTemplate_dff2df2306c0c1b22d23051b052a0dfee8b9c9b1deedb5c7d304d4116f84dd69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/offre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/offre.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "reservationk/offre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Our Offres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <section class=social-media>
        <div class=\"container\">
            <div class=\"social-media\">
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"monthly_tab\" role=\"tabpanel\">
                        <div class=\"plans150\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-dot-circle\"></i>
                                        </div>
                                        <h4>BASIC</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>50 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Sandwich</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationk", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })()), "type" => "BASIC"]), "html", null, true);
        echo "\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-moon\"></i>
                                        </div>
                                        <h4>STANDARD</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>80 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Boissons</p></li>
                                            <li><p>Plats</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationk", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "type" => "STANDARD"]), "html", null, true);
        echo "\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-gem\"></i>
                                        </div>
                                        <h4>VIP</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>200 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Boissons</p></li>
                                            <li><p>Couscous</p></li>
                                            <li><p>Paquet De Cigarette</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationk", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })()), "type" => "VIP"]), "html", null, true);
        echo "\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade show\" id=\"yearly_tab\" role=\"tabpanel\">
                        <div class=\"plans150\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-dot-circle\"></i>
                                        </div>
                                        <h4>BASIC PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$500.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>500 Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-moon\"></i>
                                        </div>
                                        <h4>STANDARD PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$1000.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>1000 Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-gem\"></i>
                                        </div>
                                        <h4>PROFESSNIONAL PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$2000.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Unlimited Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"btn btn-info\" >
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#monthly_tab\" id=\"monthly-tab\" data-toggle=\"tab\">Les Type De Reservation</a>
                </li>
            </div>
        </div>
    </section>
    <section class=social-media>
        <div class=container>
            <div class=row>
                <ul class=socialinfo>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-twitter\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-facebook\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-behance\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Title Start -->
    <!-- Body Start -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservationk/offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 70,  136 => 49,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Our Offres{% endblock %}

{% block content %}

    <section class=social-media>
        <div class=\"container\">
            <div class=\"social-media\">
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"monthly_tab\" role=\"tabpanel\">
                        <div class=\"plans150\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-dot-circle\"></i>
                                        </div>
                                        <h4>BASIC</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>50 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Sandwich</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"{{path('reservationk', {'id': id , 'type':'BASIC'})}}\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-moon\"></i>
                                        </div>
                                        <h4>STANDARD</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>80 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Boissons</p></li>
                                            <li><p>Plats</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"{{path('reservationk', {'id': id , 'type':'STANDARD'})}}\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-gem\"></i>
                                        </div>
                                        <h4>VIP</h4>
                                        <div class=\"headline01 largepoint\">
                                            <span>200 TND</span>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Bouteille D'eau</p></li>
                                            <li><p>Boissons</p></li>
                                            <li><p>Couscous</p></li>
                                            <li><p>Paquet De Cigarette</p></li>
                                            <li><p>On espere que notre service est a la hauteur , Vous Etes Le bienvenue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"{{path('reservationk', {'id': id , 'type':'VIP'})}}\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade show\" id=\"yearly_tab\" role=\"tabpanel\">
                        <div class=\"plans150\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-dot-circle\"></i>
                                        </div>
                                        <h4>BASIC PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$500.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>500 Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-moon\"></i>
                                        </div>
                                        <h4>STANDARD PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$1000.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>1000 Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"plan_item\">
                                        <div class=\"plan_icon\">
                                            <i class=\"far fa-gem\"></i>
                                        </div>
                                        <h4>PROFESSNIONAL PLANS</h4>
                                        <div class=\"plan_price\">
                                            <span>\$2000.00</span><ins>Yearly</ins>
                                        </div>
                                        <ul class=\"plan_dt\">
                                            <li><p>Unlimited Listing</p></li>
                                            <li><p>365 days visibility</p></li>
                                            <li><p>Suspendisse id odio lobortis, molestie dui a, aliquam risus. Praesent pulvinar, lectus a pharetra congue.</p></li>
                                        </ul>
                                        <div class=\"btn btn-info\">
                                            <a href=\"checkout.html\">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"btn btn-info\" >
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#monthly_tab\" id=\"monthly-tab\" data-toggle=\"tab\">Les Type De Reservation</a>
                </li>
            </div>
        </div>
    </section>
    <section class=social-media>
        <div class=container>
            <div class=row>
                <ul class=socialinfo>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-twitter\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-facebook\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    <li><a href=\"#\">
                            <div class=sociallink><i class=\"fa fa-behance\"></i></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Title Start -->
    <!-- Body Start -->


{% endblock %}", "reservationk/offre.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\reservationk\\offre.html.twig");
    }
}
