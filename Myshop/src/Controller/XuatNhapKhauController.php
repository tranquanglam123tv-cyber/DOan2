<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class XuatNhapKhauController extends AbstractController
{
    #[Route('/xuat-nhap-khau', name: 'app_xuat_nhap_khau')]
    public function index(): Response
    {
        // Danh sách sản phẩm xuất nhập khẩu
        $products = [
            ['name' => 'Táo Mỹ', 'price' => '120.000đ', 'image' => 'sp1.jpg'],
            ['name' => 'Nho Úc', 'price' => '150.000đ', 'image' => 'sp2.jpg'],
            ['name' => 'Sầu Riêng Musangking', 'price' => '90.000đ', 'image' => 'sp3.jpg'],
            ['name' => 'Dâu Tây Đà Lạt', 'price' => '110.000đ', 'image' => 'sp4.jpg'],
            ['name' => 'Me Thái', 'price' => '80.000đ', 'image' => 'sp5.jpg'],
            ['name' => 'Mãng Cầu', 'price' => '95.000đ', 'image' => 'sp6.jpg']
        ];

        // Quy trình xuất nhập khẩu
        $processSteps = [
            ['step' => 1, 'title' => 'Tiếp nhận yêu cầu khách hàng'],
            ['step' => 2, 'title' => 'Kiểm tra sản phẩm & chuẩn bị hồ sơ'],
            ['step' => 3, 'title' => 'Vận chuyển & thông quan nhanh chóng'],
            ['step' => 4, 'title' => 'Giao hàng tận nơi & hỗ trợ khách hàng'],
        ];

        return $this->render('xuat_nhap_khau/index.html.twig', [
            'products' => $products,
            'processSteps' => $processSteps,
        ]);
    }
}
