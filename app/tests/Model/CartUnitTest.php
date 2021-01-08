<?php

namespace App\Tests\Shopping;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Entity\Cart;

class CartUnitTest extends TestCase
{
    public function test_addProduct_mustBeInCart()
    {
        $cart = new Cart();

        $cart->addProduct("prodId1", 2);

        $products = $cart->getProducts();

        $this->assertEquals(2, $products["prodId1"]);
    }

    public function test_emptyCart_addProductWithQtyZero_mustNotBeInCart()
    {
        $cart = new Cart();

        $cart->addProduct("prodId1", 0);
        $products = $cart->getProducts();
        $this->assertArrayNotHasKey("prodId1", $products);
    }

    public function test_NotEmptyCart_addProductWithQtyZero_mustNotChangeQty()
    {
        $cart = new Cart();

        $cart->addProduct("prodId1", 3);
        $cart->addProduct("prodId1", 0);

        $products = $cart->getProducts();
        $this->assertEquals(3, $products["prodId1"]);
    }

    public function test_addProductWithNegativeQty_mustThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $cart = new Cart();

        $cart->addProduct("prodId1", -2);
    }

    public function test_updateQty_MustChangeQty()
    {
        $cart = new Cart();

        $cart->addProduct("prodId1", 3);
        $cart->updateProductQty("prodId1", 4);

        $products = $cart->getProducts();
        $this->assertEquals(4, $products["prodId1"]);
    }
    public function test_updateNotExistingProduct_MustThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $cart = new Cart();

        $cart->updateProductQty("prodId1", 2);
    }


    public function test_updateQtyWithZero_MustRemoveProduct()
    {
        $cart = new Cart();

        $cart->addProduct("prodId1", 3);
        $cart->updateProductQty("prodId1", 0);

        $products = $cart->getProducts();
        $this->assertArrayNotHasKey( "prodId1", $products);
    }

}
