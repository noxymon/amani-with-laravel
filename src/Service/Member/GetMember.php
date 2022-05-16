<?php

namespace App\Service\Member;

use App\Service\Materi\Model\MateriOutput;
use App\Service\Member\Model\MemberOutput;

class GetMember extends AbstractMember
{
    /**
     * @return MateriOutput[]
     */
    public function all(): array
    {
        $allMember = $this->masterMemberRepository->findAll();

        $memberOutputArray = [];

        foreach ($allMember as $member)
        {
            $memberOutput = new MemberOutput();
            $memberOutput->setId($member->getId());
            $memberOutput->setKode($member->getKode());
            $memberOutput->setAktif($member->getAktif());
            $memberOutput->setNamaLengkap($member->getNamaLengkap());
            $memberOutput->setTanggalLahir($member->getTanggalLahir());
            $memberOutput->setCreatedAt($member->getCreatedAt());
            $memberOutput->setCreatedBy($member->getCreatedBy());
            array_push($memberOutputArray, $memberOutput);
        }
        return $memberOutputArray;
    }
}