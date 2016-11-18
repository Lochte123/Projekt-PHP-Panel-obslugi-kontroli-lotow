<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Panstwa
 *
 * @ORM\Table(name="panstwa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PanstwaRepository")
 */
class Panstwa
{
    function __toString()
    {
        return $this->nazwa;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa", type="string", length=255)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="Skrot", type="string", length=255)
     */
    private $skrot;

    /**
     * @ORM\OneToMany(targetEntity="Linie_lotnicze", mappedBy="panstwa")
     */
    protected $linieLotnicze;

    /**
     * Panstwa constructor.
     */
    public function __construct()
    {
        $this->linieLotnicze = new ArrayCollection();
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Panstwa
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set skrot
     *
     * @param string $skrot
     *
     * @return Panstwa
     */
    public function setSkrot($skrot)
    {
        $this->skrot = $skrot;

        return $this;
    }

    /**
     * Get skrot
     *
     * @return string
     */
    public function getSkrot()
    {
        return $this->skrot;
    }

    /**
     * Add linieLotnicze
     *
     * @param \AppBundle\Entity\Linie_lotnicze $linieLotnicze
     *
     * @return Panstwa
     */
    public function addLinieLotnicze(\AppBundle\Entity\Linie_lotnicze $linieLotnicze)
    {
        $this->linieLotnicze[] = $linieLotnicze;

        return $this;
    }

    /**
     * Remove linieLotnicze
     *
     * @param \AppBundle\Entity\Linie_lotnicze $linieLotnicze
     */
    public function removeLinieLotnicze(\AppBundle\Entity\Linie_lotnicze $linieLotnicze)
    {
        $this->linieLotnicze->removeElement($linieLotnicze);
    }

    /**
     * Get linieLotnicze
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinieLotnicze()
    {
        return $this->linieLotnicze;
    }
}
