<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once '../app/init.php';
require_once '../app/utils/globals.php';
require_once '../app/utils/sanitize.php';
require_once '../app/core/Config.php';
require_once '../app/core/Database.php';
require_once '../app/core/Input.php';
require_once '../app/core/Redirect.php';
require_once '../app/core/Session.php';

$app = new App();