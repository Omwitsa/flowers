<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function index() {
        if (!auth()->user()){
            return view('landing-page');
        }else{
            return redirect()->intended('/dashboard');
        }
    }

    public function dashboard() {
        $data = array(
            'title'=>'Visitors',
            'Description'=>'This is New Application',
            'author'=>'foo'
        );

        if(auth()->user()->role === 'Admin') {
            return view('admin-dashboard')->with([
                'data' => (object) $data
            ]);
        }

        if(auth()->user()->role === 'Foreign') {
            $categories = DB::table('categories')
                ->orderBy('id', 'desc')
                ->get();
            foreach ($categories as $key => $value) {
                $category = (object) $value;
                $category->param = Str::lower(Str::replace(' ', '-', $category->name));
            }

            return view('category')->with([
                'categories' => $categories
            ]);
        }

        return view('local-dashboard');
    }

    public function guest() {
        $categories = DB::table('categories')
                ->orderBy('id', 'desc')
                ->get();
        foreach ($categories as $key => $value) {
            $category = (object) $value;
            $category->param = Str::lower(Str::replace(' ', '-', $category->name));
        }

        return view('category')->with([
            'categories' => $categories
        ]);
    }
}
