<?php

declare(strict_types=1);

namespace Doomy\Console\Output\Dummy;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyleInterface;

class DummyOutputFormatter implements OutputFormatterInterface
{
    public function __construct(private readonly DummyOutputFormatterStyle $dummyOutputFormatterStyle) {}

    public function setDecorated(bool $decorated)
    {
    }

    public function isDecorated(): bool
    {
    }

    public function setStyle(string $name, OutputFormatterStyleInterface $style)
    {
    }

    public function hasStyle(string $name): bool
    {
        return false;
    }

    public function getStyle(string $name): OutputFormatterStyleInterface
    {
        return $this->dummyOutputFormatterStyle;
    }

    public function format(?string $message): ?string
    {
        return null;
    }
}