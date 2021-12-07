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

/* partenaire/index.html.twig */
class __TwigTemplate_d854dcf390edbccc8afb96f842e59f37b4148d43ecb53440ee5b9bd67f127bfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/index.html.twig", 1);
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

        echo "Nos partenaires!";
        
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
        echo "
    <!-- WELCOME -->
    <section class=\"pt-8 pt-md-12 pb-12 pb-md-15\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-md-10 col-lg-8 text-center\">

            <!-- Headin -->
            <h1 class=\"display-1 fw-bold\">
              Nos partenaires.
            </h1>

            <!-- Text -->
            <p class=\"lead text-secondary mb-4\">
               Tous ceux qui nous aident : sites de clics, sites de protections animales, boutiques en ligne, en ville, etc....
            </p>

            <!-- Badges -->
            <nav class=\"nav justify-content-center\">
              <a class=\"badge rounded-pill bg-secondary-soft active me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\"*\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Primary</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".product\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Product</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".ux\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">UX</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".resources\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Resources</span>
              </a>
            </nav>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CONTENT -->
    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
      <div class=\"container\">
        <div class=\"row\" id=\"portfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>
          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.jardiland.com/storelocator/store/view/name/saint-malo\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/jardiland.png"), "html", null, true);
        echo "#!\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Jardiland Saint Malo</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">ZA La Croix Desilles
                  35400 Saint-Malo
                </h6>
                <p class=\"text-black\">Depuis mi 2018 grâce à Sylvie, cette enseigne nous donne croquettes, pâtées et accessoires invendus.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.facile2soutenir.fr/\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/faciledesoutenir.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Facile2soutenir.</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\">Facile2soutenir  permet à Chalonn de collecter des dons grâce à vos achats en ligne.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 ux\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.facebook.com/rapidcroqsaintjouan/\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/animalo.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Animalo</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">1 Rue de l'Île aux Moines, 35430 Saint-Jouan-des-Guérets</h6>
                <p class=\"text-black\">Cette enseigne, que nous remercions nous donne une partie de ses invendus
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"#!\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asso.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Heading -->
                <h4 class=\"mb-0\">Association Soutien Animaux Solidaire</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\">@Soutienanimauxsolidaire · Organisation à but non lucratif.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.truffaut.com/stores/saint-malo\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/truffau.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                                <!-- Heading -->
                <h4 class=\"mb-0\">TRUFFAUT Saint Jouan Des Guéret</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">Le Moulin du Domaine
                  35430 Saint Jouan-des-Guérets - à proximité de Saint Malo</h6>

                <p class=\"text-black\">Depuis mi 2018 grâce à Sylvie, cette enseigne nous donne croquettes, pâtées  invendus.
                </p>
              </div>

            </a>

          </div>

          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.zooplus.fr/?mkt_source=307253&clickid=2109211444370380642\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/zooplus.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Heading -->
                <h4 class=\"mb-0\">Zooplus</h4>


                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\"> En cliquant sur le liens (l'image) vos achats sur le site, permeteront
                  à l'asso de recevoir un commission de la part de Zooplus. La comission est calculée en fonction
                  de la valeur HT de vos produits achetés.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://trocr.com/organization/public/W221001884\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/troc.png"), "html", null, true);
        echo "\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                                <!-- Heading -->
                <h4 class=\"mb-0\">Troc'r</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>


                <p class=\"text-black\">En vendant des objets sur cette appli , l'integralité du montant de la vente va à l'asso.
                </p>


              </div>

            </a>

          </div>

       ";
        // line 286
        echo "        </div>
      </div>
    </section>

    <!-- SHAPE -->
    <div class=\"position-relative\">
      <div class=\"shape shape-bottom shape-fluid-x text-gray-200\">
        <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
    </div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 286,  317 => 215,  285 => 186,  254 => 158,  225 => 132,  197 => 107,  169 => 82,  139 => 55,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos partenaires!{% endblock %}

