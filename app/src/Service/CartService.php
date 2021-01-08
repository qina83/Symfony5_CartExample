<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cart;

class CartService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $em) {
        $this->entityManager = $em;
    }


    public function getCartForUserOrCreateIt($userId): Cart
    {
      if (! $this->entityManager) return new Cart();
        $repo =  $this->entityManager->getRepository(Cart::class);
        $cart = $repo->findOneBy(['userId' => $userId]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setUser($userId);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }
        return $cart;
    }

    public function addProductToCart($userId, $productId):Cart
    {
        $cart = $this->getCartForUserOrCreateIt($userId);
        $cart->addProduct($productId, 1);
        return $cart;
    }

    public function updateProductQty($userId, $productId, $qty):Cart
    {
        $cart = $this->getCartForUserOrCreateIt($userId);
        $cart->updateProductQty($productId, $qty);
        return $cart;
    }

    public function removeProduct($userId, $productId):Cart
    {
        $cart = $this->getCartForUserOrCreateIt($userId);
        $cart->removeProduct($productId);
        return $cart;
    }

}