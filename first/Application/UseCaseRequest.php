<?php

namespace First\Application;

class UseCaseRequest
{
    public function __construct(
        private readonly string $name,
    ) {}

    public function name(): string
    {
        return $this->name;
    }
}
