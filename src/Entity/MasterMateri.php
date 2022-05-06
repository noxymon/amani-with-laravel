<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterMateri
 *
 * @ORM\Table(name="master_materi", indexes={@ORM\Index(name="materi_level_fk", columns={"id_level"})})
 * @ORM\Entity(repositoryClass="App\Repository\MasterMateriRepository")
 */
class MasterMateri
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
     * @var string|null
     *
     * @ORM\Column(name="nama_materi", type="string", length=255, nullable=true)
     */
    private $namaMateri;

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
     * @var \MasterLevel
     *
     * @ORM\ManyToOne(targetEntity="MasterLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_level", referencedColumnName="id")
     * })
     */
    private $idLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaMateri(): ?string
    {
        return $this->namaMateri;
    }

    public function setNamaMateri(?string $namaMateri): self
    {
        $this->namaMateri = $namaMateri;

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


}
