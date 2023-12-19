@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 mb-4">
        <h1 class="mx-auto d-block">Edit Data</h1>
    </div>
        <div class="col-md-12">
            <a href="{{ url('data-gambar') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>    
        </div>
        <div class="col-md-12 mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/data-gambar') }}">Dashboard Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data {{$dt->nama_barang}}</li>
            </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$dt->nama_barang}}</h2>
                </div>
                <div class="card-body">
                    
                    <div class="col-md-6">
              
                        <div class="row">
                        <form action="{{ url('update-gambar', $dt->id ) }}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $dt->nama_barang }}">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Asal RW</label>
                            <select class="form-control" id="asal" name="asal" value="{{ $dt->asal }}">
                              <option value="RW 1"@if($dt->asal=='RW 1') selected='selected' @endif >RW 1</option>
                              <option value="RW 2"@if($dt->asal=='RW 2') selected='selected' @endif >RW 2</option>
                              <option value="RW 3"@if($dt->asal=='RW 3') selected='selected' @endif >RW 3</option>
                              <option value="RW 4"@if($dt->asal=='RW 4') selected='selected' @endif >RW 4</option>
                              <option value="RW 5"@if($dt->asal=='RW 5') selected='selected' @endif >RW 5</option>
                              <option value="RW 6"@if($dt->asal=='RW 6') selected='selected' @endif >RW 6</option>
                              <option value="RW 7"@if($dt->asal=='RW 7') selected='selected' @endif >RW 7</option>
                              <option value="RW 8"@if($dt->asal=='RW 8') selected='selected' @endif >RW 8</option>
                              <option value="RW 9"@if($dt->asal=='RW 9') selected='selected' @endif >RW 9</option>
                              <option value="RW 10"@if($dt->asal=='RW 10') selected='selected' @endif >RW 10</option>
                              <option value="RW 11"@if($dt->asal=='RW 11') selected='selected' @endif >RW 11</option>
                              <option value="RW 12"@if($dt->asal=='RW 12') selected='selected' @endif >RW 12</option>
                              <option value="RW 13"@if($dt->asal=='RW 13') selected='selected' @endif >RW 13</option>
                              <option value="RW 14"@if($dt->asal=='RW 14') selected='selected' @endif >RW 14</option>
                              <option value="RW 15"@if($dt->asal=='RW 15') selected='selected' @endif >RW 15</option>
                              <option value="RW 16"@if($dt->asal=='RW 16') selected='selected' @endif >RW 16</option>
                              <option value="RW 17"@if($dt->asal=='RW 17') selected='selected' @endif >RW 17</option>
                              <option value="RW 18"@if($dt->asal=='RW 18') selected='selected' @endif >RW 18</option>
                              <option value="RW 19"@if($dt->asal=='RW 19') selected='selected' @endif >RW 19</option>
                              <option value="RW 20"@if($dt->asal=='RW 20') selected='selected' @endif >RW 20</option>

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" value="{{ $dt->kategori }}">
                              <option value="Makanan & Minuman"@if($dt->kategori=='Makanan & Minuman') selected='selected' @endif >Makanan & Minuman</option>
                              <option value="Kerajinan Tangan"@if($dt->kategori=='Kerajinan Tangan') selected='selected' @endif >Kerajinan Tangan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $dt->harga }}">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="{{ $dt->stok }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan">{{ $dt->keterangan }}</textarea>
                          </div>

                          

                          <div class="form-group">
                          <img src="{{ url ('uploads')}}/{{ $dt->gambar }}" class="rounded mx-auto d-block" width="50%" alt="">
                          </div>
                          <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </form>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
