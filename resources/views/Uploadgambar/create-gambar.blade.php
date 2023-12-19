@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-md-12">
            <a href="{{ url('/data-gambar') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>    
        </div>
        <div class="col-md-12 mt-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/data-gambar') }}">Dashboard Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <form action="{{ url('simpan-gambar') }}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Isi Nama Barang">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Asal RW</label>
                            <select class="form-control" id="asal" name="asal" placeholder="Isi Asal RW">
                              <option>RW 1</option>
                              <option>RW 2</option>
                              <option>RW 3</option>
                              <option>RW 4</option>
                              <option>RW 5</option>
                              <option>RW 6</option>
                              <option>RW 7</option>
                              <option>RW 8</option>
                              <option>RW 9</option>
                              <option>RW 10</option>
                              <option>RW 11</option>
                              <option>RW 12</option>
                              <option>RW 13</option>
                              <option>RW 14</option>
                              <option>RW 15</option>
                              <option>RW 16</option>
                              <option>RW 17</option>
                              <option>RW 18</option>
                              <option>RW 19</option>
                              <option>RW 20</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" placeholder="Isi Kategori">
                              <option>Makanan & Minuman</option>
                              <option>Kerajinan Tangan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Isi Harga">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok yang ada">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Barang" rows="3"></textarea>
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                      <div class="col-md-6">
                          <img src="{{ url ('images/logoaja.png') }}" class="rounded mx-auto d-block my-auto" width="100%" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
