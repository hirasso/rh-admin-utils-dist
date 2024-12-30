<?php

namespace RH\AdminUtils\Scoped\Composer\Installers;

class PuppetInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('module' => 'modules/{$name}/');
}
