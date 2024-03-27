@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Add Product Category</span>
                    </h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.category') }}" class="breadcrumb-item">Category</a>
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Category Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Category Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="card">
                @if (!$cate)
                    <div class="card-header header-elements-inline">

                        <h6 class="card-title font-weight-semibold">Add Category</h6>
                    </div>

                    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.pcategory') }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="category_name" id="catName"
                                                placeholder="airtime" required />

                                        </div>
                                        @error('category_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category Title</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="category_title" id="catTitle"
                                                placeholder="Buy Airtime Vtu" required />
                                        </div>
                                        @error('category_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Save" name="bsave"
                                            id="bsave">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                @else
                    <div class="card-header header-elements-inline">

                        <h6 class="card-title font-weight-semibold">Edit Category</h6>
                    </div>

                    <form class="form-horizontal" role="form" method="post"
                        action="{{ route('admin.epcategory', $cate->catId) }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="category_name" id="catName"
                                                placeholder="airtime" value="{{ $cate->catName }}" required />

                                        </div>
                                        @error('category_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category Title</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="category_title" id="catTitle"
                                                placeholder="Buy Airtime Vtu" value="{{ $cate->catTitle }}" required />
                                        </div>
                                        @error('category_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Save Edited" name="bsave"
                                            id="bsave">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                @endif



                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Added Category</h6>
                </div>

                <table class="table datatable-show-all">
                    <thead>
                        <tr>


                            <th>Name</th>
                            <th>Title</th>
                            <th>Date</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cat as $row)
                            <tr>
                                <td><a href="{{ route('admin.product', $row->catId) }}">{{ $row->catName }}</a></td>

                                <td><a href="{{ route('admin.product', $row->catId) }}">{{ $row->catTitle }}</a></td>
                                <td>{{ $row->created_at }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class='dropdown-item'
                                                    href="{{ route('admin.ecategory', $row->catId) }}"><i
                                                        class="icon-envelope mr-2"></i>Edit</a>

                                                <a data-toggle="modal" data-target="#{{ $row->catId }}delete"
                                                    class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>



                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <div id="{{ $row->catId }}delete" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-secondary">
                                            <h6 class="modal-title">Delete deposit history</h6>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold"></h6>
                                            <p>You are about to delete a Product, this can't be undone.</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{ route('admin.dcategory', $row->catId) }}"
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
@endsection
