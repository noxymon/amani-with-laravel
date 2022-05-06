<?php

namespace App\Service\Kelas;

use App\Repository\MasterKelasRepository;
use App\Service\Kelas\Model\KelasOutput;

class GetKelas
{
    private MasterKelasRepository $masterKelasRepository;

    /**
     * @param MasterKelasRepository $masterKelasRepository
     */
    public function __construct(MasterKelasRepository $masterKelasRepository)
    {
        $this->masterKelasRepository = $masterKelasRepository;
    }

    /**
     * @return KelasOutput[]
     */
    public function all(): array
    {
        $allKelas = $this->masterKelasRepository->findAll();

        $kelasOutputArray = [];

        foreach ($allKelas as $kelas)
        {
            $kelasOutput = new KelasOutput();
            $kelasOutput->setId($kelas->getId());
            $kelasOutput->setKode($kelas->getKode());
            $kelasOutput->setAktif($kelas->getAktif());
            $kelasOutput->setNamaKelas($kelas->getNamaKelas());
            $kelasOutput->setCreatedAt($kelas->getCreatedAt());
            $kelasOutput->setCreatedBy($kelas->getCreatedBy());
            $kelasOutput->setIdInstitusi($kelas->getIdInstitusi()->getId());
            $kelasOutput->setKodeInstitusi($kelas->getIdInstitusi()->getKode());
            array_push($kelasOutputArray, $kelasOutput);
        }

        return $kelasOutputArray;
    }
}