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

/* home/blogpost.html.twig */
class __TwigTemplate_c2eaa3a65a8e9ff286a65db9c85c32c3090d7182457dc039d254367bb9ba574d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blogpost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blogpost.html.twig"));

        // line 1
        echo "<!-- ARTICLES -->
<section class=\"pb-8 pt-7 pt-md-11 pt-md-10\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-12\">

                <!-- Heading -->
                <h3 class=\"mb-0\">
                    Dernières actualités:
                </h3>

                <!-- Text -->
                <p class=\"mb-5 text-muted\">

                </p>

            </div>

        </div>

        <!-- / .row -->
        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
            // line 24
            echo "                <div
                        class=\"col-12  col-lg-4 d-flex\">

                    <!-- Card -->
                    <div class=\"card shadow-light-lg lift lift-lg\" data-aos=\"fade-up\" data-aos-delay=\"100\">

                        <!-- Body -->
                        <a class=\"card-body my-auto\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">

                            <!-- Heading -->
                            <h3 class=\"mt-auto\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "titre", [], "any", false, false, false, 35), "html", null, true);
            echo "
                            </h3>

                            <!-- Text -->
                            <p class=\"mb-0 text-muted\">
                                ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["blogpost"], "contenu", [], "any", false, false, false, 40)), "truncate", [0 => 150, 1 => "...", 2 => false], "method", false, false, false, 40), "html", null, true);
            echo "
                            </p>

                        </a>
                        <a class=\"col-12 col-md-6 bg-cover card-img-start\" style=\"background-image: url(";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 44), "html", null, true);
            echo ")\">

                            <!-- Image -->

                            <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/actu/" . twig_get_attribute($this->env, $this->source, $context["blogpost"], "file", [], "any", false, false, false, 48))), "html", null, true);
            echo "\"height=\"auto\" width=\"300\" alt=\"...\" class=\"card-img-fluid\">



                        </a>                        <!-- Meta -->
                        <a class=\"card-meta mt-auto\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">

                            <!-- Divider -->
                            <hr class=\"card-meta-divider\">

                            <!-- Date -->
                            <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                <time datetime=\"2019-05-02\">Publiée le ";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "createdAt", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
            echo "</time>
                            </p>

                        </a>

                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "



        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/blogpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  127 => 60,  117 => 53,  109 => 48,  102 => 44,  95 => 40,  87 => 35,  80 => 31,  71 => 24,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ARTICLES -->
<section class=\"pb-8 pt-7 pt-md-11 pt-md-10\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-12\">

                <!-- Heading -->
                <h3 class=\"mb-0\">
                    Dernières actualités:
                </h3>

                <!-- Text -->
                <p class=\"mb-5 text-muted\">

                </p>

            </div>

        </div>

        <!-- / .row -->
        <div class=\"row\">
            {% for blogpost in blogposts %}
                <div
                        class=\"col-12  col-lg-4 d-flex\">

                    <!-- Card -->
                    <div class=\"card shadow-light-lg lift lift-lg\" data-aos=\"fade-up\" data-aos-delay=\"100\">

                        <!-- Body -->
                        <a class=\"card-body my-auto\" href=\"{{path('actualites_detail',{'slug': blogpost.slug})}}\">

                            <!-- Heading -->
                            <h3 class=\"mt-auto\">
                                {{blogpost.titre}}
                            </h3>

                            <!-- Text -->
                            <p class=\"mb-0 text-muted\">
                                {{ blogpost.contenu |u.truncate(150,'...', false) }}
                            </p>

                        </a>
                        <a class=\"col-12 col-md-6 bg-cover card-img-start\" style=\"background-image: url({{ blogpost.slug }})\">

                            <!-- Image -->

                            <img src=\"{{ asset('uploads/actu/'~ blogpost.file) }}\"height=\"auto\" width=\"300\" alt=\"...\" class=\"card-img-fluid\">



                        </a>                        <!-- Meta -->
                        <a class=\"card-meta mt-auto\" href=\"{{path('actualites_detail',{'slug': blogpost.slug})}}\">

                            <!-- Divider -->
                            <hr class=\"card-meta-divider\">

                            <!-- Date -->
                            <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                <time datetime=\"2019-05-02\">Publiée le {{ blogpost.createdAt|date('d/m/Y') }}</time>
                            </p>

                        </a>

                    </div>

                </div>
            {% endfor %}




        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
", "home/blogpost.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\home\\blogpost.html.twig");
    }
}
