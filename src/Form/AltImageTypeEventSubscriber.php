<?php

declare(strict_types=1);

namespace Lemisoft\SyliusMediaAltPlugin\Form;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AltImageTypeEventSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    public function preSubmit(FormEvent $event): void
    {
        /** @var array $data */
        $data = $event->getData();

        if (
            isset($data['alt']) &&
            in_array($data['alt'], [null, ''], true) &&
            isset($data['file']) &&
            $data['file'] instanceof UploadedFile
        ) {
            $file = $data['file'];
            $data['alt'] = $file->getClientOriginalName();
        }

        $event->setData($data);
    }
}
