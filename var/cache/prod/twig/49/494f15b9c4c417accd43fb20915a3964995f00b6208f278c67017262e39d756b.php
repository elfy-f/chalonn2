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

/* fa/index.html.twig */
class __TwigTemplate_f1dfd2d84acd085fecb6b689618958161a45530b3827c0da3c0ffd51498695c4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "fa/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    Devenir famille d'accueil
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<!-- CONTENT -->
<section>
    <div class=\"container  flex-column\">
        <div class=\"row align-items        justify-content-center gx-0 min-vh-100\">
            <div class=\"col-12 col-md-6 col-lg-4 py-8 py-md-11\">

                <!-- Heading -->
                <h1 class=\"mb-0 fw-bold\">
                   Devenir famille d'accueil
                </h1>
                </br></br>

            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "


                <?php
    \$retour = mail('f.cousin@hotmail.fr', 'Envoi depuis la page Contact', \$_POST['message'], 'From : webmaster@monsite.fr');


            </div>
            <div class=\"col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block\" data-aos=\"fade-left\">

                <!-- Image -->
                <div class=\"h-50 w-cover bg-cover\" style=\"background-image: ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/accueil.jpg"), "html", null, true);
        echo ";\"></div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>






";
    }

    public function getTemplateName()
    {
        return "fa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  75 => 20,  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fa/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\fa\\index.html.twig");
    }
}
