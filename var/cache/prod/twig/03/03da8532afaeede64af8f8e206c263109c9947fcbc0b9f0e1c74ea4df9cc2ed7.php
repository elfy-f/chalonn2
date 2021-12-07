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
class __TwigTemplate_9625169cb9b9123ec9a9e1706ca3b800b3fca48776df83f2b0c9c0a337f892c6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "a_propos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "A propos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  93 => 39,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a_propos/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\a_propos\\index.html.twig");
    }
}
