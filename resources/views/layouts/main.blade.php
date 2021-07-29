<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админка Рестораны - @yield('title')</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css"/>
    <link href="css/app.css" rel="stylesheet">
    <!-- end: Css -->
    <link rel="shortcut icon" href="images/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="mimin" class="dashboard">
<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
            <a href="index.php" class="navbar-brand">
                <b>GitRest-Admin</b>
            </a>

            <ul class="nav navbar-nav search-nav">
                <li>
                    <div class="search">
                        <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                        <div class="form-group form-animate-text">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label class="label-search"><b>Поиск</b></label>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Name Admin</span></li>
                <li class="dropdown avatar-dropdown">
                    <img src="/images/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="true"/>
                    <ul class="dropdown-menu user-dropdown">
                        <li><a href="#"><span class="fa fa-user"></span> Профиль </a></li>
                        <li><a href="#"><span class="fa fa-calendar"></span> Мои события</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="more">
                            <ul>
                                <li><a href=""><span class="fa fa-cogs"></span></a></li>
                                <li><a href=""><span class="fa fa-lock"></span></a></li>
                                <li>
                                    <form method="post" action="{{route('logout')}}">
                                        @csrf
                                        <button type="submit" class="btn btn-link">
                                            <span class="fa fa-power-off "></span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid mimin-wrapper">
    <!-- start:Left Menu -->

    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li>
                    <div class="left-bg"></div>
                </li>
                <li class="time">
                    <h1 class="animated fadeInLeft">21:00</h1>
                    <p class="animated fadeInRight">Sat,October 1st 2029</p>
                </li>
                <li class="active ripple">
                    <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Пользователи
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="/restaurants">Список</a></li>
                        <li><a href="dashboard-v1.php">Форма добавления </a></li>
                        <li><a href="dashboard-v1.php">Статистика</a></li>

                    </ul>
                </li>
                <li class="ripple">
                    <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Рестораны
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="dashboard-v1.php">Список Ресторанов</a></li>
                        <li><a href="dashboard-v1.php">Форма добавления</a></li>
                        <li><a href="dashboard-v2.php">Подробное описание</a></li>
                        <li><a href="dashboard-v2.php">Персонал</a></li>
                        <li><a href="dashboard-v2.php">Вакансии</a></li>
                        <li><a href="dashboard-v2.php">Статистика</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>
<script src="js/app.js"></script>
</body>
</html>
