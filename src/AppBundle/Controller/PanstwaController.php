<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Panstwa;
use AppBundle\Form\PanstwaType;

/**
 * Panstwa controller.
 *
 * @Route("/panstwa")
 */
class PanstwaController extends Controller
{
    /**
     * Lists all Panstwa entities.
     *
     * @Route("/", name="panstwa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $panstwas = $em->getRepository('AppBundle:Panstwa')->findAll();

        return $this->render('panstwa/index.html.twig', array(
            'panstwas' => $panstwas,
        ));
    }

    /**
     * Creates a new Panstwa entity.
     *
     * @Route("/new", name="panstwa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $panstwa = new Panstwa();
        $form = $this->createForm('AppBundle\Form\PanstwaType', $panstwa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panstwa);
            $em->flush();

            return $this->redirectToRoute('panstwa_show', array('id' => $panstwa->getId()));
        }

        return $this->render('panstwa/new.html.twig', array(
            'panstwa' => $panstwa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Panstwa entity.
     *
     * @Route("/{id}", name="panstwa_show")
     * @Method("GET")
     */
    public function showAction(Panstwa $panstwa)
    {
        $deleteForm = $this->createDeleteForm($panstwa);

        return $this->render('panstwa/show.html.twig', array(
            'panstwa' => $panstwa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Panstwa entity.
     *
     * @Route("/{id}/edit", name="panstwa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Panstwa $panstwa)
    {
        $deleteForm = $this->createDeleteForm($panstwa);
        $editForm = $this->createForm('AppBundle\Form\PanstwaType', $panstwa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panstwa);
            $em->flush();

            return $this->redirectToRoute('panstwa_edit', array('id' => $panstwa->getId()));
        }

        return $this->render('panstwa/edit.html.twig', array(
            'panstwa' => $panstwa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Panstwa entity.
     *
     * @Route("/{id}", name="panstwa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Panstwa $panstwa)
    {
        $form = $this->createDeleteForm($panstwa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($panstwa);
            $em->flush();
        }

        return $this->redirectToRoute('panstwa_index');
    }

    /**
     * Creates a form to delete a Panstwa entity.
     *
     * @param Panstwa $panstwa The Panstwa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Panstwa $panstwa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('panstwa_delete', array('id' => $panstwa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
