<?php
/**
 * Created by IntelliJ IDEA.
 * User: borda
 * Date: 21/09/2018
 * Time: 10:42
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ChatonController extends AbstractController
{
    /**
     * @Route("/chaton")
     */

    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('chaton.html.twig', [
            'number' => $number,
        ]);
    }
}