<?php

namespace App\Http\Controllers;
use App\Models\pump;


class Frontend extends Controller

{
    public function notRobot(){
        return view('notRobot');
    }

    public function index(){
        $pumps = pump::all()->sortBy('temp');
        foreach ($pumps as $pump){
            $pump->translation = Translate::translit_path_en($pump->name);
            $pump->save();
        }
        // $pumps->update();
        return view('index', ['pumps' => $pumps]);
    }
}
