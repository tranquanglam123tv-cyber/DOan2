<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LienHeController extends AbstractController
{
    #[Route('/lien-he', name: 'app_lien_he')]
    public function index(): Response
    {
        // Dữ liệu mẫu cho trang liên hệ (nếu muốn hiển thị thông tin cửa hàng)
        $contactInfo = [
            'address' => '123 Đường Nông Sản, Quận 1, TP.HCM',
            'phone' => '0909 123 456',
            'email' => 'info@thuyanhfruits.com',
            'hours' => '08:00 - 21:00'
        ];

        return $this->render('lien_he/index.html.twig', [
            'contactInfo' => $contactInfo,
        ]);
    }
}
