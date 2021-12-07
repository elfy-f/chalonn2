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
class __TwigTemplate_2bac21a62b6d58e425db617c27e6be8e9aa01d94c400e54536e2fc5851f5d534 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contacter nous!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 35));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactName\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 49), 'label');
        echo "
                        </label>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 51), 'widget');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <label class=\"form-label\" for=\" contactEmail\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 58), 'label');
        echo "
                        </label>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 60), 'widget');
        echo "
                    </div>

                    <div class=\"form-group mb-5 \">

                        <!-- Label -->
                        <div class=\"form-label\">
                            <label for=\" contactMessage\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 68), 'label');
        echo "
                            </label>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 70), 'widget');
        echo "
                    </div>
                    </br> </br>
                        <div class=\"form-group mb-0 \">


                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "envoyer", [], "any", false, false, false, 76), 'widget');
        echo "
                        </div>

";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


                    </div>


            </div> <!-- / .row -->
        </div>
    </section>
";
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
        return array (  176 => 79,  170 => 76,  161 => 70,  156 => 68,  145 => 60,  140 => 58,  130 => 51,  125 => 49,  115 => 42,  111 => 40,  102 => 37,  99 => 36,  95 => 35,  90 => 33,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\contact\\index.html.twig");
    }
}
