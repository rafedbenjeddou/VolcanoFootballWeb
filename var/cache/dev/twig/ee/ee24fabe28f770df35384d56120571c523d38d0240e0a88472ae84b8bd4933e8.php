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

/* matche/AfficherUnMatch.html.twig */
class __TwigTemplate_c9e28e37cacdfff22af49a9cb63373eb0775e50a0d6ebc91efb755a1d90c1ff9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/AfficherUnMatch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/AfficherUnMatch.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "matche/AfficherUnMatch.html.twig", 1);
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
        echo "    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Match</span></h2></div>
    </div>

    <section class=innerpage_all_wrap>

        <div class=container>
            <div class=row><h2 class=heading>match <span>Coupe du Monde Qatar 2022™ </span></h2>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) || array_key_exists("matche", $context) ? $context["matche"] : (function () { throw new RuntimeError('Variable "matche" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <div class=\"matchSchedule_details row\">
                    <div class=\"match_next right-triangle\">
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomMatche", [], "any", false, false, false, 16), "html", null, true);
            echo " </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class=\"bg-blackimg match_versus02\">
                            <div class=nextmatchDetails>
                                <div class=\"wrap-logo clearfix\">
                                    <div class=logo-match><img src=front-office/images/matchResult/tunn.png alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src=front-office/images/matchResult/algé.png alt=image></div>
                                </div>
                                <p class=match_dtls><b> Date :</b>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "date", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
            echo "</p>
                                <p class=match_dtls><b> Time :</b>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "time", [], "any", false, false, false, 30), "H:i:s"), "html", null, true);
            echo " PM</p>
                                <p class=match_dtls><b> Nom Arbitre Principal :</b>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomArbitre", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                                <p class=match_dtls><b> Stade :</b> <br> <li><a href=";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheUnBillet");
            echo " class=\"btn-small01 btn-green\">Billet</a></li></p></div>

                        </div>
                    </div>

                </div>



                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
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
        return "matche/AfficherUnMatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  88 => 16,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Match</span></h2></div>
    </div>

    <section class=innerpage_all_wrap>

        <div class=container>
            <div class=row><h2 class=heading>match <span>Coupe du Monde Qatar 2022™ </span></h2>
                {% for m in matche %}
                <div class=\"matchSchedule_details row\">
                    <div class=\"match_next right-triangle\">
                        <div class=\"wrap_match_next right-triangle\">
                            <div class=right-padding><h4 class=headline03>{{ m.NomMatche }} </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class=\"bg-blackimg match_versus02\">
                            <div class=nextmatchDetails>
                                <div class=\"wrap-logo clearfix\">
                                    <div class=logo-match><img src=front-office/images/matchResult/tunn.png alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src=front-office/images/matchResult/algé.png alt=image></div>
                                </div>
                                <p class=match_dtls><b> Date :</b>{{ m.date|date('d-m-Y') }}</p>
                                <p class=match_dtls><b> Time :</b>{{ m.time|date(\"H:i:s\")}} PM</p>
                                <p class=match_dtls><b> Nom Arbitre Principal :</b>{{ m.NomArbitre }}</p>
                                <p class=match_dtls><b> Stade :</b> <br> <li><a href={{path(('AfficheUnBillet')) }} class=\"btn-small01 btn-green\">Billet</a></li></p></div>

                        </div>
                    </div>

                </div>



                    {% endfor %}
            </div>
        </div>
    </section>

    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>
{% endblock %}
", "matche/AfficherUnMatch.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-main\\templates\\matche\\AfficherUnMatch.html.twig");
    }
}