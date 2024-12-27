<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Caster;

use RH\AdminUtils\Scoped\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends Stub
{
    public function __construct(mixed $key, mixed $value)
    {
        $this->value = [Caster::PREFIX_VIRTUAL . 'key' => $key, Caster::PREFIX_VIRTUAL . 'value' => $value];
    }
}
