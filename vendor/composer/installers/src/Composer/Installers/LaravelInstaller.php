<?php

namespace RH\AdminUtils\Composer\Installers;

class LaravelInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('library' => 'libraries/{$name}/');
}
