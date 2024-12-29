<?php

namespace RH\AdminUtils\Scoped\Composer\Installers;

use RH\AdminUtils\Scoped\Composer\Composer;
use RH\AdminUtils\Scoped\Composer\IO\IOInterface;
use RH\AdminUtils\Scoped\Composer\Plugin\PluginInterface;
class Plugin implements PluginInterface
{
    /** @var Installer */
    private $installer;
    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($this->installer);
    }
    public function deactivate(Composer $composer, IOInterface $io): void
    {
        $composer->getInstallationManager()->removeInstaller($this->installer);
    }
    public function uninstall(Composer $composer, IOInterface $io): void
    {
    }
}
