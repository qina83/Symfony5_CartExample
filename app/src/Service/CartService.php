<?php

namespace App\Service;

use App\Model\Cart;

class CartService
{

    public function getCartForUser($userId): Cart
    {
        //load cart from somewhere
        $cart = new Cart();
        $cart->setUser($userId);
        return $cart;
    }

    public function addProductToCart($userId, $productId):Cart
    {
        $cart = $this->getCartForUser($userId);
        $cart->addProduct($productId, 1);
        return $cart;
    }

    public function updateProductQty($userId, $productId, $qty):Cart
    {
        $cart = $this->getCartForUser($userId);
        $cart->updateProductQty($productId, $qty);
        return $cart;
    }

    public function removeProduct($userId, $productId):Cart
    {
        $cart = $this->getCartForUser($userId);
        $cart->removeProduct($productId);
        return $cart;
    }

}