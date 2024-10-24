<?php

namespace Two\Application;

class UseCaseResponse
{
    private string $user;
    private string $errorMessage;

    public function userFound(string $user): void
    {
        $this->user = $user;
    }

    public function userNotFound(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function user(): string
    {
        return $this->user;
    }

    public function anErrorOccurred(): bool
    {
        return (bool) $this->errorMessage;
    }

    public function errorMessage(): string
    {
        return $this->errorMessage;
    }
}
