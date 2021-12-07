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

/* compte/index.html.twig */
class __TwigTemplate_bf3ac1d4aa784ca0e745cd7d838cd3bdc76b7c535c38f51929118153b2d2a9a0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon compte";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- HEADER -->
    <header class=\"bg pt-9 pb-11 d-none d-md-block\">
        <div class=\"container-md\">
            <div class=\"row align-items-center\">
                <div class=\"col\">

                    <!-- Heading -->
                    <h1 class=\"fw-bold text-black mb-2\">
                       Votre compte

                    </h1>

                    <!-- Text -->
                    <h3 class=\"fs-lg text-white-75 mb-0\">
                      Merci de votre aide.
                    </h3>

                </div>
                <div class=\"col-auto\">


                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </header>

    <!-- Heading -->
    <h6 class=\"fw-bold text-uppercase mb-3\">
        Account
    </h6>

    <!-- List -->
    <ul class=\"card-list list text-gray-700 mb-6\">
        <li class=\"list-item\">
            <a class=\"list-link text-reset\" href=\"account-general.html\">
                General
            </a>
        </li>
        <li class=\"list-item\">
            <a class=\"list-link text-reset\" href=\"account-security.html\">
                Security
            </a>
        </li>
        <li class=\"list-item active\">
            <a class=\"list-link text-reset\" href=\"account-notifications.html\">
                Notifications
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "compte/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\compte\\index.html.twig");
    }
}
