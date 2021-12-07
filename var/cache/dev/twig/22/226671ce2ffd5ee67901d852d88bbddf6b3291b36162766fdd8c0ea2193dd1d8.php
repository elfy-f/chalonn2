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

/* Base/footer.html.twig */
class __TwigTemplate_0f79903ba28971cc2fda9b5e4b8e082d8dd998311616bb42890e241bf8dc5a87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/footer.html.twig"));

        // line 1
        echo "
<!-- SHAPE -->
<div class=\"position-relative mt-n11\">
    <div class=\"shape shape-bottom shape-fluid-x text-dark\">
        <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
</div>

<!-- FOOTER -->
    <footer class=\"py-8 py-md-11 bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">

                    <!-- Brand -->
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/new_logo_chalonn_rp.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"footer-brand img-fluid mb-2\">

                    <!-- Text -->
                    <p class=\"text-muted mb-6 mb-md-8 mb-lg-0-700 mb-2\">
                        Association de protection animale.
                    </p>
                </div>

                <div class=\"col-12 col-md-4 col-lg-4\">

                    <!-- Heading -->
                    <h6 class=\"fw-bold text-uppercase text-muted mb-6 mb-md-8 mb-lg-0\">
                        Menu
                    </h6><br>

                    <!-- List -->
                    <ul class=\"list-unstyled text-muted mb-6 mb-md-8 mb-lg-0\">
                        <li >
                            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adoption");
        echo "\" class=\"text-reset\">
                                Nos chats à l'adoption
                            </a>
                        </li>
                        <li >
                            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
        echo "\" class=\"text-reset\">
                               Actualités
                            </a>
                        </li>

                        <li >
                            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\" class=\"text-reset\">
                                A Propos
                            </a>
                        </li>
                     ";
        // line 53
        echo "                        <li>
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire");
        echo "\" class=\"text-reset\">
                                Nos partenaires
                            </a>
                        </li>

                        <li>
                            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"text-reset\">
                                Nous contacter
                            </a>
                        </li>

                        <li>
                            <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
        echo "\" class=\"text-reset\">
                                Mentions légales
                            </a>
                        </li>
                    </ul>

                </div>

                <div class=\"col-12 col-md-4 col-lg-4\">

                    <!-- Heading -->
                    <h6 class=\"fw-bold text-uppercase text-muted mb-6 mb-md-8 mb-lg-0\">
                        Informations
                    </h6>

                    <!-- Text -->
                    <p class=\" text-muted mb-6 mb-md-8 mb-lg-0\">
                        Association de protection animale qui vient en aide aux chats en difficultés.
                    </p>
                    <p class=\" text-muted mb-6 mb-md-8 mb-lg-0\">
                        Nous sommes à Médrignac (22), nous aidons les chats des départements voisins également.
                    </p>
                        <br>
                    <a href=\"https://www.facebook.com/Association-Chalonn-540012532753425\" class=\"text-reset\">
                        <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/face.png"), "html", null, true);
        echo "\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>

                    <a href=\"https://www.instagram.com/association_chalonn/\" class=\"text-reset\">
                        <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/insta.png"), "html", null, true);
        echo "\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>

                    <a href=\"https://chalonn.fr/forum/index.php\" class=\"text-reset\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/forum.png"), "html", null, true);
        echo "\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>
                    <br><br>
                    ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "                        ";
            // line 106
            echo "


                            <a class=\"text-black\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\" nav-link\" >Déconnexion</a>


                    ";
        } else {
            // line 113
            echo "
                                <a class=\"text-black\" href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\" \" >Connection admin</a>



                            ";
            // line 121
            echo "                        </ul>


                    ";
        }
        // line 125
        echo "
                </div>


                    <!-- List -->
                    <ul class=\"list-unstyled text-muted mb-6 mb-md-8 mb-lg-0\">
                        <li class=\"mb-3\">
                            <a href=\"#!\" class=\"text-reset\">

                            </a>
                        </li>

                    </ul>

                </div>


            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Base/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 125,  198 => 121,  191 => 114,  188 => 113,  181 => 109,  176 => 106,  174 => 102,  172 => 101,  166 => 98,  159 => 94,  152 => 90,  125 => 66,  116 => 60,  107 => 54,  104 => 53,  97 => 44,  88 => 38,  80 => 33,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- SHAPE -->
