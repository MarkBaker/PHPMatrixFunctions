<?php

namespace MatrixTest\Operations;

use MatrixTest\BaseTestAbstract;
use function Matrix\divideby;

class dividebyTest extends BaseTestAbstract
{
    protected static $operationName = 'divideby';

    /**
     * @dataProvider dataProvider
     */
    public function testDivideByFunction($expected, $value1, $value2)
    {
        $result = divideby($value1, $value2);

        //    Must return an object of the correct type...
        $this->assertIsMatrixObject($result);
        //    ... containing the correct data
        $this->assertMatrixValues($result, count($expected), count($expected[0]), $expected);
    }

    public function dataProvider()
    {
        return [
            [
                [[2.5, -1.0], [6.0, -2.5]],
                [[1, 2], [3, 4]], [[-2, 4], [-6, 8]],
            ],
        ];
    }
}
