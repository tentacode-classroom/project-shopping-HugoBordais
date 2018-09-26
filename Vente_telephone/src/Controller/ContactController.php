<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('contact.twig', [
            'controller_name' => 'ContactController',
            'title' => 'Sharp',
            'logo' => '#',
            'mark_1'=> 'Apple',
            'mark_2' => 'Samsung',
        ]);
    }
}
