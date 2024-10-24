<?php

namespace First\Presenter;

use First\Application\UseCase;
use First\Presenter\HtmlPresenter;
use First\Application\UseCaseRequest;

class HtmlController
{
    public function __invoke(UseCase $useCase): void
    {
        $useCase->handle(
            new UseCaseRequest(
                name: 'John',
            ),
            new HtmlPresenter(),
        );
    }
}
