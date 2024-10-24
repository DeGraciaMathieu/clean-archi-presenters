<?php

namespace Two\Presenter;

use Two\Application\UseCase;
use Two\Presenter\HtmlPresenter;
use Two\Application\UseCaseRequest;

class HtmlController
{
    public function __invoke(UseCase $useCase, HtmlPresenter $presenter): void
    {
        $response = $useCase->handle(
            new UseCaseRequest(
                name: 'John',
            ),
            new HtmlPresenter(),
        );

        $presenter->present($response);
    }
}
