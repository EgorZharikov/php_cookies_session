<?php

function validate_forename($field)
{
    return ($field == "") ? "Не введено имя.<br>" : "";
}

function validate_surname($field)
{
    return ($field == "") ? "Не введена фамилия.<br>" : "";
}

function validate_username($field)
{
    if ($field == "") return "Не введено имя пользователя.<br>";
    else if (strlen($field) < 5)
        return "В имени пользователя должно быть не менее 5 символов.<br>";
    else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
        return "В имени пользователя разрешены только  a-z, A-Z, 0-9, - и _<br>";
    return "";
}

function validate_password($field)
{
    if ($field == "") return "Не введен пароль.<br>";
    else if (strlen($field) < 8)
        return "В пароле должно быть не менее 8 символов.<br>";
    else if (
        !preg_match("/[a-z]/", $field) ||
        !preg_match("/[A-Z]/", $field) ||
        !preg_match("/[0-9]/", $field)
    )
        return "Пароль требует 1 сивола из каждого набора a-z, A-Z и 0-9<br>";
    return "";
}

function validate_age($field)
{
    if ($field == "") return "Не введен возраст.<br>";
    else if ($field < 18 || $field > 110)
        return "Возраст должен быть между 18 и 110.<br>";
    return "";
}

function validate_email($field)
{
    if ($field == "") return "Не введен адрес электронной почты.<br>";
    else if (
        !((strpos($field, ".") > 0) &&
            (strpos($field, "@") > 0)) ||
        preg_match("/[^a-zA-Z0-9.@_-]/", $field)
    )
        return "Электронный адрес имеет неверный формат.<br>";
    return "";
}

function validate_date($date)
{
    if (DateTime::createFromFormat('Y-m-d', $date) === false) {
        return "Неверный формат даты.<br>";
    } else {
        return "";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}