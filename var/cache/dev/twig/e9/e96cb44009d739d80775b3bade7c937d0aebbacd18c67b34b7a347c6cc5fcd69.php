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

/* contact/index.html.twig */
class __TwigTemplate_d7c6bc4700f54a30bb28d4673c4745045cf15cc678e4a60ab660777e14687879 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contacter nous!";
        
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
        echo "    <section>

        <!-- Content -->
        <div class=\"container d-flex flex-column\">
            <div class=\"row align-items-center justify-content-between gx-0 min-vh-100\">
                <div class=\"col-12 col-md-5 align-self-stretch\">

                    <!-- Image -->
                    <div class=\"d-none d-md-block vw-50 h-100 float-end bg-cover\"  style=\"background-color: url(";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/accueil.jpg"), "html", null, true);
        echo ")\"></div>

                </div>
                <div class=\"col-12 col-md-6 py-8 py-md-11\">

                    <!-- Heading -->
                    <h2 class=\"fw-bold text-center mb-2\">
                        Nous Contacter.
                    </h2>

                    <!-- Text -->
                    <p class=\"fs-lg text-center text-muted mb-0\">
                        Une question? Une demande de renseignement sur un chat ou comment faire un don? N'hésitez pas à nous contacter.
                    </p>

                    <!-- Divider -->
                    <hr class=\"hr-sm my-6 my-md-8 mx-auto bg-gray-300\">

                    <!-- Form -->
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "

                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "                                <div class=\"alert alert-success\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                    <div class=\"my-custom-class-for-errors\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'errors');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactName\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'label');
        echo "
                        </label>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'widget');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactEmail\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'label');
        echo "
                        </label>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'widget');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <div class=\"form-label\">
                            <label for=\" contactMessage\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "message", [], "any", false, false, false, 68), 'label');
        echo "
                            </label>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "message", [], "any", false, false, false, 70), 'widget');
        echo "
                    </div>
                    </br> </br>
                        <div class=\"form-group mb-0 \">


                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "envoyer", [], "any", false, false, false, 76), 'widget');
        echo "
                        </div>

";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "


                    </div>


            </div> <!-- / .row -->
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 79,  200 => 76,  191 => 70,  186 => 68,  175 => 60,  170 => 58,  160 => 51,  155 => 49,  145 => 42,  141 => 40,  132 => 37,  129 => 36,  125 => 35,  120 => 33,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contacter nous!{% endblock %}

{% block body %}
    <section>

        <!-- Content -->
        <div class=\"container d-flex flex-column\">
            <div class=\"row align-items-center justify-content-between gx-0 min-vh-100\">
                <div class=\"col-12 col-md-5 align-self-stretch\">

                    <!-- Image -->
                    <div class=\"d-none d-md-block vw-50 h-100 float-end bg-cover\"  style=\"background-color: url({{ asset('img/accueil.jpg')}})\"></div>

                </div>
                <div class=\"col-12 col-md-6 py-8 py-md-11\">

                    <!-- Heading -->
                    <h2 class=\"fw-bold text-center mb-2\">
                        Nous Contacter.
                    </h2>

                    <!-- Text -->
                    <p class=\"fs-lg text-center text-muted mb-0\">
                        Une question? Une demande de renseignement sur un chat ou comment faire un don? N'hésitez pas à nous contacter.
                    </p>

                    <!-- Divider -->
                    <hr class=\"hr-sm my-6 my-md-8 mx-auto bg-gray-300\">

                    <!-- Form -->
                    {{form_start(form)}}

                        {% for message in app.flashes('success') %}
                                <div class=\"alert alert-success\">
                                    {{ message }}
                                </div>
                    {% endfor %}

                    <div class=\"my-custom-class-for-errors\">
                        {{ form_errors(form) }}
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactName\">
                            {{ form_label(form.nom) }}
                        </label>
                        {{ form_widget(form.nom) }}
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactEmail\">
                            {{ form_label(form.email) }}
                        </label>
                        {{ form_widget(form.email) }}
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <div class=\"form-label\">
                            <label for=\" contactMessage\">
                            {{ form_label(form.message) }}
                            </label>
                        {{ form_widget(form.message) }}
                    </div>
                    </br> </br>
                        <div class=\"form-group mb-0 \">


                            {{ form_widget(form.envoyer) }}
                        </div>

{{ form_end(form) }}


                    </div>


            </div> <!-- / .row -->
        </div>
    </section>
{% endblock %}
", "contact/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\contact\\index.html.twig");
    }
}
