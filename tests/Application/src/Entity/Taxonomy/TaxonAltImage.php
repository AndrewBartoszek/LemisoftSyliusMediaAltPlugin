<?php

declare(strict_types=1);

namespace Lemisoft\Tests\SyliusMediaAltPlugin\Application\src\Entity\Taxonomy;

use Doctrine\ORM\Mapping as ORM;
use Lemisoft\SyliusMediaAltPlugin\Entity\PluginAltImageInterface;
use Lemisoft\SyliusMediaAltPlugin\Entity\Taxonomy\TaxonImageTrait;
use Sylius\Component\Core\Model\TaxonImage as BaseTaxonImage;

#[ORM\Entity()]
#[ORM\Table(name:"sylius_taxon_image")]
class TaxonAltImage extends BaseTaxonImage implements PluginAltImageInterface
{
    use TaxonImageTrait;
}
