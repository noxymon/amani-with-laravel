<?php

namespace App\Service\Member\Model;

use DateTimeInterface;

class MemberInput
{
    private ?string $kode;
    private ?string $namaLengkap;
    private ?DateTimeInterface $tanggalLahir;
    private ?DateTimeInterface $createdAt;
    private ?string $createdBy;
    private bool $aktif;

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
    public function getNamaLengkap(): ?string
    {
        return $this->namaLengkap;
    }

    /**
     * @param string|null $namaLengkap
     */
    public function setNamaLengkap(?string $namaLengkap): void
    {
        $this->namaLengkap = $namaLengkap;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getTanggalLahir(): ?DateTimeInterface
    {
        return $this->tanggalLahir;
    }

    /**
     * @param DateTimeInterface|null $tanggalLahir
     */
    public function setTanggalLahir(?DateTimeInterface $tanggalLahir): void
    {
        $this->tanggalLahir = $tanggalLahir;
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