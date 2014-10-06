<?php

namespace Acme\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\Bundle\TestBundle\Entity\Cond;
use Acme\Bundle\TestBundle\Form\CondType;

/**
 * Cond controller.
 *
 */
class CondController extends Controller
{

    /**
     * Lists all Cond entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeTestBundle:Cond')->findAll();

        return $this->render('AcmeTestBundle:Cond:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Cond entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Cond();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cond', array('id' => $entity->getId())));
        }

        return $this->render('AcmeTestBundle:Cond:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cond entity.
     *
     * @param Cond $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cond $entity)
    {
        $form = $this->createForm(new CondType(), $entity, array(
            'action' => $this->generateUrl('cond_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cond entity.
     *
     */
    public function newAction()
    {
        $entity = new Cond();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeTestBundle:Cond:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cond entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeTestBundle:Cond')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cond entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeTestBundle:Cond:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cond entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeTestBundle:Cond')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cond entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeTestBundle:Cond:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cond entity.
    *
    * @param Cond $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cond $entity)
    {
        $form = $this->createForm(new CondType(), $entity, array(
            'action' => $this->generateUrl('cond_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cond entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeTestBundle:Cond')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cond entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cond', array('id' => $id)));
        }

        return $this->render('AcmeTestBundle:Cond:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cond entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeTestBundle:Cond')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cond entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cond'));
    }

    /**
     * Creates a form to delete a Cond entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cond_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
