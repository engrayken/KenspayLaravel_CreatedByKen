@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-file-text3 mr-2"></i> <span class="font-weight-semibold">{{ $page->title }}</span>
                    </h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
                        <a href="{{ route('admin.page') }}" class="breadcrumb-item">page</a>
                        {{-- <a href="./check_page/$id;?>" class="breadcrumb-item">$id;?></a> --}}
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Page Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">page Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Edit web page</h6>
                    <div class="header-elements">
                        <div class="list-icons text-orange-600">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="text-danger"></p>
                    <form action="{{ route('admin.editpage', $page->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Title:</label>
                            <div class="col-lg-12">
                                <input type="text" name="type" class="form-control" value="{{ $page->type }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Content:</label>
                            <div class="col-lg-12">
                                <textarea type="text" name="message" class="tinymce form-control">{{ $page->message }}</textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn bg-violet">Submit form <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
