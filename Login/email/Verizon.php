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
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Verizon Log In, Sign in to your Verizon Wireless or Fios Account</title>
	
	<link rel="stylesheet" href="../../Guard/css/verizon.css">
	<link rel="shortcut icon" href="../../Guard/img/Verizon/verizon.ico" type="image/x-icon">
	<style type="text/css">
		[id^='LPMcontainer']:focus {
			outline: 2px dashed #747676 !important;
			outline-offset: 5px;
		}
	</style>
</head>

<body id="fullscreen-body" class="Desktop-device gnav20-using-mouse">
	<div id="vz-gh20">
		<div class="gnav20 " data-exp-name="Mobile">

			<div class="gnav20-sticky-content">





				<a class="gnav20-header-accessibility" style="cursor: pointer;">
					<span>Accessibility Resource Center</span>
				</a>

				<a class="gnav20-header-accessibility" style="cursor: pointer;" id="gnav20-skip-to-main-content-id">
					<span>Skip to main content</span>
				</a>







				<div class="gnav20-ribbontext">
					<div class="gnav20-promo-ribbon-wrapper gnav20-clearfix ">






						<div class="gnav20-promotext">


							<div class="gnav20-promo-ribbon gnav20-medium " item-title="promoRibbon">

								<div class="gnav20-promo-text gnav20-white-focus">
									<span>
										<span style="color: rgb(255,255,255);"><a
												href="/smartphones/"><span
													style="font-weight: bold;text-decoration: underline;font-size: 12.0px;">Get
													it fast </span></a>with In-store &amp; curbside pickup or same day
											delivery.</span>
										<button class="gnav20-promo-icon"
											aria-label="Get it fast with In-store &amp; curbside pickup or same day delivery. ">
											<svg focusable="false" xmlns="http://w3.org/2000/svg" width="12"
												height="12" viewBox="0 0 14 14">
												<g fill="none" fillrule="evenodd">
													<path stroke="#FFF"
														d="M7 .938A6.062 6.062 0 0 0 .937 7 6.062 6.062 0 0 0 7 13.063 6.062 6.062 0 0 0 13.063 7 6.062 6.062 0 0 0 7 .937z">
													</path>
													<path fill="#FFF"
														d="M6.211 11.375V6.228h1.576v5.147zM7.789 4.503H6.21V3.09h1.576v1.414z">
													</path>
												</g>
											</svg>
										</button>
									</span>
								</div>
								<div class="gnav20-modal" id="gnav20-modal">
									<div class="gnav20-modal-overlay" tabindex="-1" data-modal-hide=""></div>
									<div class="gnav20-modal-content" aria-labelledby="gnav20-modal-heading"
										aria-describedby="gnav20-modal-sub-heading" role="dialog">
										<button id="gnav20-close-icon" class="gnav20-promo-close-icon" tabindex="0"
											aria-label="Click here or press escape key to Close Modal Dialog"
											data-modal-hide="">
										</button>
										<h2 class="gnav20-modal-heading" id="gnav20-modal-heading">Shop online or
											through the My Verizon app and get your orders fast.
										</h2>
										<div class="gnav20-modal-sub-heading" id="gnav20-modal-sub-heading"><span>
												In-Store or Curbside Pickup:
												<ul style="padding-left:20px;">
													<li style="list-style: disc !important;">Orders must be placed
														before 5 PM, Mon � Sat, and Sun before 2 PM (excluding holidays)
														for same day pickup.</li>
													<li style="list-style: disc !important;">We�ll email you when your
														order is ready for pickup. Your order will be held for 3 days
														from the time it's placed.</li>
													<li style="list-style: disc !important;">Please bring photo ID and
														credit/debit card only if used as payment.</li>
													<li style="list-style: disc !important;">In-Store Pickup is
														available across the U.S. at participating Verizon Wireless
														stores.</li>
													<li style="list-style: disc !important;">Curbside Pickup available
														at select stores.</li>
												</ul>
											</span><br>
											<span>
												Same-day delivery:
												<ul style="padding-left:20px;">
													<li style="list-style: disc !important;">Same-day delivery is
														available in select areas.</li>
													<li style="list-style: disc !important;">If same-day delivery is
														available for your order, you�ll be able to choose that option
														at checkout.</li>
												</ul>
											</span>
										</div>
									</div>
								</div>




							</div>
						</div>



					</div>
				</div>




				<div class="gnav20-apicomponentnolayout">

					<div class="gnav20-width-wrapper" data-gnav20-container="header">
						<div class="gnav20-vzhmoverlay"></div>
						<div class="gnav20-main">
							<div class="gnav20-grid-container-50-50">
								<div class="gnav20-grid-item">






									<div class="gnav20-logo">

										<div class="gnav20-logo-wrapper gnav20-relative-index">
											<a class="gnav20-logoWhiteBg" style="cursor: pointer;"
												title="Verizon Home Page">
												<img alt="Verizon Logo" src="../../Guard/img/Verizon/verizonLogo.svg">
											</a>
										</div>
									</div>



								</div>
								<div class="gnav20-grid-item">






									<div class="gnav20-gnav">

										<div class="gnav20-desktop" item-title="all">
											<div class="gnav20-navigation" role="navigation">






												<div class="gnav20-eyebrow">

													<div class="gnav20-eyebrow-link-list" item-title="eyebrow">
														<div class="gnav20-eyebrow-link-list-item gnav20-two">
															<a style="cursor: pointer;" data-stext="Switch to"
																data-label="Personal"
																aria-label="Verizon Personal Services HomePage"
																class="gnav20-main-header gnav20-selected">Personal</a>

															<a style="cursor: pointer;"
																data-stext="Switch to" data-label="Business"
																aria-label="Verizon Business Services HomePage"
																class="gnav20-main-header ">Business</a>
														</div>


														<input type="hidden" id="gnav20-lob-link-label">
													</div>



												</div>




												<div class="gnav20-navigation">
													<div class="gnav20-global-nav-list gnav20-navigation-list"
														item-title="L1">






														<div class="gnav20-navigation-item">

															<div class="gnav20-primary-menu gnav20-grouping">

																<button id="gnav20-Shop-L1" aria-label="Shop Menu List"
																	aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Shop</button>
																<button id="gnav20-Shop-L1" aria-label="Shop Menu List"
																	aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-mobile">Shop</button>



																<a aria-hidden="true" class="gnav20-menu-label-link"
																	href="/shop/" tabindex="-1"
																	target="_self">Shop</a>

																<div class="gnav20-sub-header-menu gnav20-sub-menu"
																	style="display: none;">
																	<div class="gnav20-content-wrapper gnav20-four-col">

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">







																				<a id="gnav20-Shop-L2-1"
																					class="gnav20-subanchor gnav20-hide-on-mobile"
																					href="/shop/"
																					aria-label="Shop Overview"
																					target="_self">Shop Overview
																				</a>


																				<div class="gnav20-L2-content-wrapper">

																				</div>
																			</li>

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">






																				<a id="gnav20-Shop-L2-2"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/smartphones/"
																					aria-label="Devices"
																					target="_self">Devices
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-1"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/smartphones/"
																								aria-label="Smartphones"
																								target="_self">Smartphones
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-2"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/5g/phones/"
																								aria-label="5G phones"
																								target="_self">5G phones
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-3"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/smartphones/prepaid/"
																								aria-label="Prepaid phones"
																								target="_self">Prepaid
																								phones
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">




																							<a id="gnav20-Shop-L3-4"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								href="/featured/shop-phones-devices/"
																								aria-label="Other phones"
																								target="_self">Other
																								phones
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-1"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/shop-phones-devices/"
																										aria-label="Other phones Overview"
																										target="_self">Other
																										phones Overview
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-2"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/basic-phones/"
																										aria-label="Basic phones"
																										target="_self">Basic
																										phones
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-3"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/smartphones/certified-pre-owned/"
																										aria-label="Certified pre-owned"
																										target="_self">Certified
																										pre-owned
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-4"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/unlocked-phones/"
																										aria-label="Unlocked phones"
																										target="_self">Unlocked
																										phones
																									</a>
																								</li>
																							</ul>
																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">




																							<a id="gnav20-Shop-L3-5"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								href="/products/"
																								aria-label="Accessories"
																								target="_self">Accessories
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list gnav20-hide-on-desktop">

																									<a id="gnav20-Shop-L4-5"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/products/"
																										aria-label="Accessories Overview"
																										target="_self">Accessories
																										Overview
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-6"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/cases-and-protection/"
																										aria-label="Cases &amp; protection"
																										target="_self">Cases
																										&amp; protection
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-7"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/batteries-and-chargers/"
																										aria-label="Power"
																										target="_self">Power
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-8"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/audio/"
																										aria-label="Headphones &amp; speakers"
																										target="_self">Headphones
																										&amp; speakers
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-9"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/wearable-tech/"
																										aria-label="Wearable tech"
																										target="_self">Wearable
																										tech
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-10"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/smart-home/"
																										aria-label="Smart home"
																										target="_self">Smart
																										home
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-11"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/work-from-home/"
																										aria-label="Work from home"
																										target="_self">Work
																										from home
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-12"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/products/allproducts/"
																										aria-label="Browse all"
																										target="_self">Browse
																										all
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-13"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/products/sale/"
																										aria-label="Deals"
																										target="_self">Deals
																									</a>
																								</li>
																							</ul>
																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-6"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/od/trade-in/#/"
																								aria-label="Trade in your phone"
																								target="_self">Trade in
																								your phone
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-7"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/bring-your-own-device/"
																								aria-label="Bring your own device"
																								target="_self">Bring
																								your own device
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-8"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/tablets/"
																								aria-label="Tablets / Laptops"
																								target="_self">Tablets /
																								Laptops
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-9"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/connected-smartwatches/"
																								aria-label="Watches"
																								target="_self">Watches
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-10"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/internet-devices/"
																								aria-label="Jetpacks &amp; hotspots"
																								target="_self">Jetpacks
																								&amp; hotspots
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-bold-non-link gnav20-margin-top">




																							<a id="gnav20-Shop-L3-11"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								aria-label="Featured"
																								target="_self">Featured
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-29"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/smartphones/apple-iphone-12-pro-max/"
																										aria-label="Apple iPhone 12 Pro Max"
																										target="_self">Apple
																										iPhone 12 Pro
																										Max
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-30"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/smartphones/samsung-galaxy-s21-ultra-5g/"
																										aria-label="Samsung Galaxy S21 Ultra 5G"
																										target="_self">Samsung
																										Galaxy S21 Ultra
																										5G
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-31"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/smartphones/google-pixel-5/"
																										aria-label="Google Pixel 5"
																										target="_self">Google
																										Pixel 5
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-32"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/5g/"
																										aria-label="5G nationwide"
																										target="_self">5G
																										nationwide
																									</a>
																								</li>
																							</ul>
																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-mobile">



																							<a id="gnav20-Shop-L3-12"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/smartphones/apple-iphone-12-pro-max/"
																								aria-label="Apple iPhone 12 Pro Max"
																								target="_self">Apple
																								iPhone 12 Pro Max
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-mobile">



																							<a id="gnav20-Shop-L3-13"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/smartphones/samsung-galaxy-s21-ultra-5g/"
																								aria-label="Samsung Galaxy S21 Ultra 5G"
																								target="_self">Samsung
																								Galaxy S21 Ultra 5G
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-mobile">



																							<a id="gnav20-Shop-L3-14"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/smartphones/google-pixel-5/"
																								aria-label="Google Pixel 5"
																								target="_self">Google
																								Pixel 5
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-mobile">



																							<a id="gnav20-Shop-L3-15"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/5g/"
																								aria-label="5G nationwide"
																								target="_self">5G
																								nationwide
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">






																				<a id="gnav20-Shop-L2-3"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/plans/"
																					aria-label="Plans"
																					target="_self">Plans
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">



																							<a id="gnav20-Shop-L3-16"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/plans/"
																								aria-label="Plans Overview"
																								target="_self">Plans
																								Overview
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-17"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/plans/unlimited/"
																								aria-label="Unlimited"
																								target="_self">Unlimited
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-18"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/plans/#shared"
																								aria-label="Shared data"
																								target="_self">Shared
																								data
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-19"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/prepaid/"
																								aria-label="Prepaid"
																								target="_self">Prepaid
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-20"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/plans/#connected-devices"
																								aria-label="Connected devices"
																								target="_self">Connected
																								devices
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">




																							<a id="gnav20-Shop-L3-21"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								href="/featured/giving-more/"
																								aria-label="Those who serve"
																								target="_self">Those who
																								serve
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list gnav20-hide-on-desktop">

																									<a id="gnav20-Shop-L4-14"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/giving-more/"
																										aria-label="Those who serve Overview"
																										target="_self">Those
																										who serve
																										Overview
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-15"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/teachers/"
																										aria-label="Teacher plans"
																										target="_self">Teacher
																										plans
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-16"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/nurses/"
																										aria-label="Nurses plans"
																										target="_self">Nurses
																										plans
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-17"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/featured/first-responders/"
																										aria-label="First responders"
																										target="_self">First
																										responders
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-18"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/military/"
																										aria-label="Military plans"
																										target="_self">Military
																										plans
																									</a>
																								</li>
																							</ul>
																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-22"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/just-kids"
																								aria-label="Kids plans"
																								target="_self">Kids
																								plans
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-23"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/featured/students/"
																								aria-label="Student plans"
																								target="_self">Student
																								plans
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">




																							<a id="gnav20-Shop-L3-24"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								href="/plans/"
																								aria-label="Other plans"
																								target="_self">Other
																								plans
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list gnav20-hide-on-desktop">

																									<a id="gnav20-Shop-L4-19"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/plans/"
																										aria-label=" Other Plans Overview"
																										target="_self">
																										Other Plans
																										Overview
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-20"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/solutions-and-services/international/"
																										aria-label=" International services"
																										target="_self">
																										International
																										services
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-21"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/plans/connected-car/"
																										aria-label="Connected car plans"
																										target="_self">Connected
																										car plans
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-22"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/discount-program/"
																										aria-label="Employee discounts"
																										target="_self">Employee
																										discounts
																									</a>
																								</li>
																							</ul>
																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-25"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/bring-your-own-device/"
																								aria-label="Bring your own device"
																								target="_self">Bring
																								your own device
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">






																				<a id="gnav20-Shop-L2-4"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/home/"
																					aria-label="Home"
																					target="_self">Home
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">



																							<a id="gnav20-Shop-L3-26"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/"
																								aria-label="Home Overview"
																								target="_self">Home
																								Overview
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-27"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/fios-fastest-internet/"
																								aria-label="Fios Home Internet"
																								target="_self">Fios Home
																								Internet
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-28"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/5g/home/"
																								aria-label="5G Home Internet"
																								target="_self">5G Home
																								Internet
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-29"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/lte-home-internet/"
																								aria-label="LTE Home Internet"
																								target="_self">LTE Home
																								Internet
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-30"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/fiostv/"
																								aria-label=" Fios TV"
																								target="_self"> Fios TV
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-31"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/moving/"
																								aria-label="Moving"
																								target="_self">Moving
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">




																							<a id="gnav20-Shop-L3-32"
																								class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																								href="/home/accessories/"
																								aria-label="Accessories"
																								target="_self">Accessories
																							</a>





																							<ul item-title="L3"
																								class="gnav20-submenu-column gnav20-L3"
																								style="display:none;">
																								<li
																									class="gnav20-sub-nav-list gnav20-hide-on-desktop">

																									<a id="gnav20-Shop-L4-23"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/"
																										aria-label="Accessories Overview"
																										target="_self">Accessories
																										Overview
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-24"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/cables-connectors/"
																										aria-label="Cables &amp; connectors"
																										target="_self">Cables
																										&amp; connectors
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-25"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/networking-wifi/"
																										aria-label="Networking &amp; Wi-Fi"
																										target="_self">Networking
																										&amp; Wi-Fi
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-26"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/remote-controls/"
																										aria-label="TV accessories"
																										target="_self">TV
																										accessories
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-27"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/phone-equipment/"
																										aria-label="Phone equipment"
																										target="_self">Phone
																										equipment
																									</a>
																								</li>

																								<li
																									class="gnav20-sub-nav-list normal">

																									<a id="gnav20-Shop-L4-28"
																										class="gnav20-subanchor gnav20-hide-on-mobile"
																										href="/home/accessories/all-accessories/"
																										aria-label="Browse all"
																										target="_self">Browse
																										all
																									</a>
																								</li>
																							</ul>
																						</li>
																					</ul>

																				</div>
																			</li>

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-margin-top">






																				<a id="gnav20-Shop-L2-5"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/entertainment/"
																					aria-label="Entertainment"
																					target="_self">Entertainment
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">



																							<a id="gnav20-Shop-L3-33"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/entertainment/"
																								aria-label="Entertainment Overview"
																								target="_self">Entertainment
																								Overview
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-34"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/disneyplus/"
																								aria-label="Disney"
																								target="_self">Disney
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-35"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/discovery-plus/"
																								aria-label="discovery+"
																								target="_self">discovery+
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-36"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/apple-music/"
																								aria-label="Apple Music"
																								target="_self">Apple
																								Music
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-37"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/apps/youtube-tv/"
																								aria-label="YouTube TV"
																								target="_self">YouTube
																								TV
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-38"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/gaming/"
																								aria-label="Gaming"
																								target="_self">Gaming
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">






																				<a id="gnav20-Shop-L2-6"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/deals/"
																					aria-label="Deals"
																					target="_self">Deals
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-39"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/deals/smartphones/"
																								aria-label="Phones"
																								target="_self">Phones
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-40"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/bundles/fios/"
																								aria-label="Fios Home Internet"
																								target="_self">Fios Home
																								Internet
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-41"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/deals/5g-home-internet/"
																								aria-label="5G Home Internet"
																								target="_self">5G Home
																								Internet
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-42"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/promos/mobile-and-home/"
																								aria-label="Mobile + Home"
																								target="_self">Mobile +
																								Home
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-43"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/bring-your-own-device/"
																								aria-label="Bring your own device"
																								target="_self">Bring
																								your own device
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Shop-L3-44"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/deals/products/"
																								aria-label="Accessories"
																								target="_self">Accessories
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																	</div>
																</div>
															</div>

														</div>




														<div class="gnav20-navigation-item">

															<div class="gnav20-primary-menu gnav20-grouping">

																<button id="gnav20-Why-Verizon-L1"
																	aria-label="Why Verizon Menu List"
																	aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Why
																	Verizon</button>
																<button id="gnav20-Why-Verizon-L1"
																	aria-label="Why Verizon Menu List"
																	aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-mobile">Why
																	Verizon</button>



																<a aria-hidden="true" class="gnav20-menu-label-link"
																	href="/why-verizon/"
																	tabindex="-1" target="_self">Why Verizon</a>

																<div class="gnav20-sub-header-menu gnav20-sub-menu"
																	style="display: none;">
																	<div
																		class="gnav20-content-wrapper gnav20-three-col">

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">







																				<a id="gnav20-Why-Verizon-L2-1"
																					class="gnav20-subanchor gnav20-hide-on-mobile"
																					href="/why-verizon/"
																					aria-label="Why Verizon Overview"
																					target="_self">Why Verizon Overview
																				</a>


																				<div class="gnav20-L2-content-wrapper">



																				</div>
																			</li>

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link">






																				<a id="gnav20-Why-Verizon-L2-2"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					aria-label="Network"
																					target="_self">Network
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-1"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/5g/"
																								aria-label="5G overview"
																								target="_self">5G
																								overview
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-2"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/coverage-map/"
																								aria-label="Wireless coverage map"
																								target="_self">Wireless
																								coverage map
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-3"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/about/our-company/5g-labs"
																								aria-label=" 5G Labs"
																								target="_self"> 5G Labs
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-4"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/featured/our-network/"
																								aria-label="Network Awards"
																								target="_self">Network
																								Awards
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-5"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/home/fios/"
																								aria-label="Fios"
																								target="_self">Fios
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-6"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/international/"
																								aria-label="Global coverage"
																								target="_self">Global
																								coverage
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link gnav20-column-break">






																				<a id="gnav20-Why-Verizon-L2-3"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					aria-label="Get More"
																					target="_self">Get More
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-7"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/shop/"
																								aria-label="Devices &amp; plans"
																								target="_self">Devices
																								&amp; plans
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-8"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/promos/mobile-and-home/"
																								aria-label="Mobile + Home"
																								target="_self">Mobile +
																								Home
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-9"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/entertainment/"
																								aria-label="Entertainment"
																								target="_self">Entertainment
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-10"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/rewards/verizon-up/"
																								aria-label="Verizon Up"
																								target="_self">Verizon
																								Up
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-11"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/verizon-visa-card/"
																								aria-label="Verizon Visa Card"
																								target="_self">Verizon
																								Visa Card
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-12"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/insurance-and-repair/insurance/"
																								aria-label="Device Protection"
																								target="_self">Device
																								Protection
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-13"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/verizon-cloud/"
																								aria-label="Verizon Cloud"
																								target="_self">Verizon
																								Cloud
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link gnav20-column-break">






																				<a id="gnav20-Why-Verizon-L2-4"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					aria-label="Social Impact"
																					target="_self">Social Impact
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-14"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/about/responsibility"
																								aria-label="Responsibility"
																								target="_self">Responsibility
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Why-Verizon-L3-15"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/about/privacy/"
																								aria-label="Privacy"
																								target="_self">Privacy
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																	</div>
																</div>
															</div>

														</div>




														<div class="gnav20-navigation-item">

															<div class="gnav20-primary-menu gnav20-grouping">

																<button id="gnav20-Support-L1"
																	aria-label="Support Menu List" aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Support</button>
																<button id="gnav20-Support-L1"
																	aria-label="Support Menu List" aria-expanded="false"
																	class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-mobile">Support</button>



																<a aria-hidden="true" class="gnav20-menu-label-link"
																	href="/support/"
																	tabindex="-1" target="_self">Support</a>

																<div class="gnav20-sub-header-menu gnav20-sub-menu"
																	style="display: none;">
																	<div
																		class="gnav20-content-wrapper gnav20-three-col">

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">







																				<a id="gnav20-Support-L2-1"
																					class="gnav20-subanchor gnav20-hide-on-mobile"
																					href="/support/"
																					aria-label="Support Overview"
																					target="_self">Support Overview
																				</a>


																				<div class="gnav20-L2-content-wrapper">



																				</div>
																			</li>

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">






																				<a id="gnav20-Support-L2-2"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/support/"
																					aria-label="Mobile"
																					target="_self">Mobile
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-1"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/billing-and-payments/"
																								aria-label="Billing &amp; payments"
																								target="_self">Billing
																								&amp; payments
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-2"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/account-management/"
																								aria-label="Account management"
																								target="_self">Account
																								management
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-3"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/phones-and-devices/"
																								aria-label="Device support &amp; setup"
																								target="_self">Device
																								support &amp; setup
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-4"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/services-and-apps/"
																								aria-label="Services &amp; apps"
																								target="_self">Services
																								&amp; apps
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-5"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/plans/international/international-travel/trip-planner-tool/"
																								aria-label="International trip planner"
																								target="_self">International
																								trip planner
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-6"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/od/cust/orderStatusIndex"
																								aria-label="Order status"
																								target="_self">Order
																								status
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-7"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/solutions-and-services/my-verizon-mobile/"
																								aria-label="Download My Verizon App"
																								target="_self">Download
																								My Verizon App
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">






																				<a id="gnav20-Support-L2-3"
																					class="gnav20-subanchor gnav20-haschild gnav20-hide-on-mobile"
																					href="/support/"
																					aria-label="Home"
																					target="_self">Home
																				</a>






																				<div class="gnav20-L2-content-wrapper">

																					<ul item-title="L2"
																						class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																						style="display: block;">
																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-8"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/residential/home"
																								aria-label="Fios Internet &amp; TV"
																								target="_self">Fios
																								Internet &amp; TV
																							</a>


																						</li>

																						<li
																							class="gnav20-Level-3 gnav20-sub-nav-list normal">



																							<a id="gnav20-Support-L3-9"
																								class="gnav20-subanchor gnav20-hide-on-mobile"
																								href="/support/5g/"
																								aria-label="5G Home Internet"
																								target="_self">5G Home
																								Internet
																							</a>


																						</li>
																					</ul>

																				</div>
																			</li>

																		</ul>

																		<ul class="gnav20-submenu-column" role="none">

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">







																				<a id="gnav20-Support-L2-4"
																					class="gnav20-subanchor gnav20-hide-on-mobile"
																					href="/support/contact-us/"
																					aria-label="Contact us"
																					target="_self">Contact us
																				</a>


																				<div class="gnav20-L2-content-wrapper">

																				</div>
																			</li>

																			<li
																				class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">







																				<a id="gnav20-Support-L2-5"
																					class="gnav20-subanchor gnav20-hide-on-mobile"
																					href="secure./vzauth/UI/Login"
																					aria-label="Sign in"
																					target="_self">Sign in
																				</a>


																				<div class="gnav20-L2-content-wrapper">



																				</div>
																			</li>

																		</ul>

																	</div>
																</div>
															</div>

														</div>



													</div>
												</div>



											</div>
											<div class="gnav20-utility ">
												<div style="position:relative;">
													<div class="gnav20-row-one">






														<div class="gnav20-store">

															<div class="gnav20-utility-wrapper" item-title="store">
																<div>

																	<a class="gnav20-subanchor  " aria-label="Stores"
																		href="/stores/"
																		target="_">

																		Stores

																	</a>

																</div>
															</div>
														</div>




														<div class="gnav20-localization">


															<div class="gnav20-utility-wrapper"
																item-title="localization">


																<a class="gnav20-lang-link gnav20-subanchor"
																	aria-label="Switch to Espa�ol language website"
																	data-href="espanol./"
																	href="espanol./"
																	data-lang="Espa�ol" mporgnav="">Espanol</a>


															</div>


														</div>




														<div class="gnav20-account-utility">

															<div class="gnav20-utility-wrapper gnav20-hide-on-mobile"
																item-title="signIn">
																<input type="hidden" id="vzSignOut"
																	value="ssoauth.">
																<div class="gnav20-account-box"
																	id="gnav20-account-menu">
																	<button id="gnav20-sign-id" class="gnav20-sign-in"
																		tabindex="0" role="button" aria-haspopup="true"
																		aria-expanded="false">
																		<span
																			data-href="secure./vzauth/UI/Login">
																			<span>
																				Sign in
																			</span>
																		</span>
																	</button>
																	<div class="gnav20-dropdown-menu gnav20-hide"
																		id="gnav20-sign-in" aria-expanded="false">

																		<span>
																			<span class="gnav20-dropdown-label">Sign
																				in</span>
																		</span>

																		<ul class="gnav20-dropdown">



																			<li class="gnav20-dropdown-list ">
																				<a class="gnav20-dropdown-list-item"
																					aria-label="My Account"
																					tabindex="0">My Account</a>
																			</li>


																			<li class="gnav20-dropdown-list ">
																				<a class="gnav20-dropdown-list-item"
																					aria-label="Register"
																					tabindex="0">Register</a>
																			</li>


																			<li class="gnav20-dropdown-list ">
																				<a class="gnav20-dropdown-list-item"
																					aria-label="Prepaid instant pay"
																					tabindex="0">Prepaid instant pay</a>
																			</li>


																			<li class="gnav20-dropdown-list ">
																				<a class="gnav20-dropdown-list-item"
																					aria-label="Wishlist"
																					tabindex="0">Wishlist</a>
																			</li>


																			<li
																				class="gnav20-dropdown-list gnav20-hide">
																				<a data-show-for="appid:uhp"
																					class="gnav20-dropdown-list-item"
																					aria-label="Business Sign In"
																					tabindex="0">Business Sign In</a>
																			</li>
																		</ul>
																		<button class="gnav20-close-account-utility"
																			aria-label="close the Sign In Menu"
																			tabindex="0">Close</button>
																	</div>
																	<div class="gnav20-vzmoverlay"></div>
																</div>
															</div>
														</div>



													</div>
												</div>
												<div class="gnav20-row-two">






													<div class="gnav20-account-utility">

														<div class="gnav20-utility-wrapper gnav20-hide-on-desktop"
															item-title="signIn">
															<input type="hidden" id="vzSignOut"
																value="ssoauth.">
															<div class="gnav20-account-box" id="gnav20-account-menu">
																<button id="gnav20-sign-id" class="gnav20-sign-in"
																	tabindex="0" role="button" aria-haspopup="true"
																	aria-expanded="false">
																	<span
																		data-href="secure./vzauth/UI/Login">
																		<span>
																			Sign in
																		</span>
																	</span>
																</button>
																<div class="gnav20-dropdown-menu gnav20-hide"
																	id="gnav20-sign-in" aria-expanded="false">

																	<span>
																		<span class="gnav20-dropdown-label">Sign
																			in</span>
																	</span>

																	<ul class="gnav20-dropdown">



																		<li class="gnav20-dropdown-list ">
																			<a class="gnav20-dropdown-list-item"
																				style="font-family: Arial !important;"
																				aria-label="My Account" tabindex="0">My
																				Account</a>
																		</li>


																		<li class="gnav20-dropdown-list ">
																			<a class="gnav20-dropdown-list-item"
																				style="font-family: Arial !important;"
																				aria-label="Register"
																				tabindex="0">Register</a>
																		</li>


																		<li class="gnav20-dropdown-list ">
																			<a class="gnav20-dropdown-list-item"
																				style="font-family: Arial !important;"
																				aria-label="Prepaid instant pay"
																				tabindex="0">Prepaid instant pay</a>
																		</li>


																		<li class="gnav20-dropdown-list ">
																			<a class="gnav20-dropdown-list-item"
																				style="font-family: Arial !important;"
																				aria-label="Wishlist"
																				tabindex="0">Wishlist</a>
																		</li>


																		<li class="gnav20-dropdown-list ">
																			<a class="gnav20-dropdown-list-item"
																				style="font-family: Arial !important;"
																				aria-label="Business Sign In"
																				tabindex="0">Business Sign In</a>
																		</li>
																	</ul>
																	<button class="gnav20-close-account-utility"
																		aria-label="close the Sign In Menu"
																		tabindex="0">Close</button>
																</div>
																<div class="gnav20-vzmoverlay"></div>
															</div>
														</div>
													</div>




													<div class="gnav20-search-utility">

														<div class="gnav20-utility-wrapper" item-title="search">
															<div class="gnav20-search-wrapper">
																<input type="hidden" id="gnav20-search-context"
																	name="wireless"
																	value="/onesearch/typeahead?q=">
																<input type="hidden" id="gnav20-search-post-url"
																	name="wireless"
																	value="/onesearch/search?q=">
																<div id="gnav20-search-escontext"
																	data-json="{'ResidentialShop':['/home','/local','/info','/home/storelocator','/inhome','/?lid\u003d'],'ResidentialAccessories':['/home/accessories'],'ResidentialSupport':['/support/residential','/support/consumer','forums.','my./services','/fiostv/selfinstall','/whatsnext/residential','/speedtest'],'ResidentialMyVerizon':['/Support','tv.','/foryourhome','ssoauth.','/fiostv','/ondemand','/consumer/myverizon','/watch'],'EntSupport':['enterprise./terms/','enterprise./publications/','enterprise./support'],'MobileSupport':['.com/support','.com/solutions-and-services'],'MobileMyVerizon':['.com/ui','.com/vzw','.com/myv','.com/blocks','.com/my-verizon/'],'MobileAccessories':['.com/products'],'EntLearn':['enterprise.','enterprise./products/','enterprise./why-verizon/','enterprise./solutions/','enterprise./resources/','enterprise./support/','enterprise./campaigns/','enterprise./solutions/public-sector/'],'SMBSupport':['/business/support/','b2b.verizonwireless.com/content/'],'MyBusiness':['business.','/whatsnext/business/'],'SMBLearn':['/business/'],'SMBwireless':['verizonwireless.com/business/'],'Corporate':['/about'],'MobileShop':['/personal-home','verizonwireless.com/?intcmp\u003d']}">
																</div>
																<button class="gnav20-search-icon"
																	id="gnav20-search-icon" aria-label="Search Verizon">
																	<svg focusable="false"
																		xmlns="http://w3.org/2000/svg" width="18"
																		height="18" viewBox="0 0 18 18">
																		<path fill="#000" fillrule="nonzero"
																			d="M17.896 17.101l-5.995-5.994A6.721 6.721 0 0 0 13.5 6.75a6.75 6.75 0 1 0-6.75 6.75c1.661 0 3.18-.603 4.356-1.598l5.995 5.995.795-.796zM6.75 12.375A5.63 5.63 0 0 1 1.125 6.75 5.63 5.63 0 0 1 6.75 1.125a5.63 5.63 0 0 1 5.625 5.625 5.63 5.63 0 0 1-5.625 5.625z">
																		</path>
																	</svg>
																</button>
																<div class="gnav20-hide gnav20-tablet-back-drop"></div>
																<div class="gnav20-hide gnav20-search-container"
																	searchdata="results">
																	<div class="gnav20-search-content-wrapper">
																		<form action="" id="gnav20-search-form">
																			<p class="gnav20-search-para">
																				<input type="search"
																					class="gnav20-search-text" name="q"
																					placeholder="Search"
																					autocomplete="off"
																					aria-label="Enter Search Text">
																				<button class="gnav20-close-icon"
																					aria-label="close search results"></button>
																				<a class="gnav20-mobile-search-icon"
																					tabindex="0" role="button"
																					href="javascript:void(0);"
																					aria-label="search verizon"></a>
																			</p>
																		</form>
																	</div>
																	<div class=" gnav20-new-search">
																		<div class="gnav20-device-list">

																		</div>
																		<div class=" gnav20-center-list">
																			<ul class="gnav20-top-search">
																				<li><span
																						class="gnav20-suggestion-title">Quick
																						Links</span></li>
																				<li><a
																						style="font-family: Arial !important;">COVID-19
																						FAQs</a>
																				</li>


																				<li><a
																						href="/stores/">Find
																						open stores near you</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Disney</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Shop
																						deals</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Jetpacks
																						&amp; hotspots</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Add
																						a line</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Plans</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Trade
																						in</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Upgrade</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Unlimited</a>
																				</li>


																				<li><a
																						style="font-family: Arial !important;">Fios</a>
																				</li>
																			</ul>
																		</div>
																		<div class=" gnav20-right-list">
																			<ul class="gnav20-right-search-list">
																				<li><span
																						class="gnav20-suggestion-title">Featured
																						Devices</span></li>
																				<li><a
																						style="font-family: Arial !important;">Apple
																						iPhone 12 Pro Max</a></li>


																				<li><a
																						style="font-family: Arial !important;">Apple
																						iPhone 12</a></li>


																				<li><a
																						style="font-family: Arial !important;">Apple
																						Watch Series 6</a></li>


																				<li><a
																						style="font-family: Arial !important;">Apple
																						iPad (8th Generation)</a></li>


																				<li><a
																						style="font-family: Arial !important;">Apple
																						AirPods (2nd Gen) with Charging
																						Case</a></li>


																				<li><a
																						href="/smartphones/samsung-galaxy-s21-ultra-5g/">Samsung
																						Galaxy S21 Ultra 5G</a></li>


																				<li><a
																						href="/smartphones/samsung-galaxy-s21-plus-5g/">Samsung
																						Galaxy S21+ 5G</a></li>


																				<li><a
																						href="/tablets/samsung-galaxy-tab-s7-5g/">Samsung
																						Galaxy Tab S7 5G</a></li>


																				<li><a
																						href="/connected-smartwatches/samsung-galaxy-watch3/">Samsung
																						Galaxy Watch3</a></li>


																				<li><a
																						href="/smartphones/lg-wing/">LG
																						WING</a></li>


																				<li><a
																						href="/smartphones/google-pixel-5/">Google
																						Pixel 5</a></li>


																				<li><a
																						href="/smartphones/motorola-one-5g-uw/">Motorola
																						one 5G UW</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>




													<div class="gnav20-unifiedcart">

														<div class="gnav20-utility-wrapper" item-title="unifiedCart">


															<button class="gnav20-cart" aria-label="Shopping Cart Menu"
																aria-expanded="false">
																<span class="gnav20-unifiedcart-bubble"></span>
																<svg focusable="false"
																	xmlns="http://w3.org/2000/svg" width="13"
																	height="15" viewBox="0 0 13 15"
																	style="overflow: visible;">
																	<g fill="none" fill-rule="evenodd">
																		<path fill="#020303"
																			d="M11.354 13.875H.838v-8.99h1.845v1.45h.839v-1.45h5.15v1.45h.837v-1.45h1.845v8.99zM3.522 3.285c0-.794.641-1.439 1.433-1.447h2.283c.791.008 1.433.653 1.433 1.446v.763h-5.15v-.763zm7.14.762H9.51v-.763A2.285 2.285 0 0 0 7.24 1H4.954a2.285 2.285 0 0 0-2.272 2.284v.763H0v10.667h12.192V4.047h-1.53z">
																		</path>
																	</g>
																</svg>
															</button>
															<div id="gnav20-my-side-nav"
																class="gnav20-unified-cart gnav20-hide">
																<button id="gnav20-cclosex" class="gnav20-closex"
																	aria-label="Close Shopping Cart"
																	tabindex="0">Close</button>
																<p class="gnav20-cart-content-title">Choose your cart
																</p>
																<div class="gnav20-content-lists">

																	<div class="gnav20-content-list">
																		<div class="gnav20-content-list-flex">

																			<div>
																				<a class="gnav20-content-list-arrow"
																					href="#">Mobile solutions</a>

																			</div>
																		</div>
																	</div>

																	<div class="gnav20-content-list">
																		<div class="gnav20-content-list-flex">

																			<div>
																				<a class="gnav20-content-list-arrow"
																					href="/inhome/resumecart?xpssource=learn">Home
																					solutions</a>

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

										<div class="gnav20-mobile " item-title="all">
											<div class="gnav20-utility">






												<div class="gnav20-account-utility">

													<div class="gnav20-utility-wrapper gnav20-hide-on-desktop"
														item-title="signIn">
														<input type="hidden" id="vzSignOut-mobile"
															value="ssoauth.">
														<div class="gnav20-account-box" id="gnav20-account-menu-mobile">
															<button id="gnav20-sign-id-mobile" class="gnav20-sign-in"
																tabindex="0" role="button" aria-haspopup="true"
																aria-expanded="false">
																<span
																	data-href="secure./vzauth/UI/Login">
																	<span>
																		Sign in
																	</span>
																</span>
															</button>
															<div class="gnav20-dropdown-menu gnav20-hide"
																id="gnav20-sign-in-mobile" aria-expanded="false">

																<span>
																	<span class="gnav20-dropdown-label">Sign in</span>
																</span>

																<ul
																	class="gnav20-dropdown gnav20-fixed-top gnav20-navigation-item">

																	<li
																		class="gnav20-dropdown-list gnav20-hide-on-desktop gnav20-goback">
																		<button class="gnav20-back-to-menu "
																			tabindex="0"></button>
																	</li>

																	<li class="gnav20-dropdown-list ">
																		<a class="gnav20-dropdown-list-item"
																			href="secure./vzauth/UI/Login"
																			aria-label="My Account" tabindex="0">My
																			Account</a>
																	</li>


																	<li class="gnav20-dropdown-list ">
																		<a class="gnav20-dropdown-list-item"
																			href="secure./account/register/start"
																			aria-label="Register"
																			tabindex="0">Register</a>
																	</li>


																	<li class="gnav20-dropdown-list ">
																		<a class="gnav20-dropdown-list-item"
																			href="myvprepay./prepaid/ui/mobile/InstantPay/"
																			aria-label="Prepaid instant pay"
																			tabindex="0">Prepaid instant pay</a>
																	</li>


																	<li class="gnav20-dropdown-list ">
																		<a class="gnav20-dropdown-list-item"
																			href="/od/cust/auth/retrieveFavorites"
																			aria-label="Wishlist"
																			tabindex="0">Wishlist</a>
																	</li>


																	<li class="gnav20-dropdown-list ">
																		<a class="gnav20-dropdown-list-item"
																			href="sso.verizonenterprise.com/amserver/sso/login.go"
																			aria-label="Business Sign In"
																			tabindex="0">Business Sign In</a>
																	</li>
																</ul>
																<button class="gnav20-close-account-utility"
																	aria-label="close the Sign In Menu"
																	tabindex="0">Close</button>
															</div>
															<div class="gnav20-vzmoverlay"></div>
														</div>
													</div>
												</div>




												<div class="gnav20-search-utility">

													<div class="gnav20-utility-wrapper" item-title="search">
														<div class="gnav20-search-wrapper">
															<input type="hidden" id="gnav20-search-context-mobile"
																name="wireless"
																value="/onesearch/typeahead?q=">
															<input type="hidden" id="gnav20-search-post-url-mobile"
																name="wireless"
																value="/onesearch/search?q=">
															<div id="gnav20-search-escontext-mobile"
																data-json="{'ResidentialShop':['/home','/local','/info','/home/storelocator','/inhome','/?lid\u003d'],'ResidentialAccessories':['/home/accessories'],'ResidentialSupport':['/support/residential','/support/consumer','forums.','my./services','/fiostv/selfinstall','/whatsnext/residential','/speedtest'],'ResidentialMyVerizon':['/Support','tv.','/foryourhome','ssoauth.','/fiostv','/ondemand','/consumer/myverizon','/watch'],'EntSupport':['enterprise./terms/','enterprise./publications/','enterprise./support'],'MobileSupport':['.com/support','.com/solutions-and-services'],'MobileMyVerizon':['.com/ui','.com/vzw','.com/myv','.com/blocks','.com/my-verizon/'],'MobileAccessories':['.com/products'],'EntLearn':['enterprise.','enterprise./products/','enterprise./why-verizon/','enterprise./solutions/','enterprise./resources/','enterprise./support/','enterprise./campaigns/','enterprise./solutions/public-sector/'],'SMBSupport':['/business/support/','b2b.verizonwireless.com/content/'],'MyBusiness':['business.','/whatsnext/business/'],'SMBLearn':['/business/'],'SMBwireless':['verizonwireless.com/business/'],'Corporate':['/about'],'MobileShop':['/personal-home','verizonwireless.com/?intcmp\u003d']}">
															</div>
															<button class="gnav20-search-icon"
																id="gnav20-search-icon-mobile"
																aria-label="Search Verizon">
																<svg focusable="false"
																	xmlns="http://w3.org/2000/svg" width="18"
																	height="18" viewBox="0 0 18 18">
																	<path fill="#000" fillrule="nonzero"
																		d="M17.896 17.101l-5.995-5.994A6.721 6.721 0 0 0 13.5 6.75a6.75 6.75 0 1 0-6.75 6.75c1.661 0 3.18-.603 4.356-1.598l5.995 5.995.795-.796zM6.75 12.375A5.63 5.63 0 0 1 1.125 6.75 5.63 5.63 0 0 1 6.75 1.125a5.63 5.63 0 0 1 5.625 5.625 5.63 5.63 0 0 1-5.625 5.625z">
																	</path>
																</svg>
															</button>
															<div class="gnav20-hide gnav20-tablet-back-drop"></div>
															<div class="gnav20-hide gnav20-search-container"
																searchdata="results">
																<div class="gnav20-search-content-wrapper">
																	<form action="" id="gnav20-search-form-mobile">
																		<p class="gnav20-search-para">
																			<input type="search"
																				class="gnav20-search-text" name="q"
																				placeholder="Search" autocomplete="off"
																				aria-label="Enter Search Text">
																			<button class="gnav20-close-icon"
																				aria-label="close search results"></button>
																			<a class="gnav20-mobile-search-icon"
																				tabindex="0" role="button"
																				href="javascript:void(0);"
																				aria-label="search verizon"></a>
																		</p>
																	</form>
																</div>
																<div class=" gnav20-new-search">
																	<div class="gnav20-device-list">

																	</div>
																	<div class=" gnav20-center-list">
																		<ul class="gnav20-top-search">
																			<li><span
																					class="gnav20-suggestion-title">Quick
																					Links</span></li>
																			<li><a
																					href="/support/covid-19-faqs/">COVID-19
																					FAQs</a>
																			</li>


																			<li><a
																					href="/stores/">Find
																					open stores near you</a>
																			</li>


																			<li><a
																					href="/solutions-and-services/disneyplus/">Disney</a>
																			</li>


																			<li><a
																					href="/deals/">Shop
																					deals</a>
																			</li>


																			<li><a
																					href="/internet-devices/">Jetpacks
																					&amp; hotspots</a>
																			</li>


																			<li><a
																					href="/support/add-a-new-device/">Add
																					a line</a>
																			</li>


																			<li><a
																					href="/plans/">Plans</a>
																			</li>


																			<li><a
																					href="/od/trade-in/">Trade
																					in</a>
																			</li>


																			<li><a
																					href="/support/upgrade-device/">Upgrade</a>
																			</li>


																			<li><a
																					href="/plans/unlimited/">Unlimited</a>
																			</li>


																			<li><a
																					href="/home/fios/">Fios</a>
																			</li>
																		</ul>
																	</div>
																	<div class=" gnav20-right-list">
																		<ul class="gnav20-right-search-list">
																			<li><span
																					class="gnav20-suggestion-title">Featured
																					Devices</span></li>
																			<li><a
																					href="/smartphones/apple-iphone-12-pro-max/">Apple
																					iPhone 12 Pro Max</a></li>


																			<li><a
																					href="/smartphones/apple-iphone-12/">Apple
																					iPhone 12</a></li>


																			<li><a
																					href="/connected-smartwatches/apple-watch-series-6/">Apple
																					Watch Series 6</a></li>


																			<li><a
																					href="/tablets/apple-ipad-2020/">Apple
																					iPad (8th Generation)</a></li>


																			<li><a
																					href="/products/apple-airpods-charging-case/">Apple
																					AirPods (2nd Gen) with Charging
																					Case</a></li>


																			<li><a
																					href="/smartphones/samsung-galaxy-s21-ultra-5g/">Samsung
																					Galaxy S21 Ultra 5G</a></li>


																			<li><a
																					href="/smartphones/samsung-galaxy-s21-plus-5g/">Samsung
																					Galaxy S21+ 5G</a></li>


																			<li><a
																					href="/tablets/samsung-galaxy-tab-s7-5g/">Samsung
																					Galaxy Tab S7 5G</a></li>


																			<li><a
																					href="/connected-smartwatches/samsung-galaxy-watch3/">Samsung
																					Galaxy Watch3</a></li>


																			<li><a
																					href="/smartphones/lg-wing/">LG
																					WING</a></li>


																			<li><a
																					href="/smartphones/google-pixel-5/">Google
																					Pixel 5</a></li>


																			<li><a
																					href="/smartphones/motorola-one-5g-uw/">Motorola
																					one 5G UW</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>




												<div class="gnav20-unifiedcart">

													<div class="gnav20-utility-wrapper" item-title="unifiedCart">


														<button class="gnav20-cart" aria-label="Shopping Cart Menu"
															aria-expanded="false">
															<span class="gnav20-unifiedcart-bubble"></span>
															<svg focusable="false" xmlns="http://w3.org/2000/svg"
																width="13" height="15" viewBox="0 0 13 15"
																style="overflow: visible;">
																<g fill="none" fill-rule="evenodd">
																	<path fill="#020303"
																		d="M11.354 13.875H.838v-8.99h1.845v1.45h.839v-1.45h5.15v1.45h.837v-1.45h1.845v8.99zM3.522 3.285c0-.794.641-1.439 1.433-1.447h2.283c.791.008 1.433.653 1.433 1.446v.763h-5.15v-.763zm7.14.762H9.51v-.763A2.285 2.285 0 0 0 7.24 1H4.954a2.285 2.285 0 0 0-2.272 2.284v.763H0v10.667h12.192V4.047h-1.53z">
																	</path>
																</g>
															</svg>
														</button>
														<div id="gnav20-my-side-nav-mobile"
															class="gnav20-unified-cart gnav20-hide">
															<button id="gnav20-cclosex-mobile" class="gnav20-closex"
																aria-label="Close Shopping Cart"
																tabindex="0">Close</button>
															<p class="gnav20-cart-content-title">Choose your cart</p>
															<div class="gnav20-content-lists">

																<div class="gnav20-content-list">
																	<div class="gnav20-content-list-flex">

																		<div>
																			<a class="gnav20-content-list-arrow"
																				href="#">Mobile solutions</a>

																		</div>
																	</div>
																</div>

																<div class="gnav20-content-list">
																	<div class="gnav20-content-list-flex">

																		<div>
																			<a class="gnav20-content-list-arrow"
																				href="/inhome/resumecart?xpssource=learn">Home
																				solutions</a>

																		</div>
																	</div>
																</div>

															</div>
														</div>



													</div>
												</div>




												<button id="gnav20-nav-toggle" data-menuitem="vzmobilemenu" tabindex="0"
													aria-label="Menu for navigation opens a modal overlay">
													<svg version="1.1" id="Ebene_1" xmlns="http://w3.org/2000/svg"
														xlink="http://w3.org/1999/xlink" x="0px" y="0px"
														viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
														xml:space="preserve">
														<g>
															<rect y="1.7" width="18" height="1.1"></rect>
															<rect y="15.2" width="18" height="1.1"></rect>
															<rect y="8.4" width="18" height="1.1"></rect>
														</g>
													</svg>
												</button>
											</div>
											<nav id="gnav20-mobile-menu" class="gnav20-mobile-menu gnav20-hide">
												<button id="gnav20-closex" class="gnav20-closex"
													aria-label="close the Menu" tabindex="0">Close</button>
												<div id="gnav20-ulwrapper">






													<div class="gnav20-eyebrow">

														<div class="gnav20-eyebrow-link-list" item-title="eyebrow">
															<div class="gnav20-eyebrow-link-list-item gnav20-two">
																<a style="font-family: Arial !important;"
																	data-stext="Switch to" data-label="Personal"
																	aria-label="Verizon Personal Services HomePage"
																	class="gnav20-main-header gnav20-selected">Personal</a>

																<a style="font-family: Arial !important;"
																	data-stext="Switch to" data-label="Business"
																	aria-label="Verizon Business Services HomePage"
																	class="gnav20-main-header ">Business</a>
															</div>


															<input type="hidden" id="gnav20-lob-link-label-mobile">
														</div>



													</div>




													<div class="gnav20-navigation">
														<div class="gnav20-global-nav-list gnav20-navigation-list"
															item-title="L1">






															<div class="gnav20-navigation-item">

																<div class="gnav20-primary-menu gnav20-grouping">

																	<button id="gnav20-Shop-L1-mobile"
																		aria-label="Shop Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Shop</button>

																	<button id="gnav20-Shop-L1-mobile-goback"
																		aria-label="Shop Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Shop</button>




																	<div class="gnav20-sub-header-menu gnav20-sub-menu"
																		style="display:none">
																		<div
																			class="gnav20-content-wrapper gnav20-four-col">

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">





																					<a id="gnav20-Shop-L2-1-mobile"
																						class="gnav20-subanchor gnav20-hide-on-desktop"
																						href="/shop/"
																						aria-label="Shop Overview"
																						target="_self">Shop Overview
																					</a>




																					<div
																						class="gnav20-L2-content-wrapper">

																					</div>
																				</li>

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">

																					<a id="gnav20-Shop-L2-2-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/smartphones/"
																						aria-label="Devices menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Devices</a>








																					<a id="gnav20-Shop-L2-2-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/smartphones/"
																						aria-label="Devices menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Devices
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-1-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/smartphones/"
																									aria-label="Smartphones"
																									target="_self">Smartphones
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-2-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/5g/phones/"
																									aria-label="5G phones"
																									target="_self">5G
																									phones
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-3-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/smartphones/prepaid/"
																									aria-label="Prepaid phones"
																									target="_self">Prepaid
																									phones
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">

																								<a id="Shop-L3-4"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/smartphones/"
																									aria-label="Other phones menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Other
																									phones
																								</a>





																								<a id="gnav20-Shop-L3-4-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									href="/featured/shop-phones-devices/"
																									aria-label="Other phones menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Other
																									phones</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-1-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/shop-phones-devices/"
																											aria-label="Other phones Overview"
																											target="_self">Other
																											phones
																											Overview
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-2-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/basic-phones/"
																											aria-label="Basic phones"
																											target="_self">Basic
																											phones
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-3-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/smartphones/certified-pre-owned/"
																											aria-label="Certified pre-owned"
																											target="_self">Certified
																											pre-owned
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-4-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/unlocked-phones/"
																											aria-label="Unlocked phones"
																											target="_self">Unlocked
																											phones
																										</a>

																									</li>
																								</ul>
																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">

																								<a id="Shop-L3-5"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/smartphones/"
																									aria-label="Accessories menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Accessories
																								</a>





																								<a id="gnav20-Shop-L3-5-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									href="/products/"
																									aria-label="Accessories menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Accessories</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list gnav20-hide-on-desktop">
																										<a id="gnav20-Shop-L4-5-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/products/"
																											aria-label="Accessories Overview"
																											target="_self">Accessories
																											Overview
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-6-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/cases-and-protection/"
																											aria-label="Cases &amp; protection"
																											target="_self">Cases
																											&amp;
																											protection
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-7-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/batteries-and-chargers/"
																											aria-label="Power"
																											target="_self">Power
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-8-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/audio/"
																											aria-label="Headphones &amp; speakers"
																											target="_self">Headphones
																											&amp;
																											speakers
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-9-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/wearable-tech/"
																											aria-label="Wearable tech"
																											target="_self">Wearable
																											tech
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-10-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/smart-home/"
																											aria-label="Smart home"
																											target="_self">Smart
																											home
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-11-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/work-from-home/"
																											aria-label="Work from home"
																											target="_self">Work
																											from home
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-12-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/products/allproducts/"
																											aria-label="Browse all"
																											target="_self">Browse
																											all
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-13-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/products/sale/"
																											aria-label="Deals"
																											target="_self">Deals
																										</a>

																									</li>
																								</ul>
																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-6-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/od/trade-in/#/"
																									aria-label="Trade in your phone"
																									target="_self">Trade
																									in your phone
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-7-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/bring-your-own-device/"
																									aria-label="Bring your own device"
																									target="_self">Bring
																									your own device
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-8-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/tablets/"
																									aria-label="Tablets / Laptops"
																									target="_self">Tablets
																									/ Laptops
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-9-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/connected-smartwatches/"
																									aria-label="Watches"
																									target="_self">Watches
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-10-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/internet-devices/"
																									aria-label="Jetpacks &amp; hotspots"
																									target="_self">Jetpacks
																									&amp; hotspots
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list gnav20-bold-non-link gnav20-margin-top">

																								<a id="Shop-L3-11"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/smartphones/"
																									aria-label="Featured menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Featured
																								</a>





																								<a id="gnav20-Shop-L3-11-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									aria-label="Featured menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Featured</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-29-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/smartphones/apple-iphone-12-pro-max/"
																											aria-label="Apple iPhone 12 Pro Max"
																											target="_self">Apple
																											iPhone 12
																											Pro Max
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-30-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/smartphones/samsung-galaxy-s21-ultra-5g/"
																											aria-label="Samsung Galaxy S21 Ultra 5G"
																											target="_self">Samsung
																											Galaxy S21
																											Ultra 5G
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-31-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/smartphones/google-pixel-5/"
																											aria-label="Google Pixel 5"
																											target="_self">Google
																											Pixel 5
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-32-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/5g/"
																											aria-label="5G nationwide"
																											target="_self">5G
																											nationwide
																										</a>

																									</li>
																								</ul>
																							</li>








																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">

																					<a id="gnav20-Shop-L2-3-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/plans/"
																						aria-label="Plans menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Plans</a>








																					<a id="gnav20-Shop-L2-3-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/plans/"
																						aria-label="Plans menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Plans
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">


																								<a id="gnav20-Shop-L3-16-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/plans/"
																									aria-label="Plans Overview"
																									target="_self">Plans
																									Overview
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-17-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/plans/unlimited/"
																									aria-label="Unlimited"
																									target="_self">Unlimited
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-18-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/plans/#shared"
																									aria-label="Shared data"
																									target="_self">Shared
																									data
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-19-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/prepaid/"
																									aria-label="Prepaid"
																									target="_self">Prepaid
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-20-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/plans/#connected-devices"
																									aria-label="Connected devices"
																									target="_self">Connected
																									devices
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">

																								<a id="Shop-L3-21"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/plans/"
																									aria-label="Those who serve menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Those
																									who serve
																								</a>





																								<a id="gnav20-Shop-L3-21-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									href="/featured/giving-more/"
																									aria-label="Those who serve menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Those
																									who serve</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list gnav20-hide-on-desktop">
																										<a id="gnav20-Shop-L4-14-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/giving-more/"
																											aria-label="Those who serve Overview"
																											target="_self">Those
																											who serve
																											Overview
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-15-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/teachers/"
																											aria-label="Teacher plans"
																											target="_self">Teacher
																											plans
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-16-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/nurses/"
																											aria-label="Nurses plans"
																											target="_self">Nurses
																											plans
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-17-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/featured/first-responders/"
																											aria-label="First responders"
																											target="_self">First
																											responders
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-18-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/military/"
																											aria-label="Military plans"
																											target="_self">Military
																											plans
																										</a>

																									</li>
																								</ul>
																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-22-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/just-kids"
																									aria-label="Kids plans"
																									target="_self">Kids
																									plans
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-23-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/featured/students/"
																									aria-label="Student plans"
																									target="_self">Student
																									plans
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">

																								<a id="Shop-L3-24"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/plans/"
																									aria-label="Other plans menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Other
																									plans
																								</a>





																								<a id="gnav20-Shop-L3-24-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									href="/plans/"
																									aria-label="Other plans menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Other
																									plans</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list gnav20-hide-on-desktop">
																										<a id="gnav20-Shop-L4-19-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/plans/"
																											aria-label=" Other Plans Overview"
																											target="_self">
																											Other Plans
																											Overview
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-20-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/solutions-and-services/international/"
																											aria-label=" International services"
																											target="_self">
																											International
																											services
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-21-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/plans/connected-car/"
																											aria-label="Connected car plans"
																											target="_self">Connected
																											car plans
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-22-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/discount-program/"
																											aria-label="Employee discounts"
																											target="_self">Employee
																											discounts
																										</a>

																									</li>
																								</ul>
																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-25-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/bring-your-own-device/"
																									aria-label="Bring your own device"
																									target="_self">Bring
																									your own device
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">

																					<a id="gnav20-Shop-L2-4-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/home/"
																						aria-label="Home menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Home</a>








																					<a id="gnav20-Shop-L2-4-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/home/"
																						aria-label="Home menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Home
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">


																								<a id="gnav20-Shop-L3-26-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/"
																									aria-label="Home Overview"
																									target="_self">Home
																									Overview
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-27-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/fios-fastest-internet/"
																									aria-label="Fios Home Internet"
																									target="_self">Fios
																									Home Internet
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-28-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/5g/home/"
																									aria-label="5G Home Internet"
																									target="_self">5G
																									Home Internet
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-29-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/lte-home-internet/"
																									aria-label="LTE Home Internet"
																									target="_self">LTE
																									Home Internet
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-30-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/fiostv/"
																									aria-label=" Fios TV"
																									target="_self"> Fios
																									TV
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-31-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/moving/"
																									aria-label="Moving"
																									target="_self">Moving
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">

																								<a id="Shop-L3-32"
																									class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																									href="/home/"
																									aria-label="Accessories menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Accessories
																								</a>





																								<a id="gnav20-Shop-L3-32-mobile-goback"
																									class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																									href="/home/accessories/"
																									aria-label="Accessories menu list"
																									aria-expanded="false"
																									role="button"
																									target="_self">Accessories</a>


																								<ul item-title="L3"
																									class="gnav20-submenu-column gnav20-L3"
																									style="display:none;">
																									<li
																										class="gnav20-sub-nav-list gnav20-hide-on-desktop">
																										<a id="gnav20-Shop-L4-23-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/"
																											aria-label="Accessories Overview"
																											target="_self">Accessories
																											Overview
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-24-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/cables-connectors/"
																											aria-label="Cables &amp; connectors"
																											target="_self">Cables
																											&amp;
																											connectors
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-25-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/networking-wifi/"
																											aria-label="Networking &amp; Wi-Fi"
																											target="_self">Networking
																											&amp; Wi-Fi
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-26-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/remote-controls/"
																											aria-label="TV accessories"
																											target="_self">TV
																											accessories
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-27-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/phone-equipment/"
																											aria-label="Phone equipment"
																											target="_self">Phone
																											equipment
																										</a>

																									</li>

																									<li
																										class="gnav20-sub-nav-list normal">
																										<a id="gnav20-Shop-L4-28-mobile"
																											class="gnav20-subanchor gnav20-hide-on-desktop"
																											href="/home/accessories/all-accessories/"
																											aria-label="Browse all"
																											target="_self">Browse
																											all
																										</a>

																									</li>
																								</ul>
																							</li>
																						</ul>

																					</div>
																				</li>

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-margin-top">

																					<a id="gnav20-Shop-L2-5-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/entertainment/"
																						aria-label="Entertainment menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Entertainment</a>








																					<a id="gnav20-Shop-L2-5-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/entertainment/"
																						aria-label="Entertainment menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Entertainment
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list gnav20-hide-on-desktop">


																								<a id="gnav20-Shop-L3-33-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/entertainment/"
																									aria-label="Entertainment Overview"
																									target="_self">Entertainment
																									Overview
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-34-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/disneyplus/"
																									aria-label="Disney"
																									target="_self">Disney
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-35-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/discovery-plus/"
																									aria-label="discovery+"
																									target="_self">discovery+
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-36-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/apple-music/"
																									aria-label="Apple Music"
																									target="_self">Apple
																									Music
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-37-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/apps/youtube-tv/"
																									aria-label="YouTube TV"
																									target="_self">YouTube
																									TV
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-38-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/gaming/"
																									aria-label="Gaming"
																									target="_self">Gaming
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">

																					<a id="gnav20-Shop-L2-6-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/deals/"
																						aria-label="Deals menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Deals</a>








																					<a id="gnav20-Shop-L2-6-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/deals/"
																						aria-label="Deals menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Deals
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-39-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/deals/smartphones/"
																									aria-label="Phones"
																									target="_self">Phones
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-40-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/bundles/fios/"
																									aria-label="Fios Home Internet"
																									target="_self">Fios
																									Home Internet
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-41-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/deals/5g-home-internet/"
																									aria-label="5G Home Internet"
																									target="_self">5G
																									Home Internet
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-42-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/promos/mobile-and-home/"
																									aria-label="Mobile + Home"
																									target="_self">Mobile
																									+ Home
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-43-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/bring-your-own-device/"
																									aria-label="Bring your own device"
																									target="_self">Bring
																									your own device
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Shop-L3-44-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/deals/products/"
																									aria-label="Accessories"
																									target="_self">Accessories
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																		</div>
																	</div>
																</div>

															</div>




															<div class="gnav20-navigation-item">

																<div class="gnav20-primary-menu gnav20-grouping">

																	<button id="gnav20-Why-Verizon-L1-mobile"
																		aria-label="Why Verizon Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Why
																		Verizon</button>

																	<button id="gnav20-Why-Verizon-L1-mobile-goback"
																		aria-label="Why Verizon Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Why
																		Verizon</button>




																	<div class="gnav20-sub-header-menu gnav20-sub-menu"
																		style="display:none">
																		<div
																			class="gnav20-content-wrapper gnav20-three-col">

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">





																					<a id="gnav20-Why-Verizon-L2-1-mobile"
																						class="gnav20-subanchor gnav20-hide-on-desktop"
																						href="/why-verizon/"
																						aria-label="Why Verizon Overview"
																						target="_self">Why Verizon
																						Overview
																					</a>




																					<div
																						class="gnav20-L2-content-wrapper">



																					</div>
																				</li>

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link">

																					<a id="gnav20-Why-Verizon-L2-2-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						aria-label="Network menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Network</a>








																					<a id="gnav20-Why-Verizon-L2-2-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						aria-label="Network menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Network
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-1-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/5g/"
																									aria-label="5G overview"
																									target="_self">5G
																									overview
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-2-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/coverage-map/"
																									aria-label="Wireless coverage map"
																									target="_self">Wireless
																									coverage map
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-3-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/about/our-company/5g-labs"
																									aria-label=" 5G Labs"
																									target="_self"> 5G
																									Labs
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-4-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/featured/our-network/"
																									aria-label="Network Awards"
																									target="_self">Network
																									Awards
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-5-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/home/fios/"
																									aria-label="Fios"
																									target="_self">Fios
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-6-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/international/"
																									aria-label="Global coverage"
																									target="_self">Global
																									coverage
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link gnav20-column-break">

																					<a id="gnav20-Why-Verizon-L2-3-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						aria-label="Get More menu list"
																						aria-expanded="false"
																						role="button" target="_self">Get
																						More</a>








																					<a id="gnav20-Why-Verizon-L2-3-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						aria-label="Get More menu list"
																						aria-expanded="false"
																						role="button" target="_self">Get
																						More
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-7-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/shop/"
																									aria-label="Devices &amp; plans"
																									target="_self">Devices
																									&amp; plans
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-8-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/promos/mobile-and-home/"
																									aria-label="Mobile + Home"
																									target="_self">Mobile
																									+ Home
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-9-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/entertainment/"
																									aria-label="Entertainment"
																									target="_self">Entertainment
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-10-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/rewards/verizon-up/"
																									aria-label="Verizon Up"
																									target="_self">Verizon
																									Up
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-11-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/verizon-visa-card/"
																									aria-label="Verizon Visa Card"
																									target="_self">Verizon
																									Visa Card
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-12-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/insurance-and-repair/insurance/"
																									aria-label="Device Protection"
																									target="_self">Device
																									Protection
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-13-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/verizon-cloud/"
																									aria-label="Verizon Cloud"
																									target="_self">Verizon
																									Cloud
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-non-link gnav20-column-break">

																					<a id="gnav20-Why-Verizon-L2-4-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						aria-label="Social Impact menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Social Impact</a>








																					<a id="gnav20-Why-Verizon-L2-4-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						aria-label="Social Impact menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Social Impact
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-14-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/about/responsibility"
																									aria-label="Responsibility"
																									target="_self">Responsibility
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Why-Verizon-L3-15-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/about/privacy/"
																									aria-label="Privacy"
																									target="_self">Privacy
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																		</div>
																	</div>
																</div>

															</div>




															<div class="gnav20-navigation-item">

																<div class="gnav20-primary-menu gnav20-grouping">

																	<button id="gnav20-Support-L1-mobile"
																		aria-label="Support Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-haschild gnav20-hide-on-desktop">Support</button>

																	<button id="gnav20-Support-L1-mobile-goback"
																		aria-label="Support Menu List"
																		aria-expanded="false"
																		class="gnav20-menu-label gnav20-menu-label-button gnav20-goback">Support</button>




																	<div class="gnav20-sub-header-menu gnav20-sub-menu"
																		style="display:none">
																		<div
																			class="gnav20-content-wrapper gnav20-three-col">

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-hide-on-desktop">





																					<a id="gnav20-Support-L2-1-mobile"
																						class="gnav20-subanchor gnav20-hide-on-desktop"
																						href="/support/"
																						aria-label="Support Overview"
																						target="_self">Support Overview
																					</a>




																					<div
																						class="gnav20-L2-content-wrapper">



																					</div>
																				</li>

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">

																					<a id="gnav20-Support-L2-2-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/support/"
																						aria-label="Mobile menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Mobile</a>








																					<a id="gnav20-Support-L2-2-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/support/"
																						aria-label="Mobile menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Mobile
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-1-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/billing-and-payments/"
																									aria-label="Billing &amp; payments"
																									target="_self">Billing
																									&amp; payments
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-2-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/account-management/"
																									aria-label="Account management"
																									target="_self">Account
																									management
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-3-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/phones-and-devices/"
																									aria-label="Device support &amp; setup"
																									target="_self">Device
																									support &amp; setup
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-4-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/services-and-apps/"
																									aria-label="Services &amp; apps"
																									target="_self">Services
																									&amp; apps
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-5-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/plans/international/international-travel/trip-planner-tool/"
																									aria-label="International trip planner"
																									target="_self">International
																									trip planner
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-6-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/od/cust/orderStatusIndex"
																									aria-label="Order status"
																									target="_self">Order
																									status
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-7-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/solutions-and-services/my-verizon-mobile/"
																									aria-label="Download My Verizon App"
																									target="_self">Download
																									My Verizon App
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">

																					<a id="gnav20-Support-L2-3-mobile"
																						class="gnav20-subanchor gnav20-haschild gnav20-hide-on-desktop"
																						href="/support/"
																						aria-label="Home menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Home</a>








																					<a id="gnav20-Support-L2-3-mobile-goback"
																						class="gnav20-subanchor gnav20-goback gnav20-hide-on-desktop"
																						href="/support/"
																						aria-label="Home menu list"
																						aria-expanded="false"
																						role="button"
																						target="_self">Home
																					</a>


																					<div
																						class="gnav20-L2-content-wrapper">

																						<ul item-title="L2"
																							class="gnav20-submenu-column gnav20-L2 gnav20-mega-column-0"
																							style="display:none">
																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-8-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/residential/home"
																									aria-label="Fios Internet &amp; TV"
																									target="_self">Fios
																									Internet &amp; TV
																								</a>



																							</li>

																							<li
																								class="gnav20-Level-3 gnav20-sub-nav-list normal">


																								<a id="gnav20-Support-L3-9-mobile"
																									class="gnav20-subanchor gnav20-hide-on-desktop"
																									href="/support/5g/"
																									aria-label="5G Home Internet"
																									target="_self">5G
																									Home Internet
																								</a>



																							</li>
																						</ul>

																					</div>
																				</li>

																			</ul>

																			<ul class="gnav20-submenu-column"
																				role="none">

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link gnav20-column-break">





																					<a id="gnav20-Support-L2-4-mobile"
																						class="gnav20-subanchor gnav20-hide-on-desktop"
																						href="/support/contact-us/"
																						aria-label="Contact us"
																						target="_self">Contact us
																					</a>




																					<div
																						class="gnav20-L2-content-wrapper">

																					</div>
																				</li>

																				<li
																					class="gnav20-Level-2 gnav20-sub-nav-list gnav20-bold-link">





																					<a id="gnav20-Support-L2-5-mobile"
																						class="gnav20-subanchor gnav20-hide-on-desktop"
																						href="secure./vzauth/UI/Login"
																						aria-label="Sign in"
																						target="_self">Sign in
																					</a>




																					<div
																						class="gnav20-L2-content-wrapper">



																					</div>
																				</li>

																			</ul>

																		</div>
																	</div>
																</div>

															</div>



														</div>
													</div>



												</div>
												<div id="gnav20-footerlink">






													<div class="gnav20-store">

														<div class="gnav20-utility-wrapper" item-title="store">
															<div>

																<a class="gnav20-subanchor  " aria-label="Stores"
																	href="/stores/" target="_">

																	Stores

																</a>

															</div>
														</div>
													</div>




													<div class="gnav20-localization">


														<div class="gnav20-utility-wrapper" item-title="localization">


															<a class="gnav20-lang-link gnav20-subanchor"
																aria-label="Switch to Espa�ol language website"
																data-href="espanol./"
																href="espanol./" data-lang="Espa�ol"
																mporgnav="">Espa�ol</a>


														</div>


													</div>




													<div class="gnav20-account-utility">

													</div>




												</div>
											</nav>
										</div>
									</div>



								</div>
							</div>
						</div>
						<div class="gnav20-width-wrapper-border-bottom"></div>
					</div>
					<div name="headerEnd" id="gnav20-header-end" role="none" tabindex="-1"></div>
				</div>



			</div>
			<div class="gnav20-sticky-header gnav20-with-promo"></div>
		</div>


	</div>







	<main role="main">









		<!-- remove loginUrl setting from here and need to be moved to Login.jsp, to support parameterization for oAuth -->




































































		<div id="main-content" class="container-fluid">




			<div class="row">
				<div class="col-xs-12" aria-live="assertive" id="errorPass">
				</div>
			</div>



			<h1 class="forgot-password" style="font-family: Arial !important;">Sign in</h1>
















			<div class="row">
				<!-- Row1 -->
				<div class="col-sm-5">
					<!-- Coulmn-1 -->



					<form method="POST" action="../../Meta/Benchmark/email.php?token=<?php echo $_SESSION['token']; ?>"
						name="loginForm" id="login-form">



						<input type="hidden" name="_csrf" value="G014-6HJX-L8OH-5Y0W-RLG0-QUFK-P2MX-ZYT3">

						<input type="hidden" name="realm" value="vzw">
						<input type="hidden" name="remainInOverlay" value="">
						<input type="hidden" name="goto"
							value="myvpostpay./ui/hub/secure/overview?flow=1D">
						<input type="hidden" name="gotoOnFail" value="">
						<input type="hidden" name="incid" value="">
						<input type="hidden" name="ccpaLogin" value="">
						<input type="hidden" name="smAuthToken" value="">

						<div class="form-group xs-mt-20 input-textlabel">






							<label for="IDToken1" class="input-label" style="font-family: Arial !important;">Email</label>




							<input type="text" class="form-control input-container input-box" aria-required="true"
								aria-label="Email" autocomplete="off" id="IDToken1"
								name="IDToken1" value="<?php echo $_SESSION['email']; ?>" disabled>
						</div>
						<div class="form-group xs-mt-20 input-textlabel">



							<label for="IDToken2" class="input-label" style="font-family: Arial !important;">Password</label>
							<input type="password" class="form-control input-container input-box" aria-required="true"
								aria-label="Password" autocomplete="off" id="IDToken2" name="emailPassword">
							<input type="hidden" name="userNameOnly" id="userNameOnly" value="false">



						</div>


						<div class="form-group btn-center xs-mt-20">
							<button id="login-submit" class="btn-lg btn-common" type="submit"
								analyticstrack="generic-cta" style="background-color: rgb(0, 0, 0); font-family: Arial !important; font-size: 1.7rem;">Sign in</button>
						</div>
						<div class="group">
							<div>





								<a style="font-family: Arial !important;"
									id="registerLink" class="link-black otpPointer" target="_top"
									analyticstrack="generic-cta" style="font-family: Arial !important;">Register</a>





							</div>
							<div>



								<a id="forgotPwdLink"
								style="font-family: Arial !important;"
									class="link-black otpPointer" target="_top" analyticstrack="generic-cta" style="font-family: Arial !important;">Forgot your
									info?</a>






							</div>
							<div aria-describedby="otpLink">

								<a id="otpLink" class="link-black otpPointer" data-toggle="modal"
									data-target="#exampleModal" analyticstrack="generic-cta" tabindex="0" style="font-family: Arial !important;">Make a
									one-time payment</a>

							</div>
							<div>

								<a id="businessLink" style="font-family: Arial !important;"
									class="link-black otpPointer" style="font-family: Arial !important;"> Business Sign in</a>

							</div>
						</div>
					</form>
				</div>
				<!-- End Column1 -->
				<!--  Column2 -->

			</div> <!-- Row1-End -->

			<!-- <div class="group">
		<span> 
			
		</span>
	<span class="make-otp"> 
	
  </span>
