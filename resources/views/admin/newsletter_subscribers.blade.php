@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-envelope mr-2"></i> <span class="font-weight-semibold">Promotion email /
                            newsletter</span></h4>
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

            {{-- // if($eset['status']==0){ --}}
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
                    <form action="{{ route('admin.sendpemail') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-12">
                                <select multiple="multiple" class="form-control select" name="email[]" data-fouc>
                                    <optgroup label="Subscribed users">
                                        @foreach ($user as $row)
                                            <option value="{{ $row->email }}" selected>{{ $row->email }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Subject:</label>
                            <div class="col-lg-12">
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Content:</label>
                            <div class="col-lg-12">
                                <textarea type="text" name="message" class="tinymce form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn bg-violet">Send <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
