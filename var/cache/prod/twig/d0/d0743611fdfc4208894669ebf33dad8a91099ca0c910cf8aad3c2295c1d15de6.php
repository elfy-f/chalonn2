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

/* portfolio/chatadoption.html.twig */
class __TwigTemplate_e147516fa03a80006a37e5be5e1fa2c045aa7687ac8493d8313212a275054bba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/chatadoption.html.twig", 1);
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
    <section class=\"pt-12 pt-md-14 pb-12 pb-md-15 bg-gray-900\" style=\"margin-top: -87px;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                    <!-- Headin -->
                    <h1 class=\"display-2 fw-bold text-black\">
                        <br>
                        Les catégories de nos chats à l'adoption.
                    </h1>
                </div>
            </div>
        </div>

    </section>

    <!-- Shape -->
    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-flip-x svg-shim text-light\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880\"></path></svg>

        </div>
    </div> <!-- / .row -->



    <!-- CONTENT -->
    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
        <div class=\"container\">
            <div class=\"row\" id=\"portfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>

                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 39
            echo "                    ";
            $context["chat"] = twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "chats", [], "any", false, false, false, 39));
            // line 40
            echo "
                    <div class=\"col-12 col-md-4 ux\">

                        <!-- Card -->
                        <a class=\"card lift lift-lg shadow-light-lg mb-7\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio_categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">

                            <img class=\"card-img-top\"  src='";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "file", [], "any", false, false, false, 46))), "html", null, true);
            echo "' alt=\"...\"/>
                            <div class=\"card-body\">
                                <div class=\"shape shape-bottom-100 shape-fluid-x svg-shim text-white\">
                                    <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M0 48h2880V0h-720c1442.5 52 720 0 720 0h0v48z\"></path>
                                    </svg>
                                </div>
                                <h4 class=\"mb-0\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "</h4>
                                <small>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo "</small>
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </div>
        </div>
    </section>




";
    }

    public function getTemplateName()
    {
        return "portfolio/chatadoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  124 => 54,  120 => 53,  110 => 46,  105 => 44,  99 => 40,  96 => 39,  92 => 38,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "portfolio/chatadoption.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\portfolio\\chatadoption.html.twig");
    }
}
