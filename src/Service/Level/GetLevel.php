<?php

namespace App\Service\Level;

use App\Repository\MasterLevelRepository;
use App\Service\Level\Model\LevelOutput;

class GetLevel
{
    private MasterLevelRepository $masterLevelRepository;

    /**
     * @param MasterLevelRepository $masterLevelRepository
     */
    public function __construct(MasterLevelRepository $masterLevelRepository)
    {
        $this->masterLevelRepository = $masterLevelRepository;
    }

    /**
     * @return
     */
    public function all(): array
    {
        $allData = $this->masterLevelRepository->findAll();

        $levelOutputArray = [];

        foreach ($allData as $level)
        {
            $levelOutput = new LevelOutput();
            $levelOutput->setId($level->getId());
            $levelOutput->setNamaLevel($level->getNamaLevel());
            $levelOutput->setDeskripsiLevel($level->getDeskripsiLevel());
            array_push($levelOutputArray, $levelOutput);
        }
        return $levelOutputArray;
    }
}