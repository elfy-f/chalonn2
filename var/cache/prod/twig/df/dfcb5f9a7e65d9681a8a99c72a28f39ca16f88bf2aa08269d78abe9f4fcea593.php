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

/* home/miseenavant.html.twig */
class __TwigTemplate_4d3e2dbe8a6251031ed29e82db99fd95e69dcd622aa680b85ccfc7fb2464f394 extends Template
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
        echo "<!-- ARTICLES -->
<section class=\"pb-8  pb-md-11 \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">

                <!-- Heading -->
                <h2 class=\"mb-0\">
                    Les petits nouveaux
                </h2>


                <p class=\"mb-5 text-muted\">

                </p>

            </div>
        </div>
        <!-- / .row -->


        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chat"]) {
            // line 24
            echo "
            <div class=\"col-12\">

                <!-- Card -->
                <a class=\"card card-row shadow-light-lg mb-6 lift lift-lg\" data-aos=\"fade-right\">
                    <div class=\"row \">
                        <a class=\"col-12 col-md-6 bg-cover card-img-start\"
                           style=\"background-image: url(/uploads/chats/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 31), "html", null, true);
            echo ");\"
                           href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">

                            <!-- Image -->

                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 36))), "html", null, true);
            echo "\"height=\"400\" width=\"auto\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"card-img-top\">



                        </a>

                        <div
                                class=\"col-12 col-md-6\">
                            <!-- Body -->
                            <a class=\"card-body\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">

                                <!-- Heading -->
                                <h3>
                                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                </h3>


                                <!-- Text -->
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["chat"], "caractere", [], "any", false, false, false, 55)), "truncate", [0 => 200, 1 => "...", 2 => false], "method", false, false, false, 55), "html", null, true);
            echo "
                                </p>

                            </a>
                            <!-- Meta -->
                            <a class=\"card-meta\">

                                <!-- Divider -->
                                <hr
                                        class=\"card-meta-divider\">

                            </a>




                        </div>
                    </div>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

";
    }

    public function getTemplateName()
    {
        return "home/miseenavant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 77,  115 => 55,  106 => 49,  99 => 45,  85 => 36,  78 => 32,  74 => 31,  65 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/miseenavant.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\home\\miseenavant.html.twig");
    }
}
