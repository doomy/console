<?php

declare(strict_types=1);

namespace Doomy\Console\Output\Dummy;

use Symfony\Component\Console\Formatter\OutputFormatterStyleInterface;

class DummyOutputFormatterStyle implements OutputFormatterStyleInterface
{
    public function setForeground(string $color = null)
    {
    }

    public function setBackground(string $color = null)
    {
    }

    public function setOption(string $option)
    {
    }

    public function unsetOption(string $option)
    {
    }

    public function setOptions(array $options)
    {
    }

    public function apply(string $text): string
    {
    }
}