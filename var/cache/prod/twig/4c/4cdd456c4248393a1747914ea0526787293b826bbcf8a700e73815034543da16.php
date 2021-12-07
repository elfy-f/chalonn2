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
class __TwigTemplate_30fc6ca1e455caf1d4a62d252b86c47c59eb3e043883f12edde35f699225dd66 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "libre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Site de chats libres";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  167 => 96,  133 => 68,  125 => 63,  113 => 54,  103 => 47,  93 => 39,  89 => 38,  58 => 9,  54 => 8,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "libre/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\libre\\index.html.twig");
    }
}
