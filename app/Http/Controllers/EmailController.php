<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function sendMailRecall(Request $request){
        $validator = Validator::make(request()->all(), [
        'g-recaptcha-response' => 'recaptcha',
        recaptchaFieldName() => recaptchaRuleName()
        ]);
        if($validator->fails()) {
            return redirect()->route('notRobot');
        }
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
        Mail::to('alkornch16@gmail.com')->send(new OrderShipped($name, $request->phone, $request->email, $text));
        return redirect()->route('main');
    }
}
