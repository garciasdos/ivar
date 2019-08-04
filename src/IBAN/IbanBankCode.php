<?php
declare(strict_types=1);

namespace Iban;

use Iban\Exception\InvalidBankCodeLengthException;

class IbanBankCode
{
    /** @var string */
    private $value;

    /** @var int */
    private $length;

    /** @throws InvalidBankCodeLengthException */
    public function __construct(string $value, int $length)
    {
        if (strlen($value) !== $length) {
            throw new InvalidBankCodeLengthException();
        }

        $this->value = $value;
        $this->length = $length;
    }

    public function value(): string
    {
        return $this->value;
    }


}