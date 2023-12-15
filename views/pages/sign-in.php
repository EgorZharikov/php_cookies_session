<?php
define('APP_PATH', dirname(dirname(__DIR__)));
require_once APP_PATH . "/src/validate_functions.php";
require_once APP_PATH . "/kernel/Users/Users.php";
require_once APP_PATH . "/kernel/Session/Session.php";

$session = new Session();
$session->start();

if (Users::getCurrentUser()) {
    header('Location: ../../index.php');
    exit;
}

$username = $password  = "";
$fail = '';

if (
    isset($_POST['username']) &&
    isset($_POST['password'])
) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    if (Users::checkPassword($username, $password)) {
        $birthday = Users::getUserData($username, 'birthday');
        $session = new Session;
        $session->has('auth') ? $session->destroyAll() : false;
        $session->start();
        $session->setArray([
            'auth' => true,
            'username' => $username,
            'birthday' => $birthday
        ]);
        if (!isset($_COOKIE['timestamp'])) {
            $session->setCookie('timestamp', time());
        }

        header('Location: ../../index.php');
        exit;
    } else { 
        $fail .= 'Не верный логин или пароль.<br>';
        $username = $password = $birthday = "";
    }

}

require_once APP_PATH . "/views/components/signin-form.php";
