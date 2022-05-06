<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterMateriIndikator
 *
 * @ORM\Table(name="master_materi_indikator", indexes={@ORM\Index(name="master_materi_indikator_master_materi_id_fk", columns={"id_materi"})})
 * @ORM\Entity(repositoryClass="App\Repository\MasterMateriIndikatorRepository")
 */
class MasterMateriIndikator
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
     * @ORM\Column(name="nama_indikator", type="string", length=255, nullable=false)
     */
    private $namaIndikator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deskripsi_indikator", type="text", length=65535, nullable=true)
     */
    private $deskripsiIndikator;

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
     * @var \MasterMateri
     *
     * @ORM\ManyToOne(targetEntity="MasterMateri")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_materi", referencedColumnName="id")
     * })
     */
    private $idMateri;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaIndikator(): ?string
    {
        return $this->namaIndikator;
    }

    public function setNamaIndikator(string $namaIndikator): self
    {
        $this->namaIndikator = $namaIndikator;

        return $this;
    }

    public function getDeskripsiIndikator(): ?string
    {
        return $this->deskripsiIndikator;
    }

    public function setDeskripsiIndikator(?string $deskripsiIndikator): self
    {
        $this->deskripsiIndikator = $deskripsiIndikator;

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

    public function getIdMateri(): ?MasterMateri
    {
        return $this->idMateri;
    }

    public function setIdMateri(?MasterMateri $idMateri): self
    {
        $this->idMateri = $idMateri;

        return $this;
    }


}
