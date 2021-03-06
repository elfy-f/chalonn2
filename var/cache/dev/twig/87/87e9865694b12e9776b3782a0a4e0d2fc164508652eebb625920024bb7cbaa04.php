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

/* mention/index.html.twig */
class __TwigTemplate_e67bf2da855d20c426f8f7f2ab372cc724ea82ec7bc39b8f0e0fc12cbbe92c02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mention/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mention/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mention/index.html.twig", 1);
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

        echo "Mentions l??gales";
        
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
        echo "    <section class=\"py-10 py-md-14 overlay overlay-black overlay-60 bg-cover\" style=\"background-image: url(assets/img/covers/cover-5.jpg);\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-12 col-lg-12 text-center\">

                    <!-- Heading -->
                    <h1 class=\"display-2 fw-bold text-white\">

                    </h1>

                    <!-- Text -->
                    <p class=\"lead text-white-75 mb-0\">
                    <h3>Informations l??gales</h3><br>
                     <h5>   1. Pr??sentation du site.</h5><br>
                        En vertu de l???article 6 de la loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique, il est pr??cis?? aux utilisateurs du site www.adoptionchalonn.fr
                    l???identit?? des diff??rents intervenants dans le cadre de sa r??alisation et de son suivi :<br><br>

                        Propri??taire : Association Chalonn ??? Association ??? Siret n?? : 802 388 330 00010 ??? Si??ge social : 17, rue la ville Hubeau Medrignac<br>
                        Cr??ateur : Isabelle Lefras<br>
                        Responsable publication : Fr??d??rique ??? assochalonn@gmail.com<br>
                        Le responsable publication est une personne physique.<br>
                        Webmaster : Fr??d??rique ??? f.cousin@hotmail.fr<br>
                        H??bergeur : OVH ??? Si??ge social : 2 rue Kellermann ??? 59100 Roubaix ??? France<br>
                        R??dacteur : Fr??d??rique<br>
                        Le mod??le de mentions l??gales est offert par Subdelirium.com Mentions l??gales<br><br><br>

                    <h5>2. Conditions g??n??rales d???utilisation du site et des services propos??s.</h5><br>
                        L???utilisation du site www.adoptionchalonn.fr implique l???acceptation pleine et enti??re des conditions g??n??rales d???utilisation ci-apr??s d??crites.
                    Ces conditions d???utilisation sont susceptibles d?????tre modifi??es ou compl??t??es ?? tout moment, les utilisateurs du site www.adoptionchalonn.fr sont donc invit??s
                    ?? les consulter de mani??re r??guli??re.<br>

                        Ce site est normalement accessible ?? tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut ??tre toutefois d??cid??e par l'association Chalonn,
                    qui s???efforcera alors de communiquer pr??alablement aux utilisateurs les dates et heures de l???intervention.<br>

                        Le site www.adoptionchalonn.fr est mis ?? jour r??guli??rement par Fr??d??rique. De la m??me fa??on, les mentions l??gales peuvent ??tre modifi??es ?? tout moment
                    : elles s???imposent n??anmoins ?? l???utilisateur qui est invit?? ?? s???y r??f??rer le plus souvent possible afin d???en prendre connaissance.<br><br>

                       <h5> 3. Description des services fournis.</h5><br>
                        Le site www.adoptionchalonn.fr a pour objet de fournir une information concernant l???ensemble des activit??s de la soci??t??.<br>

                        l'association Chalonn s???efforce de fournir sur le site www.adoptionchalonn.fr des informations aussi pr??cises que possible.
                    Toutefois, il ne pourra ??tre tenue responsable des omissions, des inexactitudes et des carences dans la mise ?? jour, qu???elles soient de son fait ou du fait des tiers
                    partenaires qui lui fournissent ces informations.<br>

                        Tous les informations indiqu??es sur le site www.adoptionchalonn.fr sont donn??es ?? titre indicatif, et sont susceptibles d?????voluer.
                    Par ailleurs, les renseignements figurant sur le site www.adoptionchalonn.fr ne sont pas exhaustifs.
                    Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne.<br><br>

                      <h5>  4. Limitations contractuelles sur les donn??es techniques.</h5><br>
                        Le site utilise la technologie PHP/symfony5.<br>

                        Le site Internet ne pourra ??tre tenu responsable de dommages mat??riels li??s ?? l???utilisation du site.
                    De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne contenant pas de virus et
                    avec un navigateur de derni??re g??n??ration mis-??-jour.<br><br>

                      <h5>  5. Propri??t?? intellectuelle et contrefa??ons.</h5><br>
                        L'association Chalonn est propri??taire des droits de propri??t?? intellectuelle ou d??tient les droits d???usage sur tous les ??l??ments accessibles
                    sur le site, notamment les textes, images, graphismes, logo, ic??nes, sons, logiciels.<br>

                        Toute reproduction, repr??sentation, modification, publication, adaptation de tout ou partie des ??l??ments du site,
                    quel que soit le moyen ou le proc??d?? utilis??, est interdite, sauf autorisation ??crite pr??alable de : l'association Chalonn.<br>

                        Toute exploitation non autoris??e du site ou de l???un quelconque des ??l??ments qu???il contient sera consid??r??e comme constitutive d???une contrefa??on et
                    poursuivie conform??ment aux dispositions des articles L.335-2 et suivants du Code de Propri??t?? Intellectuelle.<br><br>

                      <h5>  6. Limitations de responsabilit??.</h5><br>
                        L'association Chalonn ne pourra ??tre tenue responsable des dommages directs et indirects caus??s au mat??riel de l???utilisateur, lors de l???acc??s au site
                    www.adoptionchalonn.fr, et r??sultant soit de l???utilisation d???un mat??riel ne r??pondant pas aux sp??cifications indiqu??es au point 4,
                    soit de l???apparition d???un bug ou d???une incompatibilit??.<br>

                        Lassociation Chalonn ne pourra ??galement ??tre tenue responsable des dommages indirects (tels par exemple qu???une perte de march?? ou perte d???une chance)
                    cons??cutifs ?? l???utilisation du site www.adoptionchalonn.fr.<br>

                        Des espaces interactifs (possibilit?? de poser des questions dans l???espace contact) sont ?? la disposition des utilisateurs.
                    L'association Chalonn se r??serve le droit de supprimer, sans mise en demeure pr??alable, tout contenu d??pos?? dans cet espace qui contreviendrait ?? la
                    l??gislation applicable en France, en particulier aux dispositions relatives ?? la protection des donn??es. Le cas ??ch??ant, l'association Chalonn se r??serve ??galement
                    la possibilit?? de mettre en cause la responsabilit?? civile et/ou p??nale de l???utilisateur, notamment en cas de message ?? caract??re raciste, injurieux, diffamant,
                    ou pornographique, quel que soit le support utilis?? (texte, photographie???).<br><br>

                       <h5> 7. Gestion des donn??es personnelles.</h5><br>
                        En France, les donn??es personnelles sont notamment prot??g??es par la loi n?? 78-87 du 6 janvier 1978, la loi n?? 2004-801 du 6 ao??t 2004,
                    l???article L. 226-13 du Code p??nal et la Directive Europ??enne du 24 octobre 1995.<br>

                        A l???occasion de l???utilisation du site www.adoptionchalonn.fr, peuvent ??tres recueillies : l???URL des liens par l???interm??diaire desquels l???utilisateur
                    a acc??d?? au site www.adoptionchalonn.fr, le fournisseur d???acc??s de l???utilisateur, l???adresse de protocole Internet (IP) de l???utilisateur.<br>

                        En tout ??tat de cause l'association Chalonn ne collecte des informations personnelles relatives ?? l???utilisateur que pour le besoin de certains
                    services propos??s par le site www.adoptionchalonn.fr. L???utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu???il proc??de par
                    lui-m??me ?? leur saisie. Il est alors pr??cis?? ?? l???utilisateur du site www.adoptionchalonn.fr l???obligation ou non de fournir ces informations.<br>

                        Conform??ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative ?? l???informatique, aux fichiers et aux libert??s,
                    tout utilisateur dispose d???un droit d???acc??s, de rectification et d???opposition aux donn??es personnelles le concernant, en effectuant sa demande ??crite et
                    sign??e, accompagn??e d???une copie du titre d???identit?? avec signature du titulaire de la pi??ce, en pr??cisant l???adresse ?? laquelle la r??ponse doit ??tre envoy??e.<br>

                        Aucune information personnelle de l???utilisateur du site www.adoptionchalonn.fr n???est publi??e ?? l???insu de l???utilisateur, ??chang??e, transf??r??e, c??d??e ou vendue
                    sur un support quelconque ?? des tiers. Seule l???hypoth??se du rachat de l'association Chalonn et de ses droits permettrait la transmission des dites informations ??
                    l?????ventuel acqu??reur qui serait ?? son tour tenu de la m??me obligation de conservation et de modification des donn??es vis ?? vis de l???utilisateur du site
                    www.adoptionchalonn.fr.<br>

                        Le site n???est pas d??clar?? ?? la CNIL car il ne recueille pas d???informations personnelles.<br>

                        Les bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative ?? la protection
                    juridique des bases de donn??es.<br><br>

                      <h5>  8. Liens hypertextes et cookies.</h5><br>
                        Le site www.adoptionchalonn.fr contient un certain nombre de liens hypertextes vers d???autres sites, mis en place avec l???autorisation de l'associtaion Chalonn.
                    Cependant, l'association Chalonn n???a pas la possibilit?? de v??rifier le contenu des sites ainsi visit??s, et n???assumera en cons??quence aucune responsabilit?? de ce fait.<br>

                        La navigation sur le site www.adoptionchalonn.fr est susceptible de provoquer l???installation de cookie(s) sur l???ordinateur de l???utilisateur.
                    Un cookie est un fichier de petite taille, qui ne permet pas l???identification de l???utilisateur, mais qui enregistre des informations relatives ?? la navigation
                    d???un ordinateur sur un site. Les donn??es ainsi obtenues visent ?? faciliter la navigation ult??rieure sur le site, et ont ??galement vocation ?? permettre diverses mesures
                    de fr??quentation.<br>

                        Le refus d???installation d???un cookie peut entra??ner l???impossibilit?? d???acc??der ?? certains services. L???utilisateur peut toutefois configurer son ordinateur de
                    la mani??re suivante, pour refuser l???installation des cookies :<br>

                        Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit?? et choisissez Bloquer tous
                    les cookies. Validez sur Ok.<br>

                        Sous Firefox : en haut de la fen??tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l???onglet Options. Cliquer sur l???onglet Vie priv??e.<br>
                        Param??trez les R??gles de conservation sur : utiliser les param??tres personnalis??s pour l???historique. Enfin d??cochez-la pour d??sactiver les cookies.<br>

                        Sous Safari : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par un rouage). S??lectionnez Param??tres.
                    Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur Param??tres de contenu. Dans la section ?? Cookies ??,
                    vous pouvez bloquer les cookies.<br>

                        Sous Chrome : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par trois lignes horizontales). S??lectionnez Param??tres.
                    Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur pr??f??rences. Dans l???onglet ?? Confidentialit?? ??, vous pouvez bloquer les
                    cookies.<br><br>

                    <h5>9. Droit applicable et attribution de juridiction.</h5><br>
                        Tout litige en relation avec l???utilisation du site www.adoptionchalonn.fr est soumis au droit fran??ais. Il est fait attribution exclusive de
                    juridiction aux tribunaux comp??tents de Saint Brieuc.<br><br>

                      <h5>  10. Les principales lois concern??es.</h5><br>
                        Loi n?? 78-17 du 6 janvier 1978, notamment modifi??e par la loi n?? 2004-801 du 6 ao??t 2004 relative ?? l???informatique, aux fichiers et aux libert??s.<br>

                        Loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique.<br><br>

                      <h5>  11. Lexique.</h5><br>
                        Utilisateur : Internaute se connectant, utilisant le site susnomm??.<br>

                        Informations personnelles : ?? les informations qui permettent, sous quelque forme que ce soit, directement ou non,
                    l???identification des personnes physiques auxquelles elles s???appliquent ?? (article 4 de la loi n?? 78-17 du 6 janvier 1978).
                        <br><br>

                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <div class=\"col-6 col-md-3\">
        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image2accueil.jpg"), "html", null, true);
        echo "\">
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mention/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 161,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mentions l??gales{% endblock %}

