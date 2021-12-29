<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index_method()
    {
        return view('frontend.index',[
            'indexs' => Booking::where('status','show')->get(),
        ]);
    }
}
