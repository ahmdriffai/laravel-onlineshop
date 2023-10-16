<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'rating' => 'required',
        ]);

        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');
        $rating = (float)$request->input('rating');

        $ratingvalid = Rating::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($ratingvalid !== null) {
            return redirect()->back()->with('error', 'user sudah memberikan rating');
        }

        $rating = Rating::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'rating' => $rating
        ]);

        return redirect()->back()->with('success', 'Berhasil memberikan rating');
    }
}
