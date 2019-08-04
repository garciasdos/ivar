<?php
declare(strict_types=1);

namespace Iban\Tests\Iban;

use Iban\Exception\InvalidControlDigitException;
use Iban\IbanControlDigit;
use PHPUnit\Framework\TestCase;

class IbanControlDigitsTest extends TestCase
{
    public function testGivenAValidControlDigitNumberShouldInstantiate(): void
    {
        $ibanControlDigit = IbanControlDigit::fromString('15');

        $this->assertInstanceOf(IbanControlDigit::class, $ibanControlDigit);
        $this->assertSame('15', $ibanControlDigit->value());
    }

    public function testGivenAnInvalidControlDigitShouldThrowException(): void
    {
        $this->expectException(InvalidControlDigitException::class);

        IbanControlDigit::fromString('AB');
    }

    public function testGivenAValidIntControlDigitShouldInstantiate(): void
    {
        $ibanControlDigit = IbanControlDigit::fromInt(15);

        $this->assertInstanceOf(IbanControlDigit::class, $ibanControlDigit);
        $this->assertSame('15', $ibanControlDigit->value());
    }

}
