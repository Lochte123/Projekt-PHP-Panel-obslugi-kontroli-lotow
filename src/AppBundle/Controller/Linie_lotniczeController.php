<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Linie_lotnicze;
use AppBundle\Form\Linie_lotniczeType;

/**
 * Linie_lotnicze controller.
 *
 * @Route("/linie_lotnicze")
 */
class Linie_lotniczeController extends Controller
{
    /**
     * Lists all Linie_lotnicze entities.
     *
     * @Route("/", name="linie_lotnicze_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $linie_lotniczes = $em->getRepository('AppBundle:Linie_lotnicze')->findAll();

        return $this->render('linie_lotnicze/index.html.twig', array(
            'linie_lotniczes' => $linie_lotniczes,
        ));
    }

    /**
     * Creates a new Linie_lotnicze entity.
     *
     * @Route("/new", name="linie_lotnicze_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $linie_lotnicze = new Linie_lotnicze();
        $form = $this->createForm('AppBundle\Form\Linie_lotniczeType', $linie_lotnicze);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($linie_lotnicze);
            $em->flush();

            return $this->redirectToRoute('linie_lotnicze_show', array('id' => $linie_lotnicze->getId()));
        }

        return $this->render('linie_lotnicze/new.html.twig', array(
            'linie_lotnicze' => $linie_lotnicze,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Linie_lotnicze entity.
     *
     * @Route("/{id}", name="linie_lotnicze_show")
     * @Method("GET")
     */
    public function showAction(Linie_lotnicze $linie_lotnicze)
    {
        $deleteForm = $this->createDeleteForm($linie_lotnicze);

        return $this->render('linie_lotnicze/show.html.twig', array(
            'linie_lotnicze' => $linie_lotnicze,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Linie_lotnicze entity.
     *
     * @Route("/{id}/edit", name="linie_lotnicze_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Linie_lotnicze $linie_lotnicze)
    {
        $deleteForm = $this->createDeleteForm($linie_lotnicze);
        $editForm = $this->createForm('AppBundle\Form\Linie_lotniczeType', $linie_lotnicze);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($linie_lotnicze);
            $em->flush();

            return $this->redirectToRoute('linie_lotnicze_edit', array('id' => $linie_lotnicze->getId()));
        }

        return $this->render('linie_lotnicze/edit.html.twig', array(
            'linie_lotnicze' => $linie_lotnicze,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Linie_lotnicze entity.
     *
     * @Route("/{id}", name="linie_lotnicze_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Linie_lotnicze $linie_lotnicze)
    {
        $form = $this->createDeleteForm($linie_lotnicze);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($linie_lotnicze);
            $em->flush();
        }

        return $this->redirectToRoute('linie_lotnicze_index');
    }

    /**
     * Creates a form to delete a Linie_lotnicze entity.
     *
     * @param Linie_lotnicze $linie_lotnicze The Linie_lotnicze entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Linie_lotnicze $linie_lotnicze)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('linie_lotnicze_delete', array('id' => $linie_lotnicze->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
