<?php

namespace Back\OfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Back\OfficeBundle\Entity\Pays;
use Back\OfficeBundle\Form\PaysType;

/**
 * Pays controller.
 *
 */
class PaysController extends Controller
{

    /**
     * Lists all Pays entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficeBundle:Pays')->findAll();

        return $this->render('BackOfficeBundle:Pays:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pays entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pays();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pays'));
        }

        return $this->render('BackOfficeBundle:Pays:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Pays entity.
     *
     * @param Pays $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pays $entity)
    {
        $form = $this->createForm(new PaysType(), $entity, array(
            'action' => $this->generateUrl('pays_create'),
            'method' => 'POST',
        ));

     //   $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pays entity.
     *
     */
    public function newAction()
    {
        $entity = new Pays();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackOfficeBundle:Pays:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pays entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Pays')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pays entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Pays:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pays entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Pays')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pays entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Pays:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pays entity.
    *
    * @param Pays $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pays $entity)
    {
        $form = $this->createForm(new PaysType(), $entity, array(
            'action' => $this->generateUrl('pays_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

     //   $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pays entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Pays')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pays entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pays'));
        }

        return $this->render('BackOfficeBundle:Pays:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pays entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficeBundle:Pays')->find($id);


            $em->remove($entity);
            $em->flush();


        return $this->redirect($this->generateUrl('pays'));
    }

    /**
     * Creates a form to delete a Pays entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pays_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
