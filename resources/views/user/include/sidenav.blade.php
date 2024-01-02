<div id="mySidenav" class="sidenav">
    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}


    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('pin') }}" class="dropdown-sideken" category="01">
            <div>
                <img src="{{ asset('frontend1/images/homepage2.gif') }}">
            </div>
            Print Recharge Card
        </a>
        <div class="dropdown-container"></div>
    </div>

    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('airtime') }}" class="dropdown-sideken" category="01">
            <div>
                <img src="{{ asset('frontend1/images/airtime.png') }}">
            </div>
            Buy Phone Airtime
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('data') }}" category="03" class="dropdown-sideken">
            <div>
                <img src="{{ asset('frontend1/images/data.png') }}">
            </div>
            Buy Internet Data
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('tv') }}" category="06" class="dropdown-sideken">
            <div>
                <img src="{{ asset('frontend1/images/tv.png') }}">
            </div>
            Pay TV Subscription
        </a>
        <div class="dropdown-container"></div>
    </div>
    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('electricity') }}" category="07" class="dropdown-sideken">
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

    <div class="extt-div">
        <a style="font-size: 13px;" href="{{  route('transaction') }}" class="dropdown-sideken" category="01">
            <div>
                {{-- <img src="{{ asset('frontend1/images/homepage2.gif') }}"> --}}
                <i style="font-size:20px; color:green" class="fas fa-history"></i>

            </div>
           Transaction History
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
