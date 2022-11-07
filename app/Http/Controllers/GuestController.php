<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest');
    }

}
