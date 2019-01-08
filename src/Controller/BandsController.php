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

	/**
	 * @Route("/ruelamome", name="ruelamome")
	 */
	 public function ruelamomeAction()
	 {
		 return $this->render('bands/ruelamome.html.twig', array());
	 }

	 /**
	  *	@Route("/majid-yano-tet", name="madjid")
	  */
	  public function madjidAction()
	  {
		  return $this->render('bands/madjid.html.twig', array());
	  }

	  /**
	   * @Route("/les-fils-de-flute", name="fdf")
	   */
	public function fdfAction()
   	{
		 return $this->render('bands/fdf.html.twig', array());
   	}

	/**
	 * @Route("/la-marquise", name="marquise")
	 */
 	public function marquiseAction()
	{
		return $this->render('bands/marquise.html.twig', array());
	}
}
