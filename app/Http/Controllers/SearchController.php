<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->top_search;
        $result = DB::table('posts')->select('*')->where('title', "like", '%'. $search.'%')->get();
        return view('search', compact('result'));
    }
    public function show($id){
//        $result = DB::table('posts')->select('*')->where('id', '=', $id)->first();
        $result = Post::where('id', '=', $id)->first();
        $result->increment('count_view', + 1);
        return view('search_view', compact('result'));
    }
}
