<?php

namespace App\Service\Role\Model;

use DateTimeInterface;

class RoleOutput
{
    private ?int $id;
    private ?string $namaRole;
    private ?string $createdBy;
    private ?string $deskripsiRole;
    private ?DateTimeInterface $createdAt;
    private bool $aktif;

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
    public function getNamaRole(): ?string
    {
        return $this->namaRole;
    }

    /**
     * @param string|null $namaRole
     */
    public function setNamaRole(?string $namaRole): void
    {
        $this->namaRole = $namaRole;
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
     * @return string|null
     */
    public function getDeskripsiRole(): ?string
    {
        return $this->deskripsiRole;
    }

    /**
     * @param string|null $deskripsiRole
     */
    public function setDeskripsiRole(?string $deskripsiRole): void
    {
        $this->deskripsiRole = $deskripsiRole;
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