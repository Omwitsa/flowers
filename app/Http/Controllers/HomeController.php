<?php

namespace App\Http\Controllers;

use App\Constants\Roles;
use Illuminate\Http\Request;
use stdClass;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function logout1(Request $request) {
        auth()->logout();
        // Auth::logout();
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // auth()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }


    public function index() {
        // if(Auth::check()) {
        //     return view('local-dashboard');
        // }
        if (!auth()->user()){
            return view('welcome');
            // return redirect()->route('login');
        }else{
            return redirect()->intended('/dashboard');
            //return view('local-dashboard');
        //     return View::make('home.basic')
        //         ->with('basic1', 'Not Authorized');
        }
        
        // // return redirect('/users');
        // // return view('dashboard');
        // $data = array(
        //     'title'=>'Visitors',
        //     'Description'=>'This is New Application',
        //     'author'=>'foo'
        // );

        // $user = User::where('usercode','=','Womwitsa')->first();
        // if($user->role == 1) {
        //     return view('admin-dashboard')->with([
        //         'data' => (object) $data
        //     ]);
        // }

        // if($user->role == 2) {
        //     return view('foreign-dashboard');
        // }

        // // $obj = new stdClass();
        // // $obj->property = 'Here we go';

        // // var_dump($obj);
        // // echo '<pre>'; print_r($user->role); echo '</pre>';


        // // 
     
        

        // // 

        // return view('local-dashboard');
    }

    public function dashboard() {
        
        // if(Auth::check()) {
        //     return view('local-dashboard');
        // }
        // if (!Auth::user()){
        //     return view('welcome');
        //     // return redirect()->route('login');
        // }else{
        //     return view('local-dashboard');
        // //     return View::make('home.basic')
        // //         ->with('basic1', 'Not Authorized');
        // }
        
        // // return redirect('/users');
        // // return view('dashboard');
        $data = array(
            'title'=>'Visitors',
            'Description'=>'This is New Application',
            'author'=>'foo'
        );

        $user = User::where('usercode','=','Admin')->first();

        if(auth()->user()->role === 'Admin') {
            return view('admin-dashboard')->with([
                'data' => (object) $data
            ]);
        }

        if(auth()->user()->role === 'Foreign') {
           return view('foreign-dashboard');
        }

        // // $obj = new stdClass();
        // // $obj->property = 'Here we go';

        // // var_dump($obj);
        // // echo '<pre>'; print_r($user->role); echo '</pre>';


        // // 
     
        

        // // 

        return view('local-dashboard');
    }
}
