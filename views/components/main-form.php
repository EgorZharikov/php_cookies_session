<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Logo" width="40" height="24" class="d-inline-block align-text-top">
                    SPA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
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

                    <a class="nav-link m-2 <?php echo $collapse ? false : 'collapse' ?>" aria-current="page" style="color: green; font-weight: bold" href="views/pages/profile.php">
                        <img src="./img/user.png" alt="Logo" width="20" height="17" class="d-inline-block align-text-top">
                        <?php echo $username ?></a>

                    <form class="d-flex" action="views/pages/sign-in.php">
                        <button class="btn btn-outline-dark <?php echo $collapse ?> ">Sign in</button>
                    </form>

                </div>
            </div>
        </nav>

    </header>
    <div class="container background col-sm-5">
        <div id="carouselExampleAutoplaying" class="carousel slide col mt-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://unsplash.com/photos/SMwCQZWayj0/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzAyMTQwMjY0fA&force=true&w=640" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/X1s5YSBw8lU/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTR8fHNwYXxlbnwwfHx8fDE3MDIwNzg1NTV8MA&force=true&w=640" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/Pe9IXUuC6QU/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8NTd8fHNwYSUyMGhlZGVyfGVufDB8fHx8MTcwMjEyNTE1N3ww&force=true&w=640" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
    <div class="container col">
        <div class="col align-items-center mt-3  <?php echo $personDiscount ?>">
            <hr class="featurette-divider">
            <h1>Персональные акции</h1>
            <div class="card text-center mt-3 <?php echo $eventTimer ? false : 'collapse' ?>">
                <div class="card-header">
                    Для вас действует специальное предложение
                </div>
                <div class="card-body">
                    <h5 class="card-title">Скидка на массаж лица 50%</h5>
                    <a href="#" class="btn btn-primary">Применить</a>
                </div>
                <div class="card-footer fw-bold text-success">
                    <?php echo $eventTimer ?>
                </div>
            </div>
            <div class="card text-center mt-3">
                <div class="card-header">
                    Дарим скидку на день рождения!
                </div>
                <div class="card-body <?php echo $birthdayDiscount ?>">
                    <h5 class="card-title">Скидка 5% на все услуги!</h5>
                    <a href="#" class="btn btn-primary">Применить</a>
                </div>
                <div class="card-footer fw-bold text-success">
                    <?php echo $birthdayEcho ?>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="col align-items-center mt-3">
                <h1>Акции и новости</h1>
            </div>
            <hr class="featurette-divider">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://unsplash.com/photos/VDXtVYJVj7A/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Mnx8Q2hyaXN0bWFzfGVufDB8fHx8MTcwMjYxNTM0N3ww&force=true&w=640" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Новогодняя акция: отдых за 1999 рублей</h5>
                                <p class="card-text">Действует до 31 декабря.</p>
                                <a href="#" class="btn btn-outline-success">Записаться</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://unsplash.com/photos/PibraWHb4h8/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzAyNjE0NzUwfA&force=true&w=640" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">VIP номер</h5>
                                <p class="card-text">Почувствуй комфорт!</p>
                                <a href="#" class="btn btn-outline-success">Записаться</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://unsplash.com/photos/RJCslxmvBcs/download?force=true&w=640" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Акция на массаж лица</h5>
                                <p class="card-text">15 мин - 888 рублей</p>
                                <a href="#" class="btn btn-outline-success">Записаться</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://unsplash.com/photos/cU53ZFBr3lk/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8M3x8c3BhfGVufDB8fHx8MTcwMjEzMzM1Nnww&force=true&w=640" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Массаж головы</h5>
                                <p class="card-text">20 мин - 1200 рублей</p>
                                <a href="#" class="btn btn-outline-success">Записаться</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Эспресс-массажи</h2>
                        <p class="lead">
                            В процессе проведения массажа, почувствуете, как медленно и приятно уходит усталость и напряжение в мышцах, как мысли становятся светлыми и позитивными, а душа наполняется удивительным спокойствием и радостью.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://unsplash.com/photos/cJwl8182Mjs/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MzZ8fHNwYSUyMG1hc3NhZ2V8ZW58MHx8fHwxNzAyNjEyMjAxfDA&force=true&w=640" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Зона «Аква»</h2>
                        <p class="lead">Стильное пространство с панорамными окнами, которое вмещает множество водных локаций, отличающихся размерами и назначением. Кроме того, здесь есть отдельная просторная зона с морским микроклиматом, цитрусовая сауна, и зоны отдыха, где можно расслабиться после водных процедур, и кафе домашней кухни.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://unsplash.com/photos/a8iCZvtrHpQ/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzAyNjE2NzkwfA&force=true&w=640" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Зона «Тишина»</h2>
                        <p class="lead">Зона «Тишина» — пространство для снятия стресса и эмоционального восстановления. Доступна для гостей от 14 лет включительно. Все локации и практики, которые здесь есть, помогут перезагрузиться, уйти в глубокое расслабление и приблизиться к самому себе. </p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://unsplash.com/photos/I3VF9Cu4agc/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzAyNjE2Njg1fA&force=true&w=640" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </div>
                </div>

                <hr class="featurette-divider">
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="container">
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Реклама</a>
        </div>
    </div>
</footer>

</html>