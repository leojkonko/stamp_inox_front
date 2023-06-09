<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\Products\Services\ProductService;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(SiteService $alternates, Request $request)
    {
        return view('front.pages.solutions');
    }

}
