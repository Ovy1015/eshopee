<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table= "Transaksi";

    public function Transaksi_details() {
        return $this->hasMany('App\Models\transaksiDetail');
    }

}
