@extends('layouts.template')

@section('content')

    <div class="content-wrapper">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Orders</h4>

                <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                        <tr class="bg-primary text-white">
                            <th>Order #</th>
                            <th>Pelanggan</th>
                            <th>Alamat</th>
                            <th>Total Harga</th>
                            <th>Waktu Transaksi</th>
                            <th>Status</th>
                            <th>Pilihan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>WD-61</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                                <label class="badge badge-info">On hold</label>
                            </td>
                            <td class="text-right">
                                <button class="btn btn-light">
                                <i class="mdi mdi-eye text-primary"></i>View
                                </button>
                                <button class="btn btn-light">
                                <i class="mdi mdi-close text-danger"></i>Remove
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

@endsection
