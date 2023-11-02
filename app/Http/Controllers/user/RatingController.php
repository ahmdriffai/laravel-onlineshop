<?php

namespace App\Http\Controllers\user;

use App\Detailorder;
use App\Http\Controllers\Controller;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index($orderid) {
        $detailorder = Detailorder::where('order_id', $orderid)->first();
        return view('user.rating', compact('detailorder'));
    }

    public function create(Request $request){
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'rating' => 'required',
        ]);

        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');
        $order_id = $request->input('order_id');
        $rating = (float)$request->input('rating');

        // dd($product_id);
        $ratingvalid = Rating::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($ratingvalid !== null) {
            return redirect()->back()->with('error', 'user sudah memberikan rating');
        }

        $rating = Rating::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'rating' => $rating
        ]);

        return redirect()->route('user.order.detail', ['id' => $order_id])->with('success', 'Berhasil memberikan rating');
    }
}
