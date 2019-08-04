<?php
declare(strict_types=1);

namespace Iban;

class IbanCodeLengths
{
    private const LENGTHS_BY_COUNTRY = [
        'DE' => [
            'bankCode' => 8,
            'accountNumber' => 10,
            'officeCode' => 0,
            'accountTypeCode' => 0,
            'swiftCodeInitials' => 0,
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

    public static function fromCountryCode(IbanCountryCode $countryCode): array
    {
        return self::LENGTHS_BY_COUNTRY[$countryCode->code()];
    }
}