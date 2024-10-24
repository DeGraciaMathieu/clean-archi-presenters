<?php

namespace First\Presenter;

use First\Application\UseCaseResponse;
use First\Application\UseCasePresenter;

class HtmlPresenter implements UseCasePresenter
{
    public function present(UseCaseResponse $response): void
    {
        //
    }

    public function userNotFound(): void
    {
        //
    }
}
