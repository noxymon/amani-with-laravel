<?php

namespace App\Controller\Dashboard;

use App\Controller\Dashboard\Model\AddMember;
use App\Controller\Dashboard\Model\MasterMemberRequest;
use App\Controller\Dashboard\Model\MasterMemberResponse;
use App\Controller\Dashboard\Type\AddMemberType;
use App\Service\Institusi\GetInstitusi;
use App\Service\Level\GetLevel;
use App\Service\Member\GetMember;
use App\Service\Role\GetRole;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterMemberController extends AbstractController
{
    private GetRole $getRole;
    private GetLevel $getLevel;
    private GetMember $getMember;
    private GetInstitusi $getInstitusi;

    /**
     * @param GetMember $getMember
     * @param GetInstitusi $getInstitusi
     * @param GetLevel $getLevel
     * @param GetRole $getRole
     */
    public function __construct(GetMember $getMember, GetInstitusi $getInstitusi, GetLevel $getLevel, GetRole $getRole)
    {
        $this->getMember = $getMember;
        $this->getInstitusi = $getInstitusi;
        $this->getLevel = $getLevel;
        $this->getRole = $getRole;
    }

    #[Route('/master/member', methods: ['GET'], name: 'show_member_list')]
    public function showMemberList(): Response
    {
        $memberArray = $this->getMember->all();
        return $this->render(
            'index.html.twig',
            array(
                'content_title'=>'Master Member',
                'content'=>'Pages/Member/index.html.twig',
                'footer_script'=>'Pages/Member/footer-script.html.twig',
                'member_array'=>$memberArray,
            )
        );
    }

    #[Route('/master/member/add', name: 'create_new_member')]
    public function createNewMember(Request $request): Response
    {
        $form = $this->createForm(AddMemberType::class, new AddMember());
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $addMember = $form->getData();
            return $this->redirectToRoute('show_dashboard');
        }

        return $this->renderForm(
            'index.html.twig',
            [
                'content_title'=>'Master Member',
                'content'=>'Pages/Member/add.html.twig',
                'footer_script'=>'Pages/Member/footer-script.html.twig',
                'form_type'=>$form
            ]
        );
    }
}