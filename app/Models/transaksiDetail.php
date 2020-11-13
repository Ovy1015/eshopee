<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiDetail extends Model
{
    use HasFactory;

    protected $table = "transaksiDetail";

    public function detail() {
        return $this->belongTo('App\Models\Transaksi');
    }

    public function transaksiDetails() {
        return $this->belongTo('App\Models\Barang');
    }

}
