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

/* produit/afficherFront.html.twig */
class __TwigTemplate_b6152c4006b03508124cb0c663e9a580e7a98d4b949c798621088126997aa5e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activeBoutique' => [$this, 'block_activeBoutique'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficherFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficherFront.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/afficherFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_activeBoutique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeBoutique"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activeBoutique"));

        // line 4
        echo "class=active
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        // line 8
        echo "
    <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EnrichirPanier");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span>
                        ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 10, $this->source); })())), 0))) {
            // line 11
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 11, $this->source); })())), "html", null, true);
            echo "
                        ";
        } else {
            // line 13
            echo "                            0
                        ";
        }
        // line 15
        echo "                </span>)</span></a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>Notre <span>Magasin</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Meilleur Magasin <span>d'Accessoires de Football</span></h2>

                <p class=headParagraph></p>

                <div class=innerWrapper>
                    <aside class=\"widgetinner clearfix\">
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>Chercher par Couleur</div>
                            <div class=sizepic><a href=# class=bg-bluecolor></a> <a href=# class=bg-redcolor></a> <a
                                        href=# class=bg-green></a> <a href=# class=bg-lblack01></a></div>
                        </div>
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>Chercher par Taille</div>
                            <div class=sizepic><a href=#>XS</a> <a href=#>S</a> <a href=#>M</a> <a href=#>L</a></div>
                        </div>
                    </aside>
                    <aside class=contentinner>
                        <div class=\"bg-red shop_select clearfix\">
                            <div class=select_shopping>
                                <form>
                                    <div class=form-group><label class=headline01>Trier par</label><select
                                                class=form-control>
                                            <option>Prix</option>
                                            <option>Nombre d'Étoiles</option>
                                        </select></div>
                                </form>
                            </div>
                        </div>
                        <div class=\"shop-wrap-slider clearfix\">
                            <div class=shop_detais>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 60
            echo "
                                    <div class=\"shop01 clearfix\">
                                        <div class=shop-img>
                                            <div class=bgimg style=background:url(";
            // line 63
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["p"], "photo", [], "any", false, false, false, 63)), "html", null, true);
            echo ")></div>
                                        </div>
                                        <div class=shop_info><h4 class=headline01><a href='#'>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</a></h4>

                                            <div class=star>
                                                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, $context["p"], "nbrEtoiles", [], "any", false, false, false, 68) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                                                    <i class=\"fa fa-star\"></i>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                            </div>
                                            <p>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>

                                            <div class=headline01>\$";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 74), "html", null, true);
            echo "</div>
                                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterAuPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn-addcart\">Ajouter au panier</a>
                                        </div>
                                    </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </div>
                        </div>
                    </aside>
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
        return "produit/afficherFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 80,  214 => 75,  210 => 74,  205 => 72,  202 => 71,  195 => 69,  191 => 68,  185 => 65,  180 => 63,  175 => 60,  171 => 59,  132 => 22,  122 => 21,  110 => 15,  106 => 13,  100 => 11,  98 => 10,  94 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block activeBoutique %}
class=active
{% endblock %}

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
        <div class=innerbanner><h2 class=bannerHeadline>Notre <span>Magasin</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>Meilleur Magasin <span>d'Accessoires de Football</span></h2>

                <p class=headParagraph></p>

                <div class=innerWrapper>
                    <aside class=\"widgetinner clearfix\">
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>Chercher par Couleur</div>
                            <div class=sizepic><a href=# class=bg-bluecolor></a> <a href=# class=bg-redcolor></a> <a
                                        href=# class=bg-green></a> <a href=# class=bg-lblack01></a></div>
                        </div>
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>Chercher par Taille</div>
                            <div class=sizepic><a href=#>XS</a> <a href=#>S</a> <a href=#>M</a> <a href=#>L</a></div>
                        </div>
                    </aside>
                    <aside class=contentinner>
                        <div class=\"bg-red shop_select clearfix\">
                            <div class=select_shopping>
                                <form>
                                    <div class=form-group><label class=headline01>Trier par</label><select
                                                class=form-control>
                                            <option>Prix</option>
                                            <option>Nombre d'Étoiles</option>
                                        </select></div>
                                </form>
                            </div>
                        </div>
                        <div class=\"shop-wrap-slider clearfix\">
                            <div class=shop_detais>
                                {% for p in produit %}

                                    <div class=\"shop01 clearfix\">
                                        <div class=shop-img>
                                            <div class=bgimg style=background:url({{ asset('uploads/images/') ~ p.photo }})></div>
                                        </div>
                                        <div class=shop_info><h4 class=headline01><a href='#'>{{ p.nom }}</a></h4>

                                            <div class=star>
                                                {% for i in 0..p.nbrEtoiles-1 %}
                                                    <i class=\"fa fa-star\"></i>
                                                {% endfor %}
                                            </div>
                                            <p>{{ p.description }}</p>

                                            <div class=headline01>\${{ p.prix }}</div>
                                            <a href=\"{{ path('AjouterAuPanier',{'id':p.id}) }}\" class=\"btn-addcart\">Ajouter au panier</a>
                                        </div>
                                    </div>

                                {% endfor %}
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


{% endblock %}



", "produit/afficherFront.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\produit\\afficherFront.html.twig");
    }
}
