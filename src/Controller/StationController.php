<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StationController extends AbstractController
{
    /**
     * @Route("/dodaj-przystanek", name="addStation")
     */
    public function addStation(): Response
    {
        return $this->render('station/addStation.html.twig');
    }
}
