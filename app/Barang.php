<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function pesanan_detail() 
    {
        return $this->hasMany('App\PesananDetail','barang_id', 'id');
    }

    protected $table = "barangs";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_barang','gambar','asal','kategori','harga','keterangan'
    ];
}
