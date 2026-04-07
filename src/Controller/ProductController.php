<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_list')]
    public function index(ProductRepository $repo): Response
    {
        $conn = $this->getDoctrine()->getConnection();
        $stmt = $conn->executeQuery('Call sp_get_products()');
        $products = $stmt->fetchAllAssociative();

        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);
    }
}