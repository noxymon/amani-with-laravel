<?php

namespace App\Controller\Dashboard;

use App\Service\Kelas\GetKelas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterKelasController extends AbstractController
{

    private GetKelas $getKelas;

    /**
     * @param GetKelas $getKelas
     */
    public function __construct(GetKelas $getKelas)
    {
        $this->getKelas = $getKelas;
    }

    #[Route('/master/kelas', methods: ['GET'], name: 'show_kelas_list')]
    public function showKelasList(): Response
    {
        $allKelas = $this->getKelas->all();

        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Kelas',
                'content'=>'Pages/Kelas/index.html.twig',
                'footer_script'=>'Pages/Kelas/footer-script.html.twig',
                'kelas_array'=>$allKelas,
            )
        );
    }
}