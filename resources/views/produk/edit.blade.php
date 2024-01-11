@extends('produk.layout')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Edit Data Produk</div>
  <div class="card-body">
       
        <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}

            <div class="form-group mb-4">
                <label class="form-control-label">Foto</label><br>
                <input class="form-control" name="foto" type="file" id="foto"><br>
                <img src="{{ asset($produk->foto) }}" width="200" height="200" class="img img-responsive" />
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $produk->nama }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="berat">Berat</label><br>
                <input type="text" name="berat" id="berat" class="form-control" value="{{ $produk->berat }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="stok">Stok</label><br>
                <input type="text" name="stok" id="stok" class="form-control" value="{{ $produk->stok }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="harga_modal">Harga</label><br>
                <input type="text" name="harga_modal" id="harga_modal" class="form-control" value="{{ $produk->harga_modal }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="harga_jual">Harga</label><br>
                <input type="text" name="harga_jual" id="harga_jual" class="form-control" value="{{ $produk->harga_jual }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="harga_member">Harga</label><br>
                <input type="text" name="harga_member" id="harga_modal" class="form-control" value="{{ $produk->harga_member }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="detail">Detail</label><br>
                <input type="text" name="detail" id="detail" class="form-control" value="{{ $produk->detail }}">
            </div>
            <div class="col-12 save-btm save-button d-flex">          
            <input type="submit" value="Save" class="btn btn-outline-primary"></br>
            </div>        
        </form>
   
  </div>
</div>
@stop