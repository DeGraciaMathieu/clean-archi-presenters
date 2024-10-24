<?php

namespace Three\Domain;

interface Repository
{
    public function find(string $name): string;
}
