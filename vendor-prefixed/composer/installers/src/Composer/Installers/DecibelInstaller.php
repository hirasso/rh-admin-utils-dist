<?php

namespace RH\AdminUtils\Composer\Installers;

class DecibelInstaller extends BaseInstaller
{
    /** @var array */
    /** @var array<string, string> */
    protected $locations = array('app' => 'app/{$name}/');
}
