<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panel_lotniczy
 *
 * @ORM\Table(name="panel_lotniczy")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Panel_lotniczyRepository")
 */
class Panel_lotniczy
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
     * @ORM\Column(name="Linia", type="string", length=255)
     */
    private $linia;

    /**
     * @var string
     *
     * @ORM\Column(name="Samolot", type="string", length=255)
     */
    private $samolot;

    /**
     * @var string
     *
     * @ORM\Column(name="Kraj_wylot", type="string", length=255)
     */
    private $krajWylot;

    /**
     * @var string
     *
     * @ORM\Column(name="Kraj_przylot", type="string", length=255)
     */
    private $krajPrzylot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_wylot", type="datetime")
     */
    private $dataWylot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_przylot", type="datetime")
     */
    private $dataPrzylot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Czas_lotu_oczekiwany", type="time")
     */
    private $czasLotuOczekiwany;

    /**
     * @var int
     *
     * @ORM\Column(name="Liczba_pasazerow", type="integer")
     */
    private $liczbaPasazerow;

    /**
     * @var string
     *
     * @ORM\Column(name="Pilot_glowny", type="string", length=255)
     */
    private $pilotGlowny;

    /**
     * @var bool
     *
     * @ORM\Column(name="Awaria", type="boolean")
     */
    private $awaria;

    /**
     * @var bool
     *
     * @ORM\Column(name="Lot_bezpieczny", type="boolean")
     */
    private $lotBezpieczny;

    protected $linieLotnicze;

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
     * Set linia
     *
     * @param string $linia
     *
     * @return Panel_lotniczy
     */
    public function setLinia($linia)
    {
        $this->linia = $linia;

        return $this;
    }

    /**
     * Get linia
     *
     * @return string
     */
    public function getLinia()
    {
        return $this->linia;
    }

    /**
     * Set samolot
     *
     * @param string $samolot
     *
     * @return Panel_lotniczy
     */
    public function setSamolot($samolot)
    {
        $this->samolot = $samolot;

        return $this;
    }

    /**
     * Get samolot
     *
     * @return string
     */
    public function getSamolot()
    {
        return $this->samolot;
    }

    /**
     * Set krajWylot
     *
     * @param string $krajWylot
     *
     * @return Panel_lotniczy
     */
    public function setKrajWylot($krajWylot)
    {
        $this->krajWylot = $krajWylot;

        return $this;
    }

    /**
     * Get krajWylot
     *
     * @return string
     */
    public function getKrajWylot()
    {
        return $this->krajWylot;
    }

    /**
     * Set krajPrzylot
     *
     * @param string $krajPrzylot
     *
     * @return Panel_lotniczy
     */
    public function setKrajPrzylot($krajPrzylot)
    {
        $this->krajPrzylot = $krajPrzylot;

        return $this;
    }

    /**
     * Get krajPrzylot
     *
     * @return string
     */
    public function getKrajPrzylot()
    {
        return $this->krajPrzylot;
    }

    /**
     * Set dataWylot
     *
     * @param \DateTime $dataWylot
     *
     * @return Panel_lotniczy
     */
    public function setDataWylot($dataWylot)
    {
        $this->dataWylot = $dataWylot;

        return $this;
    }

    /**
     * Get dataWylot
     *
     * @return \DateTime
     */
    public function getDataWylot()
    {
        return $this->dataWylot;
    }

    /**
     * Set dataPrzylot
     *
     * @param \DateTime $dataPrzylot
     *
     * @return Panel_lotniczy
     */
    public function setDataPrzylot($dataPrzylot)
    {
        $this->dataPrzylot = $dataPrzylot;

        return $this;
    }

    /**
     * Get dataPrzylot
     *
     * @return \DateTime
     */
    public function getDataPrzylot()
    {
        return $this->dataPrzylot;
    }

    /**
     * Set czasLotuOczekiwany
     *
     * @param \DateTime $czasLotuOczekiwany
     *
     * @return Panel_lotniczy
     */
    public function setCzasLotuOczekiwany($czasLotuOczekiwany)
    {
        $this->czasLotuOczekiwany = $czasLotuOczekiwany;

        return $this;
    }

    /**
     * Get czasLotuOczekiwany
     *
     * @return \DateTime
     */
    public function getCzasLotuOczekiwany()
    {
        return $this->czasLotuOczekiwany;
    }

    /**
     * Set liczbaPasazerow
     *
     * @param integer $liczbaPasazerow
     *
     * @return Panel_lotniczy
     */
    public function setLiczbaPasazerow($liczbaPasazerow)
    {
        $this->liczbaPasazerow = $liczbaPasazerow;

        return $this;
    }

    /**
     * Get liczbaPasazerow
     *
     * @return int
     */
    public function getLiczbaPasazerow()
    {
        return $this->liczbaPasazerow;
    }

    /**
     * Set pilotGlowny
     *
     * @param string $pilotGlowny
     *
     * @return Panel_lotniczy
     */
    public function setPilotGlowny($pilotGlowny)
    {
        $this->pilotGlowny = $pilotGlowny;

        return $this;
    }

    /**
     * Get pilotGlowny
     *
     * @return string
     */
    public function getPilotGlowny()
    {
        return $this->pilotGlowny;
    }

    /**
     * Set awaria
     *
     * @param boolean $awaria
     *
     * @return Panel_lotniczy
     */
    public function setAwaria($awaria)
    {
        $this->awaria = $awaria;

        return $this;
    }

    /**
     * Get awaria
     *
     * @return bool
     */
    public function getAwaria()
    {
        return $this->awaria;
    }

    /**
     * Set lotBezpieczny
     *
     * @param boolean $lotBezpieczny
     *
     * @return Panel_lotniczy
     */
    public function setLotBezpieczny($lotBezpieczny)
    {
        $this->lotBezpieczny = $lotBezpieczny;

        return $this;
    }

    /**
     * Get lotBezpieczny
     *
     * @return bool
     */
    public function getLotBezpieczny()
    {
        return $this->lotBezpieczny;
    }
    /**
     * Set panstwa
     *
     * @param \AppBundle\Entity\Linie_lotnicze $linieLotnicze
     *
     * @return Panel_lotniczy
     */
    public function setLinielotnicze(\AppBundle\Entity\Linie_lotnicze $linie_lotnicze = null)
    {
        $this->linieLotnicze = $linie_lotnicze;

        return $this;
    }

    /**
     * Get panstwa
     *
     * @return \AppBundle\Entity\Linie_lotnicze
     */
    public function getLinielotnicze()
    {
        return $this->linieLotnicze;
    }
}

