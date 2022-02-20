<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * @var string
     */
    private $compatibilityMode;

    /**
     * @var string
     */
    private $returnDate;

    protected function setUp(): void
    {
        $this->compatibilityMode = Functions::getCompatibilityMode();
        $this->returnDate = Functions::getReturnDateType();
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);
    }

    protected function tearDown(): void
    {
        Functions::setCompatibilityMode($this->compatibilityMode);
        Functions::setReturnDateType($this->returnDate);
    }

    public function testCompatibilityMode(): void
    {
        $result = Functions::setCompatibilityMode(Functions::COMPATIBILITY_GNUMERIC);
        // Test for a true response for success
        self::assertTrue($result);
        // Test that mode has been changed
        self::assertEquals(Functions::COMPATIBILITY_GNUMERIC, Functions::getCompatibilityMode());
    }

    public function testInvalidCompatibilityMode(): void
    {
        $result = Functions::setCompatibilityMode('INVALIDMODE');
        // Test for a false response for failure
        self::assertFalse($result);
        // Test that mode has not been changed
        self::assertEquals(Functions::COMPATIBILITY_EXCEL, Functions::getCompatibilityMode());
    }

    public function testReturnDateType(): void
    {
        $result = Functions::setReturnDateType(Functions::RETURNDATE_PHP_OBJECT);
        // Test for a true response for success
        self::assertTrue($result);
        // Test that mode has been changed
        self::assertEquals(Functions::RETURNDATE_PHP_OBJECT, Functions::getReturnDateType());
    }

    public function testInvalidReturnDateType(): void
    {
        $result = Functions::setReturnDateType('INVALIDTYPE');
        // Test for a false response for failure
        self::assertFalse($result);
        // Test that mode has not been changed
        self::assertEquals(Functions::RETURNDATE_EXCEL, Functions::getReturnDateType());
    }

    public function testDUMMY(): void
    {
        $result = Functions::DUMMY();
        self::assertEquals('#Not Yet Implemented', $result);
    }

    public function testDIV0(): void
    {
        $result = ExcelError::DIV0();
        self::assertEquals('#DIV/0!', $result);
    }

    public function testNA(): void
    {
        $result = ExcelError::NA();
        self::assertEquals('#N/A', $result);
    }

    public function testNAN(): void
    {
        $result = ExcelError::NAN();
        self::assertEquals('#NUM!', $result);
    }

    public function testNAME(): void
    {
        $result = ExcelError::NAME();
        self::assertEquals('#NAME?', $result);
    }

    public function testREF(): void
    {
        $result = ExcelError::REF();
        self::assertEquals('#REF!', $result);
    }

    public function testNULL(): void
    {
        $result = Functions::null();
        self::assertEquals('#NULL!', $result);
    }

    public function testVALUE(): void
    {
        $result = ExcelError::VALUE();
        self::assertEquals('#VALUE!', $result);
    }

    /**
     * @dataProvider providerErrorType
     *
     * @param mixed $expectedResult
     */
    public function testErrorType($expectedResult, ...$args): void
    {
        $result = Functions::errorType(...$args);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-8);
    }

    public function providerErrorType(): array
    {
        return require 'tests/data/Calculation/Functions/ERROR_TYPE.php';
    }

    /**
     * @dataProvider providerIfCondition
     *
     * @param mixed $expectedResult
     */
    public function testIfCondition($expectedResult, ...$args): void
    {
        $result = Functions::ifCondition(...$args);
        self::assertEquals($expectedResult, $result);
    }

    public function providerIfCondition(): array
    {
        return require 'tests/data/Calculation/Functions/IF_CONDITION.php';
    }

    public function testDeprecatedIsFormula(): void
    {
        $result = Functions::isFormula('="STRING"');
        self::assertEquals(ExcelError::REF(), $result);
    }

    public function testScalar(): void
    {
        $value = 'scalar';
        $result = Functions::scalar([[$value]]);
        self::assertSame($value, $result);
    }
}
