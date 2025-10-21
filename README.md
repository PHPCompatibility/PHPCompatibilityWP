# PHPCompatibilityWP

[![Latest Stable Version](https://img.shields.io/packagist/v/phpcompatibility/phpcompatibility-wp?label=stable)](https://packagist.org/packages/phpcompatibility/phpcompatibility-wp)
[![Latest Unstable Version](https://img.shields.io/badge/unstable-dev--develop-e68718.svg?maxAge=2419200)](https://packagist.org/packages/phpcompatibility/phpcompatibility-wp)
[![License](https://img.shields.io/github/license/PHPCompatibility/PHPCompatibilityWP?color=00a7a7)](https://github.com/PHPCompatibility/PHPCompatibilityWP/blob/master/LICENSE)
[![Build Status](https://github.com/PHPCompatibility/PHPCompatibilityWP/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/PHPCompatibility/PHPCompatibilityWP/actions/workflows/ci.yml)

Using PHPCompatibilityWP, you can analyse the codebase of a WordPress-based project for PHP cross-version compatibility.


## What's in this repo ?

A ruleset for PHP_CodeSniffer to check for PHP cross-version compatibility issues in projects based on the WordPress CMS.

This WordPress specific ruleset prevents false positives from the [PHPCompatibility standard](https://github.com/PHPCompatibility/PHPCompatibility) by excluding back-fills and poly-fills which are provided by WordPress.


## Requirements

* [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer).
    - PHP 5.4+ for use with [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) 3.3.0+.

    Use the latest stable release of PHP_CodeSniffer for the best results.
* [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) 9.0.0+.
* [PHPCompatibilityParagonie](https://github.com/PHPCompatibility/PHPCompatibilityParagonie) 1.0.0+.


## Installation instructions

The only supported installation method is via [Composer](https://getcomposer.org/).

If you don't have a Composer plugin installed to manage the `installed_paths` setting for PHP_CodeSniffer, run the following from the command-line:
```bash
composer config allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
composer require --dev dealerdirect/phpcodesniffer-composer-installer:"^1.0" phpcompatibility/phpcompatibility-wp:"*"
```

If you already have a Composer PHP_CodeSniffer plugin installed, run:
```bash
composer require --dev phpcompatibility/phpcompatibility-wp:"*"
```

Next, run:
```bash
vendor/bin/phpcs -i
```
If all went well, you will now see that the `PHPCompatibility`, `PHPCompatibilityWP` and some more PHPCompatibility standards are installed for PHP_CodeSniffer.


## How to use

Now you can use the following command to inspect your code:
```bash
./vendor/bin/phpcs -p . --standard=PHPCompatibilityWP
```

By default, you will only receive notifications about deprecated and/or removed PHP features.

To get the most out of the PHPCompatibilityWP standard, you should specify a `testVersion` to check against. That will enable the checks for both deprecated/removed PHP features as well as the detection of code using new PHP features.

The minimum PHP requirement of the WordPress project up to WP 5.1 was 5.2.4. As of WP 5.2 it will be PHP 5.6.20. If you want to enforce this, either add `--runtime-set testVersion 5.6-` to your command-line command or add `<config name="testVersion" value="5.6-"/>` to your [custom ruleset](https://github.com/PHPCompatibility/PHPCompatibility#using-a-custom-ruleset).

For example:
```bash
# For a project which should be compatible with PHP 5.6 and higher:
./vendor/bin/phpcs -p . --standard=PHPCompatibilityWP --runtime-set testVersion 5.6-
```

For more detailed information about setting the `testVersion`, see the README of the generic [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility#sniffing-your-code-for-compatibility-with-specific-php-versions) standard.


### Testing PHP files only

By default PHP_CodeSniffer will analyse PHP, JavaScript and CSS files. As the PHPCompatibility sniffs only target PHP code, you can make the run slightly faster by telling PHP_CodeSniffer to only check PHP files, like so:
```bash
./vendor/bin/phpcs -p . --standard=PHPCompatibilityWP --extensions=php --runtime-set testVersion 5.6-
```

## License

All code within the PHPCompatibility organisation is released under the GNU Lesser General Public License (LGPL). For more information, visit <https://www.gnu.org/licenses/lgpl-3.0.html>.
