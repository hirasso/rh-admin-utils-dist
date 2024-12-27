<?php

namespace RH\AdminUtils\Composer\Installers;

class ImageCMSInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('template' => 'templates/{$name}/', 'module' => 'application/modules/{$name}/', 'library' => 'application/libraries/{$name}/');
}
