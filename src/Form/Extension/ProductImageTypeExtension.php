<?php

declare(strict_types=1);

namespace Lemisoft\SyliusMediaAltPlugin\Form\Extension;

use Lemisoft\SyliusMediaAltPlugin\Form\AltImageTypeEventSubscriber;
use Sylius\Bundle\CoreBundle\Form\Type\Product\ProductImageType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductImageTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('alt', TextType::class, [
                'label'    => '...',
                'required' => false,
            ])
        ->addEventSubscriber(new AltImageTypeEventSubscriber());
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductImageType::class];
    }
}
