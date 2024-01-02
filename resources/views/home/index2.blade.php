
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

            <meta name="description" content="kenspay.com.ng Platform for quick purchase of Airtime, Internet Data Bundles, DSTV, GOTV, PHCN and payment for other services in Nigeria">

            <meta name="keywords" content="kenspay.com.ng - Buy airtime online, buy MTN airtime, buy internet data subscription, Etisalat Glo Airtel Airtime, DSTV payment,GOTV payment,PHCN payment">


            <title>kenspay.com.ng - Buy Airtime and Data for MTN, Glo, Etisalat, Airtel. Make payment for DSTV, GOTV, PHCN other services</title>

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

        @keyframes  lds-ring {
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
            background-image: linear-gradient(#4672c4, #195B7e);
            /* background-image: linear-gradient(#4672c4, #195B7e); */
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
            background-image: linear-gradient(#4672c4, #4672c4);
            /* background-image: linear-gradient(#4672c4, #4672c4); */
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
            border-bottom-color: #195B7e;
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

        @keyframes  blink-animation {
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
        @media  only screen and (min-width: 990px) {
            .remove-shadow {
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none !important;
            }
        }

        @media  only screen and (max-width: 989px) {
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
                background-image: linear-gradient(to bottom, #4672c4, #195B7e);
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

        @media  screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        @media  screen and (max-width: 450px) {
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

        @media  only screen and (max-width: 989px) {
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

        @media  only screen and (max-width: 989px) {
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
        .item-holder{
            margin-bottom:20px;
            border:1px solid #e0e8f3;
            width:300px;
            padding:10px;
            box-sizing:border-box;
            margin-right:20px;
        }

        .item-holder-div{
            display:flex;
            justify-content:start;
            align-items:center;
            flex-wrap:wrap;
        }

        .img-holder{
            background-color:#D50000;
            border-radius:100px;
            width:40px;
            height:40px;
        }

        .arrow-holder{
            background-color:red;
            border-radius:100px;
            width:30px;
            height:30px;
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
<div id="mySidenav" class="sidenav">
    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
    <div class="extt-div">
        <a style="font-size: 13px;" href="#" class="dropdown-side" category="1">
            <div>
                <img src="{{ asset('frontend1/images/airtime.png') }}">
            </div>
            Buy Phone Airtime
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="#" category="3" class="dropdown-side">
            <div>
                <img src="{{ asset('frontend1/images/data.png') }}">
            </div>
            Buy Internet Data
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="#" category="6" class="dropdown-side">
            <div>
                <img src="{{ asset('frontend1/images/tv.png') }}">
            </div>
            Pay TV Subscription
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="#" category="7" class="dropdown-side">
            <div>
                <img src="{{ asset('frontend1/images/electric.png') }}">
            </div>
            Pay Electricity Bill
        </a>
        <div class="dropdown-container"></div>
    </div>
            <div class="extt-div">
        <a style="font-size: 13px;" href="#" category="more" class="dropdown-side">
            <div>
                <img src="{{ asset('frontend1/images/more.png') }}">
            </div>
            More
        </a>
        <div class="dropdown-container"></div>
    </div>
</div>
<div class="second-sidenav">
    <div id="close-div">
        <i class="fas fa-times close-icon"></i>
    </div>
    <nav class="nav flex-column"></nav>
</div>

<body class="page-user">
    <div class="cookie-policy hide">
        <div>
            <p>
                This website uses cookies. For further information on how we use cookies you can read our <a href="/privacy-policy">Privacy and Cookie policy</a>
            </p>
            <span>x</span>
        </div>
    </div>
    <script>
        let cookie = document.cookie.split('; ').find(x => x.startsWith('cookie-policy='));
        if (cookie == undefined) document.querySelector('.cookie-policy').classList.remove('hide');
    </script>

    <div class="floating-irs-wrapper3">
        <div class="round-cube-floater2 clickable-support animate__animated" data-current="fadeout"
            data-next="animate__zoomInUp">
            <span>Need Help?</span>
            <img src="{{ asset('frontend1/images/chat-icon.png') }}" class="img-fluid" id="CHATIMG">
        </div>

        <div class="resolution-panel2 hide smokey-white animate__animated">
            <div class="header">
                <h4 style="color: white;">Support / Help Channels</h4>
                <span>&caron;</span>
            </div>
            <div class="content2">
                <div class="inner-content2">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div style="padding: 0px 12px; line-height: 18px;">We have provided a number of support channels
                                    to help you get what you want</div>
                                <div class="col-12 mb-2 py-2 px-3 send-msg">
                                    <a href="https://www.kenspay.com.ng/contact" class="set text-dark">
                                        <h4 class="text-dark"><i class="fas fa-ticket-alt"></i> Send us a Message.</h4>
                                        <div class="">
                                            <span class="checkmin"></span>

                                            <br><a class="text-danger"
                                                href="https://www.kenspay.com.ng/contact">Submit a ticket<i
                                                    class="fas fa-arrow-right ml-2"></i></a></div>
                                    </a>
                                </div>
                                {{-- <div class="col-12 mb-2 py-2 px-3">
                                    <a href="https://www.kenspay.com.ng/self-service" class="set text-dark">
                                        <h4 class="text-dark"><i class="fas fa-question-circle"></i> Self issue
                                            resolution</h4>
                                        <div>Guess what? We have built tools that would help you resolve your issues
                                            instantly with any help. Click here to start <br><a
                                                href="https://www.kenspay.com.ng/self-service" class="text-danger">Tryout now <i
                                                    class="fas fa-arrow-right ml-2"></i></a></div>
                                    </a>
                                </div> --}}
                                <div class="col-12 mb-2 py-2 px-3 live-chat">
                                    <a href="javascript:void(0)" class="set text-dark">
                                        <h4 class="text-dark"><i class="fas fa-comments"></i> Live chat</h4>
                                        <div>Chat with an agent and get your issues resolved instantly. Available
                                            24/7.<br><a href="javascript:void(0)" class="text-danger">Chat us now<i
                                                    class="fas fa-arrow-right ml-2"></i></a></div>
                                    </a>
                                </div>
                                {{-- <div class="col-12 mb-2 py-2 px-3">
                                    <a href="https://www.kenspay.com.ng/faqs" class="set text-dark">
                                        <h4 class="text-dark"><i class="fas fa-question"></i> FAQs</h4>
                                        <div>Go through our Frequently Asked Questions.<br><a class="text-danger"
                                                href="https://www.kenspay.com.ng/faqs">See our FAQs<i
                                                    class="fas fa-arrow-right ml-2"></i></a></div>
                                    </a>
                                </div> --}}
                                <div class="col-12 mb-2 py-2 px-3">
                                    <a class="set text-dark" href="tel:08126216200">
                                        <h4 class="text-dark"><i class="fas fa-mobile"></i> Phone call</h4>
                                        <div>Would you rather talk to a support agent over the phone? Then call us on
                                            08126216200<br><a href="tel:08126216200" class="text-danger">Call now<i
                                                    class="fas fa-arrow-right ml-2"></i></a></div>
                                    </a>
                                </div>

                                {{-- <div class="col-12 mb-2 py-2 px-3">
                                    <a href="https://www.kenspay.com.ng/blog" class="set text-dark">
                                        <h4 class="text-dark"><i class="fab fa-blogger-b"></i>
                                            kenspay.com.ng blog</h4>
                                        <div>Need to learn more? Visit our blog for interesting and educating contents
                                            <br><a class="text-danger" href="https://www.kenspay.com.ng/blog">Visit blog<i
                                                    class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </a>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ticker-widget floating-widget floating-ticket-wrapper2">
                <div class="resolution-panel2 smokey-white animate__animated">
            <div id="ticket-header" class="header ticket-header">
                <h4 style="margin: 0px; color: #FFFFFF; font-weight: bold; font-size: 16px; cursor: pointer;">Send us a Message.</h4>
                <div style="position: absolute; right: 10px; top: 19px;"><span style="font-size: 32px; line-height: 0.8;">&caron;</span></div>
            </div>
            <div id="ticket-content" class="content2 hide">
                <div class="inner-content2" style="margin-top: 20px;">
                    <div class="main-1 px-20 checkmin">
                        <p>We'll reply to your email in 30 minutes.</p>
                                            </div>
                    <div class="irs-content2 main-2">
                        <iframe src="https://www.kenspay.com.ng/widget-ticket" frameborder="0" height="440"
                            width="100%" style="overflow-y: scroll;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="topbar-wrap">

        <div class="topbar is-sticky" style="padding-left:0px;padding-right:0px;">

                        {{-- <div class="text-center bg-white pt-1" id="switchBar" style="height:48px;width:100%;overflow:hidden;"> --}}
                {{-- <a href="https://www.kenspay.com.ng/blog/index.php/2023/10/18/ikedc-sts-prepaid-meter-upgrade/" target="_blank">
                    <h2 class="pt-2" id="rate" style="cursor:pointer">
                        <img src="{{ asset('frontend1/images/new-tag.png') }}" height="28"> UPGRADE YOUR IKEDC STS PREPAID METER WITH THESE FEW STEPS.
                    </h2>
                </a> --}}
                <!-- <a href="https://kenspay.com.ng">
                        <img src="https://www.kenspay.com.ng/resources/frontend3/images/switch1.png" class="img-fluid" id="switchIMG">
                    </a>
                    <small style="display:block;" id="vt-count-down"></small> -->





                <!-- <h2 data-toggle="modal" data-target="#website-rating" class="pt-2" id="rate" style="cursor:pointer;display:block">
                        <img src="{{ asset('frontend1/images/star.png') }}" height="28">
                        <span style="top:4px">We just launched the kenspay Messaging Service (Bulk SMS). Click here to Start!</span>
                    </h2>
                    <h2 class="pt-2" id="rated" style="display:none">
                        <img src="{{ asset('frontend1/images/star.png') }}" height="28">
                        <span style="top:4px">Thanks For Rating Us!</span>
                    </h2> -->

            {{-- </div> --}}

            <div class="container" id="blue-top-bar">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <ul class="topbar-nav d-lg-none">
                            <li class="topbar-nav-item relative">
                                <a class="toggle-nav" href="#">
                                    <div class="toggle-icon">
                                        <span class="toggle-line"></span>
                                        <span class="toggle-line"></span>
                                        <span class="toggle-line"></span>
                                        <span class="toggle-line"></span>
                                    </div>
                                </a>
                            </li><!-- .topbar-nav-item -->
                        </ul><!-- .topbar-nav -->
                        <a class="topbar-logo" href="">
                                                                                        <img src="{{ asset('frontend1/images/logo-white.png') }}"
                                    srcset="{{ asset('frontend1/images/logo-white.png') }} 2x"
                                    alt="logo">
                                                    </a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                                                <ul class="topbar-nav">
                                                                                        <li class="topbar-nav-item relative d-lg-block d-none">
                                    <style type="text/css">
                                        #switcherX.user-dropdown.modified:after {
                                            border-bottom-color: #1a5171;
                                        }

                                        #switcherX ul li a {
                                            display: inline-flex;
                                        }

                                        #switcherX ul li a i {
                                            width: 34px;
                                        }

                                        #switcherX ul li a small {
                                            display: block;
                                            font-size: 11px;
                                            margin-top: -4px;
                                        }
                                    </style>
                                    <img class="blink"
                                        src="{{ asset('frontend1/images/lost-your-token.png') }}"
                                        height="24px" style="position:relative;">
                                    <a href="https://www.kenspay.com.ng/find-my-token" style="color: #fff;"><span
                                            class="user-welcome d-none d-lg-inline-block">Find my token</span></a>

                                    <img src="{{ asset('frontend1/images/new-tag.png') }}" height="30px" style="position:relative;">
                                    <a class="toggle-tigger" href="javascript://" style="color: #fff;"><span
                                            class="user-welcome d-none d-lg-inline-block">Switch Service</span> <span
                                            class="fas fa-caret-down"></span></a>
                                    <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown modified"
                                        id="switcherX">
                                        <ul class="user-links" style="background-color:#1a5171">
                                            <li>
                                                <a onclick="window.location='https://messaging.kenspay.com.ng/'"
                                                    href="javascript://" style="color:#fff;">
                                                    <i style="color:#758698; background:url({{ asset('frontend1/images/prod-msg.png') }}) no-repeat center center/contain #fff;"
                                                        class="prod-list"></i>
                                                    <div>
                                                        Messaging Service
                                                        <small>Send Bulk SMS</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                                        <li class="topbar-nav-item relative d-lg-none d-block"
                                style="cursor: pointer;margin:0 0;">
                                <a style="color:#fff;" href="https://www.kenspay.com.ng/find-my-token"
                                    class="d-flex justify-content-center align-items-center">
                                    <img class="blink"
                                        src="{{ asset('frontend1/images/lost-your-token.png') }}"
                                        height="18px" style="position:relative;">
                                    <div class="ml-1">
                                        <span
                                            style="display:block;color:#fff;line-height: 1.1;margin:0 0;text-align:center;font-size:10px;">Find
                                            My</span>
                                        <span
                                            style="display:block;color:#fff;line-height: 1.1;margin:0 0;text-align:center;font-size:10px;">Token</span>
                                    </div>
                                </a>
                            </li>
                            <li class="topbar-nav-item relative" id="notification-button" style="cursor: pointer;">
                                                                <span id="notification-badge">
                                    <a style="color:#fff;cursor: pointer;"><i class="fas fa-bell"
                                            style="cursor: pointer;"></i></a>
                                    <span class="badge rounded-circle" id="notification-counter"
                                        style="white-space:nowrap;overflow-x:hidden;background-color:#D50000;border:0;position:absolute;top:7px;left:4px;min-width:0;padding:2px;font-size: 10px;width:20px;height:20px;cursor: pointer;"><span
                                            id="notification-spinner"><i class="fas fa-spinner fa-spin"
                                                style="cursor: pointer;  left: 2px;position: relative;"></i></span>
                                    </span>
                                </span>


                                <div id="notification-holder">
                                    <div class="row">
                                        <div class="col-12 text-center" style="border-bottom: 1px solid #4672c4;">
                                            <h4 style="color:#4672c4;font-size:14px;"><strong>NOTIFICATIONS</strong>
                                            </h4>
                                        </div>
                                        <div class="col-12" id="noty-holder-div"></div>
                                        <div class="col-12">
                                            <a href="https://www.kenspay.com.ng/display-all-platform-notification"
                                                class="btn btn-block display-all-platform-notification"
                                                style="background-image:linear-gradient(#4672c4, #195B7e);color:#fff;">View
                                                All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                            <li class="topbar-nav-item relative d-lg-none d-block" id="authentication-button"
                                    style="cursor: pointer;">
                                    <a style="color:#fff;cursor: pointer;font-size:24px;"><i
                                            class="fas fa-user-circle" style="cursor: pointer;"></i></a>
                                    <div id="authentication-holder">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li class="authentication-holder-link"
                                                        href="https://www.kenspay.com.ng/register#buy-form">
                                                        <a class="authentication-holder-link"
                                                            style="line-height: 1.1;margin:0 0;color:#333;"
                                                            href="https://www.kenspay.com.ng/register#buy-form">Sign Up</a>
                                                    </li>
                                                    <li class="authentication-holder-link"
                                                        href="https://www.kenspay.com.ng/login#buy-form">
                                                        <a class="authentication-holder-link"
                                                            style="line-height: 1.1;margin:0 0;color:#333;"
                                                            href="https://www.kenspay.com.ng/login#buy-form">Login</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="topbar-nav-item relative d-lg-block d-none"><a style="color:#fff;"
                                        style="line-height: 1.1;margin:0 0;"
                                        href="https://www.kenspay.com.ng/register#buy-form">Sign Up</a></li>
                                <li class="topbar-nav-item relative d-lg-block d-none"><a style="color:#fff;"
                                        href="https://www.kenspay.com.ng/login#buy-form">Login</a></li>
                                                                                </ul><!-- .topbar-nav -->
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .topbar -->
        <div class="navbar d-lg-none d-flex justify-content-between align-items-center" id="third-bar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="w-100 d-flex justify-content-between align-items-center" style="">
                        <li class="">
                            <a style="color:inherit;padding:3px;" href="https://www.kenspay.com.ng/help"
                                class="btn btn-sm btn-outline btn-light mobile-balance">
                                <i class="fas fa-info-circle" style="display:inline-block;top:-4px;"></i>
                                <small
                                    style="display:inline-block;text-align:left;font-size:10px;line-height:1.2;">Help/<br>Support</small>
                            </a>
                        </li>
                        <li class="">
                            <a style="color:inherit;min-width:100px;" href="javascript://"
                                class="btn btn-sm btn-outline btn-light toggle-tigger">
                                <span class="mr-2">Switch Service</span> <span class="fas fa-caret-down"></span>
                            </a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown modified"
                                id="switcherX">
                                <ul class="user-links" style="background-color:#1a5171">
                                    <li>
                                                                                    <a onclick="window.location='https://messaging.kenspay.com.ng/'"
                                                href="javascript://" style="color:#fff;">
                                                <i style="color:#758698; background:url({{ asset('frontend1/images/prod-msg.png') }}) no-repeat center center/contain #fff;"
                                                    class="prod-list"></i>
                                                <div>
                                                    Messaging Service
                                                    <small>Send Bulk SMS</small>
                                                </div>
                                            </a>
                                                                            </li>
                                </ul>
                            </div>
                        </li>

                                            </ul>
                </div>
            </div>
        </div>
                    <div class="navbar" id="second-bar">
                <div class="container">
                    <div class="navbar-innr">
                        <ul class="navbar-menu" id="start-menu-link">
                            <li>
                                <div class="mobile-menu-side-by-side-list">
                                    <div category="1" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/airtime">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="font-size:20px;" class="fas fa-mobile-alt"></i>
                                            </div>
                                            Buy phone airtime
                                        </a>
                                    </div>
                                    <div category="3" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/data">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="font-size:20px;" class="fas fa-wifi"></i>
                                            </div>
                                            Buy internet data
                                        </a>
                                    </div>
                                    <div category="6" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/tv-subscription">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="color:#b0e2fb;font-size:20px;" class="fas fa-tv"></i>
                                            </div>
                                            Pay TV subscription
                                        </a>
                                    </div>
                                    <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/electricity-bill">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="font-size:20px;" class="far fa-lightbulb"></i>
                                            </div>
                                            Pay electricity bill
                                        </a>
                                    </div>
                                    <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/education">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="font-size:20px;" class="fas fa-book-open"></i>
                                            </div>
                                            Education Payment
                                        </a>
                                    </div>
                                    <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                            class="" href="https://www.kenspay.com.ng/insurance">
                                            <div
                                                style="width:30px;display:flex;justify-content:center;align-items:center;">
                                                <i style="font-size:20px;" class="fab fa-accessible-icon"></i>
                                            </div>
                                            Buy Insurance
                                        </a>
                                    </div>
                                                                    </div>
                            </li>
                            <li style="border-top: 1px solid #fff;" category="more"
                                class="has-dropdown mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class="drop-toggle"
                                    href="#">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="fas fa-ellipsis-v"></i>
                                    </div>
                                    More
                                </a>
                                <ul id="more-list" class="navbar-dropdown navbar-dropdown-mobile">
                                    <script>
                                        var constrLinkArr = [{"link":"https:\/\/www.kenspay.com.ng\/partners","name":"Partner with us"},{"link":"https:\/\/www.kenspay.com.ng\/contact","name":"Contact"}];
                                        constrLinkArr.map((lik) => {
                                            $('#more-list').append('<li><a href="' + lik.link + '">' + lik.name + '</a></li>');
                                        });
                                    </script>
                                </ul>
                            </li>
                            <li class="semi-mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                    href="https://www.kenspay.com.ng/payment">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i class="fas fa-money-bill" style="font-size:20px;"></i>
                                    </div>
                                    Make Payment
                                </a>
                            </li>
                            <li class="semi-mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                    href="https://www.kenspay.com.ng/agent">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i class="fas fa-user" style="font-size:20px;"></i>
                                    </div>
                                    Become an Agent
                                </a>
                            </li>
                            <li class="semi-mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                    href="https://www.kenspay.com.ng/partners">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i class="fas fa-money-check-alt" style="font-size:20px;"></i>
                                    </div>
                                    Start Earning
                                </a>
                            </li>
                            <li class="semi-mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                    href="https://www.kenspay.com.ng/help">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i class="fas fa-info-circle" style="font-size:20px;"></i>
                                    </div>
                                    Help/Support
                                </a>
                            </li>
                            <li class="has-dropdown page-links-all semi-mobile-menu-item">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class="drop-toggle">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i class="fas fa-toolbox" style="font-size:20px;"></i>
                                    </div>
                                    Quick Tools
                                </a>
                                <ul class="navbar-dropdown navbar-dropdown-mobile">
                                    <li><a href="https://www.kenspay.com.ng/generate-kct">Generate KCT</a></li>
                                    <li><a href="https://www.kenspay.com.ng/find-my-transaction">Find My Transaction</a></li>
                                    <li><a href="https://www.kenspay.com.ng/all-tickets">Support Tickets</a></li>
                                    <li><a href="https://www.kenspay.com.ng/jamb-centers">Jamb Centers</a></li>

                                </ul>
                            </li>
                            <li class="desktop-menu-item">
                                <a href="https://www.kenspay.com.ng/payment">
                                    <i class="fas fa-money-bill"></i>
                                    Make Payment
                                </a>
                            </li>
                            <li class="desktop-menu-item">
                                <a href="https://www.kenspay.com.ng/agent">
                                    <i class="fas fa-user"></i>
                                    Become an Agent
                                </a>
                            </li>
                            <li class="desktop-menu-item">
                                <a href="https://www.kenspay.com.ng/partners">
                                    <i class="fas fa-money-check-alt"></i>
                                    Start Earning
                                </a>
                            </li>
                            <li class="has-dropdown page-links-all desktop-menu-item">
                                <a class="drop-toggle">
                                    <i class="fas fa-toolbox"></i>
                                    Quick Tools
                                </a>
                                <ul class="navbar-dropdown">
                                    <li><a href="https://www.kenspay.com.ng/generate-kct">Generate KCT</a></li>
                                    <li><a href="https://www.kenspay.com.ng/find-my-transaction">Find My Transaction</a></li>
                                    <li><a href="https://www.kenspay.com.ng/all-tickets">Support Tickets</a></li>
                                    <li><a href="https://www.kenspay.com.ng/jamb-centers">Jamb Centers</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div><!-- .navbar-innr -->
                </div><!-- .container -->
            </div><!-- .navbar -->
            </div><!-- .topbar-wrap -->


    <div class="page-content">
                <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col-lg-12">
                    <div class="container" style="max-width: 100% !important;">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-area card pl-lg-5 pr-lg-5">
                    <div class="card-innr">

                                                <div class="row" style="margin-top:20px;">
                            <div class="col-md-12 d-lg-none d-block" style="background:url('{{ asset('frontend1/images/homepage5.jpg') }}') no-repeat center;background-size:400px 250px;height:250px;">
                            </div>
                            <div class="col-md-12 d-lg-none d-block">
                                <h1 style="font-size:50px;font-weight:bold;color:#4672c4;margin:0;">kenspay</h1>
                                <h3 style="font-size:30px;font-weight:bold;color:#4672c4;margin:0;">Recharge Card Printing Got Easy</h3>
                                <p style="font-size:14px;">
                                    No need of N10,000 or N5,000 Registration fee, Just Register and Start Printing Recharge Card Pins of all Network.<br>
                                    You can also Top up phone airtime vtu or internet data and data pins. Pay electricity bills, renew TV subscriptions, pay education Payment for Cheap rate
                                  </p>
                                <div>
                                    <ul class="d-flex justify-content-start align-items-center">
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/category/airtime">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-mobile.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/data">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-wifi.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-tv.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-bulb.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 d-lg-block d-none" style="margin-top:60px;">
                                <h1 style="font-size:80px;font-weight:bold;color:#4672c4;margin:0;line-height: 0.9;">Kenspay</h1>
                                <h1 style="font-size:50px;font-weight:bold;color:#4672c4;margin:0;">Recharge Card Printing Got Easy</h1>
                                <p style="font-size:15px;">
                                    No need of N10,000 or N5,000 Registration fee, Just Register and Start Printing Recharge Card Pins of all Network.<br>
                                    You can also Top up phone airtime vtu or internet data and data pins. Pay electricity bills, renew TV subscriptions, pay education Payment for Cheap rate
                                </p>
                                <div>
                                    <ul class="d-flex justify-content-start align-items-center">
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/airtime">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-mobile.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/data">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-wifi.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-tv.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-2">
                                            <a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">
                                                <div class="img-holder d-flex justify-content-center align-items-center">
                                                    <img width="20" height="20" src="{{ asset('frontend1/images/dev-bulb.png') }}"/>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-lg-7 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/homepage5.jpg') }}') no-repeat center; background-size:400px 250px;height:250px;"> --}}
                                <div class="col-lg-7 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/homepage5.jpg') }}') no-repeat center; background-size:400px 400px;height:400px;">
                            </div>

                            <div class="col-md-12 mt-2 d-flex justify-content-center align-items-center flex-column">
                                <h2 style="font-weight:bold;color:#4672c4;font-size:30px;">We Provide Amazing <span style="color:inherit;border-bottom:10px solid #D50000;">Services</span></h2>
                                <p class="d-lg-block d-none mt-2" style="text-align:center;">
                                   With kenspay Mobile App and Desktop App You can print Recharge Card with mobile bluetooth Printer or deskjet/laserjet Printer right from the comfort of your home or office.<br/>fast service delivery and easy payment.
                                </p>
                                <p class="d-lg-none d-block mt-2" style="text-align:left;">
                                    With kenspay Mobile App and Desktop App You can print Recharge Card with mobile bluetooth Printer or deskjet/laserjet Printer right from the comfort of your home or office.<br/>fast service delivery and easy payment.
                                </p>
                                <div class="row d-flex justify-content-between align-items-center flex-wrap mt-3 w-100">

                                    <div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-pin">Buy Recharge Card</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-pin">MTN PIN</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-pin">GLO PIN</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-pin">Airtel PIN</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-pin">9Mobile PIN</a></li>
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/airtime-pin">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-vtu">Buy Phone Airtime</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-vtu">MTN VTU</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-vtu">GLO VTU</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-vtu">Airtel VTU</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/airtime-vtu">9Mobile VTU</a></li>
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/airtime-vtu">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/data">Buy Internet Data</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">MTN DATA</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">GLO DATA</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">AIRTEL DATA</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">9MOBILE DATA</a></li>
                                                {{-- <li><a style="color:inherit;" href="https://www.kenspay.com.ng/smile">SMILE DATA</a></li> --}}
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/data">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">Pay TV Subs</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">GOTV</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">DSTV</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/tv-subscription">STARTIMES</a></li>
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/tv-subscription">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">Pay Electricity Bill</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">PHED</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">AEDC</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">IKEDC</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">EKEDC</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">KEDCO</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">IBEDC</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">JEDplc</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/electricity-bill">KAEDCO</a></li>
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/electricity-bill">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg col-md-6 w-100 m-0 p-0">
                                        <div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
                                            <h4 style="font-size:15px;font-weight:bold;color:#4672c4;"><a style="color:inherit;" href="https://www.kenspay.com.ng/insurance">Insurance</a></h4>
                                            <ul style="font-size:14px;">
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/car-insurance">Third Party Motor</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/health-insurance-rhl">Health Insurance - HMO</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/home-cover-insurance-fbn">Home Cover</a></li>
                                                <li><a style="color:inherit;" href="https://www.kenspay.com.ng/personal-accident-insurance-fbn">Personal Accident</a></li>
                                            </ul>
                                            <a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/insurance">
                                                <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#4672c4;color:#fff;">
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="col-md-12 mt-5 d-flex justify-content-center align-items-center">
                                {{-- <a role="button" href="https://www.kenspay.com.ng/payment" class="btn" style="background-image: linear-gradient(#F0B34C, #D48122);color:#fff;border-radius:10px;padding-top:12px;padding-bottom:12px;margin-bottom:7px">DISCOVER MORE</a> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 d-flex justify-content-center align-items-center flex-column">
                                <h2 style="font-weight:bold;color:#4672c4;font-size:30px;">Register <span style="color:inherit;border-bottom:10px solid #D50000;">With Us</span></h2>
                                <div class="row w-100">
                                    <div class="col-lg-12 w-100">
                                        <p class="d-lg-block d-none mt-3" style="text-align:center;">
                                            Join recharge card printing  business group Today. The Recharge card you print Bears your business name.
                                        </p>
                                        <p class="d-lg-none d-block mt-3" style="text-align:left;">
                                            Join recharge card printing  business group Today. The Recharge card you print Bears your business name.
                                        </p>
                                    </div>
                                </div>
                                <div class="row w-100 mt-3 d-flex justify-content-center align-items-center">

                                    <div class="col-lg-6" style="background:url('{{ asset('frontend1/images/homepage2.gif') }}') no-repeat center;height:400px;"></div>
                                    <div class="col-lg-6 w-100 p-0 text-lg-left text-center">
                                        <div class="d-flex justify-content-center align-items-center mb-3 w-100" style="background-color:#effafe;border-radius:10px;padding:5px;">
                                            <img width="50" height="50" src="{{ asset('frontend1/images/sack.svg') }}"/>
                                            <div class="pl-2 ml-2 text-left">
                                                <h4 style="font-weight:bold;color:#4672c4;font-size:20px;margin:0;">What you need to start Printing</h4>
                                                <p style="font-size:14px;">
                                                    Get a computer or smart phone that can access the internet
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#fff8f5;border-radius:10px;padding:5px;">
                                            <img width="50" height="50" src="{{ asset('frontend1/images/bank.svg') }}"/>
                                            <div class="pl-2 ml-2 text-left">
                                                <h4 style="font-weight:bold;color:#4672c4;font-size:20px;margin:0;">Buy Epin (Recharge Card)</h4>
                                                <p style="font-size:14px;">
                                                    From a reliable recharge card dealer in Nigeria Known as Kenspay Technology. <br>Generate the card pin, print or Download as pdf.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#f3f3fd;border-radius:10px;padding:5px;">
                                            <img width="50" height="50" src="{{ asset('frontend1/images/graphic.svg') }}"/>
                                            <div class="pl-2 ml-2 text-left">
                                                <h4 style="font-weight:bold;color:#4672c4;font-size:20px;margin:0;">Connect Printer to PC/Mobile Phone</h4>
                                                <p style="font-size:14px;">
                                                    load it with papers open the file as pdf to print the ePins on the papers by clicking on print. <br>
                                                     or use your mobile phone with our mabile application connect with bluetooth printer and start printing.
                                                    Sell and make money
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#fffef9;border-radius:10px;padding:5px;">
                                            <img width="50" height="50" src="{{ asset('frontend1/images/wallet.svg') }}"/>
                                            <div class="pl-2 ml-2 text-left">
                                                <h4 style="font-weight:bold;color:#4672c4;font-size:20px;margin:0;">Auto-Wallet Funding</h4>
                                                <p style="font-size:14px;">
                                                    Enjoy fast way to fund your wallet automatically without delay when you need it. 100% secured
                                                </p>
                                            </div>
                                        </div>
                                        <a role="button" href="https://www.kenspay.com.ng/login" class="btn" style="background-image: linear-gradient(#F0B34C, #D48122);color:#fff;border-radius:10px;padding-top:12px;padding-bottom:12px;">START NOW</a>
                                        {{-- <a role="button" href="https://www.kenspay.com.ng/signup" class="btn ml-lg-3 ml-0" style="border:1px solid #D48122;padding:11px 20px !important;color:#D48122;border-radius:10px;padding-top:12px;padding-bottom:12px;">DISCOVER MORE</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 d-flex justify-content-center align-items-center flex-column">
                                <h2 style="font-weight:bold;color:#4672c4;font-size:30px;">Integrate <span style="color:inherit;border-bottom:10px solid #D50000;">our API</span></h2>
                                <div class="row w-100">
                                    <div class="col-lg-12 w-100">
                                        <p class="d-lg-block d-none mt-3" style="text-align:center;">
                                            Are you a developer building the next Fintech app? Integrate our well-documented API that lets you<br/>build your own payment platform and earn from serving hundreds of thousands of customers.<br/> However huge or complex your imagination, you can build it with kenspay API.
                                        </p>
                                        <p class="d-lg-none d-block mt-3" style="text-align:left;">
                                            Are you a developer building the next Fintech app? Integrate our well-documented API that lets you<br/>build your own payment platform and earn from serving hundreds of thousands of customers.<br/> However huge or complex your imagination, you can build it with kenspay API.
                                        </p>
                                    </div>
                                </div>
                                <div class="row w-100 mt-3 d-flex justify-content-center align-items-center">
                                    <div class="col-lg-6 text-lg-left text-center">
                                        <div class="row mb-3">
                                            <div class="col-lg-12 mt-3">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-md-4 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/icon.png') }}') no-repeat center;height:100px;"></div>
                                                    <div class="col-md-12 d-lg-none d-block" style="background:url('{{ asset('frontend1/images/icon.png') }}') no-repeat left;height:100px;"></div>
                                                    <div class="col-md-8 text-left">
                                                        <h2 style="font-weight:bold;color:blue;font-size:18px;">Concise API Documentation</h2>
                                                        <p class="mt-3" style="font-size:14px;">
                                                            Developers love our stand-out API documentation simply because of its well-defined articulation and<br/>down-to-earth integration process.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-md-4 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/icon2.png') }}') no-repeat center;height:100px;"></div>
                                                    <div class="col-md-12 d-lg-none d-block" style="background:url('{{ asset('frontend1/images/icon2.png') }}') no-repeat left;height:100px;"></div>
                                                    <div class="col-md-8 text-left">
                                                        <h2 style="font-weight:bold;color:#D50000;font-size:18px;">Awesome Tech Support</h2>
                                                        <p class="mt-3" style="font-size:14px;">
                                                            Our tech team is always on stand-by to assist you with any technical difficulties encountered during<br/>integration or at any time. Don’t break a sweat, rely on our expertise.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-md-4 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/icon3.png') }}') no-repeat center;height:100px;"></div>
                                                    <div class="col-md-12 d-lg-none d-block" style="background:url('{{ asset('frontend1/images/icon3.png') }}') no-repeat left;height:100px;"></div>
                                                    <div class="col-md-8 text-left">
                                                        <h2 style="font-weight:bold;color:purple;font-size:18px;">Service Uptime</h2>
                                                        <p class="mt-3" style="font-size:14px;">
                                                            Services on kenspay.com.ng run seamlessly. Our experts and partners<br/> are always working to improve service delivery so as to ensure there are no delays<br/> in finalising transactions.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a role="button" href="https://www.kenspay.com.ng/documentation" class="btn" style="background-image: linear-gradient(#F0B34C, #D48122);color:#fff;border-radius:10px;padding-top:12px;padding-bottom:12px;cursor: pointer;">API DOCUMENTATION</a>
                                    </div>
                                    <div class="col-lg-6 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/homepage3.png') }}') no-repeat center;height:400px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 d-flex justify-content-center align-items-center flex-column">
                                <h2 style="font-weight:bold;color:#4672c4;font-size:30px;">Why <span style="color:inherit;border-bottom:10px solid #D50000;">kenspay</span></h2>
                                <div class="row w-100">
                                    <div class="col-lg-12 w-100">
                                        <p class="mt-3 d-lg-block d-none" style="text-align:center;">
                                            {{-- kenspay.com.ng is Nigeria’s top payment platform providing fast, easy online payment solution for millions of<br/>people. We are impacting lives by ensuring payments for day-to-day services you enjoy are<br/>stress-free. With kenspay.com.ng, you can perform quick transactions anytime and anywhere using any device. --}}
                                            Kenspay is among the most trusted, licensed Services in Nigeria <br>
Headquarter in Lagos, Kenspay Technology is licensed, bonded and regularly audited. <br>
 Kenspay Technology is a Registered companies with Co-operate affair Commision of Nigeria (CAC). <br>
 With kenspay.com.ng, you can perform quick transactions anytime and anywhere using any device.
                                        </p>
                                        <p class="mt-3 d-lg-none d-block" style="text-align:left;">
                                            {{-- kenspay.com.ng is Nigeria’s top payment platform providing fast, easy online payment solution for millions of<br/>people. We are impacting lives by ensuring payments for day-to-day services you enjoy are<br/>stress-free. With kenspay.com.ng, you can perform quick transactions anytime and anywhere using any device. --}}
                                            Kenspay is among the most trusted, licensed Services in Nigeria <br>
                                            Headquarter in Lagos, Kenspay Technology is licensed, bonded and regularly audited. <br>
                                             Kenspay Technology is a Registered companies with Co-operate affair Commision of Nigeria (CAC). <br>
                                             With kenspay.com.ng, you can perform quick transactions anytime and anywhere using any device.
                                        </p>
                                    </div>
                                </div>
                                <div class="row w-100 mt-3 d-flex justify-content-center align-items-center">
                                    <div class="col-lg-6 d-lg-block d-none" style="background:url('{{ asset('frontend1/images/homepage4.png') }}') no-repeat center;height:400px;"></div>
                                    <div class="col-md-12 d-lg-none d-block" style="background:url('{{ asset('frontend1/images/homepage4.png') }}') no-repeat center;background-size:400px 250px;height:250px;">
                                    </div>
                                    <div class="col-lg-6 text-lg-left text-center">
                                        <div class="row">
                                            <div class="col-lg-12 mt-3 text-left">
                                                <i class="fas fa-headphones" style="font-size:30px;color:#D50000;"></i>
                                                <div class="mt-2">
                                                    <h2 style="font-weight:bold;color:#4672c4;font-size:18px;">Excellent Customer Support</h2>
                                                    <p class="mt-2" style="font-size:14px;">
                                                        Our well trained customer support agents are always available 24/7 to help you resolve any issues. We provide you with multiple ways to reach us and get fast help.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3 text-left">
                                                <i style="font-size:30px;color:#D50000;" class="fas fa-fighter-jet"></i>
                                                <div class="mt-2">
                                                    <h2 style="font-weight:bold;color:#4672c4;font-size:18px;">Fast Service Delivery</h2>
                                                    <p class="mt-2" style="font-size:14px;">
                                                        Enjoy prompt delivery of services purchased through kenspay.com.ng. Our promise to you is to deliver value for every transaction made on-time, every time.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3 text-left">
                                                <i style="font-size:30px;color:#D50000;" class="fas fa-shield-alt"></i>
                                                <div class="mt-2">
                                                    <h2 style="font-weight:bold;color:#4672c4;font-size:18px;">Safe, Secured Payment</h2>
                                                    <p class="mt-2" style="font-size:14px;">
                                                        Payment on kenspay.com.ng is fast and 100% secured. Enjoy seamless payment processes with zero glitches. Pay with wallet, bank transfer or card.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <a role="button" href="https://www.kenspay.com.ng/about" class="btn mt-3" style="background-image: linear-gradient(#F0B34C, #D48122);color:#fff;border-radius:10px;padding-top:12px;padding-bottom:12px;">DISCOVER MORE</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
            </div>
                                </div>
                    {{-- <button id="website-rating-btn" data-toggle="modal" data-target="#website-rating" class="btn"
                style="padding: 4px 10px;background-image: linear-gradient(#4672c4,#4672c4);color:#fff;position:fixed;top:50%;right:0;border:0;border-bottom-right-radius:0;border-top-right-radius:0;min-width:unset;"><img
                    width="25px" height="25px"
                    src="{{ asset('frontend1/images/star.png') }}" /></button> --}}
            </div>
    <div class="footer-bar mt-5 mb-4">
        <div class="container">
            <div class="row">
                <div style="color:#4672c4"
                    class="col-lg-3 col-6 mb-3 offset-lg-1 offset-0 d-flex justify-content-start align-items-start flex-column">
                    <h6 style="color:#4672c4;font-weight:bold;">Earn with kenspay.com.ng
                    </h6>
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        {{-- <a style="color:#4672c4" href="https://www.kenspay.com.ng/agent">Become an Agent</a> --}}
                        {{-- <a style="color:#4672c4" href="https://www.kenspay.com.ng/earnings">Start earning</a> --}}
                        <a style="color:#4672c4" href="https://kenspay.com.ng/documentation">Integrate our API</a>
                        {{-- <a style="color:#4672c4" href="https://www.kenspay.com.ng/agent-academy">Agent Academy</a> --}}
                        {{-- <a style="color:#4672c4" href="https://www.kenspay.com.ng/partners">Partner with Us</a> --}}
                        <a style="color:#4672c4" href="terms-and-conditions">Terms and Conditions</a>
                        <a style="color:#4672c4" href="privacy-policy">Privacy Policy</a>
                    </div>
                </div>

                {{-- <div style="color:#4672c4"
                    class="col-lg-2 col-6 mb-3 d-flex justify-content-start align-items-start flex-column">
                    <h6 style="color:#4672c4;font-weight:bold;">About</h6>
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/about">About us</a>
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/contact">Contact us</a>
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/help">Help</a>
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/faqs">FAQs</a>
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/blog" target="_blank">Blog</a>
                        <a style="color:#4672c4" href="https://www.kenspay.com.ng/developers">Developers</a>
                    </div>
                </div> --}}

                <div class="col-lg-2 mb-3 offset-lg-1 col-12 d-flex justify-content-start align-items-start flex-column"
                    style="color:#4672c4">
                    <div class="shadow p-lg-0 p-3 remove-shadow hidden-footer-div" style="width:98%;">
                        <button class="btn btn-sm d-lg-none d-inline hidden-footer-btn"
                            style="background-image: linear-gradient(to right, #4672c4, #195B7e);min-width:unset;padding:7px 10px;">+</button>
                        <span style="color:#4672c4;font-weight:bold;">Contact us</span>
                        <div class="w-100 d-lg-block d-none mt-2 hidden-footer">
                            <div class="d-flex flex-column justify-content-center align-items-start">
                                <a href="tel:08126216200" style="color:#4672c4">08126216200</a>
                                <a style="color:#4672c4" href="mailto:support@kenspay.com.ng">support@kenspay.com.ng</a>
                                {{-- <span style="color:#4672c4">21A Muyibat Oyefusi Crescent,<br />Omole Phase One,
                                    Ikeja,<br /> Lagos, Nigeria.</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-3 offset-lg-1 col-12" style="color:#4672c4">
                    <div class="row">
                        <div class="col-12">
                            <div class="shadow p-lg-0 p-3 remove-shadow hidden-footer-div" style="width:98%;">
                                <button class="btn btn-sm d-lg-none d-inline hidden-footer-btn"
                                    style="background-image: linear-gradient(to right, #4672c4, #195B7e);min-width:unset;padding:7px 10px;">+</button>
                                <span style="color:#4672c4;font-weight:bold;">Follow us on Social Media</span>
                                <div class="w-100 d-lg-block d-none mt-2 hidden-footer">
                                    <a class="mr-1" href="https://www.facebook.com/kenspay1" target="_blank"
                                        style="color:#4672c4"><i style="font-size:20px;"
                                            class="fab fa-facebook-f"></i></a>
                                    {{-- <a class="mr-1" href="https://www.instagram.com/kenspay" target="_blank"
                                        style="color:#4672c4"><i style="font-size:20px;"
                                            class="fab fa-instagram"></i></a>
                                    <a class="mr-1" href="https://www.twitter.com/kenspay" target="_blank"
                                        style="color:#4672c4"><i style="font-size:20px;"
                                            class="fab fa-twitter"></i></a> --}}
                                    <a class="mr-1" href="https://www.youtube.com/@kenspay" target="_blank"
                                        style="color:#4672c4"><i style="font-size:20px;"
                                            class="fab fa-youtube"></i></a><br />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="shadow p-lg-0 p-3 remove-shadow hidden-footer-div" style="width:98%;">
                                <button class="btn btn-sm d-lg-none d-inline hidden-footer-btn"
                                    style="background-image: linear-gradient(to right, #4672c4, #195B7e);min-width:unset;padding:7px 10px;">+</button>
                                <span style="color:#4672c4;font-weight:bold;">Download our Apps</span>
                                <div class="w-100 d-lg-block d-none hidden-footer">
                                    {{-- <a class="mr-1"
                                        href="https://apps.apple.com/us/app/kenspay-vtu-bills-payment/id1557796281"
                                        target="_blank" style="color:#4672c4">
                                        <img style="max-width:60px;max-height:80px;"
                                            src="{{ asset('frontend1/images/app_store.png') }}" />
                                    </a> --}}
                                    <a class="mr-1"
                                        href="https://play.google.com/store/apps/details?id=app.kenspay.com.ng"
                                        target="_blank" style="color:#4672c4">
                                        <img style="max-width:60px;max-height:80px;"
                                            src="{{ asset('frontend1/images/play_store.png') }}" />
                                    </a>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center align-items-center">
                    <span style="color:#D50000;font-size:12px;">© 2023
                        kenspay.com.ng</span>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-bar -->
    <div class="modal fade" id="platform-notification-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-sm">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <h4 class="popup-title" style="max-width: 95%;">
                            <span class="d-block"
                                style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;"
                                id="platform-notification-modal-subject"></span>
                            <span class="d-block"
                                style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;"
                                id="platform-notification-modal-date"></span>
                        </h4>
                        <div id="platform-notification-modal-flag"></div>
                    </div>
                    <p id="platform-notification-modal-content">
                    </p>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <div class="modal fade" id="platform-notification-modal-display" data-notification-id="" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <h4 class="popup-title" style="max-width: 95%;">
                            <span class="d-block"
                                style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;"
                                id="platform-notification-modal-display-subject"></span>
                            <span class="d-block"
                                style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;"
                                id="platform-notification-modal-display-date"></span>
                        </h4>
                        <div id="platform-notification-modal-display-flag"></div>
                    </div>
                    <p id="platform-notification-modal-display-content" align="center">
                    </p>
                    <div class="w-100 d-flex justify-content-end align-items-center">
                        <button class="btn mr-2" data-dismiss="modal"
                            style="min-width:unset;padding:0 5px;border:0;color:#333;background-color:#e8e8e8;">I have
                            read this</button>
                        <a role="button" id="single-platform-display-modal-btn" href=""
                            class="btn noty-view-btn align-self-end"
                            style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#4672c4, #195B7e);">view</a>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <div class="modal fade" id="website-rating" tabindex="-1">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title text-center mb-2">
                        Kindly Rate Our New Look
                    </h4>
                    <form method="post" action="" id="rate-form">
                        <input type="hidden" name="expression" id="expression" />
                        <div class="input-item input-with-label text-center">
                            <label class="input-item-label ucap p-2 mr-1 mb-0 exp-label"
                                style="font-size:50px;cursor:pointer;">
                                <input style="visibility: hidden;" value="unlike" type="radio"
                                    name="expression" />
                                &#x1f44e;<span style="color:#333;font-size:14px;">Unlike</span>
                            </label>
                            <label class="input-item-label ucap p-2 mr-1 mb-0 exp-label"
                                style="font-size:50px;cursor:pointer;">
                                <input style="visibility: hidden;" value="like" type="radio"
                                    name="expression" />
                                &#x1F44D;<span style="color:#333;font-size:14px;">Like</span>
                            </label>
                            <label class="input-item-label ucap p-2 mb-0 exp-label"
                                style="font-size:50px;color:#D50000;cursor:pointer;">
                                <input style="visibility: hidden;" value="love" type="radio"
                                    name="expression" />
                                &#x2764;<span style="color:#333;font-size:14px;">Love</span>
                            </label>
                        </div>
                        <div class="input-item input-with-label">
                            <label class="input-item-label ucap text-exlight">Comment</label>
                            <textarea class="input-bordered" placeholder="Enter Comment..." name="comment"></textarea>
                        </div>
                        <button type="submit" id="submit-rate" class="btn"
                            style="min-width:unset;background-image: linear-gradient(#4672c4,#4672c4);color:#fff;">Submit</button>
                    </form>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <div class="modal fade" id="messaging-platform" data-notification-id="" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                                            <div class="w-100 justify-content-center align-items-center">
                            <h4 align="center" style="color:#4672c4">
                                Oops, you are not logged in.<br><br>
                        </div>
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <a href="https://www.kenspay.com.ng/login#buy-form" class="btn btn-default"
                                style="background-color:#4672c4;min-width: 150px;">Login</a>
                            &nbsp; <b>&nbsp;</b> &nbsp;
                            <a href="https://www.kenspay.com.ng/register#buy-form" class="btn btn-default"
                                style="border-color:#4672c4;color:#4672c4;min-width: 150px;line-height: 1.1;">Sign
                                Up</a>
                        </div>
                                    </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <div class="modal fade" id="show-processing-modal" tabindex="-1" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <div class="popup-body">
                    <div style="display: flex; flex-flow:column; align-items:center; justify-content:center">
                        <div class="lds-ripple">
                            <div></div>
                            <div></div>
                        </div>
                        <p>Messaging Sub-account creation in progress</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <div class="modal fade" id="show-account-switch-modal" tabindex="-1" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <div class="popup-body">
                    <div style="display: flex; flex-flow:column; align-items:center; justify-content:center">
                        <h4 style="font-weight: bolder;">Messaging Sub-account created successfully</h4>
                        <div class="lds-ripple">
                            <div></div>
                            <div></div>
                        </div>
                        <p>Redirecting to your newly created Sub-account...</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

    <!-- JavaScript (include all script here) -->
    <script src="{{ asset('frontend1/js/script104.js') }}"></script>
    <script src="{{ asset('frontend1/js/jquery.pinlogin.js') }}"></script>
    <script>
        $(document).ready(function() {
            var oldPosTop = 0;
            var oldBarHeight = 0;
            setInterval(() => {
                if ($(window).width() < 990) {
                    var pos = $("#blue-top-bar").offset();
                    var top = Math.ceil($("#blue-top-bar").outerHeight(true));
                    if (pos.top == oldPosTop && oldBarHeight == top) {} else {
                        oldPosTop = pos.top;
                        oldBarHeight = top;
                        $("#second-bar").css({
                            top: Math.ceil(pos.top - $(document).scrollTop() + top)
                        });
                    }
                } else {
                    $("#second-bar").css({
                        top: "0px"
                    });
                }
            }, 100);
        });
    </script>
    <script type="text/javascript">
        const optionVarsx = [{"id":1,"prods":[{"name":"Airtel Airtime VTU","url":"https:\/\/www.kenspay.com.ng\/airtel-airtime"},{"name":"MTN Airtime VTU","url":"https:\/\/www.kenspay.com.ng\/mtn-airtime"},{"name":"GLO Airtime VTU","url":"https:\/\/www.kenspay.com.ng\/glo-airtime"},{"name":"9mobile Airtime VTU","url":"https:\/\/www.kenspay.com.ng\/9mobile-airtime"},{"name":"9Mobile Airtime Pin","url":"https:\/\/www.kenspay.com.ng\/9mobile-pin"},{"name":"Smile Network Payment","url":"https:\/\/www.kenspay.com.ng\/smile-airtime"},{"name":"International Airtime","url":"https:\/\/www.kenspay.com.ng\/foreign-airtime"}]},{"id":3,"prods":[{"name":"Airtel Data","url":"https:\/\/www.kenspay.com.ng\/airtel-data"},{"name":"MTN Data","url":"https:\/\/www.kenspay.com.ng\/mtn-data"},{"name":"GLO Data","url":"https:\/\/www.kenspay.com.ng\/glo-data"},{"name":"9mobile Data","url":"https:\/\/www.kenspay.com.ng\/9mobile-data"},{"name":"Smile Payment","url":"https:\/\/www.kenspay.com.ng\/smile"},{"name":"Spectranet","url":"https:\/\/www.kenspay.com.ng\/spectranet"},{"name":"GLO Data (SME)","url":"https:\/\/www.kenspay.com.ng\/glo-sme-data"}]},{"id":8,"prods":[{"name":"WAEC Result Checker PIN","url":"https:\/\/www.kenspay.com.ng\/waec-result"},{"name":"WAEC Registration PIN","url":"https:\/\/www.kenspay.com.ng\/waec-registration"},{"name":"JAMB PIN VENDING (UTME & Direct Entry)","url":"https:\/\/www.kenspay.com.ng\/jamb"}]},{"id":7,"prods":[{"name":"Ikeja Electric Payment - IKEDC","url":"https:\/\/www.kenspay.com.ng\/ikeja-electric"},{"name":"Eko Electric Payment - EKEDC","url":"https:\/\/www.kenspay.com.ng\/eko-electric"},{"name":"Abuja Electricity Distribution Company- AEDC","url":"https:\/\/www.kenspay.com.ng\/abuja-electric"},{"name":"KEDCO - Kano Electric","url":"https:\/\/www.kenspay.com.ng\/kano-electric"},{"name":"PHED - Port Harcourt Electric","url":"https:\/\/www.kenspay.com.ng\/portharcourt-electric"},{"name":"Jos Electric - JED","url":"https:\/\/www.kenspay.com.ng\/jos-electric"},{"name":"Kaduna Electric - KAEDCO","url":"https:\/\/www.kenspay.com.ng\/kaduna-electric"},{"name":"Enugu Electric - EEDC","url":"https:\/\/www.kenspay.com.ng\/enugu-electric"},{"name":"IBEDC - Ibadan Electricity Distribution Company","url":"https:\/\/www.kenspay.com.ng\/ibedc"},{"name":"Benin Electricity - BEDC","url":"https:\/\/www.kenspay.com.ng\/benin-electric"}]},{"id":13,"prods":[]},{"id":15,"prods":[{"name":"Third Party Motor Insurance - Universal Insurance","url":"https:\/\/www.kenspay.com.ng\/car-insurance"},{"name":"Health Insurance - HMO  ","url":"https:\/\/www.kenspay.com.ng\/health-insurance-rhl"},{"name":"Personal Accident Insurance","url":"https:\/\/www.kenspay.com.ng\/personal-accident-insurance-fbn"},{"name":"Home Cover Insurance","url":"https:\/\/www.kenspay.com.ng\/home-cover-insurance-fbn"}]},{"id":14,"prods":[{"name":"SMSclone.com","url":"https:\/\/www.kenspay.com.ng\/smsclone"}]},{"id":6,"prods":[{"name":"DSTV Subscription","url":"https:\/\/www.kenspay.com.ng\/dstv"},{"name":"Gotv Payment","url":"https:\/\/www.kenspay.com.ng\/gotv"},{"name":"Startimes Subscription","url":"https:\/\/www.kenspay.com.ng\/startimes"},{"name":"ShowMax","url":"https:\/\/www.kenspay.com.ng\/showmax"}]}];
        $('.exp-label').on('click', function(e) {
            $('.exp-label').removeClass('shadow');
            if ($(e.currentTarget).hasClass('exp-label')) {
                if (!$(e.currentTarget).hasClass('shadow')) {
                    $(e.currentTarget).addClass('shadow');
                }
            }
        });
        // var arr = ["https://www.kenspay.com.ng/resources/ads/hunt.jpg","https://www.kenspay.com.ng/resources/ads/hunt1.jpg"];
        // var adCenterImageIndex = 0;
        // $(document).ready(function(e) {
        //     setInterval(function() {
        //         if(adCenterImageIndex == 1) {
        //             adCenterImageIndex = 0;
        //             $('.ad-center').css({"backgroundImage":"linear-gradient(to right,  #4672c4, #195B7e)"});
        //             $('.ad-center img').attr("src",arr[0]);
        //             console.log(0);
        //         }else{
        //             adCenterImageIndex += 1;
        //             $('.ad-center').css({"backgroundImage":'url("https://www.kenspay.com.ng/resources/ads/ad_bg.png")'});
        //             $('.ad-center img').attr("src",arr[1]);
        //         }
        //     },5000);
        // });

        $('#submit-rate').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: "https://www.kenspay.com.ng/rate-our-website",
                method: "POST",
                data: $('#rate-form').serialize(),
                success: function(data) {
                    $('#website-rating').modal('hide');
                    if (data) {
                        $('#website-rating-btn').hide();
                        $('#rate').hide();
                        $('#rated').css('display', 'block');
                    }
                }
            });
        });
        $("#master-create-sms-acct-btn-trigger").on('click', function(e) {
            e.preventDefault();
            $("#master-create-sms-acct-btn").trigger("click");
        });
        $("#mobile-master-create-sms-acct-btn-trigger").on('click', function(e) {
            e.preventDefault();
            $("#mobile-master-create-sms-acct-btn").trigger("click");
        });
        $('.create-sub-acct-messaging').on('click', function(e) {
            e.preventDefault();
            $('#show-processing-modal').modal('show');
            $(this).closest('form').submit();
        });
        /* {BEGIN IFRAME CODE} */

        $('.clickable').on('click', function() {
            let self = $(this);
            let curr = self.data('current');
            if (curr) {
                self.parent('div').addClass('adjusted');
                self.addClass(curr);
                $('.floating-irs-wrapper3').find('.header').removeClass('hide');
                $('.floating-irs-wrapper3').find('.content2').removeClass('hide');
                self.next('div').removeClass('hide').addClass(self.data('next'));
            } else {
                const revpanel = self.closest('.resolution-panel2');
                revpanel.removeClass('smokey-white').find('.header').addClass('adjusted-hd');
                self.parent('div').addClass('hide');
                revpanel.find('.content2').css('padding', '0');
                revpanel.find('.irs-content2.main-2').removeClass('hide');
                let iframeUrl =
                    "https://www.kenspay.com.ng/widget-irs?segment=home-page&transactionId=";
                revpanel.find('.irs-content2.main-2').find('#irs-iframe').attr('src', iframeUrl);
            }
        });
        /* let content = $('.floating-irs-wrapper2 .resolution-panel2 .content2');
        $('.floating-irs-wrapper2 .resolution-panel2.smokey-white').on('click', '.header', function() {
            if (content.hasClass('hide')) content.removeClass('hide');
            else content.addClass('hide');
        }); */

        $('.messaging-login-master-btn').on('click', function(e) {
            e.preventDefault();
            let self = $(this);
            var master_id = null;
            try {
                master_id = $(this).attr('data-master-id');
            } catch (err) {}
            let data = {
                login_id: $('#login_id-input-master-' + $(self).attr('data-message-id')).val(),
                extcid: $('#extcid-input-master-' + $(self).attr('data-message-id')).val()
            }
            let url = "https://www.kenspay.com.ng/messaging/login"
            doAjaxServicesx(url, 'POST', data, function() {
                if (master_id == null)
                    self.text('processing...');
            }, function(result) {
                if (result.error) window.location.reload();
                if (master_id == null)
                    self.text('View Account');
                $('#messaging-login-master-form-' + $(self).attr('data-message-id') + ' input[name="key"]')
                    .val(result.key);
                $('#messaging-login-master-form-' + $(self).attr('data-message-id')).submit();
            });
        });

        function doAjaxServicesx(url, method, data = null, bs = null, done = null) {
            $.ajax({
                url: url,
                method: method,
                data: data,
                beforeSend: function() {
                    if (bs) bs();
                },
                success: function(e) {
                    if (e.status != "" && e.status != undefined && e.status == 'success') {
                        if (done) done(e);
                    } else {
                        if (done) done(e);
                    }
                }
            });
        }

        // NOTIFICATIONS START HERE
        $('.page-content').on('click', function(e) {
            if ($('#notification-holder').is(':visible')) {
                $('#notification-holder').hide();
            }
        });
        $('#notification-button').on('click', function(e) {
            e.preventDefault();
            if ($('#notification-holder').is(':visible')) {
                $('#notification-holder').hide();
            } else {
                $('#notification-holder').show();
            }
        });
        $("#authentication-button").on('click', function(e) {
            e.preventDefault();
            if ($(e.target).hasClass("authentication-holder-link")) {
                window.location = $(e.target).attr('href');
            } else {
                if ($('#authentication-holder').is(':visible')) {
                    $('#authentication-holder').hide();
                } else {
                    $('#authentication-holder').show();
                }
            }
        });
        $('li').on('click', '.display-all-platform-notification', function(e) {
            e.preventDefault();
            window.location = $(e.target).attr('href');
        });

        function readPlatformNotification(id) {
            $.ajax({
                url: "https://www.kenspay.com.ng/platform-notification-read/" + id,
                method: "GET",
                success: function(data) {
                    if (data) {
                        var data = JSON.parse(data);
                        // $('#noty-holder-div').html("");
                        $('#notification-spinner').html(data.totalCount);
                        $('#notification-spinner').html(data.totalCount);
                        if (data.data.length > 0) {
                            data.data.forEach((element) => {
                                var html =
                                    '<div class="w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view" data-id="' +
                                    element.id + '" data-subject="' + element.subject +
                                    '" data-date="' + element.date + '" data-flag="' + element.flag +
                                    '" data-content="' + btoa(element.content) +
                                    '" style="border-bottom: 1px solid #e6effb;">';
                                html +=
                                    '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                    element.subject +
                                    '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                    element.date + '</span></h4>' + element.flag + '</div>';
                                html +=
                                    '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                    element.preamble +
                                    '</span></div><a role="button" href="https://www.kenspay.com.ng/single-platform-display' +
                                    "/" + element.id +
                                    '" class="btn noty-view-btn btn-sm align-self-end single-platform-display" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#4672c4, #195B7e);cursor:pointer;">view</a></div>';
                                $('#noty-holder-div').append(html);
                            });
                            $('#notification-counter').text(data.totalCount > 99 ? "99+" : data.totalCount);
                            if (data.totalCount == 0) {
                                $('#notification-spinner').html(data.totalCount);
                                // if(!document.getElementById('notification-counter').classList.contains('d-none')) {
                                //     $('#notification-counter').addClass('d-none');
                                // }
                            }

                        } else if (data.totalCount == 1) {
                            var html =
                                "<div class='w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view' data-id='" +
                                data.data.id + "' data-subject='" + data.data.subject + "' data-date='" + data
                                .data.date + "' data-flag='" + data.data.flag + "' data-content='" + btoa(data
                                    .data.content) + "' style='border-bottom: 1px solid #e6effb;'>";
                            html +=
                                '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                data.data.subject +
                                '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                data.data.date + '</span></h4>' + data.data.flag + '</div>';
                            html +=
                                '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                data.data.preamble +
                                '</span></div><a role="button" href="https://www.kenspay.com.ng/single-platform-display' +
                                "/" + element.id +
                                '" class="btn noty-view-btn btn-sm align-self-end single-platform-display" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#4672c4, #195B7e);cursor:pointer;">view</a></div>';
                            $('#noty-holder-div').append(html);
                            $('#notification-counter').text(data.totalCount > 99 ? "99+" : data.totalCount);
                            if (data.totalCount == 0) {
                                if (!document.getElementById('notification-counter').classList.contains(
                                        'd-none')) {
                                    $('#notification-counter').addClass('d-none');
                                }
                            }
                            $('#noty-holder-div').append(
                                '<a href="https://www.kenspay.com.ng/display-all-platform-notification" class="btn btn-block display-all-platform-notification" style="background-image:linear-gradient(#4672c4, #195B7e);color:#fff;">View All</a>'
                            );
                        } else {
                            if (data.totalCount == 0) {
                                if (!document.getElementById('notification-counter').classList.contains(
                                        'd-none')) {
                                    $('#notification-counter').addClass('d-none');
                                }
                            }
                            $('#noty-holder-div').html("<p class='mt-2 text-center'>No Notifications.</p>");
                        }
                    }
                }
            });
        }

                    $(document).ready(function() {
                setTimeout(function() {
                    $.ajax({
                        url: "https://www.kenspay.com.ng/ajax-platform-notification",
                        method: "GET",
                        success: function(data) {
                            data = JSON.parse(data);
                            $('#notification-spinner').html(data.totalCount);
                            if (data.totalCount > 0) {
                                ///build notification
                                data.data.forEach((element) => {
                                    var html =
                                        '<div class="w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view" data-id="' +
                                        element.id + '" data-subject="' + element
                                        .subject + '" data-date="' + element.date +
                                        '" data-flag="' + element.flag +
                                        '" data-content="' + btoa(element.content) +
                                        '" style="border-bottom: 1px solid #e6effb;">';
                                    html +=
                                        '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                        element.subject +
                                        '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                        element.date + '</span></h4>' + element.flag +
                                        '</div>';
                                    html +=
                                        '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                        element.preamble +
                                        '</span></div><a role="button" id="single-platform-display/' +
                                        element.id +
                                        '" href="https://www.kenspay.com.ng/single-platform-display' +
                                        "/" + element.id +
                                        '" class="btn noty-view-btn btn-sm align-self-end" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#4672c4, #195B7e);cursor:pointer;">view</a></div>';
                                    $('#noty-holder-div').append(html);
                                });
                            } else if (data.totalCount == 1) {
                                var html =
                                    "<div class='w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view' data-id='" +
                                    data.data.id + "' data-subject='" + data.data.subject +
                                    "' data-date='" + data.data.date + "' data-flag='" + data
                                    .data.flag + "' data-content='" + btoa(data.data.content) +
                                    "' style='border-bottom: 1px solid #e6effb;'>";
                                html +=
                                    '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                    data.data.subject +
                                    '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                    data.data.date + '</span></h4>' + data.data.flag + '</div>';
                                html +=
                                    '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                    data.data.preamble +
                                    '</span></div><a role="button" href="https://www.kenspay.com.ng/single-platform-display' +
                                    "/" + element.id +
                                    '" class="btn noty-view-btn btn-sm align-self-end single-platform-display" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#4672c4, #195B7e);cursor:pointer;">view</a></div>';
                                $('#noty-holder-div').append(html);
                                $('#notification-counter').text(data.totalCount > 99 ? "99+" :
                                    data.totalCount);
                                if (data.totalCount == 0) {
                                    if (!document.getElementById('notification-counter')
                                        .classList.contains('d-none')) {
                                        $('#notification-counter').addClass('d-none');
                                    }
                                } else {
                                    if (document.getElementById('notification-counter')
                                        .classList.contains('d-none')) {
                                        $('#notification-counter').removeClass('d-none');
                                    }
                                }
                            } else {
                                if (data.totalCount == 0) {
                                    if (!document.getElementById('notification-counter')
                                        .classList.contains('d-none')) {
                                        $('#notification-counter').addClass('d-none');
                                    }
                                }
                                $('#noty-holder-div').html(
                                    "<p class='mt-2 text-center'>No Notifications.</p>");
                            }
                        }

                        //end build notifcation

                    });
                }, 10);
                setTimeout(function() {
                    $.ajax({
                        url: "https://www.kenspay.com.ng/ajax-get-modal-display-platform-notification",
                        method: "GET",
                        success: function(data) {

                            data = JSON.parse(data);

                            if (data.totalCount > 0) {
                                $('#platform-notification-modal-display-subject').html(data
                                    .notification.subject);
                                $('#platform-notification-modal-display-date').html(data
                                    .notification.date);
                                $('#platform-notification-modal-display-flag').html(data
                                    .notification.flag);
                                $('#platform-notification-modal-display-content').html(data
                                    .notification.content);
                                $('#platform-notification-modal-display').attr(
                                    'data-notification-id', data.notification.id);
                                $('#single-platform-display-modal-btn').attr("href",
                                    "https://www.kenspay.com.ng/single-platform-display" + "/" + data
                                    .notification.id);
                                $('#platform-notification-modal-display').modal('show');
                            }
                        }
                    });
                }, 8000);
                $('#platform-notification-modal-display').on('hidden.bs.modal', function(e) {
                    readPlatformNotification($(e.target).attr('data-notification-id'));
                });
            });
                $('#noty-holder-div').on('click', '.platform-notification-view', function(e) {
            e.preventDefault();
            var e1 = e.currentTarget;
            if ($(e.target).hasClass('single-platform-display')) {
                window.location = $(e.target).attr('href');

            } else {
                var id = $(e1).attr('data-id');
                var notificationCounter = $('#notification-counter').text();
                notificationCounter = parseInt(notificationCounter);
                var subject = $(e1).attr('data-subject');
                var content = $(e1).attr('data-content');
                var notyDate = $(e1).attr('data-date');
                var flag = $(e1).attr('data-flag');
                $('#platform-notification-modal-subject').text(subject);
                $('#platform-notification-modal-date').text(notyDate);
                $('#platform-notification-modal-flag').html(flag);
                $('#platform-notification-modal-content').html(atob(content));
                $('#platform-notification-modal').modal('show');
                readPlatformNotification(id);
            }
        });
        $('#platform-notification-modal').on('hidden.bs.modal', function(e) {
            $('#platform-notification-modal-subject').text("");
            $('#platform-notification-modal-date').text("");
            $('#platform-notification-modal-flag').html("");
            $('#platform-notification-modal-content').text("");
        });
        // NOTIFICATIONS END HERE
        const strHt = 97;
        // const stpHt = 65;
        // const strHt = 178;
        const stpHt = 46;
        $('.close-icon').on('click', function(e) {
            e.preventDefault();
            for (var i = 0; i < $('.sidenav').children().length; i++) {
                $($('.sidenav').children()[i]).removeClass('active');
            }
            $('.second-sidenav').css({
                "display": "none"
            });
        });
        $('.hidden-footer-btn').on('click', function(e) {
            if ($(this).next().next().is(':visible')) {
                $(this).next().next().addClass('d-none');
                $(this).html('+');
            } else {
                $(this).next().next().removeClass('d-none');
                $(this).html('-');
            }
        });
        $('.hidden-footer-div').on('click', function(e) {
            if ($(this).find('.hidden-footer').is(':visible')) {
                $(this).find('.hidden-footer').addClass('d-none');
                $(this).find('.hidden-footer-btn').html('+');
            } else {
                $(this).find('.hidden-footer').removeClass('d-none');
                $(this).find('.hidden-footer-btn').html('-');
            }
        });
        if ($('#second-bar').is(':visible')) {
            var scrollTop = $(window).scrollTop();
            var topX = (strHt - scrollTop < stpHt) ? stpHt : strHt - scrollTop;
            $('.sidenav').css('top', topX);
            $('.second-sidenav').css('top', topX);
        } else {
            var topX = stpHt;
            $('.sidenav').css('top', topX);
            $('.second-sidenav').css('top', topX);
        }
        $(window).on('scroll', function() {
            var scrollTop = $(window).scrollTop();
            if ($('#second-bar').is(':visible')) {
                var topX = (strHt - scrollTop < stpHt) ? stpHt : strHt - scrollTop;
            } else {
                var topX = stpHt;
            }
            $('.sidenav').css('top', topX);
            $('.second-sidenav').css('top', topX);
            $('#switchBar').css('height', topX - stpHt);
        });
        // Added JS
        $('.dropdown-side').on('click', function(e) {
            e.preventDefault();
            for (var i = 0; i < $('.sidenav').children().length; i++) {
                $($('.sidenav').children()[i]).removeClass('active');
            }
            $(this).parent().addClass('active');
            var dropdownContent = $('.second-sidenav .nav');
            $(dropdownContent).html('');
            if (this.getAttribute('category') == 'more') {
                var products = [];
            } else if (this.getAttribute('category') == 'bank-transfer') {
                $('.second-sidenav').hide();
                window.location = this.getAttribute('href');
            } else {
                var products = optionVarsx.filter((option) => {
                    return option.id == this.getAttribute('category');
                });
            }
            for (var i = 0; i < products.length; i++) {
                if (products[i]['prods'].length != 0) {
                    products[i]['prods'].map((prods) => {
                        if (prods.url != "https://www.kenspay.com.ng/bank-deposit") {
                            $(dropdownContent).append('<a class="nav-link" href="' + prods.url +
                                '"><span class="word-span">' + prods.name +
                                '</span><span style="font-size:18px;color:#ccc;" class="fa fa-angle-right"></span></a>'
                            );
                        }
                    });
                }
            }
            if (this.getAttribute('category') == 'more') {
                var constrLinkArr = [{"link":"https:\/\/www.kenspay.com.ng\/partners","name":"Partner with us"},{"link":"https:\/\/www.kenspay.com.ng\/contact","name":"Contact"}];
                var educationLink = "https://www.kenspay.com.ng/education";
                var insuranceLink = "https://www.kenspay.com.ng/insurance";
                $(dropdownContent).append('<a class="nav-link" href="' + educationLink +
                    '"><span class="word-span">Education Payment</span><span style="font-size:18px;color:#ccc;" class="fa fa-angle-right"></span></a><a class="nav-link" href="' +
                    insuranceLink +
                    '"><span class="word-span">Buy Insurance</span><span style="font-size:18px;color:#ccc;" class="fa fa-angle-right"></span></a><br/><span style="border-bottom:1px solid #fff;"></span>'
                );
                constrLinkArr.map((lik) => {
                    $(dropdownContent).append('<a class="nav-link" href="' + lik.link +
                        '"><span class="word-span">' + lik.name +
                        '</span><span style="font-size:18px;color:#ccc;" class="fa fa-angle-right"></span></a>'
                    );
                });
            }
            if (dropdownContent.children().length > 0) {
                $('.second-sidenav').show();
            } else {
                $('.second-sidenav').hide();
            }
        });
    </script>
    {{-- jkuio --}}

        <script type="text/javascript">
        var refUrl = document.referrer.replace(/^https?:\/\//, '');
        var p_url = "www.kenspay.com.ng/";
        var park = ;
        $.ajax({
            type: "GET",
            url: "ajax/monitor",
            data: "ref=" + refUrl + "&user=" + park + "&p_url=" + p_url,
            dataType: 'json',
            cache: false,
            beforeSend: function() {},
            success: function(data, textStatus, jQxhr) {
                console.log(data);
            }
        });
    </script>
    <!-- Remark -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1016066596;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

    {{-- <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=""
                src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016066596/?guid=ON&amp;script=0" />
        </div>
    </noscript> --}}
    <!--Start of Tawk.to Script-->

    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d2619f822d70e36c2a51fc8/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>

                {{-- <script type="text/javascript" id="zsiqchat">
            var $zoho = $zoho || {};
            $zoho.salesiq = $zoho.salesiq || {
                widgetcode: "7326e5692ac9a8a03322deef62fbda40832ea8180a227cf11a9e4beafb4071d4",
                values: {},
                ready: function() {}
            };
            var d = document;
            s = d.createElement("script");
            s.type = "text/javascript";
            s.id = "zsiqscript";
            s.defer = true;
            s.src = "https://salesiq.zoho.com/widget";
            t = d.getElementsByTagName("script")[0];
            t.parentNode.insertBefore(s, t);
            $zoho.salesiq.ready = () => {
                $zoho.salesiq.floatbutton.visible('hide');
            }
        </script> --}}
                        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.setExternalUserId(
                "NO TOKEN"
            );
            OneSignal.init({
                appId: "a3f026ee-76fd-4937-b110-5cd054c5f1e2",
                notifyButton: {
                    enable: true,
                    position: 'bottom-left'
                },
                allowLocalhostAsSecureOrigin: true,
            });
            OneSignal.showNativePrompt();
        });
    </script>

    <script>
        let floatingHelp = $('.floating-irs-wrapper3 .resolution-panel2 .content2');
        let checkmindiv = $(".checkmin");

        var today = new Date()
        var curHr = today.getHours()

        if (curHr > 08 && curHr < 24) {
        // console.log('good morning')
          checkmindiv.html("We'll reply to your email in 15 minutes");
        } else {
            // console.log('good evening')
            checkmindiv.html("We'll reply to your email by 8:00am");
        }


        $("#ticket-header").click(function() {
            if (!$("#ticket-content").hasClass("hide")) $('.ticker-widget').css({
                'z-index': '0 !important'
            });
            if (window.innerWidth < 989) {
                $('.ticker-widget').removeClass('ticker-widget-show')
            }
            $("#ticket-content").toggleClass("hide");
            // floatingHelp.addClass('hide');
            hideSupportChannel();

            if (document.querySelector('#zsiqscript')) $zoho.salesiq.floatwindow.visible('hide')
            if (window?.Tawk_API) Tawk_API.minimize();
        });

        $('.clickable-support').click(function() {
            let self = $(this);
            let curr = self.data('current');
            self.parent('div').addClass('adjusted');
            self.addClass(curr);
            $('.floating-irs-wrapper3').find('.header').removeClass('hide');
            $('.floating-irs-wrapper3').find('.content2').removeClass('hide');
            self.next('div').removeClass('hide').addClass(self.data('next'));

            if(!$("#ticket-content").hasClass('hide')) {
                $("#ticket-content").toggleClass("hide");
            }
        });

        $('.floating-irs-wrapper3 .resolution-panel2 .header').click(function() {
            hideSupportChannel();
        });

        function hideSupportChannel() {
            $('.floating-irs-wrapper3').removeClass('adjusted');
            $('.floating-irs-wrapper3 div').removeClass('fadeout');
            $('.floating-irs-wrapper3').find('.header').addClass('hide');
            $('.floating-irs-wrapper3').find('.content2').addClass('hide');
        }

        $('.live-chat').click(function() {
            if (document.querySelector('#zsiqscript')) $zoho.salesiq.floatwindow.visible('show')
            if (window?.Tawk_API) window.Tawk_API.maximize();

            hideSupportChannel();
        });

        $('.send-msg, .send-msg a').click(function(e) {
            e.preventDefault();
            if (window.innerWidth < 989) {
                $('.ticker-widget').addClass('ticker-widget-show')
            }
            // $('.floating-irs-wrapper3 .resolution-panel2 .content2').addClass('hide');
            hideSupportChannel();
            $('#ticket-content').removeClass('hide');
            if (document.querySelector('#zsiqscript')) $zoho.salesiq.floatwindow.visible('hide')
        });

        $('.cookie-policy span').click(function () {
            document.cookie = 'cookie-policy=1; path=/';
            $('.cookie-policy').remove();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

    </body>

</html>
