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
class __TwigTemplate_31aba3bff264f96f7aa9a94b1d0e3eded9fa63ae8698767bd9cab9557b1bfe67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Chat à la loupe
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21));
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 28, $this->source); })()), "reserve", [], "any", false, false, false, 28)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Date de naissance:
                                <span class=\"ms-auto\">";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 52, $this->source); })()), "dateNaissance", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Race:
                                <span class=\"ms-auto\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 62, $this->source); })()), "race", [], "any", false, false, false, 62), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Robe:
                                <span class=\"ms-auto\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 72, $this->source); })()), "pelage", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Sexe:
                                <span class=\"ms-auto\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 82, $this->source); })()), "sexe", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>
                            </h6>

                        </li>
                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Stérilisé:
                                <span class=\"ms-auto\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 91, $this->source); })()), "sterelise", [], "any", false, false, false, 91), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Histoire:
                                <span class=\"ms-auto\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 101, $this->source); })()), "histoire", [], "any", false, false, false, 101)), "truncate", [0 => 1000, 1 => "...", 2 => false], "method", false, false, false, 101), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Caractère:
                                <span class=\"ms-auto\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 111, $this->source); })()), "caractere", [], "any", false, false, false, 111)), "truncate", [0 => 1000, 1 => "...", 2 => false], "method", false, false, false, 111), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Fiv (sida du chat):
                                <span class=\"ms-auto\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 121, $this->source); })()), "testFiv", [], "any", false, false, false, 121), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Felv (Leucose du chat):
                                <span class=\"ms-auto\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 131, $this->source); })()), "testFelv", [], "any", false, false, false, 131), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Frais d'adoption:
                                <span class=\"ms-auto\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 141, $this->source); })()), "frais", [], "any", false, false, false, 141), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 152, $this->source); })()), "contact", [], "any", false, false, false, 152), "html", null, true);
        echo "</span>
                            </h6>

                        </li>

                    </ul>

                </aside>

            </div>


            <div class=\"col-12 col-md-7\">

                <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 166, $this->source); })()), "image", [], "any", false, false, false, 166))), "html", null, true);
        echo "\" height=\"600\" width=\"auto\" >
                <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 167, $this->source); })()), "img", [], "any", false, false, false, 167))), "html", null, true);
        echo "\" height=\"600\" width=\"auto\">
                <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 168, $this->source); })()), "file", [], "any", false, false, false, 168))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  337 => 184,  334 => 183,  332 => 182,  315 => 168,  311 => 167,  307 => 166,  290 => 152,  276 => 141,  263 => 131,  250 => 121,  237 => 111,  224 => 101,  211 => 91,  199 => 82,  186 => 72,  173 => 62,  160 => 52,  147 => 42,  139 => 36,  130 => 29,  128 => 28,  122 => 24,  113 => 22,  109 => 21,  105 => 20,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Chat à la loupe
{% endblock %}

{% block body %}


    <!-- CONTENT -->
    <div class=\"container-fluid px-md-0\">
        <div class=\"row justify-content-between gx-0 mx-md-0 mx-md-0 mb-6 mb-md-2\">
            <div class=\"col-12 col-md-4  vh-md-100 mx-auto\" style=\"top: 0;\">

                <!-- Sidebar -->
                <aside class=\"flex-grow-1 py-8 py-md-10\">
                    <ul>

                        <!-- Brand -->
                        <div >
                            <h2>{{ chat.nom }}</h2>
                            {% for categorie in chat.categorie %}
                                <span class=\"badge bg-secondary\">{{ categorie.nom }}</span>
                            {% endfor %}
                        </div>

                        <p class=\"list-group list-group-flush\">

                            {% if chat.reserve %}
                            <li class=\" list-group-item\">
                        <h6 class=\"d-flex mb-0 text-uppercase\">
                            <strong>  est Réservé(e)!!</strong>
                            <span class=\"ms-auto\"></span>
                        </h6>

                        {% endif %}

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Nom:
                                <span class=\"ms-auto\">{{ chat.nom }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Date de naissance:
                                <span class=\"ms-auto\">{{ chat.dateNaissance|date('d/m/Y') }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Race:
                                <span class=\"ms-auto\">{{ chat.race }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Robe:
                                <span class=\"ms-auto\">{{ chat.pelage }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Sexe:
                                <span class=\"ms-auto\">{{ chat.sexe }}</span>
                            </h6>

                        </li>
                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Stérilisé:
                                <span class=\"ms-auto\">{{ chat.sterelise }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Histoire:
                                <span class=\"ms-auto\">{{ chat.histoire| u.truncate(1000,'...',false) }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Caractère:
                                <span class=\"ms-auto\">{{ chat.caractere |u.truncate(1000, '...', false) }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Fiv (sida du chat):
                                <span class=\"ms-auto\">{{ chat.testFiv }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Teste Felv (Leucose du chat):
                                <span class=\"ms-auto\">{{ chat.testFelv }}</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Frais d'adoption:
                                <span class=\"ms-auto\">{{ chat.frais }}
                            €</span>
                            </h6>

                        </li>

                        <li class=\"list-group-item\">

                            <!-- Heading -->
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Contacter la famille d'accueil:
                                <span class=\"ms-auto\">{{ chat.contact }}</span>
                            </h6>

                        </li>

                    </ul>

                </aside>

            </div>


            <div class=\"col-12 col-md-7\">

                <img src=\"{{ asset('uploads/chats/'~ chat.image) }}\" height=\"600\" width=\"auto\" >
                <img src=\"{{ asset('uploads/chats/'~ chat.img )}}\" height=\"600\" width=\"auto\">
                <img src=\"{{ asset('uploads/chats/'~ chat.file) }}\" height=\"600\" width=\"auto\">


            </div>

        </div>
    </div>

    <!-- SHAPE -->
    <div class=\"position-relative\" style=\"z-index: 1;\">
        <div class=\"shape shape-bottom shape-fluid-x text-light\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
    </div>

    {% include \"commentaire/form.html.twig\" %}
    {% include\"commentaire/commentaires.html.twig\" %}


{% endblock %}




", "chat/details.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\chat\\details.html.twig");
    }
}
