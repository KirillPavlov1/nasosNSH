<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMailRecall(Request $request){
        if ($request->name == NULL){
            $name = '';
        }else{
            $name = $request->name;
        }
        if ($request->text == NULL){
            $text = '';
        }else{
            $text = $request->text;
        }
        Mail::to('alkornch16@gmail.com')->send(new OrderShipped($name, $request->phone, $text));
        return redirect()->route('main');
    }
}
