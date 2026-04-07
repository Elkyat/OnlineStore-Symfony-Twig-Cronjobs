<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use Doctrine\DBAL\Connection;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_list')]
    public function index(Connection $conn): Response
    {
        $stmt = $conn->executeQuery('CALL sp_get_products()');
        $products = $stmt->fetchAllAssociative();

        return $this->render('home/index.html.twig', ['products' => $products]);
    }
}