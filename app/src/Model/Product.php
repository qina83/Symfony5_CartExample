<?php

namespace App\Model;

class Product
{
    private $id;
    private $description = "";

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($desc)
    {
        $this->description = $desc;
    }
}