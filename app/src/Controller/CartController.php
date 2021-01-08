<?php


namespace App\Controller;

use App\Mapper\CartMapper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\CartService;

class CartController extends AbstractController
{
    private CartService $cartService;
    private CartMapper $cartMapper;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        $this->cartMapper = new CartMapper();
    }

    /**
     * @Route("/cart/{uid}", methods={"GET"})
     * @param string $uid
     * @return Response
     */
    public function getCart(string $uid): Response
    {
        $cart = $this->cartService->getCartForUser($uid);
        return new Response($this->cartMapper->CartToDto($cart));
    }

    /**
     * @Route("/cart/{uid}", methods={"POST"})
     */
    public function addProduct(string $uid): Response
    {
        $request = Request::createFromGlobals();
        $body = json_decode($request->getContent());
        $cart = $this->cartService->addProductToCart($uid, $body->prodId);
        return new Response($this->cartMapper->CartToDto($cart));
    }
}