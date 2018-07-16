[![Latest Stable Version](https://poser.pugx.org/PHPCompatibility/phpcompatibility-wp/v/stable.png)](https://packagist.org/packages/PHPCompatibility/phpcompatibility-wp)
[![Latest Unstable Version](https://poser.pugx.org/PHPCompatibility/phpcompatibility-wp/v/unstable.png)](https://packagist.org/packages/PHPCompatibility/phpcompatibility-wp)
[![License](https://poser.pugx.org/PHPCompatibility/phpcompatibility-wp/license.png)](https://github.com/PHPCompatibility/PHPCompatibilityWP/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/PHPCompatibility/PHPCompatibilityWP.png?branch=master)](https://travis-ci.org/PHPCompatibility/PHPCompatibilityWP)

# PHPCompatibilityWP

Using the PHPCompatibilityWP standard, you can analyse the codebase of a WordPress-based project for PHP cross-version compatibility.


## What's in this repo ?

A PHPCompatibility ruleset for projects based on the WordPress CMS.

This WordPress specific ruleset prevents false positives from the [PHPCompatibility standard](https://github.com/PHPCompatibility/PHPCompatibility) by excluding back-fills and poly-fills which are provided by WordPress.


## Requirements

* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
    * PHP 5.3+ for use with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 2.3.0+.
    * PHP 5.4+ for use with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 3.0.2+.

    Use the latest stable release of PHP_CodeSniffer for the best results.
    The minimum _recommended_ version of PHP_CodeSniffer is PHPCS 2.6.0.
* [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility).


## Installation instructions

### Installation instructions using Composer

If you don't have a Composer plugin installed to manage the `installed_paths` setting for PHP_CodeSniffer, run the following from the command-line:
```bash
composer require --dev dealerdirect/phpcodesniffer-composer-installer:^0.4.3 phpcompatibility/phpcompatibility-wp:*
composer install
```

If you already have a Composer PHPCS plugin installed, run:
```bash
composer require --dev phpcompatibility/phpcompatibility-wp:*
composer install
```

Next, run:
```bash
vendor/bin/phpcs -i
```
If all went well, you will now see that the PHPCompatibility and PHPCompatibilityWP standards are installed for PHP_CodeSniffer.

### Installation instructions without Composer (unsupported)

* Install [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) via [your preferred method](https://github.com/squizlabs/PHP_CodeSniffer#installation).

    PHP CodeSniffer offers a variety of installation methods to suit your work-flow: Composer, [PEAR](http://pear.php.net/PHP_CodeSniffer), a Phar file, zipped/tarred release archives or checking the repository out using Git.

* Install [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) by [cloning the PHPCompatibility repository](https://github.com/PHPCompatibility/PHPCompatibility#installation-via-a-git-check-out-to-an-arbitrary-directory-method-2).

* Install [PHPCompatibilityWP](https://github.com/PHPCompatibility/PHPCompatibilityWP) by cloning this repository.

* Add the paths to the directories in which you placed your copies of the PHPCompatibility repo and the PHPCompatibilityWP repo to the PHP CodeSniffer configuration using the below command from the command line:
   ```bash
   phpcs --config-set installed_paths /path/to/PHPCompatibility,/path/to/PHPCompatibilityWP
   ```
   For more information, see the PHP CodeSniffer wiki on the [`installed_paths` configuration variable](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Configuration-Options#setting-the-installed-standard-paths).

* Verify that the PHPCompatibility standard is registered correctly by running `phpcs -i` on the command line. PHPCompatibility should be listed as one of the available standards.


## How to use

Now you can use the following command to inspect your code:
```bash
./vendor/bin/phpcs -p . --standard=PHPCompatibilityWP

# Or if you installed without using Composer:
phpcs -p . --standard=PHPCompatibilityWP
```

By default, you will only receive notifications about deprecated and/or removed PHP features.

To get the most out of the PHPCompatibilityWP standard, you should specify a `testVersion` to check against. That will enable the checks for both deprecated/removed PHP features as well as the detection of code using new PHP features.

The minimum PHP requirement of the WordPress project at this time is PHP 5.2.4. If you want to enforce this, either add `--runtime-set testVersion 5.2-` to your command-line command or add `<config name="testVersion" value="5.2-"/>` to your [custom ruleset](https://github.com/PHPCompatibility/PHPCompatibility#using-a-custom-ruleset).

For more detailed information about setting the `testVersion`, see the README of the generic [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility#sniffing-your-code-for-compatibility-with-specific-php-versions) standard.


## License

All code within the PHPCompatibility organisation is released under the GNU Lesser General Public License (LGPL). For more information, visit https://www.gnu.org/copyleft/lesser.html


## Changelog

### 1.0.0 - 2018-07-17

Initial release of the PHPCompatibilityWP ruleset.
