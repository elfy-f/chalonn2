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
class __TwigTemplate_77aed7afae8d799bdd29cf566953d7686eceaf8ba44fdd0d7f7e4f8f7fe873c7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/actualite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/actualite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blogpost/actualite.html.twig", 1);
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

        echo "Actualité";
        
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
        $context['_seq'] = twig_ensure_traversable((isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 17, $this->source); })()));
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
        twig_get_attribute($this->env, $this->source, (isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 47, $this->source); })()), "setPageRange", [0 => 2], "method", false, false, false, 47);
        // line 48
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 48, $this->source); })()), "base/pagination.html.twig");
        echo "
            </div>

        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  162 => 48,  160 => 47,  154 => 43,  144 => 38,  138 => 34,  131 => 30,  125 => 27,  120 => 25,  114 => 22,  109 => 20,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block title %}Actualité{% endblock %}

    {% block body %}
        <section class=\"pt-7 pt-md-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col_12\">
                        <h2 class=\"mb-0\">
                            Les dernières nouvelles
                        </h2>
                        <p class=\" mb-5 text-muted\">

                        </p>
                    </div>
                    {% for blogpost in blogposts%}
                        <div class=\"col-12 col-md-4 d-flex\">
                            <div class=\"card  shadow-light-lg lift lift-lg\">
                                <a class=\"card-img-top\" href=\"{{path('actualites_detail',{'slug': blogpost.slug})}}\">
                                    <a class=\"row justify-content-center\">
                                        <img src=\"{{ asset('uploads/actu/'~ blogpost.file)}}\" height=\"300\" width=\"auto\" class=\"sm-col\" alt=\"...\">
                                    </a>
                                </a>
                                <a class=\"card-body\" href=\"{{path('actualites_detail',{'slug': blogpost.slug})}}\">
                                    <h3>
                                        {{ blogpost.titre }}
                                    </h3>
                                    <p class=\"mb-0 text-muted\">
                                        {{ blogpost.contenu | u.truncate(200,'...',false) }}
                                    </p>

                                </a>
                                <a class=\"card-meta mt-auto\" href=\"{{path('actualites_detail',{'slug': blogpost.slug})}}\">
                                    <hr class=\"card-meta-divider\">
                                    <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                         {#   <time>Publiée le {{ blogpost.createAt|date('d/m/Y') }}</time>#}
                                    </p>
                                </a>
                            </div>
                        </div>
                    {% endfor%}
                </div>
            </div>

            <div class=\"d-flex justify-content-center mt-6\">
                {% do blogposts.setPageRange(2) %}
                {{ knp_pagination_render(blogposts, 'base/pagination.html.twig') }}
            </div>

        </section>
    {% endblock %}

", "blogpost/actualite.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\blogpost\\actualite.html.twig");
    }
}
