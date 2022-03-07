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

/* joueur/Affiche.html.twig */
class __TwigTemplate_ccbd785251dceebec1becbf2fd29e78c9d10c20f7ae19b15420cf1e6dfba140d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/Affiche.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Liste des Joueur</h1>
<table border=\"3\">
    <tr>
        <th>ID</th>
        <th>Nom Joueur</th>
        <th>Prenom Joueur</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <tr ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            echo ">
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "nomJoueur", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "prenomJoueur", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "age", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Update</a></td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Delete</a></td>
    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo ">
</table>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "joueur/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Liste des Joueur</h1>
<table border=\"3\">
    <tr>
        <th>ID</th>
        <th>Nom Joueur</th>
        <th>Prenom Joueur</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <tr {% for j in joueur %}>
        <td>{{ j.id }}</td>
        <td>{{ j.nomJoueur }}</td>
        <td>{{ j.prenomJoueur }}</td>
        <td>{{ j.age }}</td>
        <td><a href=\"{{ path('update',{'id':j.id}) }}\">Update</a></td>
        <td><a href=\"{{ path('delete',{'id':j.id}) }}\">Delete</a></td>
    </tr {% endfor %}>
</table>
</body>
</html>", "joueur/Affiche.html.twig", "C:\\Users\\skand\\Documents\\yosra-match\\templates\\joueur\\Affiche.html.twig");
    }
}
