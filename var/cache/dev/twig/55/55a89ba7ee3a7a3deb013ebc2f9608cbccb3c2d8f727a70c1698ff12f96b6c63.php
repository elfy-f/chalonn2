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

/* libre/index.html.twig */
class __TwigTemplate_2b21a482fc8032ab77631914751cd34382274c2ce28e63561873b2a31b6fc43b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "libre/index.html.twig", 1);
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

        echo " Site de chats libres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "        <!-- WELCOME -->

        <section class=\"pt-12 pt-md-14 pb-12 pb-md-15 bg-gray-900\" style=\"margin-top: -87px;\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                        <!-- Headin -->
                        <h1 class=\"display-2 fw-bold text-black\">
                            <br>
                           Nos chats libres:
                        </h1>
                        <h3>

                           Nous avons plusieurs sites de chats libres. Une personne les nourris, veilles à se qu'ils ne manque de rien et les amène chez le vétérinaire en cas de besoin.
                           <br> Les chats sont identifiés, mais aussi stérilisés par l'association puis relâchés sur site.
                            <br>Ces sites peuvent être parrainés.
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["libres"]);
        foreach ($context['_seq'] as $context["_key"] => $context["libres"]) {
            // line 39
            echo "            <!-- HEADER -->
            <section class=\"pt-8 pt-md-11\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">

                            <!-- Heading -->
                            <h1 class=\"display-4 text-center\">
                                ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["libres"], "lieu", [], "any", false, false, false, 47), "html", null, true);
            echo " <br><br>


                                <div class=\"row justify-content-center\">


                                    <a class=\"row justify-content-center\">
                                        <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/disparu/" . twig_get_attribute($this->env, $this->source, $context["libres"], "carte", [], "any", false, false, false, 54))), "html", null, true);
            echo "\" class=\"sm-col\" alt=\"...\">
                                    </a>


                                </div>
                            </h1>

                            <!-- Text -->
                            <p class=\"lead mb-7 text-center text-muted\">
                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["libres"], "histoire", [], "any", false, false, false, 63), "html", null, true);
            echo "
                            </p>

                            <!-- Text -->
                            <p class=\"lead mb-7 text-center text-muted\">
                             Merci à  ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["libres"], "nourrice", [], "any", false, false, false, 68), "html", null, true);
            echo " qui veille sur les loulous.
                            </p>


                            <!-- Meta -->
                            <div class=\"row align-items-center py-5 border-top border-bottom\">
                                <div class=\"col-auto\">


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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "libre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 96,  163 => 68,  155 => 63,  143 => 54,  133 => 47,  123 => 39,  119 => 38,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Site de chats libres{% endblock %}




    {% block body %}
        <!-- WELCOME -->

        <section class=\"pt-12 pt-md-14 pb-12 pb-md-15 bg-gray-900\" style=\"margin-top: -87px;\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10 col-lg-8 text-center\">

                        <!-- Headin -->
                        <h1 class=\"display-2 fw-bold text-black\">
                            <br>
                           Nos chats libres:
                        </h1>
                        <h3>

                           Nous avons plusieurs sites de chats libres. Une personne les nourris, veilles à se qu'ils ne manque de rien et les amène chez le vétérinaire en cas de besoin.
                           <br> Les chats sont identifiés, mais aussi stérilisés par l'association puis relâchés sur site.
                            <br>Ces sites peuvent être parrainés.
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
        {% for libres in libres%}
            <!-- HEADER -->
            <section class=\"pt-8 pt-md-11\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">

                            <!-- Heading -->
                            <h1 class=\"display-4 text-center\">
                                {{libres.lieu }} <br><br>


                                <div class=\"row justify-content-center\">


                                    <a class=\"row justify-content-center\">
                                        <img src=\"{{ asset('uploads/disparu/'~ libres.carte)}}\" class=\"sm-col\" alt=\"...\">
                                    </a>


                                </div>
                            </h1>

                            <!-- Text -->
                            <p class=\"lead mb-7 text-center text-muted\">
                                {{ libres.histoire }}
                            </p>

                            <!-- Text -->
                            <p class=\"lead mb-7 text-center text-muted\">
                             Merci à  {{ libres.nourrice }} qui veille sur les loulous.
                            </p>


                            <!-- Meta -->
                            <div class=\"row align-items-center py-5 border-top border-bottom\">
                                <div class=\"col-auto\">


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

", "libre/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\libre\\index.html.twig");
    }
}
