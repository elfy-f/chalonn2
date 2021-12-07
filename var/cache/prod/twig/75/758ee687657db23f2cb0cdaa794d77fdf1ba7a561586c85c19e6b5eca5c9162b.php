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

/* chat/details.html.twig */
class __TwigTemplate_8d8cfbf4627a45101c2ff9cb996467b0a9097cc794c66744a7f53be1e056b88b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "chat/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    Chat à la loupe
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

    <!-- CONTENT -->
    <div class=\"container-fluid px-md-0\">
        <div class=\"row justify-content-between gx-0 mx-md-0 mx-md-0 mb-6 mb-md-2\">
            <div class=\"col-12 col-md-4  vh-md-100 mx-auto\" style=\"top: 0;\">

                <!-- Sidebar -->
                <aside class=\"flex-grow-1 py-8 py-md-10\">
                    <ul>

                        <!-- Brand -->
                        <div >
                            <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "categorie", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "                                <span class=\"badge bg-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </div>

                        <p class=\"list-group list-group-flush\">

                            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "reserve", [], "any", false, false, false, 28)) {
            // line 29
            echo "                            <li class=\" list-group-item\">
                        <h6 class=\"d-flex mb-0 text-uppercase\">
                            <strong>  est Réservé(e)!!</strong>
                            <span class=\"ms-auto\"></span>
                        </h6>

                        ";
        }
        // line 36
        echo "
                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Nom:
                                <span class=\"ms-auto\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Date de naissance:
                                <span class=\"ms-auto\">";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "dateNaissance", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Race:
                                <span class=\"ms-auto\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "race", [], "any", false, false, false, 62), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Robe:
                                <span class=\"ms-auto\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "pelage", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Sexe:
                                <span class=\"ms-auto\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "sexe", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>
                            </h6>

                        </li>
                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Stérilisé:
                                <span class=\"ms-auto\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "sterelise", [], "any", false, false, false, 91), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Histoire:
                                <span class=\"ms-auto\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "histoire", [], "any", false, false, false, 101)), "truncate", [0 => 1000, 1 => "...", 2 => false], "method", false, false, false, 101), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Caractère:
                                <span class=\"ms-auto\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "caractere", [], "any", false, false, false, 111)), "truncate", [0 => 1000, 1 => "...", 2 => false], "method", false, false, false, 111), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Fiv (sida du chat):
                                <span class=\"ms-auto\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "testFiv", [], "any", false, false, false, 121), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Felv (Leucose du chat):
                                <span class=\"ms-auto\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "testFelv", [], "any", false, false, false, 131), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Frais d'adoption:
                                <span class=\"ms-auto\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "frais", [], "any", false, false, false, 141), "html", null, true);
        echo "
                            €</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Contacter la famille d'accueil:
                                <span class=\"ms-auto\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "contact", [], "any", false, false, false, 152), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                    </ul>

                </aside>

            </div>


            <div class=\"col-12 col-md-7\">

                <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "image", [], "any", false, false, false, 166))), "html", null, true);
        echo "\" height=\"600\" width=\"auto\" >
                <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "img", [], "any", false, false, false, 167))), "html", null, true);
        echo "\" height=\"600\" width=\"auto\">
                <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, ($context["chat"] ?? null), "file", [], "any", false, false, false, 168))), "html", null, true);
        echo "\" height=\"600\" width=\"auto\">


            </div>

        </div>
    </div>

    <!-- SHAPE -->
    <div class=\"position-relative\" style=\"z-index: 1;\">
        <div class=\"shape shape-bottom shape-fluid-x text-light\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
    </div>

    ";
        // line 182
        $this->loadTemplate("commentaire/form.html.twig", "chat/details.html.twig", 182)->display($context);
        // line 183
        echo "    ";
        $this->loadTemplate("commentaire/commentaires.html.twig", "chat/details.html.twig", 183)->display($context);
        // line 184
        echo "

";
    }

    public function getTemplateName()
    {
        return "chat/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 184,  304 => 183,  302 => 182,  285 => 168,  281 => 167,  277 => 166,  260 => 152,  246 => 141,  233 => 131,  220 => 121,  207 => 111,  194 => 101,  181 => 91,  169 => 82,  156 => 72,  143 => 62,  130 => 52,  117 => 42,  109 => 36,  100 => 29,  98 => 28,  92 => 24,  83 => 22,  79 => 21,  75 => 20,  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "chat/details.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\chat\\details.html.twig");
    }
}
