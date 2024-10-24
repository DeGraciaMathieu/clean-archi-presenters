<?php

namespace Two\Domain;

interface Repository
{
    public function find(string $name): string;
}
