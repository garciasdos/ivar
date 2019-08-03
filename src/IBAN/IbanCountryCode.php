<?php
declare(strict_types=1);

namespace Iban;

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

    public static function fromString(string $code)
    {
        self::validateCountryCode($code);

        return new self($code);
    }

    private static function validateCountryCode(string $code)
    {
        return in_array($code, self::ALLOWED_CODES, true);
    }

    public function code()
    {
        return $this->code;
    }
}