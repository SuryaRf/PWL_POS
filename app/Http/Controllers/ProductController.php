<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() { return view('products.food_beverage', ['category' => 'Food & Beverage']); }
    public function beautyHealth() { return view('products.beauty_health', ['category' => 'Beauty & Health']); }
    public function homeCare() { return view('products.home_care', ['category' => 'Home Care']); }
    public function babyKid() { return view('products.baby_kid', ['category' => 'Baby & Kid']); }
}
