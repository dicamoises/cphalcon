<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Cli\Cli\Dispatcher;

use CliTester;

class GetActionNameCest
{
    /**
     * Tests Phalcon\Cli\Dispatcher :: getActionName()
     *
     * @param CliTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cliDispatcherGetActionName(CliTester $I)
    {
        $I->wantToTest("Cli\Dispatcher - getActionName()");
        $I->skipTest("Need implementation");
    }
}