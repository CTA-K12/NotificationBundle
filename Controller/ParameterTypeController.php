<?php

namespace Mesd\NotificationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mesd\NotificationBundle\Entity\ParameterType;
use Mesd\NotificationBundle\Form\ParameterTypeType;

/**
 * ParameterType controller.
 *
 */
class ParameterTypeController extends Controller
{

    /**
     * Lists all ParameterType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MesdNotificationBundle:ParameterType')->findAll();

        return $this->render('MesdNotificationBundle:ParameterType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ParameterType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ParameterType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parametertype_show', array('id' => $entity->getId())));
        }

        return $this->render('MesdNotificationBundle:ParameterType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a ParameterType entity.
    *
    * @param ParameterType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ParameterType $entity)
    {
        $form = $this->createForm(new ParameterTypeType(), $entity, array(
            'action' => $this->generateUrl('parametertype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ParameterType entity.
     *
     */
    public function newAction()
    {
        $entity = new ParameterType();
        $form   = $this->createCreateForm($entity);

        return $this->render('MesdNotificationBundle:ParameterType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ParameterType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:ParameterType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParameterType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:ParameterType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ParameterType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:ParameterType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParameterType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:ParameterType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ParameterType entity.
    *
    * @param ParameterType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ParameterType $entity)
    {
        $form = $this->createForm(new ParameterTypeType(), $entity, array(
            'action' => $this->generateUrl('parametertype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ParameterType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:ParameterType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParameterType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('parametertype_edit', array('id' => $id)));
        }

        return $this->render('MesdNotificationBundle:ParameterType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ParameterType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MesdNotificationBundle:ParameterType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ParameterType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('parametertype'));
    }

    /**
     * Creates a form to delete a ParameterType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parametertype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
