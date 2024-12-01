<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Event\EventInterface;

abstract class Aggregate
{
    private array $events = [];

    public function record(
        EventInterface $event,
    ): void
    {
        $this->events[] = $event;
    }

    public function getEvents(): array
    {
        return $this->events;
    }
}