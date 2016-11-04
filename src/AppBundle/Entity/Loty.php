<?php
/**
 * Created by PhpStorm.
 * User: Łukasz
 * Date: 2016-11-03
 * Time: 23:56
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class Loty
{
    private $id;
    private $liniaLotnicza;
    private $panstwo;

    public function getLiniaLotnicza()
    {
        return $this->liniaLotnicza;
    }

    public function setLiniaLotnicza($liniaLotnicza)
    {
        $this -> liniaLotnicza = $liniaLotnicza;
    }

    public function getPanstwo()
    {
        return $this->panstwo;
    }

    public function setPanstwo($panstwo)
    {
        $this ->panstwo = $panstwo;
    }
}