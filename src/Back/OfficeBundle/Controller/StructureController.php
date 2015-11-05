<?php

namespace Back\OfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Back\OfficeBundle\Entity\Structure;
use Back\OfficeBundle\Form\StructureType;

/**
 * Structure controller.
 *
 */
class StructureController extends Controller
{

    /**
     * Lists all Structure entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficeBundle:Structure')->findAll();

        return $this->render('BackOfficeBundle:Structure:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Structure entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Structure();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('structure'));
        }

        return $this->render('BackOfficeBundle:Structure:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Structure entity.
     *
     * @param Structure $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Structure $entity)
    {
        $form = $this->createForm(new StructureType(), $entity, array(
            'action' => $this->generateUrl('structure_create'),
            'method' => 'POST',
        ));

       // $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Structure entity.
     *
     */
    public function newAction()
    {
        $entity = new Structure();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackOfficeBundle:Structure:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Structure entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Structure:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Structure entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Structure:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Structure entity.
    *
    * @param Structure $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Structure $entity)
    {
        $form = $this->createForm(new StructureType(), $entity, array(
            'action' => $this->generateUrl('structure_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

     ///   $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Structure entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('structure'));
        }

        return $this->render('BackOfficeBundle:Structure:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Structure entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
              $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficeBundle:Structure')->find($id);


            $em->remove($entity);
            $em->flush();


        return $this->redirect($this->generateUrl('structure'));
    }

    /**
     * Creates a form to delete a Structure entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('structure_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
