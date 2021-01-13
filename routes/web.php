<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Charter;
use App\Chief;
use App\Sport;
use App\Department;
use App\Relation;
use App\Section;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Post;

Route::get('/', function () {
    $posts = Post::where('status', '=', 'published')->latest()->paginate(6);
    return view('welcome',compact('posts'));
});


Route::get('news', function () {
    $posts = Post::where('status', '=', 'published')->orderBy('created_at','desc')->paginate(5);
    return view('news', compact('posts'));
});

Route::get('/news/{id}', function ($id) {

    $singlepost = Post::findOrFail($id);

    $same_posts = Post::all()->where('category_id', '=', $singlepost->category_id);

    $postviews = Post::where('id', $id )->first();

    $postviews->increment('count_view', + 1);

    return view('post', compact('singlepost', 'same_posts','postviews'));

})->name('new.index');

Route::get('relations', function () {
    $relations =   Relation::all();
    return view('relation', compact('relations'));
});

Route::get('symbols', function () {
    return view('symbols');
});


Route::get('structure', function () {
    $departments = Department::all();
    $kadrs = Section::All();
    $sports = Sport::all();
    $boss = Chief::all();
    return view('structure', compact('departments','kadrs','sports','boss'));
});



Route::get('/contact/create', 'ContactController@index')->name('contact.index');


Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/search', 'SearchController@search')->name('search');
Route::get('/search/{id}', 'SearchController@show')->name('show');





Route::get('charter', function () {
    $charters = Charter::all()->first();
    return view('charter', compact('charters'));
});

Route::get('post',  function ()  {
    return view('post');
});



Route::group(['prefix' => 'sportedu'], function () {
    Voyager::routes();
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');
