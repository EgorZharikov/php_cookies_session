<?php
define('APP_PATH', dirname(dirname(__DIR__)));
require_once APP_PATH . "/kernel/Session/Session.php";
require_once APP_PATH . "/kernel/Users/Users.php";
$username = $collapse = $timestamp = $birthday = '';
$session = new Session();
$session->start();

if (Users::getCurrentUser() === null) {
    header('Location: ../../index.php');
    exit;
}

if ($session->has('auth')) {
    $username = $session->get('username');
    $birthday = $session->get('birthday');
    $timestamp = $session->getCookie('timestamp');
    $eventTimer = Users::getEventTimer($timestamp);
    $birthdayTimer = Users::getBirthdayTimer($birthday);
    $birthdayEcho = $birthdayTimer == 0 ? 
    'С днем рождения! Мы дарим вам скидку на все услуги 5%':
    "будет доступна через $birthdayTimer дней";
    $collapse = 'collapse';

}

if (isset($_POST['signout'])) {
    $session->destroyAll();
    header('Location: ../../index.php');
    exit;
}

require_once APP_PATH . "/views/components/profile-form.php";
?>
