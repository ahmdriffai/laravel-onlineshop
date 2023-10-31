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
        // dd(env('RECOMENDER_HOST') . ':' . env('RECOMENDER_PORT'). '/predict');
        //menampilkan data produk dihalamam utama user dengan limit 10 data
        //untuk di carousel
        $produks = DB::table('products')->limit(10)->get();
        $produkrcmd = [];
        if (Auth::user()) {
            $response = Http::post(env('RECOMENDER_HOST') . ':' . env('RECOMENDER_PORT'). '/predict', [
                'email' => Auth::user()->email,
                'top_n' => 30
            ]);

            if ($response->status() == 200) {
                // dd($response->body());
                $produkrcmd = json_decode($response->body(), true);
                // dd($produkrcmd);
            }else{
                $produkrcmd = [];
            }
        }


        return view('user.welcome', compact('produks', 'produkrcmd'));
    }

    public function kontak()
    {
        return view('user.kontak');
    }
}
