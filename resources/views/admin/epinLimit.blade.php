@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Add Epin Limit</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.epinlimit') }}" class="breadcrumb-item">Epin Limit</a>
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Epin Limit Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Epin Limit Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="card">
                @if ($epinE)
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Edit Epin Limit Setting</h6>
                    </div>
                    <form class="form-horizontal" role="form" name="form1" method="post"
                        action="{{ route('admin.epinEP', $epinE->id) }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Network</label>
                                        <div class="col-lg-10">
                                            <select class="form-control select" name="net" id="net"
                                                data-dropdown-css-class="bg-purple" data-fouc required>
                                                <option value="mtn" {{ $epinE->net == 'mtn' ? 'selected' : '' }}>MTN
                                                </option>
                                                <option value="airtel" {{ $epinE->net == 'airtel' ? 'selected' : '' }}>
                                                    AIRTEL
                                                </option>
                                                <option value="glo" {{ $epinE->net == 'glo' ? 'selected' : '' }}>GLO
                                                </option>
                                                <option value="9mobile" {{ $epinE->net == '9mobile' ? 'selected' : '' }}>
                                                    9MOBILE</option>
                                            </select>

                                        </div>
                                        @error('net')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Deno</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="deno" id="deno"
                                                placeholder="100, 200, 400, 500, 10000" value="{{ $epinE->deno }}"
                                                required />
                                        </div>
                                        @error('deno')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Balance</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="balance" id="balance"
                                                placeholder="1000, 2000 and above" value="{{ $epinE->balance }}"
                                                required />
                                        </div>
                                        @error('balance')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2"> <Label>Limit</Label></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="limit" id="limit"
                                                placeholder="5 and above" value="{{ $epinE->limit }}" required />
                                        </div>
                                        @error('limit')
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
                        <h6 class="card-title font-weight-semibold">Add Epin Limit Setting</h6>
                    </div>
                    <form class="form-horizontal" role="form" name="form1" method="post"
                        action="{{ route('admin.epinP') }}">
                        @csrf
                        <table cellpadding="20" width="100%">
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Network</label>
                                        <div class="col-lg-10">
                                            <select class="form-control select" name="net" id="net"
                                                data-dropdown-css-class="bg-purple" data-fouc required>
                                                <option value="mtn">MTN</option>
                                                <option value="airtel">AIRTEL</option>
                                                <option value="glo">GLO</option>
                                                <option value="9mobile">9MOBILE</option>
                                            </select>

                                        </div>
                                        @error('net')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Deno</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="deno" id="deno"
                                                placeholder="100, 200, 400, 500, 10000" required />
                                        </div>
                                        @error('deno')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Balance</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="balance" id="balance"
                                                placeholder="1000, 2000 and above" required />
                                        </div>
                                        @error('balance')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2"> <Label>Limit</Label></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="limit" id="limit"
                                                placeholder="5 and above" required />
                                        </div>
                                        @error('limit')
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
                    <h6 class="card-title font-weight-semibold">Added epin </h6>
                </div>

                <table class="table datatable-show-all">
                    <thead>
                        <tr>


                            <th>Net</th>
                            <th>Deno</th>
                            <th>Balance</th>
                            <th>Limit</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($epin as $row)
                            <tr>
                                <td>{{ $row->net }}</td>

                                <td>{{ $row->deno }}</td>
                                <td>{{ $row->balance }}</td>
                                <td>{{ $row->limit }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('admin.epinE', $row->id) }}" class="dropdown-item"><i
                                                        class="icon-pencil7 mr-2"></i> Edit</a>

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
                                            <a href="{{ route('admin.epinD', $row->id) }}"
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
