<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function article(){
    return view ('frontend.articles.article');
    }

    public function minidoll(){
    return view ('frontend.articles.minidoll');
    }
    
    public function nendoroid(){
    return view ('frontend.articles.nendoroid');
    }
    public function shikishi(){
    return view ('frontend.articles.shikishi');
    }
}