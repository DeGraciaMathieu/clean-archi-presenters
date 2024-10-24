<?php

namespace First\Domain;

interface Repository
{
    public function find(string $name): string;
}
