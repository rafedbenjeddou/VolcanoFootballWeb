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

/* kiosque/AfficheUnKiosque.html.twig */
class __TwigTemplate_65acf5e05cb795cd445ee89c7796e5da028b18cba5331e5b2137367b3d26de32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kiosque/AfficheUnKiosque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kiosque/AfficheUnKiosque.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "kiosque/AfficheUnKiosque.html.twig", 1);
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
        <div class=innerbanner><h2 class=bannerHeadline><span> Kiosque </span></h2></div>
    </div>

    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row>
                <ul class=\"galleryPage gallerycolumn03 clearfix\" id=da_gallery>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 12, $this->source); })()), "getKiosque", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 13
            echo "                        <li class=gallery-list><a class=column_g><span class=image_g
                                                                       style=background:url(";
            // line 14
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["k"], "photo", [], "any", false, false, false, 14)), "html", null, true);
            echo ")></span>
                                <div class=gallery-info>
                                    <h6>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "type", [], "any", false, false, false, 16), "html", null, true);
            echo "</h6>
                                    <p>You Are Welcome</p></div>
                            </a></li>
                        <div class=center> <a  class=\"btn-small01 btn-green\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre", ["id" => twig_get_attribute($this->env, $this->source, $context["k"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Reserver</a> </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return "kiosque/AfficheUnKiosque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  97 => 19,  91 => 16,  86 => 14,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span> Kiosque </span></h2></div>
    </div>

    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row>
                <ul class=\"galleryPage gallerycolumn03 clearfix\" id=da_gallery>
                    {% for k in stade.getKiosque() %}
                        <li class=gallery-list><a class=column_g><span class=image_g
                                                                       style=background:url({{ asset('uploads/images/') ~ k.photo  }})></span>
                                <div class=gallery-info>
                                    <h6>{{ k.type }}</h6>
                                    <p>You Are Welcome</p></div>
                            </a></li>
                        <div class=center> <a  class=\"btn-small01 btn-green\" href=\"{{ path('offre',{'id':k.id}) }}\">Reserver</a> </div>
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
", "kiosque/AfficheUnKiosque.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\kiosque\\AfficheUnKiosque.html.twig");
    }
}
