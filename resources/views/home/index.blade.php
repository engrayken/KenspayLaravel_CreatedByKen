@extends('home.app')

@section('content')

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
<h1 style="font-size:50px;font-weight:bold;color:#173D52;margin:0;">kenspay</h1>
<h3 style="font-size:30px;font-weight:bold;color:#173D52;margin:0;">Recharge Card Printing Got Easy</h3>
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
<a style="color:inherit;" href="{{ route('tvs') }}">
    <div class="img-holder d-flex justify-content-center align-items-center">
        <img width="20" height="20" src="{{ asset('frontend1/images/dev-tv.png') }}"/>
    </div>
</a>
</li>
<li class="mr-2">
<a style="color:inherit;" href="{{ route('electricitys') }}">
    <div class="img-holder d-flex justify-content-center align-items-center">
        <img width="20" height="20" src="{{ asset('frontend1/images/dev-bulb.png') }}"/>
    </div>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-5 d-lg-block d-none" style="margin-top:60px;">
<h1 style="font-size:80px;font-weight:bold;color:#173D52;margin:0;line-height: 0.9;">Kenspay</h1>
<h1 style="font-size:50px;font-weight:bold;color:#173D52;margin:0;">Recharge Card Printing Got Easy</h1>
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
<a style="color:inherit;" href="{{ route('tvs') }}">
    <div class="img-holder d-flex justify-content-center align-items-center">
        <img width="20" height="20" src="{{ asset('frontend1/images/dev-tv.png') }}"/>
    </div>
</a>
</li>
<li class="mr-2">
<a style="color:inherit;" href="{{ route('electricitys') }}">
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
<h2 style="font-weight:bold;color:#173D52;font-size:30px;">We Provide Amazing <span style="color:inherit;border-bottom:10px solid #D50000;">Services</span></h2>
<p class="d-lg-block d-none mt-2" style="text-align:center;">
With kenspay Mobile App and Desktop App You can print Recharge Card with mobile bluetooth Printer or deskjet/laserjet Printer right from the comfort of your home or office.<br/>fast service delivery and easy payment.
</p>
<p class="d-lg-none d-block mt-2" style="text-align:left;">
With kenspay Mobile App and Desktop App You can print Recharge Card with mobile bluetooth Printer or deskjet/laserjet Printer right from the comfort of your home or office.<br/>fast service delivery and easy payment.
</p>
<div class="row d-flex justify-content-between align-items-center flex-wrap mt-3 w-100">

<div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="{{ route('pins') }}">Buy Recharge Card</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="{{ route('pins') }}">MTN PIN</a></li>
    <li><a style="color:inherit;" href="{{ route('pins') }}">GLO PIN</a></li>
    <li><a style="color:inherit;" href="{{ route('pins') }}">Airtel PIN</a></li>
    <li><a style="color:inherit;" href="{{ route('pins') }}">9Mobile PIN</a></li>
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="{{ route('pins') }}">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
        <i class="fas fa-arrow-right ml-2"></i>
    </div>
</a>
</div>
</div>

<div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="{{ route('airtimes') }}">Buy Phone Airtime</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="{{ route('airtimes') }}">MTN VTU</a></li>
    <li><a style="color:inherit;" href="{{ route('airtimes') }}">GLO VTU</a></li>
    <li><a style="color:inherit;" href="{{ route('airtimes') }}">Airtel VTU</a></li>
    <li><a style="color:inherit;" href="{{ route('airtimes') }}">9Mobile VTU</a></li>
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="{{ route('airtimes') }}">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
        <i class="fas fa-arrow-right ml-2"></i>
    </div>
</a>
</div>
</div>


<div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="https://www.kenspay.com.ng/data">Buy Internet Data</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">MTN DATA</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">GLO DATA</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">AIRTEL DATA</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/data">9MOBILE DATA</a></li>
    {{-- <li><a style="color:inherit;" href="https://www.kenspay.com.ng/smile">SMILE DATA</a></li> --}}
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/data">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
        <i class="fas fa-arrow-right ml-2"></i>
    </div>
</a>
</div>
</div>
<div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="{{ route('tvs') }}">Pay TV Subs</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="{{ route('tvs') }}">GOTV</a></li>
    <li><a style="color:inherit;" href="{{ route('tvs') }}">DSTV</a></li>
    <li><a style="color:inherit;" href="{{ route('tvs') }}">STARTIMES</a></li>
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="{{ route('tvs') }}">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
        <i class="fas fa-arrow-right ml-2"></i>
    </div>
</a>
</div>
</div>
<div class="col-lg col-md-6 w-100 m-0 mb-lg-0 mb-4 p-0 pr-2">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="{{ route('electricitys') }}">Pay Electricity Bill</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">PHED</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">AEDC</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">IKEDC</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">EKEDC</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">KEDCO</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">IBEDC</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">JEDplc</a></li>
    <li><a style="color:inherit;" href="{{ route('electricitys') }}">KAEDCO</a></li>
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="{{ route('electricitys') }}">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
        <i class="fas fa-arrow-right ml-2"></i>
    </div>
