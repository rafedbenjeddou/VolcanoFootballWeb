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

/* billet/Affiche.html.twig */
class __TwigTemplate_3cd68d74c45bff857889428854a72ed1515345e2c285a431a3537a7d914420ff extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "billet/Affiche.html.twig", 1);
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
        echo "    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">


                <h4 class=\"card-title\">Liste Des Billet </h4>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>prix</th>
                            <th>categorie</th>
                            <th>NomMatche</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new RuntimeError('Variable "billet" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            echo ">
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "categorie", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>

                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "matche", [], "any", false, false, false, 33), "NomMatche", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierbillet", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"ri-pencil-fill\"></i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerbillet", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"ri-delete-bin-fill\"></i></a></td>


                        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo ">
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#datatable-buttons').DataTable()
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "billet/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  131 => 34,  127 => 33,  122 => 31,  118 => 30,  114 => 29,  108 => 28,  93 => 15,  84 => 12,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}
    <div class=\"row\" style=\"width: 100%;\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">


                <h4 class=\"card-title\">Liste Des Billet </h4>
                    {% for message in app.flashes('info') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                        <thead class=\"thead-dark\">
                        <tr>
                            <th>ID</th>
                            <th>prix</th>
                            <th>categorie</th>
                            <th>NomMatche</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr {% for b in billet %}>
                            <td>{{ b.id }}</td>
                            <td>{{ b.prix }}</td>
                            <td>{{ b.categorie }}</td>

                            <td>{{ b.matche.NomMatche }}</td>
                            <td><a href=\"{{ path('modifierbillet',{'id':b.id}) }}\"><i class=\"ri-pencil-fill\"></i></a><a href=\"{{ path('supprimerbillet',{'id':b.id}) }}\"><i class=\"ri-delete-bin-fill\"></i></a></td>


                        </tr {% endfor %}>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        \$('#datatable-buttons').DataTable()
    </script>

{% endblock %}", "billet/Affiche.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\billet\\Affiche.html.twig");
    }
}
