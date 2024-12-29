<?php

namespace RH\AdminUtils\Scoped\Composer\Installers;

class CiviCrmInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('ext' => 'ext/{$name}/');
}
