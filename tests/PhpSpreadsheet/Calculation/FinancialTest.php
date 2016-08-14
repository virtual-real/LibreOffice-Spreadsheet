<?php

namespace PhpSpreadsheet\Tests\Calculation;

use PHPExcel\Calculation\Financial;
use PHPExcel\Calculation\Functions;

class FinancialTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerACCRINT
     * @group fail19
     */
    public function testACCRINT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'ACCRINT'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerACCRINT()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/ACCRINT.data');
    }

    /**
     * @dataProvider providerACCRINTM
     */
    public function testACCRINTM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'ACCRINTM'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerACCRINTM()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/ACCRINTM.data');
    }

    /**
     * @dataProvider providerAMORDEGRC
     */
    public function testAMORDEGRC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'AMORDEGRC'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerAMORDEGRC()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/AMORDEGRC.data');
    }

    /**
     * @dataProvider providerAMORLINC
     */
    public function testAMORLINC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'AMORLINC'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerAMORLINC()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/AMORLINC.data');
    }

    /**
     * @dataProvider providerCOUPDAYBS
     */
    public function testCOUPDAYBS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPDAYBS'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYBS()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPDAYBS.data');
    }

    /**
     * @dataProvider providerCOUPDAYS
     */
    public function testCOUPDAYS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPDAYS'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYS()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPDAYS.data');
    }

    /**
     * @dataProvider providerCOUPDAYSNC
     */
    public function testCOUPDAYSNC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPDAYSNC'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYSNC()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPDAYSNC.data');
    }

    /**
     * @dataProvider providerCOUPNCD
     */
    public function testCOUPNCD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPNCD'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPNCD()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPNCD.data');
    }

    /**
     * @dataProvider providerCOUPNUM
     */
    public function testCOUPNUM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPNUM'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPNUM()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPNUM.data');
    }

    /**
     * @dataProvider providerCOUPPCD
     */
    public function testCOUPPCD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'COUPPCD'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPPCD()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/COUPPCD.data');
    }

    /**
     * @dataProvider providerCUMIPMT
     */
    public function testCUMIPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'CUMIPMT'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCUMIPMT()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/CUMIPMT.data');
    }

    /**
     * @dataProvider providerCUMPRINC
     */
    public function testCUMPRINC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'CUMPRINC'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCUMPRINC()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/CUMPRINC.data');
    }

    /**
     * @dataProvider providerDB
     */
    public function testDB()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'DB'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDB()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/DB.data');
    }

    /**
     * @dataProvider providerDDB
     */
    public function testDDB()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'DDB'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDDB()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/DDB.data');
    }

    /**
     * @dataProvider providerDISC
     */
    public function testDISC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'DISC'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDISC()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/DISC.data');
    }

    /**
     * @dataProvider providerDOLLARDE
     */
    public function testDOLLARDE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'DOLLARDE'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDOLLARDE()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/DOLLARDE.data');
    }

    /**
     * @dataProvider providerDOLLARFR
     */
    public function testDOLLARFR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'DOLLARFR'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDOLLARFR()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/DOLLARFR.data');
    }

    /**
     * @dataProvider providerEFFECT
     */
    public function testEFFECT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'EFFECT'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerEFFECT()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/EFFECT.data');
    }

    /**
     * @dataProvider providerFV
     */
    public function testFV()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'FV'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerFV()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/FV.data');
    }

    /**
     * @dataProvider providerFVSCHEDULE
     */
    public function testFVSCHEDULE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'FVSCHEDULE'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerFVSCHEDULE()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/FVSCHEDULE.data');
    }

    /**
     * @dataProvider providerINTRATE
     */
    public function testINTRATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'INTRATE'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerINTRATE()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/INTRATE.data');
    }

    /**
     * @dataProvider providerIPMT
     */
    public function testIPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'IPMT'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerIPMT()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/IPMT.data');
    }

    /**
     * @dataProvider providerIRR
     */
    public function testIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'IRR'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerIRR()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/IRR.data');
    }

    /**
     * @dataProvider providerISPMT
     */
    public function testISPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'ISPMT'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerISPMT()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/ISPMT.data');
    }

    /**
     * @dataProvider providerMIRR
     */
    public function testMIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'MIRR'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerMIRR()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/MIRR.data');
    }

    /**
     * @dataProvider providerNOMINAL
     */
    public function testNOMINAL()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'NOMINAL'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNOMINAL()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/NOMINAL.data');
    }

    /**
     * @dataProvider providerNPER
     */
    public function testNPER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'NPER'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNPER()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/NPER.data');
    }

    /**
     * @dataProvider providerNPV
     */
    public function testNPV()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'NPV'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNPV()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/NPV.data');
    }

    /**
     * @dataProvider providerPRICE
     * @group fail19
     */
    public function testPRICE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'PRICE'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerPRICE()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/PRICE.data');
    }

    /**
     * @dataProvider providerRATE
     * @group fail19
     */
    public function testRATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'RATE'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerRATE()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/RATE.data');
    }

    /**
     * @dataProvider providerXIRR
     * @group fail19
     */
    public function testXIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array(Financial::class,'XIRR'), $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerXIRR()
    {
        return new \PhpSpreadsheet\Tests\TestDataFileIterator('rawTestData/Calculation/Financial/XIRR.data');
    }
}
