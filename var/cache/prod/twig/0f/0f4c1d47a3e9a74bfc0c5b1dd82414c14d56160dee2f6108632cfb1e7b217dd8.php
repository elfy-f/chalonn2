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

/* Base/nav.html.twig */
class __TwigTemplate_b088214618c3c5e1a51faf3235867cc9e8db69992284944153bce00f828b4901 extends Template
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
<!-- NAVBAR -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-white border-bottom\">
    <div class=\"container\">

        <!-- Brand -->
        <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/new_logo.png"), "html", null, true);
        echo "\" class=\"w-50 navbar-brand-img \" alt=\"...\">
        </a>

        <!-- Toggler -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Collapse -->
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

            <!-- Toggler -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fe fe-x\"></i>
            </button>

            <!-- Navigation -->
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item dropdown\">
                    <a  href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adoption");
        echo "\" class=\" nav-link\" >Nos chats à l'adoption</a>
                </li>

                <li class=\"nav-item dropdown\">
                    <a  href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
        echo "\" class=\" nav-link\" >Actualités</a>
                </li>



            ";
        // line 39
        echo "
             ";
        // line 43
        echo "
                <li class=\"nav-item dropdown\">
                    <a  href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire");
        echo "\" class=\" nav-link\" >Nos partenaires</a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\" class=\"nav-link\">
                        A propos
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarAccount\" data-bs-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       Nous aider
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarAccount\">
                        <li class=\"nav-item dropdown\">
                            <a  href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fa");
        echo "\" class=\" nav-link\" >Devenir famille d'accueil</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a  href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parrain");
        echo "\" class=\" nav-link\" >Parrainer un chat</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a  href=\"https://www.paypal.com/donate/?token=0SGIhobktM19odeF796iQJ8qe7Rd5CdRaejdIEtQ7_e25g0kWzmqZ021JbnRfPjktaAJf8B9_3TRIQnP&locale.x=FR\" class=\" nav-link\" >Faire un don</a>
                        </li>



                        ";
        // line 77
        echo "

                        ";
        // line 98
        echo "
                       </ul>
                </li>

                    <!-- Button -->
                    <a class=\"navbar-btn btn btn-auto btn-secondary lift lift ms-auto\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
                        Nous contacter
                    </a>



        </div>

    </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "Base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 103,  136 => 98,  132 => 77,  120 => 63,  113 => 59,  100 => 49,  93 => 45,  89 => 43,  86 => 39,  78 => 31,  71 => 27,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/nav.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\Base\\nav.html.twig");
    }
}
