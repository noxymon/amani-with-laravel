<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterMember
 *
 * @ORM\Table(name="master_member", uniqueConstraints={@ORM\UniqueConstraint(name="master_member_kode_uindex", columns={"kode"})})
 * @ORM\Entity(repositoryClass="App\Repository\MasterMemberRepository")
 */
class MasterMember
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kode", type="string", length=10, nullable=false)
     */
    private $kode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama_lengkap", type="string", length=255, nullable=true)
     */
    private $namaLengkap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tanggal_lahir", type="date", nullable=false)
     */
    private $tanggalLahir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=10, nullable=false, options={"default"="SYS"})
     */
    private $createdBy = 'SYS';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=10, nullable=true)
     */
    private $updatedBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="aktif", type="boolean", nullable=false, options={"default"="1"})
     */
    private $aktif = true;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterKelas", mappedBy="idMember")
     */
    private $idKelas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterInstitusi", mappedBy="idMember")
     */
    private $idInstitusi;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterLevel", inversedBy="idMember")
     * @ORM\JoinTable(name="member_level_history",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_member", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_level", referencedColumnName="id")
     *   }
     * )
     */
    private $idLevel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterRole", inversedBy="idMember")
     * @ORM\JoinTable(name="member_role_mapping",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_member", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_role", referencedColumnName="id")
     *   }
     * )
     */
    private $idRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idKelas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idInstitusi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idLevel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRole = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getNamaLengkap(): ?string
    {
        return $this->namaLengkap;
    }

    public function setNamaLengkap(?string $namaLengkap): self
    {
        $this->namaLengkap = $namaLengkap;

        return $this;
    }

    public function getTanggalLahir(): ?\DateTimeInterface
    {
        return $this->tanggalLahir;
    }

    public function setTanggalLahir(\DateTimeInterface $tanggalLahir): self
    {
        $this->tanggalLahir = $tanggalLahir;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getAktif(): ?bool
    {
        return $this->aktif;
    }

    public function setAktif(bool $aktif): self
    {
        $this->aktif = $aktif;

        return $this;
    }

    /**
     * @return Collection<int, MasterKelas>
     */
    public function getIdKelas(): Collection
    {
        return $this->idKelas;
    }

    public function addIdKela(MasterKelas $idKela): self
    {
        if (!$this->idKelas->contains($idKela)) {
            $this->idKelas[] = $idKela;
            $idKela->addIdMember($this);
        }

        return $this;
    }

    public function removeIdKela(MasterKelas $idKela): self
    {
        if ($this->idKelas->removeElement($idKela)) {
            $idKela->removeIdMember($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, MasterInstitusi>
     */
    public function getIdInstitusi(): Collection
    {
        return $this->idInstitusi;
    }

    public function addIdInstitusi(MasterInstitusi $idInstitusi): self
    {
        if (!$this->idInstitusi->contains($idInstitusi)) {
            $this->idInstitusi[] = $idInstitusi;
            $idInstitusi->addIdMember($this);
        }

        return $this;
    }

    public function removeIdInstitusi(MasterInstitusi $idInstitusi): self
    {
        if ($this->idInstitusi->removeElement($idInstitusi)) {
            $idInstitusi->removeIdMember($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, MasterLevel>
     */
    public function getIdLevel(): Collection
    {
        return $this->idLevel;
    }

    public function addIdLevel(MasterLevel $idLevel): self
    {
        if (!$this->idLevel->contains($idLevel)) {
            $this->idLevel[] = $idLevel;
        }

        return $this;
    }

    public function removeIdLevel(MasterLevel $idLevel): self
    {
        $this->idLevel->removeElement($idLevel);

        return $this;
    }

    /**
     * @return Collection<int, MasterRole>
     */
    public function getIdRole(): Collection
    {
        return $this->idRole;
    }

    public function addIdRole(MasterRole $idRole): self
    {
        if (!$this->idRole->contains($idRole)) {
            $this->idRole[] = $idRole;
        }

        return $this;
    }

    public function removeIdRole(MasterRole $idRole): self
    {
        $this->idRole->removeElement($idRole);

        return $this;
    }

}
