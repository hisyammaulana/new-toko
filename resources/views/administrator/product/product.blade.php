@extends('administrator.layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Produk</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No. </th>
                      <th>Nama Produk</th>
                      <th>Kategori</th>
                      <th>Sub Kategori</th>
                      <th>Deskripsi</th>
                      <th style="center">Actions</th>
                  </tr>
                </thead>
                <tbody>

                      @php($no = 1)
                      @foreach ($data as $dat)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dat->name }}</td>
                        <td>{{ $dat->category_name }}</td>
                        <td>{{ $dat->sub_name }}</td>
                        <td>{{ $dat->deskripsi }}</td>
                        <td>
                            <a class="btn btn-light" href="{{ route('product.show', $dat->id) }}"><i class="mdi mdi-eye text-primary"></i> Detail</a>
                            <form action="{{route('product.destroy', $dat->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-light" ><i class="mdi mdi-close text-danger"></i> Hapus</button>
                            </form>
                            {{-- <a class="btn btn-light" href="{{ route('product.destroy') }}"><i class="mdi mdi-delete text-danger"></i> Hapus</a> --}}
                            <a class="btn btn-light" href="{{ route('product.edit', $dat->id) }}"><i class="mdi mdi-tooltip-edit text-danger"></i> Edit</a>
                        </td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
