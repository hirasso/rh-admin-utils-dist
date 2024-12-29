<?php

namespace YahnisElsts\PluginUpdateChecker\v5p5;

use YahnisElsts\PluginUpdateChecker\v5\PucFactory as MajorFactory;
use YahnisElsts\PluginUpdateChecker\v5p5\PucFactory as MinorFactory;
require __DIR__ . '/Puc/v5p5/Autoloader.php';
new \YahnisElsts\PluginUpdateChecker\v5p5\Autoloader();
require __DIR__ . '/Puc/v5p5/PucFactory.php';
require __DIR__ . '/Puc/v5/PucFactory.php';
//Register classes defined in this version with the factory.
foreach (array('RH\AdminUtils\Scoped\Plugin\UpdateChecker' => \YahnisElsts\PluginUpdateChecker\v5p5\Plugin\UpdateChecker::class, 'RH\AdminUtils\Scoped\Theme\UpdateChecker' => \YahnisElsts\PluginUpdateChecker\v5p5\Theme\UpdateChecker::class, 'RH\AdminUtils\Scoped\Vcs\PluginUpdateChecker' => \YahnisElsts\PluginUpdateChecker\v5p5\Vcs\PluginUpdateChecker::class, 'RH\AdminUtils\Scoped\Vcs\ThemeUpdateChecker' => \YahnisElsts\PluginUpdateChecker\v5p5\Vcs\ThemeUpdateChecker::class, 'GitHubApi' => \YahnisElsts\PluginUpdateChecker\v5p5\Vcs\GitHubApi::class, 'BitBucketApi' => \YahnisElsts\PluginUpdateChecker\v5p5\Vcs\BitBucketApi::class, 'GitLabApi' => \YahnisElsts\PluginUpdateChecker\v5p5\Vcs\GitLabApi::class) as $pucGeneralClass => $pucVersionedClass) {
    MajorFactory::addVersion($pucGeneralClass, $pucVersionedClass, '5.5');
    //Also add it to the minor-version factory in case the major-version factory
    //was already defined by another, older version of the update checker.
    MinorFactory::addVersion($pucGeneralClass, $pucVersionedClass, '5.5');
}
