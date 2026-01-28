<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('/tin-tuc', name:'app_news')]
    public function index(): Response
    {
        $newsList = [
            ['title'=>'Cập nhật giá rau củ hôm nay','desc'=>'Giá rau củ tươi ngon, cập nhật hàng ngày tại Thủy Anh Fruits.','image'=>'tt5.jpg','date'=>'13/01/2026','tags'=>['Rau củ','Cập nhật']],
            ['title'=>'Quả xoài Đà Lạt chín mọng','desc'=>'Xoài chín tự nhiên, giao hàng tận nơi.','image'=>'tt6.jpg','date'=>'12/01/2026','tags'=>['Xoài','Trái cây']],
            ['title'=>'Sản phẩm mới: Thanh long','desc'=>'Thanh long ruột đỏ, ngọt tự nhiên, giao hàng toàn quốc.','image'=>'tt7.jpg','date'=>'09/01/2026','tags'=>['Thanh long','Trái cây']],
        ];

        return $this->render('news/index.html.twig', [
            'newsList' => $newsList
        ]);
    }
}
