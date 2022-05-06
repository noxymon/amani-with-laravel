<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterLevel
 *
 * @ORM\Table(name="master_level")
 * @ORM\Entity(repositoryClass="App\Repository\MasterLevelRepository")
 */
class MasterLevel
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
     * @ORM\Column(name="nama_level", type="string", length=255, nullable=false)
     */
    private $namaLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deskripsi_level", type="string", length=255, nullable=true)
     */
    private $deskripsiLevel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MasterMember", mappedBy="idLevel")
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

    public function getNamaLevel(): ?string
    {
        return $this->namaLevel;
    }

    public function setNamaLevel(string $namaLevel): self
    {
        $this->namaLevel = $namaLevel;

        return $this;
    }

    public function getDeskripsiLevel(): ?string
    {
        return $this->deskripsiLevel;
    }

    public function setDeskripsiLevel(?string $deskripsiLevel): self
    {
        $this->deskripsiLevel = $deskripsiLevel;

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
            $idMember->addIdLevel($this);
        }

        return $this;
    }

    public function removeIdMember(MasterMember $idMember): self
    {
        if ($this->idMember->removeElement($idMember)) {
            $idMember->removeIdLevel($this);
        }

        return $this;
    }

}
