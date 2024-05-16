<?php

namespace App\Http\Controllers;
use App\Constants\Roles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Variety;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function subCategory($categoryName) {
        $categoryName = Str::upper(Str::replace('-', ' ', $categoryName));
        $category = Category::firstWhere('name', $categoryName);
        $subCategories  = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$categoryName]);
        foreach ($subCategories as $key => $value) {
            $subCategory = (object) $value;
            $subCategory->param = Str::lower(Str::replace(' ', '-', $subCategory->Name));
        }
        return view('sub-category')->with([
            'category' => (object) $category,
            'subCategories' => $subCategories
        ]);
    }

    public function variety($subCategory) {
        $categoryId = Str::replace('--', '', substr($subCategory, 0 , 3));
        $category = Category::firstWhere('id', $categoryId);
        $subCategoryName = Str::upper(Str::replace('-', ' ', substr($subCategory,3)));
        $subCategory = SubCategory::firstWhere('Name', $subCategoryName);
        $varieties= DB::select('SELECT * FROM variety WHERE Category = ? AND SubCategory = ?', [$category->name, $subCategoryName]);
        
        foreach ($varieties as $key => $value) {
            $variety = (object) $value;
            $variety->param = $categoryId . '--' . $subCategory->id . '--' . $variety->VarietyCode;
        }

        return view('variety')->with([
            'category' => $category,
            'subCategory' => $subCategory,
            'varieties' => $varieties,
        ]);
    }

    public function addToCart($param)
    {
        $collection = Str::of($param)->explode('--');
        $category = Category::firstWhere('id', $collection->get(0));
        $subCategory = SubCategory::firstWhere('id', $collection->get(1));
        $varietyCode = $collection->get(2);
        $length = 'len60';
        $packRate = 180;
        $boxType = 'len60';
        $quantity = 30;
        $stems =  $packRate * $quantity;
        $variety = Variety::firstWhere('VarietyCode', $varietyCode);
        // $request->session()->push('user.teams', 'developers');

        // $order_lines  = session('order_lines');
        // $order_lines = collect();
        // $order_lines = collect([
        //     ['varietyCode' => $variety->VarietyCode, 'VarietyName' => $variety->VarietyName, 'subCategory' => $subCategory->Name, 'category' => $category->name, 'Length' => substr($length,3), 'BoxType' => $boxType, 'StemQty' => $stems, 'PackRate' => $packRate, 'Boxes' => $quantity]
        // ]);
        $order_lines = collect(['varietyCode' => $variety->VarietyCode, 'VarietyName' => $variety->VarietyName, 'subCategory' => $subCategory->Name, 'category' => $category->name, 'Length' => substr($length,3), 'BoxType' => $boxType, 'StemQty' => $stems, 'PackRate' => $packRate, 'Boxes' => $quantity]);
        Session::push('order_lines', $order_lines);
        // $order_lines->push(['VarietyId' => $variety->id, 'VarietyRangeId' => $variety->VarietyRangeId, 'Length' => substr($this->length,3), 'BoxType' => $this->packRate->id, 'StemQty' => $variety->stems, 'PackRate' => $variety->packrate, 'Boxes' => $variety->quantity, 'Farm' => $selectedBrand->farm, 'VarietyName' => $variety->VarietyName]);
        toastr()->success('Item added successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        // session(['order_lines' => $this->order_lines]);

        $subCategory->param = Str::lower(Str::replace(' ', '-', $subCategory->Name));
        $param = "/variety/$category->id--$subCategory->param";
        return redirect($param);
    }
}
