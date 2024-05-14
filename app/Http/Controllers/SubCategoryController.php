<?php

namespace App\Http\Controllers;
use App\Constants\Roles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function subCategory($category) {
        $category = Str::upper(Str::replace('-', ' ', $category));
        return view('sub-category')->with([
            'category' => $category
        ]);
    }

    public function variety($subCategory) {
        $category = Str::replace('__', '', substr($subCategory, 0 , 3));
        if($category === '1'){
            $category = 'AAA ROSES';
        }
        if($category === '2'){
            $category = 'BELLISSIMA';
        }
        if($category === '3'){
            $category = 'WILD BLOOMS';
        }
        if($category === '4'){
            $category = 'MIXED BOX';
        }

        $subCategory = Str::upper(Str::upper(Str::replace('-', ' ', substr($subCategory,3))));
        $varieties= DB::select('SELECT * FROM variety WHERE Category = ? AND SubCategory = ?', [$category, $subCategory]);
        return view('variety')->with([
            'category' => $category,
            'subCategory' => $subCategory,
            'varieties' => $varieties,
        ]);
    }
}
