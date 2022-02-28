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

/* reservationk/AfficheFacture.html.twig */
class __TwigTemplate_0fd42272b4ff87870bed2c6f89de44a23278811f634e75dff32e981ad5302eeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/AfficheFacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationk/AfficheFacture.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Stylesheets -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/css/datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/css/jquery.range.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/OwlCarousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/OwlCarousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Semantic Css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/semantic/semantic.min.css"), "html", null, true);
        echo "\">

</head>
<body class=\"main_invoice\">
<!-- Header Start -->
<div class=\"invc_header\">
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"\">
                    <div class=\"header_logo\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/images/logo.PNG"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Invoice Body Start -->
<section class=\"invoice_section\">
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-8\">
                <div class=\"invoice_body\">
                    <div class=\"nvdate_dt\">
                        <div class=\"nvde_dt45\">

                        </div>
                        <div class=\"nvde_dt46\">
                            <ul class=\"in11448\">
                                <li><div class=\"vdt-list\"><span>Date :</span>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 47, $this->source); })()), "getCreatedAt", [], "method", false, false, false, 47)), "html", null, true);
        echo "</div></li>
                                <li><div class=\"vdt-list\"><span>Invoice No :</span>IVIP12023598</div></li>
                                <li><div class=\"vdt-list\"><span>Order ID :</span>1258963487</div></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class=\"dff474\">Invoice</h3>
                    <div class=\"jike145\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"vhls140\">
                                    <h4>Customer</h4>
                                    <ul>
                                        <li><div class=\"vdt-list\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
        echo "</div></li>
                                        <li><div class=\"vdt-list\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "prenom", [], "any", false, false, false, 61), "html", null, true);
        echo "</div></li>
                                        <li><div class=\"vdt-list\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "age", [], "any", false, false, false, 62), "html", null, true);
        echo " ANS</div></li>
                                        <li><div class=\"vdt-list\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</div></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"invoice_table\">
                        <div class=\"table-responsive-md\">
                            <table class=\"table table-borderless\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Description</th>
                                    <th scope=\"col\">Price</th>
                                    <th scope=\"col\">Vat(20%)</th>
                                    <th scope=\"col\">Total Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\">
                                        <div class=\"user_dt_trans\">
                                            <p>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
                                        </div>
                                    </th>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 90, $this->source); })()), "prix", [], "any", false, false, false, 90), "html", null, true);
        echo " TND</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>20.00 TND</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>100 TND</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td colspan=\"3\">
                                        <div class=\"user_dt_trans jsk1145\">
                                            <div class=\"totalinv2\">Invoice Total : TND 100</div>
                                            <p>Paid via Carte</p>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"invoice_footer\">
                        <div class=\"leftfooter\">
                            <p>Thanks for buying.</p>
                        </div>
                        <div class=\"righttfooter\">
                            <a class=\"print_btn\" href=\"javascript:window.print();\">Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Invoice Body End -->

<!-- Scroll to Top Button Start -->
<button onclick=\"topFunction()\" id=\"pageup\" title=\"Go to top\"><i class=\"fas fa-arrow-up\"></i></button>
<!-- Scroll to Top Button End -->

<!-- Scripts js -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/js/i18n/datepicker.en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/vendor/OwlCarousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/\"vendor/semantic/semantic.min.js\""), "html", null, true);
        echo "></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/js/jquery.range-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Facture/js/custom1.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservationk/AfficheFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 144,  256 => 143,  252 => 142,  248 => 141,  244 => 140,  240 => 139,  236 => 138,  232 => 137,  182 => 90,  174 => 85,  149 => 63,  145 => 62,  141 => 61,  137 => 60,  121 => 47,  98 => 27,  84 => 16,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Stylesheets -->
    <link href=\"{{ asset('Facture/css/responsive.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/css/datepicker.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/css/jquery.range.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/vendor/OwlCarousel/assets/owl.carousel.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Facture/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}\" rel=\"stylesheet\">

    <!-- Semantic Css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Facture/vendor/semantic/semantic.min.css')}}\">

</head>
<body class=\"main_invoice\">
<!-- Header Start -->
<div class=\"invc_header\">
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"\">
                    <div class=\"header_logo\">
                        <img src=\"{{ asset('Facture/images/logo.PNG')}}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Invoice Body Start -->
<section class=\"invoice_section\">
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-8\">
                <div class=\"invoice_body\">
                    <div class=\"nvdate_dt\">
                        <div class=\"nvde_dt45\">

                        </div>
                        <div class=\"nvde_dt46\">
                            <ul class=\"in11448\">
                                <li><div class=\"vdt-list\"><span>Date :</span>{{ facture.getCreatedAt()|date }}</div></li>
                                <li><div class=\"vdt-list\"><span>Invoice No :</span>IVIP12023598</div></li>
                                <li><div class=\"vdt-list\"><span>Order ID :</span>1258963487</div></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class=\"dff474\">Invoice</h3>
                    <div class=\"jike145\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"vhls140\">
                                    <h4>Customer</h4>
                                    <ul>
                                        <li><div class=\"vdt-list\">{{ app.user.nom }}</div></li>
                                        <li><div class=\"vdt-list\">{{ app.user.prenom }}</div></li>
                                        <li><div class=\"vdt-list\">{{ app.user.age }} ANS</div></li>
                                        <li><div class=\"vdt-list\">{{ app.user.email }}</div></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"invoice_table\">
                        <div class=\"table-responsive-md\">
                            <table class=\"table table-borderless\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Description</th>
                                    <th scope=\"col\">Price</th>
                                    <th scope=\"col\">Vat(20%)</th>
                                    <th scope=\"col\">Total Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\">
                                        <div class=\"user_dt_trans\">
                                            <p>{{ facture.type  }}</p>
                                        </div>
                                    </th>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>{{ facture.prix }} TND</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>20.00 TND</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"user_dt_trans\">
                                            <p>100 TND</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td colspan=\"3\">
                                        <div class=\"user_dt_trans jsk1145\">
                                            <div class=\"totalinv2\">Invoice Total : TND 100</div>
                                            <p>Paid via Carte</p>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"invoice_footer\">
                        <div class=\"leftfooter\">
                            <p>Thanks for buying.</p>
                        </div>
                        <div class=\"righttfooter\">
                            <a class=\"print_btn\" href=\"javascript:window.print();\">Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Invoice Body End -->

<!-- Scroll to Top Button Start -->
<button onclick=\"topFunction()\" id=\"pageup\" title=\"Go to top\"><i class=\"fas fa-arrow-up\"></i></button>
<!-- Scroll to Top Button End -->

<!-- Scripts js -->
<script src=\"{{ asset('Facture/js/jquery.min.js')}}\"></script>
<script src=\"{{ asset('Facture/js/datepicker.min.js')}}\"></script>
<script src=\"{{ asset('Facture/js/i18n/datepicker.en.js')}}\"></script>
<script src=\"{{ asset('Facture/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{ asset('Facture/vendor/OwlCarousel/owl.carousel.js')}}\"></script>
<script src={{ asset('Facture/\"vendor/semantic/semantic.min.js\"')}}></script>
<script src=\"{{ asset('Facture/js/jquery.range-min.js')}}\"></script>
<script src=\"{{ asset('Facture/js/custom1.js')}}\"></script>


</body>

</html>", "reservationk/AfficheFacture.html.twig", "C:\\Users\\jasser\\VolcanoFootball-Utilisateur-Produit-Commande\\templates\\reservationk\\AfficheFacture.html.twig");
    }
}
