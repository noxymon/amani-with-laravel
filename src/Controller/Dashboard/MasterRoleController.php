<?php

namespace App\Controller\Dashboard;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterRoleController extends AbstractController
{
    #[Route('/system/role', methods: ['GET'], name: 'show_role_list')]
    public function showRoleList(): Response
    {
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Role',
                'content'=>'Pages/Role/index.html.twig',
                'footer_script'=>'Pages/Role/footer-script.html.twig',
            )
        );
    }
}