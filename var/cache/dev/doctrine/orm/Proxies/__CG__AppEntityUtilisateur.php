<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'numTel', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'salaire', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'soldeConge', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'posteEmploye', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'statusCompte', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idRole', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idRest', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idFournisseur'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'numTel', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'salaire', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'soldeConge', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'posteEmploye', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'statusCompte', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idRole', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idRest', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'idFournisseur'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
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
    public function getid(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getid', []);

        return parent::getid();
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
    public function setNom(string $nom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin(string $cin): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTel', []);

        return parent::getNumTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTel(string $numTel): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTel', [$numTel]);

        return parent::setNumTel($numTel);
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
    public function setDateNaissance($dateNaissance): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalaire(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalaire', []);

        return parent::getSalaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalaire(?int $salaire): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalaire', [$salaire]);

        return parent::setSalaire($salaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoldeConge(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoldeConge', []);

        return parent::getSoldeConge();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoldeConge(?int $soldeConge): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoldeConge', [$soldeConge]);

        return parent::setSoldeConge($soldeConge);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosteEmploye(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosteEmploye', []);

        return parent::getPosteEmploye();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosteEmploye(?string $posteEmploye): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosteEmploye', [$posteEmploye]);

        return parent::setPosteEmploye($posteEmploye);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCompte(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusCompte', []);

        return parent::getStatusCompte();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusCompte(string $statusCompte): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusCompte', [$statusCompte]);

        return parent::setStatusCompte($statusCompte);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRole(): ?\App\Entity\Role
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRole', []);

        return parent::getIdRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRole(?\App\Entity\Role $idRole): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRole', [$idRole]);

        return parent::setIdRole($idRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRest(): ?\App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRest', []);

        return parent::getIdRest();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRest(?\App\Entity\Restaurant $idRest): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRest', [$idRest]);

        return parent::setIdRest($idRest);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdFournisseur(): ?\App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFournisseur', []);

        return parent::getIdFournisseur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdFournisseur(?\App\Entity\Fournisseur $idFournisseur): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdFournisseur', [$idFournisseur]);

        return parent::setIdFournisseur($idFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $email): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$email]);

        return parent::setUsername($email);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
