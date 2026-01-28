<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'checkout')]
    public function index(): Response
    {
        // DỮ LIỆU GIỎ HÀNG (GIỐNG CartController)
        $cartItems = [
            [
                'id' => 1,
                'name' => 'Táo Mỹ',
                'image' => 'gh1.jpg',
                'price' => 120000,
                'qty' => 2,
                'tag' => 'Trái cây tươi'
            ],
            [
                'id' => 2,
                'name' => 'Nho Úc',
                'image' => 'gh2.jpg',
                'price' => 150000,
                'qty' => 1,
                'tag' => 'Trái cây nhập khẩu'
            ],
            [
                'id' => 3,
                'name' => 'Dâu Tây',
                'image' => 'gh3.jpg',
                'price' => 180000,
                'qty' => 3,
                'tag' => 'Trái cây tươi'
            ],
            [
                'id' => 4,
                'name' => 'Sầu Riêng',
                'image' => 'gh4.jpg',
                'price' => 350000,
                'qty' => 1,
                'tag' => 'Trái cây cao cấp'
            ],
        ];

        return $this->render('checkout/index.html.twig', [
            'cartItems' => $cartItems
        ]);
    }
}
