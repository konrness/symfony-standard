<?php
/**
 * index.php
 * 
 * Default Environment-based application loading
 * 
 * @category Nerdery-Symfony
 * @package Symfony-Standard
 * @author Maxwell Vandervelde <Maxwell.Vandervelde@nerdery.com>
 * @copyright (c) 2013, Sierra Bravo Corp., dba The Nerdery, All rights reserved
 * @license BSD-2-Clause
 */

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod'));

switch (APPLICATION_ENV) {

    case 'prod':
        require __DIR__ . '/app.php';
        break;

    case 'dev':
    case 'staging':
    case 'test':
        require __DIR__ . '/app_dev.php';
        break;

    default:
        header('HTTP/1.0 500 Internal Server Error');
        exit('Improper APPLICATION_ENV set. See ' . basename(__FILE__) . ' for more information.');

}
