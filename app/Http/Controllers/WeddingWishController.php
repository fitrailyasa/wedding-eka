<?php

namespace App\Http\Controllers;

use App\Models\WeddingWish;
use Illuminate\Http\Request;

class WeddingWishController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        WeddingWish::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Wish saved successfully!'
        ]);
    }

    public function index()
    {
        return WeddingWish::latest()->get();
    }
}

