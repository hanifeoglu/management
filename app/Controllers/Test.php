<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{

    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }
}