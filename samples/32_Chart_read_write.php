<?php

require __DIR__ . '/Header.php';

$inputFileType = 'Excel2007';
$inputFileNames = __DIR__ . '/templates/32readwrite*[0-9].xlsx';

if ((isset($argc)) && ($argc > 1)) {
    $inputFileNames = [];
    for ($i = 1; $i < $argc; ++$i) {
        $inputFileNames[] = __DIR__ . '/templates/' . $argv[$i];
    }
} else {
    $inputFileNames = glob($inputFileNames);
}
foreach ($inputFileNames as $inputFileName) {
    $inputFileNameShort = basename($inputFileName);

    if (!file_exists($inputFileName)) {
        $helper->log('File ' . $inputFileNameShort . ' does not exist');
        continue;
    }
    $reader = \PhpSpreadsheet\IOFactory::createReader($inputFileType);
    $reader->setIncludeCharts(true);
    $callStartTime = microtime(true);
    $spreadsheet = $reader->load($inputFileName);
    $helper->logRead($inputFileType, $inputFileName, $callStartTime);

    $helper->log('Iterate worksheets looking at the charts');
    foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
        $sheetName = $worksheet->getTitle();
        $helper->log('Worksheet: ', $sheetName);

        $chartNames = $worksheet->getChartNames();
        if (empty($chartNames)) {
            $helper->log('    There are no charts in this worksheet');
        } else {
            natsort($chartNames);
            foreach ($chartNames as $i => $chartName) {
                $chart = $worksheet->getChartByName($chartName);
                if (!is_null($chart->getTitle())) {
                    $caption = '"' . implode(' ', $chart->getTitle()->getCaption()) . '"';
                } else {
                    $caption = 'Untitled';
                }
                $helper->log('    ' . $chartName, ' - ', $caption);
                $indentation = str_repeat(' ', strlen($chartName) + 3);
                $groupCount = $chart->getPlotArea()->getPlotGroupCount();
                if ($groupCount == 1) {
                    $chartType = $chart->getPlotArea()->getPlotGroupByIndex(0)->getPlotType();
                    $helper->log($indentation . '    ' . $chartType);
                } else {
                    $chartTypes = [];
                    for ($i = 0; $i < $groupCount; ++$i) {
                        $chartTypes[] = $chart->getPlotArea()->getPlotGroupByIndex($i)->getPlotType();
                    }
                    $chartTypes = array_unique($chartTypes);
                    if (count($chartTypes) == 1) {
                        $chartType = 'Multiple Plot ' . array_pop($chartTypes);
                        $helper->log($indentation . '    ' . $chartType);
                    } elseif (count($chartTypes) == 0) {
                        $helper->log($indentation . '    *** Type not yet implemented');
                    } else {
                        $helper->log($indentation . '    Combination Chart');
                    }
                }
            }
        }
    }

    $outputFileName = $helper->getFilename($inputFileName);
    $writer = \PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Excel2007');
    $writer->setIncludeCharts(true);
    $callStartTime = microtime(true);
    $writer->save($outputFileName);
    $helper->logWrite($writer, $outputFileName, $callStartTime);

    $spreadsheet->disconnectWorksheets();
    unset($spreadsheet);
}
