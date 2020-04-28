<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class SechTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerSECH
     *
     * @param mixed $expectedResult
     * @param mixed $angle
     */
    public function testSECH($expectedResult, $angle)
    {
        $result = MathTrig::SECH($angle);
        $this->assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerSECH()
    {
        return require 'data/Calculation/MathTrig/SECH.php';
    }
}
