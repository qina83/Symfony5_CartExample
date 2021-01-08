<?php

namespace App\Model;

class Cart
{
    private string $userId;
    private array $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function getUser(): string
    {
        return $this->userId;
    }

    public function setUser($uid)
    {
        $this->userId = $uid;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(string $prodId, int $qty): void
    {
        if ($qty < 0) throw new \InvalidArgumentException("qty must be positive");
        if ($qty == 0) return;
        if (array_key_exists($prodId, $this->products))
            $this->products[$prodId] = $this->products[$prodId] + $qty;
        else
            $this->products[$prodId] = $qty;
    }

    public function removeProduct(string $prodId): void
    {
        if (array_key_exists($prodId, $this->products)) {
            unset($this->products[$prodId]);
        }
    }

    public function updateProductQty(string $prodId, int $qty): void
    {
        if ($qty < 0) throw new \InvalidArgumentException("qty must be positive");
        if ($qty == 0) $this->removeProduct($prodId);
        else
            if (array_key_exists($prodId, $this->products)) {
                $this->products[$prodId] = $qty;
            } else
                throw new \InvalidArgumentException("Product not in cart");
    }


}