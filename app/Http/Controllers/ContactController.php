<?php

namespace App\Http\Controllers;
use App\Mail\EmailMessage;
use Illuminate\Http\Request;
use  App\Models\Message;
use  App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
        return view('pages.contact');
    }
    public function store(ContactRequest $r){
        
        $msg=new Message;
        $msg->nom=$r->name;
        $msg->email=$r->email;
        $msg->message=$r->msg;
        $msg->save();
      /*  $this->validate($r,[#param1= requete et dans un tableau les regles de validation
            
        ]);*/
       
        $m=new EmailMessage($msg);#je passe le name,email,et msg et utilisan la variable $r du for-requeste ContactRequest
        Mail::to(config('laracarte.laracarte_support'))->send($m); #en lieu et place d'utiliser send on va utiliser queue pour nos fil d'attente
        return redirect()->route('home_path'); #rediriger vers la page home
    }
    
}
