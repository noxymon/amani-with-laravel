<?php

namespace App\Service\Institusi;

use App\Entity\MasterInstitusi;
use App\Repository\MasterInstitusiRepository;
use App\Service\Institusi\Model\InstitusiOutput;

class GetInstitusi
{
    private MasterInstitusiRepository $masterInstitusiRepository;

    /**
     * @param MasterInstitusiRepository $masterInstitusiRepository
     */
    public function __construct(MasterInstitusiRepository $masterInstitusiRepository)
    {
        $this->masterInstitusiRepository = $masterInstitusiRepository;
    }

    /**
     * @return InstitusiOutput[]
     */
    public function all(): array
    {
        $allRecord[] = $this->masterInstitusiRepository->findAll();

        /* @var InstitusiOutput[] $institusiOutputArray */
        $institusiOutputArray = [];

        /* @var $item MasterInstitusi */
        foreach ($allRecord[0] as $item)
        {
            $institusiOutput = new InstitusiOutput();
            $institusiOutput->setId($item->getId());
            $institusiOutput->setKode($item->getKode());
            $institusiOutput->setNamaInstitusi($item->getNamaInstitusi());
            $institusiOutput->setAlamatInstitusi($item->getAlamatInstitusi());
            $institusiOutput->setAktif($item->getAktif());
            $institusiOutput->setCreatedAt($item->getCreatedAt());
            $institusiOutput->setCreatedBy($item->getCreatedBy());
            $institusiOutput->setUpdatedAt($item->getUpdatedAt());
            $institusiOutput->setUpdatedBy($item->getUpdatedBy());
            array_push($institusiOutputArray, $institusiOutput);
        }
        return $institusiOutputArray;
    }
}