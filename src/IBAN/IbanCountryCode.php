<?php
declare(strict_types=1);

namespace Iban;

use Iban\Exception\InvalidCountryCodeException;

class IbanCountryCode
{
    private const ALLOWED_CODES = [
        'DE',
        'AT',
        'BE',
        'BG',
        'CY',
        'HR',
        'DK',
        'SK',
        'SI',
        'ES',
        'EE',
        'FI',
        'FR',
        'GR',
        'HU',
        'IE',
        'IT',
        'LV',
        'LT',
        'LU',
        'MT',
        'NL',
        'PL',
        'PT',
        'GB',
        'CZ',
        'RO',
        'SE',
    ];

    /** @var string */
    private $code;

    private function __construct(string $code)
    {
        $this->code = $code;
    }

    /** @throws InvalidCountryCodeException */
    public static function fromString(string $code): self
    {
        if (!self::isValid($code)) {
            throw new InvalidCountryCodeException();
        }

        return new self($code);
    }

    private static function isValid(string $code): bool
    {
        return in_array($code, self::ALLOWED_CODES, true);
    }

    public function code(): string
    {
        return $this->code;
    }
}