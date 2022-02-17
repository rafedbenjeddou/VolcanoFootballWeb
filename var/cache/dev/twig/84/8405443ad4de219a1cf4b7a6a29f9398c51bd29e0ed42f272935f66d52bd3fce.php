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

/* base-front.html.twig */
class __TwigTemplate_f446d0f2225d8f5652f798b18accc5648c20f38fe41b22a25fcd50c81d61b6ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>VolcanoFootBall</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/vendor/modernizr.js"), "html", null, true);
        echo "></script>
</head>
<body>
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li><a href=\"#\">Signup/login</a></li>
                        <li><a href=shopcart.html><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span
                                            class=cartitems>0</span>)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"header-lower clearfix\">
            <div class=container>
                <div class=row><h1 class=logo><a href=index-2.html><img src=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo.png"), "html", null, true);
        echo " alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class=\"nav navbar-nav menu-bar\">
                                        <li><a href=index-2.html class=active>Home <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=about.html>about <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a>gallery <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=gallerypage01.html>masonry</a></li>
                                                <li><a href=gallery02.html>gallery column two</a></li>
                                                <li><a href=gallery03.html>gallery column 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=blog.html>blog <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=bookTicket.html>book Tickets <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=shop.html>shop <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=contact.html>contact <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a>error <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=400.html>400 page</a></li>
                                                <li><a href=401.html>401 page</a></li>
                                                <li><a href=403.html>403 page</a></li>
                                                <li><a href=404.html>404 page</a></li>
                                                <li><a href=500.html>500 page</a></li>
                                                <li><a href=503.html>503 page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=social><a href=https://www.facebook.com/templatespoint.net class=facebook><i
                                    class=\"fa fa-facebook\"></i></a> <a href=https://twitter.com/itobuztech class=twitter><i
                                    class=\"fa fa-twitter\"></i></a> <a href=https://www.behance.net/ class=behance><i
                                    class=\"fa fa-behance\"></i></a></div>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 88
        $this->displayBlock('js', $context, $blocks);
        // line 92
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "    <footer class=footer-type01>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo.png"), "html", null, true);
        echo " alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=https://www.facebook.com/templatespoint.net class=bigsocial-link><i
                                            class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=https://twitter.com/ class=bigsocial-link target=_blank><i
                                            class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=https://www.behance.net/ class=bigsocial-link target=_blank><i
                                            class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    <div class=footer-appstore>
                        <figure><a href=#><img src=";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/appstore/apple.png"), "html", null, true);
        echo " alt=image></a></figure>
                        <figure><a href=#><img src=";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/appstore/google.png"), "html", null, true);
        echo " alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "    <link rel=stylesheet href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/style.css"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=text/css href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/layerslider.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 89
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/vendor/vendor.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 93
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 93,  247 => 92,  235 => 90,  230 => 89,  220 => 88,  208 => 14,  204 => 13,  199 => 12,  189 => 11,  168 => 111,  164 => 110,  149 => 98,  144 => 95,  141 => 92,  139 => 88,  82 => 34,  60 => 16,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=no-js lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>
<head>
    <meta charset=utf-8>
    <meta name=description content=\"\">
    <meta name=\"viewport\"
          content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <title>VolcanoFootBall</title>
    <link rel=\"shortcut icon\" href=favicon.ico>
    {% block css %}
    <link rel=stylesheet href=\"{{ asset('front-office/vendor.css') }}\">
    <link rel=stylesheet href=\"{{ asset('front-office/style.css') }}\">
    <link rel=stylesheet type=text/css href=\"{{ asset('front-office/css/layerslider.css') }}\">
    {% endblock %}
    <script src={{ asset('front-office/js/vendor/modernizr.js') }}></script>
</head>
<body>
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        <li><a href=\"#\">Signup/login</a></li>
                        <li><a href=shopcart.html><i class=\"fa fa-shopping-cart\"></i> <span>cart(<span
                                            class=cartitems>0</span>)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"header-lower clearfix\">
            <div class=container>
                <div class=row><h1 class=logo><a href=index-2.html><img src={{ asset('front-office/images/logo.png') }} alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class=\"nav navbar-nav menu-bar\">
                                        <li><a href=index-2.html class=active>Home <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=about.html>about <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a>gallery <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=gallerypage01.html>masonry</a></li>
                                                <li><a href=gallery02.html>gallery column two</a></li>
                                                <li><a href=gallery03.html>gallery column 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=blog.html>blog <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=bookTicket.html>book Tickets <span></span> <span></span>
                                                <span></span> <span></span></a></li>
                                        <li><a href=shop.html>shop <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a href=contact.html>contact <span></span> <span></span> <span></span>
                                                <span></span></a></li>
                                        <li><a>error <span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href=400.html>400 page</a></li>
                                                <li><a href=401.html>401 page</a></li>
                                                <li><a href=403.html>403 page</a></li>
                                                <li><a href=404.html>404 page</a></li>
                                                <li><a href=500.html>500 page</a></li>
                                                <li><a href=503.html>503 page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=social><a href=https://www.facebook.com/templatespoint.net class=facebook><i
                                    class=\"fa fa-facebook\"></i></a> <a href=https://twitter.com/itobuztech class=twitter><i
                                    class=\"fa fa-twitter\"></i></a> <a href=https://www.behance.net/ class=behance><i
                                    class=\"fa fa-behance\"></i></a></div>
                </div>
            </div>
        </div>
    </header>

    {% block js %}
        <script src={{ asset('front-office/js/vendor/vendor.js') }}></script>
        <script src={{ asset('front-office/js/main.js') }}></script>
    {% endblock %}
    {% block content %}

    {% endblock %}
    <footer class=footer-type01>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src={{ asset('front-office/images/logo.png') }} alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=https://www.facebook.com/templatespoint.net class=bigsocial-link><i
                                            class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=https://twitter.com/ class=bigsocial-link target=_blank><i
                                            class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=https://www.behance.net/ class=bigsocial-link target=_blank><i
                                            class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    <div class=footer-appstore>
                        <figure><a href=#><img src={{ asset('front-office/images/appstore/apple.png') }} alt=image></a></figure>
                        <figure><a href=#><img src={{ asset('front-office/images/appstore/google.png') }} alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>

</html>", "base-front.html.twig", "C:\\Users\\DeLL\\Desktop\\VolcanoFootball-main\\templates\\base-front.html.twig");
    }
}
