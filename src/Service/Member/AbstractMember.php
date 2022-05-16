<?php

namespace App\Service\Member;

use App\Repository\MasterMemberRepository;

abstract class AbstractMember
{
    protected MasterMemberRepository $masterMemberRepository;

    /**
     * @param MasterMemberRepository $masterMemberRepository
     */
    public function __construct(MasterMemberRepository $masterMemberRepository)
    {
        $this->masterMemberRepository = $masterMemberRepository;
    }
}