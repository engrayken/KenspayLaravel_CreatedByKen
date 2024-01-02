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
                                <a href="{{ route('contact') }}" class="set text-dark">
                                    <h4 class="text-dark"><i class="fas fa-ticket-alt"></i> Send us a Message.</h4>
                                    <div class="">
                                        <span class="checkmin"></span>

                                        <br><a class="text-danger"
                                            href="{{ route('contact') }}">Submit a ticket<i
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
            <iframe src="{{route('widget-ticket')}}" frameborder="0" height="440"
                width="100%" style="overflow-y: scroll;"></iframe>
        </div>
    </div>
</div>
</div>
</div>
