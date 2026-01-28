<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/gio-hang', name: 'app_cart')]
    public function index(): Response
    {
        $cartItems = [
            ['name'=>'Táo Mỹ','image'=>'gh1.jpg','price'=>120000,'qty'=>2,'tag'=>'Trái cây tươi'],
            ['name'=>'Nho Úc','image'=>'gh2.jpg','price'=>150000,'qty'=>1,'tag'=>'Trái cây nhập khẩu'],
            ['name'=>'Dâu Tây','image'=>'gh3.jpg','price'=>180000,'qty'=>3,'tag'=>'Trái cây tươi'],
            ['name'=>'Sầu Riêng','image'=>'gh4.jpg','price'=>350000,'qty'=>1,'tag'=>'Trái cây cao cấp'],
        ];

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems
        ]);
    }
}
