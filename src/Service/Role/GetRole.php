<?php

namespace App\Service\Role;

use App\Repository\MasterRoleRepository;
use App\Service\Role\Model\RoleOutput;

class GetRole
{
    private MasterRoleRepository $masterRoleRepository;

    /**
     * @param MasterRoleRepository $masterRoleRepository
     */
    public function __construct(MasterRoleRepository $masterRoleRepository)
    {
        $this->masterRoleRepository = $masterRoleRepository;
    }

    /**
     * @return RoleOutput[]
     */
    public function all(): array
    {
        $allRole = $this->masterRoleRepository->findAll();

        $roleOutputArray = [];

        foreach ($allRole as $role)
        {
            $roleOutput = new RoleOutput();
            $roleOutput->setId($role->getId());
            $roleOutput->setAktif($role->getAktif());
            $roleOutput->setNamaRole($role->getNamaRole());
            $roleOutput->setCreatedAt($role->getCreatedAt());
            $roleOutput->setCreatedBy($role->getCreatedBy());
            $roleOutput->setDeskripsiRole($role->getDeskripsiRole());
            array_push($roleOutputArray, $roleOutput);
        }
        return $roleOutputArray;
    }
}