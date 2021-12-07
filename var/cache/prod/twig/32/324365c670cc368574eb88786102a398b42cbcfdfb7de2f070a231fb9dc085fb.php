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

/* commentaire/commentaires.html.twig */
class __TwigTemplate_42737e8d1d5ba98db22c5a44fc18eaf49894e3e4b11c913cd762deb58f98e0f9 extends Template
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
        echo "<section>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "    <div class=\"container mb-2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">
                <div class=\"card card-row shadow-light-lg\">
                    <div class=\"row gx-0\">
                        <!--body-->
                        <div class=\"card-body\">
                            <blockquote class=\"mb-0 text-center\">
                                <p>
                                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 12), "html", null, true);
            echo "
                                </p>
                                <footer class=\"blockquote-footer\">
                                    <span class=\"h6 text-uppercase\">Par ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 15), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
            echo "</span>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "commentaire/commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  61 => 15,  55 => 12,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "commentaire/commentaires.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\commentaire\\commentaires.html.twig");
    }
}
