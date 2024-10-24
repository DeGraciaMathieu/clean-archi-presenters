<?php

namespace Three\Application;

use Three\Application\UseCaseResponse;

interface UseCasePresenter
{
    public function present(UseCaseResponse $response): string;
    public function userNotFound(): string;
}
