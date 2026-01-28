<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    #[Route('/khuyen-mai', name: 'app_promotion')]
    public function index(): Response
    {
        // Danh sách khuyến mãi
        $promotions = [
            // Giảm giá %
            ['title'=>'Giảm 10% Táo Mỹ','desc'=>'Mua Táo Mỹ giảm ngay 10%','date'=>'13/01/2026','type'=>'percent','value'=>10,'image'=>'giam10_tao.jpg'],
            ['title'=>'Giảm 15% Nho Úc','desc'=>'Mua Nho Úc giảm ngay 15%','date'=>'13/01/2026','type'=>'percent','value'=>15,'image'=>'giam15_nho.jpg'],
            ['title'=>'Giảm 20% Dâu Tây','desc'=>'Dâu Tây Đà Lạt giảm 20%','date'=>'13/01/2026','type'=>'percent','value'=>20,'image'=>'giam20_dau.jpg'],
            ['title'=>'Giảm 5% Sầu Riêng','desc'=>'Sầu Riêng Musangking giảm 5%','date'=>'13/01/2026','type'=>'percent','value'=>5,'image'=>'giam5_saurieng.jpg'],

            // Free Ship
            ['title'=>'Free Ship toàn quốc','desc'=>'Miễn phí vận chuyển đơn từ 500k','date'=>'13/01/2026','type'=>'freeship','image'=>'freeship1.jpg'],
            ['title'=>'Free Ship khu vực HCM','desc'=>'Miễn phí ship đơn từ 300k','date'=>'13/01/2026','type'=>'freeship','image'=>'freeship2.jpg'],
            ['title'=>'Free Ship dịp lễ','desc'=>'Miễn phí ship toàn bộ đơn hàng dịp Tết','date'=>'13/01/2026','type'=>'freeship','image'=>'freeship3.jpg'],
            ['title'=>'Free Ship Online','desc'=>'Đặt hàng online miễn phí vận chuyển','date'=>'13/01/2026','type'=>'freeship','image'=>'freeship4.jpg'],
        ];

        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotions,
        ]);
    }
}
