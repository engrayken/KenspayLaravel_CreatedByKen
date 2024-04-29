@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-envelope mr-2"></i> <span class="font-weight-semibold">Notification message</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="./users" class="breadcrumb-item">users</a>
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

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Send email</h6>
                    <div class="header-elements">
                        <div class="list-icons text-orange-600">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="text-danger"></p>
                    <form action="{{ route('admin.pnotification') }}" method="post">
                        @csrf
                        <div class="form-group row">


                            {{-- <div class="form-group row"> --}}
                            <div class="col-lg-12">
                                <select class="form-control select" name="option" data-dropdown-css-class="bg-info-800"
                                    data-fouc required>
                                    <option value="notPublic">Not Public</option>
                                    <option value="public">Public</option>
                                </select>
                            </div>
                            {{-- </div> --}}
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12">Subject:</label>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" class="form-control" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Enter Comment:</label>
                                <div class="col-lg-12">
                                    <textarea type="text" name="comment" class="tinymce form-control"></textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn bg-violet">Send <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                    </form>



                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($noti as $row)
                                <tr>
                                    <td>{{ $row->User->name ?? '' }}</td>
                                    <td>{{ $row->subject }}</td>
                                    <td>{{ $row->text }}</td>
                                    <td>
                                        @if ($row->status != 1)
                                            <span class="text-danger">Not Seen</span>
                                        @else
                                            <span class="text-success">Read</span>
                                        @endif

                                    </td>
                                    <td>{{ $row->created_at }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a data-toggle="modal" data-target="#{{ $row->id }}delete"
                                                        class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="{{ $row->id }}delete" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-xs">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">Delete {{ $row->subject }}</h6>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <h6 class="font-weight-semibold"></h6>
                                                <p>You are about to delete this Notification, this can't be undone.</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link"
                                                    data-dismiss="modal">Close</button>
                                                <a href="{{ route('admin.deleteNoti', $row->created_at) }}"
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
        @endsection
