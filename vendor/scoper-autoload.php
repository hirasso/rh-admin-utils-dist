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
humbug_phpscoper_expose_class('ComposerAutoloaderInit7d8f7f1eb7772f7aec59cf8131bf8945', 'RH\AdminUtils\Scoped\ComposerAutoloaderInit7d8f7f1eb7772f7aec59cf8131bf8945');
humbug_phpscoper_expose_class('ReturnTypeWillChange', 'RH\AdminUtils\Scoped\ReturnTypeWillChange');
humbug_phpscoper_expose_class('CURLStringFile', 'RH\AdminUtils\Scoped\CURLStringFile');
humbug_phpscoper_expose_class('ValueError', 'RH\AdminUtils\Scoped\ValueError');
humbug_phpscoper_expose_class('PhpToken', 'RH\AdminUtils\Scoped\PhpToken');
humbug_phpscoper_expose_class('UnhandledMatchError', 'RH\AdminUtils\Scoped\UnhandledMatchError');
humbug_phpscoper_expose_class('Attribute', 'RH\AdminUtils\Scoped\Attribute');
humbug_phpscoper_expose_class('Stringable', 'RH\AdminUtils\Scoped\Stringable');
humbug_phpscoper_expose_class('Normalizer', 'RH\AdminUtils\Scoped\Normalizer');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('acf_get_options_page')) { function acf_get_options_page() { return \RH\AdminUtils\Scoped\acf_get_options_page(...func_get_args()); } }
if (!function_exists('array_is_list')) { function array_is_list() { return \RH\AdminUtils\Scoped\array_is_list(...func_get_args()); } }
if (!function_exists('ctype_alnum')) { function ctype_alnum() { return \RH\AdminUtils\Scoped\ctype_alnum(...func_get_args()); } }
if (!function_exists('ctype_alpha')) { function ctype_alpha() { return \RH\AdminUtils\Scoped\ctype_alpha(...func_get_args()); } }
if (!function_exists('ctype_cntrl')) { function ctype_cntrl() { return \RH\AdminUtils\Scoped\ctype_cntrl(...func_get_args()); } }
if (!function_exists('ctype_digit')) { function ctype_digit() { return \RH\AdminUtils\Scoped\ctype_digit(...func_get_args()); } }
if (!function_exists('ctype_graph')) { function ctype_graph() { return \RH\AdminUtils\Scoped\ctype_graph(...func_get_args()); } }
if (!function_exists('ctype_lower')) { function ctype_lower() { return \RH\AdminUtils\Scoped\ctype_lower(...func_get_args()); } }
if (!function_exists('ctype_print')) { function ctype_print() { return \RH\AdminUtils\Scoped\ctype_print(...func_get_args()); } }
if (!function_exists('ctype_punct')) { function ctype_punct() { return \RH\AdminUtils\Scoped\ctype_punct(...func_get_args()); } }
if (!function_exists('ctype_space')) { function ctype_space() { return \RH\AdminUtils\Scoped\ctype_space(...func_get_args()); } }
if (!function_exists('ctype_upper')) { function ctype_upper() { return \RH\AdminUtils\Scoped\ctype_upper(...func_get_args()); } }
if (!function_exists('ctype_xdigit')) { function ctype_xdigit() { return \RH\AdminUtils\Scoped\ctype_xdigit(...func_get_args()); } }
if (!function_exists('dd')) { function dd() { return \RH\AdminUtils\Scoped\dd(...func_get_args()); } }
if (!function_exists('decodeit')) { function decodeit() { return \RH\AdminUtils\Scoped\decodeit(...func_get_args()); } }
if (!function_exists('dump')) { function dump() { return \RH\AdminUtils\Scoped\dump(...func_get_args()); } }
if (!function_exists('encodeit')) { function encodeit() { return \RH\AdminUtils\Scoped\encodeit(...func_get_args()); } }
if (!function_exists('enum_exists')) { function enum_exists() { return \RH\AdminUtils\Scoped\enum_exists(...func_get_args()); } }
if (!function_exists('fdiv')) { function fdiv() { return \RH\AdminUtils\Scoped\fdiv(...func_get_args()); } }
if (!function_exists('get_debug_type')) { function get_debug_type() { return \RH\AdminUtils\Scoped\get_debug_type(...func_get_args()); } }
if (!function_exists('get_resource_id')) { function get_resource_id() { return \RH\AdminUtils\Scoped\get_resource_id(...func_get_args()); } }
if (!function_exists('grapheme_extract')) { function grapheme_extract() { return \RH\AdminUtils\Scoped\grapheme_extract(...func_get_args()); } }
if (!function_exists('grapheme_stripos')) { function grapheme_stripos() { return \RH\AdminUtils\Scoped\grapheme_stripos(...func_get_args()); } }
if (!function_exists('grapheme_stristr')) { function grapheme_stristr() { return \RH\AdminUtils\Scoped\grapheme_stristr(...func_get_args()); } }
if (!function_exists('grapheme_strlen')) { function grapheme_strlen() { return \RH\AdminUtils\Scoped\grapheme_strlen(...func_get_args()); } }
if (!function_exists('grapheme_strpos')) { function grapheme_strpos() { return \RH\AdminUtils\Scoped\grapheme_strpos(...func_get_args()); } }
if (!function_exists('grapheme_strripos')) { function grapheme_strripos() { return \RH\AdminUtils\Scoped\grapheme_strripos(...func_get_args()); } }
if (!function_exists('grapheme_strrpos')) { function grapheme_strrpos() { return \RH\AdminUtils\Scoped\grapheme_strrpos(...func_get_args()); } }
if (!function_exists('grapheme_strstr')) { function grapheme_strstr() { return \RH\AdminUtils\Scoped\grapheme_strstr(...func_get_args()); } }
if (!function_exists('grapheme_substr')) { function grapheme_substr() { return \RH\AdminUtils\Scoped\grapheme_substr(...func_get_args()); } }
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
if (!function_exists('normalizer_is_normalized')) { function normalizer_is_normalized() { return \RH\AdminUtils\Scoped\normalizer_is_normalized(...func_get_args()); } }
if (!function_exists('normalizer_normalize')) { function normalizer_normalize() { return \RH\AdminUtils\Scoped\normalizer_normalize(...func_get_args()); } }
if (!function_exists('preg_last_error_msg')) { function preg_last_error_msg() { return \RH\AdminUtils\Scoped\preg_last_error_msg(...func_get_args()); } }
if (!function_exists('str_contains')) { function str_contains() { return \RH\AdminUtils\Scoped\str_contains(...func_get_args()); } }
if (!function_exists('str_ends_with')) { function str_ends_with() { return \RH\AdminUtils\Scoped\str_ends_with(...func_get_args()); } }
if (!function_exists('str_starts_with')) { function str_starts_with() { return \RH\AdminUtils\Scoped\str_starts_with(...func_get_args()); } }
if (!function_exists('trigger_deprecation')) { function trigger_deprecation() { return \RH\AdminUtils\Scoped\trigger_deprecation(...func_get_args()); } }
if (!function_exists('user_sanitize')) { function user_sanitize() { return \RH\AdminUtils\Scoped\user_sanitize(...func_get_args()); } }
if (!function_exists('uv_poll_init_socket')) { function uv_poll_init_socket() { return \RH\AdminUtils\Scoped\uv_poll_init_socket(...func_get_args()); } }
if (!function_exists('wp_cache_clear_cache')) { function wp_cache_clear_cache() { return \RH\AdminUtils\Scoped\wp_cache_clear_cache(...func_get_args()); } }

return $loader;
