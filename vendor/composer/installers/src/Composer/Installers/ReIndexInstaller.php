<?php

namespace RH\AdminUtils\Scoped\Composer\Installers;

class ReIndexInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('theme' => 'themes/{$name}/', 'plugin' => 'plugins/{$name}/');
}
