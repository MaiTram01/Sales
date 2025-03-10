<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $sl = Slide::all();
        return view('trangchu', compact('sl'));
    }
    public function getProducts()
    {
        $pr = products::take(10)->get();
        return view('products', compact('pr'));
    }
}
