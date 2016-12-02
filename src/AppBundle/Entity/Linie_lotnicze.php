<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Linie_lotnicze
 *
 * @ORM\Table(name="linie_lotnicze")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Linie_lotniczeRepository")
 */
class Linie_lotnicze
{
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
     * @var int
     *
     * @ORM\Column(name="Liczba_samolotow", type="integer")
     */
    private $liczbaSamolotow;

    /**
     * @var int
     *
     * @ORM\Column(name="Liczba_pracownikow", type="integer")
     */
    private $liczbaPracownikow;

    /**
     * @ORM\ManyToOne(targetEntity="Panstwa", inversedBy="linie_lotnicze")
     * @ORM\JoinColumn(name="panstwa_id", referencedColumnName="id")
     */
    protected $panstwa;
    protected $panel_lotniczy;
    /**
     * Panstwa constructor.
     */
    public function __construct()
    {
        $this->panel_lotniczy = new ArrayCollection();
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
     * @return Linie_lotnicze
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
     * Set liczbaSamolotow
     *
     * @param integer $liczbaSamolotow
     *
     * @return Linie_lotnicze
     */
    public function setLiczbaSamolotow($liczbaSamolotow)
    {
        $this->liczbaSamolotow = $liczbaSamolotow;

        return $this;
    }

    /**
     * Get liczbaSamolotow
     *
     * @return int
     */
    public function getLiczbaSamolotow()
    {
        return $this->liczbaSamolotow;
    }

    /**
     * Set liczbaPracownikow
     *
     * @param integer $liczbaPracownikow
     *
     * @return Linie_lotnicze
     */
    public function setLiczbaPracownikow($liczbaPracownikow)
    {
        $this->liczbaPracownikow = $liczbaPracownikow;

        return $this;
    }

    /**
     * Get liczbaPracownikow
     *
     * @return int
     */
    public function getLiczbaPracownikow()
    {
        return $this->liczbaPracownikow;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Panstwa $category
     *
     * @return Linie_lotnicze
     */
    public function setCategory(\AppBundle\Entity\Panstwa $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Panstwa
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set panstwa
     *
     * @param \AppBundle\Entity\Panstwa $panstwa
     *
     * @return Linie_lotnicze
     */
    public function setPanstwa(\AppBundle\Entity\Panstwa $panstwa = null)
    {
        $this->panstwa = $panstwa;

        return $this;
    }

    /**
     * Get panstwa
     *
     * @return \AppBundle\Entity\Panstwa
     */
    public function getPanstwa()
    {
        return $this->panstwa;
    }

    /**
     * Add panelLotniczy
     *
     * @param \AppBundle\Entity\Panel_lotniczy $panelLotniczy
     *
     * @return Linie_lotnicze
     */
    public function addPanelLotniczy(\AppBundle\Entity\Panel_lotniczy $panel_lotniczy)
    {
        $this->panel_lotniczy = $panel_lotniczy;

        return $this;
    }

    /**
     * Remove panelLotniczy
     *
     * @param \AppBundle\Entity\Panel_lotniczy $panelLotniczy
     */
    public function removePanelLotniczy(\AppBundle\Entity\Panel_lotniczy $panel_lotniczy)
    {
        $this->panel_lotniczy->removeElement($panel_lotniczy);
    }

    /**
     * Get panelLotniczy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanelLotniczy()
    {
        return $this->linieLotnicze;
    }
}
