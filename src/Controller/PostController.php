<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MesEntity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        $array =
        [
            "Raphael",
            "Robin",
            "Antoine",
            "Nicolas",
            "Tom"
        ];

        $mesPosts =
        [
            new Post(1, 1 , "Hello PHP", "On fait du Symfony"),
            new Post(2, 1 , "Hello C#", "On fait du C#"),
            new Post(3, 1 , "Hello JS", "On fait du JS"),
            new Post(4, 1 , "Hello", "On fait du CodeCombat"),
        ];

        return $this->render('post/index.html.twig',
        [
            'controller_name' => 'PostController',
            'personnes' => $array,
            'mesPosts' => $mesPosts
        ]);
    }

    /**
     * @Route("/post/{id}", name="post/id")
     */
    public function post($id): Response
    {
        $mesPosts =
        [
            new Post(1, 1 , "Hello PHP", "On fait du Symfony"),
            new Post(2, 1 , "Hello C#", "On fait du C#"),
            new Post(3, 1 , "Hello JS", "On fait du JS"),
            new Post(4, 1 , "Hello", "On fait du CodeCombat"),
        ];

        return $this->render('post/post.html.twig', [
            'controller_name' => 'PostController',
            'mesPosts' => $mesPosts,
            'id' => $id - 1
        ]);
    }
}