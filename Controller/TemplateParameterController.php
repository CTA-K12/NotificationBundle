<?php

namespace Mesd\NotificationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mesd\NotificationBundle\Entity\TemplateParameter;
use Mesd\NotificationBundle\Form\TemplateParameterType;

/**
 * TemplateParameter controller.
 *
 */
class TemplateParameterController extends Controller
{

    /**
     * Lists all TemplateParameter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MesdNotificationBundle:TemplateParameter')->findAll();

        return $this->render('MesdNotificationBundle:TemplateParameter:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TemplateParameter entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TemplateParameter();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('templateparameter_show', array('id' => $entity->getId())));
        }

        return $this->render('MesdNotificationBundle:TemplateParameter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TemplateParameter entity.
    *
    * @param TemplateParameter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TemplateParameter $entity)
    {
        $form = $this->createForm(new TemplateParameterType(), $entity, array(
            'action' => $this->generateUrl('templateparameter_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TemplateParameter entity.
     *
     */
    public function newAction()
    {
        $entity = new TemplateParameter();
        $form   = $this->createCreateForm($entity);

        return $this->render('MesdNotificationBundle:TemplateParameter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TemplateParameter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:TemplateParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TemplateParameter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:TemplateParameter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TemplateParameter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:TemplateParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TemplateParameter entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MesdNotificationBundle:TemplateParameter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TemplateParameter entity.
    *
    * @param TemplateParameter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TemplateParameter $entity)
    {
        $form = $this->createForm(new TemplateParameterType(), $entity, array(
            'action' => $this->generateUrl('templateparameter_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TemplateParameter entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MesdNotificationBundle:TemplateParameter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TemplateParameter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('templateparameter_edit', array('id' => $id)));
        }

        return $this->render('MesdNotificationBundle:TemplateParameter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TemplateParameter entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MesdNotificationBundle:TemplateParameter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TemplateParameter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('templateparameter'));
    }

    /**
     * Creates a form to delete a TemplateParameter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('templateparameter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
