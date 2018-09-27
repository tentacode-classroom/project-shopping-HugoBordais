<?php

namespace App\Entity;


class Phone
{

    private $id;
    private $name;
    private $status;

    public function setId(int $id){
        $this->id =$id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName(string $name){
        $this->name =$name;
    }

    public function getname(){
        return $this->name;
    }

    public function setStatus(string $staut){
        $this->status =$staut;
    }

    public function getstatus(){
        return $this->status;
    }



}