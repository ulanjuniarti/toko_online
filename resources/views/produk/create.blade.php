@extends('produk.layout')

@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Tambah Data Produk</div>
  <div class="card-body">
       
    <form action="{{ url('produk') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
          <label class="form-control-label">Foto</label></br>
          <input class="form-control" name="foto" type="file" id="foto"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="nama">Nama</label></br>
          <input type="text" name="nama" id="nama" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="berat">Berat</label></br>
          <input type="text" name="berat" id="berat" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="stok">Stok</label></br>
          <input type="text" name="stok" id="stok" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="harga_modal">Harga Modal</label></br>
          <input type="text" name="harga_modal" id="harga_modal" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="harga_jual">Harga Jual</label></br>
          <input type="text" name="harga_jual" id="harga_jual" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="harga_member">Harga Member</label></br>
          <input type="text" name="harga_member" id="harga_member" class="form-control"></br>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="detail">Detail</label></br>
          <input type="text" name="detail" id="detail" class="form-control"></br>
        </div>
        <div class="col-12 save-btm save-button d-flex">          
        <input type="submit" value="Save" class="btn btn-outline-primary"></br>
        </div>
    </form>
   
  </div>
</div>
@stop

