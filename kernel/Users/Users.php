<?php

class Users
{

    public static function getUsersFromDb()
    {
        $json = file_get_contents(APP_PATH . "/kernel/db/users.json") or die("");
        $users = json_decode($json, true);
        return $users;
    }
    public static function addUsersInDb($users): void
    {
        $json = json_encode($users);
        file_put_contents(APP_PATH . "/kernel/db/users.json", $json);
    }

    public static function getEventTimer($timestamp)

    {
        //event time 24 h
        $eventTime = 24 * 36000;
        $passedTime = time() - $timestamp;
        if ($eventTime > $passedTime) {
            $timer = $eventTime - $passedTime;
            if ($passedTime == 0) {
                return date("H:i:s", $eventTime - 1);
            }
            return date("H:i:s", $timer);
        }
    }

    public static function getBirthdayTimer($birthday)

    {
        $unixTime =  strtotime($birthday);
        $month = date('m', $unixTime);
        $day = date('d', $unixTime);
        $year = date('Y');
        $h = date('H');
        $i = date('i');
        $s = date('s');
        $birtday = strtotime("$year-$month-$day $h:$i:$s");
        $birtdayTimer = ($birtday - time()) / 86400;
        if ($birtdayTimer < 0) {
            $year += 1;
            $birtday = strtotime("$year-$month-$day $h:$i:$s");
            $birtdayTimer = ($birtday - time()) / 86400;
            return floor($birtdayTimer);
        } else {
            return floor($birtdayTimer);
        }
            
    }

    public static function getUsersList($users): array
    {
        foreach ($users as $key => $value) {
            $userList[$key] = $users[$key]["hash"];
        }
        return $userList;
    }

    public static function existUser($username)
    {
        $users = self::getUsersFromDb();
        foreach ($users as $key => $value) {
            if (mb_strtolower($key) === mb_strtolower($username)) {
                return "Пользователь $username уже зарегистрирован.<br>";
            }
        }
    }

    public static function getUserData($username, $data)
    {
        $users = self::getUsersFromDb();
        foreach ($users as $key => $value) {
            if (mb_strtolower($key) === mb_strtolower($username)) {
                return $users[$key][$data];
            }
        }
    }

    public static function getCurrentUser()
    {
        return $_SESSION["username"] ?? null;
    }

    public static function checkPassword($login, $password)
    {
        $users = self::getUsersFromDb();
        foreach ($users as $key => $value) {
            if (
                mb_strtolower($key) === mb_strtolower($login) &&
                password_verify($password, $users[$key]["hash"])
            ) {
                return true;
            }
        }
    }
}
