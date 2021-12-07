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

/* disparu/index.html.twig */
class __TwigTemplate_ba11262afabcf995ce36aa779f9b016dfe58fae331ccaaaf1246e18cbd69858b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disparu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disparu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disparu/index.html.twig", 1);
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

        echo " Nos disparus!";
        
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
        echo "        <!-- WELCOME -->

        <section class=\"pt-12 pt-md-14 pb-12 pb-md-15 bg-gray-900\" style=\"margin-top: -87px;\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                        <!-- Headin -->
                        <h1 class=\"display-2 fw-bold text-black\">
                            <br>
                            Nos chers diparus.
                        </h1>
                        <h3>
                            Pour ne pas oublier nos petits anges.
                        </h3>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>

        </section>
        <!-- IMAGE -->
        <section data-jarallax data-speed=\".8\" class=\"py-12 py-md-15 bg-cover jarallax\" style=\"background-image: url(assets/img/covers/cover-8.jpg);\"></section>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disparus"]) || array_key_exists("disparus", $context) ? $context["disparus"] : (function () { throw new RuntimeError('Variable "disparus" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disparu"]) {
            // line 33
            echo "        <!-- HEADER -->
        <section class=\"pt-8 pt-md-11\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">

                        <!-- Heading -->
                        <h1 class=\"display-4 text-center\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disparu"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "
                        </h1>

                        <!-- Text -->
                        <p class=\"lead mb-7 text-center text-muted\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disparu"], "histoire", [], "any", false, false, false, 46), "html", null, true);
            echo "
                        </p>

                        <!-- Meta -->
                        <div class=\"row align-items-center py-5 border-top border-bottom\">
                            <div class=\"col-auto\">


                            </div>

                            <div class=\"row justify-content-center\">


                                        <a class=\"row justify-content-center\">
                                            <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/disparu/" . twig_get_attribute($this->env, $this->source, $context["disparu"], "image", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" class=\"sm-col\" alt=\"...\">
                                        </a>


                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- Shape -->
        <div class=\"position-relative\">
            <div class=\"shape shape-bottom shape-flip-x svg-shim text-light\">
                <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880\"></path></svg>

            </div>
        </div> <!-- / .row -->


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disparu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disparu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 82,  155 => 60,  138 => 46,  130 => 41,  120 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nos disparus!{% endblock %}

    {% block body %}
        <!-- WELCOME -->

        <section class=\"pt-12 pt-md-14 pb-12 pb-md-15 bg-gray-900\" style=\"margin-top: -87px;\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                        <!-- Headin -->
                        <h1 class=\"display-2 fw-bold text-black\">
                            <br>
                            Nos chers diparus.
                        </h1>
                        <h3>
                            Pour ne pas oublier nos petits anges.
                        </h3>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>

        </section>
        <!-- IMAGE -->
        <section data-jarallax data-speed=\".8\" class=\"py-12 py-md-15 bg-cover jarallax\" style=\"background-image: url(assets/img/covers/cover-8.jpg);\"></section>
        {% for disparu in disparus%}
        <!-- HEADER -->
        <section class=\"pt-8 pt-md-11\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">

                        <!-- Heading -->
                        <h1 class=\"display-4 text-center\">
                            {{disparu.nom }}
                        </h1>

                        <!-- Text -->
                        <p class=\"lead mb-7 text-center text-muted\">
                            {{ disparu.histoire }}
                        </p>

                        <!-- Meta -->
                        <div class=\"row align-items-center py-5 border-top border-bottom\">
                            <div class=\"col-auto\">


                            </div>

                            <div class=\"row justify-content-center\">


                                        <a class=\"row justify-content-center\">
                                            <img src=\"{{ asset('uploads/disparu/'~ disparu.image)}}\" class=\"sm-col\" alt=\"...\">
                                        </a>


                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

        <!-- Shape -->
        <div class=\"position-relative\">
            <div class=\"shape shape-bottom shape-flip-x svg-shim text-light\">
                <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880\"></path></svg>

            </div>
        </div> <!-- / .row -->


{% endfor %}






    {% endblock %}

", "disparu/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\disparu\\index.html.twig");
    }
}
