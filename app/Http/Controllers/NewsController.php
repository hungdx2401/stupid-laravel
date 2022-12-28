<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(Request $request){
//        dd($request->input('page'));
//        dd($request->input('limit'));
        return view("admin/news/index", ['list' => News::all()]);
    }

    function detail($id){
        dd($id);
        return view("admin/news/detail");
    }

    function create(){
        return view("admin/news/form");
    }

    function store(StoreNewsRequest $request){
        $request->validated();
        $news = new News();
        $news->title = $request->input("title");
        $news->content = $request->input("content");
        $news->status = $request->input("status");
        $news->save();
        return redirect('/news');
    }
}
