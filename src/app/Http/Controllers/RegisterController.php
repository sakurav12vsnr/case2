<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function redirectPath
    {
        return '/thanks';
    }
}
