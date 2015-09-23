<?php

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

/**
 * Setup autoloading
 */
include 'vendor/autoload.php';

error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE);

/**
 * Run the application!
 */
HumusMvc\Application::init(include 'config/application.config.php')->run();
