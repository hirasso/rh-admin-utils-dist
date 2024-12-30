<?php

/**
 * Plugin Name: RH Admin Utilities
 * Version: 3.0.2
 * Requires PHP: 8.2
 * Author: Rasso Hilber
 * Description: Admin Utilities for WordPress. Removes plugin ads, adds custom buttons to the admin bar (publish, clear cache), allows editors to add users (except administrators), disables comments. Provides filters to adjust functionality.
 * Author URI: https://rassohilber.com
 * License: GPL-2.0-or-later
 **/
declare (strict_types=1);
namespace RH\AdminUtils;

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Require the composer autoloader
 */
if (is_readable(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}
define('RHAU_PLUGIN_URI', untrailingslashit(plugin_dir_url(__FILE__)));
define('RHAU_PLUGIN_DIR', untrailingslashit(__DIR__));
define('RHAU_TEXT_DOMAIN', 'rh-admin-utils');
/**
 * Initialize main class
 */
\RH\AdminUtils\AdminUtils::getInstance();
/**
 * Make AdminUtils instance available API calls
 *
 * @return AdminUtils
 */
function rhau()
{
    return \RH\AdminUtils\AdminUtils::getInstance();
}
/**
 * Initialize the modules
 */
\RH\AdminUtils\AdminBarPublishButton::getInstance();
\RH\AdminUtils\EditorsAddUsers::getInstance();
\RH\AdminUtils\DisableComments::getInstance();
\RH\AdminUtils\ACFRestrictFieldAccess::init();
\RH\AdminUtils\WpscClearCache::getInstance();
\RH\AdminUtils\PendingReviews::getInstance();
\RH\AdminUtils\ACFPasswordUtilities::init();
\RH\AdminUtils\ACFRelationshipField::init();
\RH\AdminUtils\EditorInChief::getInstance();
\RH\AdminUtils\Environments::getInstance();
\RH\AdminUtils\ACFSyncFieldGroups::init();
\RH\AdminUtils\ACFOembedWhitelist::init();
\RH\AdminUtils\ForceLowercaseURLs::init();
\RH\AdminUtils\AttachmentsHelper::init();
\RH\AdminUtils\RemoveAds::getInstance();
\RH\AdminUtils\PageRestrictions::init();
\RH\AdminUtils\ACFSyncPostDate::init();
\RH\AdminUtils\ACFOembedCache::init();
\RH\AdminUtils\QueryOptimizer::init();
\RH\AdminUtils\AdminDashboard::init();
\RH\AdminUtils\TinyMcePlugins::init();
\RH\AdminUtils\WpCliCommands::init();
\RH\AdminUtils\ACFCodeField::init();
\RH\AdminUtils\ACFTextField::init();
\RH\AdminUtils\Misc::getInstance();
\RH\AdminUtils\UpdateChecker::init(entryPoint: __FILE__);
