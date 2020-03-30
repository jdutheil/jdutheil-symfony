<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function index()
	{
		$response = $this->render('home/index.html.twig', array());

		$response->setSharedMaxAge(3600);
		$response->headers->addCacheControlDirective('must-revalidate', true);

		return $response;
	}


}
