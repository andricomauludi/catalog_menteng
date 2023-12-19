<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class LihatController extends Controller
{
    public function __construct()
    {
        
    }
    public function index($id)
    {
        $barang = Barang::where('id',$id)->first();

        return view('lihat.index', compact('barang'));
    }
}
