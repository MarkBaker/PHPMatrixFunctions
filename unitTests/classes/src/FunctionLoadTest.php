<?php

namespace MatrixTest;

class FunctionLoadTest extends BaseTestAbstract
{
    /**
     * @dataProvider functionFileProvider
     */
    public function testOnlyLoadFunctionOnce(string $filename): void
    {
        $functionName = basename($filename, '.php');
        if (!function_exists(__NAMESPACE__ . '\\' . $functionName)) {
            include $filename;
        }

        include $filename;
        self::assertIsString($filename);
    }

    public function functionFileProvider(): array
    {
        $functionFolderName = realpath(__DIR__ . '/../../../classes/src/Functions');
        $functionFileList = glob($functionFolderName . '/*.php');
        $functionFileList = array_map(
            function ($filename) {
                return [$filename];
            },
            $functionFileList
        );

        return $functionFileList;
    }

    /**
     * @dataProvider operationFileProvider
     */
    public function testOnlyLoadOperationOnce(string $filename): void
    {
        $operationName = basename($filename, '.php');
        if (!function_exists(__NAMESPACE__ . '\\' . $operationName)) {
            include $filename;
        }

        include $filename;
        self::assertIsString($filename);
    }

    public function operationFileProvider(): array
    {
        $functionFolderName = realpath(__DIR__ . '/../../../classes/src/Operations');
        $functionFileList = glob($functionFolderName . '/*.php');
        $functionFileList = array_map(
            function ($filename) {
                return [$filename];
            },
            $functionFileList
        );

        return $functionFileList;
    }
}
