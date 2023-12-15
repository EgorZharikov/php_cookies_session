<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../img/logo.png" alt="Logo" width="40" height="24" class="d-inline-block align-text-top">
                SPA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SPA услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Сертификаты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Фото</a>
                    </li>
                </ul>

                <a class="nav-link m-2" aria-current="page" style="color: green; font-weight: bold" href="profile.php">
                    <img src="../../img/user.png" alt="Logo" width="20" height="17" class="d-inline-block align-text-top">
                    <?php echo $username ?></a>

                <form class="d-flex" action="views/pages/sign-in.php">
                    <button class="btn btn-outline-dark <?php echo $collapse ?> ">Sign in</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="container col-sm-5">
        <div class="row profile-card ">
            <div class="col border border-primary-subtle align-items-center">
                <div>
                    <h4 class="m-3">Мои данные:</h4>
                </div>
                <div class="border">
                    Имя пользователя: <?php echo $username ?>
                </div>
                <div class="border mb-3">
                    Дата рождения: <?php echo $birthday ?>
                </div>
                <h6>Персональные акции:</h6>
                <div class="alert alert-success <?php echo $eventTimer ? false : 'collapse' ?>" role="alert">
                    <div> Специальное предложение скидка 50% на массаж лица</div>
                    <div class="fw-bold"><?php echo $eventTimer ?> </div>
                </div>
                <div class="alert alert-success" role="alert">
                    Скидка на день рождения:
                    <span class="badge text-bg-success">
                        <?php echo $birthdayEcho ?>
                    </span>
                </div>

                <form method="post" action="">
                    <button type="submit" name="signout" class="btn btn-primary m-3">Выйти</button>
                </form>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>