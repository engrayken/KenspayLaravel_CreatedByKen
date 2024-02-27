@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-bubbles5 mr-2"></i> <span class="font-weight-semibold">Customer Service</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.ticket') }}" class="breadcrumb-item">support ticket</a>
                        {{-- <a href="./check_ticket/$id" class="breadcrumb-item">[#$id</a> --}}
                    </div>
                </div>

                <div class="breadcrumb justify-content-center">
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="content">
            @if (Session::has('success'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert bg-success text-white alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-left-3 border-left-orange rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6 class="font-weight-semibold">{{ $ticket->subject }}</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Ticket ID #: &nbsp;{{ $ticket->ticket_id }}</li>
                                        <li>Created on: <span
                                                class="font-weight-semibold">{{ date('D/m/Y', strtotime($ticket->created_at)) }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    <ul class="list list-unstyled mb-0">
                                        <li>Status: <span class="badge bg-danger-400 font-weight-semibold">
                                                @if ($ticket['status'] == 0)
                                                    {{ 'Open' }}
                                                @elseif ($ticket->status == 1)
                                                    {{ 'Closed' }}
                                                @elseif ($ticket->status == 2)
                                                    {{ 'Resolved' }}
                                                @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-success mr-2"></span>
                                Priority:
                                <span class="font-weight-semibold">{{ $ticket->priority }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Messages -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Ticket Log</h6>
                            <div class="header-elements">
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="media-list media-chat media-chat-scrollable mb-3">
                                <li class="media">
                                    <div class="ml-3">
                                        <a href="#">
                                            <img src="{{ asset('admin/asset/global_assets/images/placeholders/user.png') }}"
                                                class="rounded-circle" width="40" height="40" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-chat-item">{{ $ticket->message }}</div>
                                        <div class="font-size-sm text-muted mt-2">
                                            {{ date('M j, Y h:iA', strtotime($ticket->created_at)) }}</div>
                                    </div>
                                </li>

                                @foreach ($df as $df)
                                    @if ($df->status == 1)
                                        <li class="media">
                                            <div class="ml-3">
                                                <a href="#">
                                                    @if ($df->reply_rule == 'admin')
                                                        <img src="{{ asset('admin/asset/global_assets/images/placeholders/placeholder.jpg') }}"
                                                            class="rounded-circle" width="40" height="40"
                                                            alt="">
                                                    @else
                                                        <img src="{{ asset('admin/asset/global_assets/images/placeholders/user.png') }}"
                                                            class="rounded-circle" width="40" height="40"
                                                            alt="">
                                                    @endif

                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-chat-item">{{ $df->reply }}</div>
                                                <div class="font-size-sm text-muted mt-2">
                                                    {{ date('M j, Y h:iA', strtotime($df->created_at)) }}</div>
                                            </div>


                                        </li>
                                    @elseif($df->status == 0)
                                        <li class="media media-chat-item-reverse">
                                            <div class="media-body">
                                                <div class="media-chat-item">{{ $df->reply }}</div>
                                                <div class="font-size-sm text-muted mt-2">
                                                    {{ date('M j, Y h:iA', strtotime($df->created_at)) }}</div>
                                            </div>
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{ asset('admin/asset/global_assets/images/placeholders/placeholder.jpg') }}"
                                                        class="rounded-circle" width="40" height="40">
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <form method="post" action="{{ route('admin.reply_ticket', $ticket->id) }}">
                                @csrf
                                <textarea class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..." name="reply"
                                    required></textarea>
                                <input type="hidden" name="ticket_id" value="{{ $ticket->ticket_id }}">
                                <input type="hidden" name="user" value="{{ $ticket->userId }}">

                                <div class="d-flex align-items-center">
                                    <button type="submit"
                                        class="btn bg-success btn-labeled btn-labeled-right ml-auto"><b><i
                                                class="icon-paperplane"></i></b> Send</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /messages -->
            </div>
        @endsection
