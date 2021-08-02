<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactoIndex(){
        return view('contacto');
    }

    public function contactoStore(StoreMessage $request){
        $contact = Message::create($request->all());
        //return $request;
        return redirect()->route('contacto.validate', 'ok');
    }

    public function contactoStoreValidate($validate){
        return view('contacto', compact('validate'));
    }
}
