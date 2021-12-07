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
class __TwigTemplate_d8da844786b3dd89de69c435e5cbef87225103974a84aa23bdf891df8d36659d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/chatadoption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/chatadoption.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/chatadoption.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos chats à l'adoption par categories";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, (isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 46, $this->source); })()), "file", [], "any", false, false, false, 46))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  165 => 59,  154 => 54,  150 => 53,  140 => 46,  135 => 44,  129 => 40,  126 => 39,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos chats à l'adoption par categories{% endblock %}

{% block body %}
    <!-- WELCOME -->
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

                {% for categorie in categories %}
                    {% set chat = categorie.chats|last %}

                    <div class=\"col-12 col-md-4 ux\">

                        <!-- Card -->
                        <a class=\"card lift lift-lg shadow-light-lg mb-7\" href=\"{{path('portfolio_categorie', {'slug':categorie.slug})}}\">

                            <img class=\"card-img-top\"  src='{{ asset('uploads/chats/'~ chat.file)}}' alt=\"...\"/>
                            <div class=\"card-body\">
                                <div class=\"shape shape-bottom-100 shape-fluid-x svg-shim text-white\">
                                    <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M0 48h2880V0h-720c1442.5 52 720 0 720 0h0v48z\"></path>
                                    </svg>
                                </div>
                                <h4 class=\"mb-0\">{{ categorie.nom }}</h4>
                                <small>{{ categorie.description }}</small>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>




{% endblock %}
", "portfolio/chatadoption.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\portfolio\\chatadoption.html.twig");
    }
}
