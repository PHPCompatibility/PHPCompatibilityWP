<?php
/*
 * Test file to run PHP_CodeSniffer against to make sure the polyfills are correctly excluded.
 *
 * This file should only test the polyfills provided by WordPress itself.
 * The polyfills provided via dependencies will be tested via the repo containing
 * the dedicated ruleset(s) for those dependencies.
 */
$a = hash_hmac();
$a = json_encode();
$a = json_decode();
$a = hash_equals();

echo JSON_PRETTY_PRINT;
$a = json_last_error_msg();
class ABC implements JsonSerializable {}

$a = array_replace_recursive();
$a = is_iterable();
$a = is_countable();

$a = spl_autoload_register();
$a = spl_autoload_unregister();
$a = spl_autoload_functions();

$a = mysql_to_rfc3339();

if (array_key_first($array)
    || array_key_last($array)) {}

$a = str_contains($haystack, $needle);
$a = str_starts_with( $haystack, $needle );
$a = str_ends_with( $haystack, $needle );

echo IMAGETYPE_WEBP, IMG_WEBP;

if (array_is_list($array)) {}

echo IMAGETYPE_AVIF, IMG_AVIF;

$first_match = array_find( $array, $callback );
$first_match_key = array_find_key( $array, $callback );
if ( array_any( $array, $callback ) ) {}
if ( array_all( $array, $callback ) ) {}

$first_element = array_first( $array );
$last_element = array_last( $array );

echo IMAGETYPE_HEIF;
