<?php

declare(strict_types=1);

namespace Lemisoft\SyliusMediaAltPlugin\Entity;

use Doctrine\ORM\Mapping\Column;

trait PluginImageTrait
{
    #[Column(name: "alt", type: "string", nullable: true)]
    private ?string $alt = null;

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): void
    {
        $this->alt = $alt;
    }
}
