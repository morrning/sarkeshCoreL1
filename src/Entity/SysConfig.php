<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SysConfigRepository")
 */
class SysConfig
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteName;

    /**
     * @ORM\Column(type="integer")
     */
    private $configCode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    public function setSiteName(?string $siteName): self
    {
        $this->siteName = $siteName;

        return $this;
    }

    public function getConfigCode(): ?int
    {
        return $this->configCode;
    }

    public function setConfigCode(int $configCode): self
    {
        $this->configCode = $configCode;

        return $this;
    }
}
