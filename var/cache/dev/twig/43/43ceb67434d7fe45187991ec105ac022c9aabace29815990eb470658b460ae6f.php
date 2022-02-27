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

/* matche/ListeM.html.twig */
class __TwigTemplate_f440af0bcb55cab3f00f55e6179a7d2a880edf245d37616e062f51531539b8e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/ListeM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matche/ListeM.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/back-office/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"58\">

   <h1 align=\"center\">Liste Des Matchs </h1> <hr>


                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>NomMatche</th>
                            <th>NomArbitre</th>
                            <th>Stade</th>
                            <th>Date</th>
                            <th>Tour</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) || array_key_exists("matche", $context) ? $context["matche"] : (function () { throw new RuntimeError('Variable "matche" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo ">
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomMatche", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "NomArbitre", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "stade", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "date", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "tour", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>

                        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo ">
                        </tbody>
                    </table>

    <script>
        \$('#datatable-buttons').DataTable()
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "matche/ListeM.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  85 => 20,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <img src=\"{{ asset ('public/back-office/logo.jpg')}}\" alt=\"\" height=\"58\">

   <h1 align=\"center\">Liste Des Matchs </h1> <hr>


                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>NomMatche</th>
                            <th>NomArbitre</th>
                            <th>Stade</th>
                            <th>Date</th>
                            <th>Tour</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr {% for m in matche %}>
                            <td>{{ m.id }}</td>
                            <td>{{ m.NomMatche }}</td>
                            <td>{{ m.NomArbitre }}</td>
                            <td>{{ m.stade.nom }}</td>
                            <td>{{ m.date|date('d-m-Y') }}</td>
                            <td>{{ m.tour }}</td>

                        </tr {% endfor %}>
                        </tbody>
                    </table>

    <script>
        \$('#datatable-buttons').DataTable()
    </script>
{% endblock %}
", "matche/ListeM.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\matche\\ListeM.html.twig");
    }
}
