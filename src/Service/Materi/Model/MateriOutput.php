<?php

namespace App\Service\Materi\Model;

use DateTimeInterface;

class MateriOutput
{
    private ?string $labelLevel;
    private ?string $idLevel;
    private ?string $namaMateri;
    private ?DateTimeInterface $createdAt;
    private ?string $createdBy;
    private bool $aktif;

    /**
     * @return string|null
     */
    public function getLabelLevel(): ?string
    {
        return $this->labelLevel;
    }

    /**
     * @param string|null $labelLevel
     */
    public function setLabelLevel(?string $labelLevel): void
    {
        $this->labelLevel = $labelLevel;
    }

    /**
     * @return string|null
     */
    public function getIdLevel(): ?string
    {
        return $this->idLevel;
    }

    /**
     * @param string|null $idLevel
     */
    public function setIdLevel(?string $idLevel): void
    {
        $this->idLevel = $idLevel;
    }

    /**
     * @return string|null
     */
    public function getNamaMateri(): ?string
    {
        return $this->namaMateri;
    }

    /**
     * @param string|null $namaMateri
     */
    public function setNamaMateri(?string $namaMateri): void
    {
        $this->namaMateri = $namaMateri;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface|null $createdAt
     */
    public function setCreatedAt(?DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param string|null $createdBy
     */
    public function setCreatedBy(?string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return bool
     */
    public function isAktif(): bool
    {
        return $this->aktif;
    }

    /**
     * @param bool $aktif
     */
    public function setAktif(bool $aktif): void
    {
        $this->aktif = $aktif;
    }
}