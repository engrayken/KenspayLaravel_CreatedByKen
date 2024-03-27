@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Add Product</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="./" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="./deposit" class="breadcrumb-item">product</a>
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Product Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Product Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Add Product</h6>
                </div>
                <h2>Normal Pin Upload Each Network</h2>
                <form class="form-horizontal" role="form" name="form1" method="post" action="">
                    <table cellpadding="20" width="100%">
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Select Network</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select" name="net" id="net"
                                            data-dropdown-css-class="bg-purple" data-fouc required>
                                            <option value="mtn">MTN</option>
                                            <option value="airtel">AIRTEL</option>
                                            <option value="glo">GLO</option>
                                            <option value="9mobile">9MOBILE</option>
                                        </select>
                                    </div>
                                </div>


                                <p>Denomination</p>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <select class="form-control select" name="deno" id='deno'
                                            data-dropdown-css-class="bg-purple" data-fouc required>
                                            <option value="50">50 </option>
                                            <option value="100">100 </option>
                                            <option value="200">200 </option>
                                            <option value="500">500 </option>
                                            <option value="1000">1000 </option>
                                        </select>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="bundle" class="control-label">Network, Pin and Seria no*:</label>
                                    <textarea class="form-control" rows="4" id="bundle" name="bundle"></textarea>
                                </div>



                                <small class="text-danger">Enter networks info separated by comma(,) no space, and
                                    separating parameters using the minus sign(-). Enter paramenters like:
                                    Network-Name-amount-pin-seria. Example:
                                    MTN-100-3959499505-9765675578-*555*1026370689216100#,Glo-200-3959499505-123456-*123*1026370689216100#,Airtel-100-3959499505-865544-*126*1026370689216100#,9mobile-500-3959499505-86776555-*126*1026370689216100#</small><br /><br />

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Save" name="bsave"
                                        id="bsave">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

                <h2>All Network Pin Upload</h2>

                <form class="form-horizontal" role="form" name="form1" method="post" action="">
                    @csrf
                    <table cellpadding="20" width="100%">
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Select Network</label>
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


                                <p>Denomination</p>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <select class="form-control select" name="deno" id='deno'
                                            data-dropdown-css-class="bg-purple" data-fouc required>
                                            <option value="50">50 </option>
                                            <option value="100">100 </option>
                                            <option value="200">200 </option>
                                            <option value="500">500 </option>
                                            <option value="1000">1000 </option>
                                        </select>

                                    </div>
                                    @error('deno')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="bundle" class="control-label">Network, Pin and Seria no*:</label>
                                    <textarea class="form-control" rows="4" id="bundle" name="bundle"></textarea>

                                    @error('net')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <small class="text-danger">Enter networks pin and serial number separated by comma(,) no
                                    space, and separating parameters using the breakdown. Enter paramenters like: pin,seria.
                                    Example: 3959499505,9765675578 <br>3959499505,10263706892</small><br /><br />

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Save" name="bsave"
                                        id="bsave">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>


                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Added Product</h6>
                </div>

                <table class="table datatable-show-all">
                    <thead>
                        <tr>

                            <th>Serial No</th>

                            <th>Network</th>
                            <th>Deno</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pins as $row1)
                            <tr>
                                <td>{{ $row1->seria }}</td>
                                <td>{{ $row1->net }}</td>

                                <td>{{ $row1->deno }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-orange-800">

                                                <a data-toggle="modal" data-target="#{{ $row1->id }}delete"
                                                    class="dropdown-item">Delete deposit</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <div id="{{ $row1->id }}delete" class="modal fade" tabindex="-1">
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
                                            <a href="{{ route('admin.dadd_pins', $row1->id) }}"
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
