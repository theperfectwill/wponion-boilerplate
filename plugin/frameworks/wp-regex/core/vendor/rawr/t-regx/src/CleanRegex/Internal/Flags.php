<?php
namespace TRegx\CleanRegex\Internal;

class Flags
{
    /** @var string */
    private $flags;

    public function __construct(string $flags)
    {
        $this->flags = $flags;
    }

    public static function empty(): Flags
    {
        return new Flags('');
    }

    public static function from(?string $flagsString): Flags
    {
        return new Flags($flagsString ?? '');
    }

    public function isExtended(): bool
    {
        return \strPos($this->flags, 'x') !== false;
    }

    public function __toString(): string
    {
        return $this->flags;
    }
}
