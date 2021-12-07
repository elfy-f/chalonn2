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
class __TwigTemplate_92d0fea2820c39495f9cc9613cbc4b750d1dfe140b03b16b4784c17cd9b1f7ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parrain/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parrain/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parrain/index.html.twig", 1);
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

        echo "Parrainage";
        
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parrainage{% endblock %}

{% block body %}
<br>
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
                                <a class=\"\" href=\"{{path('contact')}}\">
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


{% endblock %}
", "parrain/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\parrain\\index.html.twig");
    }
}
