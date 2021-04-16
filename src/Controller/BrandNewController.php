<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandNewController extends AbstractController
{
    /**
     * @Route("/brand/new", name="brand_new")
     */
    public function index(): Response
    {
        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'BG',
            'number' => 7,
        ]);
    }

    /**
     * @Route("/brand/new/test/{number}", name="brand_new/test")
     */
    public function test($number): Response
    {
        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'YOUHOU',
            'number' => $number,
        ]);
    }
}
