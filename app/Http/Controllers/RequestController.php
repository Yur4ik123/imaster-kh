<?php

namespace App\Http\Controllers;



use App\Http\Requests\Request;

class RequestController extends Controller
{
    public function request(Request $request){
        return $request;
    }
}
