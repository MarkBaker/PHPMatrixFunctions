<?php

namespace MatrixTest\Operations;

use MatrixTest\BaseTestAbstract;
use function Matrix\add;

class addTest extends BaseTestAbstract
{
    protected static $operationName = 'addition';

    /**
     * @dataProvider dataProvider
     */
    public function testAdditionFunction($expected, $value1, $value2)
    {
        $result = add($value1, $value2);

        //    Must return an object of the correct type...
        $this->assertIsMatrixObject($result);
        //    ... containing the correct data
        $this->assertMatrixValues($result, count($expected), count($expected[0]), $expected);
    }

    public function dataProvider()
    {
        return [
            [
                [[-1, 6], [-3, 12]],
                [[1, 2], [3, 4]], [[-2, 4], [-6, 8]],
            ],
        ];
    }
}
