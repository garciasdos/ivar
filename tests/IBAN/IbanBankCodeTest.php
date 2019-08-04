<?php
declare(strict_types=1);

namespace Iban\Tests\Iban;

use Iban\Exception\InvalidBankCodeLengthException;
use Iban\IbanBankCode;
use PHPUnit\Framework\TestCase;

class IbanBankCodeTest extends TestCase
{
    public function testGivenAnIllegalValueShouldThrowException()
    {
        $this->expectException(InvalidBankCodeLengthException::class);

        new IbanBankCode('21345', 4);
    }

    public function testGivenAValidIbanCodeShouldCreateOne()
    {
        $ibanBankCode = new IbanBankCode('2123', 4);

        $this->assertInstanceOf(IbanBankCode::class, $ibanBankCode);
        $this->assertSame('2123', $ibanBankCode->value());
    }
}
