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

/* evenement/AfficheUnEvent.html.twig */
class __TwigTemplate_572b940a6298d37725fe1ed4f0b23789d88ce25786587a33cdc224c4dd401085 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/AfficheUnEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/AfficheUnEvent.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "evenement/AfficheUnEvent.html.twig", 1);
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
        <div class=innerbanner><h2 class=bannerHeadline><span>Evenement</span></h2></div>
    </div>

    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row>
                <ul class=\"galleryPage gallerycolumn03 clearfix\" id=da_gallery>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["E"]) {
            // line 13
            echo "                        <li class=gallery-list><a class=column_g><span class=image_g
                                                                       style=background:url(front-office/images/gallery/images.jpg)></span>

                                <div class=gallery-info><h6>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["E"], "nomMatch", [], "any", false, false, false, 16), "html", null, true);
            echo " </h6>
                                    <p><b> Nom Evenement:</b>  ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["E"], "NomEvent", [], "any", false, false, false, 17), "html", null, true);
            echo " <br> <br>
                                        <b>Description:    </b>              ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["E"], "Description", [], "any", false, false, false, 18), "html", null, true);
            echo " <br> <br>
                                        <button type=\"button\" class=\"btn btn-danger\">Detail</button>

                                    </p></div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['E'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
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
        return "evenement/AfficheUnEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  96 => 18,  92 => 17,  88 => 16,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Evenement</span></h2></div>
    </div>

    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row>
                <ul class=\"galleryPage gallerycolumn03 clearfix\" id=da_gallery>
                    {% for E in evenement %}
                        <li class=gallery-list><a class=column_g><span class=image_g
                                                                       style=background:url(front-office/images/gallery/images.jpg)></span>

                                <div class=gallery-info><h6>{{ E.nomMatch }} </h6>
                                    <p><b> Nom Evenement:</b>  {{ E.NomEvent }} <br> <br>
                                        <b>Description:    </b>              {{ E.Description }} <br> <br>
                                        <button type=\"button\" class=\"btn btn-danger\">Detail</button>

                                    </p></div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </section>

    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>
{% endblock %}
", "evenement/AfficheUnEvent.html.twig", "C:\\Users\\skand\\Documents\\yosra-match\\templates\\evenement\\AfficheUnEvent.html.twig");
    }
}
