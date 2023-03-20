<?php

declare(strict_types=1);

namespace Lemisoft\Tests\SyliusMediaAltPlugin\Application\src\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Lemisoft\SyliusMediaAltPlugin\Entity\PluginAltImageInterface;
use Lemisoft\SyliusMediaAltPlugin\Entity\Product\ProductImageTrait;
use Sylius\Component\Core\Model\ProductImage as BaseProductImage;

#[ORM\Entity()]
#[ORM\Table(name:"sylius_product_image")]
class ProductAltImage extends BaseProductImage implements PluginAltImageInterface
{
    use ProductImageTrait;
}
