<?php

namespace First\Application;

class UseCaseResponse
{
    public function __construct(
        private readonly string $user,
    ) {}

    public function user(): string
    {
        return $this->user;
    }
}
