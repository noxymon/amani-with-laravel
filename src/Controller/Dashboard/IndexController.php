<?php

namespace App\Controller\Dashboard;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    #[Route('/dashboard', methods: ['GET'], name: 'show_dashboard')]
    public function showDashboard(): Response
    {
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Dashboard',
                'content'=>'Pages/Main/index.html.twig',
                'footer_script'=>'Pages/Main/footer-script.html.twig',
            )
        );
    }
}