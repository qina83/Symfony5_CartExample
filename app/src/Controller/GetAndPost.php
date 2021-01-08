<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GetAndPost
{



    /**
     * @Route("/giveMeAll", methods={"GET"})
     */
    public function getAll(): Response
    {

    }

    /**
     * @Route("/giveMeOne/{id}", methods={"GET"})
     */
    public function getOne(int $id): Response
    {

    }

    /**
     * @Route("/takeOne/{id}", methods={"POST"})
     */
    public function takeOne(int $id): Response
    {

    }

    /**
     * @Route("/updateOne/{id}", methods={"POST"})
     */
    public function updateOne(int $id): Response
    {

    }

    /**
     * @Route("/takeAll", methods={"POST"})
     */
    public function takeAll(): Response
    {
        $request = Request::createFromGlobals();
        $response = new Response();
        $response->setContent($request->getContent());
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');
        $response->send();
    }
}
