<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BandsController extends Controller
{

	/**
	 * @Route("/mime", name="mime")
	 */
	public function mimeAction()
	{

		return $this->render('bands/mime.html.twig', array());
	}

	/**
	 * @Route("/marie-petrolette", name="marie")
	 */
	public function marieAction()
	{

		return $this->render('bands/marie.html.twig', array());
	}

	/**
	 * @Route("/elena-josse", name="elena")
	 */
	public function elenaAction()
	{

		return $this->render('bands/elena.html.twig', array());
	}
}