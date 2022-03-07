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
class __TwigTemplate_6d41430d171161a4812741ce3328bf9f5277d52a41960546eb0ca2619628b6e3 extends \Twig\Template
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
        echo "
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Match</span></h2></div>
    </div>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        <div class=\"alert alert-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>

        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            Donnez votre Avis
        </button>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Votre Avis</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
            echo "
                        <div class=\"cp-field\">
                            <h5>Note</h5>
                            <div class=\"form-group\">
                                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "note", [], "any", false, false, false, 32), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"cp-field\">
                            <h5>Votre Avis</h5>
                            <div class=\"form-group\">
                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"save-stngs pd3\">
                            <ul>
                                <!--<li><button type=\"submit\">Envoyer</button></li>-->
                                <li> ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Envoyer", [], "any", false, false, false, 44), 'widget');
            echo "</li>
                            </ul>
                        </div>
                        ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    <section class=innerpage_all_wrap>

        <div class=container>
            <div class=row>
                <h2 class=heading>
                    match <span>Coupe du Monde Qatar 2022™ </span>
                </h2>
                <div class=\"bg-red shop_select clearfix\">
                    <div class=\"select_shopping\">
                        <form>
                            <div class=\"form-group\">
                                <label class=\"headline01\">sort by match</label>
                                <select class=\"form-control\" id=\"match\">
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) || array_key_exists("matche", $context) ? $context["matche"] : (function () { throw new RuntimeError('Variable "matche" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 73
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomMatche", [], "any", false, false, false, 73), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomMatche", [], "any", false, false, false, 73), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"headline01\">Date</label>
                                <input type=\"date\" id=\"datem\" class=\"form-control\">

                            </div>

                        </form>
                    </div>
                </div>
                <div id=\"result\">

                </div>

            </div>
        </div>
    </section>

    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#match\").change(function() {
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechMatch");
        echo "\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1=";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[7];
                                        var img2=";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[8];
                                        entitySelector.append(
                                        '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                        '</div></div>'+
                                        '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                        '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                        '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                        '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                        '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });
            });
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#datem\").change(function() {
                console.log(\$(this).val())
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechMatchDate");
        echo "\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1=";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[7];
                                        var img2=";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[8];
                                        entitySelector.append(
                                            '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                            '</div></div>'+
                                            '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                            '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                            '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                            '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                            '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });
            });
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;

                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AffMatchAjax");
        echo "\",
                    data: {
                        'q' : 0
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1=";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[7];
                                        var img2=";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo "+value[8];
                                        entitySelector.append(
                                            '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                            '</div></div>'+
                                            '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                            '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                            '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                            '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                            '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });

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
        return array (  364 => 231,  360 => 230,  345 => 218,  305 => 181,  301 => 180,  286 => 168,  242 => 127,  238 => 126,  223 => 114,  182 => 75,  171 => 73,  167 => 72,  151 => 58,  134 => 47,  128 => 44,  119 => 38,  110 => 32,  103 => 28,  82 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %}

    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline><span>Match</span></h2></div>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>

        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            Donnez votre Avis
        </button>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Votre Avis</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_start(form) }}
                        <div class=\"cp-field\">
                            <h5>Note</h5>
                            <div class=\"form-group\">
                                {{ form_widget(form.note) }}
                            </div>
                        </div>
                        <div class=\"cp-field\">
                            <h5>Votre Avis</h5>
                            <div class=\"form-group\">
                                {{ form_widget(form.description) }}
                            </div>
                        </div>
                        <div class=\"save-stngs pd3\">
                            <ul>
                                <!--<li><button type=\"submit\">Envoyer</button></li>-->
                                <li> {{ form_widget(form.Envoyer) }}</li>
                            </ul>
                        </div>
                        {{ form_end(form) }}
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>


    {% endfor %}

    <section class=innerpage_all_wrap>

        <div class=container>
            <div class=row>
                <h2 class=heading>
                    match <span>Coupe du Monde Qatar 2022™ </span>
                </h2>
                <div class=\"bg-red shop_select clearfix\">
                    <div class=\"select_shopping\">
                        <form>
                            <div class=\"form-group\">
                                <label class=\"headline01\">sort by match</label>
                                <select class=\"form-control\" id=\"match\">
                                    {% for m in matche %}
                                    <option value=\"{{m.NomMatche}}\">{{m.NomMatche}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"headline01\">Date</label>
                                <input type=\"date\" id=\"datem\" class=\"form-control\">

                            </div>

                        </form>
                    </div>
                </div>
                <div id=\"result\">

                </div>

            </div>
        </div>
    </section>

    <script type=text/javascript>
        \$(function () {
            \$('#da_gallery .gallery-list ').hoverdir();
        });
    </script>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#match\").change(function() {
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('rechMatch') }}\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1={{ asset('upload/') }}+value[7];
                                        var img2={{ asset('upload/')  }}+value[8];
                                        entitySelector.append(
                                        '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                        '</div></div>'+
                                        '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                        '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                        '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                        '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                        '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });
            });
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#datem\").change(function() {
                console.log(\$(this).val())
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('rechMatchDate') }}\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1={{ asset('upload/') }}+value[7];
                                        var img2={{ asset('upload/')  }}+value[8];
                                        entitySelector.append(
                                            '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                            '</div></div>'+
                                            '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                            '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                            '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                            '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                            '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });
            });
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;

                var entitySelector = \$(\"#result\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('AffMatchAjax') }}\",
                    data: {
                        'q' : 0
                    },
                    dataType: \"text\",
                    success: function(msg){
                        console.log(msg);
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {
                                        var img1={{ asset('upload/') }}+value[7];
                                        var img2={{ asset('upload/')  }}+value[8];
                                        entitySelector.append(
                                            '<div class=\"matchSchedule_details row\"> <div class=\"match_next right-triangle\"> <div class=\"wrap_match_next right-triangle\"><div class=right-padding><h4 class=headline03>'+value[0]+ '</h4>'+
                                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>'+
                                            '</div></div>'+
                                            '<div class=match_versus><div class=\"bg-blackimg match_versus02\"><div class=nextmatchDetails><div class=\"wrap-logo clearfix\">'+
                                            '<div class=logo-match><img src=\"'+img1+'\" alt=image></div>'+
                                            '<div class=match_vs>vs</div>'+
                                            '<div class=logo-match><img src=\"'+img2+'\" alt=image></div>'+
                                            '</div>'+
                                            '<p class=match_dtls><b> Date :</b>'+value[1]+'/'+value[2]+'/'+value[3]+'</p>'+
                                            '<p class=match_dtls><b> Time :</b>'+value[4]+ 'PM</p>'+
                                            '<p class=match_dtls><b> Nom Arbitre Principal :</b>'+value[5]+'</p>'+
                                            '<p class=match_dtls><b> Stade :</b>'+value[6]+'<br> <li><a href=\"ListByMatche/'+id+'\" class=\"btn-small01 btn-green\">Billet</a></li></p></div>'+
                                            '</div></div></div>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"error\">'+value+'</div>');
                                    }
                                }
                            });
                        });
                    }
                });

        });
    </script>

{% endblock %}
", "matche/AfficherUnMatch.html.twig", "C:\\Users\\skand\\Documents\\yosra-match\\templates\\matche\\AfficherUnMatch.html.twig");
    }
}
