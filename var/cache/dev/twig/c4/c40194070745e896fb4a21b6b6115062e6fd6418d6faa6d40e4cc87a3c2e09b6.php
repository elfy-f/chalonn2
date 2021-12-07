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

/* commentaire/form.html.twig */
class __TwigTemplate_eb2a1ba848b325d140a0a284d1d508c9cf141954b30a15ace3d3c6fb41b50400 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/form.html.twig"));

        // line 1
        echo "<section class=\"pt-6 pt-md-8\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 d-flex justify-content-center\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "sucess"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
    </div>
</section>



<!--Modal-->

    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <class>
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous pouvez laisser un commentaire</h5>
                <h8 class=\"modal-title\" id=\"exampleModalLabel\">Celui ci sera publié après approbation</h8></class>


            </div>
            <div class=\"modal-body\">

                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form');
        echo "

            </div>
        </div>
    </div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  65 => 10,  56 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pt-6 pt-md-8\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 d-flex justify-content-center\">
                {% for message in app.flashes('sucess') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>



<!--Modal-->

    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <class>
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vous pouvez laisser un commentaire</h5>
                <h8 class=\"modal-title\" id=\"exampleModalLabel\">Celui ci sera publié après approbation</h8></class>


            </div>
            <div class=\"modal-body\">

                {{form(form) }}

            </div>
        </div>
    </div>


", "commentaire/form.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\commentaire\\form.html.twig");
    }
}
