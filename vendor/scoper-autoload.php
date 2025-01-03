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
humbug_phpscoper_expose_class('PucReadmeParser', 'RH\AdminUtils\Scoped\PucReadmeParser');
humbug_phpscoper_expose_class('Parsedown', 'RH\AdminUtils\Scoped\Parsedown');
humbug_phpscoper_expose_class('ComposerAutoloaderInit675f8ae109c9a88ffd8dce56439040b6', 'RH\AdminUtils\Scoped\ComposerAutoloaderInit675f8ae109c9a88ffd8dce56439040b6');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('acf_get_options_page')) { function acf_get_options_page() { return \RH\AdminUtils\Scoped\acf_get_options_page(...func_get_args()); } }
if (!function_exists('dd')) { function dd() { return \RH\AdminUtils\Scoped\dd(...func_get_args()); } }
if (!function_exists('decodeit')) { function decodeit() { return \RH\AdminUtils\Scoped\decodeit(...func_get_args()); } }
if (!function_exists('dump')) { function dump() { return \RH\AdminUtils\Scoped\dump(...func_get_args()); } }
if (!function_exists('encodeit')) { function encodeit() { return \RH\AdminUtils\Scoped\encodeit(...func_get_args()); } }
if (!function_exists('includeIfExists')) { function includeIfExists() { return \RH\AdminUtils\Scoped\includeIfExists(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \RH\AdminUtils\Scoped\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \RH\AdminUtils\Scoped\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \RH\AdminUtils\Scoped\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \RH\AdminUtils\Scoped\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \RH\AdminUtils\Scoped\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \RH\AdminUtils\Scoped\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \RH\AdminUtils\Scoped\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \RH\AdminUtils\Scoped\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \RH\AdminUtils\Scoped\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \RH\AdminUtils\Scoped\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \RH\AdminUtils\Scoped\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \RH\AdminUtils\Scoped\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \RH\AdminUtils\Scoped\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \RH\AdminUtils\Scoped\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \RH\AdminUtils\Scoped\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \RH\AdminUtils\Scoped\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \RH\AdminUtils\Scoped\mb_language(...func_get_args()); } }
if (!function_exists('mb_lcfirst')) { function mb_lcfirst() { return \RH\AdminUtils\Scoped\mb_lcfirst(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \RH\AdminUtils\Scoped\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ltrim')) { function mb_ltrim() { return \RH\AdminUtils\Scoped\mb_ltrim(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \RH\AdminUtils\Scoped\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \RH\AdminUtils\Scoped\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \RH\AdminUtils\Scoped\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_rtrim')) { function mb_rtrim() { return \RH\AdminUtils\Scoped\mb_rtrim(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \RH\AdminUtils\Scoped\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_pad')) { function mb_str_pad() { return \RH\AdminUtils\Scoped\mb_str_pad(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \RH\AdminUtils\Scoped\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \RH\AdminUtils\Scoped\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \RH\AdminUtils\Scoped\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \RH\AdminUtils\Scoped\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \RH\AdminUtils\Scoped\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \RH\AdminUtils\Scoped\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \RH\AdminUtils\Scoped\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \RH\AdminUtils\Scoped\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \RH\AdminUtils\Scoped\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \RH\AdminUtils\Scoped\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \RH\AdminUtils\Scoped\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \RH\AdminUtils\Scoped\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \RH\AdminUtils\Scoped\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \RH\AdminUtils\Scoped\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \RH\AdminUtils\Scoped\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \RH\AdminUtils\Scoped\mb_substr_count(...func_get_args()); } }
if (!function_exists('mb_trim')) { function mb_trim() { return \RH\AdminUtils\Scoped\mb_trim(...func_get_args()); } }
if (!function_exists('mb_ucfirst')) { function mb_ucfirst() { return \RH\AdminUtils\Scoped\mb_ucfirst(...func_get_args()); } }
if (!function_exists('user_sanitize')) { function user_sanitize() { return \RH\AdminUtils\Scoped\user_sanitize(...func_get_args()); } }
if (!function_exists('wp_cache_clear_cache')) { function wp_cache_clear_cache() { return \RH\AdminUtils\Scoped\wp_cache_clear_cache(...func_get_args()); } }

return $loader;
