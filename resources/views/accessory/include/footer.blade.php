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
                    <a style="color:#4672c4" href="{{ route('documentation') }}">Integrate our API</a>
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
                            <a href="tel:{{ $settings->phone }}" style="color:#4672c4">{{ $settings->phone }}</a>
                            <a style="color:#4672c4" href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
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
                        <a href="{{ route('Login') }}" class="btn btn-default"
                            style="background-color:#4672c4;min-width: 150px;">Login</a>
                        &nbsp; <b>&nbsp;</b> &nbsp;
                        <a href="{{ route('Signup') }}" class="btn btn-default"
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
            var constrLinkArr = [{"link":"partners","name":"Partner with us"},{"link":"contact","name":"Contact"}];
            var educationLink = "education";
            // var insuranceLink = "https://www.kenspay.com.ng/insurance";
            $(dropdownContent).append('<a class="nav-link" href="' + educationLink +
                '"><span class="word-span">Education Payment</span><span style="font-size:18px;color:#ccc;" class="fa fa-angle-right"></span></a>'

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
      checkmindiv.html("We'll reply to your email in 30 minutes");
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
