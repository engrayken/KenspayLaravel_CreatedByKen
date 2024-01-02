<div id="mySidenav" class="sidenav">
    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('pins') }}" class="dropdown-sideken" category="1">
            <div>
                <img src="{{ asset('frontend1/images/homepage2.gif') }}">
            </div>
            Print Recharge Card Pin
        </a>
        <div class="dropdown-container"></div>
    </div>
    
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('airtimes') }}" class="dropdown-sideken" category="1">
            <div>
                <img src="{{ asset('frontend1/images/airtime.png') }}">
            </div>
            Buy Phone Airtime
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('datas') }}" category="3" class="dropdown-sideken">
            <div>
                <img src="{{ asset('frontend1/images/data.png') }}">
            </div>
            Buy Internet Data
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('tvs') }}" category="6" class="dropdown-sideken">
            <div>
                <img src="{{ asset('frontend1/images/tv.png') }}">
            </div>
            Pay TV Subscription
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('electricitys') }}" category="7" class="dropdown-sideken">
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
