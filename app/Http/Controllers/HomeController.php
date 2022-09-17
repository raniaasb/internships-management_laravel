<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype=Auth::user()->userType;

        if($usertype=='1'){

            return view('admin.home');
        }
        else
        {
            return view('user.home');

        }

    }

    public function index()
    {
            return view('user.home');
    }
}
