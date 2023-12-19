<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $barang = Barang::latest()->get();
        return view('Uploadgambar.data-gambar',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadgambar.create-gambar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new Barang;
            $dtUpload->nama_barang = $request->nama_barang;
            $dtUpload->gambar = $namaFile;
            $dtUpload->asal = $request->asal;
            $dtUpload->kategori = $request->kategori;
            $dtUpload->harga = $request->harga;
            $dtUpload->stok = $request->stok;
            $dtUpload->keterangan = $request->keterangan;

            $nm->move(public_path().'/uploads',$namaFile);
            $dtUpload->save();
            
            return redirect('data-gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Barang::findorfail($id);
        return view('Uploadgambar.edit-gambar',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Barang::findorfail($id);
        $awal = $ubah->gambar;

        $dt = [
            'nama_barang' => $request['nama_barang'],
            'gambar'=>$awal,

        ];
        $request->gambar->move(public_path().'/uploads', $awal);
        $ubah->update($dt);
        return redirect('data-gambar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Barang::findorfail($id);
         
        $file = public_path('/uploads').$hapus->gambar;
        //cek jika ada gambar

        if (file_exists($file)){
            //maka hapus file di folder public/uploads
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
