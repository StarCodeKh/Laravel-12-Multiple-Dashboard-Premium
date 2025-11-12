<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function list()
    {
        return view('apps.list');
    }
}
