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

        echo "Mentions légales";
        
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
                    <h3>Informations légales</h3><br>
                     <h5>   1. Présentation du site.</h5><br>
                        En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site www.adoptionchalonn.fr
                    l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :<br><br>

                        Propriétaire : Association Chalonn – Association – Siret n° : 802 388 330 00010 – Siège social : 17, rue la ville Hubeau Medrignac<br>
                        Créateur : Isabelle Lefras<br>
                        Responsable publication : Frédérique – assochalonn@gmail.com<br>
                        Le responsable publication est une personne physique.<br>
                        Webmaster : Frédérique – f.cousin@hotmail.fr<br>
                        Hébergeur : OVH – Siège social : 2 rue Kellermann – 59100 Roubaix – France<br>
                        Rédacteur : Frédérique<br>
                        Le modèle de mentions légales est offert par Subdelirium.com Mentions légales<br><br><br>

                    <h5>2. Conditions générales d’utilisation du site et des services proposés.</h5><br>
                        L’utilisation du site www.adoptionchalonn.fr implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites.
                    Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site www.adoptionchalonn.fr sont donc invités
                    à les consulter de manière régulière.<br>

                        Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par l'association Chalonn,
                    qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.<br>

                        Le site www.adoptionchalonn.fr est mis à jour régulièrement par Frédérique. De la même façon, les mentions légales peuvent être modifiées à tout moment
                    : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.<br><br>

                       <h5> 3. Description des services fournis.</h5><br>
                        Le site www.adoptionchalonn.fr a pour objet de fournir une information concernant l’ensemble des activités de la société.<br>

                        l'association Chalonn s’efforce de fournir sur le site www.adoptionchalonn.fr des informations aussi précises que possible.
                    Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers
                    partenaires qui lui fournissent ces informations.<br>

                        Tous les informations indiquées sur le site www.adoptionchalonn.fr sont données à titre indicatif, et sont susceptibles d’évoluer.
                    Par ailleurs, les renseignements figurant sur le site www.adoptionchalonn.fr ne sont pas exhaustifs.
                    Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.<br><br>

                      <h5>  4. Limitations contractuelles sur les données techniques.</h5><br>
                        Le site utilise la technologie PHP/symfony5.<br>

                        Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site.
                    De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et
                    avec un navigateur de dernière génération mis-à-jour.<br><br>

                      <h5>  5. Propriété intellectuelle et contrefaçons.</h5><br>
                        L'association Chalonn est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles
                    sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.<br>

                        Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site,
                    quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : l'association Chalonn.<br>

                        Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et
                    poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.<br><br>

                      <h5>  6. Limitations de responsabilité.</h5><br>
                        L'association Chalonn ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site
                    www.adoptionchalonn.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4,
                    soit de l’apparition d’un bug ou d’une incompatibilité.<br>

                        Lassociation Chalonn ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance)
                    consécutifs à l’utilisation du site www.adoptionchalonn.fr.<br>

                        Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.
                    L'association Chalonn se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la
                    législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, l'association Chalonn se réserve également
                    la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant,
                    ou pornographique, quel que soit le support utilisé (texte, photographie…).<br><br>

                       <h5> 7. Gestion des données personnelles.</h5><br>
                        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004,
                    l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.<br>

                        A l’occasion de l’utilisation du site www.adoptionchalonn.fr, peuvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur
                    a accédé au site www.adoptionchalonn.fr, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.<br>

                        En tout état de cause l'association Chalonn ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains
                    services proposés par le site www.adoptionchalonn.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par
                    lui-même à leur saisie. Il est alors précisé à l’utilisateur du site www.adoptionchalonn.fr l’obligation ou non de fournir ces informations.<br>

                        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés,
                    tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et
                    signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<br>

                        Aucune information personnelle de l’utilisateur du site www.adoptionchalonn.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue
                    sur un support quelconque à des tiers. Seule l’hypothèse du rachat de l'association Chalonn et de ses droits permettrait la transmission des dites informations à
                    l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site
                    www.adoptionchalonn.fr.<br>

                        Le site n’est pas déclaré à la CNIL car il ne recueille pas d’informations personnelles.<br>

                        Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection
                    juridique des bases de données.<br><br>

                      <h5>  8. Liens hypertextes et cookies.</h5><br>
                        Le site www.adoptionchalonn.fr contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de l'associtaion Chalonn.
                    Cependant, l'association Chalonn n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.<br>

                        La navigation sur le site www.adoptionchalonn.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
                    Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation
                    d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures
                    de fréquentation.<br>

                        Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de
                    la manière suivante, pour refuser l’installation des cookies :<br>

                        Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous
                    les cookies. Validez sur Ok.<br>

                        Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.<br>
                        Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies.<br>

                        Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres.
                    Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur Paramètres de contenu. Dans la section « Cookies »,
                    vous pouvez bloquer les cookies.<br>

                        Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres.
                    Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur préférences. Dans l’onglet « Confidentialité », vous pouvez bloquer les
                    cookies.<br><br>

                    <h5>9. Droit applicable et attribution de juridiction.</h5><br>
                        Tout litige en relation avec l’utilisation du site www.adoptionchalonn.fr est soumis au droit français. Il est fait attribution exclusive de
                    juridiction aux tribunaux compétents de Saint Brieuc.<br><br>

                      <h5>  10. Les principales lois concernées.</h5><br>
                        Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.<br>

                        Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.<br><br>

                      <h5>  11. Lexique.</h5><br>
                        Utilisateur : Internaute se connectant, utilisant le site susnommé.<br>

                        Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non,
                    l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).
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

