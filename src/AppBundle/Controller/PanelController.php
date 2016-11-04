<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Loty;
use AppBundle\Form\LotyType;
use AppBundle\Form\UserType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PanelController extends Controller
{
    /**
     * @Route("/panel")
     */

   // public function SprawdzLinie()
   // {
     //   $linia = new Loty();
     //  $doSprawdzenia = "RyanAir";

       // $odp = "Istnieje taka linia";
       // $nodp = "Nie ma takiej linii";

        // if($this->Loty()->expire()) {
          //  if ($linia->getLiniaLot() == "RyanAir") {
            //    return $this->render('AppBundle:panel:odp.html.twig', array(
              //      'number' => $odp,
               // ));
            //} else {
              //  return $this->render('AppBundle:panel:nodp.html.twig', array(
                //    'number' => $nodp,
                //));
            //}
     //   }

    public function Loty()
    {
        $lot = new Loty();
        $form = $this->createForm(LotyType::class, $lot);

        return $this->render('AppBundle:panel:panel.html.twig', array('form' => $form->createView()));
    }
}