{% block body %}
    <section class=\"py-10 py-md-14 overlay overlay-black overlay-60 bg-cover\" style=\"background-image: url(assets/img/covers/cover-5.jpg);\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-12 col-lg-12 text-center\">

                    <!-- Heading -->
                    <h1 class=\"display-2 fw-bold text-white\">

                    </h1>

                    <!-- Text -->
                    <p class=\"lead text-white-75 mb-0\">
                    <h3>Informations l??gales</h3><br>
                     <h5>   1. Pr??sentation du site.</h5><br>
                        En vertu de l???article 6 de la loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique, il est pr??cis?? aux utilisateurs du site www.adoptionchalonn.fr
                    l???identit?? des diff??rents intervenants dans le cadre de sa r??alisation et de son suivi :<br><br>

                        Propri??taire : Association Chalonn ??? Association ??? Siret n?? : 802 388 330 00010 ??? Si??ge social : 17, rue la ville Hubeau Medrignac<br>
                        Cr??ateur : Isabelle Lefras<br>
                        Responsable publication : Fr??d??rique ??? assochalonn@gmail.com<br>
                        Le responsable publication est une personne physique.<br>
                        Webmaster : Fr??d??rique ??? f.cousin@hotmail.fr<br>
                        H??bergeur : OVH ??? Si??ge social : 2 rue Kellermann ??? 59100 Roubaix ??? France<br>
                        R??dacteur : Fr??d??rique<br>
                        Le mod??le de mentions l??gales est offert par Subdelirium.com Mentions l??gales<br><br><br>

                    <h5>2. Conditions g??n??rales d???utilisation du site et des services propos??s.</h5><br>
                        L???utilisation du site www.adoptionchalonn.fr implique l???acceptation pleine et enti??re des conditions g??n??rales d???utilisation ci-apr??s d??crites.
                    Ces conditions d???utilisation sont susceptibles d?????tre modifi??es ou compl??t??es ?? tout moment, les utilisateurs du site www.adoptionchalonn.fr sont donc invit??s
                    ?? les consulter de mani??re r??guli??re.<br>

                        Ce site est normalement accessible ?? tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut ??tre toutefois d??cid??e par l'association Chalonn,
                    qui s???efforcera alors de communiquer pr??alablement aux utilisateurs les dates et heures de l???intervention.<br>

                        Le site www.adoptionchalonn.fr est mis ?? jour r??guli??rement par Fr??d??rique. De la m??me fa??on, les mentions l??gales peuvent ??tre modifi??es ?? tout moment
                    : elles s???imposent n??anmoins ?? l???utilisateur qui est invit?? ?? s???y r??f??rer le plus souvent possible afin d???en prendre connaissance.<br><br>

                       <h5> 3. Description des services fournis.</h5><br>
                        Le site www.adoptionchalonn.fr a pour objet de fournir une information concernant l???ensemble des activit??s de la soci??t??.<br>

                        l'association Chalonn s???efforce de fournir sur le site www.adoptionchalonn.fr des informations aussi pr??cises que possible.
                    Toutefois, il ne pourra ??tre tenue responsable des omissions, des inexactitudes et des carences dans la mise ?? jour, qu???elles soient de son fait ou du fait des tiers
                    partenaires qui lui fournissent ces informations.<br>

                        Tous les informations indiqu??es sur le site www.adoptionchalonn.fr sont donn??es ?? titre indicatif, et sont susceptibles d?????voluer.
                    Par ailleurs, les renseignements figurant sur le site www.adoptionchalonn.fr ne sont pas exhaustifs.
                    Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne.<br><br>

                      <h5>  4. Limitations contractuelles sur les donn??es techniques.</h5><br>
                        Le site utilise la technologie PHP/symfony5.<br>

                        Le site Internet ne pourra ??tre tenu responsable de dommages mat??riels li??s ?? l???utilisation du site.
                    De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne contenant pas de virus et
                    avec un navigateur de derni??re g??n??ration mis-??-jour.<br><br>

                      <h5>  5. Propri??t?? intellectuelle et contrefa??ons.</h5><br>
                        L'association Chalonn est propri??taire des droits de propri??t?? intellectuelle ou d??tient les droits d???usage sur tous les ??l??ments accessibles
                    sur le site, notamment les textes, images, graphismes, logo, ic??nes, sons, logiciels.<br>

                        Toute reproduction, repr??sentation, modification, publication, adaptation de tout ou partie des ??l??ments du site,
                    quel que soit le moyen ou le proc??d?? utilis??, est interdite, sauf autorisation ??crite pr??alable de : l'association Chalonn.<br>

                        Toute exploitation non autoris??e du site ou de l???un quelconque des ??l??ments qu???il contient sera consid??r??e comme constitutive d???une contrefa??on et
                    poursuivie conform??ment aux dispositions des articles L.335-2 et suivants du Code de Propri??t?? Intellectuelle.<br><br>

                      <h5>  6. Limitations de responsabilit??.</h5><br>
                        L'association Chalonn ne pourra ??tre tenue responsable des dommages directs et indirects caus??s au mat??riel de l???utilisateur, lors de l???acc??s au site
                    www.adoptionchalonn.fr, et r??sultant soit de l???utilisation d???un mat??riel ne r??pondant pas aux sp??cifications indiqu??es au point 4,
                    soit de l???apparition d???un bug ou d???une incompatibilit??.<br>

                        Lassociation Chalonn ne pourra ??galement ??tre tenue responsable des dommages indirects (tels par exemple qu???une perte de march?? ou perte d???une chance)
                    cons??cutifs ?? l???utilisation du site www.adoptionchalonn.fr.<br>

                        Des espaces interactifs (possibilit?? de poser des questions dans l???espace contact) sont ?? la disposition des utilisateurs.
                    L'association Chalonn se r??serve le droit de supprimer, sans mise en demeure pr??alable, tout contenu d??pos?? dans cet espace qui contreviendrait ?? la
                    l??gislation applicable en France, en particulier aux dispositions relatives ?? la protection des donn??es. Le cas ??ch??ant, l'association Chalonn se r??serve ??galement
                    la possibilit?? de mettre en cause la responsabilit?? civile et/ou p??nale de l???utilisateur, notamment en cas de message ?? caract??re raciste, injurieux, diffamant,
                    ou pornographique, quel que soit le support utilis?? (texte, photographie???).<br><br>

                       <h5> 7. Gestion des donn??es personnelles.</h5><br>
                        En France, les donn??es personnelles sont notamment prot??g??es par la loi n?? 78-87 du 6 janvier 1978, la loi n?? 2004-801 du 6 ao??t 2004,
                    l???article L. 226-13 du Code p??nal et la Directive Europ??enne du 24 octobre 1995.<br>

                        A l???occasion de l???utilisation du site www.adoptionchalonn.fr, peuvent ??tres recueillies : l???URL des liens par l???interm??diaire desquels l???utilisateur
                    a acc??d?? au site www.adoptionchalonn.fr, le fournisseur d???acc??s de l???utilisateur, l???adresse de protocole Internet (IP) de l???utilisateur.<br>

                        En tout ??tat de cause l'association Chalonn ne collecte des informations personnelles relatives ?? l???utilisateur que pour le besoin de certains
                    services propos??s par le site www.adoptionchalonn.fr. L???utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu???il proc??de par
                    lui-m??me ?? leur saisie. Il est alors pr??cis?? ?? l???utilisateur du site www.adoptionchalonn.fr l???obligation ou non de fournir ces informations.<br>

                        Conform??ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative ?? l???informatique, aux fichiers et aux libert??s,
                    tout utilisateur dispose d???un droit d???acc??s, de rectification et d???opposition aux donn??es personnelles le concernant, en effectuant sa demande ??crite et
                    sign??e, accompagn??e d???une copie du titre d???identit?? avec signature du titulaire de la pi??ce, en pr??cisant l???adresse ?? laquelle la r??ponse doit ??tre envoy??e.<br>

                        Aucune information personnelle de l???utilisateur du site www.adoptionchalonn.fr n???est publi??e ?? l???insu de l???utilisateur, ??chang??e, transf??r??e, c??d??e ou vendue
                    sur un support quelconque ?? des tiers. Seule l???hypoth??se du rachat de l'association Chalonn et de ses droits permettrait la transmission des dites informations ??
                    l?????ventuel acqu??reur qui serait ?? son tour tenu de la m??me obligation de conservation et de modification des donn??es vis ?? vis de l???utilisateur du site
                    www.adoptionchalonn.fr.<br>

                        Le site n???est pas d??clar?? ?? la CNIL car il ne recueille pas d???informations personnelles.<br>

                        Les bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative ?? la protection
                    juridique des bases de donn??es.<br><br>

                      <h5>  8. Liens hypertextes et cookies.</h5><br>
                        Le site www.adoptionchalonn.fr contient un certain nombre de liens hypertextes vers d???autres sites, mis en place avec l???autorisation de l'associtaion Chalonn.
                    Cependant, l'association Chalonn n???a pas la possibilit?? de v??rifier le contenu des sites ainsi visit??s, et n???assumera en cons??quence aucune responsabilit?? de ce fait.<br>

                        La navigation sur le site www.adoptionchalonn.fr est susceptible de provoquer l???installation de cookie(s) sur l???ordinateur de l???utilisateur.
                    Un cookie est un fichier de petite taille, qui ne permet pas l???identification de l???utilisateur, mais qui enregistre des informations relatives ?? la navigation
                    d???un ordinateur sur un site. Les donn??es ainsi obtenues visent ?? faciliter la navigation ult??rieure sur le site, et ont ??galement vocation ?? permettre diverses mesures
                    de fr??quentation.<br>

                        Le refus d???installation d???un cookie peut entra??ner l???impossibilit?? d???acc??der ?? certains services. L???utilisateur peut toutefois configurer son ordinateur de
                    la mani??re suivante, pour refuser l???installation des cookies :<br>

                        Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit?? et choisissez Bloquer tous
                    les cookies. Validez sur Ok.<br>

                        Sous Firefox : en haut de la fen??tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l???onglet Options. Cliquer sur l???onglet Vie priv??e.<br>
                        Param??trez les R??gles de conservation sur : utiliser les param??tres personnalis??s pour l???historique. Enfin d??cochez-la pour d??sactiver les cookies.<br>

                        Sous Safari : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par un rouage). S??lectionnez Param??tres.
                    Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur Param??tres de contenu. Dans la section ?? Cookies ??,
                    vous pouvez bloquer les cookies.<br>

                        Sous Chrome : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par trois lignes horizontales). S??lectionnez Param??tres.
                    Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur pr??f??rences. Dans l???onglet ?? Confidentialit?? ??, vous pouvez bloquer les
                    cookies.<br><br>

                    <h5>9. Droit applicable et attribution de juridiction.</h5><br>
                        Tout litige en relation avec l???utilisation du site www.adoptionchalonn.fr est soumis au droit fran??ais. Il est fait attribution exclusive de
                    juridiction aux tribunaux comp??tents de Saint Brieuc.<br><br>

                      <h5>  10. Les principales lois concern??es.</h5><br>
                        Loi n?? 78-17 du 6 janvier 1978, notamment modifi??e par la loi n?? 2004-801 du 6 ao??t 2004 relative ?? l???informatique, aux fichiers et aux libert??s.<br>

                        Loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique.<br><br>

                      <h5>  11. Lexique.</h5><br>
                        Utilisateur : Internaute se connectant, utilisant le site susnomm??.<br>

                        Informations personnelles : ?? les informations qui permettent, sous quelque forme que ce soit, directement ou non,
                    l???identification des personnes physiques auxquelles elles s???appliquent ?? (article 4 de la loi n?? 78-17 du 6 janvier 1978).
                        <br><br>

                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <div class=\"col-6 col-md-3\">
        <img src=\"{{ asset('img/image2accueil.jpg') }}\">
    </div>

{% endblock %}
", "mention/index.html.twig", "C:\\wamp64\\www\\chalonn1-master\\templates\\mention\\index.html.twig");
    }
}
