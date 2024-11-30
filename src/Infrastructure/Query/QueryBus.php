<?php

declare(strict_types=1);

namespace App\Infrastructure\Query;

final readonly class QueryBus
{
    private array $handlers;

    public function __construct(
    ) {
        $this->handlers = [
            ListProductsWithNameQuery::class => ListProductsWithNameQueryHandler::class,
        ];
    }

    public function ask(object $query): mixed
    {
        $queryClass = get_class($query);

        if (!isset($this->handlers[$queryClass])) {
            throw new \RuntimeException(sprintf('No handler found for query %s', $queryClass));
        }

        return $this->handlers[$queryClass]($query);
    }
}