<div class=\"position-relative mt-n11\">
    <div class=\"shape shape-bottom shape-fluid-x text-dark\">
        <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
</div>

<!-- FOOTER -->
    <footer class=\"py-8 py-md-11 bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">

                    <!-- Brand -->
                    <img src=\"{{ asset('img/new_logo_chalonn_rp.png') }}\" alt=\"logo\" class=\"footer-brand img-fluid mb-2\">

                    <!-- Text -->
                    <p class=\"text-muted mb-6 mb-md-8 mb-lg-0-700 mb-2\">
                        Association de protection animale.
                    </p>
                </div>

                <div class=\"col-12 col-md-4 col-lg-4\">

                    <!-- Heading -->
                    <h6 class=\"fw-bold text-uppercase text-muted mb-6 mb-md-8 mb-lg-0\">
                        Menu
                    </h6><br>

                    <!-- List -->
                    <ul class=\"list-unstyled text-muted mb-6 mb-md-8 mb-lg-0\">
                        <li >
                            <a href=\"{{path('adoption')}}\" class=\"text-reset\">
                                Nos chats à l'adoption
                            </a>
                        </li>
                        <li >
                            <a href=\"{{path('actualites')}}\" class=\"text-reset\">
                               Actualités
                            </a>
                        </li>

                        <li >
                            <a href=\"{{path('a_propos')}}\" class=\"text-reset\">
                                A Propos
                            </a>
                        </li>
                     {#    <li>
                            <a href=\"{{ path('libre') }}\" class=\"text-reset\">
                                Nos chats libres
                            </a>
                        </li>#}
                        <li>
                            <a href=\"{{path('partenaire')}}\" class=\"text-reset\">
                                Nos partenaires
                            </a>
                        </li>

                        <li>
                            <a href=\"{{path('contact')}}\" class=\"text-reset\">
                                Nous contacter
                            </a>
                        </li>

                        <li>
                            <a href=\"{{path('mention')}}\" class=\"text-reset\">
                                Mentions légales
                            </a>
                        </li>
                    </ul>

                </div>

                <div class=\"col-12 col-md-4 col-lg-4\">

                    <!-- Heading -->
                    <h6 class=\"fw-bold text-uppercase text-muted mb-6 mb-md-8 mb-lg-0\">
                        Informations
                    </h6>

                    <!-- Text -->
                    <p class=\" text-muted mb-6 mb-md-8 mb-lg-0\">
                        Association de protection animale qui vient en aide aux chats en difficultés.
                    </p>
                    <p class=\" text-muted mb-6 mb-md-8 mb-lg-0\">
                        Nous sommes à Médrignac (22), nous aidons les chats des départements voisins également.
                    </p>
                        <br>
                    <a href=\"https://www.facebook.com/Association-Chalonn-540012532753425\" class=\"text-reset\">
                        <img src=\"{{ asset('img/face.png') }}\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>

                    <a href=\"https://www.instagram.com/association_chalonn/\" class=\"text-reset\">
                        <img src=\"{{ asset('img/insta.png') }}\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>

                    <a href=\"https://chalonn.fr/forum/index.php\" class=\"text-reset\">
                        <img src=\"{{ asset('img/forum.png') }}\" height=\"auto\" width=\"50\" alt=\"facebook\" class=\"footer-brand img-fluid mb-2\">
                    </a>
                    <br><br>
                    {% if app.user %}
                        {#   <ul class=\"navbar-nav ms-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('compte')}}\" class=\" nav-link\" >Mon compte</a>
                                </li>#}



                            <a class=\"text-black\" href=\"{{path('app_logout')}}\" class=\" nav-link\" >Déconnexion</a>


                    {% else %}

                                <a class=\"text-black\" href=\"{{path('app_login')}}\" class=\" \" >Connection admin</a>



                            {#  <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('register')}}\" class=\" nav-link\" >M'inscrire</a>
                                </li>#}
                        </ul>


                    {% endif %}

                </div>


                    <!-- List -->
                    <ul class=\"list-unstyled text-muted mb-6 mb-md-8 mb-lg-0\">
                        <li class=\"mb-3\">
                            <a href=\"#!\" class=\"text-reset\">

                            </a>
                        </li>

                    </ul>

                </div>


            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


", "Base/footer.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\Base\\footer.html.twig");
    }
}
