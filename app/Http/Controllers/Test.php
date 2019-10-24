<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function __invoke(Request $rq)
    {
        return $rq->session()->all();
    }
}
