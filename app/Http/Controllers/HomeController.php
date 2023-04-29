<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $clientIP = $request->ip();
        return Inertia::render('Home/Show', ['clientIP' => $clientIP]);
    }
}
