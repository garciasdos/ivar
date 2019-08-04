<?php
declare(strict_types=1);

namespace Iban;

use Iban\Exception\InvalidControlDigitException;

class IbanControlDigit
{
    private const MIN_VALUE = 0;

    private const MAX_VALUE = 99;

    /** @var string */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /** @throws InvalidControlDigitException */
    public static function fromString(string $value): self
    {
        if (self::isValid($value)) {
            return new self($value);
        }

        throw new InvalidControlDigitException();
    }

    /** @throws InvalidControlDigitException */
    public static function fromInt(int $value): self
    {
        if (self::isValid((string)$value)) {
            return new self((string)$value);
        }

        throw new InvalidControlDigitException();
    }

    public function value(): string
    {
        return $this->value;
    }

    private static function isValid(string $value): bool
    {
        return  (ctype_digit($value) && self::MIN_VALUE <= $value) && ($value <= self::MAX_VALUE);
    }
}