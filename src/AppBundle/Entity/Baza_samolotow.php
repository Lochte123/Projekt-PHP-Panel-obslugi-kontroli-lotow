<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Baza_samolotow
 *
 * @ORM\Table(name="baza_samolotow")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Baza_samolotowRepository")
 */
class Baza_samolotow
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
     * @ORM\Column(name="Marka", type="string", length=255)
     */
    private $marka;

    /**
     * @var string
     *
     * @ORM\Column(name="Model", type="string", length=255)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="Rocznik_produkcji", type="integer")
     */
    private $rocznikProdukcji;

    /**
     * @var float
     *
     * @ORM\Column(name="Pulap", type="float")
     */
    private $pulap;

    /**
     * @var string
     *
     * @ORM\Column(name="Numer_rej", type="string", length=255)
     */
    private $numerRej;

    /**
     * @var int
     *
     * @ORM\Column(name="Liczba_pasazerow", type="integer")
     */
    private $liczbaPasazerow;

    /**
     * @var bool
     *
     * @ORM\Column(name="Aktywny", type="boolean")
     */
    private $aktywny;


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
     * Set marka
     *
     * @param string $marka
     *
     * @return Baza_samolotow
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;

        return $this;
    }

    /**
     * Get marka
     *
     * @return string
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Baza_samolotow
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set rocznikProdukcji
     *
     * @param integer $rocznikProdukcji
     *
     * @return Baza_samolotow
     */
    public function setRocznikProdukcji($rocznikProdukcji)
    {
        $this->rocznikProdukcji = $rocznikProdukcji;

        return $this;
    }

    /**
     * Get rocznikProdukcji
     *
     * @return int
     */
    public function getRocznikProdukcji()
    {
        return $this->rocznikProdukcji;
    }

    /**
     * Set pulap
     *
     * @param float $pulap
     *
     * @return Baza_samolotow
     */
    public function setPulap($pulap)
    {
        $this->pulap = $pulap;

        return $this;
    }

    /**
     * Get pulap
     *
     * @return float
     */
    public function getPulap()
    {
        return $this->pulap;
    }

    /**
     * Set numerRej
     *
     * @param string $numerRej
     *
     * @return Baza_samolotow
     */
    public function setNumerRej($numerRej)
    {
        $this->numerRej = $numerRej;

        return $this;
    }

    /**
     * Get numerRej
     *
     * @return string
     */
    public function getNumerRej()
    {
        return $this->numerRej;
    }

    /**
     * Set liczbaPasazerow
     *
     * @param integer $liczbaPasazerow
     *
     * @return Baza_samolotow
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
     * Set aktywny
     *
     * @param boolean $aktywny
     *
     * @return Baza_samolotow
     */
    public function setAktywny($aktywny)
    {
        $this->aktywny = $aktywny;

        return $this;
    }

    /**
     * Get aktywny
     *
     * @return bool
     */
    public function getAktywny()
    {
        return $this->aktywny;
    }
}

