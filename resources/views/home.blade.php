@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-5">
        <img src="{{ url('images/logomenteng.png') }}" class="rounded mx-auto d-block" width="300" alt="">
    </div>
    @auth
    <div class="col-md-12">
            <a href="{{ url('data-gambar') }}" class="btn btn-info mb-4"><i class="fa fa-database"></i> Dashboard admin</a>    
    </div>
    @else
    @endauth
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $barang-> nama_barang}}</h5>
                        <p class="card-text">
                        <strong>Harga : </strong>Rp. {{number_format ($barang->harga)}} <br>
                        <strong>Stok : </strong>{{$barang->stok}} <br>
                        <hr>
                        <strong>Keterangan : </strong> <br>
                        {{ $barang->keterangan }}
                        </p>
                        <a href="{{ url('lihat') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-eye"></i> lihat</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
