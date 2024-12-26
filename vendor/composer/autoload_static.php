<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bc3b87c40ddc35fa70eda9f0f02ae0e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RH\\AdminUtils\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RH\\AdminUtils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RH\\AdminUtils\\ACFCodeField' => __DIR__ . '/../..' . '/src/ACFCodeField.php',
        'RH\\AdminUtils\\ACFOembedCache' => __DIR__ . '/../..' . '/src/ACFOembedCache.php',
        'RH\\AdminUtils\\ACFOembedWhitelist' => __DIR__ . '/../..' . '/src/ACFOembedWhitelist.php',
        'RH\\AdminUtils\\ACFPasswordUtilities' => __DIR__ . '/../..' . '/src/ACFPasswordUtilities.php',
        'RH\\AdminUtils\\ACFRelationshipField' => __DIR__ . '/../..' . '/src/ACFRelationshipField.php',
        'RH\\AdminUtils\\ACFRestrictFieldAccess' => __DIR__ . '/../..' . '/src/ACFRestrictFieldAccess.php',
        'RH\\AdminUtils\\ACFSyncFieldGroups' => __DIR__ . '/../..' . '/src/ACFSyncFieldGroups.php',
        'RH\\AdminUtils\\ACFSyncPostDate' => __DIR__ . '/../..' . '/src/ACFSyncPostDate.php',
        'RH\\AdminUtils\\ACFTextField' => __DIR__ . '/../..' . '/src/ACFTextField.php',
        'RH\\AdminUtils\\AdminBarPublishButton' => __DIR__ . '/../..' . '/src/AdminBarPublishButton.php',
        'RH\\AdminUtils\\AdminDashboard' => __DIR__ . '/../..' . '/src/AdminDashboard.php',
        'RH\\AdminUtils\\AdminUtils' => __DIR__ . '/../..' . '/src/AdminUtils.php',
        'RH\\AdminUtils\\AttachmentsHelper' => __DIR__ . '/../..' . '/src/AttachmentsHelper.php',
        'RH\\AdminUtils\\DisableComments' => __DIR__ . '/../..' . '/src/DisableComments.php',
        'RH\\AdminUtils\\EditorInChief' => __DIR__ . '/../..' . '/src/EditorInChief.php',
        'RH\\AdminUtils\\EditorsAddUsers' => __DIR__ . '/../..' . '/src/EditorsAddUsers.php',
        'RH\\AdminUtils\\Environments' => __DIR__ . '/../..' . '/src/Environments.php',
        'RH\\AdminUtils\\ForceLowercaseURLs' => __DIR__ . '/../..' . '/src/ForceLowercaseURLs.php',
        'RH\\AdminUtils\\Misc' => __DIR__ . '/../..' . '/src/Misc.php',
        'RH\\AdminUtils\\PageRestrictions' => __DIR__ . '/../..' . '/src/PageRestrictions.php',
        'RH\\AdminUtils\\PageRestrictionsMetaBox' => __DIR__ . '/../..' . '/src/PageRestrictionsMetaBox.php',
        'RH\\AdminUtils\\PageRestrictionsOptionsPage' => __DIR__ . '/../..' . '/src/PageRestrictionsOptionsPage.php',
        'RH\\AdminUtils\\PendingReviews' => __DIR__ . '/../..' . '/src/PendingReviews.php',
        'RH\\AdminUtils\\QueryOptimizer' => __DIR__ . '/../..' . '/src/QueryOptimizer.php',
        'RH\\AdminUtils\\RemoveAds' => __DIR__ . '/../..' . '/src/RemoveAds.php',
        'RH\\AdminUtils\\Singleton' => __DIR__ . '/../..' . '/src/Singleton.php',
        'RH\\AdminUtils\\TinyMcePlugins' => __DIR__ . '/../..' . '/src/TinyMcePlugins.php',
        'RH\\AdminUtils\\UpdateChecker' => __DIR__ . '/../..' . '/src/UpdateChecker.php',
        'RH\\AdminUtils\\WpCliCommands' => __DIR__ . '/../..' . '/src/WpCliCommands.php',
        'RH\\AdminUtils\\WpscClearCache' => __DIR__ . '/../..' . '/src/WpscClearCache.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bc3b87c40ddc35fa70eda9f0f02ae0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bc3b87c40ddc35fa70eda9f0f02ae0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bc3b87c40ddc35fa70eda9f0f02ae0e::$classMap;

        }, null, ClassLoader::class);
    }
}