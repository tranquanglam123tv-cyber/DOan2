<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/san-pham/cherry-my', name: 'product_cherry')]
    public function cherry(): Response
    {
        return $this->render('product/cherry.html.twig');
    }
}
