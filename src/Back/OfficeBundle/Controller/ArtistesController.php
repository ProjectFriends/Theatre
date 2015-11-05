<?php

namespace Back\OfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Back\OfficeBundle\Entity\Artistes;
use Back\OfficeBundle\Form\ArtistesType;

/**
 * Artistes controller.
 *
 */
class ArtistesController extends Controller
{

    /**
     * Lists all Artistes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficeBundle:Artistes')->findAll();

        return $this->render('BackOfficeBundle:Artistes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Artistes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Artistes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('artistes'));
            return $this->redirect($this->generateUrl('artistes_show', array('id' => $entity->getId())));
        }

        return $this->render('BackOfficeBundle:Artistes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Artistes entity.
     *
     * @param Artistes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Artistes $entity)
    {
        $form = $this->createForm(new ArtistesType(), $entity, array(
            'action' => $this->generateUrl('artistes_create'),
            'method' => 'POST',
        ));

   //     $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Artistes entity.
     *
     */
    public function newAction()
    {
        $entity = new Artistes();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackOfficeBundle:Artistes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Artistes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Artistes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artistes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Artistes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Artistes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Artistes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artistes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Artistes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Artistes entity.
    *
    * @param Artistes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Artistes $entity)
    {
        $form = $this->createForm(new ArtistesType(), $entity, array(
            'action' => $this->generateUrl('artistes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

     //   $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Artistes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Artistes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artistes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('artistes'));
            return $this->redirect($this->generateUrl('artistes_edit', array('id' => $id)));
        }

        return $this->render('BackOfficeBundle:Artistes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Artistes entity.
     *
     */
    public function deleteAction( $id)
    {
             $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficeBundle:Artistes')->find($id);


            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('artistes'));
    }

    /**
     * Creates a form to delete a Artistes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('artistes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
