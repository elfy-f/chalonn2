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
class __TwigTemplate_41e10a8625be0e979cbd0b09c85cb186b3edafc2f316084803f77ae51cd2e97a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/adoption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/adoption.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/adoption.html.twig", 1);
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

        echo "Chats à l'adoption";
        
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
        echo "        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_6\">
                        <h2 class=\"mb-0\">
                           Votre recherche
                        </h2>
                        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["chats"]) || array_key_exists("chats", $context) ? $context["chats"] : (function () { throw new RuntimeError('Variable "chats" does not exist.', 32, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  189 => 68,  183 => 62,  169 => 54,  163 => 51,  157 => 48,  151 => 45,  145 => 42,  140 => 40,  132 => 37,  128 => 36,  123 => 33,  119 => 32,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block title %}Chats à l'adoption{% endblock %}

    {% block body %}
        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_6\">
                        <h2 class=\"mb-0\">
                           Votre recherche
                        </h2>
                        {{ form(form) }}
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
                    {% for chat in chats%}
                    <div class=\"col-12 col-md-6 d-flex\">
                        <div class=\"card mb-6 shadow-light-lg lift lift-lg\">
                            <a class=\"card-img-top\"
                               href=\"{{path('chat_details', {'nom':chat.nom })}}\">
                                <img src=\"{{ asset('uploads/chats/'~ chat.file) }}\" alt=\"{{ chat.file }}\" class=\"card-img-top\">

                            </a>
                            <a class=\"card-body\" href=\"{{path('chat_details', {'nom':chat.nom })}}\">
                                <h3>
                                    {{ chat.nom }}
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    {{ chat.sexe }}
                                </p>
                                <p class=\"mb-0 text-muted\">
                                   Né(e) le: {{ chat.dateNaissance |date('d/m/Y')}}
                                </p>
                                <p class=\"mb-0 text-muted\">
                                    {{ chat.caractere |u.truncate(100,'...',false)}}
                                </p>
                            </a>
                            <a class=\"card-meta mt-auto\" href=\"{{path('chat_details', {'nom':chat.nom })}}\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                </p>
                            </a>
                        </div>
                    </div>
                    {% endfor%}
                </div>
            </div>

            <div class=\"d-flex justify-content-center\">
             {#    {% do chats.setPageRange(2) %}
                {{ knp_pagination_render(chats, 'base/pagination.html.twig') }}#}
            </div>

        </section>
    {% endblock %}

", "chat/adoption.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\chat\\adoption.html.twig");
    }
}
