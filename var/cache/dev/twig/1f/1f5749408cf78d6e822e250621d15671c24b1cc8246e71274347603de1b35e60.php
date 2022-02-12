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

/* baseback.html.twig */
class __TwigTemplate_eea346a739160b75e67aaba58bdf5332eb5059fdf5333881183bc6cf62d72735 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'favicon' => [$this, 'block_favicon'],
            'jquery' => [$this, 'block_jquery'],
            'Datatable' => [$this, 'block_Datatable'],
            'responsivedatatable' => [$this, 'block_responsivedatatable'],
            'bootstrapcss' => [$this, 'block_bootstrapcss'],
            'iconcss' => [$this, 'block_iconcss'],
            'appcss' => [$this, 'block_appcss'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
            'apexchart' => [$this, 'block_apexchart'],
            'jqueryvector' => [$this, 'block_jqueryvector'],
            'datatablejs' => [$this, 'block_datatablejs'],
            'responsiveexemles' => [$this, 'block_responsiveexemles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

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
    ";
        // line 12
        $this->displayBlock('favicon', $context, $blocks);
        // line 15
        echo "
    <!-- jquery.vectormap css -->
    ";
        // line 17
        $this->displayBlock('jquery', $context, $blocks);
        // line 20
        echo "    <!-- DataTables -->
    ";
        // line 21
        $this->displayBlock('Datatable', $context, $blocks);
        // line 24
        echo "    <!-- Responsive datatable examples -->
    ";
        // line 25
        $this->displayBlock('responsivedatatable', $context, $blocks);
        // line 28
        echo "    <!-- Bootstrap Css -->
    ";
        // line 29
        $this->displayBlock('bootstrapcss', $context, $blocks);
        // line 32
        echo "    <!-- Icons Css -->
    ";
        // line 33
        $this->displayBlock('iconcss', $context, $blocks);
        // line 36
        echo "    <!-- App Css-->
    ";
        // line 37
        $this->displayBlock('appcss', $context, $blocks);
        // line 40
        echo "
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
                                    <img src=\"assets/images/logo-sm-dark.png\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"20\">
                                </span>
                    </a>

                    <a href=\"index.html\" class=\"logo logo-light\">
                                <span class=\"logo-sm\">
                                    <img src=\"assets/images/logo-sm-light.png\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"20\">
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

                <div class=\"dropdown dropdown-mega d-none d-lg-block ml-2\">
                    <button type=\"button\" class=\"btn header-item waves-effect\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        Mega Menu
                        <i class=\"mdi mdi-chevron-down\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-megamenu\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">UI Components</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Rating</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Forms</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tables</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">Applications</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Calendar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Email</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Projects</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tasks</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">Extra Pages</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Timeline</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <h5 class=\"font-size-14 mt-0\">UI Components</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Rating</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Forms</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tables</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-sm-5\">
                                        <div>
                                            <img src=\"assets/images/megamenu-img.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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

                <div class=\"dropdown d-none d-sm-inline-block\">
                    <button type=\"button\" class=\"btn header-item waves-effect\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"\" src=\"assets/images/flags/us.jpg\" alt=\"Header Language\" height=\"16\">
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\">

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/spain.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/germany.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">German</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/italy.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Italian</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/russia.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Russian</span>
                        </a>
                    </div>
                </div>

                <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"ri-apps-2-line\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <div class=\"px-lg-2\">
                            <div class=\"row no-gutters\">
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/github.png\" alt=\"Github\">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/bitbucket.png\" alt=\"bitbucket\">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/dribbble.png\" alt=\"dribbble\">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class=\"row no-gutters\">
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/dropbox.png\" alt=\"dropbox\">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/mail_chimp.png\" alt=\"mail_chimp\">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/slack.png\" alt=\"slack\">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" data-toggle=\"fullscreen\">
                        <i class=\"ri-fullscreen-line\"></i>
                    </button>
                </div>

                <div class=\"dropdown d-inline-block\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" id=\"page-header-notifications-dropdown\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"ri-notification-3-line\"></i>
                        <span class=\"noti-dot\"></span>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right p-0\"
                         aria-labelledby=\"page-header-notifications-dropdown\">
                        <div class=\"p-3\">
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    <h6 class=\"m-0\"> Notifications </h6>
                                </div>
                                <div class=\"col-auto\">
                                    <a href=\"#!\" class=\"small\"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style=\"max-height: 230px;\">
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <div class=\"avatar-xs mr-3\">
                                                <span class=\"avatar-title bg-primary rounded-circle font-size-16\">
                                                    <i class=\"ri-shopping-cart-line\"></i>
                                                </span>
                                    </div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Your order is placed</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">If several languages coalesce the grammar</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <img src=\"assets/images/users/avatar-3.jpg\"
                                         class=\"mr-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">James Lemire</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">It will seem like simplified English.</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <div class=\"avatar-xs mr-3\">
                                                <span class=\"avatar-title bg-success rounded-circle font-size-16\">
                                                    <i class=\"ri-checkbox-circle-line\"></i>
                                                </span>
                                    </div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Your item is shipped</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">If several languages coalesce the grammar</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <img src=\"assets/images/users/avatar-4.jpg\"
                                         class=\"mr-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Salena Layfield</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"p-2 border-top\">
                            <a class=\"btn btn-sm btn-link font-size-14 btn-block text-center\" href=\"javascript:void(0)\">
                                <i class=\"mdi mdi-arrow-right-circle mr-1\"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"dropdown d-inline-block user-dropdown\">
                    <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-2.jpg\"
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

                    <li>
                        <a href=\"calendar.html\" class=\" waves-effect\">
                            <i class=\"ri-calendar-2-line\"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"apps-chat.html\" class=\" waves-effect\">
                            <i class=\"ri-chat-1-line\"></i>
                            <span>Chat</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Ecommerce</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"ecommerce-products.html\">Products</a></li>
                            <li><a href=\"ecommerce-product-detail.html\">Product Detail</a></li>
                            <li><a href=\"ecommerce-orders.html\">Orders</a></li>
                            <li><a href=\"ecommerce-customers.html\">Customers</a></li>
                            <li><a href=\"ecommerce-cart.html\">Cart</a></li>
                            <li><a href=\"ecommerce-checkout.html\">Checkout</a></li>
                            <li><a href=\"ecommerce-shops.html\">Shops</a></li>
                            <li><a href=\"ecommerce-add-product.html\">Add Product</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-mail-send-line\"></i>
                            <span>Email</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"email-inbox.html\">Inbox</a></li>
                            <li><a href=\"email-read.html\">Read Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"apps-kanban-board.html\" class=\" waves-effect\">
                            <i class=\"ri-artboard-2-line\"></i>
                            <span>Kanban Board</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-layout-3-line\"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"layouts-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"layouts-light-sidebar.html\">Light Sidebar</a></li>
                            <li><a href=\"layouts-compact-sidebar.html\">Compact Sidebar</a></li>
                            <li><a href=\"layouts-icon-sidebar.html\">Icon Sidebar</a></li>
                            <li><a href=\"layouts-boxed.html\">Boxed Layout</a></li>
                            <li><a href=\"layouts-preloader.html\">Preloader</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-title\">Pages</li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-account-circle-line\"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"auth-login.html\">Login</a></li>
                            <li><a href=\"auth-register.html\">Register</a></li>
                            <li><a href=\"auth-recoverpw.html\">Recover Password</a></li>
                            <li><a href=\"auth-lock-screen.html\">Lock Screen</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-profile-line\"></i>
                            <span>Utility</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"pages-starter.html\">Starter Page</a></li>
                            <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                            <li><a href=\"pages-comingsoon.html\">Coming Soon</a></li>
                            <li><a href=\"pages-timeline.html\">Timeline</a></li>
                            <li><a href=\"pages-faqs.html\">FAQs</a></li>
                            <li><a href=\"pages-pricing.html\">Pricing</a></li>
                            <li><a href=\"pages-404.html\">Error 404</a></li>
                            <li><a href=\"pages-500.html\">Error 500</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-title\">Components</li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-pencil-ruler-2-line\"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><a href=\"ui-cards.html\">Cards</a></li>
                            <li><a href=\"ui-carousel.html\">Carousel</a></li>
                            <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                            <li><a href=\"ui-grid.html\">Grid</a></li>
                            <li><a href=\"ui-images.html\">Images</a></li>
                            <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                            <li><a href=\"ui-modals.html\">Modals</a></li>
                            <li><a href=\"ui-rangeslider.html\">Range Slider</a></li>
                            <li><a href=\"ui-roundslider.html\">Round Slider</a></li>
                            <li><a href=\"ui-session-timeout.html\">Session Timeout</a></li>
                            <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                            <li><a href=\"ui-sweet-alert.html\">Sweet Alerts</a></li>
                            <li><a href=\"ui-tabs-accordions.html\">Tabs & Accordions</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li><a href=\"ui-video.html\">Video</a></li>
                            <li><a href=\"ui-general.html\">General</a></li>
                            <li><a href=\"ui-rating.html\">Rating</a></li>
                            <li><a href=\"ui-notifications.html\">Notifications</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"waves-effect\">
                            <i class=\"ri-eraser-fill\"></i>
                            <span class=\"badge badge-pill badge-danger float-right\">6</span>
                            <span>Forms</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"form-elements.html\">Elements</a></li>
                            <li><a href=\"form-validation.html\">Validation</a></li>
                            <li><a href=\"form-advanced.html\">Advanced Plugins</a></li>
                            <li><a href=\"form-editors.html\">Editors</a></li>
                            <li><a href=\"form-uploads.html\">File Upload</a></li>
                            <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            <li><a href=\"form-wizard.html\">Wizard</a></li>
                            <li><a href=\"form-mask.html\">Mask</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-table-2\"></i>
                            <span>Tables</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                            <li><a href=\"tables-datatable.html\">Data Tables</a></li>
                            <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                            <li><a href=\"tables-editable.html\">Editable Table</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-bar-chart-line\"></i>
                            <span>Charts</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"charts-apex.html\">Apexcharts</a></li>
                            <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                            <li><a href=\"charts-flot.html\">Flot</a></li>
                            <li><a href=\"charts-knob.html\">Jquery Knob</a></li>
                            <li><a href=\"charts-sparkline.html\">Sparkline</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-brush-line\"></i>
                            <span>Icons</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"icons-remix.html\">Remix Icons</a></li>
                            <li><a href=\"icons-materialdesign.html\">Material Design</a></li>
                            <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                            <li><a href=\"icons-fontawesome.html\">Font awesome 5</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-map-pin-line\"></i>
                            <span>Maps</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"maps-google.html\">Google Maps</a></li>
                            <li><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-share-line\"></i>
                            <span>Multi Level</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"true\">
                            <li><a href=\"javascript: void(0);\">Level 1.1</a></li>
                            <li><a href=\"javascript: void(0);\" class=\"has-arrow\">Level 1.2</a>
                                <ul class=\"sub-menu\" aria-expanded=\"true\">
                                    <li><a href=\"javascript: void(0);\">Level 2.1</a></li>
                                    <li><a href=\"javascript: void(0);\">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



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
                <img src=\"assets/images/layouts/layout-1.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"assets/images/layouts/layout-2.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"dark-mode-switch\" data-bsStyle=\"assets/css/bootstrap-dark.min.css\" data-appStyle=\"assets/css/app-dark.min.css\" />
                <label class=\"custom-control-label\" for=\"dark-mode-switch\">Dark Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"assets/images/layouts/layout-3.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-5\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"rtl-mode-switch\" data-appStyle=\"assets/css/app-rtl.min.css\" />
                <label class=\"custom-control-label\" for=\"rtl-mode-switch\">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
";
        // line 729
        $this->displayBlock('content', $context, $blocks);
        // line 731
        echo "<!-- Right bar overlay-->
<div class=\"rightbar-overlay\"></div>

<!-- JAVASCRIPT -->
";
        // line 735
        $this->displayBlock('js', $context, $blocks);
        // line 742
        echo "
<!-- apexcharts -->
";
        // line 744
        $this->displayBlock('apexchart', $context, $blocks);
        // line 747
        echo "
<!-- jquery.vectormap map -->
";
        // line 749
        $this->displayBlock('jqueryvector', $context, $blocks);
        // line 753
        echo "<!-- Required datatable js -->
";
        // line 754
        $this->displayBlock('datatablejs', $context, $blocks);
        // line 758
        echo "<!-- Responsive examples -->
";
        // line 759
        $this->displayBlock('responsiveexemles', $context, $blocks);
        // line 767
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        // line 13
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 18
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_Datatable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Datatable"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Datatable"));

        // line 22
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_responsivedatatable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsivedatatable"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsivedatatable"));

        // line 26
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_bootstrapcss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrapcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrapcss"));

        // line 30
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_iconcss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "iconcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "iconcss"));

        // line 34
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_appcss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appcss"));

        // line 38
        echo "    <link href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\"\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 729
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 735
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 736
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 737
        echo "public/assets/libs/bootstrap/js/bootstrap.bundle.min.js";
        echo "\"></script>
