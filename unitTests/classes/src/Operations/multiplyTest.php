<?php

namespace MatrixTest\Operations;

use MatrixTest\BaseTestAbstract;
use function Matrix\multiply;

class multiplyTest extends BaseTestAbstract
{
    protected static $operationName = 'multiplication';

    /**
     * @dataProvider dataProvider
     */
    public function testMultiplicationFunction($expected, $value1, $value2)
    {
        $result = multiply($value1, $value2);

        //    Must return an object of the correct type...
        $this->assertIsMatrixObject($result);
        //    ... containing the correct data
        $this->assertMatrixValues($result, count($expected), count($expected[0]), $expected);
    }

    public function dataProvider()
    {
        return [
            [
                [[-14, 20], [-30, 44]],
                [[1, 2], [3, 4]], [[-2, 4], [-6, 8]],
            ],
        ];
    }
}