{% block title %}Mentions légales{% endblock %}

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
                    <h3>Informations légales</h3><br>
                     <h5>   1. Présentation du site.</h5><br>
                        En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site www.adoptionchalonn.fr
                    l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :<br><br>

                        Propriétaire : Association Chalonn – Association – Siret n° : 802 388 330 00010 – Siège social : 17, rue la ville Hubeau Medrignac<br>
                        Créateur : Isabelle Lefras<br>
                        Responsable publication : Frédérique – assochalonn@gmail.com<br>
                        Le responsable publication est une personne physique.<br>
                        Webmaster : Frédérique – f.cousin@hotmail.fr<br>
                        Hébergeur : OVH – Siège social : 2 rue Kellermann – 59100 Roubaix – France<br>
                        Rédacteur : Frédérique<br>
                        Le modèle de mentions légales est offert par Subdelirium.com Mentions légales<br><br><br>

                    <h5>2. Conditions générales d’utilisation du site et des services proposés.</h5><br>
                        L’utilisation du site www.adoptionchalonn.fr implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites.
                    Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site www.adoptionchalonn.fr sont donc invités
                    à les consulter de manière régulière.<br>

                        Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par l'association Chalonn,
                    qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.<br>

                        Le site www.adoptionchalonn.fr est mis à jour régulièrement par Frédérique. De la même façon, les mentions légales peuvent être modifiées à tout moment
                    : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.<br><br>

                       <h5> 3. Description des services fournis.</h5><br>
                        Le site www.adoptionchalonn.fr a pour objet de fournir une information concernant l’ensemble des activités de la société.<br>

                        l'association Chalonn s’efforce de fournir sur le site www.adoptionchalonn.fr des informations aussi précises que possible.
                    Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers
                    partenaires qui lui fournissent ces informations.<br>

                        Tous les informations indiquées sur le site www.adoptionchalonn.fr sont données à titre indicatif, et sont susceptibles d’évoluer.
                    Par ailleurs, les renseignements figurant sur le site www.adoptionchalonn.fr ne sont pas exhaustifs.
                    Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.<br><br>

                      <h5>  4. Limitations contractuelles sur les données techniques.</h5><br>
                        Le site utilise la technologie PHP/symfony5.<br>

                        Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site.
                    De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et
                    avec un navigateur de dernière génération mis-à-jour.<br><br>

                      <h5>  5. Propriété intellectuelle et contrefaçons.</h5><br>
                        L'association Chalonn est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles
                    sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.<br>

                        Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site,
                    quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : l'association Chalonn.<br>

                        Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et
                    poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.<br><br>

                      <h5>  6. Limitations de responsabilité.</h5><br>
                        L'association Chalonn ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site
                    www.adoptionchalonn.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4,
                    soit de l’apparition d’un bug ou d’une incompatibilité.<br>

                        Lassociation Chalonn ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance)
                    consécutifs à l’utilisation du site www.adoptionchalonn.fr.<br>

                        Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.
                    L'association Chalonn se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la
                    législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, l'association Chalonn se réserve également
                    la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant,
                    ou pornographique, quel que soit le support utilisé (texte, photographie…).<br><br>

                       <h5> 7. Gestion des données personnelles.</h5><br>
                        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004,
                    l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.<br>

                        A l’occasion de l’utilisation du site www.adoptionchalonn.fr, peuvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur
                    a accédé au site www.adoptionchalonn.fr, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.<br>

                        En tout état de cause l'association Chalonn ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains
                    services proposés par le site www.adoptionchalonn.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par
                    lui-même à leur saisie. Il est alors précisé à l’utilisateur du site www.adoptionchalonn.fr l’obligation ou non de fournir ces informations.<br>

                        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés,
                    tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et
                    signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<br>

                        Aucune information personnelle de l’utilisateur du site www.adoptionchalonn.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue
                    sur un support quelconque à des tiers. Seule l’hypothèse du rachat de l'association Chalonn et de ses droits permettrait la transmission des dites informations à
                    l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site
                    www.adoptionchalonn.fr.<br>

                        Le site n’est pas déclaré à la CNIL car il ne recueille pas d’informations personnelles.<br>

                        Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection
                    juridique des bases de données.<br><br>

                      <h5>  8. Liens hypertextes et cookies.</h5><br>
                        Le site www.adoptionchalonn.fr contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de l'associtaion Chalonn.
                    Cependant, l'association Chalonn n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.<br>

                        La navigation sur le site www.adoptionchalonn.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
                    Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation
                    d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures
                    de fréquentation.<br>

                        Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de
                    la manière suivante, pour refuser l’installation des cookies :<br>

                        Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous
                    les cookies. Validez sur Ok.<br>

                        Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.<br>
                        Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies.<br>

                        Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres.
                    Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur Paramètres de contenu. Dans la section « Cookies »,
                    vous pouvez bloquer les cookies.<br>

                        Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres.
                    Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur préférences. Dans l’onglet « Confidentialité », vous pouvez bloquer les
                    cookies.<br><br>

                    <h5>9. Droit applicable et attribution de juridiction.</h5><br>
                        Tout litige en relation avec l’utilisation du site www.adoptionchalonn.fr est soumis au droit français. Il est fait attribution exclusive de
                    juridiction aux tribunaux compétents de Saint Brieuc.<br><br>

                      <h5>  10. Les principales lois concernées.</h5><br>
                        Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.<br>

                        Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.<br><br>

                      <h5>  11. Lexique.</h5><br>
                        Utilisateur : Internaute se connectant, utilisant le site susnommé.<br>

                        Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non,
                    l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).
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
