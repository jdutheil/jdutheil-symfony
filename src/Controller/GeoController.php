<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeoController extends Controller
{
    /**
     * @Route("/accordeoniste-melun", name="melun")
     */
    public function melunAction()
    {
        return $this->render('geo/melun.html.twig', array());
    }
}
