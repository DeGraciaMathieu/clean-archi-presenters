<?php

namespace Two\Application;

use Two\Application\UseCaseResponse;

interface UseCasePresenter
{
    public function present(UseCaseResponse $response): void;
}
