<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/123", name="contact")
     */
    public function index()
    {
        return $this->render('detail.twig', [
            'controller_name' => 'ProductController',
            'title' => 'Sharp',
            'logo' => '#',
            'mark_1'=> 'Apple',
            'mark_2' => 'Samsung',
        ]);
    }
}
