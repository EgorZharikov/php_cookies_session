const alert = document.querySelector('.alert');

function validate(form) {
    let fail = '';
    // fail = validateForename(form.forename.value)
    // fail += validateSurname(form.surname.value)
    fail += validateUsername(form.username.value)
    fail += validatePassword(form.password.value)
    fail += validateBirthday(form.birthday.value)
    fail += validateConfirm(form.password.value, form.confirm.value)
    // fail += validateAge(form.age.value)
    // fail += validateEmail(form.email.value)

    if (fail == "") {
        alert.classList.add("collapse");
        return true
    } 
    else {
        alert.classList.remove("collapse");
        alert.textContent = fail;
        return false
    }
}

function validateForename(field) {
    return (field == "") ? "Не введено имя.\n" : ""
}

function validateSurname(field) {
    return (field == "") ? "Не введена фамилия.\n" : ""
}

function validateUsername(field) {
    if (field == "") return "Не введено имя пользователя.\n"
    else if (field.length < 5)
        return "В имени пользователя должно быть не менее 5 символов.\n"
    else if (/[^a-zA-Z0-9_-]/.test(field))
        return "В имени пользователя разрешены только  a-z, A-Z, 0-9, - и _.\n"
    return ""
}

function validatePassword(field) {
    if (field == "") return "Не введен пароль.\n"
    else if (field.length < 8)
        return "В пароле должно быть не менее 8 символов.\n"
    else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
        !/[0-9]/.test(field))
        return "Пароль требует 1 сивола из каждого набора a-z, A-Z и 0-9.\n"
    return ""
}

function validateConfirm(password, confirm) {
    if (password !== confirm) return "Пароли не совпадают.\n"
    else return ""
}

function validateAge(field) {
    if (field == "" || isNaN(field)) return "Не введен возраст.\n"
    else if (field < 18 || field > 110)
        return "Возраст должен быть между 18 и 110.\n"
    return ""
}

function validateEmail(field) {
    if (field == "") return "Не введен адрес электронной почты.\n"
    else if (!((field.indexOf(".") > 0) &&
        (field.indexOf("@") > 0)) ||
        /[^a-zA-Z0-9.@_-]/.test(field))
        return "Электронный адрес имеет неверный формат.\n"
    return ""
}

function validateBirthday(field) {
    if (!/^\d{4}-\d{2}-\d{2}$/.test(field)) {
        return "Некорректная дата рождения.\n";
    }
    let parts = field.split('-');
    let now = new Date();
    let year = parseInt(parts[0], 10);
    let currentYear = now.getFullYear();
    let month = (parts[1][0] === '0') ? parseInt(parts[1][1], 10) : parseInt(parts[1], 10);
    let day = (parts[2][0] === '0') ? parseInt(parts[2][1], 10) : parseInt(parts[2], 10);

    if (year >= currentYear) {
        return "Дата рождения > текущей даты.\n";
    }
    if ((currentYear - year) < 18 || (currentYear - year) > 100) {
        return "Допустимый возраст 18-100лет.\n";
    }
    if (month < 1 || month > 12) {
        return "Некорректная дата рождения.\n";
    }
    if (day < 1 || day > 31) {
        return "Некорректная дата рождения.\n";
    }
    return ""
}