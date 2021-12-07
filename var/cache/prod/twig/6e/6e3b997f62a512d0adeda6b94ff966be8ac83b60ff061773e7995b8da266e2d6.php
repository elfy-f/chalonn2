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

/* blogpost/actualite.html.twig */
class __TwigTemplate_540fd254200abf98e89c4f97bf997ce3911afe9603ec8340307f42300b69adbe extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blogpost/actualite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Actualité";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_12\">
                        <h2 class=\"mb-0\">
                            Les dernières nouvelles
                        </h2>
                        <p class=\" mb-5 text-muted\">

                        </p>
                    </div>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogposts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
            // line 18
            echo "                        <div class=\"col-12 col-md-4 d-flex\">
                            <div class=\"card  shadow-light-lg lift lift-lg\">
                                <a class=\"card-img-top\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
                                    <a class=\"row justify-content-center\">
                                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/actu/" . twig_get_attribute($this->env, $this->source, $context["blogpost"], "file", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" height=\"300\" width=\"auto\" class=\"sm-col\" alt=\"...\">
                                    </a>
                                </a>
                                <a class=\"card-body\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                                    <h3>
                                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "
                                    </h3>
                                    <p class=\"mb-0 text-muted\">
                                        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["blogpost"], "contenu", [], "any", false, false, false, 30)), "truncate", [0 => 200, 1 => "...", 2 => false], "method", false, false, false, 30), "html", null, true);
            echo "
                                    </p>

                                </a>
                                <a class=\"card-meta mt-auto\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                                    <hr class=\"card-meta-divider\">
                                    <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                         ";
            // line 38
            echo "                                    </p>
                                </a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
            </div>

            <div class=\"d-flex justify-content-center mt-6\">
                ";
        // line 47
        twig_get_attribute($this->env, $this->source, ($context["blogposts"] ?? null), "setPageRange", [0 => 2], "method", false, false, false, 47);
        // line 48
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["blogposts"] ?? null), "base/pagination.html.twig");
        echo "
            </div>

        </section>
    ";
    }

    public function getTemplateName()
    {
        return "blogpost/actualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  130 => 47,  124 => 43,  114 => 38,  108 => 34,  101 => 30,  95 => 27,  90 => 25,  84 => 22,  79 => 20,  75 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blogpost/actualite.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\blogpost\\actualite.html.twig");
    }
}
