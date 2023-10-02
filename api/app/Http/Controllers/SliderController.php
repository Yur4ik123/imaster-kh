<?php

namespace App\Http\Controllers;

use App\Models\Slide;

class SliderController extends Controller
{
    public function index()
    {
            $slides = Slide::with(['translation'])->where('is_published',  true )->orderBy('created_at', 'desc')->get();
        return $slides;
    }
}
