@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-question4 mr-2"></i> <span class="font-weight-semibold">Frequently asked
                            questions</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
                        <a href="./faq" class="breadcrumb-item">faq</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            @if (Session::has('failed'))
                <div class="alert bg-danger alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Faq Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Faq Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">FAQ</h6>
                    <div class="header-elements">
                        <a class="font-weight-semibold text-gray-800" href="./cfaq"><i
                                class="icon-file-plus mr-2"></i>Create faq</a>
                    </div>
                </div>
                <div class="card-body">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faq as $faq)
                                <tr>
                                    <td>{{ $faq->question }}</td>
                                    <td>{!! $faq->answer !!}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('admin.check_faq', $faq->id) }}"
                                                        class="dropdown-item"><i class="icon-pencil7 mr-2"></i> Edit</a>
                                                    <a data-toggle="modal" data-target="#{{ $faq->id }}delete"
                                                        class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="{{ $faq->id }}delete" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link"
                                                    data-dismiss="modal">Close</button>
                                                <a href="{{ route('admin.delete_faq', $faq->id) }}"
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
