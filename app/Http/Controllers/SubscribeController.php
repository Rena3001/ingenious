<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Subscriber::firstOrCreate([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', true);
    }
}
