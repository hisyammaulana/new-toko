@extends('administrator.layouts.template')

@section('content')

<div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Produk</h4>
                <form class="form-sample" enctype="multipart/form-data" action="{{ route('product.store') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga Satuan</label>
                        <div class="col-sm-9">
                        <input type="text" name="satuan" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option>-- Pilih Kategori --</option>
                                @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga 1/2 Lusin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="set_lusin" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sub Kategori</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="sub_category_id">
                            <option>-- Pilih Sub Kategori --</option>
                            @foreach ($sub as $subs)
                            <option value="{{ $subs->id }}">{{ $subs->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Lusinan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lusin" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <input name="image" type="file" class="dropify"  id="image"/>
                            </div>
                        </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga 1/2 Grosir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="set_grosir" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi Produk</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Grosir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="grosir" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Stok</label>
                            <div class="col-sm-9">
                            <input type="text" name="stok" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Trim</label>
                                <div class="col-sm-9">
                                    <input type="text" name="trim" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
</div>

@endsection
