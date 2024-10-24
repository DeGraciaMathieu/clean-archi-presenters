<?php

namespace Two\Presenter;

use Two\Application\UseCaseResponse;
use Two\Application\UseCasePresenter;

class HtmlPresenter implements UseCasePresenter
{
    public function present(UseCaseResponse $response): void
    {
        if ($response->anErrorOccurred()) {
            die($response->errorMessage());
        }

        echo $response->user();
    }
}
