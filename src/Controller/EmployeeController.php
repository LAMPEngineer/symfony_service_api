<?php
namespace App\Controller;

use App\Entity\Employee;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class EmployeeController extends AbstractController
{

	/**
	 * @Route("/", name="employee_list")
	 * 
	 */
	public function index()
	{
		// get employees object from database using Doctrine ORM
		$employees = $this->getDoctrine()->getRepository(Employee::class)->findAll();


		// pass employees object into Twig template
		return $this->render('employee/index.html.twig', array('employees' => $employees));
	}

	
	/**
	 * @Route("/employees/", name="get_employees", methods={"GET"})	 
	 */
	public function getAll()
	{

	  	// get employees object from database using Doctrine ORM
		$employees = $this->getDoctrine()->getRepository(Employee::class)->findAll();

		$data = [];

		// make data array for response to the API call
	    foreach ($employees as $employee) {
		    	$data[] = [
		        'id' => $employee->getId(),
		        'firstName' => $employee->getEmpFirstname(),
		        'lastName' => $employee->getEmpLastname(),
		        'email' => $employee->getEmail(),
		        'mobile' => $employee->getMobile(),
		        'telephone' => $employee->getTelephone(),
		        'dateofbirth' => $employee->getDateofbirth(),
	    	];

	    }

	    // return response as JSON 
	    return new Response(json_encode($data));

	} 


}