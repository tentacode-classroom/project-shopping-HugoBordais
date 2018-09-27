<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index( $productId = null )
    {
        $productRepository = new ProductRepository();
        $phone = $productRepository->findOneById( (int) $productId);

        return $this->render('detail.html.twig', [
            'controller_name'   =>  'ProductController',
            'phone'             =>  $phone
        ]);
    }
}
