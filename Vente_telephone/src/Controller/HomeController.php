<?php

namespace App\Controller;

use App\Entity\Phone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $doctrine = $this->getDoctrine();
        $productRepository = $doctrine->getRepository(Phone::class);
        $phones = $productRepository->findAll();

        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomeController',
            'phones'          => $phones
        ]);
    }
}
