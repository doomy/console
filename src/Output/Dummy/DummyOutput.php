<?php

declare(strict_types=1);

namespace Doomy\Console\Output\Dummy;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DummyOutput implements OutputInterface
{
    public function __construct(private readonly DummyOutputFormatter $dummyOutputFormatter)
    {
    }

    public function write(iterable|string $messages, bool $newline = false, int $options = 0)
    {
    }

    public function writeln(iterable|string $messages, int $options = 0)
    {
    }

    public function setVerbosity(int $level)
    {
    }

    public function getVerbosity(): int
    {
        return 0;
    }

    public function isQuiet(): bool
    {
        return false;
    }

    public function isVerbose(): bool
    {
        return false;
    }

    public function isVeryVerbose(): bool
    {
        return false;
    }

    public function isDebug(): bool
    {
        return false;
    }

    public function setDecorated(bool $decorated)
    {
    }

    public function isDecorated(): bool
    {
        return false;
    }

    public function setFormatter(OutputFormatterInterface $formatter)
    {
    }

    public function getFormatter(): OutputFormatterInterface
    {
        return $this->dummyOutputFormatter;
    }
}