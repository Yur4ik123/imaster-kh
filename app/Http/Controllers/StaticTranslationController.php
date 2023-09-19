<?php

namespace App\Http\Controllers;



class StaticTranslationController extends Controller
{
    public function index($locale)
    {
        $file = base_path().'/resources/lang/'.$locale.'.json';
        return file_get_contents($file);
    }
}
