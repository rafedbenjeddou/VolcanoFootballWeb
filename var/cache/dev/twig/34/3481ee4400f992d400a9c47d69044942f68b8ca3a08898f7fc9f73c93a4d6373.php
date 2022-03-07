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

/* stade/Affiche.html.twig */
class __TwigTemplate_096c468f988d9d5a42e05d3acfd36a871fb16889f3fe9173ff9d32cfbe6d7b22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "stade/Affiche.html.twig", 1);
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
        echo "<div class=\"row\"  , style=\"width: 100%;\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">

                <h4 class=\"card-title\">Liste Des Stades</h4>
                <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom </th>
                        <th>Adresse </th>
                        <th>Capacite</th>
                        <th>Date Ouverture</th>
                        <th>details</th>
                        <th>update</th>
                        <th>delete</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo ">
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "adresse", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "capacite", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "dateouverture", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td><a href>details</a></td>
                        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UpdateStade", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><i class=\"ri-pencil-fill\"></i></a></td>
                        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStade", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><i class=\"ri-delete-bin-fill\"></a></td>
                    </tr";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo ">
                    <li><a href=\"http://127.0.0.1:8000/stade/AddStade\">Add Stade</a></li>

                </tbody>
            </table>
        </div>
    </div>
</div> 
</div>
<script>
    \$('#datatable-buttons').DataTable();
    let myForm = document.getElementById('myForm');
    myForm.addEventListener('submit', function(e)
    {
        if (myInput.value.trim()==\"\"){
            let myError = document.getElementById('nom');
            myError.innerHTML = \"Le Champs nom est requis.\";
            myError.style.color = 'red';
            e.preventDefault();
        }
    })
</script> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stade/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  122 => 32,  118 => 31,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}
<div class=\"row\"  , style=\"width: 100%;\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">

                <h4 class=\"card-title\">Liste Des Stades</h4>
                <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom </th>
                        <th>Adresse </th>
                        <th>Capacite</th>
                        <th>Date Ouverture</th>
                        <th>details</th>
                        <th>update</th>
                        <th>delete</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr {% for s in stade %}>
                        <td>{{ s.id }}</td>
                        <td>{{ s.nom }}</td>
                        <td>{{ s.adresse }}</td>
                        <td>{{ s.capacite }}</td>
                        <td>{{ s.dateouverture | date('d-m-Y') }}</td>
                        <td><a href>details</a></td>
                        <td><a href=\"{{ path('UpdateStade',{'id':s.id})}}\"><i class=\"ri-pencil-fill\"></i></a></td>
                        <td><a href=\"{{ path('deleteStade',{'id':s.id})}}\"><i class=\"ri-delete-bin-fill\"></a></td>
                    </tr{% endfor %}>
                    <li><a href=\"http://127.0.0.1:8000/stade/AddStade\">Add Stade</a></li>

                </tbody>
            </table>
        </div>
    </div>
</div> 
</div>
<script>
    \$('#datatable-buttons').DataTable();
    let myForm = document.getElementById('myForm');
    myForm.addEventListener('submit', function(e)
    {
        if (myInput.value.trim()==\"\"){
            let myError = document.getElementById('nom');
            myError.innerHTML = \"Le Champs nom est requis.\";
            myError.style.color = 'red';
            e.preventDefault();
        }
    })
</script> 
{% endblock %}     ", "stade/Affiche.html.twig", "C:\\Users\\skand\\Documents\\yosra-match\\templates\\stade\\Affiche.html.twig");
    }
}
