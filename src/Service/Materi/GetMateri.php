<?php

namespace App\Service\Materi;

use App\Entity\MasterMateri;
use App\Repository\MasterMateriRepository;
use App\Service\Materi\Model\MateriOutput;

class GetMateri
{
    private MasterMateriRepository $masterMateriRepository;

    /**
     * @param MasterMateriRepository $masterMateriRepository
     */
    public function __construct(MasterMateriRepository $masterMateriRepository)
    {
        $this->masterMateriRepository = $masterMateriRepository;
    }


    /**
     * @return MasterMateri[]
     */
    public function all(): array
    {
        /* @var MasterMateri[] $allData */
        $allData = $this->masterMateriRepository->findAll();

        $materiOutputArray = [];

        /* @var $materi MasterMateri */
        foreach ($allData as $materi)
        {
            $materiOutput = new MateriOutput();
            $materiOutput->setLabelLevel($materi->getIdLevel()->getNamaLevel());
            $materiOutput->setNamaMateri($materi->getNamaMateri());
            $materiOutput->setIdLevel($materi->getIdLevel()->getId());
            $materiOutput->setAktif($materi->getAktif());
            $materiOutput->setCreatedBy($materi->getCreatedBy());
            $materiOutput->setCreatedAt($materi->getCreatedAt());
            array_push($materiOutputArray, $materiOutput);
        }
        return $materiOutputArray;
    }
}