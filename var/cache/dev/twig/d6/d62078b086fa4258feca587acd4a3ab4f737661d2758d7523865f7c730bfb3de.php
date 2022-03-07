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

/* commande/panier.html.twig */
class __TwigTemplate_f0fbda68270f0857f3fc19d7ddec60d35e44f710306fb527612e646de158d4ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'panier' => [$this, 'block_panier'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/panier.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "commande/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        // line 4
        echo "
    <li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EnrichirPanier");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span>
                    ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "                        ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "
                    ";
        } else {
            // line 9
            echo "                        0
                    ";
        }
        // line 11
        echo "            </span>)</span></a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>notre <span>boutique</span></h2></div>
    </div>
    <section class=cartwrap>
        <div class=cartshop>
            <div class=bg-red></div>
            <div class=container>
                <div class=row>
                    <div class=modal-body>
                        <div class=\"cartHeader clearfix\">
                            <div class=header01><h4>Votre Panier</h4></div>
                            <div class=header02><h4><span>Vous Avez Sélectionné <span >";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 29, $this->source); })())), "html", null, true);
        echo "</span> Produits</span>
                                    <a><i class=\"fa fa-cart-plus\"></i> <span >";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "</span></a></h4>

                                <p></p>

                                <p class=datetime></p></div>
                        </div>
                        <div class=\"card-item clearfix\">
                            <div>
                                <div class=\"big-content medium-content\"><h4>Nom du produit</h4></div>
                                <div class=\"big-content medium-content\"><h4>Quantité</h4></div>
                                <div class=\"big-content small-content\"><h4>Prix</h4></div>
                            </div>
                            <div>
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "                                    <div class=\"clearfix\">
                                        <div class=\"big-content medium-content\">
                                            <div class=\"product-cart-wrap\">
                                                <figure>
                                                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 48), "photo", [], "any", false, false, false, 48)), "html", null, true);
            echo "\">
                                                </figure>

                                                <h5>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</h5>
                                            </div>
                                        </div>

                                        <div class=\"big-content medium-content productQuantity\">
                                            <h5>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantite", [], "any", false, false, false, 56), "html", null, true);
            echo "</h5>
                                        </div>

                                        <div class=\"big-content small-content\">
                                            <h5>";
            // line 60
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 60), "prix", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["p"], "quantite", [], "any", false, false, false, 60)), "html", null, true);
            echo "\$</h5>
                                        </div>

                                        <div class=\"big-content small-content\" style=\"margin-top: 20px; \">
                                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerDuPanier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" style=\"color: red\">
                                                Supprimer
                                            </a>
                                        </div>


                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </div>
                            <div class=\"card-item cart-total clearfix\">
                                <div class=\"big-content medium-content\"><h4>Coût Total</h4></div>
                                <div class=\"big-content small-content\"><h4 >";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["coutTotal"]) || array_key_exists("coutTotal", $context) ? $context["coutTotal"] : (function () { throw new RuntimeError('Variable "coutTotal" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\$</h4></div>
                            </div>
                        </div>
                        <div class=modal-footer>

                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterCommandeFront");
        echo "\" class=btn-red>Commandez maintenant</a>
                        </div>
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
        return "commande/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  201 => 75,  196 => 72,  182 => 64,  175 => 60,  168 => 56,  160 => 51,  154 => 48,  148 => 44,  144 => 43,  128 => 30,  124 => 29,  110 => 17,  100 => 16,  88 => 11,  84 => 9,  78 => 7,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block panier %}

    <li><a href=\"{{ path('EnrichirPanier') }}\"><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span>
                    {% if panier|length > 0 %}
                        {{ panier|length }}
                    {% else %}
                        0
                    {% endif %}
            </span>)</span></a></li>

{% endblock %}


{% block content %}
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>notre <span>boutique</span></h2></div>
    </div>
    <section class=cartwrap>
        <div class=cartshop>
            <div class=bg-red></div>
            <div class=container>
                <div class=row>
                    <div class=modal-body>
                        <div class=\"cartHeader clearfix\">
                            <div class=header01><h4>Votre Panier</h4></div>
                            <div class=header02><h4><span>Vous Avez Sélectionné <span >{{ panier|length }}</span> Produits</span>
                                    <a><i class=\"fa fa-cart-plus\"></i> <span >{{ panier|length }}</span></a></h4>

                                <p></p>

                                <p class=datetime></p></div>
                        </div>
                        <div class=\"card-item clearfix\">
                            <div>
                                <div class=\"big-content medium-content\"><h4>Nom du produit</h4></div>
                                <div class=\"big-content medium-content\"><h4>Quantité</h4></div>
                                <div class=\"big-content small-content\"><h4>Prix</h4></div>
                            </div>
                            <div>
                                {% for p in panier %}
                                    <div class=\"clearfix\">
                                        <div class=\"big-content medium-content\">
                                            <div class=\"product-cart-wrap\">
                                                <figure>
                                                    <img src=\"{{ asset('uploads/images/') ~ p.produit.photo }}\">
                                                </figure>

                                                <h5>{{ p.produit.nom }}</h5>
                                            </div>
                                        </div>

                                        <div class=\"big-content medium-content productQuantity\">
                                            <h5>{{ p.quantite }}</h5>
                                        </div>

                                        <div class=\"big-content small-content\">
                                            <h5>{{ p.produit.prix * p.quantite }}\$</h5>
                                        </div>

                                        <div class=\"big-content small-content\" style=\"margin-top: 20px; \">
                                            <a href=\"{{ path('SupprimerDuPanier',{'id':p.produit.id}) }}\" style=\"color: red\">
                                                Supprimer
                                            </a>
                                        </div>


                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"card-item cart-total clearfix\">
                                <div class=\"big-content medium-content\"><h4>Coût Total</h4></div>
                                <div class=\"big-content small-content\"><h4 >{{ coutTotal }}\$</h4></div>
                            </div>
                        </div>
                        <div class=modal-footer>

                            <a href=\"{{ path('AjouterCommandeFront') }}\" class=btn-red>Commandez maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


{% endblock %}", "commande/panier.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\commande\\panier.html.twig");
    }
}
