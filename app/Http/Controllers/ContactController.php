<?php

namespace App\Http\Controllers;
use App\Mail\EmailMessage;
use Illuminate\Http\Request;
use  App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
        return view('pages.contact');
    }
    public function store(ContactRequest $r){
      /*  $this->validate($r,[#param1= requete et dans un tableau les regles de validation
            
        ]);*/
       
        $m=new EmailMessage($r->name,$r->email,$r->msg);#je passe le name,email,et msg et utilisan la variable $r du for-requeste ContactRequest
        Mail::to('admin@laracarte.com')->send($m);
        return "Done!";
    }
   
}
