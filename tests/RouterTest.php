<?php

use League\Route\Router;
use PHPFox\Router\Factory\RouterFactory;
use function PHPUnit\Framework\assertInstanceOf;

it('builds a new router', function () {
    assertInstanceOf(
        expected: Router::class,
        actual: RouterFactory::build(),
    );
});
