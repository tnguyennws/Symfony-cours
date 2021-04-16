<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    /**
     * @Route("/calcul", name="calcul")
     */
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [

        ]);
    }

    /**
     * @Route("/calcul/addition/{number1}/{number2}", name="calcul/addition")
     */
    public function addition($number1, $number2): Response
    {
        if(!is_int($number1) || !is_int($number2)){
            return $this->render('calcul/erreur.html.twig', [
                
            ]);
        }else{
            return $this->render('calcul/addition.html.twig', [
                'number1' => $number1,
                'number2' => $number2,
                'result' => $number1 + $number2,
            ]);
        }
    }

    /**
     * @Route("/calcul/soustraction/{number1}/{number2}", name="calcul/soustraction")
     */
    public function soustraction($number1, $number2): Response
    {
        return $this->render('calcul/soustraction.html.twig', [
            'number1' => $number1,
            'number2' => $number2,
            'result' => $number1 - $number2,
        ]);
    }

    /**
     * @Route("/calcul/multiplication/{number1}/{number2}", name="calcul/multiplication")
     */
    public function multiplication($number1, $number2): Response
    {
        return $this->render('calcul/multiplication.html.twig', [
            'number1' => $number1,
            'number2' => $number2,
            'result' => $number1 * $number2,
        ]);
    }

    /**
     * @Route("/calcul/division/{number1}/{number2}", name="calcul/division")
     */
    public function division($number1, $number2): Response
    {
        return $this->render('calcul/division.html.twig', [
            'number1' => $number1,
            'number2' => $number2,
            'result' => $number1 / $number2,
        ]);
    }

    /**
     * @Route("/calcul/modulo/{number1}/{number2}", name="calcul/modulo")
     */
    public function modulo($number1, $number2): Response
    {
        return $this->render('calcul/modulo.html.twig', [
            'number1' => $number1,
            'number2' => $number2,
            'result' => $number1 % $number2,
        ]);
    }


}
