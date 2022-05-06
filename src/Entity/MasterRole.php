<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterRole
 *
 * @ORM\Table(name="master_role")
 * @ORM\Entity(repositoryClass="App\Repository\MasterRoleRepository")
 */
class MasterRole
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
     * @ORM\Column(name="nama_role", type="string", length=255, nullable=false)
     */
    private $namaRole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deskripsi_role", type="text", length=65535, nullable=true)
     */
    private $deskripsiRole;

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
     * @ORM\ManyToMany(targetEntity="MasterMember", mappedBy="idRole")
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

    public function getNamaRole(): ?string
    {
        return $this->namaRole;
    }

    public function setNamaRole(string $namaRole): self
    {
        $this->namaRole = $namaRole;

        return $this;
    }

    public function getDeskripsiRole(): ?string
    {
        return $this->deskripsiRole;
    }

    public function setDeskripsiRole(?string $deskripsiRole): self
    {
        $this->deskripsiRole = $deskripsiRole;

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
            $idMember->addIdRole($this);
        }

        return $this;
    }

    public function removeIdMember(MasterMember $idMember): self
    {
        if ($this->idMember->removeElement($idMember)) {
            $idMember->removeIdRole($this);
        }

        return $this;
    }

}
