<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    public function index(){
        $all_dresses = Dress::all();
        //return view('',['dresses'=>$all_dresses]);
        dd($all_dresses);

    }

}
