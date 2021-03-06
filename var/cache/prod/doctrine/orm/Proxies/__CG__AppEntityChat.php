<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Chat extends \App\Entity\Chat implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'race', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'pelage', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'sterelise', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'testFiv', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'testFelv', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'histoire', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'caractere', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'frais', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'file', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'commentaires', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'miseenavant', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'reserve', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'img'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'race', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'pelage', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'sterelise', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'testFiv', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'testFelv', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'histoire', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'caractere', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'frais', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'file', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'commentaires', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'miseenavant', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'reserve', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Chat' . "\0" . 'img'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Chat $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance(?\DateTimeInterface $dateNaissance): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe(?string $sexe): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getRace(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRace', []);

        return parent::getRace();
    }

    /**
     * {@inheritDoc}
     */
    public function setRace(?string $race): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRace', [$race]);

        return parent::setRace($race);
    }

    /**
     * {@inheritDoc}
     */
    public function getPelage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPelage', []);

        return parent::getPelage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPelage(?string $pelage): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPelage', [$pelage]);

        return parent::setPelage($pelage);
    }

    /**
     * {@inheritDoc}
     */
    public function getSterelise(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSterelise', []);

        return parent::getSterelise();
    }

    /**
     * {@inheritDoc}
     */
    public function setSterelise(?string $sterelise): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSterelise', [$sterelise]);

        return parent::setSterelise($sterelise);
    }

    /**
     * {@inheritDoc}
     */
    public function getTestFiv(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTestFiv', []);

        return parent::getTestFiv();
    }

    /**
     * {@inheritDoc}
     */
    public function setTestFiv(?string $testFiv): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTestFiv', [$testFiv]);

        return parent::setTestFiv($testFiv);
    }

    /**
     * {@inheritDoc}
     */
    public function getTestFelv(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTestFelv', []);

        return parent::getTestFelv();
    }

    /**
     * {@inheritDoc}
     */
    public function setTestFelv(?string $testFelv): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTestFelv', [$testFelv]);

        return parent::setTestFelv($testFelv);
    }

    /**
     * {@inheritDoc}
     */
    public function getHistoire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistoire', []);

        return parent::getHistoire();
    }

    /**
     * {@inheritDoc}
     */
    public function setHistoire(?string $histoire): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHistoire', [$histoire]);

        return parent::setHistoire($histoire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaractere(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaractere', []);

        return parent::getCaractere();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaractere(?string $caractere): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaractere', [$caractere]);

        return parent::setCaractere($caractere);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(?string $contact): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$contact]);

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrais(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrais', []);

        return parent::getFrais();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrais(?string $frais): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrais', [$frais]);

        return parent::setFrais($frais);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(?string $slug): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(?string $file): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTime $createdAt): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategorie(\App\Entity\categorie $categorie): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategorie', [$categorie]);

        return parent::addCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategorie(\App\Entity\categorie $categorie): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategorie', [$categorie]);

        return parent::removeCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', []);

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\App\Entity\Commentaire $commentaire): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', [$commentaire]);

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\App\Entity\Commentaire $commentaire): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', [$commentaire]);

        return parent::removeCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiseenavant(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiseenavant', []);

        return parent::getMiseenavant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiseenavant(?bool $miseenavant): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiseenavant', [$miseenavant]);

        return parent::setMiseenavant($miseenavant);
    }

    /**
     * {@inheritDoc}
     */
    public function getReserve(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReserve', []);

        return parent::getReserve();
    }

    /**
     * {@inheritDoc}
     */
    public function setReserve(?bool $reserve): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReserve', [$reserve]);

        return parent::setReserve($reserve);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg', []);

        return parent::getImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg(?string $img): \App\Entity\Chat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg', [$img]);

        return parent::setImg($img);
    }

}
