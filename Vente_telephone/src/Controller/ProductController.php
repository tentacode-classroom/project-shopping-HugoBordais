<?php

namespace App\Controller;

use App\Entity\Phone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index( $productId = null )
    {
        $doctrine = $this->getDoctrine();
        $productRepository = $doctrine->getRepository(Phone::class);
        $phone = $productRepository->findOneById( (int) $productId);

        return $this->render('detail.html.twig', [
            'controller_name'   =>  'ProductController',
            'phone'             =>  $phone
        ]);
    }
}
