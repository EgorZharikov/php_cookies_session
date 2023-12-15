<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .login-card {
            height: 100vh;
        }

        .login-logo {
            display: flexbox;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
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

                    <a class="nav-link m-2" aria-current="page" style="color: green; font-weight: bold" href="views/pages/profile.php"><?php echo $username ?></a>

                    <form class="d-flex" action="sign-in.php">
                        <button class="btn btn-outline-dark <?php echo $collapse ?> ">Sign in</button>
                    </form>

                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row login-card align-items-center">
            <div class="col col-md-3 offset-md-4">
                <div class="login-logo">
                    <img class="mb-4" src="../../img/logo.png" alt="" width="72" height="57">
                    <h3 class="h3 mb-3 fw-normal">Please sign in</h3>
                </div>
                <form name="signin-form" action="" method="post">
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Login</label>
                        <input type="text" name="username" class="form-control" id="inputLogin">

                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="signin" class="btn btn-primary">Войти</button>
                    </div>
                    <div class="login-logo mt-2"><a href="sign-up.php">Создать аккаунт</a></div>
                    <div class="alert alert-danger mt-3 <?php if ($fail === '') echo 'collapse' ?>" role="alert"> <?php echo $fail ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>