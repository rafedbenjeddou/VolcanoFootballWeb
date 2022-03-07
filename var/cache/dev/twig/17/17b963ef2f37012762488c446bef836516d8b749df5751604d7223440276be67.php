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

/* Base2.html.twig */
class __TwigTemplate_78b9475b6f11648902d453b57881f75684787a3ee5716619e2cc67ee3f104bad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta charset=\"utf-8\">


    <!--CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/upload.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/myboot.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tablestyle.css"), "html", null, true);
        echo "\">

    <!--BOOTSTRAP-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <!-- ===== BOX ICONS ===== -->
    <link href=\"https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css\" rel=\"stylesheet\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <style>
        .form__button_annul{
            display: block;
            margin-left: auto;
            margin-top: 1.5rem;
            margin-bottom: 0.9rem;
            padding: 0.2rem ;
            outline: none;


            background-color: #EDF3FE;
            color: #035EFF;
            font-size: var(--normal-font-size);
            border-radius: .2rem;
            cursor: pointer;
            transition: .3s;
        }
        .form__button_annul:hover{
            background-color: var(--first-color);
            color: #fff;
            border: 0.2px solid #035EFF;
        }



    </style>
    <style>
        .form__button_supp{
            display: block;
            margin-left: auto;
            margin-top: 1.5rem;
            margin-bottom: 0.9rem;
            padding: 0.2rem;
            outline: none;
            background-color: #FDEAE4;
            color: #FF4914;
            font-size: var(--normal-font-size);
            border-radius: .2rem;
            cursor: pointer;
            transition: .3s;
            border: 0.2px solid #FF4914;
        }
        .form__button_supp:hover{
            background-color: #FF4914;
            color: #fff;
            border: 0.2px solid #FF4914;
        }
    </style>
    <title>Profil</title>
</head>

<body id=\"body-pd\"  class=\"bg_color\" style=\"background-color:black; color:black;\">




";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "



<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo " \"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mainSH.js"), "html", null, true);
        echo " \"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/upload.js"), "html", null, true);
        echo " \"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>


<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chart.min.js"), "html", null, true);
        echo " \"></script>




</body>





</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 85,  191 => 4,  169 => 96,  162 => 92,  158 => 91,  154 => 90,  148 => 86,  146 => 85,  72 => 14,  68 => 13,  64 => 12,  59 => 10,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}Welcome!{% endblock %}</title>

    <meta charset=\"utf-8\">


    <!--CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/upload.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/myboot.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tablestyle.css') }}\">

    <!--BOOTSTRAP-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <!-- ===== BOX ICONS ===== -->
    <link href=\"https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css\" rel=\"stylesheet\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <style>
        .form__button_annul{
            display: block;
            margin-left: auto;
            margin-top: 1.5rem;
            margin-bottom: 0.9rem;
            padding: 0.2rem ;
            outline: none;


            background-color: #EDF3FE;
            color: #035EFF;
            font-size: var(--normal-font-size);
            border-radius: .2rem;
            cursor: pointer;
            transition: .3s;
        }
        .form__button_annul:hover{
            background-color: var(--first-color);
            color: #fff;
            border: 0.2px solid #035EFF;
        }



    </style>
    <style>
        .form__button_supp{
            display: block;
            margin-left: auto;
            margin-top: 1.5rem;
            margin-bottom: 0.9rem;
            padding: 0.2rem;
            outline: none;
            background-color: #FDEAE4;
            color: #FF4914;
            font-size: var(--normal-font-size);
            border-radius: .2rem;
            cursor: pointer;
            transition: .3s;
            border: 0.2px solid #FF4914;
        }
        .form__button_supp:hover{
            background-color: #FF4914;
            color: #fff;
            border: 0.2px solid #FF4914;
        }
    </style>
    <title>Profil</title>
</head>

<body id=\"body-pd\"  class=\"bg_color\" style=\"background-color:black; color:black;\">




{% block body %}{% endblock %}




<script src=\"{{ asset('assets/js/main.js') }} \"></script>
<script src=\"{{ asset('assets/js/mainSH.js') }} \"></script>
<script src=\"{{ asset('assets/js/upload.js') }} \"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>


<script src=\"{{ asset('assets/js/chart.min.js') }} \"></script>




</body>





</html>", "Base2.html.twig", "C:\\Users\\DeLL\\Desktop\\yosra-match-main\\templates\\Base2.html.twig");
    }
}
