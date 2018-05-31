<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brand = Brand::pluck('brand_id')->all();
        $brand1 = Brand::pluck('brand_id')->all();
        $brand2 = Brand::pluck('brand_id')->all();
        dd(array_values(array_unique(array_merge($brand, $brand1, $brand2))));
    }
}
