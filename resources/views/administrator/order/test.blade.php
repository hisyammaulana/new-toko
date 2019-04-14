<form class="forms-sample" action="{{ route('test') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputName1">ID Product Cart</label>
        <input type="text" name="product_cart_id" value="{{ old('name') }}" class="form-control " id="name" placeholder="ID Product Cart">
    </div>

    <div class="form-group">
        <label for="exampleInputName1">Pilih Gambar Kategori</label>
        <input type="file" name="image"  class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mr-1">Tambah</button>
</form>
