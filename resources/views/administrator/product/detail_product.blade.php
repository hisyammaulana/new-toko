@extends('administrator.layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Detail Produk</h4>
            <div class="row">
                <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <img src="{{ asset('product/' .$data->image) }}" class="img-lg rounded" alt="profile image"/><br>
                                <h4>{{ $data->name }}</h4>
                            </div>
                                <p class="mt-4 card-text">{{ $data->deskripsi }}</p>
                        </div>

                        <h4 value="{{ $data->category_id }}">Kategori : {{ $data->category_name }}</h4>

                        <h4>Sub Kategori : {{ $data->sub_name }}</h4>


                        <h4>Daftar Harga</h4>
                        <div class="row">
                            <div class="col-12">
                              <div class="table-responsive">
                                <table  class="table">
                                  <thead>
                                    <tr>
                                        <th>Satuan</th>
                                        <th>Setengah Lusin</th>
                                        <th>Lusin</th>
                                        <th>Setengah Grosir</th>
                                        <th>Grosir</th>
                                        <th>Trim</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                          <td>Rp. {{ $data->satuan }}</td>
                                          <td>Rp. {{ $data->set_lusin }}</td>
                                          <td>Rp. {{ $data->lusin }}</td>
                                          <td>Rp. {{ $data->set_grosir }}</td>
                                          <td>Rp. {{ $data->grosir }}</td>
                                          <td>Rp. {{ $data->trim }}</td>
                                        </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <h4>Stok Tersedia : {{ $data->stok }}</h4>


                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

@endsection