<script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/metismenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/node-waves/waves.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 744
    public function block_apexchart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "apexchart"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "apexchart"));

        // line 745
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 749
    public function block_jqueryvector($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jqueryvector"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jqueryvector"));

        // line 750
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 754
    public function block_datatablejs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatablejs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatablejs"));

        // line 755
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 759
    public function block_responsiveexemles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsiveexemles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsiveexemles"));

        // line 760
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/dashboard.init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1157 => 765,  1152 => 763,  1147 => 761,  1142 => 760,  1132 => 759,  1120 => 756,  1115 => 755,  1105 => 754,  1093 => 751,  1088 => 750,  1078 => 749,  1065 => 745,  1055 => 744,  1043 => 740,  1039 => 739,  1035 => 738,  1031 => 737,  1026 => 736,  1016 => 735,  998 => 729,  985 => 38,  975 => 37,  962 => 34,  952 => 33,  939 => 30,  929 => 29,  916 => 26,  906 => 25,  893 => 22,  883 => 21,  870 => 18,  860 => 17,  847 => 13,  837 => 12,  825 => 767,  823 => 759,  820 => 758,  818 => 754,  815 => 753,  813 => 749,  809 => 747,  807 => 744,  803 => 742,  801 => 735,  795 => 731,  793 => 729,  102 => 40,  100 => 37,  97 => 36,  95 => 33,  92 => 32,  90 => 29,  87 => 28,  85 => 25,  82 => 24,  80 => 21,  77 => 20,  75 => 17,  71 => 15,  69 => 12,  56 => 1,);
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
    {% block favicon %}
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">
    {% endblock %}

    <!-- jquery.vectormap css -->
    {% block jquery %}
    <link href=\"{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css\" rel=\"stylesheet\" type=\"text/css') }}\" />
    {% endblock %}
    <!-- DataTables -->
    {% block Datatable %}
    <link href=\"{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css') }}\" />
    {% endblock %}
    <!-- Responsive datatable examples -->
    {% block responsivedatatable %}
    <link href=\"{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css')}}\" />
    {% endblock %}
    <!-- Bootstrap Css -->
    {% block bootstrapcss %}
    <link href=\"{{ asset('assets/css/bootstrap.min.css\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css' )}}\" />
    {% endblock %}
    <!-- Icons Css -->
    {% block iconcss %}
    <link href=\"{{asset( 'assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css' )}}\" />
    {% endblock %}
    <!-- App Css-->
    {% block appcss %}
    <link href={{ asset('assets/css/app.min.css\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css') }}\"\" />
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
                                    <img src=\"assets/images/logo-sm-dark.png\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"20\">
                                </span>
                    </a>

                    <a href=\"index.html\" class=\"logo logo-light\">
                                <span class=\"logo-sm\">
                                    <img src=\"assets/images/logo-sm-light.png\" alt=\"\" height=\"22\">
                                </span>
                        <span class=\"logo-lg\">
                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"20\">
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

                <div class=\"dropdown dropdown-mega d-none d-lg-block ml-2\">
                    <button type=\"button\" class=\"btn header-item waves-effect\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        Mega Menu
                        <i class=\"mdi mdi-chevron-down\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-megamenu\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">UI Components</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Rating</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Forms</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tables</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">Applications</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Calendar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Email</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Projects</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tasks</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <h5 class=\"font-size-14 mt-0\">Extra Pages</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Timeline</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <h5 class=\"font-size-14 mt-0\">UI Components</h5>
                                        <ul class=\"list-unstyled megamenu-list\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Rating</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Forms</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Tables</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-sm-5\">
                                        <div>
                                            <img src=\"assets/images/megamenu-img.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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

                <div class=\"dropdown d-none d-sm-inline-block\">
                    <button type=\"button\" class=\"btn header-item waves-effect\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"\" src=\"assets/images/flags/us.jpg\" alt=\"Header Language\" height=\"16\">
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\">

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/spain.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/germany.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">German</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/italy.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Italian</span>
                        </a>

                        <!-- item-->
                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                            <img src=\"assets/images/flags/russia.jpg\" alt=\"user-image\" class=\"mr-1\" height=\"12\"> <span class=\"align-middle\">Russian</span>
                        </a>
                    </div>
                </div>

                <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"ri-apps-2-line\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                        <div class=\"px-lg-2\">
                            <div class=\"row no-gutters\">
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/github.png\" alt=\"Github\">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/bitbucket.png\" alt=\"bitbucket\">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/dribbble.png\" alt=\"dribbble\">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class=\"row no-gutters\">
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/dropbox.png\" alt=\"dropbox\">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/mail_chimp.png\" alt=\"mail_chimp\">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <a class=\"dropdown-icon-item\" href=\"#\">
                                        <img src=\"assets/images/brands/slack.png\" alt=\"slack\">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"dropdown d-none d-lg-inline-block ml-1\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" data-toggle=\"fullscreen\">
                        <i class=\"ri-fullscreen-line\"></i>
                    </button>
                </div>

                <div class=\"dropdown d-inline-block\">
                    <button type=\"button\" class=\"btn header-item noti-icon waves-effect\" id=\"page-header-notifications-dropdown\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"ri-notification-3-line\"></i>
                        <span class=\"noti-dot\"></span>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right p-0\"
                         aria-labelledby=\"page-header-notifications-dropdown\">
                        <div class=\"p-3\">
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    <h6 class=\"m-0\"> Notifications </h6>
                                </div>
                                <div class=\"col-auto\">
                                    <a href=\"#!\" class=\"small\"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style=\"max-height: 230px;\">
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <div class=\"avatar-xs mr-3\">
                                                <span class=\"avatar-title bg-primary rounded-circle font-size-16\">
                                                    <i class=\"ri-shopping-cart-line\"></i>
                                                </span>
                                    </div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Your order is placed</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">If several languages coalesce the grammar</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <img src=\"assets/images/users/avatar-3.jpg\"
                                         class=\"mr-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">James Lemire</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">It will seem like simplified English.</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <div class=\"avatar-xs mr-3\">
                                                <span class=\"avatar-title bg-success rounded-circle font-size-16\">
                                                    <i class=\"ri-checkbox-circle-line\"></i>
                                                </span>
                                    </div>
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Your item is shipped</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">If several languages coalesce the grammar</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href=\"\" class=\"text-reset notification-item\">
                                <div class=\"media\">
                                    <img src=\"assets/images/users/avatar-4.jpg\"
                                         class=\"mr-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                    <div class=\"media-body\">
                                        <h6 class=\"mt-0 mb-1\">Salena Layfield</h6>
                                        <div class=\"font-size-12 text-muted\">
                                            <p class=\"mb-1\">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class=\"mb-0\"><i class=\"mdi mdi-clock-outline\"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"p-2 border-top\">
                            <a class=\"btn btn-sm btn-link font-size-14 btn-block text-center\" href=\"javascript:void(0)\">
                                <i class=\"mdi mdi-arrow-right-circle mr-1\"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"dropdown d-inline-block user-dropdown\">
                    <button type=\"button\" class=\"btn header-item waves-effect\" id=\"page-header-user-dropdown\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-2.jpg\"
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

                    <li>
                        <a href=\"calendar.html\" class=\" waves-effect\">
                            <i class=\"ri-calendar-2-line\"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"apps-chat.html\" class=\" waves-effect\">
                            <i class=\"ri-chat-1-line\"></i>
                            <span>Chat</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-store-2-line\"></i>
                            <span>Ecommerce</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"ecommerce-products.html\">Products</a></li>
                            <li><a href=\"ecommerce-product-detail.html\">Product Detail</a></li>
                            <li><a href=\"ecommerce-orders.html\">Orders</a></li>
                            <li><a href=\"ecommerce-customers.html\">Customers</a></li>
                            <li><a href=\"ecommerce-cart.html\">Cart</a></li>
                            <li><a href=\"ecommerce-checkout.html\">Checkout</a></li>
                            <li><a href=\"ecommerce-shops.html\">Shops</a></li>
                            <li><a href=\"ecommerce-add-product.html\">Add Product</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-mail-send-line\"></i>
                            <span>Email</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"email-inbox.html\">Inbox</a></li>
                            <li><a href=\"email-read.html\">Read Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"apps-kanban-board.html\" class=\" waves-effect\">
                            <i class=\"ri-artboard-2-line\"></i>
                            <span>Kanban Board</span>
                        </a>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-layout-3-line\"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"layouts-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"layouts-light-sidebar.html\">Light Sidebar</a></li>
                            <li><a href=\"layouts-compact-sidebar.html\">Compact Sidebar</a></li>
                            <li><a href=\"layouts-icon-sidebar.html\">Icon Sidebar</a></li>
                            <li><a href=\"layouts-boxed.html\">Boxed Layout</a></li>
                            <li><a href=\"layouts-preloader.html\">Preloader</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-title\">Pages</li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-account-circle-line\"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"auth-login.html\">Login</a></li>
                            <li><a href=\"auth-register.html\">Register</a></li>
                            <li><a href=\"auth-recoverpw.html\">Recover Password</a></li>
                            <li><a href=\"auth-lock-screen.html\">Lock Screen</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-profile-line\"></i>
                            <span>Utility</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"pages-starter.html\">Starter Page</a></li>
                            <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                            <li><a href=\"pages-comingsoon.html\">Coming Soon</a></li>
                            <li><a href=\"pages-timeline.html\">Timeline</a></li>
                            <li><a href=\"pages-faqs.html\">FAQs</a></li>
                            <li><a href=\"pages-pricing.html\">Pricing</a></li>
                            <li><a href=\"pages-404.html\">Error 404</a></li>
                            <li><a href=\"pages-500.html\">Error 500</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-title\">Components</li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-pencil-ruler-2-line\"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><a href=\"ui-cards.html\">Cards</a></li>
                            <li><a href=\"ui-carousel.html\">Carousel</a></li>
                            <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                            <li><a href=\"ui-grid.html\">Grid</a></li>
                            <li><a href=\"ui-images.html\">Images</a></li>
                            <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                            <li><a href=\"ui-modals.html\">Modals</a></li>
                            <li><a href=\"ui-rangeslider.html\">Range Slider</a></li>
                            <li><a href=\"ui-roundslider.html\">Round Slider</a></li>
                            <li><a href=\"ui-session-timeout.html\">Session Timeout</a></li>
                            <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                            <li><a href=\"ui-sweet-alert.html\">Sweet Alerts</a></li>
                            <li><a href=\"ui-tabs-accordions.html\">Tabs & Accordions</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li><a href=\"ui-video.html\">Video</a></li>
                            <li><a href=\"ui-general.html\">General</a></li>
                            <li><a href=\"ui-rating.html\">Rating</a></li>
                            <li><a href=\"ui-notifications.html\">Notifications</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"waves-effect\">
                            <i class=\"ri-eraser-fill\"></i>
                            <span class=\"badge badge-pill badge-danger float-right\">6</span>
                            <span>Forms</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"form-elements.html\">Elements</a></li>
                            <li><a href=\"form-validation.html\">Validation</a></li>
                            <li><a href=\"form-advanced.html\">Advanced Plugins</a></li>
                            <li><a href=\"form-editors.html\">Editors</a></li>
                            <li><a href=\"form-uploads.html\">File Upload</a></li>
                            <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            <li><a href=\"form-wizard.html\">Wizard</a></li>
                            <li><a href=\"form-mask.html\">Mask</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-table-2\"></i>
                            <span>Tables</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                            <li><a href=\"tables-datatable.html\">Data Tables</a></li>
                            <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                            <li><a href=\"tables-editable.html\">Editable Table</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-bar-chart-line\"></i>
                            <span>Charts</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"charts-apex.html\">Apexcharts</a></li>
                            <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                            <li><a href=\"charts-flot.html\">Flot</a></li>
                            <li><a href=\"charts-knob.html\">Jquery Knob</a></li>
                            <li><a href=\"charts-sparkline.html\">Sparkline</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-brush-line\"></i>
                            <span>Icons</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"icons-remix.html\">Remix Icons</a></li>
                            <li><a href=\"icons-materialdesign.html\">Material Design</a></li>
                            <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                            <li><a href=\"icons-fontawesome.html\">Font awesome 5</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-map-pin-line\"></i>
                            <span>Maps</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"false\">
                            <li><a href=\"maps-google.html\">Google Maps</a></li>
                            <li><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript: void(0);\" class=\"has-arrow waves-effect\">
                            <i class=\"ri-share-line\"></i>
                            <span>Multi Level</span>
                        </a>
                        <ul class=\"sub-menu\" aria-expanded=\"true\">
                            <li><a href=\"javascript: void(0);\">Level 1.1</a></li>
                            <li><a href=\"javascript: void(0);\" class=\"has-arrow\">Level 1.2</a>
                                <ul class=\"sub-menu\" aria-expanded=\"true\">
                                    <li><a href=\"javascript: void(0);\">Level 2.1</a></li>
                                    <li><a href=\"javascript: void(0);\">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



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
                <img src=\"assets/images/layouts/layout-1.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"assets/images/layouts/layout-2.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"dark-mode-switch\" data-bsStyle=\"assets/css/bootstrap-dark.min.css\" data-appStyle=\"assets/css/app-dark.min.css\" />
                <label class=\"custom-control-label\" for=\"dark-mode-switch\">Dark Mode</label>
            </div>

            <div class=\"mb-2\">
                <img src=\"assets/images/layouts/layout-3.jpg\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-5\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"rtl-mode-switch\" data-appStyle=\"assets/css/app-rtl.min.css\" />
                <label class=\"custom-control-label\" for=\"rtl-mode-switch\">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
{% block content %}
{% endblock %}
<!-- Right bar overlay-->
<div class=\"rightbar-overlay\"></div>

<!-- JAVASCRIPT -->
{% block js %}
<script src=\"{{ asset('assets/libs/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ ('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/metismenu/metisMenu.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/simplebar/simplebar.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/node-waves/waves.min.js') }}\"></script>
{% endblock %}

<!-- apexcharts -->
{% block apexchart %}
<script src=\"{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}\"></script>
{% endblock %}

<!-- jquery.vectormap map -->
{% block jqueryvector %}
<script src=\"{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}\"></script>
{% endblock %}
<!-- Required datatable js -->
{% block datatablejs %}
<script src=\"{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
{% endblock %}
<!-- Responsive examples -->
{% block responsiveexemles %}
<script src=\"{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/pages/dashboard.init.js') }}\"></script>

<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{% endblock %}
</body>
</html>
", "baseback.html.twig", "C:\\xampp\\htdocs\\VolcanoFootball\\templates\\baseback.html.twig");
    }
}
