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
                            srcset="{{ asset('frontend1/images/logo-white.png') }} 2x" alt="logo">
                    </a>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav">
                        {{-- <li class="topbar-nav-item relative d-lg-block d-none">
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
                            </li> --}}
                        {{-- <li class="topbar-nav-item relative d-lg-none d-block"
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
                        </li> --}}
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
                            <a style="color:#fff;cursor: pointer;font-size:24px;"><i class="fas fa-user-circle"
                                    style="cursor: pointer;"></i></a>
                            <div id="authentication-holder">
                                <div class="row">
                                    <div class="col-12">
                                        <ul>
                                            <li class="authentication-holder-link" href="register">
                                                <a class="authentication-holder-link"
                                                    style="line-height: 1.1;margin:0 0;color:#333;"
                                                    href="{{ route('account') }}">Profile</a>
                                            </li>
                                            <li class="authentication-holder-link" href="logout">
                                                <a class="authentication-holder-link"
                                                    style="line-height: 1.1;margin:0 0;color:#333;"
                                                    href="logout">LogOut</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="topbar-nav-item relative d-lg-block d-none">
                            <span class="user-welcome d-none d-lg-inline-block">Welcome!
                                {{ $user->name }}</span>
                            <a class="toggle-tigger user-thumb" href="{{ route('account') }}"><em
                                    class="fas fa-user"></em></a>
                            <div
                                class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status"
                                    style="background:unset;background-image: linear-gradient(to right, #4672c4, #195B7e);padding: 20px 25px;">
                                    <h6 class="user-status-title" style="color:#78a8c2;"><i
                                            class="fas fa-wallet mr-2"></i>Data balance</h6>
                                    <div class="user-status-balance">{{ number_format($user->dataBalance) }}
                                        <small>NGN</small>
                                    </div>

                                    <h6 class="user-status-title" style="color:#78a8c2;"><i
                                            class="fas fa-wallet mr-2"></i>Pin balance</h6>
                                    <div class="user-status-balance">{{ number_format($user->pinBalance) }}
                                        <small>NGN</small>
                                    </div>
                                </div>
                                <ul class="user-links">
                                    <li><a href="{{ route('account') }}" style="color:#173D52;"><i
                                                style="color:#758698;" class="fas fa-id-badge mr-3"></i>My
                                            Profile</a></li>

                                    <li><a href="user" style="color:#173D52;"><i style="color:#758698;"
                                                class="fas fa-th-large mr-3"></i>Dashboard</a></li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="logout" style="color:#D50000;"><i
                                                class="fas fa-sign-out-alt mr-3"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
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
                        <a style="color:inherit;padding:3px;" href="help"
                            class="btn btn-sm btn-outline btn-light mobile-balance">
                            <i class="fas fa-info-circle" style="display:inline-block;top:-4px;"></i>
                            <small
                                style="display:inline-block;text-align:left;font-size:10px;line-height:1.2;">Help/<br>Support</small>
                        </a>
                    </li>
                    {{-- <li class="">
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
                    </li> --}}
                    <li>
                        <a style="color:#173D52;" href="user/credit-wallet"
                            class="btn btn-sm btn-outline btn-light mobile-balance">
                            <i class="fas fa-money-check"></i>
                            <!-- <span>Wallet:</span> -->
                            <strong style="color:#173D52;">
                                ₦ {{ number_format($user->pinBalance) }}
                            </strong>
                        </a>
                    </li>


                    <li>
                        <a style="color:#173D52;" href="user/credit-wallet"
                            class="btn btn-sm btn-outline btn-light mobile-balance">
                            <i class="fas fa-money-check"></i>
                            <!-- <span>Wallet:</span> -->
                            <strong style="color:#173D52;">
                                ₦ {{ number_format($user->dataBalance) }}
                            </strong>
                        </a>
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
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class=""
                                    href="{{ route('pin') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="fas fa-print"></i>
                                    </div>
                                    Print Recharge Card
                                </a>
                            </div>
                            <div category="1" class="mobile-menu-item mobile-menu-item-50">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class=""
                                    href="{{ route('airtime') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="fas fa-mobile-alt"></i>
                                    </div>
                                    Buy phone airtime
                                </a>
                            </div>
                            <div category="3" class="mobile-menu-item mobile-menu-item-50">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class=""
                                    href="{{ route('data') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="fas fa-wifi"></i>
                                    </div>
                                    Buy internet data
                                </a>
                            </div>
                            <div category="6" class="mobile-menu-item mobile-menu-item-50">
                                <a style="font-size:14px;line-height:20px;line-height:20px;color:#fff !important;"
                                    class="" href="{{ route('tv') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="color:#b0e2fb;font-size:20px;" class="fas fa-tv"></i>
                                    </div>
                                    Pay TV subscription
                                </a>
                            </div>
                            <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class=""
                                    href="{{ route('electricity') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="far fa-lightbulb"></i>
                                    </div>
                                    Pay electricity bill
                                </a>
                            </div>
                            <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                <a style="font-size:14px;line-height:20px;color:#fff !important;" class=""
                                    href="{{ route('education') }}">
                                    <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                        <i style="font-size:20px;" class="fas fa-book-open"></i>
                                    </div>
                                    Education Payment
                                </a>
                            </div>
                            {{-- <div category="7" class="mobile-menu-item mobile-menu-item-50">
                                    <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                        class="" href="https://www.kenspay.com.ng/insurance">
                                        <div
                                            style="width:30px;display:flex;justify-content:center;align-items:center;">
                                            <i style="font-size:20px;" class="fab fa-accessible-icon"></i>
                                        </div>
                                        Buy Insurance
                                    </a>
                                </div> --}}
                        </div>
                    </li>

                    <li style="border-top: 1px solid #fff;" category="more" class="has-dropdown mobile-menu-item">
                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                            href="{{ route('transaction') }}">
                            <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                <i style="font-size:20px;" class="fas fa-history"></i>
                            </div>
                            Transaction
                        </a>
                    </li>
                    <li style="border-top: 1px solid #fff;" category="more" class="has-dropdown mobile-menu-item">
                        <a style="font-size:14px;line-height:20px;color:#fff !important;" class="drop-toggle"
                            href="#">
                            <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                <i style="font-size:20px;" class="fas fa-ellipsis-v"></i>
                            </div>
                            More
                        </a>
                        <ul id="more-list" class="navbar-dropdown navbar-dropdown-mobile">
                            <script>
                                var constrLinkArr = [{
                                    "link": "https:\/\/www.kenspay.com.ng\/partners",
                                    "name": "Partner with us"
                                }, {
                                    "link": "https:\/\/www.kenspay.com.ng\/contact",
                                    "name": "Contact"
                                }];
                                constrLinkArr.map((lik) => {
                                    $('#more-list').append('<li><a href="' + lik.link + '">' + lik.name + '</a></li>');
                                });
                            </script>
                        </ul>
                    </li>
                    <li class="semi-mobile-menu-item">
                        <a style="font-size:14px;line-height:20px;color:#fff !important;"
                            href="{{ route('wallet') }}">
                            <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                <i class="fas fa-money-bill" style="font-size:20px;"></i>
                            </div>
                            Fund Wallet
                        </a>
                    </li>

                    {{-- <li class="semi-mobile-menu-item">
                            <a style="font-size:14px;line-height:20px;color:#fff !important;"
                                href="https://www.kenspay.com.ng/agent">
                                <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                    <i class="fas fa-user" style="font-size:20px;"></i>
                                </div>
                                Become an Agent
                            </a>
                        </li> --}}
                    <li class="semi-mobile-menu-item">
                        <a style="font-size:14px;line-height:20px;color:#fff !important;" href="partners">
                            <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                <i class="fas fa-money-check-alt" style="font-size:20px;"></i>
                            </div>
                            Start Earning
                        </a>
                    </li>
                    <li class="semi-mobile-menu-item">
                        <a style="font-size:14px;line-height:20px;color:#fff !important;" href="help">
                            <div style="width:30px;display:flex;justify-content:center;align-items:center;">
                                <i class="fas fa-info-circle" style="font-size:20px;"></i>
                            </div>
                            Help/Support
                        </a>
                    </li>

                    {{-- <li class="has-dropdown page-links-all semi-mobile-menu-item">
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
                        </li> --}}


                    <li class="desktop-menu-item">
                        <a href="{{ route('wallet') }}">
                            <i class="fas fa-money-bill"></i>
                            Fund Wallet
                        </a>
                    </li>

                    <li class="desktop-menu-item">
                        <a href="partners">
                            <i class="fas fa-money-check-alt"></i>
                            Start Earning
                        </a>
                    </li>

                </ul>

                <ul class="navbar-btns desktop-menu-item">
                    <li>
                        <a style="color:#173D52;" href="user/credit-wallet" class="btn btn-sm btn-outline btn-light">
                            <i class="fas fa-money-check"></i>
                            <span>Pin Balance:</span>
                            <strong style="color:#173D52;">
                                ₦ {{ number_format($user->pinBalance) }}
                            </strong>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-btns desktop-menu-item">
                    <li>
                        <a style="color:#173D52;" href="user/credit-wallet" class="btn btn-sm btn-outline btn-light">
                            <i class="fas fa-money-check"></i>
                            <span>Data Balance:</span>
                            <strong style="color:#173D52;">
                                ₦ {{ number_format($user->dataBalance) }}
                            </strong>
                        </a>
                    </li>
                </ul>
            </div><!-- .navbar-innr -->
        </div><!-- .container -->
    </div><!-- .navbar -->
</div><!-- .topbar-wrap -->
