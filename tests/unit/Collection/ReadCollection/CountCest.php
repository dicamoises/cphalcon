<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Collection\ReadCollection;

use Phalcon\Collection\ReadCollection;
use UnitTester;

class CountCest
{
    /**
     * Tests Phalcon\ReadCollection :: count()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function collectionCount(UnitTester $I)
    {
        $I->wantToTest('ReadCollection - count()');

        $data = [
            'one'   => 'two',
            'three' => 'four',
            'five'  => 'six',
        ];

        $collection = new ReadCollection($data);

        $I->assertCount(
            3,
            $collection->toArray()
        );

        $I->assertEquals(
            3,
            $collection->count()
        );
    }
}
