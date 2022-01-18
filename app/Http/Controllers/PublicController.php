<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PublicController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
    return view ('frontend.index');
    }

    public function contact(){
        return view ('frontend.contact');
    }

    public function about(){
        return view ('frontend.about');
    }

    public function login(){
        return view ('masuk.login');
        }
    
        public function register(){
        return view ('masuk.register');
        }
}