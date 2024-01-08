<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;
use App\Models\Like;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops'=>$shops]);
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function showMypage()
    {
        return view('mypage');
    }
}
