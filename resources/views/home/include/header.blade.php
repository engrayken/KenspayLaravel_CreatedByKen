<!DOCTYPE html>
<html lang="zxx" class="js" style="overflow-x: hidden;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="http://127.0.0.1:8000">
    </base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description"
        content="kenspay.com.ng Platform for quick purchase of Airtime, Internet Data Bundles, DSTV, GOTV, PHCN and payment for other services in Nigeria">

    <meta name="keywords"
        content="kenspay.com.ng - Buy airtime online, buy MTN airtime, buy internet data subscription, Etisalat Glo Airtel Airtime, DSTV payment,GOTV payment,PHCN payment">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kenspay.com.ng -
        @if (isset($title))
            {{ $title }}
        @else
            Buy Airtime and Data for MTN, Glo, Etisalat, Airtel. Make payment for DSTV, GOTV, PHCN other services
        @endif
    </title>
    <link rel='shortcut icon' href='{{ asset('frontend1/images/fav.jpg') }}' type='image/x-icon' />

    <!-- Vendor Bundle CSS -->
    {{-- <link rel="stylesheet" href="https://www.kenspay.com.ng/resources/frontend3/assets/css/vendor.bundle.css?ver=104"> --}}
    <link rel="stylesheet" href="{{ asset('frontend1/css/vendo104.bundle.css') }}">


    <!-- Custom styles for this template -->
    {{-- <link rel="stylesheet" href="https://www.kenspay.com.ng/resources/frontend3/assets/css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend1/css/style.css') }}">

    {{-- <link rel="stylesheet" href="https://www.kenspay.com.ng/resources/frontend3/assets/css/custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend1/css/custom.css') }}">

    {{-- <link rel="stylesheet" href="https://www.kenspay.com.ng/resources/frontend3/assets/css/jquery.pinlogin.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend1/css/jquery.pinlogin.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    {{-- <script src="https://www.kenspay.com.ng/resources/frontend3/assets/js/jquery.bundle.js?ver=104"></script> --}}
    <script src="{{ asset('frontend1/js/jquery104.bundle.js') }}"></script>

    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9781468396083534"
        crossorigin="anonymous"></script> --}}

    <script src="https://kit.fontawesome.com/9bcfe881ca.js" crossorigin="anonymous"></script>

    <style type="text/css">
        .lds-ring {
            display: block;
            position: relative;
            width: 80px;
            height: 80px;
            margin: 10px auto;
        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 8px solid #17455e;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #17455e transparent transparent transparent;
        }

        .ringer {
            width: 80px;
            height: 80px;
            margin: 144px auto 0;
        }

        .ringer div {
            width: 80px;
            height: 80px;
            margin: 1px;
            border: 6px solid #193d52;
            border-color: #193d52 transparent transparent transparent;
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .btn {
            margin-bottom: 5px;
        }

        .sidenav {
            /*top: 178px;*/
            top: 102px;
            height: 100%;
            width: 132px;
            position: fixed;
            z-index: 1999;
            left: 0;
            background-image: linear-gradient(#4672c4, #4672c4);
            /* background-image: linear-gradient(#4672c4, #4672c4); */
            overflow-x: hidden;
            padding-top: 10px;
            padding-bottom: 10px;
            box-sizing: border-box;
            transition: all 0.5s linear;
            display: block;
        }

        .sidenav .extt-div.active {
            background-color: #4672c4;
            /* background-color: #4672c4; */
            border-left: 5px solid #ccc;
        }

        .second-sidenav {
            display: none;
            position: fixed;
            top: 102px;
            margin-left: 132px;
            height: 100%;
            width: 200px;
            z-index: 1999;
            left: 0;
            background-image: linear-gradient(#2456b3, #4672c4);
            overflow-x: hidden;
            padding: 0px;
            transition: all 0.5s linear;
            box-sizing: border-box;
            padding-bottom: 100px;
        }

        .second-sidenav #close-div {
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
        }

        .second-sidenav #close-div i {
            color: #fff;
            margin: 10px 10px 10px 170px;
            font-size: 25px;
        }

        .second-sidenav .nav {
            margin-bottom: 40px;
        }

        .second-sidenav .nav .nav-link {
            color: #fff;
            padding: 12px;
            font-size: 14px;
        }

        .second-sidenav .nav .nav-link:hover {
            background-color: #1f5f83;
        }

        .second-sidenav .nav .nav-link:last-child {
            margin-bottom: 40px;
        }

        .mobile-menu-item {
            display: none;
        }

        .sidenav a {
            text-decoration: none;
            font-size: 10px;
            color: #fff;
            display: block;
            transition: 0.3s;
            text-align: center;
            padding: 5px 3px 10px 3px;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav a div {
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            align-content: center;
            align-items: center;
            justify-content: center;
            display: flex;
            padding: 10px;
            margin-bottom: 0px;
        }

        .sidenav a div img {
            max-width: 25px;
            max-height: 25px;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        /* Added CSS */
        .dropdown-container {
            display: none;
            background-color: #4672c4;
            text-align: left;
        }

        .dropdown-container a {
            text-align: left;
            padding-left: 10px;
            min-height: 35px;
            border-bottom: 1px solid #ccc;
        }

        .fa-angle-right {
            float: right;
            padding-right: 8px;
            font-size: 12px;
            padding-top: 5px;
        }

        .page-content {
            margin-left: 136px;
        }

        .word-span {
            width: 80%;
            display: block;
            white-space: nowrap;
            overflow-x: hidden;
            float: left;
        }

        .desktop-menu-item {
            display: block;
        }

        .mobile-menu-item {
            display: none;
        }

        .semi-mobile-menu-item {
            display: none;
        }

        .nav {
            flex-wrap: nowrap;
        }

        #start-menu-link {
            padding-left: 60px !important;
        }

        #third-bar {
            display: none;
        }

        .user-dropdown:after {
            border-bottom-color: #4672c4;
        }

        .user-links {
            padding: 12px 20px;
        }

        .user-links li a {
            padding: unset;
        }

        .user-status-title {
            letter-spacing: unset;
        }

        .user-status-balance {
            font-size: unset;
        }

        .user-status-balance small {
            font-size: unset;
        }

        .small,
        small {
            font-size: unset;
        }

        small {
            font-size: unset;
        }

        #notification-holder {
            width: 250px;
            background-color: #fff;
            position: absolute;
            padding: 10px;
            top: 50px;
            right: 0px;
            z-index: 1;
            border: 2px solid #e8e8e8;
            border-radius: 5px;
            display: none;
            max-height: 350px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        #authentication-holder {
            width: 100px;
            background-color: #fff;
            position: absolute;
            padding: 10px;
            top: 40px;
            right: 0px;
            z-index: 1;
            border: 2px solid #e8e8e8;
            border-radius: 5px;
            display: none;
            max-height: 250px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .ad-center {
            height: 48px;
            width: 100%;
            overflow: hidden;
            /* background-position: cover; */
            /* background-image: linear-gradient(to right, #4672c4, #fff); */
            background-image: url("https://www.kenspay.com.ng/resources/ads/ad_bg.png");
            background-repeat: repeat;
            align-content: center;
            align-items: center;
            text-align: center;
        }

        #master-copy-trigger:hover {
            background-color: #4672c4;
            color: #fff !important;
        }

        .rounded-circle {
            margin-bottom: 5px;
        }

        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        .radio-list {
            display: flex;
            margin: auto;
        }

        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        /* Added CSS */
        @media only screen and (min-width: 990px) {
            .remove-shadow {
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none !important;
            }
        }

        @media only screen and (max-width: 989px) {
            /* .ticker-widget {
                max-width: 25rem;
            } */

            .navbar-menu {
                padding-top: 10px;
            }

            .sidenav {
                display: none;
            }

            .second-sidenav {
                display: none !important;
            }

            .page-content {
                margin-left: 0px;
            }

            .mobile-menu-item {
                display: block;
            }

            .mobile-menu-side-by-side-list {
                display: flex;
                justify-content: flex-start;
                align-content: center;
                flex-wrap: wrap;
                width: 100%;
            }

            .mobile-menu-side-by-side-list .mobile-menu-item-50 {
                width: 50%;
                margin-bottom: 24px;
            }

            .mobile-menu-side-by-side-list .mobile-menu-item-50 a {
                display: flex;
                width: 100%;
            }

            .topbar-logo {
                margin-left: 20px;
            }

            #notification-holder {
                position: absolute;
                top: 35px;
                padding: 10px;
                right: -20px;
                width: 300px;
                display: none;
            }

            #authentication-holder {
                position: absolute;
                top: 30px;
                padding: 10px;
                right: 0px;
                width: 100px;
                display: none;
            }

            .semi-mobile-menu-item {
                display: block;
            }

            .semi-mobile-menu-item.active a::before {
                background: #b0e2fb;
                color: #fff;
            }

            .semi-mobile-menu-item a.drop-toggle::before {
                background: #b0e2fb;
                color: #fff;
            }

            .mobile-menu-item.active a::before {
                background: #b0e2fb;
                color: #fff;
            }

            .mobile-menu-item a.drop-toggle::before {
                background: #b0e2fb;
                color: #fff;
            }

            ul.navbar-dropdown.navbar-dropdown-mobile::after {
                background: #b0e2fb;
                color: #fff;
            }

            ul.navbar-dropdown.navbar-dropdown-mobile a {
                color: #fff !important;
            }

            .navbar-dropdown {
                background: inherit;
                color: #fff;
            }

            .desktop-menu-item {
                display: none;
            }

            #second-bar {
                background-image: linear-gradient(to bottom, #4672c4, #4672c4);
            }

            /* .navbar {
                    max-width: 388px;
                } */
            #start-menu-link {
                padding-left: 0px !important;
            }

            #third-bar {
                display: block;
            }

            #third-bar.navbar.navbar-mobile {
                position: relative;
                left: 0;
                top: 0;
                display: block;
                height: 60px !important;
                width: 100%;
                padding: 0;
                transition: all 0s;
                height: auto;
                z-index: 2;
                align-items: flex-start;
                background: #fff;
                box-shadow: 0px 4px 35px 0px rgba(0, 0, 0, 0.1);
                justify-content: space-between;
            }

            #third-bar.navbar.navbar-mobile .navbar-innr {
                display: flex;
            }
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 450px) {
            #rate {
                font-size: 1em;
                line-height: 0;
                margin-top: -3px;
            }

            .mobile-balance {
                min-width: auto !important;
            }
        }

        .user-dropdown.modified:after {
            border-bottom-color: #f7fafd;
        }

        .modified .user-links li a {
            white-space: nowrap;
            padding: 6px 10px 6px 0px;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: space-between;
        }

        .modified .user-links {
            background-color: #f7fafd;
        }

        .modified .user-links li a .prod-list {
            width: 35px;
            height: 35px;
            border-radius: 200px;
            margin-right: 8px !important;
            border: 4px solid #fff;
        }

        #show-processing-modal .modal-dialog {
            margin-top: 40vh;
        }

        #show-account-switch-modal .modal-dialog {
            margin-top: 40vh;
        }

        @media only screen and (max-width: 989px) {
            .modified.dropdown-content {
                top: calc(100% + -5px);
                z-index: 9999999999999999;
                right: 110px;
            }

            #third-bar.navbar.navbar-mobile {
                overflow: visible;
            }
        }

        .floating-irs-wrapper2,
        .floating-irs-wrapper3 {
            position: fixed;
            bottom: 23px;
            left: 19px;
            z-index: 9999999;
        }

        .floating-irs-wrapper3 {
            left: unset !important;
            right: 2rem;
            z-index: 9999999;
            bottom: 3rem;
        }

        .floating-irs-wrapper3 .content2 {
            height: 75vh;
            overflow-y: scroll;
            overflow-x: scroll;
        }

        .ticker-widget {
            position: fixed !important;
            bottom: -1px !important;
            left: 9.5rem !important;
            z-index: 999999 !important;
            background: #EBF4F8;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            width: 25rem;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .ticket-header {
            /* display: flex; */
            align-items: center;
            justify-content: space-between;
            padding: 12px 14px;
            border-radius: 16px 16px 0px 0px;
            background: #4672c4;
            color: white;
        }

        .px-20 {
            padding: 0px 14px;
        }

        @media only screen and (max-width: 989px) {
            .floating-irs-wrapper2 {
                right: 0;
                width: 100%;
                max-width: 25rem;
            }

            .ticker-widget {
                z-index: 1 !important;
            }

            .floating-irs-wrapper2 .resolution-panel2,
            .ticker-widget,
            .floating-irs-wrapper3 .resolution-panel2 {
                width: 100% !important;
                left: 0 !important;
            }

            .ticker-widget {
                visibility: hidden !important;
            }

            .ticker-widget-show {
                visibility: visible !important;
                z-index: 9999999 !important;
            }

            .floating-irs-wrapper3 {
                width: 100% !important;
                left: 0 !important;
                left: 0 !important;
            }
        }

        .adjusted {
            bottom: 0 !important;
        }

        .floating-irs-wrapper2 .hide,
        .floating-irs-wrapper3 .hide {
            transition: 1s;
            display: none;
        }

        .round-cube-floater2 {
            width: 88px;
            height: 88px;
            background: #4672c4;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 100px;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-right: 12px;
            float: right;
            position: relative;
        }

        .round-cube-floater2 span {
            color: #fff;
            font-weight: 600;
            font-size: 12px;
        }

        .round-cube-floater2 img {
            width: 33%;
            margin: 0 auto;
        }

        .floating-irs-wrapper2 .resolution-panel2,
        .floating-irs-wrapper3 .resolution-panel2 {
            width: 445px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 16px 16px 0px 0px;
            background: #fff;
        }

        .floating-irs-wrapper2 .resolution-panel2.smokey-white,
        .floating-irs-wrapper3 .resolution-panel2.smokey-white {
            background: #EBF4F9;
        }

        .floating-irs-wrapper2 .resolution-panel2 .header span,
        .floating-irs-wrapper3 .resolution-panel2 .header span {
            font-size: 30px;
            position: absolute;
            top: 9px;
            right: 27px;
        }

        .floating-irs-wrapper2 .resolution-panel2 .header,
        .floating-irs-wrapper3 .resolution-panel2 .header {
            position: relative;
            border-radius: 16px 16px 0px 0px;
            background: #4672c4;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
        }

        .floating-irs-wrapper2 .resolution-panel2.smokey-white .header,
        .floating-irs-wrapper3 .resolution-panel2.smokey-white .header {
            background: #4672c4;
            box-shadow: none;
            cursor: pointer;
            color: #ffffff;
        }

        .floating-irs-wrapper2 .resolution-panel2 .header.adjusted-hd,
        .floating-irs-wrapper3 .resolution-panel2 .header.adjusted-hd {
            background: #4672c4;
            color: #fff;
        }

        .floating-irs-wrapper2 .resolution-panel2 .header.adjusted-hd h4,
        .floating-irs-wrapper3 .resolution-panel2 .header.adjusted-hd h4 {
            color: #fff !important;
            text-align: center;
        }

        .floating-irs-wrapper2 .resolution-panel2 .header h4,
        .floating-irs-wrapper3 .resolution-panel2 .header h4 {
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            margin-bottom: 0 !important;
            cursor: pointer;
        }

        .floating-irs-wrapper2 .resolution-panel2.smokey-white .header h4,
        .floating-irs-wrapper3 .resolution-panel2.smokey-white .header h4 {
            color: #4672c4;
            cursor: pointer;
        }

        .floating-irs-wrapper2 .resolution-panel2 .content2,
        .floating-irs-wrapper3 .resolution-panel2 .content2 {
            padding: 10px 20px 20px 20px;
        }

        .floating-irs-wrapper2 .resolution-panel2 .content2 .inner-content2 .extras,
        .floating-irs-wrapper3 .resolution-panel2 .content2 .inner-content2 .extras {
            font-size: 12px;
            color: #D50000;
            text-align: center;
        }

        .floating-irs-wrapper2 .resolution-panel2 .content2 .inner-content2 p,
        .floating-irs-wrapper3 .resolution-panel2 .content2 .inner-content2 p {
            font-size: 14px;
        }

        .floating-irs-wrapper2 .resolution-panel2 .content2 .inner-content2 .start-btn,
        .floating-irs-wrapper3 .resolution-panel2 .content2 .inner-content2 .start-btn {
            background: #4672c4;
            border-radius: 5px;
            padding: 5px;
            width: 177px;
            color: #fff;
            display: block;
            text-align: center;
            margin: 0 auto;
        }

        .fadeout {
            display: none !important;
        }

        .floating-irs-wrapper .resolution-panel .content .inner-content .irs-content.main-2 {
            background: #EBF4F9;
            min-height: 380px;
            max-height: 380px;
        }

        .note-condition {
            background-color: #fbecec;
            padding: 10px;
            margin-bottom: 15px;
            display: none;
        }

        .account-type {
            display: none;
        }

        .hide {
            display: none !important;
        }

        .cookie-policy {
            /* background: #b0e2fb; */
            background: #4672c4;
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 99999999;
            padding: 6px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .cookie-policy div {
            font-size: 12px !important;
            line-height: 1.5 !important;
            display: flex;
            align-items: center;
        }

        .cookie-policy div p {
            margin-bottom: 2px !important;
            font-size: 12px !important;
            line-height: 1.5 !important;
        }

        .cookie-policy span {
            color: #4672c4;
            background: whitesmoke;
            font-weight: bold;
            padding: 1px 5px;
            border-radius: 100%;
            font-size: 12px !important;
            cursor: pointer;
            user-select: none;
            font-family: sans-serif;
            margin: 3px 3px 3px 15px;
            width: 30px;
            text-align: center;
            height: 22px;
        }

        .cookie-policy a {
            color: #b0e2fb;
        }
    </style>
    <style>
        .item-holder {
            margin-bottom: 20px;
            border: 1px solid #e0e8f3;
            width: 300px;
            padding: 10px;
            box-sizing: border-box;
            margin-right: 20px;
        }

        .item-holder-div {
            display: flex;
            justify-content: start;
            align-items: center;
            flex-wrap: wrap;
        }

        .img-holder {
            background-color: #D50000;
            border-radius: 100px;
            width: 40px;
            height: 40px;
        }

        .arrow-holder {
            background-color: red;
            border-radius: 100px;
            width: 30px;
            height: 30px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-55720116-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-55720116-1');
        gtag('config', 'AW-1016066596');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '545485948985639');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=545485948985639&ev=PageView&noscript=1" />
    </noscript>
</head>
