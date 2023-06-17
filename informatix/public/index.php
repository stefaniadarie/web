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


// $user = Database::getInstance()->get('users', array('name', '=', 'andrei'));
// if($user->error()) {
//     echo 'error';
// } else {
//     var_dump($user->first());
//     echo $user->first()->id;
// }

// try {
// Database::getInstance()->insert('users', array(
//     'id' => 3,
//     'name' => 'Gigel'
// ));
// } catch(Exception $e) {
//     die ($e);
// }

// echo 'insert';

// Database::getInstance()->update('users', 3, array(
//     'name' => 'Mihai'
// ));





// echo Config::get('mysql/host');

// $users = Database::getInstance()->query('SELECT * FROM users');
// if ($users->error()) {
//     echo 'error';
// } else {
//     foreach ($users->results() as $user) {
//         echo $user->name . '<br/>';
//     }
// }