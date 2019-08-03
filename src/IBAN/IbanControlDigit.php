<?php
declare(strict_types=1);

namespace Iban;

use Iban\Exception\InvalidControlDigitException;

class IbanControlDigit
{
    private const MIN_VALUE = 0;

    private const MAX_VALUE = 99;

    /** @var int */
    private $value;

    private function __construct(int $value)
    {
        $this->value = $value;
    }

    /** @throws InvalidControlDigitException */
    public static function fromString(string $value): self
    {
        if (ctype_digit($value) && self::isValid((int)$value)) {
            return new self((int)$value);
        }

        throw new InvalidControlDigitException();
    }

    /** @throws InvalidControlDigitException */
    public static function fromInt(int $value): self
    {
        if (self::isValid($value)) {
            return new self($value);
        }

        throw new InvalidControlDigitException();
    }

    public function value(): int
    {
        return $this->value;
    }

    private static function isValid(int $value): bool
    {
        return  (self::MIN_VALUE <= $value) && ($value <= self::MAX_VALUE);

    }
}