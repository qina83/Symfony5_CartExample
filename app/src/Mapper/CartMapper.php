<?php


namespace App\Mapper;

use App\Entity\Cart;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CartMapper
{
    private Serializer $serializer;

    public function __construct()
    {
        $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
    }

    public function CartToDto(Cart $cart): string
    {
        return $this->serializer->serialize($cart, 'json');
    }

}