<?php

namespace App\Http\Controllers;

use App\Models\ViewModel;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function tambahView()
    {
        $beranda = ViewModel::firstOrNew([]);
        $beranda->jumlah_view++;
        $beranda->save();

        return response()->json([
            'jumlah_view' => $beranda->jumlah_view
        ]);
    }
}
