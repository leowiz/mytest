<?php

namespace Nlc\InformationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nlc\InformationBundle\Entity\Employee;
use Nlc\InformationBundle\Form\EmployeeType;

/**
 * Employee controller.
 *
 * @Route("/nlc_employee")
 */
class EmployeeController extends Controller
{
    /**
     * Lists all Employee entities.
     *
     * @Route("/", name="nlc_employee_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employees = $em->getRepository('NlcInformationBundle:Employee')->findAll();

        return $this->render('employee/index.html.twig', array(
            'employees' => $employees,
        ));
    }

    /**
     * Creates a new Employee entity.
     *
     * @Route("/new", name="nlc_employee_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $employee = new Employee();
        $form = $this->createForm('Nlc\InformationBundle\Form\EmployeeType', $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('nlc_employee_show', array('id' => $employee->getId()));
        }

        return $this->render('employee/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employee entity.
     *
     * @Route("/{id}", name="nlc_employee_show")
     * @Method("GET")
     */
    public function showAction(Employee $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);

        return $this->render('employee/show.html.twig', array(
            'employee' => $employee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employee entity.
     *
     * @Route("/{id}/edit", name="nlc_employee_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Employee $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);
        $editForm = $this->createForm('Nlc\InformationBundle\Form\EmployeeType', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('nlc_employee_edit', array('id' => $employee->getId()));
        }

        return $this->render('employee/edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Employee entity.
     *
     * @Route("/{id}", name="nlc_employee_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Employee $employee)
    {
        $form = $this->createDeleteForm($employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employee);
            $em->flush();
        }

        return $this->redirectToRoute('nlc_employee_index');
    }

    /**
     * Creates a form to delete a Employee entity.
     *
     * @param Employee $employee The Employee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nlc_employee_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
