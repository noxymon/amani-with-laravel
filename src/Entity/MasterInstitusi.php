<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterInstitusi
 *
 * @ORM\Table(name="master_institusi", uniqueConstraints={@ORM\UniqueConstraint(name="master_institusi_kode_uindex", columns={"kode"})})
 * @ORM\Entity(repositoryClass="App\Repository\MasterInstitusiRepository")
 */
class MasterInstitusi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kode", type="string", length=255, nullable=false)
     */
    private $kode;

    /**
     * @var string
     *
     * @ORM\Column(name="nama_institusi", type="string", length=255, nullable=false)
     */
    private $namaInstitusi;

    /**
     * @var string
     *
     * @ORM\Column(name="alamat_institusi", type="text", length=65535, nullable=false)
     */
    private $alamatInstitusi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=false, options={"default"="SYS"})
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
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true)
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
     * @ORM\ManyToMany(targetEntity="MasterMember", inversedBy="idInstitusi")
     * @ORM\JoinTable(name="member_institusi_mapping",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_institusi", referencedColumnName="id")
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

    public function getId(): ?int
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

    public function getNamaInstitusi(): ?string
    {
        return $this->namaInstitusi;
    }

    public function setNamaInstitusi(string $namaInstitusi): self
    {
        $this->namaInstitusi = $namaInstitusi;

        return $this;
    }

    public function getAlamatInstitusi(): ?string
    {
        return $this->alamatInstitusi;
    }

    public function setAlamatInstitusi(string $alamatInstitusi): self
    {
        $this->alamatInstitusi = $alamatInstitusi;

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
