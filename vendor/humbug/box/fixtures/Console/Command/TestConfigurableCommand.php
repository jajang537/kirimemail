<?php

declare(strict_types=1);

/*
 * This file is part of the box project.
 *
 * (c) Kevin Herrera <kevin@herrera.io>
 *     Théo Fidry <theo.fidry@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KevinGH\Box\Console\Command;

use KevinGH\Box\Console\IO\IO;

class TestConfigurableCommand extends ConfigurableBaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected function executeCommand(IO $io): int
    {
        return 0;
    }
}
