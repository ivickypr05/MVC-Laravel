<?php

namespace App\Http\Controllers;

use App\Models\DatabarangModel;
use Illuminate\Support\Facades\DB;

class DatabarangController extends Controller
{
    public function __construct()
    {
        $this->DatabarangModel = new DatabarangModel();
    }

    public function index(){
        $databarang = DatabarangModel::all();
        
        return view('databarang', $databarang);
    }

    public function home(){
        $databarang = DatabarangModel::all();
        
        return view('home', compact ('databarang'));
    }

}
