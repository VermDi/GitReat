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
{{--    <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>--}}
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
{{--    <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>--}}
    <link href="css/app.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="images/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
            <a href="index.php" class="navbar-brand">
                <b>MIMIN</b>
            </a>

            <ul class="nav navbar-nav search-nav">
                <li>
                    <div class="search">
                        <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                        <div class="form-group form-animate-text">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label class="label-search">Type anywhere to <b>Search</b> </label>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                <li class="dropdown avatar-dropdown">
                    <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <ul class="dropdown-menu user-dropdown">
                        <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                        <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="more">
                            <ul>
                                <li><a href=""><span class="fa fa-cogs"></span></a></li>
                                <li><a href=""><span class="fa fa-lock"></span></a></li>
                                <li><a href=""><span class="fa fa-power-off "></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid mimin-wrapper">
    <!-- start:Left Menu -->
    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li><div class="left-bg"></div></li>
                <li class="time">
                    <h1 class="animated fadeInLeft">21:00</h1>
                    <p class="animated fadeInRight">Sat,October 1st 2029</p>
                </li>
                <li class="active ripple">
                    <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="dashboard-v1.php">Dashboard v.1</a></li>
                        <li><a href="dashboard-v2.php">Dashboard v.2</a></li>
                    </ul>
                </li>
                <li class="ripple">
                    <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="topnav.php">Top Navigation</a></li>
                        <li><a href="boxed.php">Boxed</a></li>
                    </ul>
                </li>
                <li class="ripple">
                    <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                        <li><a href="chartjs.php">ChartJs</a></li>
                        <li><a href="morris.php">Morris</a></li>
                        <li><a href="flot.php">Flot</a></li>
                        <li><a href="sparkline.php">SparkLine</a></li>
                    </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span> Ui Elements  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="color.php">Color</a></li>
                        <li><a href="weather.php">Weather</a></li>
                        <li><a href="typography.php">Typography</a></li>
                        <li><a href="icons.php">Icons</a></li>
                        <li><a href="buttons.php">Buttons</a></li>
                        <li><a href="media.php">Media</a></li>
                        <li><a href="panels.php">Panels & Tabs</a></li>
                        <li><a href="notifications.php">Notifications & Tooltip</a></li>
                        <li><a href="badges.php">Badges & Label</a></li>
                        <li><a href="progress.php">Progress</a></li>
                        <li><a href="sliders.php">Sliders</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="modal.php">Modals</a></li>
                    </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="formelement.php">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                    </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="datatables.php">Data Tables</a></li>
                        <li><a href="handsontable.php">handsontable</a></li>
                        <li><a href="tablestatic.php">Static</a></li>
                    </ul>
                </li>
                <li class="ripple"><a href="calendar.php"><span class="fa fa-calendar-o"></span>Calendar</a></li>
                <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="mail-box.php">Inbox</a></li>
                        <li><a href="compose-mail.php">Compose Mail</a></li>
                        <li><a href="view-mail.php">View Mail</a></li>
                    </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Pages  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="forgotpass.php">Forgot Password</a></li>
                        <li><a href="login.php">SignIn</a></li>
                        <li><a href="reg.php">SignUp</a></li>
                        <li><a href="article-v1.php">Article v1</a></li>
                        <li><a href="search-v1.php">Search Result v1</a></li>
                        <li><a href="productgrid.php">Product Grid</a></li>
                        <li><a href="profile-v1.php">Profile v1</a></li>
                        <li><a href="invoice-v1.php">Invoice v1</a></li>
                    </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="view-mail.php">Level 1</a></li>
                        <li><a href="view-mail.php">Level 1</a></li>
                        <li class="ripple">
                            <a class="sub-tree-toggle nav-header">
                                <span class="fa fa-envelope-o"></span> Level 1
                                <span class="fa-angle-right fa right-arrow text-right"></span>
                            </a>
                            <ul class="nav nav-list sub-tree">
                                <li><a href="mail-box.php">Level 2</a></li>
                                <li><a href="compose-mail.php">Level 2</a></li>
                                <li><a href="view-mail.php">Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="credits.php">Credits</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>

</body>
</html>
