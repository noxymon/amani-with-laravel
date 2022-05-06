<?php

namespace App\Controller\Dashboard\Model;

use DateTime;
use DateTimeInterface;

class AddMember
{
    protected $role;
    protected $kode;
    protected $level;
    protected $namaLengkap;
    protected $jenisKelamin;
    protected $asalInstitusi;
    protected ?DateTime $tanggalLahir;

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getKode()
    {
        return $this->kode;
    }

    /**
     * @param mixed $kode
     */
    public function setKode($kode): void
    {
        $this->kode = $kode;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getNamaLengkap()
    {
        return $this->namaLengkap;
    }

    /**
     * @param mixed $namaLengkap
     */
    public function setNamaLengkap($namaLengkap): void
    {
        $this->namaLengkap = $namaLengkap;
    }

    /**
     * @return mixed
     */
    public function getJenisKelamin()
    {
        return $this->jenisKelamin;
    }

    /**
     * @param mixed $jenisKelamin
     */
    public function setJenisKelamin($jenisKelamin): void
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    /**
     * @return mixed
     */
    public function getAsalInstitusi()
    {
        return $this->asalInstitusi;
    }

    /**
     * @param mixed $asalInstitusi
     */
    public function setAsalInstitusi($asalInstitusi): void
    {
        $this->asalInstitusi = $asalInstitusi;
    }

    /**
     * @return DateTime|null
     */
    public function getTanggalLahir(): ?DateTime
    {
        return $this->tanggalLahir;
    }

    /**
     * @param DateTime|null $tanggalLahir
     */
    public function setTanggalLahir(?DateTime $tanggalLahir): void
    {
        $this->tanggalLahir = $tanggalLahir;
    }
}