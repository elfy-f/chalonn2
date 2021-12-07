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

/* register/index.html.twig */
class __TwigTemplate_643331f0662e9b60c989a5120c9153ccb7432d756830fd449f2661eeea843c29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    ";
        $this->loadTemplate("base/nav.html.twig", "register/index.html.twig", 17)->display($context);
        // line 18
        echo "</head>
<body>

<!-- CONTENT -->
<section>
    <div class=\"container  flex-column\">
        <div class=\"row align-items        justify-content-center gx-0 min-vh-100\">
            <div class=\"col-12 col-md-6 col-lg-4 py-8 py-md-11\">

                <!-- Heading -->
                <h1 class=\"mb-0 fw-bold\">
                    Inscription
                </h1>
                </br></br>


                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'widget');
        echo "

                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "



            </div>
            <div class=\"col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block\" data-aos=\"fade-left\">

                <!-- Image -->
                <div class=\"h-50 w-cover bg-cover\" style=\"background-image: ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/accueil.jpg"), "html", null, true);
        echo ";\"></div>

                <!-- Shape -->
                <div class=\"shape shape-start shape-fluid-y text-white\">
                    <svg viewBox=\"0 0 100 1544\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 0h100v386l-50 772v386H0V0z\" fill=\"currentColor\"/></svg>            </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>






";
        // line 61
        $this->loadTemplate("base/footer.html.twig", "register/index.html.twig", 61)->display($context);
        // line 62
        echo "


</body>

</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Faire un don ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\" integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\" crossorigin=\"anonymous\">


        ";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 15,  139 => 12,  135 => 11,  128 => 9,  118 => 62,  116 => 61,  97 => 45,  86 => 37,  81 => 35,  77 => 34,  59 => 18,  56 => 17,  54 => 11,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\register\\index.html.twig");
    }
}
