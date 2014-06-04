<?php

namespace Mesd\NotificationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mesd\NotificationBundle\Entity\NotificationParameter;
use Mesd\NotificationBundle\Form\NotificationParameterType;

/**
 * NotificationParameter controller.
 *
 */
class NotificationParameterController extends Controller
{

    /**
     * Lists all NotificationParameter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MesdNotificationBundle:NotificationParameter')->findAll();

        return $this->render('MesdNotificationBundle:NotificationParameter:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new NotificationParameter entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new NotificationParameter();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notificationparameter_show', array('id' => $entity->getId())));
        }

        return $this->render('MesdNotificationBundle:NotificationParameter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a NotificationParameter entity.
    *
    * @param NotificationParameter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(NotificationParameter $entity)
    {
        $form = $this->createForm(new NotificationParameterType(), $entity, array(
            'action' => $this->generateUrl('notificationparameter_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new NotificationParameter entity.
     *
     */
    public function newAction()
    {
        $entity = new NotificationParameter();
        $form   = $this->createCreateForm($entity);

        return $this->render('MesdNotificationBundle:NotificationParameter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NotificationParameter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:NotificationParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotificationParameter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:NotificationParameter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing NotificationParameter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:NotificationParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotificationParameter entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:NotificationParameter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a NotificationParameter entity.
    *
    * @param NotificationParameter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(NotificationParameter $entity)
    {
        $form = $this->createForm(new NotificationParameterType(), $entity, array(
            'action' => $this->generateUrl('notificationparameter_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing NotificationParameter entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:NotificationParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotificationParameter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('notificationparameter_edit', array('id' => $id)));
        }

        return $this->render('MesdNotificationBundle:NotificationParameter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a NotificationParameter entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MesdNotificationBundle:NotificationParameter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NotificationParameter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('notificationparameter'));
    }

    /**
     * Creates a form to delete a NotificationParameter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notificationparameter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
