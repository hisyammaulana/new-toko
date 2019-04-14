@extends('administrator.layouts.template')

@section('content')

<div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Input Sub Kategori</h4>
                <form class="forms-sample" action="{{ route('subcategory.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Sub Kategori</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Sub Kategori">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Nama Kategori</label>
                        <select class="form-control" name="category">
                          <option>PILIH KATEGORI</option>
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select >
                    </div>
                    <button type="submit" class="btn btn-primary mr-1">Tambah</button>
                </form>
                </div>
            </div>
        </div>


    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Sub Category</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Sub Kategori</th>
                      <th>Kategori</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                    @php($no = 1)
                    @foreach ($data as $dat)
                  <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $dat->sub_name }}</td>
                      <td>{{ $dat->name }}</td>
                      <td>
                        {{-- <a class="btn btn-light" data-subid="{{ $dat->id }}" data-catid="{{ $dat->name }}" data-sub="{{ $dat->sub_name }}" data-toggle="modal" data-target="#editSub"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</a> --}}
                        <button class="btn btn-light" data-target="#edit{{$dat->id}}" data-toggle="modal">Edit</button>
                        <form class="btn btn-light" action="{{route('subcategory.destroy', $dat->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <button ><i class="mdi mdi-close text-danger"></i> Hapus</button>
                        </form>
                      </td>
                  </tr>
                  <div class="modal fade" id="edit{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Edit Sub Kategori</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="forms-sample" action="{{ route('subcategory.update', 'id') }}" method="POST">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="exampleInputName1">Nama Sub Kategori</label>
                                <input type="text" class="form-control" name="name" value="{{$dat->sub_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Kategori</label>
                                    <select class="form-control" id="sub_id" name="category">
                                        <option>PILIH KATEGORI</option>
                                        @foreach ($categories as $category)
                                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select >
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
