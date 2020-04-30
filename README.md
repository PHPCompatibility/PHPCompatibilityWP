# PHPCompatibilityWP

[![Latest Stable Version](https://img.shields.io/packagist/v/phpcompatibility/phpcompatibility-wp?label=stable)][packagist]
[![Latest Unstable Version](https://img.shields.io/badge/unstable-dev--develop-e68718.svg?maxAge=2419200)][packagist]
[![License](https://img.shields.io/github/license/PHPCompatibility/PHPCompatibilityWP?color=00a7a7)](https://github.com/PHPCompatibility/PHPCompatibilityWP/blob/master/LICENSE)
[![Build Status](https://github.com/PHPCompatibility/PHPCompatibilityWP/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/PHPCompatibility/PHPCompatibilityWP/actions/workflows/ci.yml)

Using PHPCompatibilityWP, you can analyse the codebase of a WordPress-based project for PHP cross-version compatibility.


## What's in this repo ?

A ruleset for PHP_CodeSniffer to check for PHP cross-version compatibility issues in projects based on the WordPress CMS.

This WordPress specific ruleset prevents false positives from the [PHPCompatibility standard](https://github.com/PHPCompatibility/PHPCompatibility) by excluding back-fills and poly-fills which are provided by WordPress.


## Funding

**This project needs funding.**

The project team has spend thousands of hours creating and maintaining the PHPCompatibility packages. This is unsustainable without funding.

If you use PHPCompatibility, please fund this work by setting up a monthly contribution to the [PHP_CodeSniffer Open Collective].


## Requirements

* PHP > 5.4
* [PHP_CodeSniffer] >= 3.13.3.
    Use the latest stable release of PHP_CodeSniffer for the best results.
* [PHPCompatibility] 10.0.0+.
* [PHPCompatibilityParagonie] 2.0.0+.


## Installation instructions

The only supported installation method is via [Composer].

[Composer] will automatically install the project dependencies and register the external rulesets with PHP_CodeSniffer using the [Composer PHPCS plugin].

Run the following from the root of your project:
```bash
composer config allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
composer require --dev phpcompatibility/phpcompatibility-wp:"^3.0@dev"
```

Next, run:
```bash
vendor/bin/phpcs -i
```
If all went well, you will now see that the `PHPCompatibility`, `PHPCompatibilityWP` and some more PHPCompatibility standards are installed for PHP_CodeSniffer.


## Upgrade instructions

To upgrade this package, run the following command:
```bash
composer update --dev phpcompatibility/phpcompatibility-wp --with-dependencies
```

> [!TIP]
> If you have a _root_ requirement in your project for one of the packages used by this project, you may need to update with `--with-all-dependencies` instead.


## How to use

You can now use the following command to inspect your code:
```bash
vendor/bin/phpcs -p . --standard=PHPCompatibilityWP
```

By default, you will only receive notifications about deprecated and/or removed PHP features.

To get the most out of the PHPCompatibilityWP standard, you should specify a `testVersion` to check against. That will enable the checks for both deprecated/removed PHP features as well as the detection of code using new PHP features.

The WordPress minimum PHP requirement was 5.2.4 up to WP 5.1.
* As of WP 5.2, the new minimum PHP requirement is PHP 5.6.20.
* As of WP 6.3, the new minimum PHP requirement is PHP 7.0.0.
* As of WP 6.6, the new minimum PHP requirement is PHP 7.2.24.

To enforce for PHPCompatibility to run against the PHP version you want to support, add `--runtime-set testVersion 7.2-` to your command-line command or add `<config name="testVersion" value="7.2-"/>` to your [custom ruleset](https://github.com/PHPCompatibility/PHPCompatibility#using-a-custom-ruleset), replacing `7.2-` with a `testVersion` of your choice.

For example:
```bash
# For a project which should be compatible with PHP 5.6 and higher:
vendor/bin/phpcs -p . --standard=PHPCompatibilityWP --runtime-set testVersion 5.6-
```

For more detailed information about setting the `testVersion`, see the README of the generic [PHPCompatibility][PHPCompatibility-testVersion] standard.


### Testing PHP files only

By default PHP_CodeSniffer < 4.0 will analyse PHP, JavaScript and CSS files. As the PHPCompatibility sniffs only target PHP code, you can make the run slightly faster by telling PHP_CodeSniffer to only check PHP files, like so:
```bash
vendor/bin/phpcs -p . --standard=PHPCompatibilityWP --extensions=php --runtime-set testVersion 5.6-
```

## License

All code within the PHPCompatibility organisation is released under the GNU Lesser General Public License (LGPL). For more information, visit <https://www.gnu.org/licenses/lgpl-3.0.html>.


[packagist]:                       https://packagist.org/packages/phpcompatibility/phpcompatibility-wp
[Composer]:                        https://getcomposer.org/
[Composer PHPCS plugin]:           https://github.com/PHPCSStandards/composer-installer/
[PHP_CodeSniffer]:                 https://github.com/PHPCSStandards/PHP_CodeSniffer
[PHP_CodeSniffer Open Collective]: https://opencollective.com/php_codesniffer
[PHPCompatibility]:                https://github.com/PHPCompatibility/PHPCompatibility
[PHPCompatibility-testVersion]:    https://github.com/PHPCompatibility/PHPCompatibility#sniffing-your-code-for-compatibility-with-specific-php-versions
[PHPCompatibilityParagonie]:       https://github.com/PHPCompatibility/PHPCompatibilityParagonie
