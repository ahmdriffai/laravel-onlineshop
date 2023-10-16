<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    function index() {
        $users = User::paginate(200);
        $products = Product::all();
        return view('super-admin.index', compact('users', 'products'));
    }

    function generateUser(Request $request) {
        $request->validate([
            'number' => 'required'
        ]);

        $numberGenerate = (int) $request->input('number');
        $factory = factory(User::class, $numberGenerate)->create();
        return $factory;
        return redirect()->back()->with('success', 'Berhasil generate');
    }
}