</a>
</div>
</div>

{{-- <div class="col-lg col-md-6 w-100 m-0 p-0">
<div class="w-100 d-flex justify-content-start align-items-center flex-column pt-3" style="width:350px;height:250px;box-shadow:0px 7px 4px 0px rgba(0,0,0,.15);box-sizing:border-box;border-radius:10px;">
<h4 style="font-size:15px;font-weight:bold;color:#173D52;"><a style="color:inherit;" href="https://www.kenspay.com.ng/insurance">Insurance</a></h4>
<ul style="font-size:14px;">
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/car-insurance">Third Party Motor</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/health-insurance-rhl">Health Insurance - HMO</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/home-cover-insurance-fbn">Home Cover</a></li>
    <li><a style="color:inherit;" href="https://www.kenspay.com.ng/personal-accident-insurance-fbn">Personal Accident</a></li>
</ul>
<a style="color:inherit;position:absolute;bottom:-15px;" href="https://www.kenspay.com.ng/insurance">
    <div class="arrow-holder d-flex justify-content-center align-items-center" style="background-color:#173D52;color:#fff;">
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
<h2 style="font-weight:bold;color:#173D52;font-size:30px;">Register <span style="color:inherit;border-bottom:10px solid #D50000;">With Us</span></h2>
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
    <h4 style="font-weight:bold;color:#173D52;font-size:20px;margin:0;">What you need to start Printing</h4>
    <p style="font-size:14px;">
        Get a computer or smart phone that can access the internet
    </p>
</div>
</div>
<div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#fff8f5;border-radius:10px;padding:5px;">
<img width="50" height="50" src="{{ asset('frontend1/images/bank.svg') }}"/>
<div class="pl-2 ml-2 text-left">
    <h4 style="font-weight:bold;color:#173D52;font-size:20px;margin:0;">Buy Epin (Recharge Card)</h4>
    <p style="font-size:14px;">
        From a reliable recharge card dealer in Nigeria Known as Kenspay Technology. <br>Generate the card pin, print or Download as pdf.
    </p>
</div>
</div>
<div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#f3f3fd;border-radius:10px;padding:5px;">
<img width="50" height="50" src="{{ asset('frontend1/images/graphic.svg') }}"/>
<div class="pl-2 ml-2 text-left">
    <h4 style="font-weight:bold;color:#173D52;font-size:20px;margin:0;">Connect Printer to PC/Mobile Phone</h4>
    <p style="font-size:14px;">
        load it with papers open the file as pdf to print the ePins on the papers by clicking on print. <br>
         or use your mobile phone with our mobile application connect with bluetooth printer and start printing.
        Sell and make money
    </p>
</div>
</div>
<div class="d-flex justify-content-center align-items-center mb-3" style="background-color:#fffef9;border-radius:10px;padding:5px;">
<img width="50" height="50" src="{{ asset('frontend1/images/wallet.svg') }}"/>
<div class="pl-2 ml-2 text-left">
    <h4 style="font-weight:bold;color:#173D52;font-size:20px;margin:0;">Auto-Wallet Funding</h4>
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
<h2 style="font-weight:bold;color:#173D52;font-size:30px;">Integrate <span style="color:inherit;border-bottom:10px solid #D50000;">our API</span></h2>
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
<h2 style="font-weight:bold;color:#173D52;font-size:30px;">Why <span style="color:inherit;border-bottom:10px solid #D50000;">kenspay</span></h2>
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
        <h2 style="font-weight:bold;color:#173D52;font-size:18px;">Excellent Customer Support</h2>
        <p class="mt-2" style="font-size:14px;">
            Our well trained customer support agents are always available 24/7 to help you resolve any issues. We provide you with multiple ways to reach us and get fast help.
        </p>
    </div>
</div>
<div class="col-lg-12 mt-3 text-left">
    <i style="font-size:30px;color:#D50000;" class="fas fa-fighter-jet"></i>
    <div class="mt-2">
        <h2 style="font-weight:bold;color:#173D52;font-size:18px;">Fast Service Delivery</h2>
        <p class="mt-2" style="font-size:14px;">
            Enjoy prompt delivery of services purchased through kenspay.com.ng. Our promise to you is to deliver value for every transaction made on-time, every time.
        </p>
    </div>
</div>
<div class="col-lg-12 mt-3 text-left">
    <i style="font-size:30px;color:#D50000;" class="fas fa-shield-alt"></i>
    <div class="mt-2">
        <h2 style="font-weight:bold;color:#173D52;font-size:18px;">Safe, Secured Payment</h2>
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
style="padding: 4px 10px;background-image: linear-gradient(#114761,#173D52);color:#fff;position:fixed;top:50%;right:0;border:0;border-bottom-right-radius:0;border-top-right-radius:0;min-width:unset;"><img
width="25px" height="25px"
src="{{ asset('frontend1/images/star.png') }}" /></button> --}}
</div>

@endsection
