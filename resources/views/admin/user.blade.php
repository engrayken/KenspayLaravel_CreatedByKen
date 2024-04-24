@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-user mr-2"></i> <span class="font-weight-semibold">User Management</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.user') }}" class="breadcrumb-item">users</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            @if (Session::has('failed'))
                <div class="alert bg-danger alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">User Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">User Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Users</h6>
                        </div>
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Pin Bal</th>
                                    <th>Data Bal</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->pinBalance }}</td>
                                        <td>{{ $row->dataBalance }}</td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('admin.manage_users', $row->id) }}"
                                                            class="dropdown-item"><i class="icon-cogs mr-2"></i>Manage
                                                            account</a>
                                                        <a data-toggle="modal" data-target="#{{ $row->id }}delete"
                                                            class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                        @php
                                                            $block = -1;
                                                            $activate = 1;
                                                        @endphp
                                                        @if ($row->status != '-1')
                                                            <a class='dropdown-item'
                                                                href ="{{ route('admin.blockUser', ['user' => $row->id, 'status' => $block]) }}"><i
                                                                    class="icon-eye-blocked2 mr-2"></i>Block account</a>
                                                        @else
                                                            <a class='dropdown-item'
                                                                href ="{{ route('admin.blockUser', ['user' => $row->id, 'status' => $activate]) }}"><i
                                                                    class="icon-eye mr-2"></i>Unblock account</a>
                                                        @endif
                                                        <a data-toggle="modal" data-target="#{{ $row->id }}credit"
                                                            class="dropdown-item"><i class="icon-bin2 mr-2"></i>Credit
                                                            User</a>

                                                        <a class='dropdown-item'
                                                            href="{{ route('admin.sendEmail', $row->id) }}"><i
                                                                class="icon-envelope mr-2"></i>Send email</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div id="{{ $row->id }}delete" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-xs">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Delete {{ $row->name }}'s account</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    <h6 class="font-weight-semibold"></h6>
                                                    <p>You are about to delete a user account, this can't be undone. Ticket,
                                                        deposit, withdraw, transfer & plan history will all be deleted</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link"
                                                        data-dismiss="modal">Close</button>
                                                    <a href="{{ route('admin.deleteprofile', $row->id) }}"
                                                        class="btn bg-danger">Proceed</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div id="{{ $row->id }}credit" class="modal fade" tabindex="-2">
                                        <div class="modal-dialog modal-xs">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Credit {{ $row->name }}'s account</h6>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    <h6 class="font-weight-semibold"></h6>
                                                    <p>You are about to credit a user account, please fill in amount to
                                                        credit, while add -100 to debit.</p>
                                                </div>
                                                <form action="{{ route('admin.creditUser', $row->id) }}" method="POST">
                                                    @csrf

                                                    <select class="form-control select" name="balance"
                                                        data-dropdown-css-class="bg-info-800" data-fouc required>
                                                        <option value="">Please select</option>
                                                        <option value="pinBalance">Credit Pin Balance</option>
                                                        <option value="dataBalance">Credit Data Balance</option>
                                                    </select>

                                                    <input type="number" name="amount" placeholder="type amount"
                                                        class="form-control ml-1 mr-1 mb-2">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn bg-danger">Proceed</button>
                                                    </div>
                                                </form>
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
