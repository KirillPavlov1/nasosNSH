<?php

namespace App\Http\Controllers;
use App\Models\pump;


class Frontend extends Controller
{
    public function index(){
        $pumps = pump::all();
        foreach ($pumps as $pump){
            $pump->translation = Translate::translit_path_en($pump->name);
            $pump->save();
        }
        // $pumps->update();
        return view('index', ['pumps' => $pumps]);
    }
}
