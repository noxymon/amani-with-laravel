<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterKelas
 *
 * @ORM\Table(name="master_kelas", uniqueConstraints={@ORM\UniqueConstraint(name="master_kelas_kode_uindex", columns={"kode"})}, indexes={@ORM\Index(name="master_kelas_master_level_id_fk", columns={"id_level"}), @ORM\Index(name="master_kelas_master_member_id_fk", columns={"id_mentor"}), @ORM\Index(name="master_kelas_master_institusi_id_fk", columns={"id_institusi"})})
 * @ORM\Entity(repositoryClass="App\Repository\MasterKelasRepository")
 */
class MasterKelas
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
     * @var string
     *
     * @ORM\Column(name="nama_kelas", type="string", length=255, nullable=false)
     */
    private $namaKelas;

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
     * @var \MasterLevel
     *
     * @ORM\ManyToOne(targetEntity="MasterLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_level", referencedColumnName="id")
     * })
     */
    private $idLevel;

    /**
     * @var \MasterInstitusi
     *
     * @ORM\ManyToOne(targetEntity="MasterInstitusi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institusi", referencedColumnName="id")
     * })
     */
    private $idInstitusi;

    /**
     * @var \MasterMember
     *
     * @ORM\ManyToOne(targetEntity="MasterMember")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mentor", referencedColumnName="id")
     * })
     */
    private $idMentor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterMember", inversedBy="idKelas")
     * @ORM\JoinTable(name="master_kelas_detail",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_kelas", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_member", referencedColumnName="id")
     *   }
     * )
     */
    private $idMember;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMember = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getNamaKelas(): ?string
    {
        return $this->namaKelas;
    }

    public function setNamaKelas(string $namaKelas): self
    {
        $this->namaKelas = $namaKelas;

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

    public function getIdLevel(): ?MasterLevel
    {
        return $this->idLevel;
    }

    public function setIdLevel(?MasterLevel $idLevel): self
    {
        $this->idLevel = $idLevel;

        return $this;
    }

    public function getIdInstitusi(): ?MasterInstitusi
    {
        return $this->idInstitusi;
    }

    public function setIdInstitusi(?MasterInstitusi $idInstitusi): self
    {
        $this->idInstitusi = $idInstitusi;

        return $this;
    }

    public function getIdMentor(): ?MasterMember
    {
        return $this->idMentor;
    }

    public function setIdMentor(?MasterMember $idMentor): self
    {
        $this->idMentor = $idMentor;

        return $this;
    }

    /**
     * @return Collection<int, MasterMember>
     */
    public function getIdMember(): Collection
    {
        return $this->idMember;
    }

    public function addIdMember(MasterMember $idMember): self
    {
        if (!$this->idMember->contains($idMember)) {
            $this->idMember[] = $idMember;
        }

        return $this;
    }

    public function removeIdMember(MasterMember $idMember): self
    {
        $this->idMember->removeElement($idMember);

        return $this;
    }

}
