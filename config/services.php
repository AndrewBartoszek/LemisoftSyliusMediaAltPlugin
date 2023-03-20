<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Lemisoft\SyliusMediaAltPlugin\Form\Extension\ProductImageTypeExtension;
use Lemisoft\SyliusMediaAltPlugin\Form\Extension\TaxonImageTypeExtension;

return static function (ContainerConfigurator $containerConfigurator) {
    $services = $containerConfigurator->services();
    $services
        ->set(
            'lemisoft.sylius_media_alt_plugin.form.extension.product_image_type_extension',
            ProductImageTypeExtension::class,
        )
        ->tag(
            'form.type_extension',
            ['extended_type' => 'Sylius\Bundle\CoreBundle\Form\Type\Product\ProductImageType'],
        );

    $services
        ->set(
            'lemisoft.sylius_media_alt_plugin.form.extension.taxon_image_type_extension',
            TaxonImageTypeExtension::class,
        )
        ->tag('form.type_extension', ['extended_type' => 'Sylius\Bundle\CoreBundle\Form\Type\Taxon\TaxonImageType']);
};
