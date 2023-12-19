@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-4">
        <h1 class="mx-auto d-block">DASHBOARD ADMIN</h1>
    </div>
    <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard Admin</li>
              </ol>
          </nav>
    </div>
    <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>    
            <a href="{{ url('/create-gambar') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah data </a>    
        </div>
       
        <div class="table-responsive">
        
            <table class="table table-hover">
            
                <tr class="bg-info">
                    <th>#</th>
                    <th>id</th>
                    <th>nama_barang</th>
                    <th>Gambar</th>
                    <th>asal</th>
                    <th>kategori</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>keterangan</th>
                    <th>action</th>
                </tr>
                @foreach ($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>
                    <a href="{{ asset('uploads/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                    <!--<img src="{{ url ('uploads')}}/{{ $item->gambar }}" class="rounded mx-auto d-block" width="25%" alt=""></td>-->
                    </td>
                    <td>{{ $item->asal }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                    <a href="{{ url('edit-gambar',$item->id) }}"><i class="fas fa-edit"></i></a>
                    <a href="{{ url('delete-gambar',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
            
        </div>
        
    </div>
</div>
@endsection
