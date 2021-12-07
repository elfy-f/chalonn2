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

/* chat/adoption.html.twig */
class __TwigTemplate_1aba73a858bf3f8516e199916ac1f2435bd736919412ddfe9bfe80727b3d0a55 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "chat/adoption.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Chats à l'adoption";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_6\">
                        <h2 class=\"mb-0\">
                           Votre recherche
                        </h2>
                        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
                        <p class=\" mb-5 text-muted\">

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_12\">
                        <h2 class=\"mb-0\">
                           Tous nos chats à l'adoption
                        </h2>
                        <p class=\" mb-5 text-muted\">

                        </p>
                    </div>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chat"]) {
            // line 33
            echo "                    <div class=\"col-12 col-md-6 d-flex\">
                        <div class=\"card mb-6 shadow-light-lg lift lift-lg\">
                            <a class=\"card-img-top\"
                               href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"card-img-top\">

                            </a>
                            <a class=\"card-body\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                <h3>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "sexe", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                </p>
                                <p class=\"mb-0 text-muted\">
                                   Né(e) le: ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "dateNaissance", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "
                                </p>
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["chat"], "caractere", [], "any", false, false, false, 51)), "truncate", [0 => 100, 1 => "...", 2 => false], "method", false, false, false, 51), "html", null, true);
            echo "
                                </p>
                            </a>
                            <a class=\"card-meta mt-auto\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                </p>
                            </a>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
            </div>

            <div class=\"d-flex justify-content-center\">
             ";
        // line 68
        echo "            </div>

        </section>
    ";
    }

    public function getTemplateName()
    {
        return "chat/adoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 68,  153 => 62,  139 => 54,  133 => 51,  127 => 48,  121 => 45,  115 => 42,  110 => 40,  102 => 37,  98 => 36,  93 => 33,  89 => 32,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "chat/adoption.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\chat\\adoption.html.twig");
    }
}
