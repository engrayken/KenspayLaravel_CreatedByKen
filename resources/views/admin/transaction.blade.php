@extends('admin.app')
@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Order History</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('admin.transaction') }}" class="breadcrumb-item">history</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">

                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <br />
                        <i class="text-danger">User confirmed and unconfirmed product can be seen here.
                        </i>
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Transaction History</h6>
                        </div>
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Order ID</th>
                                    <th>Full Name</th>
                                    <th>Network</th>
                                    <th>Denomination</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>

                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ $i = 0 }}
                                @foreach ($trans as $row1)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $row1->transId }}</td>
                                        <td>{{ $row1->userName }}</td>

                                        <td>{{ $row1->network }}</td>

                                        <td>{{ $row1->deno }}</td>


                                        <td>{{ $row1->quantity }}</td>
                                        <td>{{ $row1->amount }}</td>

                                        <td>{{ date('Y/m/d h:i:A', strtotime($row1->created_at)) }}</td>
                                        <td><?php if ($row1->status == 1) {
                                            echo '<span class="badge badge-success">Success</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Failed</span>';
                                        } ?></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>






                </div>
            </div>
        </div>
    </div>
@endsection
