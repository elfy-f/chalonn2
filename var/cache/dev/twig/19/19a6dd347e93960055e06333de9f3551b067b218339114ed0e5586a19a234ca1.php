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

/* a_propos/index.html.twig */
class __TwigTemplate_57d3993277ed89fd5d4ae64a0a525e1d988b66f3cea99d1e72dfda7d2cb689f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "a_propos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "A propos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"py-10 py-md-14 overlay overlay-black overlay-60 bg-cover\" style=\"background-image: url(assets/img/covers/cover-5.jpg);\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                    <!-- Heading -->
                    <h1 class=\"display-2 fw-bold text-white\">

                    </h1>

                    <!-- Text -->
                    <p class=\"lead text-white-75 mb-0\">

                        Au mois de juin 2013, Chenil Service a été sollicité par la Mairie pour effectuer un ramassage de chats errants, dans une rue de la ville de Merdrignac.<br>
                        Nous comprenons très bien leur intervention et ne jugeons pas. Par contre face à cette solution extrême, nous pouvons proposer une alternative. <br>
                        N'ayant pas d'association de protection animale dans le secteur, nous avons décidé de créer une association de \"chats libres\".<br>
                        <br>
                        L'association a été enregistrée à la Préfecture des Côtes d’Armor en date du 16 septembre 2013.<br>


                        Notre mission a débuté en Novembre 2013. Des campagnes de stérilisations avec arrêtés municipaux sont toujours en cours. Les chats errants prennent ensuite le statut de \"chats libres\".....ils sont remis sur leurs lieux de vie et protégés par l'association (sites).<br>
                        Des adhérents-référents prennent soins d'eux et sont obligatoirement en relation avec l'association.<br>
                        <br>

                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


                    <div class=\"col-6 col-md-3\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image2accueil.jpg"), "html", null, true);
        echo "\">
                    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "a_propos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos{% endblock %}

{% block body %}
    <section class=\"py-10 py-md-14 overlay overlay-black overlay-60 bg-cover\" style=\"background-image: url(assets/img/covers/cover-5.jpg);\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                    <!-- Heading -->
                    <h1 class=\"display-2 fw-bold text-white\">

                    </h1>

                    <!-- Text -->
                    <p class=\"lead text-white-75 mb-0\">

                        Au mois de juin 2013, Chenil Service a été sollicité par la Mairie pour effectuer un ramassage de chats errants, dans une rue de la ville de Merdrignac.<br>
                        Nous comprenons très bien leur intervention et ne jugeons pas. Par contre face à cette solution extrême, nous pouvons proposer une alternative. <br>
                        N'ayant pas d'association de protection animale dans le secteur, nous avons décidé de créer une association de \"chats libres\".<br>
                        <br>
                        L'association a été enregistrée à la Préfecture des Côtes d’Armor en date du 16 septembre 2013.<br>


                        Notre mission a débuté en Novembre 2013. Des campagnes de stérilisations avec arrêtés municipaux sont toujours en cours. Les chats errants prennent ensuite le statut de \"chats libres\".....ils sont remis sur leurs lieux de vie et protégés par l'association (sites).<br>
                        Des adhérents-référents prennent soins d'eux et sont obligatoirement en relation avec l'association.<br>
                        <br>

                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


                    <div class=\"col-6 col-md-3\">
                        <img src=\"{{ asset('img/image2accueil.jpg') }}\">
                    </div>

    {% endblock %}
", "a_propos/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\a_propos\\index.html.twig");
    }
}
