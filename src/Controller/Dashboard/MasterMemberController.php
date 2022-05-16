<?php

namespace App\Controller\Dashboard;

use App\Controller\Dashboard\Model\AddMember;
use App\Controller\Dashboard\Model\MasterMemberRequest;
use App\Controller\Dashboard\Model\MasterMemberResponse;
use App\Controller\Dashboard\Type\AddMemberType;
use App\Service\Member\GetMember;
use App\Service\Member\Model\MemberInput;
use App\Service\Member\SaveMember;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterMemberController extends AbstractController
{
    private GetMember $getMember;
    private SaveMember $saveMember;

    /**
     * @param GetMember $getMember
     * @param SaveMember $saveMember
     */
    public function __construct(GetMember $getMember, SaveMember $saveMember)
    {
        $this->getMember = $getMember;
        $this->saveMember = $saveMember;
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
            $memberInput = $this->getMemberInputFrom($form);
            $this->saveMember->save($memberInput);
            $this->addFlash('success', 'Member Saved Successfully');
            return $this->redirectToRoute('show_member_list');
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

    /**
     * @param FormInterface $form
     * @return MemberInput
     */
    private function getMemberInputFrom(FormInterface $form): MemberInput
    {
        /**
         * @var AddMember $addMember
         */
        $addMember = $form->getData();
        $memberInput = new MemberInput();
        $memberInput->setAktif(true);
        $memberInput->setCreatedBy('SYS');
        $memberInput->setCreatedAt(new DateTime());
        $memberInput->setKode($addMember->getKode());
        $memberInput->setNamaLengkap($addMember->getNamaLengkap());
        $memberInput->setTanggalLahir($addMember->getTanggalLahir());
        return $memberInput;
    }
}