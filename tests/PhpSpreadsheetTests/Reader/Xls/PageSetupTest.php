<?php

namespace PhpOffice\PhpSpreadsheetTests\Reader\Xls;

use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PHPUnit\Framework\TestCase;

class PageSetupTest extends TestCase
{
    private const MARGIN_PRECISION = 0.00000001;

    private const MARGIN_UNIT_CONVERSION = 2.54;         // Inches to cm

    /**
     * @var Spreadsheet $spreadsheet
     */
    private $spreadsheet;

    public function setup(): void
    {
        $filename = 'tests/data/Reader/XLS/PageSetup.xls';
        $reader = new Xls();
        $this->spreadsheet = $reader->load($filename);
    }

    public function testPageSetup()
    {
        $assertions = $this->pageSetupAssertions();

        foreach ($this->spreadsheet->getAllSheets() as $worksheet) {
            if (!array_key_exists($worksheet->getTitle(), $assertions)) {
                continue;
            }

            $sheetAssertions = $assertions[$worksheet->getTitle()];
            foreach ($sheetAssertions as $test => $expectedResult) {
                $testMethodName = 'get' . ucfirst($test);
                $actualResult = $worksheet->getPageSetup()->$testMethodName();
                $this->assertSame(
                    $expectedResult,
                    $actualResult,
                    "Failed assertion for Worksheet '{$worksheet->getTitle()}' {$test}"
                );
            }
        }
    }

    public function testPageMargins()
    {
        $assertions = $this->pageMarginAssertions();

        foreach ($this->spreadsheet->getAllSheets() as $worksheet) {
            if (!array_key_exists($worksheet->getTitle(), $assertions)) {
                continue;
            }

            $sheetAssertions = $assertions[$worksheet->getTitle()];
            foreach ($sheetAssertions as $test => $expectedResult) {
                $testMethodName = 'get' . ucfirst($test);
                $actualResult = $worksheet->getPageMargins()->$testMethodName();
                $this->assertEqualsWithDelta(
                    $expectedResult,
                    $actualResult,
                    self::MARGIN_PRECISION,
                    "Failed assertion for Worksheet '{$worksheet->getTitle()}' {$test} margin"
                );
            }
        }
    }

    public function pageSetupAssertions()
    {
        return [
            'Sheet1' => [
                'orientation' => PageSetup::ORIENTATION_PORTRAIT,
                'scale' => 75,
                'horizontalCentered' => true,
                'verticalCentered' => false,
                'pageOrder' => PageSetup::PAGEORDER_DOWN_THEN_OVER,
            ],
            'Sheet2' => [
                'orientation' => PageSetup::ORIENTATION_LANDSCAPE,
                'scale' => 100,
                'horizontalCentered' => false,
                'verticalCentered' => true,
                'pageOrder' => PageSetup::PAGEORDER_OVER_THEN_DOWN,
            ],
            'Sheet3' => [
                'orientation' => PageSetup::ORIENTATION_PORTRAIT,
                'scale' => 90,
                'horizontalCentered' => true,
                'verticalCentered' => true,
                'pageOrder' => PageSetup::PAGEORDER_DOWN_THEN_OVER,
            ],
            'Sheet4' => [
                // Default Settings
                'orientation' => PageSetup::ORIENTATION_DEFAULT,
                'scale' => 100,
                'horizontalCentered' => false,
                'verticalCentered' => false,
                'pageOrder' => PageSetup::PAGEORDER_DOWN_THEN_OVER,
            ],
        ];
    }

    public function pageMarginAssertions()
    {
        return [
            'Sheet1' => [
                // Here the values are in cm, so we convert to inches for comparison with internal uom
                'top' => 2.4 / self::MARGIN_UNIT_CONVERSION,
                'header' => 0.8 / self::MARGIN_UNIT_CONVERSION,
                'left' => 1.3 / self::MARGIN_UNIT_CONVERSION,
                'right' => 1.3 / self::MARGIN_UNIT_CONVERSION,
                'bottom' => 1.9 / self::MARGIN_UNIT_CONVERSION,
                'footer' => 0.8 / self::MARGIN_UNIT_CONVERSION,
            ],
            'Sheet2' => [
                // Here the values are in cm, so we convert to inches for comparison with internal uom
                'top' => 1.9 / self::MARGIN_UNIT_CONVERSION,
                'header' => 0.8 / self::MARGIN_UNIT_CONVERSION,
                'left' => 1.8 / self::MARGIN_UNIT_CONVERSION,
                'right' => 1.8 / self::MARGIN_UNIT_CONVERSION,
                'bottom' => 1.9 / self::MARGIN_UNIT_CONVERSION,
                'footer' => 0.8 / self::MARGIN_UNIT_CONVERSION,
            ],
            'Sheet3' => [
                // Here the values are in cm, so we convert to inches for comparison with internal uom
                'top' => 2.4 / self::MARGIN_UNIT_CONVERSION,
                'header' => 1.3 / self::MARGIN_UNIT_CONVERSION,
                'left' => 1.8 / self::MARGIN_UNIT_CONVERSION,
                'right' => 1.8 / self::MARGIN_UNIT_CONVERSION,
                'bottom' => 2.4 / self::MARGIN_UNIT_CONVERSION,
                'footer' => 1.3 / self::MARGIN_UNIT_CONVERSION,
            ],
            'Sheet4' => [
                // Default Settings (already in inches for comparison)
                'top' => 0.75,
                'header' => 0.3,
                'left' => 0.7,
                'right' => 0.7,
                'bottom' => 0.75,
                'footer' => 0.3,
            ],
        ];
    }
}
