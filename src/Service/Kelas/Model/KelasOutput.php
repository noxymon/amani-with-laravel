<?php

namespace App\Service\Kelas\Model;

use DateTimeInterface;

class KelasOutput
{
    private ?int $id;
    private ?int $idInstitusi;
    private ?string $kodeInstitusi;
    private ?int $idLevel;
    private ?int $idMentor;
    private ?string $kode;
    private ?string $namaKelas;
    private ?DateTimeInterface $createdAt;
    private ?string $createdBy;
    private bool $aktif;

    /**
     * @return string|null
     */
    public function getKodeInstitusi(): ?string
    {
        return $this->kodeInstitusi;
    }

    /**
     * @param string|null $kodeInstitusi
     */
    public function setKodeInstitusi(?string $kodeInstitusi): void
    {
        $this->kodeInstitusi = $kodeInstitusi;
    }

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
     * @return int|null
     */
    public function getIdInstitusi(): ?int
    {
        return $this->idInstitusi;
    }

    /**
     * @param int|null $idInstitusi
     */
    public function setIdInstitusi(?int $idInstitusi): void
    {
        $this->idInstitusi = $idInstitusi;
    }

    /**
     * @return int|null
     */
    public function getIdLevel(): ?int
    {
        return $this->idLevel;
    }

    /**
     * @param int|null $idLevel
     */
    public function setIdLevel(?int $idLevel): void
    {
        $this->idLevel = $idLevel;
    }

    /**
     * @return int|null
     */
    public function getIdMentor(): ?int
    {
        return $this->idMentor;
    }

    /**
     * @param int|null $idMentor
     */
    public function setIdMentor(?int $idMentor): void
    {
        $this->idMentor = $idMentor;
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
    public function getNamaKelas(): ?string
    {
        return $this->namaKelas;
    }

    /**
     * @param string|null $namaKelas
     */
    public function setNamaKelas(?string $namaKelas): void
    {
        $this->namaKelas = $namaKelas;
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