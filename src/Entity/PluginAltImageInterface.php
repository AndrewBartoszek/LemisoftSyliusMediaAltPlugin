<?php

declare(strict_types=1);

namespace Lemisoft\SyliusMediaAltPlugin\Entity;

interface PluginAltImageInterface
{
    public function getAlt(): ?string;

    public function setAlt(?string $alt): void;
}
