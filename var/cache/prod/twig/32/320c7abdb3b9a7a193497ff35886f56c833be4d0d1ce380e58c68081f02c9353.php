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
class __TwigTemplate_b8297609e9ed1cc1379a9789b235a5c977ae6f7391c3ea0f54a6da66ef9c6ae6 extends Template
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
        // line 1
        echo "<section class=\"pt-6 pt-md-8\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 d-flex justify-content-center\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "sucess"], "method", false, false, false, 5));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

            </div>
        </div>
    </div>


";
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
        return array (  81 => 30,  59 => 10,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "commentaire/form.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\commentaire\\form.html.twig");
    }
}
