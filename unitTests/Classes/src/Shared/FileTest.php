<?php


require_once 'testDataFileIterator.php';

class FileTest extends PHPUnit_Framework_TestCase
{
    public function testGetUseUploadTempDirectory()
    {
        $expectedResult = false;

        $result = call_user_func(array('PHPExcel_Shared_File','getUseUploadTempDirectory'));
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUseUploadTempDirectory()
    {
        $useUploadTempDirectoryValues = array(
            true,
            false,
        );

        foreach ($useUploadTempDirectoryValues as $useUploadTempDirectoryValue) {
            call_user_func(array('PHPExcel_Shared_File','setUseUploadTempDirectory'), $useUploadTempDirectoryValue);

            $result = call_user_func(array('PHPExcel_Shared_File','getUseUploadTempDirectory'));
            $this->assertEquals($useUploadTempDirectoryValue, $result);
        }
    }
}
