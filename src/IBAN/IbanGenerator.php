<?php
declare(strict_types=1);

namespace Iban;

class IbanGenerator
{
    public function create(string $iban): Iban
    {
        $countryCode = $this->extractCountryCode($iban);


    }

    private function extractCountryCode(string $iban): IbanCountryCode
    {
        return IbanCountryCode::fromString(substr($iban,0,2));
    }
}