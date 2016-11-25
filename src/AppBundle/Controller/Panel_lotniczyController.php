<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Panel_lotniczy;
use AppBundle\Form\Panel_lotniczyType;

/**
 * Panel_lotniczy controller.
 *
 * @Route("/panel_lotniczy")
 */
class Panel_lotniczyController extends Controller
{
    /**
     * Lists all Panel_lotniczy entities.
     *
     * @Route("/", name="panel_lotniczy_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $panel_lotniczies = $em->getRepository('AppBundle:Panel_lotniczy')->findAll();

        return $this->render('panel_lotniczy/index.html.twig', array(
            'panel_lotniczies' => $panel_lotniczies,
        ));
    }

    /**
     * Creates a new Panel_lotniczy entity.
     *
     * @Route("/new", name="panel_lotniczy_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $panel_lotniczy = new Panel_lotniczy();
        $form = $this->createForm('AppBundle\Form\Panel_lotniczyType', $panel_lotniczy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panel_lotniczy);
            $em->flush();

            return $this->redirectToRoute('panel_lotniczy_show', array('id' => $panel_lotniczy->getId()));
        }

        return $this->render('panel_lotniczy/new.html.twig', array(
            'panel_lotniczy' => $panel_lotniczy,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Panel_lotniczy entity.
     *
     * @Route("/{id}", name="panel_lotniczy_show")
     * @Method("GET")
     */
    public function showAction(Panel_lotniczy $panel_lotniczy)
    {
        $deleteForm = $this->createDeleteForm($panel_lotniczy);

        return $this->render('panel_lotniczy/show.html.twig', array(
            'panel_lotniczy' => $panel_lotniczy,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Panel_lotniczy entity.
     *
     * @Route("/{id}/edit", name="panel_lotniczy_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Panel_lotniczy $panel_lotniczy)
    {
        $deleteForm = $this->createDeleteForm($panel_lotniczy);
        $editForm = $this->createForm('AppBundle\Form\Panel_lotniczyType', $panel_lotniczy);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panel_lotniczy);
            $em->flush();

            return $this->redirectToRoute('panel_lotniczy_edit', array('id' => $panel_lotniczy->getId()));
        }

        return $this->render('panel_lotniczy/edit.html.twig', array(
            'panel_lotniczy' => $panel_lotniczy,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Panel_lotniczy entity.
     *
     * @Route("/{id}", name="panel_lotniczy_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Panel_lotniczy $panel_lotniczy)
    {
        $form = $this->createDeleteForm($panel_lotniczy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($panel_lotniczy);
            $em->flush();
        }

        return $this->redirectToRoute('panel_lotniczy_index');
    }

    /**
     * Creates a form to delete a Panel_lotniczy entity.
     *
     * @param Panel_lotniczy $panel_lotniczy The Panel_lotniczy entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Panel_lotniczy $panel_lotniczy)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('panel_lotniczy_delete', array('id' => $panel_lotniczy->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
