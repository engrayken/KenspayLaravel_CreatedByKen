@extends('admin.app')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-home4 mr-2"></i> <span class="font-weight-semibold">Dashboard</span></h4>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content pt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-left-3 border-left-violet rounded-left-0">
                        <a href="./users" class="text-default">
                            <div class="card-body">
                                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                    <div>
                                        <h6 class="font-weight-semibold">Users</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>verified users: <span
                                                    class="font-weight-semibold text-default">#{{ $vuser }}</span>
                                            </li>
                                            <li>unverified users: <span
                                                    class="font-weight-semibold text-default">#{{ $Nuser }}</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                <span>

                                    Blocked users:
                                    <span class="font-weight-semibold">#{{ $buser }}</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-left-3 border-left-orange rounded-left-0">
                        <a href="./ticket" class="text-default">
                            <div class="card-body">
                                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                    <div>
                                        <h6 class="font-weight-semibold">Support Ticket</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Open tickets: <span class="font-weight-semibold text-default">
                                                    #{{ $ticket }}</span></li>
                                            <li>Closed tickets: <span class="font-weight-semibold text-default">
                                                    #{{ $cticket }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                <span>

                                    Customer messages:
                                    <span class="font-weight-semibold">#{{ $mticket->subject ?? "0" }}</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card border-left-3 border-left-danger rounded-left-0">
                        <a href="./reviews" class="text-default">
                            <div class="card-body">
                                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                    <div>
                                        <h6 class="font-weight-semibold">Platform Reviews</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Published reviews: <span class="font-weight-semibold text-default">
                                                    #4</span></li>
                                            <li>Pending reviews: <span class="font-weight-semibold text-default">
                                                    #2</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                <span>

                                    Customer messages:
                                    <span class="font-weight-semibold">#good for noting</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="card border-left-3 border-left-secondary rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6 class="font-weight-semibold">Pin's Log</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li><b>MTN PINS:=></b> <span class="font-weight-semibold text-default">
                                                {!! $mtn !!}</span></li>
                                        <li><b>AIRTEL PINS:=></b> <span class="font-weight-semibold text-default">
                                                {!! $airtel !!}</span>
                                        </li>
                                        <li><b>GLO PINS:=></b> <span class="font-weight-semibold text-default">
                                                {!! $glo !!}</span></li>
                                        <li><b>9MOBILE PINS:=></b> <span class="font-weight-semibold text-default">
                                                {!! $ninemobile !!}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>


                                <span class="font-weight-semibold"date @cash</span><br>
                                    <span class="font-weight-semibold">{{ $tatalpins }}</span>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-left-3 border-left-pink rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6 class="font-weight-semibold">Deposits</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Cash confirmed deposits: <span class="font-weight-semibold text-default">
                                                100</span></li>
                                        <li>Cash pending deposits: <span class="font-weight-semibold text-default">
                                                200</span></li>
                                        </li>
                                        <li>Bitcoin confirmed deposits: <span class="font-weight-semibold text-default">
                                                100BTC</span></li>
                                        <li>Bitcoin pending deposits: <span class="font-weight-semibold text-default">
                                                300BTC</span></li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>

                                User Data Balance:
                                <span class="font-weight-semibold">{{ $dabal }}</span><br>
                                User Pin balance:
                                <span class="font-weight-semibold">{{ $pinbal }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
