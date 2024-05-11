<?php

namespace App\Http\Controllers;
use App\Constants\Roles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategory($category) {
        $category = Str::upper(Str::replace('-', ' ', $category));
        return view('sub-category')->with([
            'category' => $category
        ]);
    }

    public function type($subCategory) {
        $category = Str::replace('__', '', substr($subCategory, 0 , 3));
        $subCategory = substr($subCategory,3);
        dd($category);
        return view('type')->with([
            'subCategory' => $subCategory
        ]);
    }
}
