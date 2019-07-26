<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical;
use PHPUnit\Framework\TestCase;

class GammaLnTest extends TestCase
{
    public function setUp()
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerGAMMALN
     *
     * @param mixed $expectedResult
     */
    public function testGAMMALN($expectedResult, ...$args)
    {
        $result = Statistical::GAMMALN(...$args);
        $this->assertEquals($expectedResult, $result, '', 1E-12);
    }

    public function providerGAMMALN()
    {
        return require 'data/Calculation/Statistical/GAMMALN.php';
    }
}
