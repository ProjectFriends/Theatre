<?php

namespace Back\OfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Back\OfficeBundle\Entity\EventRepository")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistes;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $partenaires;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $spectacles;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $path;
    /**
     * @var \Date
     *
     * @ORM\Column(name="date_creation", type="date")
     */

    private $dateEvenement;

    /**
     * @var \DateTime
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heuredebut;

    /**
     * @ORM\ManyToOne(targetEntity="User\UserBundle\Entity\User",inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false ,onDelete="CASCADE")
     */

    private $createur;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Event
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set artistes
     *
     * @param string $artistes
     *
     * @return Event
     */
    public function setArtistes($artistes)
    {
        $this->artistes = $artistes;

        return $this;
    }

    /**
     * Get artistes
     *
     * @return string
     */
    public function getArtistes()
    {
        return $this->artistes;
    }

    /**
     * Set partenaires
     *
     * @param string $partenaires
     *
     * @return Event
     */
    public function setPartenaires($partenaires)
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    /**
     * Get partenaires
     *
     * @return string
     */
    public function getPartenaires()
    {
        return $this->partenaires;
    }

    /**
     * Set spectacles
     *
     * @param string $spectacles
     *
     * @return Event
     */
    public function setSpectacles($spectacles)
    {
        $this->spectacles = $spectacles;

        return $this;
    }

    /**
     * Get spectacles
     *
     * @return string
     */
    public function getSpectacles()
    {
        return $this->spectacles;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Event
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set dateEvenement
     *
     * @param \DateTime $dateEvenement
     *
     * @return Event
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    /**
     * Get dateEvenement
     *
     * @return \DateTime
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * Set heuredebut
     *
     * @param \DateTime $heuredebut
     *
     * @return Event
     */
    public function setHeuredebut($heuredebut)
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    /**
     * Get heuredebut
     *
     * @return \DateTime
     */
    public function getHeuredebut()
    {
        return $this->heuredebut;
    }

    /**
     * Set createur
     *
     * @param \User\UserBundle\Entity\User $createur
     *
     * @return Event
     */
    public function setCreateur(\User\UserBundle\Entity\User $createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \User\UserBundle\Entity\User
     */
    public function getCreateur()
    {
        return $this->createur;
    }


}
