<?php

namespace App\DataFixtures;

use App\Entity\Phone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $phone1 = new Phone();
        $phone1->setName("Iphone Xs");
        $phone1->setStatus("Disponible");
        $phone1->setDescription("Un écran Super Retina en deux tailles, dont le plus grand écran jamais vu sur iPhone. Un Face ID encore plus rapide. La puce la plus intelligente et la plus puissante jamais intégrée à un smartphone. Et un double appareil photo d’avant‑garde. L’iPhone XS, c’est tout ce que vous aimez dans l’iPhone. Poussé à l’extrême.");
        $phone1->setSpec('64 Go, 5,8" ');
        $phone1->setPrice(1159);
        $phone1->setViewCounter(0);
        $manager->persist($phone1);

        $phone2 = new Phone();
        $phone2->setName("Samsung Galaxy Note 9");
        $phone2->setStatus("Disponible");
        $phone2->setDescription("Si seulement tout était aussi performant que le nouveau Galaxy Note9. Vous vivez à 100 à l\'heure ? Désormais vous avez un allié capable de vous suivre.");
        $phone2->setSpec('512 Go, 6.4" ');
        $phone2->setPrice(1009);
        $manager->persist($phone2);

        $phone3 = new Phone();
        $phone3->setName("Sony Xperia XZ3");
        $phone3->setStatus("Pré-commande");
        $phone3->setDescription("Regardez, écoutez et ressentez avec intensité. Évadez-vous du quotidien pour plonger dans un nouvel univers de divertissement avec le Xperia XZ3. Faites l\'expérience d\'un écran OLED HDR, de haut-parleurs stéréo et d\'un système de vibration dynamique au bout de vos doigts avec un écran sans bords incroyablement fin.");
        $phone3->setSpec('64 Go, 6.0');
        $phone3->setPrice(799);
        $manager->persist($phone3);

        $manager->flush();
    }
}
