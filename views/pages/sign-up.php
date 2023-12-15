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

$username = $password = $birthday = '';
$fail = '';

if (
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['birthday'])
) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $birthday = test_input($_POST['birthday']);
    $fail .= validate_username($username);
    $fail .= validate_password($password);
    $fail .= validate_date($birthday);
    $fail .= Users::existUser($username);
    if ($fail === '') {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $users = Users::getUsersFromDb();
        $id = count($users) + 1;
        $user = [
            "$username" => ["id" => "$id", "hash" => "$hash", "birthday" => "$birthday"]
        ];
        $result = array_merge($users, $user);
        Users::addUsersInDb($result);
        $session->has('auth') ? $session->destroyAll() : false;
        $session->start();
        $session->setArray([
            'auth' => true,
            'username'=> $username,
            'birthday'=> $birthday]);
            if (!isset($_COOKIE['timestamp'])) {
            $session->setCookie('timestamp', time());
            }
        
        header('Location: ../../index.php');
        exit;
    }
}

require_once APP_PATH . "/views/components/signup-form.php";
