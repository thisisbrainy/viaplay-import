<?php

/*
Plugin Name: Viaplay Import
 */

define('VI_DIR', __DIR__);

require_once VI_DIR . '/includes/EasyCSV/AbstractBase.php';
require_once VI_DIR . '/includes/EasyCSV/Reader.php';
require_once VI_DIR . '/includes/EasyCSV/Writer.php';
require_once VI_DIR . '/includes/idiorm/idiorm.php';
require_once VI_DIR . '/includes/functions.php';
require_once VI_DIR . '/includes/actions.php';
require_once VI_DIR . '/includes/filters.php';

/* test */
viaplay_import(__DIR__ . '/vouchers2.csv');
