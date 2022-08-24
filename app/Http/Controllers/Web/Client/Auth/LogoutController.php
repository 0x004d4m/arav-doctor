<?php

namespace App\Http\Controllers\Web\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function submit(Request $request)
    {
        Session::forget('client_token');
        return redirect('/Client/Login');
    }
}
