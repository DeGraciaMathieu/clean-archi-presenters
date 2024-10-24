<?php

namespace Three\Presenter;

use Three\Application\UseCase;
use Three\Presenter\HtmlPresenter;
use Three\Application\UseCaseRequest;

class HtmlController
{
    public function __invoke(UseCase $useCase, HtmlPresenter $presenter): string
    {
        return $useCase->handle(
            new UseCaseRequest(
                name: 'John',
            ),
            $presenter,
        );
    }
}
