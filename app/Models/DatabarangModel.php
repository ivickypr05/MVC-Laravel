<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabarangModel extends Model
{
    // public function all(){
    //     return DB::table('data_barang')->get();
    // }

    protected $table = 'data_barang';
}