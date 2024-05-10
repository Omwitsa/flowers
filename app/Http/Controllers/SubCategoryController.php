<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategory($category) {
        return view('sub-category')->with([
            'category' => $category
        ]);
    }

    public function type($subCategory) {
        return view('type')->with([
            'subCategory' => $subCategory
        ]);
    }
}
