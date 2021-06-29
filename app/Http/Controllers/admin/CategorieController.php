<?php

namespace App\Http\Controllers\admin;
use App\Models\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
     $cate= categories::all();
     dd($cate);
    }
}
