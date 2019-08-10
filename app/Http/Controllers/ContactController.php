<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function create(){
        return view('pages.contact');
    }
    public function store(ContactRequest $r){
      /*  $this->validate($r,[#param1= requete et dans un tableau les regles de validation
            
        ]);*/
    }
}
