@extends('administrator.layouts.template')

@section('content')

@include('administrator.layouts.partial.flash_message')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Input Kategori</h4>
            <form class="forms-sample" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputName1">Nama Kategori</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Nama Kategori">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <p>{{ $errors->first('name') }}</p>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Pilih Gambar Kategori</label>
                    <input type="file" name="image"  class="form-control">
                    {{-- @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <p>{{ $errors->first('name') }}</p>
                        </span>
                    @endif --}}
                </div>
                <button type="submit" class="btn btn-primary mr-1">Tambah</button>
            </form>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Category</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kategori</th>
                      <th>Gambar kategori</th>
                      <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($categories as $category)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset('category/' .$category->image) }}"></td>
                        <td>
                            <a class="btn btn-light" data-catid="{{ $category->id }}"  data-toggle="modal" data-category="{{ $category->name }}" data-img="{{ $category->image }}" data-target="#editCategory"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</a>

                            <form class="btn btn-light" action="{{route('category.destroy', $category->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                            </form>
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

    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel-2">Edit Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="{{ route('category.update', 'test') }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="" id="cat_id" >
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Kategori</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <p>{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                    </div>


                    <div class="text-center">
                            <button type="submit" class="btn btn-primary mr-1">Perbarui</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection
