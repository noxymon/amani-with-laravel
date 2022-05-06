<?php

namespace App\Service\Institusi\Model;

use DateTimeInterface;

class InstitusiOutput
{
    private ?int $id;
    private ?string $kode;
    private ?string $namaInstitusi;
    private ?string $alamatInstitusi;
    private ?DateTimeInterface $createdAt;
    private ?string $createdBy;
    private ?DateTimeInterface $updatedAt;
    private ?string $updatedBy;
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
    public function getKode(): ?string
    {
        return $this->kode;
    }

    /**
     * @param string|null $kode
     */
    public function setKode(?string $kode): void
    {
        $this->kode = $kode;
    }

    /**
     * @return string|null
     */
    public function getNamaInstitusi(): ?string
    {
        return $this->namaInstitusi;
    }

    /**
     * @param string|null $namaInstitusi
     */
    public function setNamaInstitusi(?string $namaInstitusi): void
    {
        $this->namaInstitusi = $namaInstitusi;
    }

    /**
     * @return string|null
     */
    public function getAlamatInstitusi(): ?string
    {
        return $this->alamatInstitusi;
    }

    /**
     * @param string|null $alamatInstitusi
     */
    public function setAlamatInstitusi(?string $alamatInstitusi): void
    {
        $this->alamatInstitusi = $alamatInstitusi;
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
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface|null $updatedAt
     */
    public function setUpdatedAt(?DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string|null
     */
    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    /**
     * @param string|null $updatedBy
     */
    public function setUpdatedBy(?string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
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