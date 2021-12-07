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
class __TwigTemplate_bd74e48d87949b63d50046d57c26cb6c8a7e4d1017a2684c45398fc37938c075 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/nav.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  149 => 103,  142 => 98,  138 => 77,  126 => 63,  119 => 59,  106 => 49,  99 => 45,  95 => 43,  92 => 39,  84 => 31,  77 => 27,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- NAVBAR -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-white border-bottom\">
    <div class=\"container\">

        <!-- Brand -->
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
            <img src=\"{{ asset('img/new_logo.png') }}\" class=\"w-50 navbar-brand-img \" alt=\"...\">
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
                    <a  href=\"{{path('adoption')}}\" class=\" nav-link\" >Nos chats à l'adoption</a>
                </li>

                <li class=\"nav-item dropdown\">
                    <a  href=\"{{path('actualites')}}\" class=\" nav-link\" >Actualités</a>
                </li>



            {#    <li class=\"nav-item dropdown\">
                    <a  href=\"{{ path('libre') }}\" class=\" nav-link\" >Nos chats libres</a>
                </li> #}

             {#    <li class=\"nav-item dropdown\">
                    <a  href=\"{{path('disparu')}}\" class=\" nav-link\" >Nos chers disparus</a>
                </li>#}

                <li class=\"nav-item dropdown\">
                    <a  href=\"{{path('partenaire')}}\" class=\" nav-link\" >Nos partenaires</a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{path('a_propos')}}\" class=\"nav-link\">
                        A propos
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarAccount\" data-bs-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       Nous aider
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarAccount\">
                        <li class=\"nav-item dropdown\">
                            <a  href=\"{{ path('fa') }}\" class=\" nav-link\" >Devenir famille d'accueil</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a  href=\"{{ path('parrain') }}\" class=\" nav-link\" >Parrainer un chat</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a  href=\"https://www.paypal.com/donate/?token=0SGIhobktM19odeF796iQJ8qe7Rd5CdRaejdIEtQ7_e25g0kWzmqZ021JbnRfPjktaAJf8B9_3TRIQnP&locale.x=FR\" class=\" nav-link\" >Faire un don</a>
                        </li>



                        {#   {% if app.user %}
                            <ul class=\"navbar-nav ms-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('compte')}}\" class=\" nav-link\" >Mon compte</a>
                                </li>#}


                        {#      <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('app_logout')}}\" class=\" nav-link\" >Déconnexion</a>
                                </li>
                            </ul>

                        {% else %}
                            <ul class=\"navbar-nav ms-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('app_login')}}\" class=\" nav-link\" >Me connecter</a>
                                </li>


                               <li class=\"nav-item dropdown\">
                                    <a  href=\"{{path('register')}}\" class=\" nav-link\" >M'inscrire</a>
                                </li>
                            </ul>


                        {% endif %}#}

                       </ul>
                </li>

                    <!-- Button -->
                    <a class=\"navbar-btn btn btn-auto btn-secondary lift lift ms-auto\" href=\"{{path('contact')}}\">
                        Nous contacter
                    </a>



        </div>

    </div>
</nav>

", "Base/nav.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\Base\\nav.html.twig");
    }
}
