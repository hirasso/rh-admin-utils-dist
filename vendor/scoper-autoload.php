<?php

// scoper-autoload.php @generated by PhpScoper

$loader = (static function () {
    // Backup the autoloaded Composer files
    $existingComposerAutoloadFiles = isset($GLOBALS['__composer_autoload_files']) ? $GLOBALS['__composer_autoload_files'] : [];

    $loader = require_once __DIR__.'/autoload.php';
    // Ensure InstalledVersions is available
    $installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
    if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

    // Restore the backup and ensure the excluded files are properly marked as loaded
    $GLOBALS['__composer_autoload_files'] = \array_merge(
        $existingComposerAutoloadFiles,
        \array_fill_keys([], true)
    );

    return $loader;
})();

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class($exposed, $prefixed) {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('ComposerAutoloaderInit9fc36976d89c09bc43a3141f272266f7', 'RH\AdminUtils\ComposerAutoloaderInit9fc36976d89c09bc43a3141f272266f7');
humbug_phpscoper_expose_class('Parsedown', 'RH\AdminUtils\Parsedown');
humbug_phpscoper_expose_class('PucReadmeParser', 'RH\AdminUtils\PucReadmeParser');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('acf_get_options_page')) { function acf_get_options_page() { return \RH\AdminUtils\acf_get_options_page(...func_get_args()); } }
if (!function_exists('dd')) { function dd() { return \RH\AdminUtils\dd(...func_get_args()); } }
if (!function_exists('decodeit')) { function decodeit() { return \RH\AdminUtils\decodeit(...func_get_args()); } }
if (!function_exists('dump')) { function dump() { return \RH\AdminUtils\dump(...func_get_args()); } }
if (!function_exists('encodeit')) { function encodeit() { return \RH\AdminUtils\encodeit(...func_get_args()); } }
if (!function_exists('getWpExcludes')) { function getWpExcludes() { return \RH\AdminUtils\getWpExcludes(...func_get_args()); } }
if (!function_exists('includeIfExists')) { function includeIfExists() { return \RH\AdminUtils\includeIfExists(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \RH\AdminUtils\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \RH\AdminUtils\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \RH\AdminUtils\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \RH\AdminUtils\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \RH\AdminUtils\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \RH\AdminUtils\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \RH\AdminUtils\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \RH\AdminUtils\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \RH\AdminUtils\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \RH\AdminUtils\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \RH\AdminUtils\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \RH\AdminUtils\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \RH\AdminUtils\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \RH\AdminUtils\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \RH\AdminUtils\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \RH\AdminUtils\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \RH\AdminUtils\mb_language(...func_get_args()); } }
if (!function_exists('mb_lcfirst')) { function mb_lcfirst() { return \RH\AdminUtils\mb_lcfirst(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \RH\AdminUtils\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \RH\AdminUtils\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \RH\AdminUtils\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \RH\AdminUtils\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \RH\AdminUtils\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_pad')) { function mb_str_pad() { return \RH\AdminUtils\mb_str_pad(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \RH\AdminUtils\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \RH\AdminUtils\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \RH\AdminUtils\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \RH\AdminUtils\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \RH\AdminUtils\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \RH\AdminUtils\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \RH\AdminUtils\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \RH\AdminUtils\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \RH\AdminUtils\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \RH\AdminUtils\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \RH\AdminUtils\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \RH\AdminUtils\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \RH\AdminUtils\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \RH\AdminUtils\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \RH\AdminUtils\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \RH\AdminUtils\mb_substr_count(...func_get_args()); } }
if (!function_exists('mb_ucfirst')) { function mb_ucfirst() { return \RH\AdminUtils\mb_ucfirst(...func_get_args()); } }
if (!function_exists('user_sanitize')) { function user_sanitize() { return \RH\AdminUtils\user_sanitize(...func_get_args()); } }
if (!function_exists('wp_cache_clear_cache')) { function wp_cache_clear_cache() { return \RH\AdminUtils\wp_cache_clear_cache(...func_get_args()); } }

return $loader;
