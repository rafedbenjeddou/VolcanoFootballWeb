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
            'css' => [$this, 'block_css'],
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
    <title>Dashboard | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
    <meta content=\"Themesdesign\" name=\"author\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/favicon.ico"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 30
        echo "</head>

<body data-sidebar=\"dark\">

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
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-sm-dark.png"), "html", null, true);
        echo "\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-dark.png"), "html", null, true);
        echo "\" alt=\"\" height=\"20\">
                                </span>
                    </a>

                    <a href=\"index.html\" class=\"logo logo-light\">
                                <span class=\"logo-sm\">
                                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/logo-sm-light.png"), "html", null, true);
        echo "\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"";
        // line 56
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
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\"
                             alt=\"Header Avatar\">
                        <span class=\"d-none d-xl-inline-block ml-1\">Kevin</span>
                        <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <!-- item-->
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-user-line align-middle mr-1\"></i> Profile</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-wallet-2-line align-middle mr-1\"></i> My Wallet</a>
                        <a class=\"dropdown-item d-block\" href=\"#\"><span class=\"badge badge-success float-right mt-1\">11</span><i class=\"ri-settings-2-line align-middle mr-1\"></i> Settings</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-lock-unlock-line align-middle mr-1\"></i> Lock screen</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"#\"><i class=\"ri-shut-down-line align-middle mr-1 text-danger\"></i> Logout</a>
                    </div>
                </div>

                <div class=\"dropdown d-inline-block\">
                    <button type=\"button\" class=\"btn header-item noti-icon right-bar-toggle waves-effect\">
                        <i class=\"ri-settings-2-line\"></i>
                    </button>
                </div>

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

                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"ri-dashboard-line\"></i><span class=\"badge badge-pill badge-success float-right\">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Module Khairi -->
                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Utilisateur</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Produit</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Commande</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
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
                            <li><a href=\"AfficheA\">Afficher</a></li>
                            <li><a href=\"agence/Add\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Hebergement</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"AfficheH\">Afficher</a></li>
                            <li><a href=\"hebergement/AddH\">Ajouter</a></li>
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
                            <li><a href=\"/AfficheM\">Afficher</a></li>
                            <li><a href=\"matche/ajouter\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Billet</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"/AfficheB\">Afficher</a></li>
                            <li><a href=\"billet/ajouter\">Ajouter</a></li>
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
                            <li><a href=\"AfficheStade\">Afficher</a></li>
                            <li><a href=\"AddStade\">Ajouter</a></li>
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
                            <li><a href=\"/AfficheEv\">Afficher</a></li>
                            <li><a href=\"evenement/ajouter\">Ajouter</a></li>
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
        // line 332
        $this->displayBlock('js', $context, $blocks);
        // line 360
        echo "<div class=\"main-content\">
    <div class=\"page-content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
        // line 364
        $this->displayBlock('content', $context, $blocks);
        // line 366
        echo "            </div>
        </div>
    </div>
