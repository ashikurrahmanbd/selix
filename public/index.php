<?php 

session_start();

/**
 * Load all the required files
 */

require "../app/core/init.php";

$app = new App;

$app->loadController();