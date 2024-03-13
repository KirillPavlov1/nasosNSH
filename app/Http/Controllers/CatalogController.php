<?php

namespace App\Http\Controllers;
use App\Models\pump;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    public function index(){
        $pumps = pump::all()->sortBy('temp');
        foreach ($pumps as $pump){
            $pump->translation = Translate::translit_path_en($pump->name);
            $pump->save();
        }
        // $pumps->update();
        return view('catalog', ['pumps' => $pumps]);
    }
}
