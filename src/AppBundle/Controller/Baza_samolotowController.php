<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Baza_samolotow;
use AppBundle\Form\Baza_samolotowType;

/**
 * Baza_samolotow controller.
 *
 * @Route("/baza_samolotow")
 */
class Baza_samolotowController extends Controller
{
    /**
     * Lists all Baza_samolotow entities.
     *
     * @Route("/", name="baza_samolotow_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $baza_samolotows = $em->getRepository('AppBundle:Baza_samolotow')->findAll();

        return $this->render('baza_samolotow/index.html.twig', array(
            'baza_samolotows' => $baza_samolotows,
        ));
    }

    /**
     * Creates a new Baza_samolotow entity.
     *
     * @Route("/new", name="baza_samolotow_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $baza_samolotow = new Baza_samolotow();
        $form = $this->createForm('AppBundle\Form\Baza_samolotowType', $baza_samolotow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($baza_samolotow);
            $em->flush();

            return $this->redirectToRoute('baza_samolotow_show', array('id' => $baza_samolotow->getId()));
        }

        return $this->render('baza_samolotow/new.html.twig', array(
            'baza_samolotow' => $baza_samolotow,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Baza_samolotow entity.
     *
     * @Route("/{id}", name="baza_samolotow_show")
     * @Method("GET")
     */
    public function showAction(Baza_samolotow $baza_samolotow)
    {
        $deleteForm = $this->createDeleteForm($baza_samolotow);

        return $this->render('baza_samolotow/show.html.twig', array(
            'baza_samolotow' => $baza_samolotow,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Baza_samolotow entity.
     *
     * @Route("/{id}/edit", name="baza_samolotow_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Baza_samolotow $baza_samolotow)
    {
        $deleteForm = $this->createDeleteForm($baza_samolotow);
        $editForm = $this->createForm('AppBundle\Form\Baza_samolotowType', $baza_samolotow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($baza_samolotow);
            $em->flush();

            return $this->redirectToRoute('baza_samolotow_edit', array('id' => $baza_samolotow->getId()));
        }

        return $this->render('baza_samolotow/edit.html.twig', array(
            'baza_samolotow' => $baza_samolotow,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Baza_samolotow entity.
     *
     * @Route("/{id}", name="baza_samolotow_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Baza_samolotow $baza_samolotow)
    {
        $form = $this->createDeleteForm($baza_samolotow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($baza_samolotow);
            $em->flush();
        }

        return $this->redirectToRoute('baza_samolotow_index');
    }

    /**
     * Creates a form to delete a Baza_samolotow entity.
     *
     * @param Baza_samolotow $baza_samolotow The Baza_samolotow entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Baza_samolotow $baza_samolotow)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('baza_samolotow_delete', array('id' => $baza_samolotow->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
