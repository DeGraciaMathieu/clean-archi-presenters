<?php

namespace First\Application;

use First\Application\UseCaseResponse;

interface UseCasePresenter
{
    public function present(UseCaseResponse $response): void;
    public function userNotFound(): void;
}
