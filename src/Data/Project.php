<?php

declare(strict_types=1);

namespace BombenProdukt\License\Data;

final readonly class Project
{
    public function __construct(
        private string $value,
    ) {
        //
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
