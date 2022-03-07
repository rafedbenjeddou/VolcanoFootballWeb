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

/* base-back.html.twig */
class __TwigTemplate_40371e6b83b4093f83f51ac12de5fc84fc31e3cc65d579a9197b7c481b8febf8 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'user' => [$this, 'block_user'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- App favicon -->


    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "</head>





<body data-sidebar=\"dark\">
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 443
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard | VolcanoFootball";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 13
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/favicon.ico"), "html", null, true);
        echo "\">
        <!-- jquery.vectormap css -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- DataTables -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Responsive datatable examples -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Bootstrap Css -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/css/app.min.css"), "html", null, true);
        echo "\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css\" />


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "
    <!-- Begin page -->

    <div id=\"layout-wrapper\">
        <header id=\"page-topbar\">
            <div class=\"navbar-header\">
                <div class=\"d-flex\">
                    <!-- LOGO -->
                    <div class=\"navbar-brand-box\">
                        <a href=\"index.html\" class=\"logo logo-dark\">
                                <span class=\"logo-sm\">
                                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-sm-dark.png"), "html", null, true);
        echo "\" alt=\"\" height=\"22\">
                                </span>
                            <span class=\"logo-lg\">
                                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-dark.png"), "html", null, true);
        echo "\" alt=\"\" height=\"20\">
                                </span>
                        </a>

                        <a href=\"index.html\" class=\"logo logo-light\">
                                <span class=\"logo-sm\">
                                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-sm-light.png"), "html", null, true);
        echo "\" alt=\"\" height=\"22\">
                                </span>
                            <span class=\"logo-lg\">
                                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-light.png"), "html", null, true);
        echo "\" alt=\"\" height=\"58\">
                                </span>
                        </a>
                    </div>

                    <button type=\"button\" class=\"btn btn-sm px-3 font-size-24 header-item waves-effect\" id=\"vertical-menu-btn\">
                        <i class=\"ri-menu-2-line align-middle\"></i>
                    </button>

                    <!-- App Search-->
                    <form class=\"app-search d-none d-lg-block\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"ri-search-line\"></span>
                        </div>
                    </form>

                </div>

                <div class=\"d-flex\">

                    <div class=\"dropdown d-inline-block d-lg-none ml-2\">
                        <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" id=\"page-header-search-dropdown\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ri-search-line\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right p-0\"
                             aria-labelledby=\"page-header-search-dropdown\">

                            <form class=\"p-3\">
                                <div class=\"form-group m-0\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"submit\"><i class=\"ri-search-line\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                        <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" data-toggle=\"fullscreen\">
                            <i class=\"ri-fullscreen-line\"></i>
                        </button>
                    </div>
                    <div class=\"dropdown d-inline-block user-dropdown\">
                        <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"rounded-circle header-profile-user\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\"
                                 alt=\"Header Avatar\">
                            <span class=\"d-none d-xl-inline-block ml-1\">";
        // line 117
        $this->displayBlock('user', $context, $blocks);
        echo "</span>
                            <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                            <!-- item-->
                            <a class=\"dropdown-item\" href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ProfilBack", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo "\"><i class=\"ri-user-line align-middle mr-1\"></i> Profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"ri-shut-down-line align-middle mr-1 text-danger\"></i> Se Déconnecter</a>
                        </div>
                    </div>

                    ";
        // line 135
        echo "
                </div>
            </div>

        </header>
        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"vertical-menu\">



            <div data-simplebar class=\"h-100\">

                <!--- Sidemenu -->
                <div id=\"sidebar-menu\">
                    <!-- Left Menu Start -->
                    <ul class=\"metismenu list-unstyled\" id=\"side-menu\">
                        <li class=\"menu-title\">Menu</li>

                        ";
        // line 162
        echo "
                        <!-- Module Khairi -->
                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-account-circle-line\"></i>
                                <span>Utilisateur</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherUsers");
        echo "\">Afficher</a></li>
                                <li><a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterUser");
        echo "\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Produit</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherProduit");
        echo "\">Afficher</a></li>
                                <li><a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterProduit");
        echo "\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Commande</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficherCommandes");
        echo "\">Afficher</a></li>
                                <li><a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterCommande");
        echo "\">Ajouter</a></li>
                            </ul>
                        </li>


                        <!-- END Module Khairi -->


                        <!-- Module Yassine -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Joueur</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Equipe</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Yassine -->

                        <!-- Module Rafed -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Agence</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Hebergement</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Rafed -->

                        <!-- Module Yosra -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Match</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Billet</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Yosra -->

                        <!-- Module Jasser -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Stade</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Restaurent</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Jasser -->

                        <!-- Module Khalil -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Evenement</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Artiste</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Khalil -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

    </div>

