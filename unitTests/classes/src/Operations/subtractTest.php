<?php

namespace MatrixTest\Operations;

use MatrixTest\BaseTestAbstract;
use function Matrix\subtract;

class subtractTest extends BaseTestAbstract
{
    protected static $operationName = 'subtraction';

    /**
     * @dataProvider dataProvider
     */
    public function testSubtractionFunction($expected, $value1, $value2)
    {
        $result = subtract($value1, $value2);

        //    Must return an object of the correct type...
        $this->assertIsMatrixObject($result);
        //    ... containing the correct data
        $this->assertMatrixValues($result, count($expected), count($expected[0]), $expected);
    }

    public function dataProvider()
    {
        return [
            [
                [[3, -2], [9, -4]],
                [[1, 2], [3, 4]], [[-2, 4], [-6, 8]],
            ],
        ];
    }
}
