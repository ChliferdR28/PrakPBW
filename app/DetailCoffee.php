<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailCoffee extends Model
{
    protected $table = 'detailcoffee';

    protected $fillable = [
        'id_coffee',
        'qty',
        'tanggal_pembelian'
    ];

    
}
