<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeoController extends Controller
{
    /*
     * Route("/accordeoniste-melun", name="melun")

    public function melunAction()
    {
        return $this->render('geo/melun.html.twig', array());
    }

    /*
     * Route("/accordeoniste-fontainebleau", name="fontainebleau")

    public function fontainebleauAction()
    {
        return $this->render('geo/fontainebleau.html.twig', array());
    }

    /*
     * Route("/accordeoniste-meaux", name="meaux")

    public function meauxAction()
    {
        return $this->render('geo/meaux.html.twig', array());
    }
    */

    /**
     * @Route("/accordeoniste-seine-et-marne", name="seineetmarne")
     */
    public function seineetmarneAction()
    {
        return $this->render('geo/77.html.twig', array());
    }


}
