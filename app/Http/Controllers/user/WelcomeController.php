<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function index()
    {
        //menampilkan data produk dihalamam utama user dengan limit 10 data
        //untuk di carousel
        $produks = DB::table('products')->limit(10)->get();
        $produkrcmd = [];
        if (Auth::user()) {
            $response = Http::get('http://127.0.0.1:105/predict/'.Auth::user()->id.'/30');

            if ($response->status() == 200) {
                // dd($response->body());
                $produkrcmd = json_decode($response->body(), true);
                // dd($produkrcmd);
            }
        }


        return view('user.welcome', compact('produks', 'produkrcmd'));
    }

    public function kontak()
    {
        return view('user.kontak');
    }
}
