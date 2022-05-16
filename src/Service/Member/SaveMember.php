<?php

namespace App\Service\Member;

use App\Entity\MasterMember;
use App\Service\Member\Model\MemberInput;

class SaveMember extends AbstractMember
{
    public function save(MemberInput $memberInput)
    {
        $masterMember = new MasterMember();
        $masterMember->setKode($memberInput->getKode());
        $masterMember->setAktif($memberInput->isAktif());
        $masterMember->setCreatedBy($memberInput->getCreatedBy());
        $masterMember->setCreatedAt($memberInput->getCreatedAt());
        $masterMember->setNamaLengkap($memberInput->getNamaLengkap());
        $masterMember->setTanggalLahir($memberInput->getTanggalLahir());
        $this->masterMemberRepository->add($masterMember, true);
    }
}