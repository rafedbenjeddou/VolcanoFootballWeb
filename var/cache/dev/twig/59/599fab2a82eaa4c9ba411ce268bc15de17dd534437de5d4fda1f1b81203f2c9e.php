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

/* stade/AfficheUnStade.html.twig */
class __TwigTemplate_5c93fb8f0987175567500bba82e1f2b7190054a4e7aed3b574c5cd9b13eea31d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/AfficheUnStade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/AfficheUnStade.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "stade/AfficheUnStade.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=video-container >
        <iframe
                src=https://www.youtube.com/embed/ItLwUD-ea94 class=liveVideo
                allowfullscreen=\"\">
            <h2 class=bannerHeadline>Qatar<span>2022</span></h2>
        </iframe>
    </div>

    <section class=playerDetails02>
        <div class=container>
            <div class=row><h2 class=heading><span>Stade Qatar 2022</span></h2>
                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                    reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                    quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fugiat quisquam <reprehe></reprehe>nderit, blanditiis nam debitis libero facilis
                    illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                    asperiores quaerat .</p>
                <div>
                    <aside class=contentinner>
                        <div class=\"shop-wrap-slider clearfix\" >
                            <div>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                                    <div class=\"shop01 clearfix\">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url(";
            // line 29
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["s"], "photo", [], "any", false, false, false, 29)), "html", null, true);
            echo ")></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontkiosque", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></h4>

                                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "adresse", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                                        <div class=headline01> Capacite : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                                        <div role=tabpanel class=\"tab-pane clearfix\" id=dateouverture>
                                            <div class=headline01><h4><p>voila la date d'ouverture du ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</p> </span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "dateouverture", [], "any", false, false, false, 36)), "html", null, true);
            echo " </h4>

                                            </div>
                                        </div>
                                    </div>
                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>







    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stade/AfficheUnStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  121 => 36,  116 => 34,  112 => 33,  105 => 31,  100 => 29,  96 => 27,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block content %}

    <div class=video-container >
        <iframe
                src=https://www.youtube.com/embed/ItLwUD-ea94 class=liveVideo
                allowfullscreen=\"\">
            <h2 class=bannerHeadline>Qatar<span>2022</span></h2>
        </iframe>
    </div>

    <section class=playerDetails02>
        <div class=container>
            <div class=row><h2 class=heading><span>Stade Qatar 2022</span></h2>
                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                    reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                    quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fugiat quisquam <reprehe></reprehe>nderit, blanditiis nam debitis libero facilis
                    illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                    asperiores quaerat .</p>
                <div>
                    <aside class=contentinner>
                        <div class=\"shop-wrap-slider clearfix\" >
                            <div>
                                {% for s in stade %}
                                    <div class=\"shop01 clearfix\">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{ asset('uploads/images/') ~ s.photo  }})></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href={{ path('frontkiosque',{'id':s.id}) }}>{{ s.nom }}</a></h4>

                                        <p>{{s.adresse}}</p>
                                        <div class=headline01> Capacite : {{ s.capacite }}</div>
                                        <div role=tabpanel class=\"tab-pane clearfix\" id=dateouverture>
                                            <div class=headline01><h4><p>voila la date d'ouverture du {{ s.nom }}</p> </span>{{ s.dateouverture|date }} </h4>

                                            </div>
                                        </div>
                                    </div>
                                    </div>{% endfor %}

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>







    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>
{% endblock %}
", "stade/AfficheUnStade.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\VolcanoFootball-main\\templates\\stade\\AfficheUnStade.html.twig");
    }
}
