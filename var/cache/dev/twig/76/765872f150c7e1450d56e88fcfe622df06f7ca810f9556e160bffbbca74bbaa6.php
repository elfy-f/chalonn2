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
class __TwigTemplate_1f4804adc04845812f91fc4e83ac3a065178e1c65bd7af92b30fa93742fbc84a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blogpost/detail.html.twig", 1);
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
        echo "  Actualité
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
        echo "    <!-- SECTION -->
    <section class=\"pt-8  pb-md-11\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">


                            <!-- Name -->
                            <h1 class=\"display-4 text-center\">
                                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blogpost"]) || array_key_exists("blogpost", $context) ? $context["blogpost"] : (function () { throw new RuntimeError('Variable "blogpost" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blogpost"]) || array_key_exists("blogpost", $context) ? $context["blogpost"] : (function () { throw new RuntimeError('Variable "blogpost" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blogpost"]) || array_key_exists("blogpost", $context) ? $context["blogpost"] : (function () { throw new RuntimeError('Variable "blogpost" does not exist.', 43, $this->source); })()), "contenu", [], "any", false, false, false, 43), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  150 => 55,  148 => 54,  134 => 43,  113 => 25,  101 => 16,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
  Actualité
{% endblock %}

{% block body %}
    <!-- SECTION -->
    <section class=\"pt-8  pb-md-11\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">


                            <!-- Name -->
                            <h1 class=\"display-4 text-center\">
                                {{ blogpost.titre }}
                            </h1>

                    <div class=\"row align-items-center py-5 border-top border-bottom\">
                        <div class=\"col-auto\">
                        </div>
                        <div class=\"col ms-n5\">
                            <!-- Date -->
                            <time class=\"fs-sm text-muted\" datetime=\"2019-05-20\">
                                Publié le {{ blogpost.createdAt|date('d/m/Y') }}
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
                        {{ blogpost.contenu }}
                    </p>
                </div>
            </div>

        </div>



    </section>

    {% include\"commentaire/form.html.twig\" %}
    {% include\"commentaire/commentaires.html.twig\" %}
{% endblock %}


", "blogpost/detail.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\blogpost\\detail.html.twig");
    }
}
