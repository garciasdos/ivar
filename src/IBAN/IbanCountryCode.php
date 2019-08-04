<?php
declare(strict_types=1);

namespace Iban;

use Iban\Exception\InvalidCountryCodeException;

use function in_array;

class IbanCountryCode
{
    private const ALLOWED_CODES = [
        'DE' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'AT' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'BE' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'BG' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'CY' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'HR' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'DK' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'SK' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'SI' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'ES' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'EE' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'FI' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'FR' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'GR' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'HU' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'IE' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'IT' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'LV' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'LT' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'LU' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'MT' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'NL' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'PL' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'PT' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'GB' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'CZ' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'RO' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
        'SE' => [
            'bankCode',
            'accountNumber',
            'officeCode',
            'accountTypeCode',
            'swiftCodeInitials'
        ],
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

    public function equals(IbanCountryCode $ibanCountryCode): bool
    {
        return $this->code === $ibanCountryCode->code();
    }
}