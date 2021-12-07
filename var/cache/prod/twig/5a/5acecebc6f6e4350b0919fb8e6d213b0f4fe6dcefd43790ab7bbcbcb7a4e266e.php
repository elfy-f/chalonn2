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

/* home/welcome.html.twig */
class __TwigTemplate_3413029768af93fc2f57d72dc4a8f4562e057aa9c71892f5a7b72711d8891309 extends Template
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
        echo "<!-- WELCOME -->
<section data-jarallax data-speed=\".8\" class=\"display-1 py-5 py-md-12 jarallax\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image4.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div
                    class=\"col-9 col-md-10 col-lg-8 text-center\">

                <!-- Heading -->
                <h1 class=\"display-1 text-black\">
                    Association Chalonn
                </h1>

                <!-- Text -->
                <h5 class=\"display-8 text-black\">
                    Association de protection animal à but non lucratif, venant en aide aux chats en difficultés.
                </h5>

                <!-- Button -->
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adoption");
        echo "\" class=\"btn btn-primary lift\">
                    Découvrez nos chats à l'adoption.
                    <i class=\"fe fe-arrow-right ms-3\"></i>
                </a>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class=\"position-relative\">
    <div class=\"shape shape-bottom shape-fluid-x svg-shim text-light\">
        <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>
    </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "home/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/welcome.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\home\\welcome.html.twig");
    }
}
