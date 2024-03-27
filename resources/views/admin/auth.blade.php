@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Add Authorizaion Code</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.auth') }}" class="breadcrumb-item">Generate Authorizaion Code</a>
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
                    <h6 class="alert-heading font-weight-semibold mb-1">Authorization Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">Authorization Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Add Authorizaion Code</h6>
                </div>
                <form class="form-horizontal" role="form" name="form1" method="post"
                    action="{{ route('admin.pauth') }}">
                    @csrf
                    <table cellpadding="20" width="100%">
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Customer Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" name="email" id="email" data-fouc
                                            required />

                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">prefix</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="prefix" id="prefix" required />
                                    </div>
                                    @error('prefix')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" name="phone" id="phone" required />
                                    </div>
                                    @error('phone')
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




                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Added Authorizaion Code</h6>
                </div>
                {{--  if($_GET['delp']!='email' & $_GET['delp']!='')
{
echo'<div class="alert bg-orange alert-styled-left alert-arrow-left alert-dismissible">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
<h6 class="alert-heading font-weight-semibold mb-1 text-uppercase">Deleted successful</h6>
authorization code has been delete successful</div>'; }

if($_GET['delp']=='email')
{
echo' <div class="alert bg-green alert-styled-left alert-arrow-left alert-dismissible">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
<h6 class="alert-heading font-weight-semibold mb-1 text-uppercase">success</h6>
authorization code has been sent to mail successful.</div>';
}

if($_GET['prefix']!='')
{
echo'<div class="alert bg-green alert-styled-left alert-arrow-left alert-dismissible">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
<h6 class="alert-heading font-weight-semibold mb-1 text-uppercase">success</h6>
authorization code has been created successful</div>';
}
 --}}
                <table class="table datatable-show-all">
                    <thead>
                        <tr>


                            <th>Auth code</th>
                            <th>Email</th>
                            <th>Phone</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($code as $row)
                            <tr>
                                <td>{{ $row->code }}</td>

                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                {{-- <a class='dropdown-item' href="{{ route('admin.sendEmail', $row->id) }}"><i
                                                        class="icon-envelope mr-2"></i>Send email</a> --}}
                                                <a href="https://wa.me/{{ $row->phone }}?text=your authoriztion code is {{ $row->code }},
                                        use it to register at https://carddispenser.com.ng/register and also use this your number {{ $row->phone }} the way it is here to register"
                                                    class="dropdown-item"><i class="icon-envelope mr-2"></i>Send To
                                                    Whatsapp</a>
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
                                            <a href="{{ route('admin.dauth', $row->id) }}"
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
