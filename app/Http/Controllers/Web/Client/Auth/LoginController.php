<?php

namespace App\Http\Controllers\Web\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function view()
    {
        if(Session::has('client_token')){
            return redirect('/Client');
        }else{
            return view('client.auth.login');
        }
    }

    public function submit(Request $request)
    {
        Session::flash('Message', __('website.loginSuccess'));
        Session::flash('Color', "success");
        Session::put('client_token','1');
        return redirect('/Client');
    }
}