";
        // line 340
        $this->displayBlock('js', $context, $blocks);
        // line 369
        echo "

    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">

                 ";
        // line 375
        $this->displayBlock('content', $context, $blocks);
        // line 378
        echo "
            </div>
        </div>
    </div>

    <!-- END layout-wrapper -->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 340
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 341
        echo "    <!-- JAVASCRIPT -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/metismenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/node-waves/waves.min.js"), "html", null, true);
        echo "\"></script>


    <!-- apexcharts -->
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jquery.vectormap map -->
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"), "html", null, true);
        echo "\"></script>

    <!-- Required datatable js -->
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Responsive examples -->
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/pages/dashboard.init.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 375
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 376
        echo "
                 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  658 => 376,  648 => 375,  636 => 367,  630 => 364,  625 => 362,  621 => 361,  615 => 358,  611 => 357,  605 => 354,  601 => 353,  595 => 350,  588 => 346,  584 => 345,  580 => 344,  576 => 343,  572 => 342,  569 => 341,  559 => 340,  541 => 117,  524 => 378,  522 => 375,  514 => 369,  512 => 340,  362 => 193,  358 => 192,  345 => 182,  341 => 181,  328 => 171,  324 => 170,  314 => 162,  293 => 135,  286 => 124,  281 => 122,  273 => 117,  268 => 115,  213 => 63,  207 => 60,  198 => 54,  192 => 51,  179 => 40,  169 => 39,  155 => 28,  150 => 26,  145 => 24,  139 => 21,  133 => 18,  127 => 15,  121 => 13,  111 => 12,  92 => 6,  78 => 443,  76 => 39,  67 => 32,  65 => 12,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}Dashboard | VolcanoFootball{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- App favicon -->


    {% block css %}
        <link rel=\"shortcut icon\" href=\"{{ asset ('back-office/assets/images/favicon.ico')}}\">
        <!-- jquery.vectormap css -->
        <link href=\"{{ asset('back-office/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- DataTables -->
        <link href=\"{{ asset ('back-office/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }} \" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Responsive datatable examples -->
        <link href=\"{{ asset ('back-office/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }} \" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Bootstrap Css -->
        <link href=\"{{ asset ('back-office/assets/css/bootstrap.min.css')}}\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\"{{ asset ('back-office/assets/css/icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\"{{ asset ('back-office/assets/css/app.min.css')}}\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css\" />


    {% endblock %}
</head>





<body data-sidebar=\"dark\">
{% block body %}

    <!-- Begin page -->

    <div id=\"layout-wrapper\">
        <header id=\"page-topbar\">
            <div class=\"navbar-header\">
                <div class=\"d-flex\">
                    <!-- LOGO -->
                    <div class=\"navbar-brand-box\">
                        <a href=\"index.html\" class=\"logo logo-dark\">
                                <span class=\"logo-sm\">
                                    <img src=\"{{ asset ('back-office/assets/images/logo-sm-dark.png')}}\" alt=\"\" height=\"22\">
                                </span>
                            <span class=\"logo-lg\">
                                    <img src=\"{{ asset ('back-office/assets/images/logo-dark.png')}}\" alt=\"\" height=\"20\">
                                </span>
                        </a>

                        <a href=\"index.html\" class=\"logo logo-light\">
                                <span class=\"logo-sm\">
                                    <img src=\"{{ asset ('back-office/assets/images/logo-sm-light.png')}}\" alt=\"\" height=\"22\">
                                </span>
                            <span class=\"logo-lg\">
                                    <img src=\"{{ asset ('back-office/assets/images/logo-light.png')}}\" alt=\"\" height=\"58\">
                                </span>
                        </a>
                    </div>

                    <button type=\"button\" class=\"btn btn-sm px-3 font-size-24 header-item waves-effect\" id=\"vertical-menu-btn\">
                        <i class=\"ri-menu-2-line align-middle\"></i>
                    </button>

                    <!-- App Search-->
                    <form class=\"app-search d-none d-lg-block\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"ri-search-line\"></span>
                        </div>
                    </form>

                </div>

                <div class=\"d-flex\">

                    <div class=\"dropdown d-inline-block d-lg-none ml-2\">
                        <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" id=\"page-header-search-dropdown\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ri-search-line\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right p-0\"
                             aria-labelledby=\"page-header-search-dropdown\">

                            <form class=\"p-3\">
                                <div class=\"form-group m-0\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"submit\"><i class=\"ri-search-line\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                        <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" data-toggle=\"fullscreen\">
                            <i class=\"ri-fullscreen-line\"></i>
                        </button>
                    </div>
                    <div class=\"dropdown d-inline-block user-dropdown\">
                        <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"rounded-circle header-profile-user\" src=\"{{ asset ('back-office/assets/images/users/avatar-2.jpg')}}\"
                                 alt=\"Header Avatar\">
                            <span class=\"d-none d-xl-inline-block ml-1\">{% block user %}{% endblock %}</span>
                            <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                            <!-- item-->
                            <a class=\"dropdown-item\" href=\"{{ path('ProfilBack',{'id':app.user.id}) }}\"><i class=\"ri-user-line align-middle mr-1\"></i> Profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\"><i class=\"ri-shut-down-line align-middle mr-1 text-danger\"></i> Se Déconnecter</a>
                        </div>
                    </div>

                    {#
                    <div class=\"dropdown d-inline-block\">
                        <button type=\"button\" class=\"btn header-item noti-icon right-bar-toggle waves-effect\">
                            <i class=\"ri-settings-2-line\"></i>
                        </button>
                    </div>
                    #}

                </div>
            </div>

        </header>
        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"vertical-menu\">



            <div data-simplebar class=\"h-100\">

                <!--- Sidemenu -->
                <div id=\"sidebar-menu\">
                    <!-- Left Menu Start -->
                    <ul class=\"metismenu list-unstyled\" id=\"side-menu\">
                        <li class=\"menu-title\">Menu</li>

                        {#
                        <li>
                            <a href=\"index.html\" class=\"waves-effect\">
                                <i class=\"ri-dashboard-line\"></i><span class=\"badge badge-pill badge-success float-right\">3</span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        #}

                        <!-- Module Khairi -->
                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-account-circle-line\"></i>
                                <span>Utilisateur</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"{{ path('AfficherUsers') }}\">Afficher</a></li>
                                <li><a href=\"{{ path('AjouterUser') }}\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Produit</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"{{ path('AfficherProduit') }}\">Afficher</a></li>
                                <li><a href=\"{{ path('AjouterProduit') }}\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Commande</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"{{ path('AfficherCommandes') }}\">Afficher</a></li>
                                <li><a href=\"{{ path('AjouterCommande') }}\">Ajouter</a></li>
                            </ul>
                        </li>


                        <!-- END Module Khairi -->


                        <!-- Module Yassine -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Joueur</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Equipe</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Yassine -->

                        <!-- Module Rafed -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Agence</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Hebergement</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Rafed -->

                        <!-- Module Yosra -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Match</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Billet</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Yosra -->

                        <!-- Module Jasser -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Stade</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Restaurent</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Jasser -->

                        <!-- Module Khalil -->

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Evenement</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                                <i class=\"ri-store-2-line\"></i>
                                <span>Artiste</span>
                            </a>
                            <ul class=\"sub-menu\" aria-expanded=\"false\">
                                <li><a href=\"#\">Afficher</a></li>
                                <li><a href=\"#\">Ajouter</a></li>
                            </ul>
                        </li>

                        <!-- END Module Khalil -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

    </div>

{% block js %}
    <!-- JAVASCRIPT -->
    <script src=\"{{ asset ('back-office/assets/libs/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/metismenu/metisMenu.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/simplebar/simplebar.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/node-waves/waves.min.js')}}\"></script>


    <!-- apexcharts -->
    <script src=\"{{ asset ('back-office/assets/libs/apexcharts/apexcharts.min.js')}}\"></script>

    <!-- jquery.vectormap map -->
    <script src=\"{{ asset ('back-office/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}\"></script>

    <!-- Required datatable js -->
    <script src=\"{{ asset ('back-office/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}\"></script>

    <!-- Responsive examples -->
    <script src=\"{{ asset ('back-office/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}\"></script>
    <script src=\"{{ asset ('back-office/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}\"></script>

    <script src=\"{{ asset ('back-office/assets/js/pages/dashboard.init.js')}}\"></script>


    <script src=\"{{ asset ('back-office/assets/js/app.js')}}\"></script>
{% endblock %}


    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">

                 {% block content %}

                 {% endblock %}

            </div>
        </div>
    </div>

    <!-- END layout-wrapper -->

    {#
    <!-- Right Sidebar -->
    <div class=\"right-bar\">
        <div data-simplebar class=\"h-100\">
            <div class=\"rightbar-title px-3 py-4\">
                <a href=\"javascript:void(0);\" class=\"right-bar-toggle float-right\">
                    <i class=\"mdi mdi-close noti-icon\"></i>
                </a>
                <h5 class=\"m-0\">Settings</h5>
            </div>


            <!-- Settings -->
            <hr class=\"mt-0\" />
            <h6 class=\"text-center mb-0\">Choose Layouts</h6>



            <div class=\"p-4\">

                <div class=\"mb-2\">
                    <img src=\"{{ asset ('back-office/assets/images/layouts/layout-1.jpg')}}\" class=\"img-fluid img-thumbnail\" alt=\"\">
                </div>
                <div class=\"custom-control custom-switch mb-3\">
                    <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                    <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
                </div>

                <div class=\"mb-2\">
                    <img src=\"{{ asset ('back-office/assets/images/layouts/layout-2.jpg')}}\" class=\"img-fluid img-thumbnail\" alt=\"\">
                </div>
                <div class=\"custom-control custom-switch mb-3\">
                    <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"dark-mode-switch\" data-bsStyle=\"{{ asset('back-office/assets/css/bootstrap-dark.min.css') }}\" data-appStyle=\"{{ asset('back-office/assets/css/app-dark.min.css') }}\" />
                    <label class=\"custom-control-label\" for=\"dark-mode-switch\">Dark Mode</label>
                </div>

                <div class=\"mb-2\">
                    <img src=\"{{ asset ('back-office/assets/images/layouts/layout-3.jpg')}}\" class=\"img-fluid img-thumbnail\" alt=\"\">
                </div>
                <div class=\"custom-control custom-switch mb-5\">
                    <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"rtl-mode-switch\" data-appStyle=\"{{ asset('assets/css/app-rtl.min.css') }}\" />
                    <label class=\"custom-control-label\" for=\"rtl-mode-switch\">RTL Mode</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->

    </div>


    <!-- /Right-bar -->


    <!-- Right bar overlay-->
    <div class=\"rightbar-overlay\"></div>
    #}
{% endblock %}


</body>
</html>
", "base-back.html.twig", "C:\\Users\\jasser\\Documents\\GitHub\\jasser\\1234\\templates\\base-back.html.twig");
    }
}
