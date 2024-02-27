@extends('admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-bubbles5 mr-2"></i> <span class="font-weight-semibold">Customer service</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.ticket') }}" class="breadcrumb-item">ticket</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Support ticket</h6>
                        </div>
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ticket ID</th>
                                    <th scope="col">Subject</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ticket as $row)
                                    <tr>
                                        <td>{{ $row->User->name }}</td>
                                        <td>{{ $row->priority }}</td>
                                        <td>{{ date('d/M/Y h:i:A', strtotime($row->date)) }}</td>
                                        <td>
                                            @if ($row->status == 0)
                                                {{ 'Open' }}
                                            @elseif ($row->status == 1)
                                                {{ 'Closed' }}
                                            @elseif ($row->status == 2)
                                                {{ 'Resolved' }}
                                            @endif
                                        </td>
                                        <td class="text-danger-800">[#{{ $row->ticket_id }}]</td>
                                        <td>{{ $row->subject }}</td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        @if ($row->status == '0')
                                                            <a class='dropdown-item'
                                                                href ='{{ route('admin.close_ticket', $row->id) }}'><i
                                                                    class="icon-eye-blocked2 mr-2"></i>Close Ticket</a>
                                                        @endif
                                                        {{-- {{ view_v3('check_ticket', $row->ticket_id) }} --}}
                                                        <a class='dropdown-item'
                                                            href ='{{ route('admin.check_ticket', $row->id) }}'><i
                                                                class="icon-reply mr-2"></i>Reply</a>
                                                        <a data-toggle="modal" data-target="#{{ $row->id }}delete"
                                                            class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div id="{{ $row->id }}delete" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    <h6 class="font-weight-semibold">Are you sure you want to delete this?
                                                    </h6>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link"
                                                        data-dismiss="modal">Close</button>
                                                    <a href="{{ route('admin.delete_ticket', $row->id) }}"
                                                        class="btn bg-danger">Proceed</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
