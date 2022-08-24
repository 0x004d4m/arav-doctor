<?php

namespace App\Http\Controllers\Web\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function view()
    {
        if(Session::has('client_token')){
            return redirect('/Client');
        }else{
            return view('client.auth.register');
        }
    }

    public function submit(Request $request)
    {
        //
    }
}
