<?php

namespace Three\Infrastructure;

interface View
{
    public function render(string $view, array $data = []): string;
}
