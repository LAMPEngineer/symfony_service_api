<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ConsumeController extends AbstractController
{

	/**
     * @Route("/consume/api")
     */
    public function callapi()
    {

    	// URL for API call. This URL could also be configured in property file.
    	 $url = "http://localhost:9080/symfonyapps/rest_api_project/public/employees/";
 
 		// curl call
		 $client = curl_init($url);
		 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

		 // execute curl
		 $response = curl_exec($client);
		 
		//JSON decode to the response
		 $result = json_decode($response);

		 // pass JSON to Twig template
		 return $this->render('apicalls/employees.html.twig', array('employees' => $result));
    }


}