<?php
/**
 * Created by IntelliJ IDEA.
 * User: borda
 * Date: 26/09/2018
 * Time: 16:58
 */

namespace App\Repository;

use App\Entity\Phone;
use function Symfony\Component\Debug\Tests\testHeader;

class ProductRepository
{
    private $phones;

    public function __construct()
    {
        $phone1 = new phone();
        $phone1->setId(11);
        $phone1->setName('Apple');
        $phone1->setStatus('Neuf');
        // etc.

        $phone2 = new phone();
        $phone2->setId(12);
        $phone2->setName('Samsung');
        $phone2->setStatus('Occassion');
        // etc.

        $phone3 = new phone();
        $phone3->setId(13);
        $phone3->setName('Sony');
        $phone3->setStatus('Reconditionné');
        // etc.

        $this->phones = [
            $phone1,
            $phone2,
            $phone3,
        ];
    }

    public function findAll(): array
    {
        return $this->phones;
    }

    public function findOneById(int $id): Phone
    {
        foreach ($this->phones as $phone) {
            if ($phone->getId() === $id) {
                return $phone;
            }
        }
    }
}