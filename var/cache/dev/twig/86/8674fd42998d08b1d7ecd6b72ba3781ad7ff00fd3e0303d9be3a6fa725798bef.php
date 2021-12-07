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

/* home/miseenavant.html.twig */
class __TwigTemplate_0d3fdf523d18d380936fb1c6e7502dda5cd5732c5860fe415600d13a490b7184 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/miseenavant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/miseenavant.html.twig"));

        // line 1
        echo "<!-- ARTICLES -->
<section class=\"pb-8  pb-md-11 \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">

                <!-- Heading -->
                <h2 class=\"mb-0\">
                    Les petits nouveaux
                </h2>


                <p class=\"mb-5 text-muted\">

                </p>

            </div>
        </div>
        <!-- / .row -->


        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chats"]) || array_key_exists("chats", $context) ? $context["chats"] : (function () { throw new RuntimeError('Variable "chats" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat"]) {
            // line 24
            echo "
            <div class=\"col-12\">

                <!-- Card -->
                <a class=\"card card-row shadow-light-lg mb-6 lift lift-lg\" data-aos=\"fade-right\">
                    <div class=\"row \">
                        <a class=\"col-12 col-md-6 bg-cover card-img-start\"
                           style=\"background-image: url(/uploads/chats/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 31), "html", null, true);
            echo ");\"
                           href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">

                            <!-- Image -->

                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/chats/" . twig_get_attribute($this->env, $this->source, $context["chat"], "file", [], "any", false, false, false, 36))), "html", null, true);
            echo "\"height=\"400\" width=\"auto\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"card-img-top\">



                        </a>

                        <div
                                class=\"col-12 col-md-6\">
                            <!-- Body -->
                            <a class=\"card-body\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_details", ["nom" => twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">

                                <!-- Heading -->
                                <h3>
                                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                </h3>


                                <!-- Text -->
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["chat"], "caractere", [], "any", false, false, false, 55)), "truncate", [0 => 200, 1 => "...", 2 => false], "method", false, false, false, 55), "html", null, true);
            echo "
                                </p>

                            </a>
                            <!-- Meta -->
                            <a class=\"card-meta\">

                                <!-- Divider -->
                                <hr
                                        class=\"card-meta-divider\">

                            </a>




                        </div>
                    </div>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/miseenavant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  121 => 55,  112 => 49,  105 => 45,  91 => 36,  84 => 32,  80 => 31,  71 => 24,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ARTICLES -->
<section class=\"pb-8  pb-md-11 \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">

                <!-- Heading -->
                <h2 class=\"mb-0\">
                    Les petits nouveaux
                </h2>


                <p class=\"mb-5 text-muted\">

                </p>

            </div>
        </div>
        <!-- / .row -->


        <div class=\"row\">
            {% for chat in chats %}

            <div class=\"col-12\">

                <!-- Card -->
                <a class=\"card card-row shadow-light-lg mb-6 lift lift-lg\" data-aos=\"fade-right\">
                    <div class=\"row \">
                        <a class=\"col-12 col-md-6 bg-cover card-img-start\"
                           style=\"background-image: url(/uploads/chats/{{ chat.file }});\"
                           href=\"{{path('chat_details', {'nom':chat.nom })}}\">

                            <!-- Image -->

                            <img src=\"{{ asset('uploads/chats/'~ chat.file) }}\"height=\"400\" width=\"auto\" alt=\"{{ chat.nom }}\" class=\"card-img-top\">



                        </a>

                        <div
                                class=\"col-12 col-md-6\">
                            <!-- Body -->
                            <a class=\"card-body\" href=\"{{path('chat_details', {'nom':chat.nom })}}\">

                                <!-- Heading -->
                                <h3>
                                    {{ chat.nom }}
                                </h3>


                                <!-- Text -->
                                <p class=\"mb-0 text-muted\">
                                    {{ chat.caractere |u.truncate(200, '...', false) }}
                                </p>

                            </a>
                            <!-- Meta -->
                            <a class=\"card-meta\">

                                <!-- Divider -->
                                <hr
                                        class=\"card-meta-divider\">

                            </a>




                        </div>
                    </div>
            </div>


        {% endfor %}
        </div>
    </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

", "home/miseenavant.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\home\\miseenavant.html.twig");
    }
}
