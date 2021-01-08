<?php

namespace App\Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\CartService;

class CartServiceUnitTest extends TestCase
{
    public function userIdDataProvider(): array
    {
        return [
            ['uid1'],
            ['uid2'],
        ];
    }

    /**
     * @dataProvider userIdDataProvider
     * @param string $uid
     */
    public function test_getCartForUser_MustHaveSameUserId(string $uid)
    {
        $sut = new CartService();
        $cart = $sut->getCartForUser($uid);

        $this->assertEquals($uid, $cart->getUser());
    }

    public function test_addProduct_qtyMustBeOne()
    {
        $sut = new CartService();
        $cart = $sut->addProductToCart("uid1", "prod1");

        $this->assertEquals(1, $cart->getProducts()["prod1"]);
    }
}
