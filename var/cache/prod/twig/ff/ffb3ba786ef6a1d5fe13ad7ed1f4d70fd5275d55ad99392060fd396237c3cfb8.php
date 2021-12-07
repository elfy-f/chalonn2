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

/* parrain/index.html.twig */
class __TwigTemplate_8c5f9be654a076cf0d0990828aa16800f95507a6e3b8801d7b1d854d56252dfa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "parrain/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Parrainage";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<br>
  <!-- SECTION -->
    <section class=\"py-6 py-md-8\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-9 col-xl-8\">
                    <!-- Heading -->
                    <h3 class=\"fw-bold\">
                       Qu'est ce que le parrainage?
                    </h3>
                    <h5 class=\"fw-bold\">
                        Coté finance
                    </h5>
                    <!-- Text -->
                    <p class=\"mb-7\">
                        Le parrainage est un don qui sera affecté à un chat de l'association en particulier.
                        Le parrainage étant assimilé à un don, vous recevrez un reçu fiscal, vous donnant droit à une déduction fiscale de 66 %,
                        dans la limite de 20% de votre revenu imposable.
                    </p>
                    <h5 class=\"fw-bold\">
                        Coté chat
                    </h5>


                            <!-- Text -->
                            <p>
                               Le parrainage permet le financement des soins du chat choisi.
                                Les chats qui sont à parrainer ont des soins, suivis vétérinaire, traitements longue durée.
                                C'est une façon d'aider l'association et en particulier un chat.
                            </p>

                    <h3 class=\"fw-bold\">
                       Comment faire?
                    </h3>

                            <!-- Text -->
                            <p>
                               Vous pouvez contacter l'association
                                <a class=\"\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
                                   ici
                                </a>
                                ,en précisant le chat que vous souhaitez parrainer, ainsi que le montant mensuel ou annuel.<br><br>

                                Puis <a class = \"\" href=https://www.paypal.com/donate/?token=uHXeVM5hE05xRSJDRBsqqHwjEkOhwQUIq9wn8GnuzHEcka6dz3cf4H5xIuT0AdcpvzWYqbtOa3gGdK0s&locale.x=FR\" >
                                    ici</a>
                                afin de faire votre don.
                                <br><br>
                            </p>


                    </ul>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


";
    }

    public function getTemplateName()
    {
        return "parrain/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 44,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "parrain/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\parrain\\index.html.twig");
    }
}
