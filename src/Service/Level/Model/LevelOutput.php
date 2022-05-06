<?php

namespace App\Service\Level\Model;

class LevelOutput
{
    private ?int $id;
    private ?string $namaLevel;
    private ?string $deskripsiLevel;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNamaLevel(): ?string
    {
        return $this->namaLevel;
    }

    /**
     * @param string|null $namaLevel
     */
    public function setNamaLevel(?string $namaLevel): void
    {
        $this->namaLevel = $namaLevel;
    }

    /**
     * @return string|null
     */
    public function getDeskripsiLevel(): ?string
    {
        return $this->deskripsiLevel;
    }

    /**
     * @param string|null $deskripsiLevel
     */
    public function setDeskripsiLevel(?string $deskripsiLevel): void
    {
        $this->deskripsiLevel = $deskripsiLevel;
    }
}