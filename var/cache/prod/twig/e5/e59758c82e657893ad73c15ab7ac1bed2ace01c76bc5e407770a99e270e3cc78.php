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

/* blogpost/detail.html.twig */
class __TwigTemplate_f64af5e41d44bffb324bca6f597cf31635543c4599bc6d9cf04c93bcefb732a8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blogpost/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  Actualité
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <!-- SECTION -->
    <section class=\"pt-8  pb-md-11\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">


                            <!-- Name -->
                            <h1 class=\"display-4 text-center\">
                                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogpost"] ?? null), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "
                            </h1>

                    <div class=\"row align-items-center py-5 border-top border-bottom\">
                        <div class=\"col-auto\">
                        </div>
                        <div class=\"col ms-n5\">
                            <!-- Date -->
                            <time class=\"fs-sm text-muted\" datetime=\"2019-05-20\">
                                Publié le ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogpost"] ?? null), "createdAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        echo "
                            </time>

                        </div>

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->

    </section>

    <section class=\"pt-6 pt-md-8\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">
                    <p class=\"mb-6\">
                        ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogpost"] ?? null), "contenu", [], "any", false, false, false, 43), "html", null, true);
        echo "
                    </p>
                </div>
            </div>

        </div>



    </section>

    ";
        // line 54
        $this->loadTemplate("commentaire/form.html.twig", "blogpost/detail.html.twig", 54)->display($context);
        // line 55
        echo "    ";
        $this->loadTemplate("commentaire/commentaires.html.twig", "blogpost/detail.html.twig", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "blogpost/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  118 => 54,  104 => 43,  83 => 25,  71 => 16,  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blogpost/detail.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\blogpost\\detail.html.twig");
    }
}
