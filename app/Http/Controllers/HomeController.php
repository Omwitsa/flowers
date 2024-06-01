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
        return redirect(env('APP_ROOT'));
    }

    public function index() {
        if (!auth()->user()){
            return view(env('APP_ROOT').'landing-page');
        }else{
            return redirect()->intended(env('APP_ROOT').'dashboard');
        }
    }

    public function dashboard() {
        $data = array(
            'title'=>'Visitors',
            'Description'=>'This is New Application',
            'author'=>'foo'
        );

        if(auth()->user()->role === 'Admin') {
            return view(env('APP_ROOT').'admin-dashboard')->with([
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

            return view(env('APP_ROOT').'category')->with([
                'categories' => $categories
            ]);
        }

        return view(env('APP_ROOT').'local-dashboard');
    }

    public function guest() {
        $categories = DB::table('categories')
                ->orderBy('id', 'desc')
                ->get();
        foreach ($categories as $key => $value) {
            $category = (object) $value;
            $category->param = Str::lower(Str::replace(' ', '-', $category->name));
        }

        return view(env('APP_ROOT').'category')->with([
            'categories' => $categories
        ]);
    }
}
