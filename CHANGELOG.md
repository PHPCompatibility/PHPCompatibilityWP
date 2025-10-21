# Changelog for PHPCompatibilityWP

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](https://semver.org/) and [Keep a CHANGELOG](https://keepachangelog.com/).

## [2.1.8] - 2025-10-18

This is a maintenance release.

* The ruleset now includes schema tags.
* General housekeeping and maintenance.

## [2.1.7] - 2025-05-12

* Composer: The minimum supported version of PHP_CodeSniffer has been raised to 3.3.0.
* Ruleset: Prevent deprecation notice on PHP_CodeSniffer 3.13.0+.

## [2.1.6] - 2025-01-16

* README: Fixed some broken badges.
* General housekeeping and documentation updates. Including a contribution by [@johnbillion].

## [2.1.5] - 2024-04-25

* Ruleset: Updated for compatibility with WordPress 6.5. Thanks [@swissspidy]
* The recommended version of the [Composer PHPCS plugin] is now `^1.0`.
* Other housekeeping and documentation updates. Includes contributions from [@fredden] and [@johnbillion].

## [2.1.4] - 2022-10-24

* Composer: The package will now identify itself as a static analysis tool. Thanks [@GaryJones]!
* Other housekeeping and minor documentation updates.

## [2.1.3] - 2021-12-31

* Ruleset: Updated for compatibility with WordPress 5.9.
* README: Updated the installation instructions for [compatibility with Composer >= 2.2][composer22announce].
* Minor housekeeping.

[composer22announce]: https://blog.packagist.com/composer-2-2/#more-secure-plugin-execution

## [2.1.2] - 2021-07-21

* Ruleset: Updated for compatibility with WordPress 5.8.
* Documentation: improved installation instructions. Props [Andy Fragen](https://github.com/afragen).

## [2.1.1] - 2021-02-15

* The recommended version of the [Composer PHPCS plugin] is now `^0.7.0`, which offers compatibility with Composer 2.0.
* The ruleset is now also tested against PHP 7.4 and 8.0.
    Note: full PHP 7.4 support is only available in combination with PHP_CodeSniffer >= 3.5.6.
    Note: runtime PHP 8.0 support is only available in combination with PHP_CodeSniffer >= 3.5.7, full support is expected in PHP_CodeSniffer 3.6.0.

## [2.1.0] - 2019-08-29

* Ruleset: Updated for the Sodium_Compat polyfill which is included in WordPress 5.2.
* Composer: The recommended version of the [Composer PHPCS plugin] has been upped to `^0.5.0`.
* Documentation: Updated the ruleset inline documentation and the Readme to reflect the change in minimum PHP requirements for WordPress as of WP 5.2.
* Documentation: Updated the ruleset inline documentation to include information on when each polyfill was added to/removed from WordPress.
* CI: The rulesets are now also tested against PHP 7.3.
    Note: full PHP 7.3 support is only available in combination with PHP_CodeSniffer 2.9.2 or 3.3.1+ due to an incompatibility within PHP_CodeSniffer itself.

## [2.0.0] - 2018-10-07

* Ruleset: Updated for compatibility with PHPCompatibility 9.0+.
* Composer: Added dependency for a dedicated polyfill-based PHPCompatibility ruleset.
* CI: Added a test for the ruleset.
* Readme: Removed the installation instructions for a non-Composer based install.

## 1.0.0 - 2018-07-17

Initial release of the PHPCompatibilityWP ruleset.

[Composer PHPCS plugin]: https://github.com/PHPCSStandards/composer-installer/

[2.1.8]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.7...2.1.8
[2.1.7]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.6...2.1.7
[2.1.6]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.5...2.1.6
[2.1.5]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.4...2.1.5
[2.1.4]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.3...2.1.4
[2.1.3]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.2...2.1.3
[2.1.2]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.1...2.1.1
[2.1.1]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.1.0...2.1.1
[2.1.0]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/2.0.0...2.1.0
[2.0.0]:        https://github.com/PHPCompatibility/PHPCompatibilityWP/compare/1.0.0...2.0.0

[@fredden]:     https://github.com/fredden
[@GaryJones]:   https://github.com/GaryJones
[@johnbillion]: https://github.com/johnbillion
[@swissspidy]:  https://github.com/swissspidy
