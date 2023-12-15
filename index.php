<?php
define('APP_PATH', __DIR__);
require_once APP_PATH . "/kernel/Session/Session.php";
require_once APP_PATH . "/kernel/Users/Users.php";
$username = $collapse = $timestamp = $eventTimer = $birthdayEcho = $birthday = '';
$session = new Session();
$session->start();
if ($session->has('username')) {
    $username = $session->get('username');
    $timestamp = $session->getCookie('timestamp') ?? false;
    $eventTimer = Users::getEventTimer($timestamp) ?? false;
    $birthday = $session->get('birthday');
    $birthdayTimer = Users::getBirthdayTimer($birthday);
    $collapse = 'collapse';
    if ($birthdayTimer == 0) {
        $birthdayEcho = 'С днем рождения!';
    } else {
        $birthdayEcho = "будет доступна через $birthdayTimer дней";
        $birthdayDiscount = 'collapse';
    }
} else {
    $personDiscount = 'collapse';
}

require_once APP_PATH . "/views/components/main-form.php";
?>