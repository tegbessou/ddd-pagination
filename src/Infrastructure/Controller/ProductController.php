<?php

declare(strict_types=1);

namespace App\Infrastructure\Controller;

use App\Infrastructure\Dto\PaginatedProduct;
use App\Infrastructure\Query\ListProductsWithNameQuery;
use App\Infrastructure\Query\QueryBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ProductController extends AbstractController
{
    public function __construct(
        private readonly QueryBus $queryBus,
    ) {}

    public function __invoke(Request $request): Response
    {
        $products = $this->queryBus->ask(
            new ListProductsWithNameQuery(
                $request->query->get('name'),
                (int) $request->query->get('itemPerPage'),
                (int) $request->query->get('page'),
            )
        );

        $paginatedProduct = new PaginatedProduct(
            products: $products,
            total: count($products),
            page: (int) $request->query->get('page'),
        );

        return $this->json($paginatedProduct);
    }
}