</div>
<!-- END layout-wrapper -->

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
                <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/layouts/layout-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/layouts/layout-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"dark-mode-switch\" data-bsStyle=\"assets/css/bootstrap-dark.min.css\" data-appStyle=\"assets/css/app-dark.min.css\" />
                <label class=\"custom-control-label\" for=\"dark-mode-switch\">Dark Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/images/layouts/layout-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-5\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"rtl-mode-switch\" data-appStyle=\"assets/css/app-rtl.min.css\" />
                <label class=\"custom-control-label\" for=\"rtl-mode-switch\">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class=\"rightbar-overlay\"></div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "        <!-- jquery.vectormap css -->
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

    // line 332
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 333
        echo "    <!-- JAVASCRIPT -->
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/metismenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/node-waves/waves.min.js"), "html", null, true);
        echo "\"></script>


    <!-- apexcharts -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jquery.vectormap map -->
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"), "html", null, true);
        echo "\"></script>

    <!-- Required datatable js -->
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Responsive examples -->
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/pages/dashboard.init.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 364
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 365
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 365,  611 => 364,  599 => 358,  594 => 356,  589 => 354,  585 => 353,  579 => 350,  575 => 349,  569 => 346,  565 => 345,  559 => 342,  552 => 338,  548 => 337,  544 => 336,  540 => 335,  536 => 334,  533 => 333,  523 => 332,  511 => 28,  506 => 26,  501 => 24,  495 => 21,  489 => 18,  483 => 15,  480 => 14,  470 => 13,  440 => 404,  429 => 396,  418 => 388,  394 => 366,  392 => 364,  386 => 360,  384 => 332,  157 => 108,  102 => 56,  96 => 53,  87 => 47,  81 => 44,  65 => 30,  63 => 13,  59 => 12,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\" />
    <title>Dashboard | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
    <meta content=\"Themesdesign\" name=\"author\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset ('back-office/assets/images/favicon.ico')}}\">
    {% block css %}
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
                        <span class=\"d-none d-xl-inline-block ml-1\">Kevin</span>
                        <i class=\"mdi mdi-chevron-down d-none d-xl-inline-block\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <!-- item-->
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-user-line align-middle mr-1\"></i> Profile</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-wallet-2-line align-middle mr-1\"></i> My Wallet</a>
                        <a class=\"dropdown-item d-block\" href=\"#\"><span class=\"badge badge-success float-right mt-1\">11</span><i class=\"ri-settings-2-line align-middle mr-1\"></i> Settings</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-lock-unlock-line align-middle mr-1\"></i> Lock screen</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"#\"><i class=\"ri-shut-down-line align-middle mr-1 text-danger\"></i> Logout</a>
                    </div>
                </div>

                <div class=\"dropdown d-inline-block\">
                    <button type=\"button\" class=\"btn header-item noti-icon right-bar-toggle waves-effect\">
                        <i class=\"ri-settings-2-line\"></i>
                    </button>
                </div>

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

                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"ri-dashboard-line\"></i><span class=\"badge badge-pill badge-success float-right\">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Module Khairi -->
                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Utilisateur</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Produit</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Commande</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"#\">Afficher</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
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
                            <li><a href=\"AfficheA\">Afficher</a></li>
                            <li><a href=\"agence/Add\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Hebergement</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"AfficheH\">Afficher</a></li>
                            <li><a href=\"hebergement/AddH\">Ajouter</a></li>
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
                            <li><a href=\"/AfficheM\">Afficher</a></li>
                            <li><a href=\"matche/ajouter\">Ajouter</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Billet</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"/AfficheB\">Afficher</a></li>
                            <li><a href=\"billet/ajouter\">Ajouter</a></li>
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
                            <li><a href=\"AfficheStade\">Afficher</a></li>
                            <li><a href=\"AddStade\">Ajouter</a></li>
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
                            <li><a href=\"/AfficheEv\">Afficher</a></li>
                            <li><a href=\"evenement/ajouter\">Ajouter</a></li>
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
            <div class=\"row\">
                {% block content %}
                {% endblock %}
            </div>
        </div>
    </div>
</div>
<!-- END layout-wrapper -->

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
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"dark-mode-switch\" data-bsStyle=\"assets/css/bootstrap-dark.min.css\" data-appStyle=\"assets/css/app-dark.min.css\" />
                <label class=\"custom-control-label\" for=\"dark-mode-switch\">Dark Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"{{ asset ('back-office/assets/images/layouts/layout-3.jpg')}}\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-5\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"rtl-mode-switch\" data-appStyle=\"assets/css/app-rtl.min.css\" />
                <label class=\"custom-control-label\" for=\"rtl-mode-switch\">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class=\"rightbar-overlay\"></div>

</body>
</html>
", "base-back.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-Match-Billet\\templates\\base-back.html.twig");
    }
}
