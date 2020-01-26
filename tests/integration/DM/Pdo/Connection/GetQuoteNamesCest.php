<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Integration\DM\Pdo\Connection;

use IntegrationTester;
use Phalcon\DM\Pdo\Connection;

class GetQuoteNamesCest
{
    /**
     * Integration Tests Phalcon\DM\Pdo\Connection :: getQuoteNames()
     *
     * @since  2020-01-20
     */
    public function dMPdoConnectionGetQuoteNames(IntegrationTester $I)
    {
        $I->wantToTest('DM\Pdo\Connection - getQuoteNames()');

        /** @var Connection $connection */
        $connection = $I->getConnection();

        $mysql   = [
            "prefix"  => '`',
            "suffix"  => '`',
            "find"    => '`',
            "replace" => '``',
        ];
        $sqlsrv  = [
            "prefix"  => '[',
            "suffix"  => ']',
            "find"    => ']',
            "replace" => '][',
        ];
        $default = [
            "prefix"  => '"',
            "suffix"  => '"',
            "find"    => '"',
            "replace" => '""',
        ];

        $actual = $connection->getQuoteNames('unknown');
        $I->assertEquals($default, $actual);

        $actual = $connection->getQuoteNames('mysql');
        $I->assertEquals($mysql, $actual);

        $actual = $connection->getQuoteNames('sqlsrv');
        $I->assertEquals($sqlsrv, $actual);
    }
}
