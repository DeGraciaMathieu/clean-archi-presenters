<?php

namespace Three\Presenter;

use Three\Application\UseCaseResponse;

class HtmlViewModel
{
    public function __construct(
        private UseCaseResponse $response,
    ) {}

    public function user(): string
    {
        return $this->response->user();
    }
}
