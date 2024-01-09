<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $subs = config('subs');
        return view('pages.landingpage',compact('subs'));
    }
    public function show($id)
    {
        $subs = config('subs');

        $sub= collect($subs)->firstWhere('id', $id);

        return view('sub', compact('sub'));
    }
}