{% block body %}

    <!-- WELCOME -->
    <section class=\"pt-8 pt-md-12 pb-12 pb-md-15\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-md-10 col-lg-8 text-center\">

            <!-- Headin -->
            <h1 class=\"display-1 fw-bold\">
              Nos partenaires.
            </h1>

            <!-- Text -->
            <p class=\"lead text-secondary mb-4\">
               Tous ceux qui nous aident : sites de clics, sites de protections animales, boutiques en ligne, en ville, etc....
            </p>

            <!-- Badges -->
            <nav class=\"nav justify-content-center\">
              <a class=\"badge rounded-pill bg-secondary-soft active me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\"*\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Primary</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".product\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Product</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".ux\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">UX</span>
              </a>
              <a class=\"badge rounded-pill bg-secondary-soft me-1 mb-1\" href=\"#\" data-bs-toggle=\"pill\" data-filter=\".resources\" data-bs-target=\"#portfolio\">
                <span class=\"h6 text-uppercase\">Resources</span>
              </a>
            </nav>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CONTENT -->
    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
      <div class=\"container\">
        <div class=\"row\" id=\"portfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>
          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.jardiland.com/storelocator/store/view/name/saint-malo\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/jardiland.png') }}#!\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Jardiland Saint Malo</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">ZA La Croix Desilles
                  35400 Saint-Malo
                </h6>
                <p class=\"text-black\">Depuis mi 2018 grâce à Sylvie, cette enseigne nous donne croquettes, pâtées et accessoires invendus.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.facile2soutenir.fr/\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/faciledesoutenir.png') }}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Facile2soutenir.</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\">Facile2soutenir  permet à Chalonn de collecter des dons grâce à vos achats en ligne.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 ux\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.facebook.com/rapidcroqsaintjouan/\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/animalo.png') }}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">
                <!-- Heading -->
                <h4 class=\"mb-0\">Animalo</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">1 Rue de l'Île aux Moines, 35430 Saint-Jouan-des-Guérets</h6>
                <p class=\"text-black\">Cette enseigne, que nous remercions nous donne une partie de ses invendus
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"#!\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/asso.png') }}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Heading -->
                <h4 class=\"mb-0\">Association Soutien Animaux Solidaire</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\">@Soutienanimauxsolidaire · Organisation à but non lucratif.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.truffaut.com/stores/saint-malo\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/truffau.png') }}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                                <!-- Heading -->
                <h4 class=\"mb-0\">TRUFFAUT Saint Jouan Des Guéret</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">Le Moulin du Domaine
                  35430 Saint Jouan-des-Guérets - à proximité de Saint Malo</h6>

                <p class=\"text-black\">Depuis mi 2018 grâce à Sylvie, cette enseigne nous donne croquettes, pâtées  invendus.
                </p>
              </div>

            </a>

          </div>

          <div class=\"col-12 col-md-4 product\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.zooplus.fr/?mkt_source=307253&clickid=2109211444370380642\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/zooplus.png') }}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Heading -->
                <h4 class=\"mb-0\">Zooplus</h4>


                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>
                <p class=\"text-black\"> En cliquant sur le liens (l'image) vos achats sur le site, permeteront
                  à l'asso de recevoir un commission de la part de Zooplus. La comission est calculée en fonction
                  de la valeur HT de vos produits achetés.
                </p>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 resources\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://trocr.com/organization/public/W221001884\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"{{ asset('img/troc.png')}}\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                                <!-- Heading -->
                <h4 class=\"mb-0\">Troc'r</h4>

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\"></h6>


                <p class=\"text-black\">En vendant des objets sur cette appli , l'integralité du montant de la vente va à l'asso.
                </p>


              </div>

            </a>

          </div>

       {#   <div class=\"col-12 col-md-4 ux\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"https://www.helloasso.com/associations/chalonn/formulaires/1\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"assets/img/portfolio/portfolio-8.jpg\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">Product Design</h6>

                <!-- Heading -->
                <h4 class=\"mb-0\">Goby Packaging </h4>

              </div>

            </a>

          </div>
          <div class=\"col-12 col-md-4 ux\">

            <!-- Card -->
            <a class=\"card card-flush mb-7\" href=\"#!\">

              <!-- Image -->
              <div class=\"card-zoom\">
                <img class=\"card-img-top rounded shadow-light-lg\" src=\"assets/img/portfolio/portfolio-9.jpg\" alt=\"...\">
              </div>

              <!-- Footer -->
              <div class=\"card-footer\">

                <!-- Preheading -->
                <h6 class=\"text-uppercase mb-1 text-muted\">Branding</h6>

                <!-- Heading -->
                <h4 class=\"mb-0\">Trek Campaign</h4>

              </div>

            </a>

          </div>#}
        </div>
      </div>
    </section>

    <!-- SHAPE -->
    <div class=\"position-relative\">
      <div class=\"shape shape-bottom shape-fluid-x text-gray-200\">
        <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"/></svg>      </div>
    </div>





{% endblock %}
", "partenaire/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\partenaire\\index.html.twig");
    }
}
