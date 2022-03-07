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

/* stat_match/index.html.twig */
class __TwigTemplate_c727413e05c819a7f60d148041754f3a4bf8a00ffa0c7c0bdd061587d36f3f5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat_match/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat_match/index.html.twig"));

        // line 1
        echo "<script>
    let categories = document.querySelector(\"#myPieChart\")
    let categGraph = new Chart(categories, {
        type: \"pie\",
        data: {
            labels: ";
        // line 6
        echo (isset($context["produitnom"]) || array_key_exists("produitnom", $context) ? $context["produitnom"] : (function () { throw new RuntimeError('Variable "produitnom" does not exist.', 6, $this->source); })());
        echo ",
            datasets: [{
                label: \"Les Produits Les plus acheté\",
                data: ";
        // line 9
        echo (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })());
        echo ",
                backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
            }  ]
        }
    })

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stat_match/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    let categories = document.querySelector(\"#myPieChart\")
    let categGraph = new Chart(categories, {
        type: \"pie\",
        data: {
            labels: {{ produitnom|raw }},
            datasets: [{
                label: \"Les Produits Les plus acheté\",
                data: {{ commande|raw }},
                backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
            }  ]
        }
    })

</script>", "stat_match/index.html.twig", "C:\\Users\\DeLL\\Desktop\\yosra-match-main\\templates\\stat_match\\index.html.twig");
    }
}
