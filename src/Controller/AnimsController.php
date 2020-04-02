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
	 *	@Route("/accordeoniste-mariages", name="animations_mariages")
	 */
	 public function mariagesAction()
	 {
		 return $this->render('anims/accordeoniste-mariages.html.twig', array());
	 }

	 /**
	  * @Route("/groupe-musique-mariage", name="groupe_musique_mariage")
	  */
     public function groupeMusiqueMariageAction()
	 {
		 return $this->render('anims/groupe-musique-mariage.html.twig', array());
	 }

}
