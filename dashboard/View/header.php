<?php
require_once('../tracking/config.php');
require_once('../tracking/session.php');
$userDetails = $userClass->userDetails($session_uid);

require_once('header-utils.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AZEDPRESS - Tracking System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Boxicons - for your changes-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="assets/full/ckeditor.js"></script>
</head>

<body>



    <body>
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <div class="side-navbar-wrapper">
                <!-- Sidebar Header    -->
                <div class="sidenav-header d-flex align-items-center justify-content-center">
                    <!-- User Info-->
                    <div class="sidenav-header-inner text-center"><a href="index.php"><img src="assets/img/<?php echo $userDetails->username; ?>.jpg" alt="<?php echo $userDetails->name; ?>" class="img-fluid rounded-circle"></a>
                        <h2 class="h5"><?php echo $userDetails->name; ?></h2><span><?php echo $userDetails->namerol; ?></span>
                    </div>
                    <!-- Small Brand information, appears on minimized sidebar-->
                    <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">Z</strong></a></div>
                </div>
                <!-- Sidebar Navigation Menus-->
                <div class="main-menu">
                    <h5 class="sidenav-heading">Main</h5>
                    <ul id="side-main-menu" class="side-menu list-unstyled">
                        <?php if ($userDetails->idrol == 1) : ?>
                            <li class=""><a href="?c=home"> <i class="icon-home"></i>Dashboard</a></li>
                        <?php endif; ?>
                        <?php if ($userDetails->idrol == 2) : ?>
                            <li class=""><a href="index.php"> <i class="icon-home"></i>Home</a></li>
                        <?php endif; ?>
                        <li class=""><a href="?c=Trackings"> <i class="icon-list"></i>Trackings</a></li>

                        <?php if ($userDetails->idrol == 1) : ?>
                            <li class=""><a href="?c=Logins"> <i class="icon-user"></i>Clientes</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page">
            <!-- navbar-->
            <header class="header">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                                    <div class="brand-text d-none d-md-inline-block"><span>System</span><strong class="text-primary"> Dashboard</strong></div>
                                </a></div>
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <?php if ($userDetails->idrol == 1) : ?>
                                <!-- Notifications dropdown-->
                                <?php if ($alertbag == 0) : ?>
                                <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i></a>
                                <?php else : ?>
                                <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-primary"><?php echo $alertbag ?></span></a>
                                <?php endif; ?>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <?php foreach ($this->model->alertList() as $r) : ?>
                                            <?php if ($r->courierid == 7) : ?>
                                                <li><a rel="nofollow" href="?c=Trackings&a=Crud&trackingid=<?php echo $r->trackingid; ?>" class="dropdown-item d-flex">
                                                        <div class="msg-profile"> <img src="assets/img/<?php echo $r->username; ?>.jpg" alt="<?php echo $r->username; ?>" class="img-fluid rounded-circle"></div>
                                                        <div class="msg-body">
                                                            <h3 class="h5"><?php echo $r->name; ?></h3><span>Sent a new prealert</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                                        </div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if ($alertbag == 0) : ?>
                                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>No notifications</strong></a></li>
                                        <?php else : ?>
                                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>View all notifications</strong></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <!-- Languages dropdown    -->
                                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="assets/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                                    <ul aria-labelledby="languages" class="dropdown-menu">
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="assets/img/flags/16/ES.png" alt="Spanish" class="mr-2"><span>Spanish</span></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="assets/img/flags/16/FR.png" alt="English" class="mr-2"><span>French </span></a></li>
                                    </ul>
                                </li>
                                <!-- Log out-->
                                <li class="nav-item"><a href="<?php echo BASE_URL; ?>logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>