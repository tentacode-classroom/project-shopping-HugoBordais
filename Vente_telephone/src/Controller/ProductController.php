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
    public function index($productId)
    {
        $doctrine = $this->getDoctrine();
        $productRepository = $doctrine->getRepository(Phone::class);
        $phone = $productRepository->find($productId);

        $phone->incrementViewCounter();
//        $viewCounter = $phone->getViewCounter();
//        $viewCounter = $viewCounter + 1;
//        $phone->setViewCOunter($viewCounter);
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($phone);
        $manager->flush();

        return $this->render('detail.html.twig', [
            'controller_name'   =>  'ProductController',
            'phone'             =>  $phone
        ]);
    }
}
