<?php
declare(strict_types=1);

namespace Iban\Tests\Iban;

use Iban\Exception\InvalidCountryCodeException;
use Iban\IbanCountryCode;
use PHPUnit\Framework\TestCase;

class IbanCountryCodeTest extends TestCase
{
    public function testGivenAnEuropeanCountryCodeShouldCreateWell()
    {
        $ibanCountryCode = IbanCountryCode::fromString('ES');

        $this->assertInstanceOf(IbanCountryCode::class, $ibanCountryCode);
        $this->assertEquals('ES', $ibanCountryCode->code());
    }

    public function testGivenAnInvalidCountryCodeShouldThrowException()
    {
        $this->expectException(InvalidCountryCodeException::class);

        IbanCountryCode::fromString('HOLA');
    }
}
