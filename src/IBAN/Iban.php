<?php
declare(strict_types=1);

namespace Iban;

use Symfony\Component\Validator\Constraints as Assert;

class Iban
{
    
    /** @var IbanCountryCode */
    private $countryCode;
    /** @var IbanControlDigit */
    private $controlDigit;
    /** @var IbanBankCode */
    private $bankCode;
    /** @var IbanAccountNumber */
    private $accountNumber;
    /** @var IbanOfficeCode */
    private $officeCode;
    /** @var IbanAccountTypeCode */
    private $accountTypeCode;
    /** @var IbanSwiftCodeInitials */
    private $swiftCodeInitials;

    /**
     * @Assert\Iban(
     *     message="This is not a valid International Bank Account Number (IBAN)."
     * )
     * @Assert\NotBlank(
     *     message="The IBAN cannot be null or empty"
     * )
     * @var string
     */
    private $stringValue;

    private function __construct(IbanCountryCode $countryCode, IbanControlDigit $controlDigit, IbanBankCode $bankCode, IbanAccountNumber $accountNumber, IbanOfficeCode $officeCode, IbanAccountTypeCode $accountTypeCode, IbanSwiftCodeInitials $swiftCodeInitials)
    {
        $this->countryCode = $countryCode;
        $this->controlDigit = $controlDigit;
        $this->bankCode = $bankCode;
        $this->accountNumber = $accountNumber;
        $this->officeCode = $officeCode;
        $this->accountTypeCode = $accountTypeCode;
        $this->swiftCodeInitials = $swiftCodeInitials;
    }

    public static function fromString(string $iban): self
    {
        $countryCode = IbanCountryCode::fromString(substr($iban, 0, 2));
        self::getLengthsByCountryCode($countryCode);


    }

    private static function getLengthsByCountryCode( IbanCountryCode $countryCode): array
    {

    }
}