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
class __TwigTemplate_a5c7c1be88c215ecd334859f07f6579fd1b7068f250cfe152f5e2b1e839df783 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 101)) {
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
        return array (  198 => 125,  192 => 121,  185 => 114,  182 => 113,  175 => 109,  170 => 106,  168 => 102,  166 => 101,  160 => 98,  153 => 94,  146 => 90,  119 => 66,  110 => 60,  101 => 54,  98 => 53,  91 => 44,  82 => 38,  74 => 33,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/footer.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\Base\\footer.html.twig");
    }
}
