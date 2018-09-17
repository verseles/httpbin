<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function get(Request $request)
    {
        return $request->all();
    }

    public function post(Request $request)
    {
        return $request->all();
    }

    public function any(Request $request)
    {
        return $request->all();
    }
}
