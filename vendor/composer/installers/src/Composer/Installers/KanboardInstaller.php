<?php

namespace RH\AdminUtils\Scoped\Composer\Installers;

/**
 *
 * Installer for kanboard plugins
 *
 * kanboard.net
 *
 * Class KanboardInstaller
 * @package Composer\Installers
 */
class KanboardInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('plugin' => 'plugins/{$name}/');
}
