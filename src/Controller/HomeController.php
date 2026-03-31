<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'products' => [
                [
                    'title' => 'Producto 1',
                    'price' => 100,
                    'image' => 'https://via.placeholder.com/150'
                ],
                [
                    'title' => 'Producto 2',
                    'price' => 200,
                    'image' => 'https://via.placeholder.com/150'
                ]
            ]
        ]);
    }
}