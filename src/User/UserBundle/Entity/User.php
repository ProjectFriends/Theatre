<?php

namespace User\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="User\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\Column(type="string")

     */
    protected $nom;
    /**
     * @ORM\Column(type="string")

     */
    protected $structure;
 /**
     * @ORM\Column(type="string")

     */
    protected $fonction;
/**
     * @ORM\Column(type="string")

     */
    protected $adresse;
/**
     * @ORM\Column(type="string")

     */
    protected $postal;
/**
     * @ORM\Column(type="string")

     */
    protected $ville;
/**
     * @ORM\Column(type="string")

     */
    protected $tel;

    /**

     * @ORM\Column(type="string")

     */
    protected $prenom;

    /**
     * @ORM\ManyToOne(targetEntity="Back\OfficeBundle\Entity\Pays", inversedBy="user" , cascade={"persist"})
     * @ORM\JoinColumn(name="pays_id", referencedColumnName="id", onDelete="CASCADE")
     */

    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="Back\OfficeBundle\Entity\Activite", inversedBy="user" , cascade={"persist"})
     * @ORM\JoinColumn(name="activite_id", referencedColumnName="id", onDelete="CASCADE")
     */

    private $activite;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pays
     *
     * @param \Back\OfficeBundle\Entity\Pays $pays
     *
     * @return User
     */
    public function setPays(\Back\OfficeBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Back\OfficeBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set activite
     *
     * @param \Back\OfficeBundle\Entity\Activite $activite
     *
     * @return User
     */
    public function setActivite(\Back\OfficeBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Back\OfficeBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set structure
     *
     * @param string $structure
     *
     * @return User
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return User
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set postal
     *
     * @param string $postal
     *
     * @return User
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get postal
     *
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }
}
