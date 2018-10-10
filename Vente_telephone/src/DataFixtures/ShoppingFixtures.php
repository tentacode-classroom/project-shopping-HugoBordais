<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Phone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $apple = new Category();
        $apple->setName( 'Apple' );
        $manager->persist( $apple );

        $samsung = new Category();
        $samsung->setName( 'Samsung' );
        $manager->persist( $samsung );

        $sony = new Category();
        $sony->setName( 'Sony' );
        $manager->persist( $sony );

        $wiko = new Category();
        $wiko->setName( 'Wiko' );
        $manager->persist( $wiko );

        $lg = new Category();
        $lg->setName( 'LG' );
        $manager->persist( $lg );

        $honor = new Category();
        $honor->setName( 'Honor' );
        $manager->persist( $honor );

        $nokia = new Category();
        $nokia->setName( 'Nokia' );
        $manager->persist( $nokia );

        $xiaomi = new Category();
        $xiaomi->setName( 'Xiaomi' );
        $manager->persist( $xiaomi );


//        $phone1 = new Phone();
//        $phone1->setName("Iphone Xs");
//        $phone1->setStatus("Disponible");
//        $phone1->setDescription("Un écran Super Retina en deux tailles, dont le plus grand écran jamais vu sur iPhone. Un Face ID encore plus rapide. La puce la plus intelligente et la plus puissante jamais intégrée à un smartphone. Et un double appareil photo d’avant‑garde. L’iPhone XS, c’est tout ce que vous aimez dans l’iPhone. Poussé à l’extrême.");
//        $phone1->setEcran("5,8" );
//        $phone1->setStockage(64 );
//        $phone1->setPrice(1159);
//        $phone1->setViewCounter(0);
//        $phone1->setCategory( $apple );
//        $manager->persist($phone1);

        $manager->flush();
    }
}
