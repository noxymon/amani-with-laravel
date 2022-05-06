<?php

namespace App\Controller\Dashboard;

use App\Service\Materi\GetMateri;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterMateriController extends AbstractController
{

    private GetMateri $getMateri;

    /**
     * @param GetMateri $getMateri
     */
    public function __construct(GetMateri $getMateri)
    {
        $this->getMateri = $getMateri;
    }

    #[Route('/master/materi', methods: ['GET'], name: 'show_materi_list')]
    public function showMasteriList(): Response
    {
        $materiArray = $this->getMateri->all();
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Materi',
                'content'=>'Pages/Materi/index.html.twig',
                'footer_script'=>'Pages/Materi/footer-script.html.twig',
                'materi_array'=>$materiArray,
            )
        );
    }
}