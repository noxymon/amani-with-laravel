<?php

namespace App\Controller\Dashboard;

use App\Service\Institusi\GetInstitusi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterInstitusiController extends AbstractController
{

    private GetInstitusi $getInstitusi;

    /**
     * @param GetInstitusi $getInstitusi
     */
    public function __construct(GetInstitusi $getInstitusi)
    {
        $this->getInstitusi = $getInstitusi;
    }

    #[Route('/master/institusi', methods: ['GET'], name: 'show_institusi_list')]
    public function showInstitusiList(): Response
    {
        $institusiArray = $this->getInstitusi->all();
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Institusi',
                'content'=>'Pages/Institusi/index.html.twig',
                'footer_script'=>'Pages/Institusi/footer-script.html.twig',
                'institusi_array'=>$institusiArray
            )
        );
    }
}