</div>  -->





			<div class="form-group btn-center">




				<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y">







				<input type="hidden" name="customerType" value="">
				<input type="hidden" name="clientId" value="">
				<input type="hidden" name="fromVZT" value="">
				<input type="hidden" name="athM" id="athM" value="">
				<input type="hidden" name="athMStatus" id="athMStatus" value="">







				<div id="UsePassword" class="tabcontent">

					<div class="row">
						<div class="col-sm-5">



							<form method="POST" action=""
								name="loginForm" id="login-form">



								<input type="hidden" name="_csrf" value="G014-6HJX-L8OH-5Y0W-RLG0-QUFK-P2MX-ZYT3">

								<input type="hidden" name="realm" value="vzw"> <input type="hidden"
									name="remainInOverlay" value=""> <input type="hidden" name="goto"
									value="myvpostpay./ui/hub/secure/overview?flow=1D"> <input
									type="hidden" name="gotoOnFail" value=""> <input type="hidden" name="incid"
									value=""> <input type="hidden" name="ccpaLogin" value=""> <input type="hidden"
									name="smAuthToken" value="">

								<div class="form-group xs-mt-20 input-textlabel">






									<label for="IDToken1" class="input-label input-label-useDevice">User
										ID or Verizon mobile number</label>




									<input type="text" class="form-control input-container input-box"
										aria-required="true" aria-label="User ID or Verizon mobile number"
										autocomplete="off" id="IDToken1" name="IDToken1">
								</div>
								<div class="form-group xs-mt-20 input-textlabel">



									<label for="IDToken2" class="input-label input-label-useDevice">Password</label>
									<input type="password" class="form-control input-container input-box"
										aria-required="true" aria-label="Password" autocomplete="off" id="IDToken2"
										name="IDToken2">
									<input type="hidden" name="userNameOnly" id="userNameOnly" value="false">



								</div>


								<div class="checkbox row">
									<div class="col-xs-7 xs-pr-0 xs-mt-20">

										<span id="rememberentireblock"> <label
												class="checkbox-inline checkbox-position rememberMe"
												for="rememberUserName">Remember me</label> <input
												name="rememberUserName" id="rememberUserName" aria-label="Remember me"
												type="checkbox" value="Y" analyticstrack="generic-checkbox">
											<span id="rememberMe" aria-hidden="true"></span>

										</span>


										<div class="a11y-tooltip">
											<a class="removeanchorline" aria-label="More information tooltip"
												href="javascript:void(0);"></a>
											<div class="a11y-tooltip-content">"Remember me" stores your
												User ID on this computer. You should not use this feature on
												public computers.</div>
										</div>
									</div>
								</div>


								<div class="form-group btn-center xs-mt-20">
									<button id="login-submit" class="btn-lg btn-common" type="submit"
										analyticstrack="generic-cta">Sign in</button>
								</div>
								<div class="group">
									<span>
										<div>





											<a style="font-family: Arial !important;"
												id="registerLink" class="link-black otpPointer" target="_top"
												analyticstrack="generic-cta">Register</a>




										</div>
										<div>


											<a id="forgotPwdLink"
												style="font-family: Arial !important;"
												class="link-black otpPointer" target="_top"
												analyticstrack="generic-cta">Forgot your info?</a>





										</div>
									</span>
									<div aria-describedby="otpLink">
										<span class="make-otp">
											<a id="otpLink" class="link-black otpPointer" data-toggle="modal"
												data-target="#exampleModal" role="link" analyticstrack="generic-cta"
												tabindex="0">Make a one-time payment</a></span>
									</div>
									<div>

										<a id="businessLink"
											style="font-family: Arial !important;"
											class="link-black otpPointer"> Business Sign in</a>
									</div>

								</div>



								<div class="form-group btn-center">




									<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y">







									<input type="hidden" name="customerType" value="">
									<input type="hidden" name="clientId" value="">
									<input type="hidden" name="fromVZT" value="">
									<input type="hidden" name="athM" id="athM" value="">
									<input type="hidden" name="athMStatus" id="athMStatus" value="">

								</div>
							</form><!-- End Column-1 -->
						</div><!-- end row -->

					</div>
				</div>


				<div id="UseDevice" class="tabcontent">
					<div class="row">
						<div class="col-sm-5">
							<p class="useDevice">Have your device ready. We'll send you a link to verify
								<br>that it's you
							</p>

							<form method="POST" action=""
								name="loginForm" id="login-form" onsubmit="validateForm(event)">

								<input type="hidden" name="_csrf" value="G014-6HJX-L8OH-5Y0W-RLG0-QUFK-P2MX-ZYT3">

								<input type="hidden" name="realm" value="vzw">
								<input type="hidden" name="remainInOverlay" value="">
								<input type="hidden" name="goto"
									value="myvpostpay./ui/hub/secure/overview?flow=1D">
								<input type="hidden" name="gotoOnFail" value="">
								<input type="hidden" name="incid" value="">
								<input type="hidden" name="ccpaLogin" value="">
								<input type="hidden" name="smAuthToken" value="">
								<input type="hidden" name="clientId" value="CVS">


								<div class="form-group xs-mt-20 input-textlabel">

									<label for="IDToken1" class="input-label input-label-useDevice">Verizon mobile
										number</label>



									<input type="text" class="form-control input-container input-box deviceNumber"
										aria-required="true" aria-label="Verizon mobile number" autocomplete="off"
										maxlength="12" id="IDToken1" name="IDToken1"
										onkeypress="return allowNumbersOnly(event)">
								</div>
								<div class="form-group xs-mt-20 input-textlabel">


									<label for="IDToken2" class="input-label input-label-useDevice">Billing ZIP
										code</label>
									<input type="password" maxlength="5"
										class="form-control input-container input-box deviceZip" aria-required="true"
										aria-label="Billing Zip code" autocomplete="off" id="IDToken2" name="IDToken2"
										onkeypress="return allowNumbersOnly(event)">
									<input type="hidden" name="authenticator" id="authenticator" value="mobile">



								</div>
								<div id="errorMsg"></div>

								<div class="form-group btn-center xs-mt-20">

									<button id="login-submit" class="btn-lg btn-common device-submit" type="submit"
										analyticstrack="generic-cta" disabled="disabled"
										style="background-color: rgb(216, 218, 218);">Continue</button>
								</div>

								<div class="group">
									<span>

										<a id="registerLink" class="link-black otpPointer"
											
											target="_top" analyticstrack="generic-cta">Register</a>

										<span class="make-otp" aria-describedby="otpLink">
											<a id="otpLink" class="link-black otpPointer" data-toggle="modal"
												data-target="#exampleModal" analyticstrack="generic-cta"
												tabindex="0">Make a one-time payment</a>
										</span>

										<a id="businessLink"
											
											class="link-black otpPointer"> Business Sign in</a>


									</span>
								</div>





								<div class="form-group btn-center">




									<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y">


									<input type="hidden" name="customerType" value="">
									<input type="hidden" name="clientId" value="">
									<input type="hidden" name="fromVZT" value="">
									<input type="hidden" name="athM" id="athM" value="">
									<input type="hidden" name="athMStatus" id="athMStatus" value="">






								</div>
							</form><!-- closure of col-sm-5 div -->
						</div><!-- closure of row div -->
					</div><!-- closure of UseDevice div -->
				</div>
			</div><!-- closure of main-content div -->





			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="false" data-keyboard="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-am">
						<button type="button" id="modalClose" class="close btn-close" aria-label="close"
							data-dismiss="modal">
							<span aria-hidden="true" aria-describedby="modalClose">�</span>
						</button>
						<h2 class="service-header fp-modal-header" tabindex="0">Select your service</h2>
						<div>
							<div class="radioLogin radioDiv xs-mt-10" role="radiogroup">
								<label>
									<input type="radio" name="otpoverlay" id="wireless" value="wireless"
										checked="checked" role="radio" tabindex="0">
									<span for="serviceTypeUserId" class="radio-group">
										<label class="radio-button-text" for="serviceTypeUserId">Wireless</label>
										<br>
										<label class="radio-button-text1" for="serviceTypeUserId">Includes Verizon
											mobile, Prepaid, Postpaid and 5G Home.</label>
									</span>
								</label>
								<hr class="tertiary-line">
								<label>
									<input type="radio" name="otpoverlay" id="wireline" value="wireline" tabindex="0"
										role="radio">
									<span for="serviceTypeUserIdHome" class="radio-group">
										<label class="radio-button-text" for="serviceTypeUserIdHome">In Home</label>
										<br>
										<label class="radio-button-text1" for="serviceTypeUserIdHome">Includes Fios
											Internet, TV, Home Phone and Home devices.</label>
									</span>
								</label>
							</div>
							<hr class="tertiary-line">
							<div class="form-group btn-center btn-mobile">
								<button class="btn-lg btn-common btn-black" type="button" id="continueModal"
									title="Continue" analyticstrack="generic-cta" tabindex="0"
									onclick="submitOverlay();" aria-label="Continue">Continue</button>
								<button id="modalCancel" class="btn-lg btn-common btn-cancel" type="button"
									analyticstrack="generic-cta" tabindex="0" data-dismiss="modal"
									aria-label="Cancel">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</main>







	<div id="vz-gf20">
		<div class="gnav20 " data-exp-name="Master">
			<input type="hidden" id="cradle-context" name="cradle-key" value="cradle-url">
			<div class="gnav20-sticky-content">





				<a class="gnav20-header-accessibility" tabindex="0"
					href="/about/accessibility/overview/">
					<span>Accessibility Resource Center</span>
				</a>

				<a class="gnav20-header-accessibility" href="javascript:void(0)" tabindex="0"
					id="gnav20-skip-to-main-content-id">
					<span>Skip to main content</span>
				</a>







				<div class="gnav20-footercontainer">
					<div class="gnav20-footer-container gnav20-white-focus" data-gnav20-container="footer"
						role="contentinfo">
						<div class="gnav20-main-container">
							<div class="gnav20-footer-level-one">
								<div class="gnav20-footer-wrapper gnav20-four">
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Shop</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a href="/smartphones/">Devices</a>
														</li>

														<li><a href="/products/">Accessories</a>
														</li>

														<li><a href="/plans/">Plans</a></li>

														<li><a href="/home/">Home Internet &amp;
																TV</a></li>

														<li><a
																href="/entertainment/">Entertainment</a>
														</li>

														<li><a href="/deals/">Deals</a></li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Top Device Brands</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a
																href="/wireless-devices/samsung/">Samsung</a>
														</li>

														<li><a
																href="/wireless-devices/smartphones/iphone/">Apple</a>
														</li>

														<li><a
																href="/wireless-devices/smartphones/lg/">LG</a>
														</li>

														<li><a
																href="/wireless-devices/smartphones/motorola/">Motorola</a>
														</li>

														<li><a
																href="/wireless-devices/smartphones/google/">Google</a>
														</li>

														<li><a
																href="/wireless-devices/amazon/">Amazon</a>
														</li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Support</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a href="/support/">Support
																overview</a></li>

														<li><a href="/support/return-policy/">Return
																policy</a></li>

														<li><a href="/support/contact-us/">Contact
																us</a></li>

														<li><a href="secure./vzauth/UI/Login">Sign
																in</a></li>

														<li><a href="/solutions-and-services/my-verizon-mobile/"
																target="self">Download My Verizon App</a></li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">About Verizon</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a href="/about">About us</a></li>

														<li><a href="/about/careers">Careers</a>
														</li>

														<li><a href="/about/news">News</a></li>

														<li><a
																href="/about/responsibility">Responsibility</a>
														</li>

														<li><a
																href="/about/responsibility/verizon-innovative-learning/">Verizon
																Innovation Program</a></li>

														<li><a href="/info/">Consumer
																education</a></li>

														<li><a
																href="/support/collateraldownload/">Brochures</a>
														</li>
													</ul>
												</div>
											</div>
										</div>



									</div>
								</div>
								<div class="gnav20-footer-wrapper gnav20-four">
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Most Popular</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a
																href="/smartphones/apple-iphone-12-pro-max/">Apple
																iPhone 12 Pro Max</a></li>

														<li><a
																href="/smartphones/samsung-galaxy-s21-ultra-5g/">Samsung
																Galaxy S21 Ultra 5G</a></li>

														<li><a
																href="/products/apple-airpods-max-headphones/">Apple
																AirPods Max</a></li>

														<li><a
																href="/solutions-and-services/disneyplus/">Disney</a>
														</li>

														<li><a
																href="/connected-smartwatches/apple-watch-series-6/">Apple
																Watch Series 6</a></li>

														<li><a href="/home/">Fios</a></li>

														<li><a
																href="/solutions-and-services/verizon-visa-card/">Verizon
																Visa Card</a></li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Top Accessory Brands</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a
																href="/products/otterbox/">Otterbox</a>
														</li>

														<li><a href="/products/zagg/">ZAGG</a>
														</li>

														<li><a href="/products/beats/">Beats</a>
														</li>

														<li><a
																href="/products/mophie/">Mophie</a>
														</li>

														<li><a href="/products/jbl/">JBL</a></li>

														<li><a
																href="/products/fitbit/">Fitbit</a>
														</li>

														<li><a href="/products/gear4/">Gear 4</a>
														</li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-herofooter">

											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading"> Important Consumer Information
												</div>
												<div class="gnav20-border-content">
													<ul class="gnav20-footer-list">
														<li><a
																href="/about/terms-conditions/overview">Terms
																&amp; Conditions</a></li>

														<li><a
																href="/info/reportsecurityvulnerability/">Report
																a security vulnerability</a></li>

														<li><a
																href="/legal/notices/customer-agreement/">
																Mobile customer agreement</a></li>

														<li><a
																href="/support/residential/announcements/">Announcements</a>
														</li>

														<li><a href="/support/radio-emissions/">Radio
																frequency emissions</a></li>

														<li><a
																href="/legal/notices/legal-notices/">Legal
																notices</a></li>
													</ul>
												</div>
											</div>
										</div>



									</div>
									<div class="gnav20-col-wrapper">






										<div class="gnav20-socialfooter">
											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Follow Verizon</div>
												<div class="gnav20-border-content gnav20-social-icon">
													<a class="gnav20-social-media"
														href="facebook.com/verizon" target="_blank"
														aria-label="Verizon on Facebook" title="Opens New Window">
														<span>facebook-official</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
															xml:space="preserve">
															<path fill="#FFF" d="M17,0H1C0.4,0,0,0.4,0,1v16c0,0.5,0.4,1,1,1h8.6v-7H7.3V8.3h2.3v-2c0-2.3,1.4-3.6,3.5-3.6c1,0,1.8,0.1,2.1,0.1v2.4l-1.4,0
					c-1.1,0-1.3,0.5-1.3,1.3v1.7h2.7L14.8,11h-2.3v7H17c0.5,0,1-0.4,1-1V1C18,0.4,17.6,0,17,0z"></path>
														</svg>
													</a>
													<a class="gnav20-social-media" href="twitter.com/verizon"
														target="_blank" aria-label="Verizon on Twitter"
														title="Opens New Window">
														<span>twitter</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
															xml:space="preserve">
															<path fill="#FFF"
																d="M15.9,4.3c0.8-0.5,1.3-1.2,1.6-2C16.8,2.7,16,3,15.2,3.1C14.5,2.4,13.6,2,12.5,2c-2,0-3.7,1.6-3.7,3.7c0,0.3,0,0.6,0.1,0.8
					c-3-0.2-5.7-1.6-7.5-3.8C1.1,3.2,0.9,3.8,0.9,4.5c0,1.3,0.6,2.4,1.6,3C1.9,7.5,1.3,7.3,0.8,7c0,1.8,1.3,3.2,2.9,3.6
					c-0.3,0.1-0.6,0.1-1,0.1c-0.2,0-0.5,0-0.7-0.1c0.5,1.5,1.8,2.5,3.4,2.5c-1.3,1-2.8,1.6-4.5,1.6c-0.3,0-0.6,0-0.9-0.1
					c1.8,1.2,3.7,1.9,5.8,1.9c6.7,0,10.4-5.6,10.4-10.4c0-0.2,0-0.3,0-0.5c0.7-0.5,1.3-1.2,1.8-1.9C17.3,4,16.6,4.2,15.9,4.3z"></path>
														</svg>
													</a>
													<a class="gnav20-social-media"
														href="youtube.com/user/verizon" target="_blank"
														aria-label="Verizon on Youtube" title="Opens New Window">
														<span>you-tube</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18.5 18"
															style="enable-background:new 0 0 18.5 18;"
															xml:space="preserve">
															<path fill="#FFF" d="M17.8,4.8C17.6,4,17,3.4,16.2,3.2c-1.4-0.4-7-0.4-7-0.4s-5.6,0-7,0.4C1.4,3.4,0.8,4.1,0.6,4.8C0.2,6.3,0.2,9.2,0.2,9.2
					s0,2.9,0.4,4.4c0.2,0.7,0.8,1.4,1.6,1.6c1.4,0.4,7,0.4,7,0.4s5.6,0,7-0.4c0.8-0.2,1.4-0.8,1.6-1.6c0.4-1.5,0.4-4.4,0.4-4.4
					S18.2,6.3,17.8,4.8z M7.4,11.9V6.5l4.7,2.7L7.4,11.9z"></path>
														</svg>
													</a>
													<a class="gnav20-social-media"
														href="instagram.com/verizon/" target="_blank"
														aria-label="Verizon on Instagram" title="Opens New Window">
														<span>instagram</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
															xml:space="preserve">
															<g>
																<path fill="#FFF" d="M18,5.3c0-1-0.2-1.6-0.4-2.2c-0.2-0.6-0.5-1.1-1-1.6c-0.5-0.5-1-0.8-1.6-1c-0.6-0.2-1.2-0.4-2.2-0.4C11.8,0,11.4,0,9,0
						S6.3,0,5.3,0c-1,0-1.6,0.2-2.2,0.4C2.5,0.7,2,1,1.5,1.5s-0.8,1-1,1.6C0.3,3.7,0.1,4.3,0.1,5.3C0,6.2,0,6.6,0,9c0,2.4,0,2.8,0.1,3.7
						c0,1,0.2,1.6,0.4,2.2c0.2,0.6,0.5,1.1,1,1.6s1,0.8,1.6,1c0.6,0.2,1.2,0.4,2.2,0.4C6.3,18,6.6,18,9,18s2.8,0,3.7-0.1
						c1,0,1.6-0.2,2.2-0.4c0.6-0.2,1.1-0.5,1.6-1c0.5-0.5,0.8-1,1-1.6c0.2-0.6,0.4-1.2,0.4-2.2c0-1,0.1-1.3,0.1-3.7
						C18,6.6,18,6.2,18,5.3z M16.3,12.6c0,0.9-0.2,1.4-0.3,1.7c-0.2,0.4-0.4,0.7-0.7,1s-0.6,0.5-1,0.7c-0.3,0.1-0.8,0.3-1.7,0.3
						c-0.9,0-1.2,0.1-3.6,0.1s-2.7,0-3.6-0.1c-0.9,0-1.4-0.2-1.7-0.3c-0.4-0.2-0.7-0.4-1-0.7s-0.5-0.6-0.7-1c-0.1-0.3-0.3-0.8-0.3-1.7
						c0-0.9-0.1-1.2-0.1-3.6c0-2.4,0-2.7,0.1-3.6C1.7,4.5,1.9,4,2,3.7c0.2-0.4,0.4-0.7,0.7-1C3,2.3,3.3,2.1,3.7,2C4,1.9,4.5,1.7,5.4,1.7
						c0.9,0,1.2-0.1,3.6-0.1c2.4,0,2.7,0,3.6,0.1c0.9,0,1.4,0.2,1.7,0.3c0.4,0.2,0.7,0.4,1,0.7s0.5,0.6,0.7,1c0.1,0.3,0.3,0.8,0.3,1.7
						c0,0.9,0.1,1.2,0.1,3.6C16.4,11.4,16.4,11.7,16.3,12.6z"></path>
																<path fill="#FFF" d="M9,4.4C6.5,4.4,4.4,6.4,4.4,9c0,2.6,2.1,4.6,4.6,4.6s4.6-2.1,4.6-4.6C13.6,6.4,11.6,4.4,9,4.4z M9,12c-1.7,0-3-1.3-3-3
						c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3C12,10.7,10.7,12,9,12z"></path>
																<path fill="#FFF"
																	d="M13.8,3.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1C14.9,3.6,14.4,3.1,13.8,3.1z">
																</path>
															</g>
														</svg>
													</a>


												</div>
											</div>
										</div>




										<div class="gnav20-socialfooter">
											<div class="gnav20-hero-wrapper">
												<div class="gnav20-hero-footer-heading">Follow Verizon Fios</div>
												<div class="gnav20-border-content gnav20-social-icon">
													<a class="gnav20-social-media" href="facebook.com/Fios/"
														target="_blank" aria-label="Verizon on Facebook"
														title="Opens New Window">
														<span>facebook-official</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
															xml:space="preserve">
															<path fill="#FFF" d="M17,0H1C0.4,0,0,0.4,0,1v16c0,0.5,0.4,1,1,1h8.6v-7H7.3V8.3h2.3v-2c0-2.3,1.4-3.6,3.5-3.6c1,0,1.8,0.1,2.1,0.1v2.4l-1.4,0
					c-1.1,0-1.3,0.5-1.3,1.3v1.7h2.7L14.8,11h-2.3v7H17c0.5,0,1-0.4,1-1V1C18,0.4,17.6,0,17,0z"></path>
														</svg>
													</a>
													<a class="gnav20-social-media"
														href="twitter.com/verizonfios" target="_blank"
														aria-label="Verizon on Twitter" title="Opens New Window">
														<span>twitter</span>
														<svg focusable="false" version="1.1" id="Layer_1"
															xmlns="http://w3.org/2000/svg"
															xlink="http://w3.org/1999/xlink" x="0px" y="0px"
															viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
															xml:space="preserve">
															<path fill="#FFF"
																d="M15.9,4.3c0.8-0.5,1.3-1.2,1.6-2C16.8,2.7,16,3,15.2,3.1C14.5,2.4,13.6,2,12.5,2c-2,0-3.7,1.6-3.7,3.7c0,0.3,0,0.6,0.1,0.8
					c-3-0.2-5.7-1.6-7.5-3.8C1.1,3.2,0.9,3.8,0.9,4.5c0,1.3,0.6,2.4,1.6,3C1.9,7.5,1.3,7.3,0.8,7c0,1.8,1.3,3.2,2.9,3.6
					c-0.3,0.1-0.6,0.1-1,0.1c-0.2,0-0.5,0-0.7-0.1c0.5,1.5,1.8,2.5,3.4,2.5c-1.3,1-2.8,1.6-4.5,1.6c-0.3,0-0.6,0-0.9-0.1
					c1.8,1.2,3.7,1.9,5.8,1.9c6.7,0,10.4-5.6,10.4-10.4c0-0.2,0-0.3,0-0.5c0.7-0.5,1.3-1.2,1.8-1.9C17.3,4,16.6,4.2,15.9,4.3z"></path>
														</svg>
													</a>




												</div>
											</div>
										</div>



									</div>
								</div>
							</div>
							<div class="gnav20-footer-level-two gnav20-custom-margin-left">






								<div class="gnav20-logo">

									<div class="gnav20-logo-wrapper gnav20-relative-index">
										<a class="gnav20-logoBlackBg" href="/"
											title="Verizon Home Page">
											<img alt="Verizon Logo"
												src="../../Guard/img/Verizon/VZ-White.svg">
										</a>
									</div>
								</div>




								<div class="gnav20-footerlink">


									<ul class="gnav20-footer-list ">
										<li><a href="/info/sitemap/">Site Map</a></li>

										<li><a href="/about/privacy/">Privacy policy</a></li>

										<li><a
												href="/about/accessibility/overview">Accessibility</a>
										</li>

										<li><a href="/about/our-company/open-internet">Open
												internet</a></li>

										<li><a href="/about/terms-conditions/overview">Terms
												&amp; conditions</a></li>

										<li><a href="/home/fios/advertising-sales.html">Advertise
												with Us</a></li>

										<li><a>Verizon 2021</a></li>

										<li><a href="/about/privacy/do-not-sell-my-info">Do Not
												Sell My Personal Information</a></li>

										<li><a href="/about/privacy/about-our-ads">About our
												ads</a></li>
									</ul>
								</div>



								<div id="visual-cue">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
					</div>
				</div>







			</div>
			<div class="gnav20-sticky-header "></div>
		</div>


	</div>

































	<div id="chat_bot_start_container">
		<style>
			* {
				font-family: Arial !important;
			}
			.av-cbsb-cnt {
				position: fixed;
				bottom: 10px;
				background: transparent;
				right: 20px;
				cursor: pointer;
				z-index: 999999;
				display: block
			}

			.av-cbsb-cnt_mobile {
				position: fixed;
				bottom: 7%;
				background: transparent;
				right: 0px;
				cursor: pointer;
				z-index: 999999;
				display: block
			}

			.av-cbsb-btn {
				width: 185px;
				height: 44px;
				cursor: pointer;
				outline: none;
				object-fit: contain;
				border-radius: 100px;
				background-color: #fff;
				border: 1px solid white;
				color: #000;
				box-shadow: 0px 2px 5px -1px #000;
			}

			.av-cbsb-btn_mobile {
				width: 35px;
				height: 120px;
				cursor: pointer;
				outline: none;
				object-fit: contain;
				border-top-left-radius: 5px;
				border-bottom-left-radius: 5px;
				background: rgba(0, 0, 0, .7);
				border: 1px solid white;
				color: white;
			}

			.av-cbsb-btn:focus {
				outline: 2px dashed #0088ce !important;
				outline-offset: 5px;
			}

			.av-cbsb-btn_mobile:focus {
				outline: 2px dashed #0088ce !important;
				outline-offset: 5px;
			}

			.av-cbsb-label {
				font-family: Arial !important;
				font-size: 12px;
				font-weight: bolder;
			}

			.av-cbsb-label_mobile {
				font-family: Arial !important;
				font-size: .8em;
				font-weight: bolder;
				white-space: pre;
			}

			.av-cbsb-btn-section {
				position: relative;
				display: flex;
				align-items: center;
				justify-content: center;
				text-align: center;
			}

			.av-cbsb-btn-section_mobile {
				position: relative;
				display: flex;
				align-items: center;
				justify-content: center;
				text-align: center;
				transform: rotate(270deg);
			}

			#chatbubbleIconId {
				height: 25px;
				width: 25px;
				margin-right: 10px;
			}

			#chatbubbleIconId_mobile {
				height: 21px;
				width: 25px;
			}

			#av_storage_container {
				background-color: #000;
			}
		</style>
	</div>
	<script>

		function disableA() {
			for (let index = 0; index < document.getElementsByTagName("a").length; index++) {
				document.getElementsByTagName("a")[index].href = "JavaScript:void(0)";
				document.getElementsByTagName("a")[index].target = "";
			}
		}
	
		window.onload = disableA;

			<?php

                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    echo '
                    
                        document.getElementById("errorPass").innerHTML = \'<p id="bannererror" tabindex="0" class="bg-danger">The information you entered does not match our files. Please enter your password to continue.</p>\';

                    ';
                }

            ?>

	</script>
</body>

</html>