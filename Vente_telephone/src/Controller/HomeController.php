<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('homepage.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Sharp',
            'logo' => '#',
            'mark_1'=> 'Apple',
            'mark_2' => 'Samsung',
        ]);
    }
}
