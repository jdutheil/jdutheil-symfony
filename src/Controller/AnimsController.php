<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnimsController extends Controller
{

	/**
	 * @Route("/animations", name="animations")
	 */
	public function indexAction()
	{

		return $this->render('anims/index.html.twig', array());
	}

	/**
	 * @Route("/animations-seniors-seine-et-marne", name="animations_seniors")
	 */
	public function seniorsAction()
	{

		return $this->render('anims/seniors.html.twig', array());
	}

}