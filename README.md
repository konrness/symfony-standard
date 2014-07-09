Nerdery Symfony-Standard Fork
=============================

This is a Modified fork of the [Symfony2][1] framework, maintained by The
Nerdery.

1) Creating a New Project
-------------------------

You can create a new empty nerdery-symfony-standard project by running:

    composer.phar create-project nerdery/symfony-standard PATH/TO/INSTALL

You can then generate your app's first bundle with the command:

    app/console generate:bundle

2) Installing the project
-------------------------

Once you have the source code of your existing or new project, you can 
easily install it using the phing install command:

    phing install

Then, you will need to configure settings in

    app/config/parameters.yml

3) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path/to/symfony/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.

4) Software Requirements
------------------------
### Required

* PHP needs to be a minimum version of PHP 5.3.3
* JSON needs to be enabled
* ctype needs to be enabled
* Your PHP.ini needs to have the date.timezone setting

### Optional

* You need to have the PHP-XML module installed
* You need to have at least version 2.6.21 of libxml
* PHP tokenizer needs to be enabled
* mbstring functions need to be enabled
* iconv needs to be enabled
* POSIX needs to be enabled (only on \*nix)
* Intl needs to be installed with ICU 4+
* APC 3.0.17+ (or another opcode cache needs to be installed)
* PHP.ini recommended settings
  * ``short_open_tag = Off``
  * ``magic_quotes_gpc = Off``
  * ``register_globals = Off``
  * ``session.autostart = Off``

### Development
* Composer
* Phing
  * PHPDocumentor
  * PHPcs
  * Phpcpd
  * Pdepend
  * Phpunit

### Doctrine

If you want to use Doctrine, you will need to have PDO installed. Additionally,
you need to have the PDO driver installed for the database server you want
to use.

5) Production Release
---------------------

You can install a production release level of the software with the following
command:

    phing release

This will generate assets and configuration appropriate for building on a
production server. It generates reports on the software and it creates a zip of
the contents in `build/release.zip`

[1]:  http://symfony.com/what-is-symfony

