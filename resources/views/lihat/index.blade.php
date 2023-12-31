@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>    
        </div>
        <div class="col-md-12 mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$barang->nama_barang}}</li>
            </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$barang->nama_barang}}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url ('uploads')}}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3>{{$barang->nama_barang}}</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>{{$barang->keterangan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
