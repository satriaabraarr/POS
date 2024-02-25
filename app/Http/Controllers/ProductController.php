<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function foodBeverage()
    {
        return view('product.food_beverage');
    }

    public function beautyHealth()
    {
        return view('product.beauty_health');
    }

    public function homeCare()
    {
        return view('product.home_care');
    }

    public function babyKid()
    {
        return view('product.baby_kid');
    }

}
