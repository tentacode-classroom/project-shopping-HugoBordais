<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $productRepository = new ProductRepository();
        $phones = $productRepository->findAll();


        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomeController',
            'phones'          => $phones
        ]);
    }
}
