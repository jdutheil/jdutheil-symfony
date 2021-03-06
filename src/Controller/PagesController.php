<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{

	/**
	 * @Route("/jeremy-dutheil-accordeoniste", name="bio")
	 */
	public function bioAction()
	{

		return $this->render('pages/bio.html.twig', array());
	}

	/**
	 * @Route("/collaborations-artistiques", name="collaborations")
	 */
	public function worksAction()
	{

		return $this->render('pages/collaborations.html.twig', array());
	}

	/**
	 * @Route("/duos-accordeon-voix", name="duos")
	 */
	public function duosAction()
	{

		return $this->render('pages/duos.html.twig', array());
	}

	/**
	 * @Route("/groupes", name="groupes")
	 */
	public function groupesAction()
	{

		return $this->render('pages/groupes.html.twig', array());
	}



	/**
	 * @Route("/videos", name="videos")
	 */
	 public function videos()
	 {
		 return $this->render('pages/videos.html.twig', array());
	 }

	 /**
	  * @Route("/agenda", name="agenda")
	  */
	 public function agenda()
	 {
		 return $this->render('pages/agenda.html.twig', array());
	 }

	 /**
	  * @Route("/jazz-manouche", name="manouche")
	  */
	  public function manouche()
	  {
		  return $this->render('pages/manouche.html.twig', array());
	  }

	/**
	 * @Route("/accordeoniste-jazz-manouche", name="accordeon_jazz_manouche")
	 */
	public function accordeonJazzManouche()
	{
		return $this->render('pages/accordeon_jazz_manouche.html.twig', array());
	}

	/**
	 * @Route("/musiciens-soiree", name="musiciens_soirees")
	 */
	public function musiciensSoiree()
	{
		return $this->render('pages/musiciens_soirees.html.twig', array());
	}


	/**
	 * @Route("/tarif-groupe-musique-soiree", name="tarifs")
	 */
	public function tarifs()
	{
		return $this->render('pages/tarifs.html.twig', array());
	}

	/**
	 * @Route("/accordeoniste-soiree", name="accordeoniste_soiree")
	 */
	public function accordeonisteSoiree()
	{
		return $this->render('pages/accordeoniste_soiree.html.twig');
	}

	/**
	 * @Route("/mentions-legales", name="mentions_legales")
	 */
	public function mentions()
	{
		return $this->render('pages/mentions.html.twig');
	}

	/**
	 * @Route("/soiree-guinguette", name="guinguette")
	 */
	public function guinguette()
	{
		return $this->render('pages/guinguette.html.twig');
	}

	/**
	 * @Route("/soiree-entreprise", name="entreprise")
	 */
	public function entreprise()
	{
		return $this->render('pages/entreprise.html.twig');
	}

	/**
	 * @Route("/jeremy-dutheil-solal-poux", name="jdsp")
	 */
	public function jdsp()
	{
		return $this->render('pages/jdsp.html.twig');
	}
}
