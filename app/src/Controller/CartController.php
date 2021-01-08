<?php


namespace App\Controller;

use App\Mapper\CartMapper;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\CartService;


class CartController extends AbstractController
{
    private CartService $cartService;
    private CartMapper $cartMapper;
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger, CartService $cartService)
    {
        $this->cartService = $cartService;
        $this->logger =$logger;
        $this->cartMapper = new CartMapper();
    }

    /**
     * @Route("/cart/{uid}", methods={"GET"})
     * @param string $uid
     * @return Response
     */
    public function getCart(string $uid): Response
    {
        $this->logger->info("getCart");
        $cart = $this->cartService->getCartForUserOrCreateIt($uid);
        return new Response($this->cartMapper->CartToDto($cart));
    }

    /**
     * @Route("/cart/{uid}/product", methods={"POST"})
     * @param string $uid
     * @return Response
     */
    public function addProduct(string $uid): Response
    {
        $request = Request::createFromGlobals();
        $body = json_decode($request->getContent());
        $cart = $this->cartService->addProductToCart($uid, $body->prodId);
        return new Response($this->cartMapper->CartToDto($cart));
    }
}