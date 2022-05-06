<?php

namespace App\Controller\Dashboard;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterLevelController extends AbstractController
{
    #[Route('/system/level', methods: ['GET'], name: 'show_level_list')]
    public function showLevelList(): Response
    {
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Level',
                'content'=>'Pages/Level/index.html.twig',
                'footer_script'=>'Pages/Level/footer-script.html.twig',
            )
        );
    }
}