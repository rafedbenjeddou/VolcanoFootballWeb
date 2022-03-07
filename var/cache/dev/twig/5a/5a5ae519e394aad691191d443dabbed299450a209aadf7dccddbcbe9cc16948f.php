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

/* reservationk/index.html.twig */
class __TwigTemplate_455fde495a7ce36f6c08a94f8c8459d4dedf3746334a2b0ab958b64705ebda73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "reservationk/index.html.twig", 1);
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
        echo "<section class=playerDetails02>
        <div class=\"container\">

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"heading small\">
                    </div>
                    <div class=\"view_chart\">
                        <div class=\"view_chart_header\" >
                            <div class=\"ui radio checkbox mt-1\">
                                <input  type=\"radio\" name=\"example1\" checked=\"\">
                                <label class=\"chk_method\" style=\"color:#cc8500 !important;\">Credit or Debit Cards</label>
                            </div>
                            <div class=\"cards_right\">
                                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("facture/images/cards.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                        <div class=\"pymt_mthd_body\">
                            <div class=\"paragraph02\">
                                <label class=\"label15\">Card Number*</label>

                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "CardNumber", [], "any", false, false, false, 26), 'widget', ["attr" => ["placeholder" => "Enter Card Number", "class" => "job-input", "id" => "cardnumber", "pattern" => ".{12}", "title" => "Field must be 12 numbers"]]);
        echo "
                                <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"cardnumber_error\">* Required field</p>

                            </div>
                            <div class=\"paragraph02\">
                                <label class=\"label15\">Full Name*</label>

                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Name", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "Enter Full Name", "class" => "job-input", "id" => "name"]]);
        echo "
                                <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"name_error\">* Required field</p>
                            </div>
                            <div class=\"fdsf452\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"tab-pane active fade in\">
                                            <label >Expiring*</label>
                                            <input id=\"date\" type=\"month\" class=\"job-input datepicker-here\" data-language=\"en\"  placeholder=\"Expiring\"  required>
                                            <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"date_error\">* Required field</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"paragraph02\">
                                            <label class=\"label15\">Cvv*</label>
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Cvv", [], "any", false, false, false, 48), 'widget', ["attr" => ["placeholder" => "Enter Cvv", "class" => "job-input", "id" => "cvv", "pattern" => ".{3}", "title" => "Field must be 3 numbers"]]);
        echo "
                                            <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"cvv_error\"> Required field</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class=\"col-md-12\">

                <button class=\"btn-small btn-green\" type=\"submit\" >PROCEED PAYMENT</button>

                ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
            </div>


        </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservationk/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  126 => 48,  108 => 33,  98 => 26,  90 => 21,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block content %}
<section class=playerDetails02>
        <div class=\"container\">

                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"heading small\">
                    </div>
                    <div class=\"view_chart\">
                        <div class=\"view_chart_header\" >
                            <div class=\"ui radio checkbox mt-1\">
                                <input  type=\"radio\" name=\"example1\" checked=\"\">
                                <label class=\"chk_method\" style=\"color:#cc8500 !important;\">Credit or Debit Cards</label>
                            </div>
                            <div class=\"cards_right\">
                                <img src=\"{{ asset ('facture/images/cards.png')}}\" alt=\"\">
                            </div>
                        </div>

                        {{ form_start(form)}}
                        <div class=\"pymt_mthd_body\">
                            <div class=\"paragraph02\">
                                <label class=\"label15\">Card Number*</label>

                                {{ form_widget(form.CardNumber,{'attr':{'placeholder': 'Enter Card Number' ,'class': 'job-input', 'id':'cardnumber' ,'pattern':'.{12}' , 'title' :\"Field must be 12 numbers\" }})}}
                                <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"cardnumber_error\">* Required field</p>

                            </div>
                            <div class=\"paragraph02\">
                                <label class=\"label15\">Full Name*</label>

                                {{ form_widget(form.Name,{'attr':{ 'placeholder': 'Enter Full Name' ,'class': 'job-input' , 'id':'name' }})}}
                                <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"name_error\">* Required field</p>
                            </div>
                            <div class=\"fdsf452\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"tab-pane active fade in\">
                                            <label >Expiring*</label>
                                            <input id=\"date\" type=\"month\" class=\"job-input datepicker-here\" data-language=\"en\"  placeholder=\"Expiring\"  required>
                                            <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"date_error\">* Required field</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"paragraph02\">
                                            <label class=\"label15\">Cvv*</label>
                                            {{ form_widget(form.Cvv,{'attr':{ 'placeholder': 'Enter Cvv' ,'class': 'job-input' , 'id':'cvv' , 'pattern':'.{3}' , 'title' :\"Field must be 3 numbers\" }})}}
                                            <p class=\"shippingError error\" style=\"display:none; color:red;\" id=\"cvv_error\"> Required field</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class=\"col-md-12\">

                <button class=\"btn-small btn-green\" type=\"submit\" >PROCEED PAYMENT</button>

                {{ form_end(form)}}
            </div>


        </div>
</section>
{% endblock %}
", "reservationk/index.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\reservationk\\index.html.twig");
    }
}
