<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorController extends Controller
{
    function index(){
        return view("admin/investor/index");
    }

    function detail(){
        return view("admin/investor/detail");
    }
}
