<?php

namespace App\Http\Controllers;
use App\Models\pump;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($translation){
        $pump = pump::where('translation', $translation)->first();
        return view('product', ['pump' => $pump]);
    }
}
