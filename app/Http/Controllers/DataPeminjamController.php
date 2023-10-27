<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjam;

class DataPeminjamController extends Controller
{
    public function index(){
        $data_peminjam = DataPeminjam::all();
        $jumlah_peminjam = $data_peminjam->count();
        return view('data_peminjam.index', compact('data_peminjam', 'jumlah_peminjam'));
    }

    public function create(){
        return view('data_peminjam.create');
    }
}
