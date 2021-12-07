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

/* portfolio/categorie.html.twig */
class __TwigTemplate_427006fa4ebaa0d6a62d5423eccc8994b9906eb056cf765e7698160d77a954b8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/categorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos chats à l'adoption par categories";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- WELCOME -->

    <section data-jarallax data-speed=\".8\" class=\"pt-12 pt-md-14 pb-12 pb-md-15 overlay overlay-black\" style=\"margin-top: -87px;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                    <!-- Headin -->
                    <h1 class=\"display-2 fw-bold text-black\">
                        <br>
                        ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "
                    </h1>
                    <p class=\"lead text-white-75 mb-4\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Shape -->
    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-flip-x svg-shim text-light\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720c1442.5 52 720 0 720 0h0v48z\"></path></svg>

        </div>

    </div>


    <!-- CONTENT -->
    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
        <div class=\"container\">
            <div class=\"row\" id=\"portfolio\" data-isotope='{\"layoutMode\": \"masonry\"}'>

                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chat"]) {
            // line 43
            echo "                    <div class=\"col-12 col-md-4 \">

                        <!-- Card -->
                        <a class=\"card shadow-light-lg mb-7\" href=\"#!\" data-bigpicture='{\"imgSrc\": \"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 46))), "html", null, true);
            echo "}'>
                            <div class=\"card-zoom\">
                                <img class=\"card-img\"  src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" alt=\"...\"/>

                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>

    </section>

";
    }

    public function getTemplateName()
    {
        return "portfolio/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 54,  116 => 48,  111 => 46,  106 => 43,  102 => 42,  76 => 19,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "portfolio/categorie.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\portfolio\\categorie.html.twig");
    }
}
