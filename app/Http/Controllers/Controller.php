<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        // if (!Auth::user()) {
        //     return redirect('/login');
        // }
        
        $user = Auth::user();
        // $tokens = $user->tokens;
        // // dd($user);
        // return view('admin_views.admin_home', compact('user','tokens'));
        $response = response()->view('admin_views.admin_home', compact('user'));
        $response->header('Cache-Control', 'no-cache, no-store, must-revalidate');
        $response->header('Pragma', 'no-cache');
        $response->header('Expires', '0');
        
    return $response;
    }
    public function dev(){
        return view('admin_views.dev');
    }
}
