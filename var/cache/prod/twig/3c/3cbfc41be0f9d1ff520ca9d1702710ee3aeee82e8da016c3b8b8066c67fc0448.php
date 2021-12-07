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

/* security/login.html.twig */
class __TwigTemplate_b5ef4da47d77d6ffd1326e55516d8db3426efaf513a6cbd544c449b47c7e53ea extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

   <section>
    <div class=\"container  flex-column\">
        <div class=\"row align-items        justify-content-center gx-0 min-vh-100\">
            <div class=\"col-12 col-md-6 col-lg-4 py-8 py-md-11\">

                <!-- Heading -->
                <h1 class=\"mb-0 fw-bold\">
                </br> </br> Ouvrir mon compte
                </h1>

                <!-- Text -->
                <p class=\"mb-6 text-muted\">

                </p>
                ";
        // line 23
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Back-office</a>
                ";
        }
        // line 26
        echo "
               <form method=\"post\">
                    ";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 31
        echo "
                   ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                       <div class=\"mb-3\">
                           You are logged in as ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "userIdentifier", [], "any", false, false, false, 34), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                       </div>
                   ";
        }
        // line 37
        echo "

                   <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>

                    </br>

                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
<br><br>
                    <!-- Submit -->
                    <button class=\"btn w-100 btn-primary\" type=\"submit\">
                        Connection
                    </button>

                </form>

            </div>
            <div class=\"col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block\" data-aos=\"fade-left\">

                <!-- Image -->
                <div class=\"h-50 w-cover bg-cover\" style=\"background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/accueil.jpg"), "html", null, true);
        echo ");\"></div>


        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  129 => 48,  118 => 40,  113 => 37,  105 => 34,  102 => 33,  100 => 32,  97 => 31,  91 => 29,  89 => 28,  85 => 26,  79 => 24,  76 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\security\\login.html.twig");
    }
}
