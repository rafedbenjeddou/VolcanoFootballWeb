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

/* matche/Show.html.twig */
class __TwigTemplate_b6f3bc10fe3e142bf2b714f20b2af168a73064a16fe445b75964fbb7bb22c9fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/Show.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "matche/Show.html.twig", 1);
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
                <section class=about>
                    <div class=container>
                        <div class=row><h2 class=heading>About <span>Ticket</span></h2>

                            <div class=about-wrap>
                                <div class=\"tab-content nav-content\"><p role=tabpanel class=\"tab-pane fade\" id=matches>
                                        <b>la catégorie 1:</b> 200 dirham Dubai Emirats , 48,09 Euro , 7654,83 Dinar Algérien  , 157,20  Dinar Tunisien <br><br>
                                    <b>la catégorie 2:</b> 150 dirham Dubai Emirats ,  36,07 Euro   , 5741,12Dinar Algérien , 117,90 Dinar Tunisien<br><br>
                                        <b>la catégorie 3:</b> 100 dirham Dubai Emirats , 24.05 Euro  , 3827,42 Dinar Algérien  , 78,60  Dinar Tunisien<br><br>
                                        <b>la catégorie 4:</b> 50 dirham Dubai Emirats  , 48,09 Euro  , 1913,71 Dinar Algérien  , 39,30  Dinar Tunisien<br><br>
                                    </p>
                                    <p role=tabpanel class=\"tab-pane active fade in\" id=static>
                                        <b>Quatre catégories de prix seront proposées pour la Coupe du Monde , Qatar 2022™: </b> <br><br>
                                        <b>la catégorie 1</b> affichant les tarifs les plus élevés, correspond aux places situées aux meilleurs emplacements des tribunes.<br><br>
                                        <b>La catégorie 2,la catégorie 3 </b> sont des zones de places assises dans le stade, distinctes des emplacements de la catégorie 1.<br><br>
                                        <b>La catégorie 4 </b> correspond à des zones de places assises à l'intérieur du stade,distinctes des emplacements des catégories 1,2 et 3. <br> <br>
                                       </p>

                                    <p role=tabpanel class=\"tab-pane fade\" id=traning><b> Pour Réserver Un Billet cher client Merci de cliquer sur le  bouton Réserver , Et veuillez consulter votre boîte mail  . </b>  </p></div>
                                <div class=nav-header id=aboutTab>
                                    <ul class=\"nav nav-tabs clearfix\" role=tablist>
                                        <li><a href=#matches aria-controls=matches role=tab data-toggle=tab>TICKET PRICES</a></li>
                                        <li class=active><a href=#static aria-controls=static role=tab data-toggle=tab>TICKET CATEGORIES</a>
                                        </li>
                                        <li><a href=#traning aria-controls=traning role=tab data-toggle=tab>PAYMENT METHODS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <p class=headParagraph>  </p>
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new RuntimeError('Variable "billet" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 62
            echo "                                <li>
                                    <ul class=\"t_info headline01 clearfix\">
                                        <li>Cat: ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "categorie", [], "any", false, false, false, 64), "html", null, true);
            echo "</li>
                                        <li>
                                            <div class=\"headline01 clearfix\"><span>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 66), "NomMatche", [], "any", false, false, false, 66), "html", null, true);
            echo "</span></div>
                                            <div class=\"ticketInner_info paragraph02 clearfix\"><span>Prix: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "prix", [], "any", false, false, false, 67), "html", null, true);
            echo "</span>
                                                <div class=\"ticketInner_info paragraph02 clearfix\"><span>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 68), "date", [], "any", false, false, false, 68), "d-m-Y"), "html", null, true);
            echo "</span>
                                                    <span>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 69), "time", [], "any", false, false, false, 69), "H:i:s"), "html", null, true);
            echo " pm </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReserverTicket");
            echo "\" class=\"btn-small01 btn-green\">Réserver</a></li>
                                    </ul>
                                </li>



                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </ul>
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
        return "matche/Show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 80,  160 => 73,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  136 => 64,  132 => 62,  128 => 61,  68 => 3,  58 => 2,  35 => 1,);
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
                <section class=about>
                    <div class=container>
                        <div class=row><h2 class=heading>About <span>Ticket</span></h2>

                            <div class=about-wrap>
                                <div class=\"tab-content nav-content\"><p role=tabpanel class=\"tab-pane fade\" id=matches>
                                        <b>la catégorie 1:</b> 200 dirham Dubai Emirats , 48,09 Euro , 7654,83 Dinar Algérien  , 157,20  Dinar Tunisien <br><br>
                                    <b>la catégorie 2:</b> 150 dirham Dubai Emirats ,  36,07 Euro   , 5741,12Dinar Algérien , 117,90 Dinar Tunisien<br><br>
                                        <b>la catégorie 3:</b> 100 dirham Dubai Emirats , 24.05 Euro  , 3827,42 Dinar Algérien  , 78,60  Dinar Tunisien<br><br>
                                        <b>la catégorie 4:</b> 50 dirham Dubai Emirats  , 48,09 Euro  , 1913,71 Dinar Algérien  , 39,30  Dinar Tunisien<br><br>
                                    </p>
                                    <p role=tabpanel class=\"tab-pane active fade in\" id=static>
                                        <b>Quatre catégories de prix seront proposées pour la Coupe du Monde , Qatar 2022™: </b> <br><br>
                                        <b>la catégorie 1</b> affichant les tarifs les plus élevés, correspond aux places situées aux meilleurs emplacements des tribunes.<br><br>
                                        <b>La catégorie 2,la catégorie 3 </b> sont des zones de places assises dans le stade, distinctes des emplacements de la catégorie 1.<br><br>
                                        <b>La catégorie 4 </b> correspond à des zones de places assises à l'intérieur du stade,distinctes des emplacements des catégories 1,2 et 3. <br> <br>
                                       </p>

                                    <p role=tabpanel class=\"tab-pane fade\" id=traning><b> Pour Réserver Un Billet cher client Merci de cliquer sur le  bouton Réserver , Et veuillez consulter votre boîte mail  . </b>  </p></div>
                                <div class=nav-header id=aboutTab>
                                    <ul class=\"nav nav-tabs clearfix\" role=tablist>
                                        <li><a href=#matches aria-controls=matches role=tab data-toggle=tab>TICKET PRICES</a></li>
                                        <li class=active><a href=#static aria-controls=static role=tab data-toggle=tab>TICKET CATEGORIES</a>
                                        </li>
                                        <li><a href=#traning aria-controls=traning role=tab data-toggle=tab>PAYMENT METHODS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <p class=headParagraph>  </p>
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
                                            </div>
                                        </li>
                                        <li><a href=\"{{ path(('ReserverTicket')) }}\" class=\"btn-small01 btn-green\">Réserver</a></li>
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



", "matche/Show.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\matche\\Show.html.twig");
    }
}
