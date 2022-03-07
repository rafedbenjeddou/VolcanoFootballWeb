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

/* billet/AfficherUnBillet.html.twig */
class __TwigTemplate_130265aedc4a00e7912b353e357f9d530e4e5d6ac3ac313f564cddf0d31911d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/AfficherUnBillet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/AfficherUnBillet.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "billet/AfficherUnBillet.html.twig", 1);
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
    <div class=innerbanner><h2 class=bannerHeadline>book <span>ticket</span></h2></div>
</div>
<section class=\"innerpage_all_wrap bg-white\">
    <div class=container>
        <div class=row><h2 class=heading>Coupe du Monde Qatar 2022™ <span>Billets </span></h2>

            <p class=headParagraph> <b>Quatre catégories de prix seront proposées pour la Coupe du Monde , Qatar 2022™: </b> <br>

               <b>la catégorie 1</b> , affichant les tarifs les plus élevés, correspond aux places situées aux meilleurs emplacements des tribunes.<br>
                <b>La catégorie 2 et la catégorie 3 </b> sont des zones de places assises dans le stade, distinctes des emplacements de la catégorie 1.<br>
                <b>La catégorie 4 </b> correspond à des zones de places assises à l'intérieur du stade, distinctes des emplacements des catégories 1, 2 et 3. <br> Cette catégorie est exclusivement réservée aux résidents du Qatar . <br> </p>
            <div class=innerWrapper>
                <aside class=\"widgetinner clearfix\">
                    <div class=widgetinfowrap>
                        <div class=bg-blackimg>catégories Billet :</div>
                        <ul class=\"widgetinfo info01\">
                            <li>Cat 1 : 200 (AED)</li>
                            <li>Cat 2 : 150 (AED)</li>
                            <li>Cat 3 : 100 (AED)</li>
                            <li>Cat 4 : 50 (AED)</li>
                        </ul> </div>
                </aside>
                <aside class=contentinner>
            <div class=\"bg-red headline01\">most populat match ticket</div>


                    <ul class=ticketInfo>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new RuntimeError('Variable "billet" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 35
            echo "                        <li>
                            <ul class=\"t_info headline01 clearfix\">
                                <li>Cat: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "categorie", [], "any", false, false, false, 37), "html", null, true);
            echo "</li>
                                <li>
                                    <div class=\"headline01 clearfix\"><span>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 39), "NomMatche", [], "any", false, false, false, 39), "html", null, true);
            echo "</span></div>
                                    <div class=\"ticketInner_info paragraph02 clearfix\"><span>Prix: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                                        <div class=\"ticketInner_info paragraph02 clearfix\"><span>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 41), "date", [], "any", false, false, false, 41), "d-m-Y"), "html", null, true);
            echo "</span>
                                            <span>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 42), "time", [], "any", false, false, false, 42), "H:i:s"), "html", null, true);
            echo " pm </span>
                                        </div>
                                </li>
                                <li><a href=";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReserverTicket");
            echo " class=\"btn-small01 btn-green\">Réserver</a></li>
                            </ul>
                        </li>



                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </ul>
            </div>
        </div>
            </aside>
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
        return "billet/AfficherUnBillet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  132 => 45,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  109 => 37,  105 => 35,  101 => 34,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}


<div class=innerbannerwrap>
    <div class=content></div>
    <div class=innerbanner><h2 class=bannerHeadline>book <span>ticket</span></h2></div>
</div>
<section class=\"innerpage_all_wrap bg-white\">
    <div class=container>
        <div class=row><h2 class=heading>Coupe du Monde Qatar 2022™ <span>Billets </span></h2>

            <p class=headParagraph> <b>Quatre catégories de prix seront proposées pour la Coupe du Monde , Qatar 2022™: </b> <br>

               <b>la catégorie 1</b> , affichant les tarifs les plus élevés, correspond aux places situées aux meilleurs emplacements des tribunes.<br>
                <b>La catégorie 2 et la catégorie 3 </b> sont des zones de places assises dans le stade, distinctes des emplacements de la catégorie 1.<br>
                <b>La catégorie 4 </b> correspond à des zones de places assises à l'intérieur du stade, distinctes des emplacements des catégories 1, 2 et 3. <br> Cette catégorie est exclusivement réservée aux résidents du Qatar . <br> </p>
            <div class=innerWrapper>
                <aside class=\"widgetinner clearfix\">
                    <div class=widgetinfowrap>
                        <div class=bg-blackimg>catégories Billet :</div>
                        <ul class=\"widgetinfo info01\">
                            <li>Cat 1 : 200 (AED)</li>
                            <li>Cat 2 : 150 (AED)</li>
                            <li>Cat 3 : 100 (AED)</li>
                            <li>Cat 4 : 50 (AED)</li>
                        </ul> </div>
                </aside>
                <aside class=contentinner>
            <div class=\"bg-red headline01\">most populat match ticket</div>


                    <ul class=ticketInfo>
                        {% for b in billet %}
                        <li>
                            <ul class=\"t_info headline01 clearfix\">
                                <li>Cat: {{ b.categorie }}</li>
                                <li>
                                    <div class=\"headline01 clearfix\"><span>{{ b.matche.NomMatche }}</span></div>
                                    <div class=\"ticketInner_info paragraph02 clearfix\"><span>Prix: {{ b.prix }}</span>
                                        <div class=\"ticketInner_info paragraph02 clearfix\"><span>{{ b.matche.date|date('d-m-Y') }}</span>
                                            <span>{{ b.matche.time|date(\"H:i:s\")}} pm </span>
                                        </div>
                                </li>
                                <li><a href={{path(('ReserverTicket')) }} class=\"btn-small01 btn-green\">Réserver</a></li>
                            </ul>
                        </li>



                    {% endfor %}
                </ul>
            </div>
        </div>
            </aside>
    </section>

    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>
{% endblock %}



", "billet/AfficherUnBillet.html.twig", "C:\\Users\\skand\\Documents\\yosra-match\\templates\\billet\\AfficherUnBillet.html.twig");
    }
}
