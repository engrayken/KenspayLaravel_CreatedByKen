@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Add Api Settings</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.api') }}" class="breadcrumb-item">Api Setup</a>
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Api Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Api Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="card">
                @if ($apiE)
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Edit Api Setting</h6>
                    </div>
                    <form class="form-horizontal" role="form" name="form1" method="post"
                        action="{{ route('admin.apiEP', $apiE->id) }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Type</label>
                                        <div class="col-lg-10">
                                            <input type="type" class="form-control" name="type" id="type"
                                                data-fouc placeholder="eg pin, airtime, other" value="{{ $apiE->type }}"
                                                required />

                                        </div>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="KenspayPin, VtpassAirtime,OtherService"
                                                value="{{ $apiE->name }}" required />
                                        </div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">url</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="url" id="url"
                                                placeholder="vtpass.com/api" value="{{ $apiE->url }}" required />
                                        </div>
                                        @error('url')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Username</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="KenspayPin, VtpassAirtime,OtherService"
                                                value="{{ $apiE->username }}" required />
                                        </div>
                                        @error('username')
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
                        <h6 class="card-title font-weight-semibold">Add Api Setting</h6>
                    </div>
                    <form class="form-horizontal" role="form" name="form1" method="post"
                        action="{{ route('admin.apiP') }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Type</label>
                                        <div class="col-lg-10">
                                            <input type="type" class="form-control" name="type" id="type"
                                                data-fouc placeholder="eg pin, airtime, other" required />

                                        </div>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="KenspayPin, VtpassAirtime,OtherService" required />
                                        </div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">url</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="url" id="url"
                                                placeholder="vtpass.com/api" required />
                                        </div>
                                        @error('url')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Username</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="KenspayPin, VtpassAirtime,OtherService" required />
                                        </div>
                                        @error('username')
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
                @endif




                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Added Api </h6>
                </div>

                <table class="table datatable-show-all">
                    <thead>
                        <tr>


                            <th>Type</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Username</th>
                            <th>Status</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($api as $row)
                            <tr>
                                <td>{{ $row->type }}</td>

                                <td>{{ $row->name }}</td>
                                <td>{{ $row->url }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->status == 1 ? 'Active' : 'Disabled' }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('admin.apiE', $row->id) }}" class="dropdown-item"><i
                                                        class="icon-pencil7 mr-2"></i> Edit</a>
                                                @php
                                                    $block = 0;
                                                    $activate = 1;
                                                @endphp
                                                @if ($row->status == 1)
                                                    <a class='dropdown-item'
                                                        href ="{{ route('admin.apiU', ['api' => $row->id, 'status' => $block]) }}"><i
                                                            class="icon-eye-blocked2 mr-2"></i>Deactivate</a>
                                                @else
                                                    <a class='dropdown-item'
                                                        href ="{{ route('admin.apiU', ['api' => $row->id, 'status' => $activate]) }}"><i
                                                            class="icon-eye mr-2"></i>Activate</a>
                                                @endif
                                                <a data-toggle="modal" data-target="#{{ $row->id }}delete"
                                                    class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>



                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <div id="{{ $row->id }}delete" class="modal fade" tabindex="-1">
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
                                            <a href="{{ route('admin.apiD', $row->id) }}"
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
